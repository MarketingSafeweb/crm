# 05 — Priorização e MVP

> **Status:** Rascunho para validação (v0.1) · **Data:** 2026-07-14
> **Aviso:** A priorização **não** resulta de votação dos agentes. É uma proposta analítica **revisada e contestada pelo Auditor Crítico**. Tudo é hipótese a validar com evidência. O MVP proposto é **de fundação**, não um CRM comercial completo.

---

## 1. Método de priorização

**Critérios (0–3):** Impacto no negócio · Impacto no cliente · Frequência · Urgência · Risco de segurança · Risco jurídico · Complexidade¹ · Dependência de dados · Dependência de integração · Capacidade de validação².

> ¹ **Complexidade** e ² **dependências** não *rebaixam* prioridade de um item de fundação — indicam faseamento e esforço.
> Regra de classe: um item é **Crítico** quando é **pré-condição** de outros e/ou combina **alto risco (segurança/jurídico) + alta frequência/urgência**. Fundação (identidade, governança, segurança, LGPD) é Crítica mesmo quando "invisível" ao usuário final.

---

## 2. Matriz de priorização (proposta inicial)

> Escala por célula: 0 (nulo) a 3 (máximo). "Score orientativo" soma os fatores de **valor/risco** (negócio, cliente, frequência, urgência, segurança, jurídico) e trata complexidade/dependências como **moduladores de faseamento**, não como redutores de prioridade.

| Problema | Neg. | Cli. | Freq. | Urg. | Seg. | Jur. | Complex. | Dep. dados | Dep. integr. | Validável | Classe (proposta) |
|----------|:---:|:---:|:---:|:---:|:---:|:---:|:---:|:---:|:---:|:---:|:---:|
| P1 Identidade (pessoa/empresa/papel/vínculo) | 3 | 3 | 3 | 3 | 2 | 3 | 3 | 3 | 2 | Média | **Crítico** |
| P2 Governança de dados (fonte-mestre, donos, retenção) | 3 | 2 | 3 | 3 | 2 | 3 | 3 | 3 | 2 | Média | **Crítico** |
| P3 Segurança: acesso (privilégio mínimo) + auditoria | 3 | 2 | 3 | 3 | 3 | 3 | 2 | 2 | 2 | Média | **Crítico** |
| P4 LGPD operacional (base legal, direitos, consentimento) | 2 | 3 | 2 | 3 | 3 | 3 | 2 | 2 | 1 | Média | **Crítico** |
| P5 Conflito retenção ICP-Brasil × exclusão LGPD | 2 | 2 | 1 | 3 | 2 | 3 | 1 | 1 | 1 | Alta | **Crítico** (decisão jurídica) |
| P6 Visão única / histórico completo | 3 | 3 | 3 | 2 | 1 | 1 | 3 | 3 | 3 | Média | **Alto** |
| P7 Qualidade / deduplicação | 2 | 2 | 3 | 2 | 2 | 2 | 3 | 3 | 2 | Alta | **Alto** |
| P8 Propriedade do cliente / atribuição (direto×parceiro) | 2 | 1 | 2 | 2 | 1 | 2 | 2 | 2 | 2 | Média | **Médio** |
| P9 Jornada cross-canal (não reapresentar) | 2 | 3 | 2 | 2 | 1 | 1 | 2 | 2 | 3 | Média | **Médio** |
| P10 Segmentação por papel (comunicação) | 2 | 2 | 2 | 1 | 1 | 2 | 1 | 2 | 1 | Alta | **Médio** |
| P11 Relação produto↔empresa↔usuário / pagador↔usuário | 2 | 2 | 2 | 2 | 1 | 2 | 2 | 2 | 2 | Média | **Alto→Médio** |
| P12 Processos manuais / integrações frágeis | 2 | 1 | 2 | 2 | 1 | 1 | 3 | 2 | 3 | Baixa-média | **Médio** |
| P13 Upsell / cross-sell | 2 | 1 | 1 | 1 | 0 | 1 | 2 | 3 | 2 | Baixa | **Baixo** |
| P14 IA aplicada (recomendação/automação) | 1 | 1 | 1 | 1 | 3 | 3 | 3 | 3 | 2 | Baixa | **Baixo** (posterior) |

