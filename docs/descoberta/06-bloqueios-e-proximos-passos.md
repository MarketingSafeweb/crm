# 06 — Bloqueios e Próximos Passos

> **Status:** Rascunho para validação (v0.1) · **Data:** 2026-07-14
> **Aviso:** Consolida lacunas, bloqueios, evidências pendentes, decisões humanas necessárias e próximas etapas. Inclui a **revisão final obrigatória do Agente Auditor Crítico**. Nenhum código foi criado.

---

## 1. Lacunas (informação ausente)

| # | Lacuna | Impacto se não resolvida | Confiança |
|---|--------|--------------------------|:---:|
| L1 | Inventário real de sistemas e fonte-mestre por dado. | Arquitetura e escopo ficam sem base. | ND |
| L2 | Volumes (clientes, empresas, certificados, parceiros, ARs, PAs, leads). | Sem baseline nem priorização por evidência. | ND |
| L3 | Patrocínio executivo e donos por área. | Aprovação e adoção comprometidas. | ND |
| L4 | Existência de DPO e estado da conformidade LGPD (ROPA, incidentes). | Risco jurídico não dimensionado. | ND |
| L5 | Requisitos de retenção ICP-Brasil e sua conciliação com a LGPD. | Bloqueia modelagem de exclusão/retenção. | ND |
| L6 | Modelo de propriedade do cliente e de comissionamento. | Conflito direto×parceiro sem regra. | ND |
| L7 | Controlador × operador nos casos de parceiro. | Base de acesso e LGPD indefinida. | ND |
| L8 | Estado/confiabilidade das integrações. | Risco de integrações frágeis. | ND |
| L9 | Orçamento, prazo, equipe. | Viabilidade e faseamento. | ND |
| L10 | Localidade de armazenamento/processamento e uso de terceiros/IA. | Restrições legais/segurança. | ND |
| L11 | Definições de negócio (cliente/contato/usuário/pagador/parceiro). | Ambiguidade na fundação. | Baixa |
| L12 | Métricas existentes (baseline). | Impacto não comprovável. | ND |

---

## 2. Bloqueios para avançar

> Somente o que **impede** o início seguro da próxima fase (arquitetura/solução). Enquanto abertos, **não avançar**.

| # | Bloqueio | Por que bloqueia | Como desbloquear | Confiança |
|---|----------|------------------|------------------|:---:|
| B1 | Inventário de sistemas e fontes não confirmado (L1, L2). | Sem saber onde o dado vive e qual é fonte-mestre, qualquer arquitetura é suposição. | Levantar inventário + volumes. | Alta |
| B2 | Modelo conceitual de identidade não decidido (pessoa×empresa×papel×vínculo×vigência). | Fundação de tudo; ainda ambíguo. | Workshop de modelo conceitual (decisão de negócio). | Alta |
| B3 | Posição jurídica ausente: LGPD operacional + conflito retenção ICP-Brasil × exclusão (L4, L5, L7). | Risco jurídico direto; afeta modelagem. | Parecer do Jurídico/DPO. | Alta |
| B4 | Governança de dados sem donos definidos (L3). | Novo sistema herdaria o caos. | Definir donos, fonte-mestre, retenção. | Alta |
| B5 | Patrocínio e disponibilidade das áreas não confirmados (L3, L9). | Sem isso, descoberta e aprovação não se completam. | Nomear patrocinador e responsáveis. | Média-alta |
| B6 | Ausência de baseline (L12). | Sem métrica, não há como priorizar/comprovar impacto. | Levantar métricas mínimas. | Média |

---

## 3. Evidências pendentes (mínimo indispensável)

> Mapeamento hipótese→evidência completo no arquivo `03`. Mínimo para avançar:

| Evidência | Valida | Fonte provável | Critério de suficiência |
|-----------|--------|----------------|-------------------------|
| Esquemas + amostra de cadastros reconciliada | HE01–HE04, HE07, HE09 | Bancos/exportações | Reconciliar 1 pessoa e 1 empresa entre fontes. |
| Inventário de sistemas e integrações | HE05, HE31, HE32, HE35 | TI/Arquitetura | Lista com dono e tipo de dado. |
| Matriz de acesso + estado dos logs | HE11–HE14 | Segurança | Perfis mapeados; trilha verificada. |
| Política de dados/retenção (ou constatação de ausência) | HE06, HE08, HE15 | Governança/Jurídico | Documento ou confirmação de inexistência. |
| ROPA/consentimento + parecer retenção×exclusão + contratos de parceria | HE16–HE20, HE34 | Jurídico/DPO | Base legal por finalidade + posição sobre o conflito. |
| Volumes aproximados | HE35, L2 | Gestão/TI | Números por público e por sistema. |

---

## 4. Decisões necessárias (humanas — não podem ser tomadas só por agentes)

| # | Decisão | Quem decide | Depende de |
|---|---------|-------------|-----------|
| D1 | Nomear patrocinador executivo e dono do projeto. | Diretoria | — |
| D2 | Incluir DPO/Jurídico e Segurança como participantes centrais. | Diretoria/Gestão | — |
| D3 | Aprovar definições de entidade (pessoa/empresa/contato/usuário/pagador/parceiro). | Negócio (com Dados/Jurídico) | B2 |
| D4 | Definir regra de propriedade do cliente (direto×parceiro) e arbitragem. | Diretoria + Comercial + Parcerias | L6 |
| D5 | Emitir posição sobre retenção ICP-Brasil × exclusão LGPD. | Jurídico/DPO | L5 |
| D6 | Definir controlador × operador nos casos de parceiro. | Jurídico + Parcerias | L7 |
| D7 | Autorizar inventário de sistemas/dados (descoberta, sem tocar produção). | TI/Gestão | — |
| D8 | Escolher público prioritário e jornada inicial. | Diretoria (com evidência de volumes) | L2 |
| D9 | Aprovar escopo do MVP de fundação e itens fora. | Diretoria | B1–B4 |

