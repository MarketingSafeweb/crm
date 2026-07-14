# 04 — Definição do Problema (consolidada da descoberta simulada)

> **Status:** Rascunho para validação (v0.1) · **Data:** 2026-07-14
> **Aviso:** Consolida as rodadas da simulação. As conclusões são **hipóteses fortes/moderadas**, não fatos. Confiança indicada em cada bloco. Complementa o documento `../fase-1-definicao-do-problema.md`.

---

## 1. Problema central

**Declaração (confiança média-alta como hipótese forte):**

> A Safeweb **não dispõe de uma representação única, confiável, governada e auditável dos agentes com quem se relaciona** (pessoa física, pessoa jurídica, contato, usuário, pagador, representante, parceiro) e dos **vínculos e papéis que cada um exerce ao longo do tempo**, tampouco do **histórico completo do relacionamento** (para além de vendas). A informação vive fragmentada por sistema, canal e área, sem fonte-mestre, sem governança e sem trilha de auditoria consolidada.

**Por que não é "falta de CRM":** a ausência de ferramenta é **consequência/limitação**, não causa. Construir um CRM sem resolver identidade, governança, segurança e conformidade **reproduziria** o problema em um sistema novo (risco confirmado por todos os agentes de fundação e pelo Auditor Crítico).

---

## 2. Problemas secundários

| # | Problema secundário | Classe | Confiança |
|---|---------------------|--------|:---:|
| PS1 | Identidade fragmentada (sem chave/entidade única de pessoa e empresa). | Hipótese forte | Média |
| PS2 | Papéis e vínculos não modelados com vigência temporal. | Hipótese forte | Média |
| PS3 | Governança de dados ausente/imatura (sem donos, dicionário, retenção). | Hipótese forte | Média |
| PS4 | Controle de acesso amplo e auditoria dispersa. | Hipótese forte | Média |
| PS5 | LGPD não operacionalizada por registro (base legal, direitos, consentimento). | Hipótese forte + Risco | Média |
| PS6 | Conflito retenção ICP-Brasil × exclusão LGPD sem posição formal. | Risco | Média |
| PS7 | Duplicidade e inconsistência de cadastros. | Hipótese moderada | Média |
| PS8 | Propriedade do cliente e atribuição de origem ambíguas (direto × parceiro). | Hipótese moderada | Média |
| PS9 | Histórico incompleto (foco em venda/emissão). | Hipótese moderada | Média |
| PS10 | Jornada quebrada entre canais (cliente se reapresenta). | Hipótese moderada | Média |
| PS11 | Relação produto↔empresa↔usuário e cliente↔pagador↔usuário mal representada. | Hipótese forte/moderada | Média |
| PS12 | Dependência de processos manuais e integrações frágeis. | Hipótese moderada | Baixa-média |

---

## 3. Sintomas percebidos (simulados — a confirmar com evidência)

| Sintoma (hipótese) | Aponta para | Confiança |
|--------------------|-------------|:---:|
| Relatórios de "clientes ativos" divergentes entre áreas. | PS1, PS3, PS7 | Média |
| Cliente recadastra dados que já forneceu. | PS1, PS9, PS10 | Média |
| Contador recebe comunicação de "cliente final". | PS2, PS8 | Baixa-média |
| Comissão disputada quando parceiro indica cliente existente. | PS8 | Média |
| Atendente abre vários sistemas para um caso. | PS1, PS4, PS12 | Média |
| Ex-colaborador/ex-contador mantém acesso. | PS4 | Média |
| Dificuldade de localizar todos os dados de um titular. | PS3, PS5 | Média |

---

## 4. Causas-raiz prováveis (hipóteses — a validar)

| # | Causa-raiz | Explica | Confiança |
|---|-----------|---------|:---:|
| CR1 | Crescimento por adição de sistemas por área (silos), sem camada comum de identidade. | PS1, PS7, PS12 | Média |
| CR2 | Modelo mental "cliente = venda/emissão", herdado do negócio transacional. | PS9, PS11 | Média |
| CR3 | Ausência de função formal de governança de dados. | PS3, PS4 | Média |
| CR4 | Papéis/vínculos tratados de forma implícita (na cabeça dos operadores), não no sistema. | PS2, PS8 | Média |
| CR5 | Conformidade (ICP-Brasil/LGPD) tratada por documentação pontual, não por design de dados. | PS5, PS6 | Média |
| CR6 | Integrações ponto-a-ponto sem contrato de dados e sem fonte-mestre. | PS1, PS12 | Baixa-média |

