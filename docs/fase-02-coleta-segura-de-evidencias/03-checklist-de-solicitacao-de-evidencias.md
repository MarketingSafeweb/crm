# 03 — Checklist de Solicitação de Evidências

> **Data:** 2026-07-14 · O que pedir, de quem, em que forma (mínima), para validar cada hipótese/bloqueio. **Preferir sempre metadados** (classe C0/C1). Referências: hipóteses `HE01–HE35` e bloqueios `BL1–BL5` da Fase 2.

## Como usar
Para cada item: solicitar ao **dono do sistema** a evidência na **forma mínima** indicada, registrar em `04`, e atualizar `../fase-02-inventario-e-evidencias/10-validacao-das-hipoteses.md`.

## A. Inventário de sistemas (BL1)
- [ ] Lista de sistemas que armazenam dados de clientes/parceiros — preencher `templates/template-inventario-sistema.csv` (metadados). **Forma:** C1.
- [ ] Para cada sistema: dono técnico e de negócio, fornecedor, ambiente, status. **Forma:** C0/C1.
- [ ] Volume estimado por sistema (contagem aproximada). **Forma:** C1 agregado. *(valida HE35, BL4)*

## B. Fontes e schema (BL1, BL2, HE01–HE10, HE28–HE30)
- [ ] Schema/DDL de cada base (nomes de tabelas/colunas, tipos, chaves) — **sem linhas de dados**. **Forma:** C1. → `template-fonte-de-dados.csv` + `template-dicionario-de-dados.csv`.
- [ ] Estatísticas de qualidade por campo-chave: % de nulos, cardinalidade, % fora de formato. **Forma:** C1 agregado. *(valida HE02, HE07)*
- [ ] Teste de duplicidade via **hash** de CPF/CNPJ/e-mail (colisões, não valores). **Forma:** C1. *(valida HE01, HE02)*
- [ ] Presença de datas de início/fim em tabelas de vínculo. **Forma:** C1. *(valida HE04, HE11-temporal)*
- [ ] Existência de fonte-mestre/MDM. **Forma:** C1. *(valida HE05)*

### Supabase (BL2) — requer autorização
- [ ] Metadados do projeto `fjnogxhfiikrxkhovpzm`: lista de tabelas, políticas **RLS** por tabela, região do projeto. **Forma:** C1.
- [ ] **Como:** autorizar o conector Supabase (MCP `read_only`) numa sessão interativa, **ou** exportar o schema via painel. *(valida SEC-02, PRV-01)*
- [ ] ⚠️ **Não** exportar dados das tabelas — só schema/políticas.

## C. Integrações (HE31, HE32)
- [ ] Lista de integrações entre sistemas — `template-integracao.csv` (categorias de dado, direção, protocolo). **Forma:** C1/C2 resumo.
- [ ] Contratos/documentação de API (sem chaves). **Forma:** C2 no ambiente seguro.

## D. Segurança (HE11–HE15, SEC-*)
- [ ] Matriz de perfis de acesso (papéis × permissões) — **sem** identificar pessoas por dado pessoal. **Forma:** C2, ambiente seguro. *(valida HE11)*
- [ ] Existência e escopo de logs de auditoria de acesso/alteração. **Forma:** C1 descritivo. *(valida HE12)*
- [ ] Processo de revogação de acesso (joiner/mover/leaver). **Forma:** C1. *(valida HE13)*
- [ ] Modelo de isolamento de dados entre parceiros. **Forma:** C1. *(valida HE14)*
- [ ] Política de classificação de dados. **Forma:** C0/C1. *(valida HE15)*

## E. LGPD e governança (HE16–HE20, PRV-*)
- [ ] **ROPA / Registro de Operações de Tratamento** — `template-ropa.csv`. **Forma:** C1. *(valida HE16)*
- [ ] Mecanismo e registro de **consentimento** (descrição, não os registros). **Forma:** C1. *(valida HE17)*
- [ ] Processo de atendimento a titulares (acesso/correção/exclusão) e SLA. **Forma:** C1. *(valida HE18)*
- [ ] Requisitos de **retenção da ICP-Brasil** (documento oficial) + posição sobre conflito com exclusão LGPD. **Forma:** C1 + parecer. *(valida HE19)*
- [ ] **DPA/contratos** com operadores (Supabase e outros) e definição **controlador × operador** nos casos de parceiro. **Forma:** C2, ambiente seguro. *(valida HE20, PRV-02)*
- [ ] Política de privacidade publicada. **Forma:** C0.
- [ ] Identificação do **DPO**. **Forma:** C0.

## F. Comercial / atendimento / financeiro (HE21–HE29)
- [ ] Descrição do funil e campos de origem de lead — `template-dicionario-de-dados.csv`. *(valida HE21)*
- [ ] Regras de propriedade de cliente (direto × parceiro) e comissionamento. **Forma:** C1. *(valida HE22)*
- [ ] Estatística de contatos sobrepostos por cliente (agregada). *(valida HE23)*
- [ ] Modelo de relação cliente↔pagador↔usuário e produto↔empresa↔usuário. *(valida HE28, HE29)*

## G. Definições de negócio (BL5)
- [ ] Glossário oficial: o que a Safeweb chama de cliente, contato, usuário, pagador, parceiro, conta. **Forma:** C0. *(decisão humana DC5)*

## Critério de "coleta suficiente" para reavaliar o gate
Reavaliar o gate da Fase 2 quando **A, B (incl. Supabase), D e E** estiverem preenchidos com evidência C1 verificável, e o DPO tiver aprovado a base legal da coleta.
