# 02 — Simulação de Descoberta

> **Status:** Rascunho para validação (v0.1) · **Data:** 2026-07-14
> **Aviso:** Todo conteúdo abaixo é **simulação**. As falas dos agentes são hipóteses/inferências, jamais fatos sobre a Safeweb. Exemplos são **plausíveis e rotulados como simulação**. Confiança indicada por linha ou bloco.

---

## Rodada 1 — Visão individual dos agentes

> Formato compacto por agente. Colunas: **(1)** problema que o CRM deve resolver · **(2)** dores · **(3)** consulta · **(4)** gera · **(5)** decide · **(6)** sistemas/canais prováveis · **(7)** manual provável · **(8)** riscos · **(9)** espera do CRM · **(10)** fora da 1ª versão. Cada agente traz um **exemplo-hipótese**.

### 1. Executivo
| Campo | Conteúdo |
|---|---|
| Problema | Decidir sobre informação fragmentada e não confiável; risco reputacional de empresa de segurança. |
| Dores | Relatórios divergentes entre áreas; ROI difícil de comprovar. |
| Consulta | KPIs de carteira, receita, risco, adoção. |
| Gera | Diretrizes estratégicas, aprovação de escopo/orçamento. |
| Decide | Prioridade, patrocínio, tolerância a risco. |
| Sistemas | BI/relatórios executivos *(hipótese)*. |
| Manual | Consolidação manual de números entre áreas *(hipótese)*. |
| Riscos | Projeto amplo demais; baixa adoção; estouro de custo. |
| Espera | Visão única confiável e redução de risco. |
| Fora da v1 | IA avançada; automação comercial ampla. |
- **Exemplo-hipótese (simulação):** "Dois relatórios mostram números de clientes ativos diferentes; a diretoria não sabe qual é o correto." *(Confiança média — padrão comum em ambientes fragmentados.)*

### 2. Gestão do Projeto
| Campo | Conteúdo |
|---|---|
| Problema | Falta de escopo e sequência claros; dependências entre áreas não mapeadas. |
| Dores | Conflito de prioridade; risco de atraso; aprovação difusa. |
| Consulta | Escopo, riscos, capacidade, dependências. |
| Gera | Plano de fases, RACI, registro de decisões. |
| Decide | Sequência, critérios de aprovação, gestão de risco. |
| Sistemas | Ferramenta de gestão de projeto *(hipótese)*. |
| Manual | Coleta de status entre áreas *(hipótese)*. |
| Riscos | Escopo excessivo; falta de dono; ausência de baseline. |
| Espera | Fases claras com portões de aprovação. |
| Fora da v1 | Tudo que não resolva o problema-fundação (identidade/governança). |
- **Exemplo-hipótese (simulação):** "Comercial quer começar por automação de funil; Segurança exige governança de acesso antes — sem sequenciamento, ambos travam." *(Confiança média.)*

### 3. Comercial B2B
| Campo | Conteúdo |
|---|---|
| Problema | Sem visão da conta e de quem decide; oportunidades duplicadas com parceiros. |
| Dores | Não saber histórico da conta; disputa de propriedade da oportunidade. |
| Consulta | Contas, contatos, decisores, histórico, renovação. |
| Gera | Oportunidades, notas, forecast. |
| Decide | Abordagem, priorização de contas, proposta. |
| Sistemas | Ferramenta comercial, e-mail, WhatsApp *(hipótese)*. |
| Manual | Enriquecimento de conta e checagem de duplicidade *(hipótese)*. |
| Riscos | Abordar cliente de parceiro; ofertar a inadimplente; dado desatualizado. |
| Espera | Histórico da conta e alerta de renovação. |
| Fora da v1 | Forecast preditivo por IA. |
- **Exemplo-hipótese (simulação):** "Vendedor liga para empresa que já é atendida por um parceiro, gerando conflito de canal." *(Confiança média.)*

### 4. Comercial B2C
| Campo | Conteúdo |
|---|---|
| Problema | Não reconhecer cliente recorrente; abandono sem causa registrada. |
| Dores | Recadastro; oferta irrelevante; sem histórico de produto. |
| Consulta | Cliente, produtos anteriores, status de renovação. |
| Gera | Pedidos, interações, motivos de abandono. |
| Decide | Oferta, reengajamento, canal. |
| Sistemas | E-commerce, atendimento, WhatsApp *(hipótese)*. |
| Manual | Reconciliação de cliente entre canais *(hipótese)*. |
| Riscos | Comunicar sem consentimento; duplicar cadastro. |
| Espera | Identificação do cliente e histórico simples. |
| Fora da v1 | Recomendação automática de produto. |
- **Exemplo-hipótese (simulação):** "Cliente que já tem e-CPF recebe campanha de 'primeiro certificado'." *(Confiança média.)*

### 5. Parcerias
| Campo | Conteúdo |
|---|---|
| Problema | Propriedade do cliente ambígua; carteiras e comissões sem rastreabilidade. |
| Dores | Indicação não registrada; conflito direto × indireto; separação de carteiras. |
| Consulta | Vínculos de canal, carteira, produção, indicações. |
| Gera | Contratos de canal, registros de indicação, comissões. |
| Decide | Atribuição de cliente, elegibilidade a comissão. |
| Sistemas | Portal de parceiros *(hipótese)*. |
| Manual | Conferência de comissão e atribuição *(hipótese)*. |
| Riscos | Pagar comissão errada; expor cliente de um parceiro a outro. |
| Espera | Regras claras de propriedade e carteira. |
| Fora da v1 | Motor de comissionamento complexo. |
- **Exemplo-hipótese (simulação):** "Parceiro indica cliente que já existe na base por venda direta — de quem é a comissão?" *(Confiança média.)*

