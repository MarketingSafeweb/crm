# 03 — Inventário de Fontes de Dados

> **Data:** 2026-07-14 · **Distinção sistema × fonte:** um sistema pode conter várias fontes (tabelas, coleções, relatórios, APIs). Aqui só se registram fontes **com evidência**. Classificação de qualidade sempre com critério explícito.

## Fontes de dados COM evidência no ambiente

### FD1 — Variáveis de ambiente (`.env`)
| Campo | Valor | Classificação |
|-------|-------|---------------|
| Nome | `.env` | Fato |
| Sistema de origem | Aplicação Next.js (S1) | Fato |
| Tipo / Formato | Arquivo de configuração `KEY=VALUE` | Fato |
| Entidades representadas | Configuração de conexão (não são dados de negócio) | Fato |
| Campos principais | `NEXT_PUBLIC_SUPABASE_URL`, `NEXT_PUBLIC_SUPABASE_PUBLISHABLE_KEY` | Fato (valores não reproduzidos) |
| Identificadores/Chaves | — | — |
| Histórico | Presente no histórico do Git (por estar versionado) | Fato / Risco |
| Sensibilidade | Chaves `publishable` (públicas por design); baixo sigilo | Inferência |
| Base legal / Retenção | N/A (config) | — |
| Qualidade | **Não analisável** (não é dado de negócio) | Critério: não é dataset |
| Riscos | Versionado no Git (R-SEC-01) | Fato |
| Lacunas | — | — |

### FD2 — Banco de dados do Supabase (projeto `fjnogxhfiikrxkhovpzm`)
| Campo | Valor | Classificação |
|-------|-------|---------------|
| Nome | Postgres gerenciado (Supabase) | Fato (existência) / ND (conteúdo) |
| Sistema de origem | Supabase (S2) | Fato |
| Tipo / Formato | Banco relacional Postgres | Inferência (produto Supabase) |
| Entidades representadas | **ND** — schema não lido | Informação ausente |
| Campos / Identificadores / Chaves | **ND** | Informação ausente |
| Histórico disponível | **ND** | Informação ausente |
| Uso atual | **ND** (app ainda não persiste dados de negócio) | Inferência |
| Uso pretendido | Persistência do CRM | Inferência |
| Qualidade / Completude / Consistência / Atualidade / Duplicidade | **Não analisável** — sem acesso ao schema/dados | Critério: fonte não inspecionável nesta sessão |
| Acessibilidade | Via MCP `read_only`, porém **requer autorização** (indisponível) | Fato |
| Sensibilidade | Potencialmente **alta** (domínio: dados pessoais/ICP-Brasil) | Hipótese |
| Base legal / Retenção / Exclusão | **ND** | Informação ausente |
| Evidência | `.mcp.json` | — |
| Riscos | Segurança depende de RLS não confirmada (R-SEC-02) | Risco |
| Lacunas | Todo o schema e dados | — |

### FD3 — Código-fonte e configuração (metadados técnicos)
| Campo | Valor | Classificação |
|-------|-------|---------------|
| Sistema de origem | App Next.js (S1) / GitHub (S3) | Fato |
| Tipo | Código TS/TSX + configs | Fato |
| Entidades representadas | Nenhuma entidade de negócio (só integração Supabase e UI-modelo) | Fato |
| Qualidade | **Boa** como scaffold (compila, padrão) — **critério:** consistência com template oficial | Inferência |
| Sensibilidade | Baixa (exceto `.env`) | Inferência |

## Fontes SEM evidência (não inventariáveis nesta fase)

> Todas as fontes de negócio (cadastros de PF/PJ, certificados, oportunidades, atendimentos, faturamento, campanhas, consentimentos etc.) **não existem no ambiente**. Não há como avaliar qualidade, completude, duplicidade, sensibilidade ou retenção. Registradas como **Informação ausente** e candidatas à coleta futura.

| Fonte pretendida (conceitual) | Sistema provável (hipótese) | Status |
|-------------------------------|------------------------------|--------|
| Cadastro de pessoas (PF) | CRM/emissão | Informação ausente |
| Cadastro de empresas (PJ) | CRM/emissão/financeiro | Informação ausente |
| Certificados emitidos | Sistema de emissão | Informação ausente |
| Oportunidades/funil | Piperun (hipótese) | Informação ausente |
| Tickets/atendimento | Zendesk (hipótese) | Informação ausente |
| Campanhas/consentimento | Mautic/Infobip (hipótese) | Informação ausente |
| Faturamento/cobrança | Financeiro (hipótese) | Informação ausente |
| Eventos web/analytics | GA4/GTM/Clarity (hipótese) | Informação ausente |

## Classificação de qualidade — resumo (com critério)

| Fonte | Qualidade | Critério aplicado |
|-------|-----------|-------------------|
| FD1 `.env` | Não analisável | Não é dataset de negócio. |
| FD2 Supabase DB | Não analisável | Schema/dados inacessíveis nesta sessão. |
| FD3 Código | Boa (como scaffold) | Consistência com template oficial; compila. |
| Fontes de negócio | Não analisável | Ausentes no ambiente. |

> **Nenhum percentual de qualidade/duplicidade foi inventado.** Onde não há dado para medir, registra-se: **"Frequência/qualidade não determinável com as evidências atuais."**
