# 13 — Gate da Fase 2

> **Data:** 2026-07-14 · Avaliação do gate conforme §20. **Regra:** não declarar aprovado se as evidências forem insuficientes.

## Checklist do gate

| Item exigido (§20) | Situação | Evidência/arquivo |
|--------------------|----------|-------------------|
| Inventário inicial de sistemas | **Parcial** — só sistemas com evidência (4); legado ausente | `02` |
| Inventário inicial de fontes de dados | **Parcial** — só fontes do ambiente; legado ausente | `03` |
| Catálogo conceitual de dados | **Concluído** (conceitual, a validar) | `04` |
| Identificadores analisados | **Concluído** (conceitual; sem regras do legado) | `05` |
| Relacionamentos principais identificados | **Concluído** (conceitual) | `04`, `05` |
| Integrações mapeadas | **Parcial** — 2 confirmadas; negócio hipotético | `06` |
| Linhagem preliminar | **Incompleta** (só autenticação) | `06` |
| Riscos de qualidade registrados | **Concluído** (como hipóteses, não medidos) | `07` |
| Riscos de segurança registrados | **Concluído** (SEC-01..05) | `08` |
| Riscos de LGPD registrados | **Concluído** (PRV-01..05) | `09` |
| Hipóteses classificadas | **Concluído** (HE01–HE35) | `10` |
| Evidências vinculadas | **Concluído** (onde existem) | todos |
| Lacunas documentadas | **Concluído** | `01`, `12` |
| Sistemas críticos priorizados | **Concluído** (com ressalva de ND) | `11` |
| Fontes críticas priorizadas | **Concluído** (com ressalva) | `11` |
| Bloqueios explícitos | **Concluído** (BL1–BL5) | `12` |
| Recomendação sobre a próxima fase | **Concluído** | este doc + `00` |

## Itens concluídos
Catálogo conceitual, análise de identificadores, riscos de segurança/LGPD/qualidade, classificação de hipóteses, priorização do que tem evidência, bloqueios e decisões.

## Itens pendentes (por ausência de evidência)
Inventário **real** de sistemas/fontes/integrações do legado; linhagem completa; validação empírica das hipóteses HE01–HE35 sobre o legado; leitura do schema Supabase; documentação de LGPD/segurança; volumes.

## Riscos aceitos (nesta fase, conscientemente)
- Trabalhar com catálogo/identidade **conceituais** (não validados por dados) — aceitável **porque** estão rotulados como conceituais e não avançam para modelagem física.

## Riscos NÃO aceitos (bloqueadores)
- **R-SEC-01** (`.env` versionado) — **✅ REMEDIADO em 2026-07-14** (`.env` fora do versionamento; `.env.example` sem valores). Residual apenas no histórico (chaves publishable, sem urgência de rotação).
- **R-SEC-02** (RLS não confirmada) — **permanece bloqueador**; não se aceita inserir dados reais no Supabase sem confirmar RLS. Não corrigível nesta sessão (requer acesso autorizado ao Supabase).
- **PRV-01/PRV-03** (transferência internacional; retenção×exclusão) — não se aceita avançar sem posição jurídica.
- Tratar hipóteses do legado como fatos — **não aceito** (nenhuma foi confirmada).

## Decisão do gate

### ⛔ GATE REPROVADO — Fase 2 incompleta por insuficiência de evidências

**Justificativa:** o objetivo central da Fase 2 — inventariar os sistemas/dados/integrações **reais** e **validar as hipóteses com evidência** — **não pôde ser cumprido**, pois o ambiente do projeto é um scaffold greenfield sem o legado. Foram produzidos todos os artefatos possíveis com o material disponível, e os achados **reais e acionáveis** (SEC-01, SEC-02, PRV-01) foram registrados. Porém, declarar o gate aprovado violaria a regra de não tratar ausência/hipótese como fato.

**O que permitiria aprovar (condições de saída):**
1. Coleta segura das evidências do legado (BL1) — inventário, schemas/metadados, contratos, exportações com minimização.
2. Autorização de leitura do schema do Supabase (BL2).
3. Documentação de LGPD/segurança (BL3) e volumes (BL4).
4. Correção de SEC-01 e confirmação de SEC-02/PRV-01.

## Recomendação de próxima fase
**Necessidade de coleta adicional de evidências** (ver `00-resumo-executivo.md` e `24` do enunciado). Em paralelo — e independentemente da coleta — executar as ações acionáveis de segurança (DC2, DC3).
