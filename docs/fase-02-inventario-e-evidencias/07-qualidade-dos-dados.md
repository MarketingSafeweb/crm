# 07 — Qualidade dos Dados

> **Data:** 2026-07-14 · **Restrição honesta:** não há dados de negócio no ambiente. Portanto, **nenhum problema de qualidade pôde ser medido** e **nenhum percentual foi inventado** (regra 11/13). Onde não há como medir: *"Frequência não determinável com as evidências atuais."*

## Estado atual
| Constatação | Classificação | Evidência |
|-------------|---------------|-----------|
| Não existem datasets de negócio no repositório. | Fato | `find` (ausência) |
| Schema do Supabase não inspecionado. | Informação ausente | MCP não autorizado |
| Logo, qualidade de dados do legado é **não analisável** nesta fase. | Inferência | — |

## Riscos de qualidade herdados da Fase 1 (hipóteses, NÃO medidos)

> Registrados para a coleta futura. Cada um traz **como medir** quando houver dados. Impacto/risco conceituais.

| ID | Problema (hipótese) | Fonte afetada | Evidência atual | Frequência | Impacto | Como medir (futuro) | Correção possível | Prioridade |
|----|---------------------|---------------|-----------------|-----------|---------|---------------------|-------------------|:---:|
| Q1 | Duplicidade de cadastros (pessoa/empresa) | Cadastros de origem | Sem evidência | Não determinável | Visão única inviável | % de registros com CPF/CNPJ/e-mail repetidos após normalização | Deduplicação com revisão | Alta |
| Q2 | Campos ausentes (CPF, e-mail, telefone) | Cadastros | Sem evidência | Não determinável | Falha de identificação/contato | % de nulos por campo-chave | Regras de obrigatoriedade | Alta |
| Q3 | Formatos incompatíveis (CPF/telefone/e-mail) | Cadastros | Sem evidência | Não determinável | Falha de match/integração | % fora do padrão por regex/validador | Normalização | Média |
| Q4 | Cadastros desatualizados | Cadastros | Sem evidência | Não determinável | Comunicação/decisão erradas | Idade média do último update | Rotina de atualização | Média |
| Q5 | Documentos inválidos (CPF/CNPJ) | Cadastros | Sem evidência | Não determinável | Emissão/faturamento incorretos | % que falha dígito verificador | Validação na origem | Alta |
| Q6 | Telefones/e-mails inválidos | Contato | Sem evidência | Não determinável | Falha de campanha/atendimento | % que falha validação/bounce | Verificação | Média |
| Q7 | Empresas encerradas ativas na base | PJ | Sem evidência | Não determinável | Abordagem/faturamento indevidos | Cruzamento com situação cadastral | Enriquecimento | Média |
| Q8 | Pessoa com múltiplos cadastros | Cadastros | Sem evidência | Não determinável | Duplicidade (=Q1) | Clusterização por identidade | Merge auditável | Alta |
| Q9 | Empresa com múltiplos responsáveis conflitantes | Vínculos | Sem evidência | Não determinável | Decisão/acesso errados | Contagem de vínculos ativos conflitantes | Regra de vigência | Média |
| Q10 | Conflitos entre sistemas (mesmo cliente, dados diferentes) | Multi-sistema | Sem evidência | Não determinável | Dado não confiável | Diff cross-sistema por entidade | Fonte-mestre | Alta |
| Q11 | Falta de histórico/vigência | Vínculos | Sem evidência | Não determinável | Perda de rastreabilidade | Presença de datas início/fim | Modelo temporal | Alta |
| Q12 | Falta de origem/responsável do dado | Todos | Sem evidência | Não determinável | Sem accountability | % de registros sem metadados de origem | Linhagem obrigatória | Média |
| Q13 | Dados sem finalidade/base legal conhecida | Todos | Sem evidência | Não determinável | Risco LGPD | Mapa finalidade×dado | Governança/ROPA | Alta |

## Achado de qualidade REAL (do ambiente, não hipótese)
| ID | Achado | Classificação | Evidência | Impacto |
|----|--------|---------------|-----------|---------|
| Q-REAL-01 | Metadados do app ainda são do template (`title/description: "Create Next App"`). | Fato | `src/app/layout.tsx` | Indica estágio inicial; não é problema de dados de negócio, mas confirma greenfield. |

## Métricas de qualidade propostas (para quando houver dados)
Completude (nulos por campo), unicidade (taxa de duplicidade pós-normalização), validade (dígito verificador, formato), consistência (diff entre fontes), atualidade (idade do dado), rastreabilidade (presença de origem/responsável/vigência), conformidade (finalidade/base legal presentes). **Metas a definir após baseline.**

## Responsável recomendado
Função de **Governança/Engenharia de Dados** (a nomear — lacuna organizacional da Fase 1), com apoio do DPO para Q13.
