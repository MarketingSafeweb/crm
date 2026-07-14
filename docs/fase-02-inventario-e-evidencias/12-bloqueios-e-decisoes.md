# 12 — Bloqueios e Decisões

> **Data:** 2026-07-14 · Consolida bloqueios, contradições, ausências e decisões necessárias, mais a **rodada de contestação do Auditor de Evidências** (§17–18).

## Agentes especializados da fase — síntese (§17)

> Cada agente analisou o **ambiente real**. Análise de agente **não é evidência** (regra 20) — apenas organiza o diagnóstico.

| Agente | Conclusão principal (sobre o ambiente) | Classificação |
|--------|----------------------------------------|---------------|
| Inventário de Sistemas | Só há evidência de App Next.js, Supabase, GitHub; Vercel inferido. Demais sistemas sem evidência. | Fato + Informação ausente |
| Dados | Nenhuma fonte de negócio; schema Supabase não lido. Qualidade não analisável. | Informação ausente |
| Integrações | Só App⇄Supabase e MCP⇄Supabase confirmadas. Demais hipotéticas. | Fato + Hipótese |
| Segurança | Achados SEC-01 (`.env` versionado) e SEC-02 (RLS não confirmada). | Fato + Risco |
| LGPD | Nada documentado no repo; riscos de transferência internacional e retenção×exclusão. | Não documentado + Potencial risco |
| Arquitetura | App é greenfield sem domínio de negócio; base Supabase Auth adequada como ponto de partida. | Fato + Inferência |
| Operações | Nenhum processo operacional evidenciável. | Informação ausente |
| Auditor de Evidências | Impede tratar hipóteses/ausências como fatos (ver contestação abaixo). | — |

## Rodada de contestação — Auditor de Evidências (§18)

| # | Pergunta | Resposta |
|---|----------|----------|
| 1 | Quais sistemas foram apresentados sem evidência? | Todos os do §5, exceto Supabase, App Next.js e GitHub. Vercel é apenas inferido. **Nenhum sistema de negócio tem evidência.** |
| 2 | Quais integrações foram apenas presumidas? | Todas as de negócio (Piperun, Zendesk, e-commerce, emissão, marketing, financeiro, analytics). Confirmadas: apenas App⇄Supabase e MCP⇄Supabase. |
| 3 | Quais classificações de qualidade não têm dados suficientes? | **Todas** as de dados de negócio — marcadas "Não analisável". Nenhum percentual foi inventado. |
| 4 | Quais riscos foram classificados sem justificativa? | Nenhum: cada risco tem evidência/origem. R-SEC-02 e PRV-01 estão marcados como "não confirmável/ND" onde aplicável. |
| 5 | Quais conclusões de segurança dependem de análise adicional? | SEC-02 (RLS) e SEC-03/04 (auditoria/autorização) exigem leitura do schema e da arquitetura futura. |
| 6 | Quais conclusões jurídicas exigem validação humana? | Todas de LGPD (transferência internacional, retenção×exclusão, operador/DPA, sensíveis/biométricos). Nenhum parecer foi emitido. |
| 7 | Quais entidades foram propostas sem vínculo com problema real? | O catálogo (`04`) é conceitual e derivado do domínio/Fase 1; **não** foi validado por dados — está rotulado como conceitual, a validar. |
| 8 | Quais dados não têm finalidade documentada? | **Todos** — não há ROPA/finalidade no ambiente (Q13, HE16). |
| 9 | Quais fontes podem estar desatualizadas? | O código do scaffold e os docs da Fase 1 são recentes; o **legado é inacessível**, logo sua atualidade é ND. Não assumir docs como atualizados (regra 13). |
| 10 | Quais contradições permanecem sem solução? | Nenhuma contradição **entre evidências** (há poucas evidências). Permanece o **conflito conceitual** retenção ICP-Brasil × exclusão LGPD (não resolúvel sem jurídico). |

## Bloqueios da Fase 2

| ID | Bloqueio | Por que bloqueia | Como desbloquear |
|----|----------|------------------|------------------|
| BL1 | Ausência do legado no ambiente | Impede inventariar sistemas/fontes/integrações reais e validar hipóteses | Coleta segura de inventário, schemas, contratos, exportações (com minimização) |
| BL2 | Schema do Supabase não inspecionável | Impede avaliar dados, RLS, entidades | Autorizar MCP Supabase (sessão interativa) ou fornecer export de metadados |
| BL3 | Sem documentação de LGPD/segurança | Impede avaliar conformidade e controles | Fornecer política de privacidade, ROPA, DPA, matriz de acessos |
| BL4 | Sem baseline (volumes/métricas) | Impede priorização por evidência | Fornecer volumes por sistema |
| BL5 | Definições de negócio ambíguas | Impede consolidar catálogo/identidade | Workshop de definições (decisão humana) |

## Contradições
- **Entre evidências:** nenhuma (base de evidência pequena).
- **Conceitual em aberto:** retenção ICP-Brasil × exclusão LGPD (herdada; requer jurídico).

## Informações ausentes (resumo)
Inventário de sistemas; schemas/dados; integrações de negócio; volumes; políticas de LGPD/segurança; matriz de acessos; contratos de operador; região do Supabase; DPO; definições de negócio. *(Detalhes nos arquivos 01–11.)*

## Decisões necessárias (humanas)

| # | Decisão | Quem | Depende de |
|---|---------|------|-----------|
| DC1 | Autorizar coleta de evidências do legado (com minimização/segurança) | Gestão + Segurança + DPO | — |
| DC2 | Corrigir SEC-01 (remover `.env` do Git, auditar histórico) | Tech Lead/Segurança | — (acionável já) |
| DC3 | Confirmar/estabelecer RLS no Supabase e a região do projeto | Tech Lead/Segurança | DC1 |
| DC4 | Emitir posição jurídica (transferência internacional, retenção×exclusão, operador) | Jurídico/DPO | DC1 |
| DC5 | Aprovar definições de negócio (cliente/empresa/usuário/pagador/parceiro) | Negócio + Dados | BL5 |
| DC6 | Nomear responsáveis (governança de dados, DPO) | Diretoria | — |

## Dependências externas
Supabase (fornecedor/operador; região); autorização de acesso ao schema; disponibilidade das áreas para fornecer evidências.
