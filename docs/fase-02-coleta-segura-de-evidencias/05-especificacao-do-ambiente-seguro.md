# 05 — Especificação do Ambiente Seguro (a provisionar)

> **Data:** 2026-07-14 · **Requisitos** do ambiente técnico onde as evidências (inclusive C2/C3 pseudonimizadas) serão depositadas e analisadas. **Não seleciona tecnologia definitiva** (regra da fase) — descreve capacidades e apresenta **opções**. A provisão é **ação humana/infra**, não executável nesta sessão.

## Requisitos funcionais mínimos

| # | Requisito | Por quê |
|---|-----------|---------|
| RF1 | Armazenamento com **cifragem em repouso** e **em trânsito (TLS)**. | Proteger C2/C3. |
| RF2 | **IAM com privilégio mínimo** e acesso temporário (JIT), com MFA. | Segregação e revogação. |
| RF3 | **Trilha de auditoria imutável** de acesso/depósito/leitura. | Rastreabilidade (HE12). |
| RF4 | **Isolamento de rede** (rede privada; sem exposição pública do storage). | Reduzir superfície. |
| RF5 | **Segregação por classe** (áreas separadas para C1, C2, C3-pseudonimizado). | Minimização. |
| RF6 | **Descarte seguro** com registro. | Retenção/LGPD. |
| RF7 | **Nenhuma integração com IA de terceiros.** | Privacidade (fase futura). |
| RF8 | Localização de dados **no Brasil** (ou base legal explícita para transferência). | LGPD (PRV-01). |

## Opções de provisão (comparação — decisão humana)

| Opção | Prós | Contras | Observação |
|-------|------|---------|-----------|
| **A. Projeto Supabase/Postgres dedicado só à análise**, isolado da produção | Reaproveita stack já presente; RLS; cifragem gerenciada | Requer configurar região BR e RLS; risco de misturar com produção se não isolado | Coerente com o ambiente atual; **confirmar região e RLS** (SEC-02/PRV-01) |
| **B. Bucket/objeto cifrado em nuvem (região BR) + IAM** | Simples para arquivos/metadados; barato | Menos adequado para consulta analítica | Bom para templates preenchidos e documentos C2 |
| **C. Enclave/VM isolada com disco cifrado, sem internet de saída** | Máximo isolamento para C3 | Mais custo/operação | Indicado se houver dado pseudonimizado volumoso |
| **D. Data clean room / ambiente de analytics gerenciado** | Governança forte, auditoria nativa | Custo; curva de adoção | Para etapas futuras de maior escala |

> **Recomendação preliminar (não definitiva):** começar com **B** (documentos/metadados C1/C2) + **A isolado** (se precisar consultar metadados de schema), mantendo **C3 fora** do repo e sob pseudonimização. Validar com Segurança/DPO.

## Controles de segurança exigidos (checklist de provisão)
- [ ] Cifragem em repouso e em trânsito (RF1)
- [ ] IAM com MFA + acesso temporário (RF2)
- [ ] Logs de auditoria imutáveis e monitorados (RF3)
- [ ] Rede privada / storage sem acesso público (RF4)
- [ ] Áreas segregadas por classe de dado (RF5)
- [ ] Rotina de descarte seguro (RF6)
- [ ] Bloqueio de saída para serviços de IA de terceiros (RF7)
- [ ] Região de dados no Brasil ou base legal de transferência documentada (RF8)
- [ ] Contas de serviço somente-leitura para sistemas de origem, revogáveis
- [ ] Backup cifrado do ambiente de análise (com prazo)

## Integração com o repositório
- O repositório guarda **apenas** o framework e templates preenchidos com **C0/C1**.
- A barreira `_evidencias-brutas/` (ignorada pelo Git) evita depósitos acidentais.
- Qualquer C2 resumido que entre no repo deve ser **revisado** antes do commit.

## O que falta para o ambiente existir de fato
1. **Decisão de provisão** (opção A/B/C/D) — Segurança + Infra.
2. **Aprovação de base legal e prazos** — DPO/Jurídico.
3. **Nomeação de responsáveis** (RACI de `02`) — Diretoria (DC6).
4. **Autorização do Supabase** para leitura de metadados (BL2).

> Enquanto 1–4 não ocorrerem, o ambiente seguro existe como **especificação e framework** (este conjunto de documentos), pronto para ser provisionado — mas **sem** dados reais, por design.