### 6. Marketing
| Campo | Conteúdo |
|---|---|
| Problema | Base duplicada; origem de lead perdida; consentimento incerto. |
| Dores | Segmentar por papel; medir atribuição; base suja. |
| Consulta | Origem, perfil, consentimento, histórico de comunicação. |
| Gera | Campanhas, scoring, listas segmentadas. |
| Decide | Segmento, canal, mensagem. |
| Sistemas | Automação de marketing, formulários, site *(hipótese)*. |
| Manual | Limpeza e deduplicação de listas *(hipótese)*. |
| Riscos | Enviar sem base legal; falar errado ao papel; duplicar contato. |
| Espera | Base confiável com consentimento e origem. |
| Fora da v1 | Personalização por IA. |
- **Exemplo-hipótese (simulação):** "Contador recebe comunicação de 'cliente final' porque o papel não está modelado." *(Confiança média.)*

### 7. Atendimento
| Campo | Conteúdo |
|---|---|
| Problema | Sem visão completa do contato; cliente se reapresenta a cada canal. |
| Dores | Abrir muitos sistemas; sem histórico; reabertura. |
| Consulta | Histórico de contatos, produtos, pendências. |
| Gera | Tickets, notas, motivos, resoluções. |
| Decide | Encaminhamento, resolução, prioridade. |
| Sistemas | Atendimento, WhatsApp, telefonia *(hipótese)*. |
| Manual | Busca de histórico entre sistemas *(hipótese)*. |
| Riscos | Ver dado demais (privilégio excessivo); agir sobre dado errado. |
| Espera | Linha do tempo única do contato. |
| Fora da v1 | Bot de atendimento autônomo. |
- **Exemplo-hipótese (simulação):** "Atendente não sabe que o cliente já abriu 3 chamados sobre o mesmo problema." *(Confiança média.)*

### 8. Customer Experience
| Campo | Conteúdo |
|---|---|
| Problema | Jornada quebra entre canais; esforço alto do cliente. |
| Dores | Sem medição de jornada; inconsistência multicanal. |
| Consulta | Pontos de contato, satisfação, esforço. |
| Gera | Mapas de jornada, indicadores de esforço. |
| Decide | Onde reduzir fricção. |
| Sistemas | Pesquisa/NPS, atendimento *(hipótese)*. |
| Manual | Consolidação de feedback *(hipótese)*. |
| Riscos | Métrica sem dado confiável; conclusão enviesada. |
| Espera | Visão de jornada ponta a ponta. |
| Fora da v1 | Orquestração automatizada de jornada. |
- **Exemplo-hipótese (simulação):** "Cliente compra no e-commerce e pede suporte por WhatsApp; a jornada não se conecta." *(Confiança média.)*

### 9. Operações
| Campo | Conteúdo |
|---|---|
| Problema | Dados imprecisos para emitir/validar; muito processo manual. |
| Dores | Reprocessamento; exceções; validação repetida. |
| Consulta | Dados de identidade, status de emissão, evidências. |
| Gera | Emissões, validações, evidências, logs operacionais. |
| Decide | Prosseguir/recusar emissão (com supervisão humana). |
| Sistemas | Emissão, validação, AR/PA *(hipótese)*. |
| Manual | Validação e reconciliação manual *(hipótese)*. |
| Riscos | Emitir com dado errado; perder evidência exigida. |
| Espera | Dado confiável e rastreável para operar. |
| Fora da v1 | Automação de decisão de emissão. |
- **Exemplo-hipótese (simulação):** "Evidência de validação fica em pasta separada do cadastro comercial, dificultando auditoria." *(Confiança média.)*

### 10. Produtos
| Campo | Conteúdo |
|---|---|
| Problema | Relação produto ↔ pessoa ↔ empresa ↔ usuário mal representada. |
| Dores | Regras de elegibilidade/validade dispersas; sinais de uso soltos. |
| Consulta | Catálogo, contratos, uso, renovação. |
| Gera | Regras de produto, modalidades, validades. |
| Decide | Elegibilidade, combinações, ciclo do produto. |
| Sistemas | Catálogo/comercial *(hipótese)*. |
| Manual | Regras aplicadas "de cabeça" *(hipótese)*. |
| Riscos | Vender produto inelegível; validade incorreta. |
| Espera | Modelo claro de produto e titularidade. |
| Fora da v1 | Recomendação de portfólio por IA. |
- **Exemplo-hipótese (simulação):** "e-CNPJ é do CNPJ, mas o usuário é uma PF — o sistema precisa separar titular e usuário." *(Confiança alta — decorre da natureza dos produtos ICP-Brasil.)*

### 11. Dados
| Campo | Conteúdo |
|---|---|
| Problema | Sem chave única de identidade; duplicidade; fontes conflitantes. |
| Dores | Sem fonte-mestre; linhagem inexistente; padronização fraca. |
| Consulta | Todas as fontes; chaves; histórico. |
| Gera | Dados mestres, regras de qualidade, linhagem. |
| Decide | Fonte-mestre, regra de deduplicação, padrão. |
| Sistemas | Todos os que guardam dado de cliente *(a inventariar)*. |
| Manual | Reconciliação e deduplicação manual *(hipótese)*. |
| Riscos | "Golden record" errado; propagar erro; perder histórico. |
| Espera | Identidade governada e confiável. |
| Fora da v1 | Migração completa de todos os sistemas. |
- **Exemplo-hipótese (simulação):** "Mesma pessoa aparece como 3 registros por variação de CPF/nome/e-mail entre sistemas." *(Confiança média.)*

