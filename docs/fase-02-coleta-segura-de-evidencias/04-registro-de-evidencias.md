# 04 — Registro de Evidências (Cadeia de Custódia)

> **Data:** 2026-07-14 · Todo item de evidência coletado é registrado aqui **antes** da análise. Garante rastreabilidade (quem, o quê, quando, classificação, base legal, descarte). O registro em si é **C0/C1** — **não** contém dado pessoal, apenas referências.

## Como registrar
Uma linha por evidência. **Nunca** cole conteúdo C3/C4 aqui — apenas a **referência** ao item guardado no ambiente seguro.

| Campo | Descrição |
|-------|-----------|
| ID | Identificador sequencial (EV-001, EV-002…) |
| Data | Data de recebimento |
| Hipótese/BL | Qual hipótese/bloqueio a evidência testa (ex.: HE02, BL2) |
| Sistema origem | De onde veio |
| Descrição | O que é (ex.: "DDL da tabela de cadastro", "estatística de nulos") |
| Forma/Classe | Metadado/agregado/amostra-fictícia/pseudonimizado + classe C0–C4 |
| Local | Onde reside (repo `templates/` **ou** ambiente seguro — nunca dado real no repo) |
| Fornecedor | Papel que depositou |
| Base legal | Para dado pessoal; aprovada pelo DPO |
| Retenção/Descarte | Prazo e status (ativo/descartado) |
| Resultado | Confirmada / Parcial / Refutada / Contraditória / Não testável |

## Registro (preencher durante a coleta — vazio por enquanto)

| ID | Data | Hip/BL | Sistema | Descrição | Forma/Classe | Local | Fornecedor | Base legal | Retenção | Resultado |
|----|------|--------|---------|-----------|--------------|-------|------------|-----------|----------|-----------|
| _(sem evidências registradas — coleta ainda não iniciada)_ | | | | | | | | | | |

## Exemplo ILUSTRATIVO (fictício — não é evidência real)

| ID | Data | Hip/BL | Sistema | Descrição | Forma/Classe | Local | Fornecedor | Base legal | Retenção | Resultado |
|----|------|--------|---------|-----------|--------------|-------|------------|-----------|----------|-----------|
| EV-000 *(fictício)* | 2026-01-01 | HE02 | *(exemplo)* Sistema X | Contagem de colisões de hash de e-mail | Agregado / C1 | Ambiente seguro | Dono do sistema | N/A (agregado) | 30 dias | (pendente) |

> A linha acima é **apenas um exemplo de preenchimento**, claramente fictícia (regra: não inventar dados/sistemas reais). Remova-a ao iniciar o registro real.

## Baixa e descarte
Ao concluir a análise de uma evidência, atualizar o campo **Retenção/Descarte** para "descartado em <data>" e refletir o resultado em `../fase-02-inventario-e-evidencias/10-validacao-das-hipoteses.md`.