---

## 3. Revisão do Auditor Crítico (contestação obrigatória)

| Item | Contestação do Auditor | Ajuste recomendado | Confiança |
|------|------------------------|--------------------|:---:|
| P5 (retenção × exclusão) | "Foi tratado como problema técnico; é **decisão jurídica** que pode bloquear a modelagem. Não subestimar." | Mantém Crítico, mas como **decisão/bloqueio jurídico**, não como feature. | Média |
| P6 (visão única) | "Tende a ser superestimado como *tela bonita*. Sem P1–P3, é ilusão." | Rebaixar de 'Crítico percebido' para **Alto dependente de P1–P3**. | Média |
| P7 (deduplicação) | "Risco de 'golden record' errado se feito antes de governança (P2)." | Alto, **após** P2 definir regras. | Média |
| P9 (cross-canal) | "Valor de cliente alto, mas depende de identidade única (P1)." | Médio, **dependente de P1**. | Média |
| P13/P14 (upsell, IA) | "Superestimados por entusiasmo. Sem dado de uso (HE30) e sem governança, é solução procurando problema." | Manter **Baixo/posterior**; exigir evidência de dado. | Média-alta |
| P8 (propriedade) | "Subestimado do ponto de vista de **conflito organizacional**; pode travar o projeto politicamente." | Elevar atenção de gestão, embora tecnicamente Médio. | Média |
| P3/P4 (segurança/LGPD) | "Nunca podem ser 'depois'. Corretamente Críticos." | Confirmado Crítico. | Alta |

**Conclusão do Auditor (confiança média-alta):** a ordenação correta prioriza **fundação** (P1–P5) e trata capacidades visíveis (P6, P9) como **dependentes**. Qualquer item de automação/IA (P13, P14) é **posterior** e condicionado a evidência de qualidade de dados.

---

## 4. Classes finais (pós-revisão)

| Classe | Problemas |
|--------|-----------|
| **Crítico** | P1 Identidade · P2 Governança · P3 Segurança(acesso+auditoria) · P4 LGPD · P5 Conflito ICP×LGPD (decisão jurídica) |
| **Alto** | P6 Visão única/histórico (dep. P1–P3) · P7 Qualidade/deduplicação (dep. P2) · P11 Modelo produto/usuário/pagador |
| **Médio** | P8 Propriedade/atribuição · P9 Cross-canal (dep. P1) · P10 Segmentação por papel · P12 Processos manuais |
| **Baixo/Posterior** | P13 Upsell/cross-sell · P14 IA aplicada |

---

## 5. Público prioritário (sugerido — a validar)

> Critério: escolher o público que **mais estressa o modelo de identidade/papéis**, pois valida a fundação com o caso mais difícil.

| Opção | Por quê | Confiança | Observação |
|-------|---------|:---:|------------|
| **Contador + Empresa multi-usuário** (recomendado) | Concentra papéis múltiplos, vínculos com vigência, titular≠usuário, pagador≠usuário, controlador×operador. | Média | Valida a fundação no cenário mais complexo. |
| PF simples (e-CPF próprio) | Mais simples, menor aprendizado sobre papéis. | Média | Bom para experiência, fraco para validar o modelo. |
| Parceiro/AR | Alto valor de canal, mas depende de definição jurídica prévia (controlador/operador). | Baixa-média | Melhor após P5/K8 decididos. |

> **A decisão de público não deve ser tomada só por agentes** — depende de volumes e de qual público a Diretoria considera estratégico (LACUNA — ver arquivo 06).

---

## 6. Jornada inicial recomendada (para descoberta, não construção)

> A "jornada inicial" aqui é a que o **modelo de identidade** precisa provar que compreende — não uma funcionalidade a construir.