### 12. Arquitetura
| Campo | Conteúdo |
|---|---|
| Problema | Sem domínios e limites definidos; integrações ponto-a-ponto frágeis. |
| Dores | Acoplamento; sem eventos auditáveis; fonte da verdade difusa. |
| Consulta | Domínios, fluxos, integrações. |
| Gera | Princípios de domínio, contratos de dados, rastreabilidade. |
| Decide | Fronteiras de domínio (não tecnologia). |
| Sistemas | Diagramas/documentação *(hipótese)*. |
| Manual | — |
| Riscos | Arquitetura prematura; reproduzir silos. |
| Espera | Domínios claros antes de qualquer build. |
| Fora da v1 | Escolha de stack/banco/framework. |
- **Exemplo-hipótese (simulação):** "Sem um domínio de Identidade como fonte da verdade, cada sistema mantém seu próprio 'cliente'." *(Confiança média.)*

### 13. Segurança da Informação
| Campo | Conteúdo |
|---|---|
| Problema | Acessos dispersos; sem trilha de auditoria consolidada; superfície ampliada por duplicidade. |
| Dores | Privilégio excessivo; segregação fraca; segredos dispersos. |
| Consulta | Perfis de acesso, logs, incidentes. |
| Gera | Políticas de acesso, trilhas de auditoria, controles. |
| Decide | Quem acessa o quê; como se audita; resposta a incidente. |
| Sistemas | IAM, logs, monitoramento *(hipótese)*. |
| Manual | Concessão/revogação manual de acesso *(hipótese)*. |
| Riscos | Vazamento; acesso indevido; ameaça interna. |
| Espera | Privilégio mínimo e auditoria por design. |
| Fora da v1 | — (segurança nunca é "fora"); mas SIEM avançado pode ser posterior. |
- **Exemplo-hipótese (simulação):** "Atendente consegue exportar base inteira de clientes sem registro de auditoria." *(Confiança média — risco clássico.)*

### 14. Jurídico e LGPD
| Campo | Conteúdo |
|---|---|
| Problema | Base legal e direitos do titular não rastreáveis; conflito retenção × exclusão. |
| Dores | Atender titular é difícil; consentimento não central; terceiros/IA. |
| Consulta | Bases legais, consentimentos, contratos, compartilhamentos. |
| Gera | Requisitos de conformidade, pareceres, RIPD. |
| Decide | Base legal, o que pode ser compartilhado/enviado a IA. |
| Sistemas | Gestão de consentimento/contratos *(hipótese)*. |
| Manual | Localização manual de dados do titular *(hipótese)*. |
| Riscos | Sanção; não atender prazo legal; decisão automatizada indevida. |
| Espera | Accountability demonstrável desde o início. |
| Fora da v1 | Automação de decisões com efeito jurídico. |
- **Exemplo-hipótese (simulação):** "Titular pede exclusão, mas parte dos dados deve ser retida por exigência da ICP-Brasil — como conciliar?" *(Confiança média — tensão regulatória real a confirmar.)*

### 15. Financeiro
| Campo | Conteúdo |
|---|---|
| Problema | Confusão entre cliente, pagador e usuário; conciliação de comissão. |
| Dores | Faturar errado; inadimplência mal atribuída; reembolso ambíguo. |
| Consulta | Faturas, pagamentos, contratos, comissões. |
| Gera | Faturamento, conciliação, status de inadimplência. |
| Decide | Cobrança, reembolso, bloqueio (com cautela). |
| Sistemas | ERP/financeiro *(hipótese)*. |
| Manual | Conciliação manual *(hipótese)*. |
| Riscos | Bloquear usuário por inadimplência do pagador; comissão errada. |
| Espera | Relação clara pagador↔usuário↔contrato. |
| Fora da v1 | Motor de cobrança automatizado complexo. |
- **Exemplo-hipótese (simulação):** "Empresa paga o certificado, mas o usuário é um colaborador; bloquear o colaborador por inadimplência da empresa é adequado?" *(Confiança média.)*

### 16. Inteligência Artificial
| Campo | Conteúdo |
|---|---|
| Problema | Risco de aplicar IA onde regra basta e de automatizar decisão crítica. |
| Dores | Dados de baixa qualidade inviabilizam IA confiável. |
| Consulta | Dados históricos confiáveis, contexto de decisão. |
| Gera | Recomendações (sempre revisáveis), registros de decisão. |
| Decide | Nada crítico sozinho; apenas sugere com supervisão. |
| Sistemas | Camada de IA futura *(hipótese)*. |
| Manual | Revisão humana obrigatória. |
| Riscos | Alucinação; viés; vazamento a modelo externo; falta de explicabilidade. |
| Espera | Base de dados confiável e governada antes de qualquer IA. |
| Fora da v1 | Toda IA generativa/agentes autônomos. |
- **Exemplo-hipótese (simulação):** "IA sugere abordar cliente que acabou de reclamar formalmente — ação comercial inadequada." *(Confiança média.)*

### 17. Cliente Pessoa Física
| Campo | Conteúdo |
|---|---|
| Problema | Fricção e falta de continuidade; dúvidas de privacidade. |
| Dores | Recadastro; renovação confusa; oferta irrelevante. |
| Consulta | Seus certificados, faturas, status. |
| Gera | Interações, solicitações, consentimento. |
| Decide | Comprar, renovar, pedir correção/exclusão. |
| Sistemas | Site, WhatsApp, atendimento *(hipótese)*. |
| Manual | — |
| Riscos | Uso indevido de seus dados; comunicação sem consentimento. |
| Espera | Facilidade, clareza e proteção. |
| Fora da v1 | Portal de autoatendimento completo. |
- **Exemplo-hipótese (simulação):** "Cliente não entende por que precisa reenviar documentos que já forneceu na compra anterior." *(Confiança média.)*