---

## 5. Impactos (observável vs. a instrumentar — nenhum número afirmado)

| Dimensão | Impacto | Tipo | Confiança |
|----------|---------|------|:---:|
| Decisão | Decisões sobre dado incompleto/divergente. | Observável | Média |
| Comercial | Oportunidades perdidas; abordagens duplicadas. | A instrumentar | Média |
| Experiência | Reapresentação do cliente; comunicação fora do papel. | Observável | Média |
| Eficiência | Retrabalho manual de reconciliação. | A instrumentar | Baixa-média |
| Segurança | Superfície ampliada por duplicidade e acesso amplo. | Observável | Média |
| Jurídico/LGPD | Dificuldade de accountability e de atender titulares. | Observável | Média |
| Reputação | Incidente com dado tem impacto desproporcional (empresa de segurança). | Risco | Média-alta |

---

## 6. Declaração do problema (três versões)

**Completa:**
> A Safeweb enfrenta a **ausência de uma visão única, confiável, governada e auditável dos agentes (pessoas, empresas) e dos múltiplos papéis e vínculos que exercem ao longo do tempo, com histórico completo do relacionamento**, que afeta **todas as áreas internas (Comercial, Marketing, Atendimento, CX, Operações, Produtos, Dados, Segurança, Jurídico, Financeiro, Gestão, Diretoria e times de Parceiros/AR) e os públicos externos (PF, PJ, contadores, parceiros, ARs, PAs, representantes, revendedores e clientes finais)**, porque *(hipótese)* **os dados nasceram em sistemas e canais isolados, sem camada comum de identidade, sem governança formal e sem controle de acesso e auditoria consolidados**, resultando em **decisões sobre dados incompletos, atrito e duplicidade na relação, ineficiência operacional e elevação dos riscos de segurança e de não conformidade com a LGPD (incluindo o conflito com a retenção exigida pela ICP-Brasil)**.

**Resumida:**
> A Safeweb não tem uma visão única, confiável e auditável de quem são seus clientes e parceiros e dos papéis que acumulam, porque os dados vivem fragmentados sem governança comum — degradando decisão, experiência, eficiência, segurança e conformidade.

**Executiva (3 linhas):**
> A Safeweb decide, vende e atende sem uma visão única e confiável de cada agente e dos papéis que ele acumula. Isso eleva risco de segurança e LGPD, gera retrabalho e perde oportunidades. Antes de construir, é preciso resolver identidade, governança e segurança.

---

## 7. Objetivos do projeto (como resultado, não funcionalidade)

**Objetivo principal:**
> Estabelecer as condições de negócio, governança e segurança para que a Safeweb conheça, com confiança e conformidade, cada agente e todo o histórico do relacionamento — de forma única, rastreável e auditável — antes de automatizar processos ou aplicar IA.

**Objetivos específicos:**
- Distinguir e relacionar pessoa, empresa, contato, usuário, pagador, representante e parceiro, com papéis e vínculos versionados no tempo.
- Tornar o histórico de relacionamento (não só vendas) recuperável e confiável.
- Garantir privacidade, segurança e LGPD como premissas desde o início (acesso por privilégio mínimo, auditoria, base legal, direitos do titular).
- Definir governança de dados: fonte-mestre, donos, qualidade, retenção/descarte.

**Curto prazo (Fase 1):** definir e validar o problema, hipóteses, riscos, escopo e evidências, com aprovação das áreas.
**Médio prazo:** modelo conceitual de identidade e governança que qualquer solução deve respeitar; priorização de problemas.
**Longo prazo (não prometido agora):** visão única operacional e IA responsável onde agregar valor.

**Não prometer nesta fase:** datas de entrega do CRM; escolha de tecnologia; ganhos de receita quantificados; integrações/migração; qualquer recurso de IA.

---

## 8. Escopo (fronteira do problema)

