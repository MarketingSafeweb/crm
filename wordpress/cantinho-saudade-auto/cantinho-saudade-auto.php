<?php
/**
 * Plugin Name: Cantinho da Saudade – Publicação automática
 * Description: Envios do formulário do Cantinho da Saudade (Elementor) viram fotos na Mídia e aparecem automaticamente na galeria da página.
 * Version:     1.0.0
 * Author:      GardenPet
 */

defined( 'ABSPATH' ) || exit;

const CSA_PAGE_ID   = 1246;      // Página "Cantinho da Saudade".
const CSA_FORM_ID   = 'ba3e11d'; // Widget de formulário da página.
const CSA_FIELD_PET = 'field_1923f6d';
const CSA_FIELD_NAS = 'field_58f275f';
const CSA_FIELD_PAR = 'field_674c7ea';
const CSA_FIELD_IMG = 'field_9aa12fa';
const CSA_META      = '_cantinho_saudade';

/**
 * Envio do formulário -> anexo na Biblioteca de Mídia.
 */
add_action( 'elementor_pro/forms/new_record', function ( $record ) {
	if ( CSA_FORM_ID !== $record->get_form_settings( 'id' ) ) {
		return;
	}

	$files = $record->get( 'files' );
	$paths = isset( $files[ CSA_FIELD_IMG ]['path'] ) ? array_filter( (array) $files[ CSA_FIELD_IMG ]['path'] ) : [];
	if ( ! $paths ) {
		return; // Sem foto, nada para publicar.
	}

	$fields = $record->get( 'fields' );
	$val    = static function ( $id ) use ( $fields ) {
		return isset( $fields[ $id ]['value'] ) ? sanitize_text_field( $fields[ $id ]['value'] ) : '';
	};
	$pet    = $val( CSA_FIELD_PET );
	$tutor  = $val( 'name' );
	$datas  = trim( $val( CSA_FIELD_NAS ) . ' – ' . $val( CSA_FIELD_PAR ), ' –' );
	$msg    = isset( $fields['message']['value'] ) ? sanitize_textarea_field( $fields['message']['value'] ) : '';

	require_once ABSPATH . 'wp-admin/includes/image.php';

	foreach ( $paths as $path ) {
		$type = wp_check_filetype( $path );
		if ( ! file_exists( $path ) || 0 !== strpos( (string) $type['type'], 'image/' ) ) {
			continue;
		}
		$upload = wp_upload_bits( wp_basename( $path ), null, file_get_contents( $path ) );
		if ( ! empty( $upload['error'] ) ) {
			continue;
		}
		$id = wp_insert_attachment( [
			'post_title'     => $pet ? $pet : $tutor,
			'post_excerpt'   => $pet,                                         // Legenda exibida na galeria.
			'post_content'   => trim( "$datas\n\n$msg\n\nEnviado por: $tutor" ),
			'post_mime_type' => $type['type'],
			'post_status'    => 'inherit',
		], $upload['file'], CSA_PAGE_ID );
		if ( is_wp_error( $id ) || ! $id ) {
			continue;
		}
		wp_update_attachment_metadata( $id, wp_generate_attachment_metadata( $id, $upload['file'] ) );
		update_post_meta( $id, CSA_META, 1 );
	}

	do_action( 'litespeed_purge_post', CSA_PAGE_ID ); // Limpa o cache da página.
} );

/**
 * Coloca as fotos enviadas no início da galeria existente da página.
 */
add_action( 'elementor/frontend/widget/before_render', function ( $widget ) {
	if ( 'gallery' !== $widget->get_name() || CSA_PAGE_ID !== (int) get_queried_object_id() ) {
		return;
	}
	$ids = get_posts( [
		'post_type'      => 'attachment',
		'post_status'    => 'inherit',
		'posts_per_page' => -1,
		'fields'         => 'ids',
		'meta_key'       => CSA_META,
		'meta_value'     => 1,
		'orderby'        => 'date',
		'order'          => 'DESC',
	] );
	if ( ! $ids ) {
		return;
	}
	$gallery  = (array) $widget->get_settings( 'gallery' );
	$existing = wp_list_pluck( $gallery, 'id' );
	$new      = [];
	foreach ( $ids as $id ) {
		if ( ! in_array( $id, $existing, true ) && ! in_array( (string) $id, $existing, true ) ) {
			$new[] = [ 'id' => $id, 'url' => wp_get_attachment_url( $id ) ];
		}
	}
	if ( $new ) {
		$widget->set_settings( 'gallery', array_merge( $new, $gallery ) );
	}
} );

/**
 * Coluna "Cantinho" na Mídia: mostra quais fotos vieram do formulário.
 * Para tirar uma foto da galeria, basta excluí-la da Biblioteca de Mídia.
 */
add_filter( 'manage_media_columns', function ( $cols ) {
	$cols['cantinho'] = 'Cantinho';
	return $cols;
} );
add_action( 'manage_media_custom_column', function ( $col, $id ) {
	if ( 'cantinho' === $col && get_post_meta( $id, CSA_META, true ) ) {
		echo '✔';
	}
}, 10, 2 );