### 18. Cliente Empresarial
| Campo | Conteúdo |
|---|---|
| Problema | Sem gestão centralizada de usuários e certificados da empresa. |
| Dores | Trocar representante legal; controlar quem compra; fatura única. |
| Consulta | Certificados, usuários, faturas, renovações. |
| Gera | Solicitações, aprovações internas, dados de usuários. |
| Decide | Quem compra/gere; renovação; permissões internas. |
| Sistemas | Portal empresarial *(hipótese)*. |
| Manual | Controle em planilha própria *(hipótese)*. |
| Riscos | Ex-colaborador com certificado ativo; exposição de dados. |
| Espera | Controle, relatórios e segurança. |
| Fora da v1 | Administração self-service avançada. |
- **Exemplo-hipótese (simulação):** "Empresa troca de representante legal e não há processo claro para atualizar quem responde pelos certificados." *(Confiança média.)*

### 19. Contador
| Campo | Conteúdo |
|---|---|
| Problema | Papéis múltiplos (cliente/parceiro/indicador/representante) misturados; dados próprios × de clientes sem separação. |
| Dores | Gerir muitos clientes; comissões de indicação; permissões por empresa. |
| Consulta | Certificados e status de cada cliente. |
| Gera | Indicações, solicitações em nome de clientes. |
| Decide | Agir por cliente; indicar; renovar. |
| Sistemas | Portal contador/parceiro *(hipótese)*. |
| Manual | Controle manual de carteira *(hipótese)*. |
| Riscos | Ver dado de cliente que não representa mais; mistura de titularidade. |
| Espera | Separação clara de papéis e dados. |
| Fora da v1 | Painel avançado multi-cliente. |
- **Exemplo-hipótese (simulação):** "Contador deixa de atender uma empresa, mas continua com acesso aos certificados dela." *(Confiança média — risco de acesso residual.)*

### 20. Auditor Crítico (visão inicial)
- Observa que **quase toda a Rodada 1 é hipótese** e que várias "dores" são desejos de funcionalidade, não problemas comprovados.
- Sinaliza risco de **escopo inflado** já na primeira rodada (muitos "espera do CRM").
- Exige que cada dor seja rastreada a **evidência** (ver arquivo 03).
- **Confiança das conclusões da Rodada 1:** predominantemente **média/baixa** — nenhuma deve virar requisito sem validação.

---

## Rodada 2 — Questionamento cruzado

> Cada agente questiona ≥3 outros. Registro dos pontos de tensão (não resolvidos aqui).

| Quem questiona | Quem é questionado | Questão | Tensão revelada | Confiança |
|----------------|--------------------|---------|-----------------|:---:|
| Segurança | Atendimento | "Você precisa mesmo ver *todos* os dados ou só os do caso?" | Privilégio mínimo × visão completa | Média |
| Segurança | Marketing | "Com que base legal você exporta listas?" | Segurança/LGPD × geração de demanda | Média |
| Jurídico | Comercial B2C | "Consentimento cobre esse reengajamento?" | Conformidade × conversão | Média |
| Jurídico | IA | "Que dado você manda a modelo externo?" | Privacidade × capacidade de IA | Média |
| Dados | Todos | "Qual é a fonte-mestre de 'cliente'?" | Ninguém "possui" o dado hoje | Média |
| Parcerias | Comercial B2B | "Essa conta é sua ou do parceiro?" | Propriedade da oportunidade | Média |
| Comercial B2B | Financeiro | "Posso ofertar a quem está inadimplente?" | Venda × risco financeiro | Média |
| Financeiro | Parcerias | "Comissão vai para quem, se o cliente já existia?" | Atribuição de comissão | Média |
| Atendimento | Dados | "Por que vejo históricos conflitantes do mesmo cliente?" | Qualidade/duplicidade | Média |
| CX | Operações | "Por que a jornada quebra entre compra e suporte?" | Integração de processos | Média |
| Produtos | Dados | "O produto é da pessoa ou da empresa no cadastro?" | Modelagem de titularidade | Alta |
| Contador | Jurídico | "Sou controlador ou operador dos dados dos meus clientes?" | Papel LGPD do contador | Média |
| Cliente Empresarial | Segurança | "Como garanto que ex-colaborador perde acesso?" | Ciclo de vida de acesso | Média |
| Arquitetura | Executivo | "Dá para entregar rápido sem resolver identidade antes?" | Prazo × fundação | Média |
| Auditor | Executivo | "Qual evidência de que o problema é este e não outro?" | Definição × pressa | Alta |
| Auditor | Marketing/Comercial | "Isso é problema ou pedido de funcionalidade?" | Solução procurando problema | Alta |
| Executivo | Gestão | "Como isso vira ROI mensurável?" | Estratégia × execução | Média |
| Operações | Jurídico | "Posso excluir o que a ICP-Brasil manda reter?" | Retenção × exclusão | Média |

**Conflitos-semente (detalhados no arquivo 04 e na seção 9 deste):** privilégio mínimo × visão completa; conversão × consentimento; propriedade de cliente (direto × parceiro); retenção ICP-Brasil × exclusão LGPD; prazo × fundação de identidade/governança; IA × privacidade.