---

## 5. Próximas etapas (sequência recomendada)

| Ordem | Etapa | Saída | Pré-requisito |
|:---:|------|-------|---------------|
| 1 | Confirmar patrocínio e responsáveis. | RACI aprovado. | D1, D2 |
| 2 | Inventariar sistemas, integrações e volumes. | Inventário + baseline. | D7 |
| 3 | Coletar evidências das hipóteses críticas (arquivo 03). | Hipóteses validadas/descartadas. | Etapa 2 |
| 4 | Parecer jurídico (LGPD + conflito ICP-Brasil). | Posição formal. | D5, D6 |
| 5 | Workshop de modelo conceitual de identidade/papéis. | Modelo conceitual validável. | Etapas 2–4 |
| 6 | Definir governança mínima (donos, fonte-mestre, retenção). | Governança aprovada. | Etapa 5 |
| 7 | Aprovar público, jornada, escopo do MVP e fora do escopo. | Escopo aprovado. | D8, D9 |
| 8 | Termo de aprovação da Fase 1. | Fase encerrada formalmente. | Etapas 1–7 |
| — | **Só então** iniciar a fase de arquitetura da solução. | — | Termo assinado |

---

## 6. Revisão final do Agente Auditor Crítico (obrigatória)

> Respostas às 8 perguntas de encerramento. Confiança indicada.

**1. Quais conclusões foram apresentadas sem evidência suficiente?**
Praticamente todas as "dores" e "sintomas" da simulação são **hipóteses sem evidência** — inclusive a fragmentação de dados (o próprio contexto diz "podem estar"). Só são fatos os itens F1–F5. *(Confiança alta.)*

**2. Quais agentes fizeram suposições excessivas?**
Comercial (B2B/B2C), Marketing e IA tenderam a **transformar desejos de funcionalidade em problemas** (upsell, personalização, automação). Atendimento superestimou a necessidade de "ver tudo" (tensão com privilégio mínimo). *(Confiança média.)*

**3. Quais riscos foram subestimados?**
(a) Conflito **retenção ICP-Brasil × exclusão LGPD** (decisão jurídica que pode bloquear a modelagem); (b) **conflito organizacional** de propriedade do cliente (risco político de travar o projeto); (c) **acesso residual** (ex-colaborador/ex-contador); (d) **golden record errado** ao deduplicar antes de governança. *(Confiança média.)*

**4. Quais funcionalidades foram sugeridas antes da definição do problema?**
Dashboards, automação de funil, recomendação por IA, portal self-service completo, motor de comissionamento. Todas **prematuras** — devem ser questionadas por *qual problema resolvem / quem se beneficia / que risco criam / que dado usam / como se medem*. *(Confiança alta.)*

**5. Onde o escopo está amplo demais?**
Qualquer visão de "CRM completo" na v1. O escopo correto é **fundação** (identidade + governança + segurança/LGPD) com **um público e uma jornada**. IA e automação ficam fora. *(Confiança média-alta.)*

**6. Quais decisões não podem ser tomadas apenas com agentes de IA?**
Definições de entidade/negócio; base legal e o conflito ICP×LGPD; controlador×operador; propriedade do cliente; escolha de público prioritário; qualquer decisão com efeito jurídico, financeiro ou de emissão. Todas exigem **humanos com evidência**. *(Confiança alta.)*

**7. Quais evidências mínimas são indispensáveis para avançar?**
Inventário de sistemas + volumes; amostra de cadastros reconciliada (identidade/duplicidade); matriz de acesso + estado dos logs; ROPA/consentimento + parecer de retenção×exclusão + contratos de parceria. *(Confiança alta.)*

**8. É seguro avançar para a próxima fase? Justifique.**
**Não.** Enquanto os bloqueios B1–B4 estiverem abertos (inventário, modelo de identidade, posição jurídica, governança), avançar para arquitetura significaria **projetar sobre suposições** e correr o risco de **reproduzir os silos** e de **não conformidade LGPD**. É seguro avançar **somente após** coletar as evidências mínimas, obter o parecer jurídico, validar o modelo conceitual e assinar o termo de aprovação da Fase 1. *(Confiança média-alta.)*

---

## 7. Checklist de conclusão da descoberta

- [x] Todos os 20 agentes participaram (Rodada 1) — *simulação registrada*.
- [x] Questionamento cruzado realizado (Rodada 2).
- [x] Debates temáticos A–E conduzidos (Rodada 3).
- [x] 15+ cenários construídos (Rodada 4).
- [x] Conflitos explícitos registrados, sem consenso forçado.
- [x] Hipóteses separadas de fatos e classificadas por confiança.
- [x] Cada hipótese crítica com evidência recomendada.
- [x] Riscos de segurança e LGPD priorizados como Críticos.
- [x] Primeiro problema do CRM definido (fundação: identidade/governança/segurança/LGPD).
- [x] Escopo inicial limitado (MVP de fundação) e itens fora do escopo explícitos.
- [x] Bloqueios documentados.
- [x] Revisão final do Auditor Crítico concluída.
- [x] Nenhum código criado.

> **Conclusão:** a descoberta simulada está **concluída como artefato de Fase 1**, mas o projeto **não está liberado** para a próxima fase até que os bloqueios B1–B6 sejam resolvidos com evidência humana e o termo de aprovação seja assinado.