**Recomendada:** **Identificação e representação de um agente com múltiplos papéis ao longo do tempo** — do primeiro registro à mudança/fim de vínculo (ex.: cenários C2, C3, C4, C5, C12).
- **Por quê:** exercita pessoa×empresa×papel×vínculo×vigência, acesso por papel e auditoria — o núcleo da fundação.
- **Resultado esperado:** um modelo conceitual validável que represente corretamente esses casos, com regras de acesso e trilha.
- **Confiança:** média (proposta analítica).

---

## 7. Escopo sugerido para o MVP (de fundação, não comercial)

> **Princípio (regra 16):** não construir um CRM amplo na primeira versão. O MVP prova a **fundação**, com um público e uma jornada, sob segurança/LGPD desde o início. **Segue condicionado à validação das hipóteses críticas e à decisão das lacunas.**

| # | Dentro do MVP (fundação) | Problema que resolve | Como se mede | Confiança |
|---|--------------------------|----------------------|--------------|:---:|
| M1 | Modelo conceitual de identidade: pessoa, empresa, contato, usuário, pagador, representante, parceiro, com **papéis e vínculos versionados**. | P1, P2 | Cenários C2–C5, C12 representados corretamente. | Média |
| M2 | Governança mínima: fonte-mestre, dono por domínio, dicionário dos dados do MVP, regra de qualidade e de retenção. | P2 | Cada dado do MVP tem dono, definição e política. | Média |
| M3 | Controle de acesso por privilégio mínimo + **trilha de auditoria** de acesso e alteração. | P3 | Todo acesso/alteração registrado; perfis por papel. | Média |
| M4 | LGPD operacional mínima: base legal por finalidade, registro de consentimento, e capacidade de **localizar** os dados de um titular. | P4 | Simular atendimento a 1 titular (acesso/correção). | Média |
| M5 | Histórico de relacionamento (não só vendas) para o público/jornada escolhidos. | P6 | Linha do tempo reconstruível para 1 agente. | Média |
| M6 | Um público prioritário + uma jornada (definidos após lacunas). | Foco | Escopo restrito e aprovado. | Média |

> **Nota:** M1–M4 são **conceituais/de governança** nesta fase — **não** implica construir software agora. O MVP técnico só começa após a Fase 1 aprovada e as lacunas resolvidas.

---

## 8. Itens fora do MVP (explícito)

| Fora do MVP | Motivo | Quando reconsiderar |
|-------------|--------|---------------------|
| Automação comercial (funil, cadências) | Depende de identidade+governança | Após fundação estável |
| Dashboards analíticos | Depende de dado confiável | Após qualidade de dados |
| IA (recomendação, generativa, agentes) | Depende de dados governados; risco alto | Fase futura, com governança de IA |
| Integração/migração de todos os sistemas | Fora da Fase 1 | Após inventário e arquitetura |
| Upsell/cross-sell | Sem dado de uso (HE30) | Após telemetria confiável |
| Portal self-service completo | Amplia escopo | Após MVP de fundação |
| Motor de comissionamento | Complexo; depende de propriedade (P8) | Após regras de canal |
| Escolha de stack/banco/framework | Proibido nesta fase | Fase de arquitetura |

---

## 9. Indicadores de sucesso (do MVP de fundação)

| Indicador | Definição | Como medir | Meta inicial *(a validar)* | Confiança |
|-----------|-----------|-----------|-----------------------------|:---:|
| Representação de papéis | Cenários multi-papel representados sem confundir entidades. | Checar C2–C5, C12 | 100% dos cenários-alvo | Média |
| Rastreabilidade de acesso | % de acessos/alterações com trilha. | Auditar amostra | 100% no escopo do MVP | Média |
| Prontidão LGPD | Tempo para localizar dados de um titular. | Simulação | Dentro do prazo legal | Média |
| Governança do dado | % de dados do MVP com dono+definição+retenção. | Revisão | 100% | Média |
| Confiabilidade | % de registros do escopo sem conflito entre fontes. | Diff cross-fonte | Alta (meta a definir) | Baixa-média |
| Adoção/validação por área | Áreas que validam o modelo conceitual. | Workshops de validação | Sem divergência crítica aberta | Média |