---

## Rodada 3 — Debates temáticos

### Debate A — Identidade e visão única
**Participantes:** Dados, Comercial B2B, Comercial B2C, Marketing, Atendimento, Jurídico, Segurança, Contador, Cliente Empresarial.

| Questão obrigatória | Posições simuladas (hipóteses) | Conflito/observação | Confiança |
|---------------------|-------------------------------|---------------------|:---:|
| Como identificar uma pessoa | CPF como candidato a chave; mas CPF pode faltar/variar; e-mail/telefone mudam. | CPF é sensível (LGPD) e não é garantia de unicidade prática. | Média |
| Como identificar uma empresa | CNPJ como candidato; filiais/matriz complicam. | CNPJ ≠ "conta comercial"; grupos econômicos. | Média |
| Como relacionar pessoa e empresa | Vínculos com tipo e vigência (representante legal, colaborador, contador). | Vínculo tem início/fim — histórico temporal essencial. | Alta |
| Como representar múltiplos papéis | Papel como entidade separada da pessoa, com vigência. | Não confundir pessoa com papel (regra 20). | Alta |
| Como evitar duplicidade | Deduplicação com regras + revisão humana. | Golden record errado propaga erro. | Média |
| Como manter histórico | Histórico de relacionamento (não só vendas), versionado. | Requer linhagem e retenção definidas. | Média |
| Separar cliente/contato/usuário/pagador/representante | Entidades distintas ligadas por papéis. | Núcleo do modelo conceitual futuro. | Alta |
| Documentos e identificadores | CPF/CNPJ/e-mail/telefone com confiabilidade e verificação. | Dado sensível → acesso restrito. | Média |
| Como corrigir dados incorretos | Fluxo de correção com trilha e origem. | Direito de correção (LGPD) + auditoria. | Média |

> **Conclusão do debate A (confiança média):** a **identidade** é o problema-fundação. Sem um modelo conceitual de pessoa/empresa/papel/vínculo com vigência, todas as demais capacidades ficam comprometidas. **Não** se decide chave técnica agora — decide-se que o modelo conceitual é pré-requisito.

### Debate B — Propriedade e acesso aos dados
**Participantes:** Segurança, Jurídico, Dados, Comercial, Atendimento, Marketing, Operações, Parcerias.

| Questão | Posições simuladas | Conflito | Confiança |
|---------|--------------------|----------|:---:|
| Quem pode visualizar | Por papel + finalidade (privilégio mínimo). | Atendimento/Comercial querem amplo. | Média |
| Quem pode editar | Dono do dado por domínio; demais leem. | Sem donos hoje *(lacuna)*. | Média |
| Quem pode exportar | Restrito, com registro e justificativa. | Marketing exporta listas. | Média |
| Quem pode excluir | Controlado; sujeito a retenção legal. | Exclusão × ICP-Brasil. | Média |
| Quem pode compartilhar | Só com base legal e contrato. | Parceiros/terceiros. | Média |
| Dados de acesso restrito | Dados pessoais sensíveis, documentos. | Classificação inexistente *(lacuna)*. | Média |
| Como registrar acessos | Trilha de auditoria consolidada. | Hoje disperso *(hipótese)*. | Média |
| Conceder/revogar permissões | Ciclo de vida de acesso (joiner/mover/leaver). | Acesso residual (ex-colaborador/ex-contador). | Média |
| Separar dados entre parceiros | Isolamento por carteira/tenant lógico. | Exposição cruzada entre parceiros. | Média |
| Evitar exposição indevida | Mascaramento + need-to-know. | Conveniência × segurança. | Média |

> **Conclusão do debate B (confiança média):** controle de acesso, auditoria e classificação de dados são **fundação de segurança/LGPD**, não etapa posterior. A separação de dados entre parceiros e o ciclo de vida de acesso são pontos críticos.

### Debate C — Jornada comercial e relacionamento
**Participantes:** Comercial B2B, Comercial B2C, Marketing, Parcerias, Atendimento, CX, Produtos, Financeiro.

| Questão | Posições simuladas | Conflito | Confiança |
|---------|--------------------|----------|:---:|
| Origem do lead | Registrar e preservar até a venda. | Atribuição perdida entre canais. | Média |
| Propriedade da oportunidade | Regra explícita direto × parceiro. | Disputa de canal. | Média |
| Relação parceiro–cliente | Vínculo com vigência e escopo de acesso. | Parceiro "dono" × Safeweb controladora. | Média |
| Histórico de interações | Consolidado e cross-canal. | Silos. | Média |
| Renovação | Alerta e responsável claro. | Vários responsáveis (empresa/contador/usuário). | Média |
| Reativação | Baseada em consentimento e histórico. | LGPD. | Média |
| Upsell/cross-sell | A partir de uso real. | Dado de uso ausente *(lacuna)*. | Baixa |
| Abordagens duplicadas | Deduplicar contato e regra de contato. | Atrito com cliente. | Média |
| Conflito direto × indireto | Regra de propriedade + arbitragem. | Comercial × Parcerias. | Média |

> **Conclusão do debate C (confiança média):** o valor comercial depende de **identidade + histórico + regra de propriedade**. Sem a fundação, automações comerciais reproduzem o problema. Upsell por IA é prematuro (dado de uso ausente).

### Debate D — Segurança, LGPD e auditoria
**Participantes:** Segurança, Jurídico, Dados, Arquitetura, Operações, Auditor Crítico.

