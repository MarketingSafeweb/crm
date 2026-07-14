# 11 — Matriz de Criticidade

> **Data:** 2026-07-14 · Prioriza sistemas, fontes e integrações **com evidência**. **Não é média matemática** (§19): riscos críticos de segurança ou LGPD podem elevar a prioridade independentemente dos demais critérios. Escala por critério: 0–3. Classe final por julgamento justificado.

## Critérios
Impacto no negócio · Impacto no cliente · Sensibilidade dos dados · Risco de segurança · Risco jurídico · Volume · Frequência de uso · Dependência operacional · Qualidade atual · Facilidade de validação · Dependência de fornecedor · Complexidade de integração.

## A. Sistemas (com evidência)

| Sistema | Neg. | Cli. | Sensib. | R.Seg | R.Jur | Vol. | Freq. | Dep.Op | Qual. | Fácil validar | Dep.Forn | Complex. | Classe |
|---------|:--:|:--:|:--:|:--:|:--:|:--:|:--:|:--:|:--:|:--:|:--:|:--:|:--:|
| S2 Supabase (Auth+DB) | 3 | 3 | 3 | 3 | 3 | ND | 3 | 3 | ND | 2 | 3 | 2 | **Crítico** |
| S1 App Next.js (CRM) | 3 | 3 | 2 | 2 | 2 | 0 | 2 | 3 | Boa | 3 | 1 | 2 | **Alto** |
| S3 GitHub | 2 | 1 | 2 | 2 | 1 | ND | 3 | 2 | Boa | 3 | 2 | 1 | **Alto** (por SEC-01) |
| S4 Vercel (host inferido) | 2 | 2 | 1 | 1 | 1 | ND | 2 | 2 | ND | 2 | 2 | 1 | **Médio / ND** |

> **Justificativa S2 = Crítico:** concentrará todos os dados pessoais; segurança depende de RLS não confirmada (R-SEC-02) e há risco jurídico de transferência internacional (PRV-01). Os riscos de **segurança e LGPD elevam a criticidade** independentemente do volume (ainda ND).
> **Justificativa S3 = Alto:** o achado SEC-01 (`.env` versionado) transforma o repositório em vetor de exposição de segredos — eleva a prioridade acima do que "importância funcional" sugeriria.

## B. Fontes de dados (com evidência)

| Fonte | Sensib. | R.Seg | R.Jur | Qual. | Fácil validar | Classe | Justificativa |
|-------|:--:|:--:|:--:|:--:|:--:|:--:|---------------|
| FD2 Supabase DB (schema/dados) | 3 | 3 | 3 | ND | 1 (bloqueado) | **Crítico** | Guardará dados pessoais; RLS não confirmada; inacessível nesta sessão. |
| FD1 `.env` | 1 | 2 | 1 | N/A | 3 | **Alto** | Versionado (SEC-01); acionável. |
| FD3 Código/config | 1 | 1 | 1 | Boa | 3 | **Baixo** | Sem dado sensível (exceto `.env`). |

## C. Integrações (com evidência)

| Integração | R.Seg | R.Jur | Dep.Forn | Complex. | Status | Classe |
|-----------|:--:|:--:|:--:|:--:|--------|:--:|
| INT1 App ⇄ Supabase | 3 | 3 | 3 | 2 | Confirmada | **Crítico** |
| INT2 MCP ⇄ Supabase (read-only) | 1 | 1 | 3 | 1 | Confirmada (não usável sem auth) | **Médio** |

> Integrações de negócio (Piperun, Zendesk, etc.): **não priorizáveis** — sem evidência. Entram como itens de coleta.

## D. Ranking consolidado (o que priorizar já)

| # | Item | Classe | Ação imediata |
|---|------|:--:|---------------|
| 1 | Supabase DB + RLS (S2/FD2/INT1) | **Crítico** | Confirmar RLS e região **antes** de dados reais (SEC-02, PRV-01). |
| 2 | `.env` versionado (FD1/S3) | **Alto** | Remover do Git e auditar histórico (SEC-01). |
| 3 | App Next.js (S1) | **Alto** | Definir autorização/auditoria por design. |
| 4 | Sistemas/fontes de negócio | **ND (bloqueado)** | Coletar evidências (não inventar). |

## Lógica de priorização (explícita)
1. **Segurança e LGPD têm poder de veto sobre a ordem** — por isso Supabase/RLS e `.env` sobem, mesmo com volume/qualidade "ND".
2. **Facilidade de validação** desempata ações imediatas: SEC-01 é corrigível agora; SEC-02 depende de autorização.
3. Itens **sem evidência não são priorizados** — priorizá-los seria inventar (regras 9–11).
