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
| SEC-01 | `.env` **versionado no Git** (`.gitignore` contém `!.env`; `git ls-files` lista `.env`). | **Alto (como prática)** | `.gitignore`, `git ls-files` | Hoje: baixo (só chaves publishable). Futuro: se um segredo real (ex.: `service_role`) for adicionado ao `.env`, será commitado e exposto no histórico. | Média | Remover `.env` do versionamento; trocar `!.env` por `.env.example` sem valores; usar segredos do ambiente/host. | Revisar histórico do Git por segredos já commitados. |
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

## Recomendações prioritárias (acionáveis já)
1. **SEC-01:** remover `.env` do versionamento e auditar o histórico do Git por segredos. *(Baixo esforço, alto valor preventivo.)*
2. **SEC-02:** confirmar/estabelecer **RLS** no Supabase como pré-condição de qualquer dado real.
3. Definir **modelo de autorização por papéis** e **auditoria por design** antes do MVP (coerente com os Críticos da Fase 1).

> **Nota:** todas as recomendações respeitam "segurança e privacidade desde a concepção" (regras 25/26). Nenhum teste ativo foi realizado.