| Questão | Posições simuladas | Conflito/observação | Confiança |
|---------|--------------------|---------------------|:---:|
| Base legal | Definir por finalidade e papel. | Não mapeada hoje *(lacuna)*. | Média |
| Finalidade | Minimização e finalidade específica. | Marketing quer amplitude. | Média |
| Retenção | Por tipo de dado e exigência legal. | ICP-Brasil × LGPD. | Média |
| Exclusão | Atender titular respeitando retenção obrigatória. | Conflito regulatório. | Média |
| Correção | Fluxo com trilha e origem. | — | Média |
| Consentimento | Central, versionado, revogável. | Disperso hoje *(hipótese)*. | Média |
| Logs | Imutáveis e auditáveis. | Hoje por sistema *(hipótese)*. | Média |
| Auditoria | Trilha consolidada de acesso e mudança. | Fundação. | Alta |
| Criptografia | Em repouso e trânsito; segredos gerenciados. | — | Média |
| Incidentes | Plano de resposta e notificação. | Reputacional. | Média |
| Compartilhamento | Contratos e finalidade. | Terceiros/parceiros. | Média |
| Fornecedores | Due diligence e cláusulas LGPD. | IA de terceiros. | Média |
| Continuidade/Recuperação | Backup, RTO/RPO definidos. | *(lacuna de requisitos)* | Baixa |

> **Conclusão do debate D (confiança média/alta):** segurança, LGPD e auditoria formam o **bloco crítico de fundação**. O conflito **retenção ICP-Brasil × exclusão LGPD** exige parecer jurídico formal antes de qualquer modelagem.

### Debate E — Uso futuro de IA
**Participantes:** IA, Segurança, Jurídico, Dados, Atendimento, Comercial, Marketing, CX, Auditor Crítico.

| Questão | Posições simuladas | Observação | Confiança |
|---------|--------------------|-----------|:---:|
| Onde a IA pode apoiar | Sumarização de histórico, deduplicação assistida, triagem/priorização. | Sempre com revisão humana. | Média |
| Onde não deve decidir | Emissão/validação, exclusão de dados, decisões jurídicas/financeiras. | Supervisão humana obrigatória. | Alta |
| Casos que exigem aprovação humana | Qualquer efeito jurídico, financeiro ou de emissão. | Regra 19. | Alta |
| Dados que poderiam ir a modelo externo | Apenas dados minimizados/anonimizados, com base legal. | Preferir processamento interno. | Média |
| Dados que não devem ir | Pessoais sensíveis, documentos, segredos. | Risco de vazamento. | Média |
| Prevenir alucinação | Grounding em dados confiáveis, limites de escopo. | Dado ruim → IA ruim. | Média |
| Explicar recomendações | Explicabilidade e rastro da origem. | Exigência de auditoria. | Média |
| Registrar intervenções | Log de toda sugestão/ação de IA. | Accountability. | Média |
| Medir qualidade | Métricas de acerto + feedback humano. | *(a definir)* | Baixa |
| Desligar/limitar IA | "Kill switch" e limites por caso. | Governança de IA. | Média |

> **Conclusão do debate E (confiança média/alta):** IA é **fase futura** e **subordinada** à fundação de dados/segurança/LGPD. Muitos casos citados se resolvem com **regra convencional** (ex.: alerta de renovação = regra, não IA). Nenhuma decisão crítica automatizada.

---

## Rodada 4 — Cenários simulados

> 15+ cenários. Todos **simulados/plausíveis**, não relatos reais. Cada um lista: atores, papéis, relações, dados, sistemas, permissões, riscos, regras, exceções, evidências, resultado esperado. Confiança de que o cenário é **relevante para o CRM**: em geral **alta**; confiança sobre **como a Safeweb o trata hoje**: **ND** (a validar).

### C1 — Pessoa compra e-CPF para si
- **Atores/Papéis:** PF (titular = usuário = pagador). **Relações:** todas na mesma pessoa.
- **Dados:** identidade, documento, pagamento, consentimento. **Sistemas:** e-commerce, emissão, financeiro.
- **Permissões:** titular acessa o próprio. **Riscos:** duplicidade se já for cliente. **Regras:** 1 titular = 1 e-CPF ativo *(hipótese de regra)*.
- **Exceções:** já possui e-CPF. **Evidências:** documento validado. **Resultado:** certificado emitido e vinculado ao titular único.

### C2 — Pessoa representa mais de uma empresa
- **Atores:** PF; Empresas A e B. **Papéis:** representante legal de A e B (simultâneo).
- **Dados:** vínculos PF↔A e PF↔B com vigência. **Sistemas:** comercial, emissão. **Permissões:** agir por A e por B, sem misturar.
- **Riscos:** confundir dados de A e B; acesso indevido cruzado. **Regras:** papéis independentes por empresa. **Exceções:** deixa de representar A.
- **Evidências:** procuração/contrato social. **Resultado:** ações segregadas por empresa, com histórico por vínculo.

### C3 — Contador administra certificados de vários clientes
- **Atores:** Contador; Empresas 1..N. **Papéis:** representante/operador por cliente.
- **Dados:** carteira de clientes, certificados, vigências. **Sistemas:** portal contador, emissão. **Permissões:** só clientes ativos que representa.
- **Riscos:** ver cliente que não representa mais; mistura de titularidade. **Regras:** acesso limitado à carteira vigente. **Exceções:** fim de vínculo.
- **Evidências:** vínculo contador↔empresa (contrato/autorização). **Resultado:** gestão multi-cliente com isolamento e trilha.

