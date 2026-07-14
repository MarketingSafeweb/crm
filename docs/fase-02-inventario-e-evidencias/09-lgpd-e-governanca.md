# 09 — LGPD e Governança

> **Data:** 2026-07-14 · **Não é parecer jurídico** (§15, regra 19). Análise documental do que existe no ambiente. Classificação por ponto: Evidência encontrada / Evidência parcial / Não documentado / Potencial risco jurídico / Requer validação jurídica.

## Estado geral
O repositório é um scaffold sem dados de negócio e **sem qualquer documento de privacidade** (política, ROPA/registro de operações, termos de consentimento, contratos de operador). Portanto, quase todos os pontos da LGPD estão **Não documentados** no ambiente. Isto **não** significa que a Safeweb não os tenha — significa que **não há evidência aqui** (regra 22: registrar ausência).

## Análise por ponto (§15)

| Ponto LGPD | Situação no ambiente | Classificação |
|------------|----------------------|---------------|
| Finalidade do tratamento | Não há mapa de finalidades. | Não documentado |
| Base legal | Nenhuma base legal registrada por dado/uso. | Não documentado / Requer validação jurídica |
| Consentimento | Sem mecanismo/registro de consentimento no código. | Não documentado |
| Revogação | Sem fluxo. | Não documentado |
| Transparência | Sem política de privacidade no repo. | Não documentado |
| Compartilhamento | Sem mapa de compartilhamentos. | Não documentado |
| Operadores / Controladores / Suboperadores | **Supabase atua como operador** (processa dados em nome da Safeweb) — inferência do uso do produto; sem contrato/DPA no repo. | Evidência parcial + Requer validação jurídica |
| Retenção | Sem política de retenção. | Não documentado |
| Exclusão | Sem fluxo; **conflito potencial com retenção ICP-Brasil** (herdado da Fase 1). | Não documentado / Potencial risco jurídico |
| Correção | Sem fluxo. | Não documentado |
| Portabilidade | Sem fluxo. | Não documentado |
| Oposição / Restrição | Sem fluxo. | Não documentado |
| Solicitações de titulares | Sem processo evidenciável. | Não documentado |
| Dados de menores | Não determinável (domínio ICP-Brasil pode envolver PF diversas). | Não documentado |
| Dados biométricos | **Atenção:** certificação/identidade digital pode envolver biometria; **nenhuma evidência no repo**, mas é risco de domínio a validar. | Potencial risco jurídico / Requer validação |
| Decisões automatizadas | Nenhuma no ambiente; IA é fase futura. | Não documentado |
| Transferência internacional | **Supabase pode processar/armazenar fora do Brasil** — depende da região do projeto (URL não reproduzida). | Potencial risco jurídico / Requer validação |
| Registro das operações de tratamento (ROPA) | Inexistente no repo. | Não documentado |

## Riscos de privacidade (com origem)

| ID | Risco | Classificação | Evidência/Origem |
|----|-------|---------------|------------------|
| PRV-01 | Localidade de processamento do Supabase pode implicar transferência internacional de dados pessoais. | Potencial risco jurídico | `.mcp.json` (projeto Supabase); região ND |
| PRV-02 | Ausência de DPA/contrato de operador com Supabase evidenciável. | Requer validação jurídica | ausência |
| PRV-03 | Conflito retenção ICP-Brasil × exclusão LGPD (herdado, não resolvido). | Potencial risco jurídico | Fase 1 (`06-…`) |
| PRV-04 | Domínio pode envolver dados sensíveis/biométricos sem tratamento evidenciado. | Requer validação jurídica | Inferência de domínio |
| PRV-05 | Sem base legal/finalidade mapeadas → risco de tratamento sem enquadramento. | Potencial risco jurídico | ausência |

## Governança de dados
| Aspecto | Situação | Classificação |
|---------|----------|---------------|
| Dicionário de dados | Inexistente | Não documentado |
| Donos de dado / RACI | Inexistente | Não documentado |
| Fonte-mestre (MDM) | Inexistente/ND | Não documentado |
| Classificação de dados | Inexistente | Não documentado |
| Política de retenção/descarte | Inexistente | Não documentado |

## Lacunas e evidências necessárias
- Política de privacidade, ROPA, termos de consentimento, DPA com Supabase e demais operadores.
- Região de hospedagem do Supabase (para transferência internacional).
- Requisitos de retenção da ICP-Brasil (documento oficial) e posição sobre o conflito com a LGPD.
- Existência e identidade do **DPO** (lacuna organizacional da Fase 1).

> **Recomendação (não jurídica):** tratar LGPD e governança como **pré-condição** do MVP (coerente com os Críticos da Fase 1), com validação humana do Jurídico/DPO. Nenhuma conclusão de conformidade é afirmada (regra 19).
