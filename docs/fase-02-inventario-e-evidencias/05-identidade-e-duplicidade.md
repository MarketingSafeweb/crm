# 05 — Identidade e Duplicidade

> **Data:** 2026-07-14 · Análise **preliminar e conceitual** de resolução de identidade. **Nenhuma regra do legado foi observada com evidência** (não há schema/dados no ambiente). O que segue são inferências técnicas e princípios, explicitamente rotulados. Regra atendida: **não** propor CPF/CNPJ isolado como chave primária interna.

## O que foi possível observar por evidência
| Observação | Classificação | Evidência |
|-----------|---------------|-----------|
| A única identidade tecnicamente presente é a **identidade de autenticação** do Supabase Auth. | Fato | `src/lib/supabase/*` (`auth.getUser()`) |
| Não há nenhuma tabela/entidade de pessoa/empresa modelada no repositório. | Fato | `find` (ausência de schema) |
| Regras de identificação/deduplicação do legado: **não observáveis**. | Informação ausente | sem schema/dados |

## Identificadores candidatos (do domínio) e sua análise conceitual

| Identificador | Único? | Pode mudar? | Pode faltar? | Pode ser compartilhado? | Usar isolado como chave interna? |
|---------------|:-----:|:-----------:|:------------:|:-----------------------:|:--------------------------------:|
| CPF | Quase (pessoa) | Raro | Sim (estrangeiros, dados incompletos) | Não deveria, mas erros ocorrem | **Não** (sensível; ausências; correção) |
| CNPJ | Por PJ | Sim (baixa/reabertura) | Sim | Matriz/filial | **Não** |
| E-mail | Não | Sim | Sim | Sim (compartilhado) | **Não** |
| Telefone | Não | Sim | Sim | Sim | **Não** |
| ID interno (surrogate) | Sim (por sistema) | Não | Não | Não | **Sim** (recomendado, por entidade) |
| ID externo (de outro sistema) | Por sistema | Depende | Sim | — | Só como referência, não como PK |
| Nº de pedido/oportunidade/contrato | Por transação | Não | — | — | Não (identifica transação, não pessoa) |
| ID de certificado | Por certificado | Não | — | — | Identifica produto, não titular |
| ID de atendimento/parceiro/conta | Por contexto | Depende | Sim | — | Não isolado |

> **Inferência técnica:** a chave primária interna de cada entidade deve ser um **identificador substituto (surrogate)** estável, **desacoplado** de CPF/CNPJ/e-mail. CPF/CNPJ tornam-se **atributos verificáveis** com nível de confiabilidade, não chaves.

## Diferenciação obrigatória das identidades
(ver também `04`) — Identidade do **registro** ≠ da **pessoa** ≠ da **empresa** ≠ do **usuário** ≠ do **relacionamento** ≠ da **conta** ≠ de **autenticação**. 
> **Ponto de atenção Supabase:** o `auth.uid` (identidade de autenticação) **não** deve ser tratado como identidade da pessoa — um humano pode ter múltiplos logins, e nem todo titular tem login. **A validar** na modelagem.

## Riscos de identidade e duplicidade (herdados da Fase 1 — não confirmados)
| ID | Risco | Classe | Evidência atual |
|----|-------|--------|-----------------|
| RID1 | Múltiplos registros para a mesma pessoa entre sistemas. | Hipótese (HE01/HE02) | Sem evidência (legado ausente) |
| RID2 | Papéis não modelados como entidade → confusão pessoa×papel. | Hipótese (HE03) | Sem evidência |
| RID3 | Vínculos sem vigência → perda de histórico. | Hipótese (HE04) | Sem evidência |
| RID4 | Falta de fonte-mestre de "cliente"/"empresa". | Hipótese (HE05) | Sem evidência |
| RID5 | Reconciliação por CPF/e-mail gerar falsos positivos/negativos. | Inferência técnica | Conceitual |
| RID6 | `auth.uid` confundido com identidade da pessoa. | Inferência técnica | `src/lib/supabase/*` |

## Estratégia conceitual preliminar de resolução de identidade (NÃO implementar agora)
1. **Chaves surrogate por entidade** (pessoa, empresa, usuário, conta, relacionamento) — estáveis e internas.
2. **Atributos de identidade com confiabilidade** (CPF/CNPJ/e-mail/telefone) rotulados por origem, verificação e data.
3. **Camada de resolução de identidade** (match/merge) com **regras determinísticas + revisão humana**, reversível, auditável.
4. **Modelo de papéis** como entidade associativa com vigência (início/fim/status/motivo/fonte).
5. **Separar autenticação de identidade da pessoa.**
6. **Golden record** derivado, com linhagem — nunca destrutivo.

> **Contradição a resolver na coleta:** deduplicação (HE07) **antes** de governança (HE06) pode produzir "golden record" errado. Sequência correta: governança → regras → deduplicação. **Decisão humana necessária.**

## Evidência necessária para avançar
Schemas dos sistemas de origem; amostras reconciliadas (com minimização/pseudonimização); regras de chave/matching atuais; existência de MDM ou fonte-mestre. **Sem isso, a resolução de identidade permanece conceitual.**