### C4 — Contador é também cliente e parceiro
- **Atores:** Contador (PF), como cliente (e-CPF próprio), parceiro (indica) e representante (de clientes).
- **Dados:** papéis múltiplos na mesma pessoa. **Sistemas:** portal, comercial, financeiro. **Permissões:** distintas por papel.
- **Riscos:** misturar dados próprios × de clientes; comissão × titularidade. **Regras:** separar papéis e dados (regra 20). **Exceções:** conflito de interesse.
- **Evidências:** contratos por papel. **Resultado:** papéis coexistem sem contaminação de dados/acesso.

### C5 — Empresa com vários usuários de certificados
- **Atores:** Empresa; colaboradores (usuários); representante legal; responsável financeiro.
- **Dados:** usuários, certificados por usuário, titularidade da empresa. **Sistemas:** portal empresarial, emissão, financeiro. **Permissões:** admin da conta gere usuários.
- **Riscos:** ex-colaborador com certificado ativo. **Regras:** titular = empresa; usuário = pessoa. **Exceções:** desligamento.
- **Evidências:** vínculo empregatício/autorização. **Resultado:** gestão de usuários com ciclo de vida de acesso.

### C6 — Pagador não é o usuário
- **Atores:** Empresa (pagador); colaborador (usuário); representante (contratante).
- **Dados:** relação pagador↔usuário↔contrato. **Sistemas:** financeiro, emissão. **Permissões:** financeiro vê cobrança; usuário vê seu certificado.
- **Riscos:** bloquear usuário por inadimplência do pagador. **Regras:** separar cobrança de uso. **Exceções:** inadimplência.
- **Evidências:** contrato e nota. **Resultado:** faturamento correto sem punir o usuário indevidamente.

### C7 — Parceiro indica cliente que já existe na base
- **Atores:** Parceiro; cliente pré-existente; comercial direto.
- **Dados:** origem prévia, indicação nova. **Sistemas:** portal parceiro, comercial. **Permissões:** conforme propriedade.
- **Riscos:** comissão indevida; conflito de atribuição. **Regras:** regra de atribuição (primeiro registro? vínculo ativo?) *(a definir)*. **Exceções:** cliente inativo reativado por parceiro.
- **Evidências:** data de origem, histórico. **Resultado:** atribuição decidida por regra explícita e auditável.

### C8 — Comercial direto e parceiro disputam a mesma oportunidade
- **Atores:** Comercial B2B; Parceiro; empresa-alvo.
- **Dados:** oportunidade, origem, vínculo. **Sistemas:** comercial, portal parceiro. **Permissões:** visibilidade por regra.
- **Riscos:** dupla abordagem; atrito com cliente. **Regras:** arbitragem de propriedade. **Exceções:** empate de registro.
- **Evidências:** timestamps, contratos de canal. **Resultado:** uma propriedade definida; a outra parte notificada.

### C9 — Cliente compra por um canal e pede suporte por outro
- **Atores:** Cliente; e-commerce; atendimento/WhatsApp.
- **Dados:** compra + ticket ligados ao mesmo cliente. **Sistemas:** e-commerce, atendimento. **Permissões:** atendente vê histórico necessário.
- **Riscos:** jornada quebrada; cliente se reapresenta. **Regras:** identidade única cross-canal. **Exceções:** contato anônimo.
- **Evidências:** vínculo de identidade. **Resultado:** suporte com contexto da compra.

### C10 — Cliente solicita correção de dados
- **Atores:** Titular; atendimento; DPO.
- **Dados:** dado incorreto + origem. **Sistemas:** onde o dado reside (múltiplos). **Permissões:** correção controlada.
- **Riscos:** corrigir em um sistema e não em outro. **Regras:** propagação e trilha. **Exceções:** dado sob retenção legal.
- **Evidências:** solicitação registrada, base do dado. **Resultado:** correção propagada e auditada (direito LGPD atendido).

### C11 — Titular solicita exclusão de informações
- **Atores:** Titular; DPO; Operações; Jurídico.
- **Dados:** todos os dados do titular + base de retenção. **Sistemas:** todos. **Permissões:** exclusão controlada.
- **Riscos:** não localizar todos os dados; excluir o que deve ser retido (ICP-Brasil). **Regras:** exclusão parcial respeitando retenção obrigatória. **Exceções:** conflito regulatório.
- **Evidências:** inventário de onde estão os dados; parecer jurídico. **Resultado:** direito atendido no prazo, com registro do que foi retido e por quê. *(Confiança de que hoje é difícil: média — hipótese.)*

### C12 — Empresa troca representante legal
- **Atores:** Empresa; representante antigo e novo.
- **Dados:** vínculo com vigência (encerra antigo, inicia novo). **Sistemas:** comercial, emissão, portal. **Permissões:** revogar antigo, conceder novo.
- **Riscos:** acesso residual do antigo. **Regras:** vínculo temporal + revogação imediata. **Exceções:** sobreposição de período.
- **Evidências:** ato societário. **Resultado:** transição sem acesso residual, com histórico preservado.

### C13 — Cliente com cadastro duplicado
- **Atores:** Cliente; Dados; Atendimento.
- **Dados:** N registros da mesma pessoa. **Sistemas:** múltiplos. **Permissões:** merge controlado.
- **Riscos:** golden record errado; perda de histórico. **Regras:** deduplicação com regras + revisão humana. **Exceções:** homônimos/CPF divergente.
- **Evidências:** amostra de duplicidade. **Resultado:** registro único com histórico consolidado e reversível.