**Dentro da definição do problema:** identidade, papéis/vínculos, governança, segurança/acesso/auditoria, LGPD, histórico, qualidade de dados.

**Fora desta fase:** desenvolvimento, escolha de stack/banco/framework, integração, migração, dashboards, automação comercial, IA.

**Diferenciação obrigatória:**

| Conceito | Definição | Exemplo |
|----------|-----------|---------|
| Problema | Estado indesejado de negócio. | "Sem visão única e confiável dos agentes." |
| Necessidade | O que a área precisa. | "Atendimento precisa do histórico do contato." |
| Requisito | Condição verificável da solução (fase futura). | "Localizar todos os dados de um titular." |
| Solução | Abordagem escolhida (fase futura). | "CRM próprio com domínio de Identidade." |
| Funcionalidade | Recurso concreto (fase futura). | "Linha do tempo do cliente." |

---

## 9. Riscos (da definição incorreta do problema)

| Risco | Causa | Impacto | Prob. | Prevenção | Confiança |
|-------|-------|---------|:-----:|-----------|:---:|
| Reproduzir os silos no novo sistema | Não resolver identidade/governança antes | Falha estrutural cara | Alta | Fundação primeiro | Média |
| Escopo inflado (CRM amplo demais na v1) | Transformar desejos em requisitos | Custo/atraso/baixa adoção | Alta | Questionar cada funcionalidade | Média-alta |
| Exposição de dados | Segurança tardia | Incidente/sanção/reputação | Média | Security/privacy by design | Média |
| Descumprimento LGPD | Base legal/retenção não tratadas | Sanção | Média | DPO no núcleo da fase | Média |
| Conflito entre áreas não resolvido | Propriedade de cliente/dado ambígua | Bloqueio político | Média | Regras e arbitragem definidas | Média |
| IA prematura | Aplicar IA sobre dado ruim | Alucinação/viés/custo | Média | IA só após dados governados | Média-alta |
| Decisão sobre dado incorreto | Dado não confiável | Perda financeira/reputação | Média | Confiabilidade como meta | Média |

---

## 10. Conflitos legítimos registrados (não forçar consenso)

| # | Conflito | Alternativas | Quem decide (humano) |
|---|----------|--------------|----------------------|
| K1 | Visão completa × privilégio mínimo | Acesso por finalidade + mascaramento / perfis amplos com auditoria | Segurança + Jurídico + áreas |
| K3 | Propriedade do cliente (direto × parceiro) | Por origem / por vínculo ativo / arbitragem | Diretoria + Comercial + Parcerias |
| K4 | Retenção ICP-Brasil × exclusão LGPD | Exclusão parcial com retenção justificada | Jurídico/DPO |
| K5 | Prazo × fundação | Faseamento com fundação primeiro | Executivo + Gestão |
| K6 | IA × privacidade/qualidade | IA só após governança; regra onde possível | Jurídico + Segurança + Dados |
| K7 | Pagador × usuário (bloqueio por inadimplência) | Separar cobrança de uso | Financeiro + CX |
| K8 | Controlador × operador (cliente via parceiro) | Definição contratual formal | Jurídico + Parcerias |

---

## 11. Informações ausentes (lacunas explícitas)

1. Inventário real de sistemas e fonte-mestre por tipo de dado. *(ND)*
2. Volumes (clientes, empresas, certificados, parceiros, ARs, PAs, leads/mês). *(ND)*
3. Organograma, patrocínio e donos por área. *(ND)*
4. Existência de DPO e estado da conformidade LGPD. *(ND)*
5. Requisitos concretos de retenção da ICP-Brasil e sua conciliação com a LGPD. *(ND)*
6. Modelo atual de propriedade do cliente e de comissionamento. *(ND)*
7. Controlador × operador nos casos de parceiro. *(ND)*
8. Estado e confiabilidade das integrações atuais. *(ND)*
9. Orçamento, prazo e equipe. *(ND)*
10. Localidade de armazenamento/processamento e uso de terceiros/IA. *(ND)*
11. Definições de negócio para cliente/contato/usuário/pagador/parceiro. *(ambíguas)*
12. Métricas existentes (baseline). *(ND)*
