# 10 — Validação das Hipóteses (da Fase 1)

> **Data:** 2026-07-14 · Cruzamento das hipóteses HE01–HE35 (`docs/descoberta/03-hipoteses-e-evidencias.md`) com a **evidência disponível no ambiente**. Resultados: Confirmada / Parcialmente confirmada / Refutada / Contraditória / Não testável / Sem evidência. 
> **Constatação central:** como o ambiente **não contém o legado**, a **maioria das hipóteses é "Não testável" / "Sem evidência" nesta fase** — o que é, em si, um resultado honesto (regra 20: análise de agente não é evidência).

## Tabela de validação

| Hipótese (Fase 1) | Evidência encontrada | Resultado | Confiança | Evidência ainda necessária |
|-------------------|----------------------|-----------|:---:|----------------------------|
| HE01 Sem chave única de pessoa entre sistemas | Nenhuma fonte do legado no ambiente | **Não testável** | — | Schemas dos sistemas de origem |
| HE02 Duplicidade de cadastros | Sem dados | **Sem evidência** | — | Amostras de cadastros |
| HE03 Papéis não modelados como entidade | Sem schema | **Não testável** | — | Modelo de dados de origem |
| HE04 Vínculos sem vigência | Sem schema | **Não testável** | — | Schemas de vínculos |
| HE05 Sem fonte-mestre de cliente/empresa | Sem inventário do legado | **Sem evidência** | — | Inventário + donos de dado |
| HE06 Governança de dados ausente | Nenhum artefato de governança no repo | **Parcialmente confirmada** (no ambiente do projeto) | Baixa | Confirmar no ambiente corporativo (pode existir fora do repo) |
| HE07 Dados não padronizados | Sem dados | **Não testável** | — | Perfilamento de dados |
| HE08 Sem critérios de retenção/descarte | Nenhuma política no repo | **Parcialmente confirmada** (no ambiente) | Baixa | Política corporativa |
| HE09 Sistemas com dados conflitantes | Sem multi-sistema | **Não testável** | — | Diff cross-sistema |
| HE10 Confiabilidade de dados não rotulada | Sem dados | **Não testável** | — | Metadados de origem |
| HE11 Acessos amplos / sem privilégio mínimo | Autorização não implementada (scaffold); RLS não confirmada | **Parcialmente confirmada** (app), **Não testável** (legado) | Baixa | Matriz de acesso; RLS |
| HE12 Sem trilha de auditoria consolidada | App sem logs/auditoria | **Parcialmente confirmada** (app) | Baixa | Estado dos logs corporativos |
| HE13 Ciclo de vida de acesso frágil (residual) | Sem IAM no ambiente | **Não testável** | — | Processos de RH/acessos |
| HE14 Dados de parceiros não isolados | Sem multi-tenant no ambiente | **Não testável** | — | Modelo de acesso por parceiro |
| HE15 Dados sensíveis sem classificação | Nenhuma classificação no repo | **Parcialmente confirmada** (no ambiente) | Baixa | Política de classificação |
| HE16 Base legal não rastreável | Sem ROPA no repo | **Parcialmente confirmada** (no ambiente) | Baixa | ROPA corporativo |
| HE17 Consentimento não central | Sem mecanismo no código | **Parcialmente confirmada** (no ambiente) | Baixa | Sistemas de consentimento |
| HE18 Atender titular é difícil | Sem processo evidenciável | **Não testável** | — | Processo de titulares |
| HE19 Conflito retenção ICP-Brasil × exclusão | Não resolvido; sem parecer | **Sem evidência** (segue em aberto) | — | Parecer jurídico + req. ICP-Brasil |
| HE20 Controlador × operador (parceiro) indefinido | Sem contratos no repo | **Sem evidência** | — | Contratos de parceria |
| HE21 Origem de lead não rastreável | Sem funil/dados | **Não testável** | — | Funil e campos de origem |
| HE22 Propriedade do cliente ambígua | Sem dados comerciais | **Não testável** | — | Regras de canal + histórico |
| HE23 Abordagens duplicadas | Sem histórico de contatos | **Não testável** | — | Logs de contato |
| HE24 Jornada quebrada entre canais | Sem dados cross-canal | **Não testável** | — | Logs de atendimento |
| HE25 Comunicação inadequada ao papel | Sem segmentação | **Não testável** | — | Config de marketing |
| HE26 Processos manuais | Sem evidência de processos | **Não testável** | — | Fluxos operacionais |
| HE27 Evidências de emissão desvinculadas | Sem sistema de emissão | **Não testável** | — | Fluxo de emissão |
| HE28 Produto↔empresa↔usuário mal representado | Sem schema | **Não testável** | — | Modelo de produto |
| HE29 Cliente↔pagador↔usuário ambíguo | Sem financeiro | **Não testável** | — | Modelo de faturamento |
| HE30 Sem sinais de uso do produto | Sem telemetria | **Não testável** | — | Telemetria de uso |
| HE31 Integrações frágeis ponto-a-ponto | Só integração Supabase (confirmada, robusta) | **Não testável** (legado) | — | Inventário de integrações |
| HE32 Sem domínios/limites definidos | Confirmado no app (sem domínio de negócio) | **Parcialmente confirmada** (app é greenfield) | Média | Arquitetura corporativa |
| HE33 IA prematura por baixa qualidade de dados | Sem dados governados; ausência total de base | **Parcialmente confirmada** (reforçada) | Média | Prontidão de dados |
| HE34 Risco de enviar dados a IA de terceiros | Nenhuma IA no ambiente | **Não testável** (mas risco válido) | — | Política de uso de IA |
| HE35 Volumes/sistemas desconhecidos | Nenhum inventário/volume | **Confirmada** (no ambiente, seguem desconhecidos) | Média | Inventário + volumes |

## Síntese dos resultados

| Resultado | Nº de hipóteses |
|-----------|:---:|
| Confirmada | 1 (HE35) |
| Parcialmente confirmada | 9 (HE06, HE08, HE11, HE12, HE15, HE16, HE17, HE32, HE33) |
| Refutada | 0 |
| Contraditória | 0 |
| Não testável | 18 |
| Sem evidência | 5 (HE02, HE05, HE19, HE20, + HE01 correlata) |

> **Leitura crítica (Auditor de Evidências):** as "parcialmente confirmadas" o são **apenas em relação ao ambiente do projeto** (o scaffold realmente não tem governança/auditoria/classificação) — **não** confirmam nada sobre o legado corporativo, que pode ter esses controles fora do repositório. **Nenhuma hipótese sobre o legado foi confirmada.** Isto é decisivo para o gate.