### C14 — Certificado vence com responsáveis diferentes pela renovação
- **Atores:** Empresa, usuário, contador, comercial.
- **Dados:** vigência, responsáveis, canal. **Sistemas:** emissão, comercial, portal. **Permissões:** por papel.
- **Riscos:** múltiplas abordagens de renovação; ninguém renova. **Regras:** responsável primário definido. **Exceções:** conflito de responsáveis.
- **Evidências:** vínculos e histórico. **Resultado:** renovação coordenada, sem duplicidade.

### C15 — Recomendação de IA sugere ação comercial incorreta
- **Atores:** IA; comercial; cliente que reclamou.
- **Dados:** histórico recente (reclamação). **Sistemas:** CRM + camada de IA. **Permissões:** IA sugere, humano decide.
- **Riscos:** ação inadequada; dano à relação. **Regras:** supervisão humana obrigatória; grounding no histórico. **Exceções:** dado desatualizado.
- **Evidências:** log da recomendação + contexto. **Resultado:** humano rejeita; incidente registrado; modelo ajustado. *(Confiança: alta de que é um risco a prevenir.)*

### C16 (extra) — Cliente atendido por parceiro pede que a Safeweb fale diretamente
- **Atores:** Cliente final; parceiro; Safeweb.
- **Dados:** vínculo cliente↔parceiro; controladoria. **Sistemas:** portal, atendimento. **Permissões:** conforme controlador/operador.
- **Riscos:** conflito de canal; dúvida de quem controla o dado. **Regras:** definição controlador/operador (LGPD) *(a confirmar)*. **Exceções:** parceiro inativo.
- **Evidências:** contrato de parceria. **Resultado:** atendimento conforme papel jurídico definido.

---

## Rodada 5 — Identificação de problemas (consolidação)

> Detalhamento completo no arquivo `04-definicao-do-problema.md`. Resumo:

| Item | Descrição | Classificação | Confiança |
|------|-----------|---------------|:---:|
| Problema central | Ausência de visão única, confiável, governada e auditável de agentes e papéis, com histórico completo. | Hipótese forte | Média-alta |
| Identidade não modelada | Sem chave/entidade de pessoa, empresa, papel, vínculo com vigência. | Hipótese forte | Média |
| Governança ausente | Sem donos de dado, ciclo de vida, padronização. | Hipótese forte | Média |
| Acesso/auditoria dispersos | Sem privilégio mínimo e trilha consolidada. | Hipótese forte | Média |
| LGPD não operacionalizada | Base legal, direitos e retenção não rastreáveis; conflito com ICP-Brasil. | Hipótese forte + Risco | Média |
| Duplicidade/qualidade | Registros duplicados e inconsistentes. | Hipótese moderada | Média |
| Atribuição/propriedade | Origem de lead e propriedade de cliente ambíguas. | Hipótese moderada | Média |
| Processos manuais | Reconciliação e validação manuais. | Hipótese moderada | Baixa-média |
| Dados de uso ausentes | Sinais de uso de produto inexistentes. | Lacuna | Baixa |
| Volumes/sistemas | Nº e inventário desconhecidos. | Lacuna | ND |

---

## Rodada 6 — Priorização

> Matriz completa e revisão do Auditor no arquivo `05-priorizacao-e-mvp.md`. Síntese: **Críticos** = Identidade, Governança de dados, Segurança (acesso+auditoria), LGPD. **Altos** = Visão única/histórico, Qualidade/deduplicação. **Médios** = Atribuição/propriedade, Duplicidade comercial, Segmentação por papel. **Baixos** = Upsell/cross-sell, IA aplicada.

---

## Rodada 7 — Síntese executiva

> Consolidada no arquivo `04` (problema/objetivos) e `05` (MVP). Ver também `06` (bloqueios). Pontos-chave:
> - **Primeiro problema a resolver:** identidade + governança + segurança/LGPD (fundação), não automação comercial.
> - **Público prioritário sugerido:** aquele que estressa mais o modelo de identidade (contador/empresa multi-usuário) — **a validar**.
> - **MVP:** capacidade de representar agentes/papéis com acesso e auditoria conformes — **não** um CRM comercial completo.

---

## Conflitos identificados (registro consolidado)

| # | Conflito | Partes | Alternativas (não resolvidas) | Confiança |
|---|----------|--------|-------------------------------|:---:|
| K1 | Visão completa × privilégio mínimo | Atendimento/Comercial × Segurança | Acesso por finalidade + mascaramento; ou perfis amplos com auditoria forte. | Média |
| K2 | Conversão × consentimento | Marketing/Comercial × Jurídico | Base legal por finalidade; opt-in granular. | Média |
| K3 | Propriedade do cliente (direto × parceiro) | Comercial × Parcerias | Regra por origem; por vínculo ativo; por arbitragem. | Média |
| K4 | Retenção ICP-Brasil × exclusão LGPD | Operações × Jurídico | Exclusão parcial com retenção justificada. | Média |
| K5 | Prazo × fundação | Executivo/Comercial × Arquitetura/Segurança/Dados | Faseamento com fundação primeiro. | Média |
| K6 | IA × privacidade/qualidade | IA × Jurídico/Segurança/Dados | IA só após dados governados; regra onde possível. | Média-alta |
| K7 | Pagador × usuário (bloqueio por inadimplência) | Financeiro × CX/Cliente | Separar cobrança de uso. | Média |
| K8 | Controlador × operador (cliente via parceiro) | Jurídico × Parcerias | Definição contratual formal. | Média |

> **Nota do Auditor Crítico:** nenhum conflito acima deve ser "resolvido" por votação dos agentes. São **decisões que exigem evidência e/ou deliberação humana** (ver arquivos 03 e 06).
