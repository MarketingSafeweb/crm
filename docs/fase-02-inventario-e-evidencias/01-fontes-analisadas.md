# 01 — Fontes Analisadas

> **Data:** 2026-07-14 · Todas as fontes abaixo foram efetivamente lidas no repositório. Classificações seguem o §4 do enunciado.

## Documentos da fase anterior (Fase 1 / descoberta)

| Arquivo | Encontrado | Conteúdo principal | Qualidade | Lacunas |
|---------|:---:|--------------------|-----------|---------|
| `docs/descoberta/01-agentes-de-descoberta.md` | Sim | Definição de 20 agentes-persona simulados, regras e limites. | Boa (para simulação) | É simulação, não evidência do legado. |
| `docs/descoberta/02-simulacao-de-descoberta.md` | Sim | 7 rodadas: respostas, questionamento cruzado, debates, 16 cenários, conflitos. | Boa | Todo o conteúdo é hipótese. |
| `docs/descoberta/03-hipoteses-e-evidencias.md` | Sim | 35 hipóteses (HE01–HE35) com evidência necessária e critérios. | Boa | Nenhuma hipótese ainda validada. |
| `docs/descoberta/04-definicao-do-problema.md` | Sim | Problema central, secundários, causas, declaração, objetivos, riscos. | Boa | Baseado em hipóteses. |
| `docs/descoberta/05-priorizacao-e-mvp.md` | Sim | Matriz de priorização, MVP de fundação, itens fora. | Boa | Priorização não validada por dados. |
| `docs/descoberta/06-bloqueios-e-proximos-passos.md` | Sim | Lacunas, bloqueios B1–B6, evidências pendentes, revisão do Auditor. | Boa | Confirma que o legado não foi inventariado. |
| `docs/fase-1-definicao-do-problema.md` | Sim | Documento estratégico da Fase 1 (definição do problema). | Boa | Estratégico, não técnico. |

> **Observação (Inferência):** os nomes diferem do §2 do enunciado (que sugeria `01-…`–`06-…` na raiz), mas o **conteúdo** corresponde. Foram localizados por tema, conforme instruído. **Nenhum conteúdo foi inventado.**

## Fontes técnicas do repositório (evidência primária)

| Arquivo | Tipo | O que evidencia | Classificação |
|---------|------|-----------------|---------------|
| `package.json` | Manifesto | Stack e dependências (Next 16.2.10, React 19.2.4, `@supabase/ssr` 0.12.3, `@supabase/supabase-js` 2.110.5, Tailwind 4, TS 5). | Fato comprovado |
| `package-lock.json` | Lockfile | Árvore de dependências resolvida. | Fato comprovado (não detalhado aqui) |
| `.mcp.json` | Config MCP | Servidor `supabase` HTTP; `project_ref=fjnogxhfiikrxkhovpzm`; `read_only=true`. | Fato comprovado |
| `.env` | Variáveis | **Apenas 2 chaves** (`NEXT_PUBLIC_SUPABASE_URL`, `NEXT_PUBLIC_SUPABASE_PUBLISHABLE_KEY`). Valores **não reproduzidos**. | Fato comprovado |
| `.gitignore` | Config | Regra `.env*` + exceção `!.env` → `.env` é versionado. | Fato comprovado |
| `src/lib/supabase/client.ts` | Código | Browser client Supabase. | Fato comprovado |
| `src/lib/supabase/server.ts` | Código | Server client Supabase com cookies SSR. | Fato comprovado |
| `src/lib/supabase/proxy.ts` | Código | Refresh de sessão (`auth.getUser()`) no proxy. | Fato comprovado |
| `src/proxy.ts` | Código | Middleware/proxy do Next aplicado a quase todas as rotas. | Fato comprovado |
| `src/app/layout.tsx` | Código | Layout raiz; metadata `"Create Next App"`. | Fato comprovado |
| `src/app/page.tsx` | Código | Página-modelo do scaffold. | Fato comprovado |
| `src/app/globals.css`, `postcss.config.mjs`, `eslint.config.mjs`, `tsconfig.json`, `next.config.ts` | Config | Configuração padrão do scaffold. | Fato comprovado |
| `README.md` | Doc | Texto padrão `create-next-app`; menção a deploy na Vercel. | Fato comprovado |
| `AGENTS.md` / `CLAUDE.md` | Doc | Regra "This is NOT the Next.js you know"; ler docs antes de codar. | Fato comprovado |
| `public/*.svg` | Assets | Logos do scaffold. | Fato comprovado |

## Sistemas identificados no ambiente (por evidência)

| Sistema/serviço | Evidência | Status de confirmação |
|-----------------|-----------|-----------------------|
| Aplicação Next.js (futuro CRM) | Todo o `src/`, `package.json` | **Confirmado** (é o próprio repo) |
| Supabase (Auth + Postgres gerenciado) | `.mcp.json`, `src/lib/supabase/*`, deps | **Confirmado** (integração presente; schema não inspecionado) |
| Vercel (hospedagem pretendida) | `README.md` | **Apenas mencionado / Inferência** |
| GitHub (`MarketingSafeweb/crm`) | Contexto do repositório | **Confirmado** (repositório de origem) |

## Fontes NÃO disponíveis no ambiente (informação ausente)
Nenhuma evidência foi encontrada para: Piperun, Zendesk, Webflow, e-commerce/checkout, Infobip, WhatsApp, Mautic, sistemas de emissão de certificados, sistemas operacionais internos, portais de parceiros, Portal do Contador, sistemas de AR, financeiro/faturamento/cobrança, GA4, Google Tag Manager, Search Console, Microsoft Clarity, planilhas, data warehouse/lake, BI, ou quaisquer APIs de negócio. Também ausentes: schema do banco, migrações, dados, logs, tickets, contratos, políticas de LGPD/segurança, organograma.

## Qualidade das evidências (síntese)
- **Alta confiabilidade** para o que o repositório **é** (scaffold + Supabase): arquivos lidos diretamente.
- **Nula** para o parque de sistemas do negócio e para dados/qualidade/LGPD do legado: **não há fonte**.
- **Bloqueio pontual:** schema do Supabase não lido — o MCP `supabase` exige autorização e esta sessão é não interativa. Registrar como lacuna (ver `12-bloqueios-e-decisoes.md`).
