# 02 — Inventário de Sistemas

> **Data:** 2026-07-14 · **Regra aplicada:** nenhum sistema é afirmado como "em uso" sem evidência. Campos sem evidência = **Não determinável (ND)**. Sistemas do §5 do enunciado sem artefato no repositório aparecem como **"Apenas mencionado / Sem evidência"**.

## A. Fichas de sistemas COM evidência no ambiente

### Sistema S1 — Aplicação CRM (Next.js) *(o próprio repositório)*
| Campo | Valor | Classificação |
|-------|-------|---------------|
| Nome | Aplicação web CRM (embrião) | Fato |
| Categoria | Aplicação web / futuro CRM | Fato |
| Finalidade | Base do futuro CRM da Safeweb | Fato |
| Área responsável | ND | Informação ausente |
| Responsável técnico | ND | Informação ausente |
| Responsável de negócio | ND | Informação ausente |
| Fornecedor/stack | Next.js 16.2.10, React 19.2.4, TS 5, Tailwind 4 | Fato (`package.json`) |
| Ambiente | Desenvolvimento (scaffold; `title: "Create Next App"`) | Fato / Inferência |
| Status | Inicialização (greenfield) | Fato |
| Usuários | Nenhum (sem funcionalidade de negócio) | Inferência |
| Perfis de acesso | ND (depende de Supabase Auth/RLS) | Informação ausente |
| Dados armazenados | Nenhum no repositório | Fato |
| Dados pessoais / sensíveis / financeiros | Nenhum presente | Fato |
| Integração | Supabase (Auth/DB) via SDK | Fato |
| Exportação | ND | Informação ausente |
| Dependências | Supabase; (host provável Vercel) | Fato / Inferência |
| Limitações | Sem domínio de negócio implementado | Fato |
| Riscos | `.env` versionado (R-SEC-01) | Fato (ver `08`) |
| Evidências | `src/**`, `package.json`, `.env`, `.gitignore` | — |
| Lacunas | Toda a lógica de negócio | — |
| Criticidade | **Alto** (será o núcleo do CRM) | Inferência |

### Sistema S2 — Supabase (Auth + Postgres gerenciado)
| Campo | Valor | Classificação |
|-------|-------|---------------|
| Nome | Supabase (projeto `fjnogxhfiikrxkhovpzm`) | Fato (`.mcp.json`) |
| Categoria | BaaS: banco Postgres gerenciado + Auth + APIs | Inferência (produto Supabase) |
| Finalidade | Persistência e autenticação do CRM | Fato (código usa Auth; DB implícito) |
| Fornecedor | Supabase | Fato |
| Ambiente | ND (URL não reproduzida) | Informação ausente |
| Status | Ativo/conectado (MCP configurado, `read_only=true`) | Fato |
| Perfis de acesso | Depende de RLS — **não inspecionável** | Informação ausente / Risco |
| Dados armazenados | ND (schema não lido) | Informação ausente |
| Dados pessoais/sensíveis | ND (potencial, dado o domínio) | Hipótese |
| Autenticação | Supabase Auth; chave **publishable** no cliente | Fato |
| Integração | SDK `@supabase/ssr`/`supabase-js`; MCP HTTP | Fato |
| Dependências | Serviço externo (fornecedor) | Fato |
| Limitações | Segurança depende de RLS bem configurada | Inferência |
| Riscos | R-SEC-02 (RLS não confirmada); dependência de fornecedor | Fato/Risco |
| Evidências | `.mcp.json`, `src/lib/supabase/*` | — |
| Lacunas | Schema, tabelas, políticas, volumes | — |
| Criticidade | **Crítico** (guardará todos os dados) | Inferência |

### Sistema S3 — GitHub (repositório `MarketingSafeweb/crm`)
| Campo | Valor | Classificação |
|-------|-------|---------------|
| Finalidade | Versionamento do código do CRM | Fato (contexto) |
| Status | Ativo | Fato |
| Risco | `.env` versionado expõe config no histórico | Fato (R-SEC-01) |
| Criticidade | **Alto** | Inferência |

### Sistema S4 — Vercel (host pretendido)
| Campo | Valor | Classificação |
|-------|-------|---------------|
| Finalidade | Hospedagem do app Next.js | Inferência (`README.md` padrão) |
| Status | **Apenas mencionado** (sem `vercel.json`/deploy confirmado) | Evidência parcial |
| Criticidade | ND | Não determinável |

## B. Sistemas do §5 SEM evidência no ambiente

> **Regra 9/10:** não inventar sistemas nem integrações. Todos abaixo = **"Apenas mencionado no enunciado / Sem evidência / Não determinável"**. Ficam registrados como *candidatos a inventariar* na coleta futura, **não** como sistemas confirmados.

| Sistema (enunciado) | Categoria presumida | Evidência no ambiente | Status |
|---------------------|---------------------|-----------------------|--------|
| Piperun | CRM/funil comercial | Nenhuma | Sem evidência |
| Zendesk | Atendimento/tickets | Nenhuma | Sem evidência |
| Webflow | Site/CMS | Nenhuma | Sem evidência |
| E-commerce / Checkout | Vendas online | Nenhuma | Sem evidência |
| Infobip | Comunicação/omnichannel | Nenhuma | Sem evidência |
| WhatsApp | Mensageria | Nenhuma | Sem evidência |
| Mautic | Automação de marketing | Nenhuma | Sem evidência |
| Sistemas de emissão de certificados | Operação ICP-Brasil | Nenhuma | Sem evidência |
| Portais de parceiros / Portal do Contador | Canal | Nenhuma | Sem evidência |
| Sistemas de AR / Pontos de Atendimento | Operação | Nenhuma | Sem evidência |
| Financeiro / Faturamento / Cobrança | ERP/financeiro | Nenhuma | Sem evidência |
| GA4 / Google Tag Manager / Search Console | Analytics | Nenhuma | Sem evidência |
| Microsoft Clarity | Analytics de UX | Nenhuma | Sem evidência |
| Planilhas / DW / Data Lake / BI | Dados | Nenhuma | Sem evidência |
| APIs / Serviços de autenticação / Identidade | Diversos | Nenhuma (exceto Supabase Auth) | Sem evidência |

## C. Tabela consolidada (apenas sistemas com evidência)

| Sistema | Finalidade | Responsável | Dados principais | Integrações | Criticidade | Evidência | Lacunas |
|---------|-----------|-------------|------------------|-------------|:---:|-----------|---------|
| S1 App Next.js | Núcleo do CRM (embrião) | ND | Nenhum ainda | Supabase | Alto | `src/**`, `package.json` | Todo o domínio |
| S2 Supabase | Persistência + Auth | ND | ND (schema não lido) | App; MCP | Crítico | `.mcp.json`, `src/lib/supabase/*` | Schema, RLS, volumes |
| S3 GitHub | Versionamento | ND | Código + `.env` versionado | — | Alto | contexto | Governança de segredos |
| S4 Vercel | Host (pretendido) | ND | — | App | ND | `README.md` | Confirmação de uso |

> **Volumes:** **não determináveis** — nenhuma evidência de volume em qualquer sistema (regra 11: não inventar volumes).
