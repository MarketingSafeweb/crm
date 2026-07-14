# 08 — Segurança da Informação

> **Data:** 2026-07-14 · Análise **documental e estática** (sem testes invasivos, sem exploração, sem acesso não autorizado — §14). Achados classificados: Crítico / Alto / Médio / Baixo / Informativo. **Nenhum segredo é reproduzido** — apenas tipo, arquivo, risco e ação.

## Segredos / credenciais encontrados (sem reprodução de valores)

| Tipo do segredo | Arquivo | Risco | Ação recomendada |
|-----------------|---------|-------|------------------|
| URL do projeto Supabase (`NEXT_PUBLIC_SUPABASE_URL`) | `.env` (versionado) | Baixo — endpoint é público por natureza | Manter fora do versionamento por higiene; sem impacto direto. |
| Chave **publishable** Supabase (`NEXT_PUBLIC_SUPABASE_PUBLISHABLE_KEY`) | `.env` (versionado) | Baixo-Médio — chave projetada para exposição no cliente; protegida por RLS | Confirmar que é publishable (não `service_role`); garantir RLS. |
| `project_ref` Supabase | `.mcp.json` (versionado) | Baixo — referência pública | Informativo. |

> **Nenhuma chave `service_role`, token privado, senha ou chave privada foi encontrada** no repositório. *(Fato — busca por nomes de chave em `.env` e configs.)* Isto **reduz** a gravidade de R-SEC-01, mas não a elimina (ver abaixo).

## Achados de segurança (com evidência)

| ID | Achado | Severidade | Evidência | Impacto possível | Probabilidade | Recomendação | Condição p/ confirmar |
|----|--------|:---:|-----------|------------------|:---:|--------------|-----------------------|
| SEC-01 | `.env` **versionado no Git** (`.gitignore` continha `!.env`; `git ls-files` listava `.env`). — **✅ REMEDIADO em 2026-07-14** (ver seção "Remediação" abaixo). | **Alto (como prática)** → **Residual Baixo** | `.gitignore`, `git ls-files` | Hoje: baixo (só chaves publishable). Futuro: se um segredo real (ex.: `service_role`) fosse adicionado ao `.env`, seria commitado. | Média → mitigada | Feito: `.env` removido do rastreamento; `.gitignore` passa a permitir apenas `.env.example`; template sem valores adicionado. | Residual: histórico do Git ainda contém as chaves publishable (ver Remediação). |
| SEC-02 | Segurança dos dados depende de **RLS** do Supabase, **não confirmada**. | **Alto (não confirmável)** | Chave publishable no cliente (`src/lib/supabase/client.ts`); MCP indisponível | Se RLS ausente/fraca, a chave publishable pode permitir leitura/escrita indevida de dados. | Não determinável | Confirmar RLS habilitada e políticas por tabela **antes** de qualquer dado real. | Ler schema/políticas (autorizar MCP ou export). |
| SEC-03 | Sem trilha de auditoria/logs de aplicação. | Médio | Código do scaffold (ausência) | Sem rastreabilidade de acesso/alteração. | — | Definir logging/auditoria por design antes do MVP. | Revisão de arquitetura futura. |
| SEC-04 | Controle de acesso/perfis/privilégio mínimo **não implementados**. | Médio (estágio inicial) | `src/**` (só sessão) | Sem autorização granular. | — | Definir modelo de autorização (papéis) na fundação. | Modelagem futura. |
| SEC-05 | Middleware/proxy chama `auth.getUser()` — padrão correto de refresh; porém não há autorização por rota além do matcher. | Informativo | `src/proxy.ts`, `src/lib/supabase/proxy.ts` | Boa base; falta política de autorização. | — | Evoluir para checagem de sessão + autorização por recurso. | — |

## Controles observados vs. ausentes

| Controle | Estado | Evidência |
|----------|--------|-----------|
| Autenticação | **Presente** (Supabase Auth, SSR, refresh de sessão) | `src/lib/supabase/*` |
| Criptografia em trânsito | **Provável** (HTTPS Supabase/Vercel) | Inferência |
| Criptografia em repouso | ND (gerenciada pelo Supabase) | Inferência |
| Autorização / privilégio mínimo / segregação | **Ausente** (não implementado) | ausência |
| RLS (autorização no banco) | **Não confirmado** | MCP indisponível |
| Gestão de segredos / rotação | **Frágil** (`.env` versionado) | `.gitignore` |
| Logs / auditoria / monitoramento / alertas | **Ausentes** | ausência |
| Backup / recuperação / continuidade | ND (Supabase gerenciado) | Inferência |
| Segurança de API / rate limiting / validação de entrada | **Ausente** no app | ausência |
| Dados em ambientes de teste | Nenhum dado presente | Fato |

## Remediação aplicada (2026-07-14)

**SEC-01 — corrigido nesta branch:**
- `.gitignore`: a exceção `!.env` foi substituída por `!.env.example` — agora **todos** os arquivos `.env*` são ignorados, exceto o template.
- `.env` foi **removido do rastreamento** do Git (`git rm --cached .env`), preservando o arquivo local de desenvolvimento.
- Adicionado **`.env.example`** com apenas os **nomes** das chaves (sem valores), documentando que as chaves `NEXT_PUBLIC_*` são publishable e que a proteção depende de RLS.

**Residual honesto (não corrigido automaticamente):**
- Os valores das chaves `NEXT_PUBLIC_SUPABASE_URL` e `NEXT_PUBLIC_SUPABASE_PUBLISHABLE_KEY` **permanecem no histórico de commits anteriores** onde `.env` estava rastreado. Como são chaves **publishable** (públicas por design), **não há urgência de rotação**.
- **Recomendação (decisão humana, não executada aqui):** se desejar remover os valores do histórico, use `git filter-repo`/BFG — operação **destrutiva** (reescreve o histórico) que exige coordenação com todos que clonaram o repositório. Não foi realizada unilateralmente.

## Recomendações prioritárias restantes
1. **SEC-02 (pendente — requer autorização):** confirmar/estabelecer **RLS** no Supabase como pré-condição de qualquer dado real. **Não pôde ser aplicado nesta sessão** — o acesso ao Supabase (MCP) requer autorização e a sessão é não interativa. Nenhuma confirmação foi simulada.
2. Definir **modelo de autorização por papéis** e **auditoria por design** antes do MVP (coerente com os Críticos da Fase 1) — trabalho de fase futura, não uma "correção" pontual.

> **Nota:** todas as ações respeitam "segurança e privacidade desde a concepção" (regras 25/26). Nenhum teste ativo foi realizado e nenhum dado foi inventado.
