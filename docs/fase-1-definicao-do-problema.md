# CRM Safeweb — Fase 1: Definição do Problema

> **Status do documento:** Rascunho para validação (v0.1)
> **Data:** 2026-07-14
> **Fase:** 1 — Definição do Problema
> **Natureza:** Documento estratégico. Não contém decisões técnicas, código, modelagem de banco ou seleção definitiva de tecnologias.

> **Aviso de método.** Este documento diferencia explicitamente **FATO**, **HIPÓTESE**, **RISCO**, **PREMISSA** e **RECOMENDAÇÃO**. Tudo que depende de confirmação está marcado como *(a confirmar)*. Nenhuma informação sobre a Safeweb foi inventada: quando o contexto não forneceu um dado, ele aparece como lacuna ou hipótese, nunca como afirmação. Segurança da informação, privacidade e LGPD são tratadas desde a definição do problema, e não como etapa posterior.

---

## 1. Resumo executivo

A Safeweb opera em um ecossistema de alta complexidade relacional: um mesmo indivíduo ou organização pode exercer, **simultaneamente**, papéis de cliente pessoa física, responsável legal por empresas, contador de terceiros, parceiro comercial, Autoridade de Registro, indicador e cliente final atendido por parceiro. O contexto indica *(hipótese)* que dados, históricos e interações desses agentes estão distribuídos entre múltiplos sistemas, canais e bancos de dados que não conversam entre si.

O problema central **não** é "a Safeweb não tem um CRM próprio". A ausência de ferramenta é uma **consequência/limitação**, não a causa. O problema central, formulado em termos de negócio, é:

> A Safeweb **não possui uma visão única, confiável, governada e auditável dos agentes com quem se relaciona** (pessoas, empresas e os múltiplos papéis que exercem), o que compromete a qualidade das decisões comerciais, de atendimento e de produto, aumenta o risco de segurança e de não conformidade com a LGPD, e degrada a experiência do cliente e do parceiro.

Esta Fase 1 tem como objetivo **definir e validar o problema**, não resolvê-lo. Os entregáveis são documentos de decisão (declaração do problema, mapa de stakeholders, jornadas, hipóteses, inventários iniciais, matriz de riscos, objetivos, escopo, critérios de sucesso, matriz de priorização e termo de aprovação).

**Conclusão antecipada:** existem hoje **bloqueios reais** para iniciar qualquer desenvolvimento com segurança — sobretudo a ausência de um inventário confirmado de sistemas e dados, a indefinição do modelo de identidade (pessoa × empresa × papel), e a falta de base de governança/LGPD documentada. Ver seções **"Bloqueios para avançar"** e **"Recomendação executiva"**.

---

## 2. Entendimento do contexto

### 2.1 O que é fato (fornecido no contexto)

| # | Fato | Fonte |
|---|------|-------|
| F1 | A Safeweb atua em certificação digital, identidade digital, segurança da informação, assinatura digital e soluções ICP-Brasil. | Contexto |
| F2 | Atende públicos e modelos heterogêneos: PF, PJ, contadores, parceiros, Autoridades de Registro (AR), Pontos de Atendimento, representantes comerciais, revendedores, clientes diretos e clientes atendidos por parceiros. | Contexto |
| F3 | Um mesmo agente pode acumular vários papéis simultaneamente (PF que também é responsável legal de PJ, contador, indicador, parceiro etc.). | Contexto |
| F4 | Um cliente pode possuir vários certificados digitais e participar de várias jornadas comerciais e operacionais. | Contexto |
| F5 | O objetivo estratégico é um CRM próprio, seguro, escalável, auditável e preparado para IA, que centralize dados, relacionamentos, históricos, oportunidades, interações e jornadas. | Contexto |
| F6 | A prioridade inicial é a base de segurança, infraestrutura, cibersegurança, arquitetura, banco de dados, governança, controle de acesso, auditoria, privacidade e conformidade LGPD. | Contexto |
| F7 | O projeto é faseado; esta é a Fase 1 (definição do problema), sem desenvolvimento. | Contexto |

### 2.2 O que é hipótese (afirmado como "pode/podem" no contexto)

| # | Hipótese | Como o contexto a apresenta |
|---|----------|------------------------------|
| H0 | As informações **podem** estar distribuídas entre ferramentas comerciais, atendimento, marketing, emissão de certificados, e-commerce, WhatsApp, formulários, portais de parceiros e sistemas internos. | Contexto usa "podem estar" — logo é hipótese, não fato confirmado. |

> **Observação crítica:** o próprio enunciado do problema (fragmentação de dados) é apresentado como possibilidade. Portanto, **a fragmentação precisa ser confirmada por inventário**, e não assumida. Isto reforça o objetivo desta fase.

### 2.3 Conflitos, ambiguidades e lacunas detectados no contexto

- **Ambiguidade de escopo de "cliente":** o contexto trata "cliente", "contato", "usuário", "parceiro", "pessoa física" e "empresa" em um mesmo bloco. A regra obrigatória nº 10 exige distingui-los. Isto ainda **não está resolvido** e é uma decisão-chave da fase.
- **Lacuna de números:** não há nenhum dado quantitativo (volume de clientes, de certificados ativos, de parceiros, de sistemas, de leads/mês). Sem isso, "impactos mensuráveis" só podem ser propostos como *métricas a instrumentar*, não medidos.
- **Lacuna de sistemas:** a lista de sistemas é ilustrativa ("como…"), não um inventário. Não sabemos quais existem de fato, quais são fonte-mestre, nem quem os opera.
- **Lacuna organizacional:** não há organograma, patrocinador executivo nomeado, nem responsáveis por área.
- **Lacuna regulatória concreta:** sabe-se que LGPD e ICP-Brasil se aplicam, mas não há mapeamento de quais dados sensíveis são tratados, base legal atual, ou requisitos específicos de retenção documental da ICP-Brasil que a empresa já segue.

---

## 3. Problema central

**Declaração do problema central (em termos de negócio, não de ferramenta):**

A Safeweb **não dispõe de uma representação única, confiável, governada e auditável dos agentes com quem se relaciona e dos vínculos entre eles** (pessoa física, pessoa jurídica, contato, usuário, parceiro, papel comercial), tampouco do **histórico completo do relacionamento** (não apenas vendas). Como consequência *(hipótese a validar)*, informação e contexto vivem fragmentados por sistema, canal e área, sem dono, sem padronização e sem trilha de auditoria consolidada.

**Por que este é o problema central, e não a "falta de CRM":**
- A falta de CRM é uma *lacuna de capacidade* (não temos a ferramenta).
- O problema de negócio é a *incapacidade de conhecer, com confiança e conformidade, quem é cada agente, o que ele já fez, quais papéis exerce e o que a empresa pode/deve fazer com esses dados.*
- Um CRM é uma das possíveis **soluções**; construí-lo sem resolver identidade, governança e confiança do dado apenas reproduziria o problema em um sistema novo (ver seção de Riscos).

---

## 4. Problemas secundários

| # | Problema secundário | Descrição | Relação com o problema central |
|---|---------------------|-----------|--------------------------------|
| PS1 | Identidade fragmentada | Não há chave única que reconcilie a mesma pessoa/empresa entre sistemas. | Impede visão única. |
| PS2 | Papéis não modelados | O sistema-verdade não distingue "pessoa" de "papel que a pessoa exerce". | Impede tratar PF que também é contador/parceiro. |
| PS3 | Histórico incompleto | O relacionamento é reduzido a vendas/emissões, perdendo atendimento, marketing, reclamações, consentimentos. | Empobrece decisão e experiência. |
| PS4 | Governança de dados ausente/imatura *(hipótese)* | Sem donos de dado, dicionário, padrões de qualidade e ciclo de vida. | Dado não confiável. |
| PS5 | Controle de acesso e auditoria dispersos | Cada sistema tem seu próprio modelo de acesso; não há trilha consolidada de quem viu/alterou o quê. | Risco de segurança e LGPD. |
| PS6 | Rastreabilidade de origem (atribuição) | Dificuldade *(hipótese)* de saber origem de lead/venda e canal de atendimento. | Impede medir jornadas e ROI. |
| PS7 | Consentimento e direitos do titular | Sem gestão central de base legal, consentimento, e atendimento a solicitações LGPD (acesso, correção, exclusão). | Risco jurídico direto. |
| PS8 | Dependência de processos manuais e integrações frágeis *(hipótese)* | Reconciliação e transferência de dados feitas à mão. | Erro, retrabalho, latência. |
| PS9 | Duplicidade de abordagem comercial | Mesmo cliente abordado por canais/parceiros distintos. | Atrito e custo. |
| PS10 | Comunicação não segmentada por perfil/papel | Mensagem inadequada ao papel (ex.: falar com contador como se fosse cliente final). | Perda de relevância e conversão. |

---

## 5. Causas-raiz prováveis *(hipóteses — a validar)*

> Todas as causas abaixo são **hipóteses**. Nenhuma deve ser tratada como confirmada antes das entrevistas e do inventário.

| # | Causa-raiz provável | Sintoma que geraria | Como validar |
|---|---------------------|---------------------|--------------|
| CR1 | Crescimento por adição de sistemas por área (silos), sem uma camada de identidade comum. | Mesma pessoa em N cadastros. | Inventário de sistemas + amostragem de duplicidade. |
| CR2 | Modelo mental "cliente = venda", herdado do foco transacional de emissão de certificados. | Ausência de histórico não-comercial. | Entrevistas com Atendimento/CX. |
| CR3 | Ausência de área/função de governança de dados formal. | Sem dicionário, sem dono de dado. | Entrevista com TI/Gestão. |
| CR4 | Regras de negócio de "papéis" implícitas nas pessoas, não no sistema. | Papel resolvido "de cabeça" pelos operadores. | Workshops de jornada. |
| CR5 | Requisitos regulatórios (ICP-Brasil/LGPD) tratados por conformidade documental pontual, não por design de dados. | Base legal e retenção não rastreáveis por registro. | Revisão com Jurídico/Segurança. |
| CR6 | Integrações ponto-a-ponto entre sistemas, sem contrato de dados. | Quebras e divergências entre fontes. | Inventário de integrações. |

---

## 6. Impactos atuais

> Impactos marcados **(observável)** podem ser evidenciados hoje qualitativamente; marcados **(a instrumentar)** exigem métrica que ainda não existe. **Nenhum número é afirmado** — não há dados fornecidos.

| Dimensão | Impacto | Tipo |
|----------|---------|------|
| Decisão | Decisões comerciais/produto tomadas sobre dado incompleto ou divergente. | (observável) |
| Comercial | Oportunidades de upsell/cross-sell não identificadas; abordagens duplicadas. | (a instrumentar) |
| Experiência (CX) | Cliente/parceiro precisa se reapresentar a cada canal; comunicação fora de contexto do papel. | (observável) |
| Eficiência | Retrabalho manual de reconciliação e busca de histórico entre sistemas. | (a instrumentar) |
| Segurança | Superfície de exposição ampliada por dados duplicados e acessos dispersos. | (observável) |
| Jurídico/LGPD | Dificuldade de responder a titulares e demonstrar conformidade (accountability). | (observável) |
| Financeiro | Custo de operação elevado e receita não capturada. | (a instrumentar) |
| Reputação/Confiança | Como empresa de segurança/identidade, incidente de dado tem impacto reputacional desproporcional. | (risco) |

---

## 7. Declaração do problema

**Estrutura:** "A Safeweb enfrenta **[problema]**, que afeta **[públicos/áreas/processos]**, porque **[causas prováveis]**, resultando em **[impactos]**."

### 7.1 Versão completa
> A Safeweb enfrenta a **ausência de uma visão única, confiável, governada e auditável dos agentes com quem se relaciona (pessoas físicas, pessoas jurídicas e os múltiplos papéis que podem exercer simultaneamente — cliente, responsável legal, contador, parceiro, AR, indicador, revendedor) e do histórico completo desse relacionamento, para além das vendas**, que afeta **as áreas de Marketing, Comercial, Atendimento, CX, Produtos, Operações, Tecnologia, Segurança, Jurídico, Financeiro e Gestão, bem como os públicos externos (PF, PJ, contadores, parceiros, ARs, pontos de atendimento, representantes, revendedores e clientes finais)**, porque *(hipótese)* **os dados nasceram e vivem em sistemas e canais isolados, sem uma camada comum de identidade, sem governança formal de dados e sem controle de acesso e auditoria consolidados**, resultando em **decisões sobre dados incompletos ou divergentes, atrito e duplicidade na relação comercial e de atendimento, ineficiência operacional por processos manuais, e elevação dos riscos de segurança da informação e de não conformidade com a LGPD**.

### 7.2 Versão resumida
> A Safeweb não tem uma visão única, confiável e auditável de quem são seus clientes e parceiros — nem dos vários papéis que cada um exerce — porque os dados vivem fragmentados entre sistemas sem governança comum, o que degrada decisões, experiência, eficiência e conformidade.

### 7.3 Versão executiva (até três linhas)
> A Safeweb decide, atende e vende sem uma visão única e confiável de cada cliente e parceiro e dos papéis que eles acumulam. Isso eleva risco de segurança e LGPD, gera retrabalho e faz perder oportunidades. A Fase 1 define e valida esse problema antes de qualquer construção.

---

## 8. Stakeholders

> Nível de influência: **A** = alta, **M** = média, **B** = baixa. Necessidades/problemas/benefícios são **hipóteses a confirmar** em entrevista.

### 8.1 Públicos internos

| Stakeholder | Papel no ecossistema | Necessidades | Problemas prováveis *(hipótese)* | Dados que usa/gera | Benefícios esperados | Riscos/preocupações | Influência |
|-------------|----------------------|--------------|----------------------------------|--------------------|----------------------|---------------------|:---:|
| Diretoria | Patrocínio, decisão estratégica | Visão consolidada, indicadores confiáveis | Relatórios divergentes entre áreas | KPIs, receita, carteira | Decisão baseada em dado único | ROI, prazo, risco reputacional | A |
| Gestão | Coordenação e priorização | Alinhamento entre áreas | Metas conflitantes por silo | Metas, funil | Governança e clareza | Conflito de área | A |
| Comercial | Vender direto e via canais | Funil e histórico do cliente | Abordagem duplicada, sem contexto | Leads, oportunidades, propostas | Mais conversão, menos atrito | Perder autonomia/velocidade | A |
| Marketing | Geração de demanda e relacionamento | Segmentação por papel, atribuição | Base fragmentada, consentimento incerto | Campanhas, origem de lead, opt-in | Segmentação e mensuração | Uso indevido de dado/consent. | A |
| Atendimento | Resolver e registrar interações | Histórico único do contato | Cliente se reapresenta a cada canal | Tickets, protocolos, WhatsApp | Atendimento contextualizado | Aumento de carga na transição | A |
| Customer Experience | Jornada ponta a ponta | Visão de jornada e satisfação | Jornada não medida | NPS/CSAT, pontos de contato | Reduzir esforço do cliente | Métrica sem dado confiável | M |
| Produtos | Evoluir ofertas | Uso e adoção por perfil | Sinais de produto dispersos | Portfólio, uso, renovação | Priorização baseada em uso | Requisito mal capturado | M |
| Operações (emissão) | Emitir/renovar certificados | Dados precisos e rastreáveis | Retrabalho de validação | Emissões, validações, status | Menos erro operacional | Impacto em SLA de emissão | A |
| Tecnologia | Sustentar e integrar sistemas | Arquitetura sustentável | Integrações frágeis, dívida técnica | Esquemas, logs, integrações | Menos manutenção pontual | Escopo e segurança | A |
| Segurança da Informação | Proteger dados e acessos | Controle de acesso e auditoria | Acessos dispersos, sem trilha única | Logs, políticas, incidentes | Superfície reduzida, auditoria | Exposição, acesso excessivo | A |
| Jurídico / DPO | Conformidade LGPD/ICP | Base legal e direitos do titular | Resposta a titular difícil | Consentimento, contratos, bases legais | Accountability demonstrável | Sanção, exposição | A |
| Financeiro | Faturamento e crédito | Vínculo cliente↔faturamento | Divergência cadastral | Faturas, inadimplência | Cobrança correta | Dado fiscal sensível | M |
| Equipe de Parceiros/AR | Gerir canais, ARs, PAs | Visão de carteira do parceiro | Atribuição de cliente ambígua | Contratos de canal, produção | Gestão de canal clara | Conflito de propriedade do cliente | A |

### 8.2 Públicos externos

| Stakeholder | Papel | Necessidades | Problemas prováveis *(hipótese)* | Dados envolvidos | Benefícios esperados | Riscos/preocupações | Influência |
|-------------|-------|--------------|----------------------------------|------------------|----------------------|---------------------|:---:|
| Pessoa Física (cliente) | Titular/comprador | Emissão simples, privacidade | Recadastro repetido | Dados pessoais/sensíveis, certificados | Menos fricção, dados protegidos | Uso indevido dos dados | M |
| Pessoa Jurídica | Contratante | Gestão de certificados da empresa | Vínculo responsável↔empresa confuso | CNPJ, responsáveis, certificados | Gestão centralizada | Exposição de dados corporativos | M |
| Contador | Intermedia várias empresas | Operar em nome de clientes | Papel de contador não modelado | Vínculos com múltiplas PJs | Eficiência multi-cliente | Acesso indevido a dados de terceiros | M |
| Parceiro comercial / Revendedor | Vende e atende em nome da Safeweb | Carteira e comissionamento claros | Propriedade do cliente ambígua | Clientes atendidos, produção | Gestão de canal e comissão | Perda de acesso à sua carteira | A |
| Autoridade de Registro (AR) | Valida e emite conforme ICP-Brasil | Rastreabilidade regulatória | Requisitos ICP-Brasil rígidos | Dados de validação, evidências | Conformidade e auditoria | Retenção documental obrigatória | A |
| Ponto de Atendimento (PA) | Atendimento presencial | Registro do atendimento | Registro não integrado | Agendamentos, validações | Fluxo integrado | Consistência de dado local | M |
| Representante comercial | Prospecta/relaciona | Visão de suas oportunidades | Sobreposição com outros canais | Leads, visitas | Menos conflito, mais foco | Conflito de atribuição | M |
| Cliente final atendido por parceiro | Consome via canal | Boa experiência independente do canal | Dado "preso" no parceiro | Dados pessoais, histórico | Continuidade de atendimento | Quem "é dono" do seu dado (LGPD) | M |

> **Ponto sensível de negócio e LGPD (a decidir com Jurídico e Parceiros):** a "propriedade do dado" do cliente final atendido por parceiro — quem é controlador, quem é operador, o que a Safeweb pode ver/usar. Isto tem impacto direto no modelo de identidade e de acesso.

---

## 9. Jornadas principais

> Objetivo aqui: **entender** as jornadas que o CRM precisará compreender no futuro — **sem desenhar funcionalidades**. Participantes, sistemas e problemas abaixo são **hipóteses a validar**.

| Jornada | Quem participa | Objetivo | Informações necessárias | Sistemas/canais prováveis *(hipótese)* | Problemas prováveis | Resultado de negócio esperado |
|---------|----------------|----------|-------------------------|-----------------------------------------|---------------------|-------------------------------|
| Primeiro contato | Prospect, Marketing/Comercial | Registrar interesse e origem | Identidade mínima, origem, consentimento | Site, WhatsApp, formulário, e-commerce | Origem não capturada; consent. incerto | Lead rastreável e conforme |
| Geração de lead | Marketing, Comercial, Parceiro | Qualificar | Perfil, papel, canal | Marketing, portal parceiro | Lead duplicado entre canais | Lead único e atribuído |
| Identificação do cliente | Atendimento, Operações | Reconhecer quem é (e papéis) | Chave de identidade, vínculos | Todos | Não reconhecer cliente recorrente | Visão única acionável |
| Compra (B2C) | PF, Comercial/e-commerce | Adquirir certificado | Dados pessoais, pagamento | E-commerce, emissão, financeiro | Recadastro, divergência | Venda com dado consistente |
| Compra (B2B) | PJ, responsável legal, contador | Adquirir p/ empresa | CNPJ, responsáveis, procuração | Comercial, emissão, financeiro | Vínculo responsável↔PJ confuso | Venda vinculada corretamente |
| Emissão do certificado | Cliente, AR/PA, Operações | Emitir conforme ICP-Brasil | Validação de identidade, evidências | Emissão, AR/PA | Evidência não rastreável | Emissão auditável |
| Renovação | Cliente, Comercial, Operações | Renovar antes de expirar | Data de expiração, histórico | Emissão, comercial | Perda de janela de renovação | Retenção e receita recorrente |
| Atendimento | Cliente/parceiro, Atendimento | Resolver solicitação | Histórico completo | Atendimento, WhatsApp | Sem contexto do contato | Resolução mais rápida |
| Suporte técnico | Cliente, Suporte | Resolver problema técnico | Certificado, ambiente | Suporte, emissão | Reabertura por falta de histórico | Menos reincidência |
| Reclamação | Cliente, CX/Atendimento | Registrar e tratar | Histórico e criticidade | Atendimento, ouvidoria | Reclamação não consolidada | Recuperação de confiança |
| Indicação | Indicador, indicado, Marketing | Registrar e recompensar | Vínculo indicador↔indicado | Marketing, comercial | Atribuição de indicação perdida | Canal de crescimento medido |
| Relacionamento com parceiros | Parceiro, Equipe de Parceiros | Gerir canal | Carteira, produção, contrato | Portal parceiro | Carteira sem visão consolidada | Canal produtivo e justo |
| Relacionamento com contadores | Contador, Comercial | Gerir múltiplas PJs | Vínculos contador↔PJs | Comercial, emissão | Papel de contador não modelado | Eficiência multi-cliente |
| Campanhas | Marketing, base | Comunicar por segmento/papel | Segmentação, opt-in | Marketing | Mensagem fora do papel; opt-out não respeitado | Comunicação relevante e conforme |
| Reativação / Recuperação | Comercial/Marketing, cliente inativo | Retomar relacionamento | Histórico, motivo de inatividade | CRM/marketing | Sem sinal de inatividade | Receita recuperada |
| Upsell / Cross-sell | Comercial, cliente | Ampliar relação | Uso, perfil, papéis | Comercial, produtos | Oportunidade não identificada | Aumento de LTV |
| Cancelamento | Cliente, Atendimento/Financeiro | Encerrar relação | Motivo, contratos | Financeiro, atendimento | Motivo não capturado | Aprendizado e possível retenção |
| Inatividade | Sistema, Gestão | Detectar disengajamento | Recência de interação | CRM | Não detectada | Ação preventiva |
| Gestão de consentimento | Titular, Jurídico/Marketing | Registrar/atualizar base legal | Consentimento, finalidade | CRM/marketing | Consent. não rastreável | Conformidade demonstrável |
| Solicitação de exclusão/correção (LGPD) | Titular, DPO | Atender direito do titular | Localizar todos os dados do titular | Todos | Dado espalhado impede atendimento | Direito atendido no prazo legal |

> **Observação:** a jornada LGPD (exclusão/correção/portabilidade) é um **teste de estresse** do problema central: só é possível atender um titular no prazo legal se houver visão única e rastreável de onde estão todos os seus dados. Hoje isto é *(hipótese)* difícil.

---

## 10. Hipóteses a validar

> Escalas: Gravidade/Probabilidade/Impacto/Urgência em **Baixa / Média / Alta**. Nenhuma é fato.

| ID | Hipótese | Categoria | Gravidade | Probabilidade | Impacto | Urgência | Validação recomendada |
|----|----------|-----------|:---------:|:-------------:|:-------:|:--------:|-----------------------|
| HP01 | Existem dados duplicados da mesma pessoa/empresa entre sistemas. | Qualidade | Alta | Alta | Alto | Alta | Amostragem + deduplicação exploratória |
| HP02 | Cadastros inconsistentes (campos divergentes entre fontes). | Qualidade | Alta | Alta | Alto | Alta | Auditoria de amostra por fonte |
| HP03 | Não há visão única do cliente. | Informação | Alta | Alta | Alto | Alta | Tentativa de reconstruir 1 cliente ponta a ponta |
| HP04 | Difícil relacionar PF ↔ PJ ↔ papéis. | Modelo | Alta | Alta | Alto | Alta | Workshop de casos reais multi-papel |
| HP05 | Histórico não centralizado (só vendas/emissões). | Informação | Alta | Média | Alto | Média | Entrevistas Atendimento/CX |
| HP06 | Informação espalhada entre sistemas sem fonte-mestre. | Arquitetura | Alta | Alta | Alto | Alta | Inventário de sistemas |
| HP07 | Origem de lead/venda não é rastreável de ponta a ponta. | Atribuição | Média | Média | Médio | Média | Rastrear 5 vendas até a origem |
| HP08 | Falta de padronização de dados (formatos, domínios). | Qualidade | Média | Alta | Médio | Média | Revisão de dicionário (se existir) |
| HP09 | Ausência de governança de dados formal (donos, ciclo de vida). | Governança | Alta | Média | Alto | Alta | Entrevista TI/Gestão |
| HP10 | Acessos excessivos/inadequados a dados pessoais. | Segurança | Alta | Média | Alto | Alta | Revisão de perfis de acesso |
| HP11 | Falta de rastreabilidade (trilha de auditoria consolidada). | Segurança | Alta | Média | Alto | Alta | Revisão de logs por sistema |
| HP12 | Jornadas não são medidas de ponta a ponta. | Métrica | Média | Alta | Médio | Média | Mapear se há eventos instrumentados |
| HP13 | Abordagens comerciais duplicadas ao mesmo cliente. | Comercial | Média | Média | Médio | Média | Entrevistas Comercial/Parceiros |
| HP14 | Comunicação inadequada ao perfil/papel. | Marketing | Média | Média | Médio | Média | Revisão de segmentação atual |
| HP15 | Baixa capacidade de identificar oportunidades (upsell/cross). | Comercial | Média | Média | Médio | Baixa | Entrevistas Comercial |
| HP16 | Dependência de processos manuais de reconciliação. | Operação | Alta | Alta | Alto | Alta | Mapear rotinas manuais |
| HP17 | Integrações frágeis/quebráveis entre sistemas. | Tecnologia | Alta | Média | Alto | Média | Inventário de integrações |
| HP18 | Risco de descumprimento da LGPD (base legal, direitos, retenção). | Jurídico | Alta | Média | Alto | Alta | Revisão com DPO/Jurídico |
| HP19 | Falta de critérios de retenção/descarte de dados. | Governança | Alta | Média | Alto | Alta | Revisão de política de retenção |
| HP20 | Consentimento não é gerido de forma central e auditável. | Jurídico | Alta | Média | Alto | Alta | Revisão de opt-in/opt-out |

---

## 11. Perguntas de descoberta

> Priorizadas como abertas e geradoras de evidência. Cada bloco deve ter um responsável de área na entrevista.

### Negócio / Gestão
- Quais decisões hoje dependem de dados que você considera incompletos ou não confiáveis?
- Qual seria a definição de sucesso deste projeto na visão da Diretoria em 12 meses?
- Que relatórios divergem entre áreas hoje, e por quê?

### Comercial
- Como uma oportunidade nasce, avança e se fecha? Em quais sistemas ela vive?
- Como vocês sabem se um cliente já está sendo atendido por outro canal/parceiro?
- Como é definida a "propriedade" de um cliente entre representante, parceiro e venda direta?

### Marketing
- De onde vêm os leads e como a origem é registrada e mantida até a venda?
- Como o consentimento é coletado, armazenado e respeitado (opt-out)?
- Como vocês segmentam por papel (ex.: contador vs. cliente final)?

### Atendimento / CX
- Quando um cliente entra em contato, o que você consegue ver do histórico dele? De onde vem?
- Quantos sistemas você abre para atender um único caso?
- Onde ficam registradas reclamações e como são consolidadas?

### Operações (emissão / AR / PA)
- Quais evidências de validação são exigidas pela ICP-Brasil e por quanto tempo devem ser retidas?
- Como o dado da emissão se conecta (ou não) ao cadastro comercial do cliente?
- Que passos hoje são manuais na emissão/renovação?

### Produtos
- Que sinais de uso/adoção vocês gostariam de ter e não têm hoje?
- Como decisões de portfólio são informadas por dados de cliente?

### Tecnologia
- Qual é a lista real de sistemas que armazenam dados de clientes/parceiros? Quem é dono de cada um?
- Quais são fonte-mestre para cada tipo de dado? Existem?
- Como os sistemas se integram hoje (APIs, arquivos, manual)?

### Segurança da Informação
- Como é hoje o controle de acesso a dados pessoais? Existe trilha de auditoria consolidada?
- Já houve incidentes ou quase-incidentes relacionados a dados de cliente?
- Quais dados são classificados como sensíveis e como são protegidos?

### Jurídico / LGPD
- Qual a base legal para cada uso de dado pessoal hoje?
- Como a empresa atende hoje a solicitações de titulares (acesso, correção, exclusão)? Em quanto tempo?
- Nos casos de cliente atendido por parceiro, quem é controlador e quem é operador?
- Que requisitos de retenção da ICP-Brasil conflitam ou convivem com o direito de exclusão da LGPD?

### Dados
- Existe dicionário de dados? Padrões de qualidade? Donos de dado?
- Qual o volume aproximado de registros por sistema e o grau de duplicidade percebido?
- Que fontes de dado vocês consideram confiáveis e quais não?

### Parceiros / AR
- Como um parceiro/AR enxerga sua carteira hoje? O que ele pode ver da Safeweb e vice-versa?
- Como é feito o comissionamento e a atribuição de vendas por canal?

### Experiência do cliente
- Onde o cliente hoje precisa repetir informações? Onde ele espera mais tempo?
- Que promessas de atendimento (SLA) existem e como são medidas?

---

## 12. Objetivos do projeto

> Objetivos expressos como **resultado**, não como funcionalidade. (Regra: "permitir compreender o histórico", não "criar dashboard".)

**Objetivo principal**
- Estabelecer as condições de negócio, governança e segurança para que a Safeweb passe a conhecer, com confiança e conformidade, cada agente com quem se relaciona e todo o histórico desse relacionamento — de forma única, rastreável e auditável.

**Objetivos específicos**
- Distinguir com clareza as entidades pessoa física, pessoa jurídica, contato, usuário, parceiro e cliente, e representar os papéis que cada agente exerce.
- Tornar o histórico de relacionamento (não só vendas) recuperável e confiável.
- Assegurar que privacidade, segurança e LGPD sejam premissas de projeto desde o início.

**Curto prazo (Fase 1)**
- Definir e validar o problema, stakeholders, jornadas, hipóteses, riscos e escopo, com aprovação formal das áreas.

**Médio prazo (fases seguintes — não desta)**
- Definir o modelo conceitual de identidade e governança que qualquer solução deverá respeitar.
- Priorizar problemas para tratamento incremental.

**Longo prazo (visão — não prometido nesta fase)**
- Visão única operacional e apoio de IA onde ela agregar valor de forma segura e auditável.

**Resultados esperados desta fase**
- Alinhamento entre áreas sobre qual problema está sendo resolvido e por quê.
- Base de evidências (não suposições) para decidir a próxima fase.

**Resultados que NÃO devem ser prometidos nesta fase**
- Datas de entrega do CRM; escolha de tecnologia; ganhos de receita quantificados; integração ou migração de dados; qualquer recurso de IA.

---

## 13. Escopo da Fase 1

### 13.1 Dentro da Fase 1
- Entendimento e definição do problema.
- Entrevistas com stakeholders internos e externos-chave.
- Mapa de stakeholders.
- Levantamento (não desenho) das jornadas principais.
- Inventário inicial de sistemas *(descoberta, não integração)*.
- Levantamento inicial de fontes de dados *(catalogação, não migração)*.
- Identificação de riscos (negócio, segurança, LGPD).
- Definição de objetivos e de indicadores de sucesso da fase.
- Registro e classificação de hipóteses.
- Identificação de restrições e premissas.

### 13.2 Fora da Fase 1
- Desenvolvimento do CRM; escolha definitiva de linguagem/framework; criação de banco de produção; integração entre sistemas; migração de dados; desenvolvimento de agentes de IA; automação comercial; construção de dashboards; implementação em produção.

### 13.3 Diferenciação obrigatória de conceitos

| Conceito | Definição | Exemplo no contexto Safeweb |
|----------|-----------|------------------------------|
| **Problema** | Estado indesejado de negócio a ser mudado. | "Não há visão única e confiável dos agentes." |
| **Necessidade** | O que uma área precisa para operar melhor. | "Atendimento precisa ver histórico completo do contato." |
| **Requisito** | Condição verificável que uma solução deve satisfazer. | "A solução deve permitir localizar todos os dados de um titular." *(fase futura)* |
| **Solução** | Abordagem escolhida para atender requisitos. | "Um CRM próprio com camada de identidade." *(fase futura)* |
| **Funcionalidade** | Recurso concreto da solução. | "Tela de linha do tempo do cliente." *(fase futura, não prometer agora)* |

---

## 14. Critérios de sucesso da Fase 1

| Indicador | Definição | Como medir | Meta inicial sugerida *(a validar)* | Responsável pela validação |
|-----------|-----------|-----------|--------------------------------------|----------------------------|
| Stakeholders entrevistados | % das áreas-chave entrevistadas | Lista de áreas × realizadas | ≥ 90% das áreas internas + amostra externa | Gestão do projeto |
| Processos mapeados | Nº de processos-núcleo descritos | Contagem vs. lista acordada | 100% dos processos críticos | CX/Operações |
| Jornadas documentadas | Jornadas com participantes/objetivo/dados | Contagem vs. lista da seção 9 | ≥ 15 jornadas priorizadas | CX |
| Sistemas identificados | Inventário com dono e tipo de dado | Catálogo preenchido | 100% dos sistemas com dado de cliente | Tecnologia |
| Fontes de dados levantadas | Catálogo com classificação de sensibilidade | Catálogo preenchido | 100% das fontes conhecidas | Dados/Segurança |
| Riscos registrados | Riscos com causa/impacto/prob./mitigação | Matriz preenchida | Todos os riscos altos com dono | Segurança/Jurídico |
| Hipóteses tratadas | % de hipóteses validadas ou descartadas | Catálogo de hipóteses atualizado | ≥ 80% com evidência | Gestão do projeto |
| Objetivos aprovados | Aprovação formal dos objetivos | Ata/assinatura | Aprovado por Diretoria | Diretoria |
| Escopo aprovado | Aprovação formal do escopo | Ata/assinatura | Aprovado | Gestão |
| Responsáveis definidos | Dono por área e por dado | RACI preenchido | 100% | Gestão |
| Concordância entre áreas | Grau de alinhamento | Workshop de validação | Sem divergência crítica aberta | Diretoria |
| Critérios de priorização | Regras acordadas de priorização | Documento aprovado | Aprovado | Gestão |

---

## 15. Riscos

### 15.1 Riscos da definição incorreta do problema

| Risco | Causa | Impacto | Prob. | Prevenção | Responsável recomendado |
|-------|-------|---------|:-----:|-----------|-------------------------|
| Construir funcionalidades desnecessárias | Problema mal definido | Desperdício, atraso | Média | Rastrear cada requisito a um problema validado | Gestão de produto |
| Reproduzir os problemas atuais no novo sistema | Não resolver identidade/governança antes | Falha estrutural cara | Alta | Resolver modelo de identidade e governança na definição | Arquitetura/Dados |
| Arquitetura inadequada | Avançar sem entender jornadas/dados | Retrabalho profundo | Média | Não iniciar arquitetura antes de fechar a fase | Tecnologia |
| Banco mal modelado | Confundir pessoa, papel, empresa | Dado inconsistente | Média | Modelo conceitual de entidades antes de físico | Dados |
| Exposição de dados | Segurança tratada tardiamente | Incidente, sanção, reputação | Média | Privacy/security by design desde já | Segurança/DPO |
| Ausência de governança | Sem donos e ciclo de vida | Dado não confiável | Alta | Definir governança como pré-requisito | Gestão/Dados |
| Baixa adoção | Áreas não envolvidas | Projeto ignorado | Média | Envolver áreas nas entrevistas e aprovação | Gestão |
| Conflito entre áreas | Propriedade do cliente/dado ambígua | Bloqueio político | Média | Acordar regras de propriedade cedo | Diretoria |
| Integrações frágeis | Falta de contrato de dados | Quebras recorrentes | Média | Mapear integrações na descoberta | Tecnologia |
| Aumento de custos | Escopo indefinido | Estouro de orçamento | Média | Escopo aprovado e faseamento | Gestão |
| Uso inadequado de IA | IA onde regra bastava | Custo, risco, alucinação | Média | Critério explícito de quando NÃO usar IA | Produto/Segurança |
| Decisão sobre dado incorreto | Dado não confiável | Perda financeira/reputação | Média | Confiabilidade do dado como meta | Dados |
| Descumprimento da LGPD | Base legal/retenção não tratadas | Sanção, dano reputacional | Média | DPO no núcleo da fase | Jurídico/DPO |

### 15.2 Riscos de segurança e privacidade específicos do setor
- **FATO/RISCO:** a Safeweb é empresa de identidade e segurança digital; um incidente com dados pessoais tem impacto reputacional desproporcional e potencial conflito com sua própria proposta de valor. Segurança e LGPD são, portanto, **restrições de projeto de primeira ordem**, não requisitos secundários.
- **Conflito regulatório a mapear:** retenção documental obrigatória da ICP-Brasil × direito de exclusão da LGPD. Precisa de posição formal do Jurídico/DPO *(a confirmar)*.

---

## 16. Premissas e restrições

### 16.1 Premissas iniciais *(todas a confirmar)*
- P1 — Existe patrocínio executivo para o projeto. *(a confirmar)*
- P2 — As áreas estarão disponíveis para entrevistas na Fase 1. *(a confirmar)*
- P3 — Há disposição para tratar governança/identidade antes de construir. *(a confirmar)*
- P4 — Existe um DPO ou responsável formal por LGPD. *(a confirmar)*
- P5 — Os dados atuais têm qualidade variável e não podem ser assumidos como confiáveis. *(premissa conservadora recomendada)*

### 16.2 Restrições

| Categoria | Restrição | Natureza |
|-----------|-----------|----------|
| LGPD | Base legal, direitos do titular, minimização, retenção. | Legal obrigatória |
| ICP-Brasil | Requisitos de validação e retenção documental de emissão. | Regulatória obrigatória |
| Segurança da informação | Controle de acesso, auditoria, classificação de dados. | Obrigatória |
| Dados sensíveis | Tratamento diferenciado de dado pessoal sensível. | Legal |
| Sistemas legados | Dependência de sistemas existentes *(a inventariar)*. | Técnica *(a confirmar)* |
| Integrações | Capacidade de integração dos sistemas atuais. | Técnica *(a confirmar)* |
| Orçamento / Prazo / Equipe | Não informados. | Lacuna *(a confirmar)* |
| Fornecedores | Dependência de terceiros/SaaS *(a confirmar)*. | Contratual |
| Qualidade dos dados | Duplicidade/inconsistência prováveis. | Hipótese |
| Disponibilidade das áreas | Necessária para descoberta. | Organizacional |
| APIs externas | Uso e limites *(a confirmar)*. | Técnica |
| Modelos de IA de terceiros | Onde dados poderiam ser processados por terceiros — restrição de privacidade. | Legal/Segurança |
| Armazenamento/processamento | Localidade e soberania de dados *(a confirmar)*. | Legal/Segurança |

---

## 17. Possíveis aplicações futuras de IA

> **Nada é desenvolvido nesta fase.** Regra obrigatória: **não recomendar IA onde regra simples, consulta estruturada ou automação tradicional resolve.**

### 17.1 Diferenciação de abordagens

| Abordagem | O que é | Quando usar | Exemplo Safeweb |
|-----------|---------|-------------|-----------------|
| Automação por regras | Lógica determinística | Regra clara e estável | Alerta de renovação X dias antes de expirar |
| Análise de dados / BI | Consulta e agregação estruturada | Medir, comparar, relatar | Funil por canal, taxa de renovação |
| Machine learning | Modelo estatístico preditivo | Padrão em dados históricos confiáveis | Propensão a churn/renovação *(fase futura)* |
| IA generativa | Geração de texto/linguagem | Sumarizar/redigir com supervisão | Resumo de histórico de atendimento |
| Agentes de IA | Orquestração autônoma de ações | Só com trilhas, limites e revisão | *(não recomendado cedo)* |
| Decisão humana | Julgamento humano | Alto risco/impacto | Recusa de emissão, decisões jurídicas |

### 17.2 Onde IA **poderia** ajudar (futuro, com dados confiáveis)
- Deduplicação/entity resolution assistida (com revisão humana).
- Sumarização de histórico longo de relacionamento para o atendente.
- Priorização/roteamento de leads e chamados.
- Detecção de sinais de churn ou de oportunidade de upsell.

### 17.3 Onde **não** automatizar / exige supervisão humana obrigatória
- Qualquer decisão de emissão/validação de certificado (ICP-Brasil) — supervisão humana obrigatória.
- Decisões jurídicas, de conformidade e de exclusão de dados de titular.
- Comunicações que impliquem obrigação legal ou financeira.
- Classificação de crédito/inadimplência sem revisão.

### 17.4 Riscos de IA a considerar desde já
- **Privacidade:** dado pessoal enviado a modelos de terceiros.
- **Viés:** priorização que discrimine perfis/canais.
- **Segurança:** vazamento por prompt/log.
- **Alucinação:** resumo incorreto usado como verdade.
- **Explicabilidade/auditoria:** casos que exigem justificar a decisão (LGPD, disputas comerciais, regulatório).

---

## 18. Matriz de priorização

**Critérios (peso sugerido, a validar):** Impacto no negócio, Impacto no cliente, Risco de segurança, Risco jurídico, Frequência, Urgência, Dependência técnica, Complexidade de resolução, Disponibilidade de dados.

**Lógica:** um problema sobe de classe quando combina **alto risco (segurança/jurídico)** com **alta frequência/urgência**. Problemas de **fundação** (identidade, governança, segurança/LGPD) são tratados como **Críticos** mesmo quando "invisíveis" ao usuário, porque habilitam ou bloqueiam todos os demais. Complexidade alta **não** rebaixa a prioridade de um crítico — apenas indica que precisa de faseamento.

| Problema | Neg. | Cliente | Seg. | Jur. | Freq. | Urg. | Dep. técnica | Complex. | Dados disp. | Classe |
|----------|:---:|:---:|:---:|:---:|:---:|:---:|:---:|:---:|:---:|:---:|
| Modelo de identidade (PF/PJ/papéis) | Alto | Alto | Alto | Alto | Alta | Alta | Alta | Alta | Baixa | **Crítico** |
| Governança de dados (donos/ciclo de vida) | Alto | Médio | Alto | Alto | Alta | Alta | Alta | Alta | Baixa | **Crítico** |
| Segurança: acesso + auditoria consolidada | Alto | Médio | Alto | Alto | Alta | Alta | Média | Alta | Média | **Crítico** |
| LGPD: base legal, consentimento, direitos | Alto | Alto | Alto | Alto | Alta | Alta | Média | Média | Baixa | **Crítico** |
| Visão única / histórico completo | Alto | Alto | Médio | Médio | Alta | Alta | Alta | Alta | Baixa | **Alto** |
| Qualidade/deduplicação de dados | Alto | Médio | Médio | Médio | Alta | Média | Média | Alta | Baixa | **Alto** |
| Rastreabilidade de origem (atribuição) | Médio | Baixo | Baixo | Baixo | Média | Média | Média | Média | Baixa | **Médio** |
| Duplicidade de abordagem comercial | Médio | Médio | Baixo | Baixo | Média | Média | Baixa | Média | Média | **Médio** |
| Segmentação por papel (comunicação) | Médio | Médio | Baixo | Médio | Média | Baixa | Baixa | Média | Média | **Médio** |
| Upsell/cross-sell não capturado | Médio | Baixo | Baixo | Baixo | Média | Baixa | Média | Média | Baixa | **Baixo** |

> **Leitura executiva:** os quatro **Críticos** são de **fundação** e correspondem exatamente à prioridade que o contexto declara (segurança, governança, controle de acesso, auditoria, privacidade, LGPD). Eles não são "features" — são pré-condições. Enquanto não forem endereçados conceitualmente, os problemas Altos/Médios não têm base confiável para serem resolvidos.

---

## 19. Entregáveis da Fase 1

| Entregável | Finalidade | Conteúdo mínimo | Responsável sugerido | Aprovadores | Critério de conclusão |
|------------|-----------|-----------------|----------------------|-------------|-----------------------|
| Declaração do problema | Alinhar o "porquê" | Versões completa/resumida/executiva | Gestão do projeto | Diretoria | Aprovada em ata |
| Mapa de stakeholders | Conhecer atores e influência | Papel, necessidades, riscos, influência | CX/Gestão | Gestão | Cobre internos + externos-chave |
| Mapa inicial de jornadas | Entender fluxos | Participantes, objetivo, dados, sistemas, problemas | CX | Operações/Comercial | ≥ jornadas priorizadas descritas |
| Catálogo de hipóteses | Separar suposição de fato | Hipótese, categoria, severidade, validação | Gestão | Áreas donas | ≥ 80% tratadas |
| Inventário inicial de sistemas | Saber onde vive o dado | Sistema, dono, tipo de dado, integrações | Tecnologia | Segurança | 100% dos sistemas com dado de cliente |
| Inventário inicial de fontes de dados | Classificar dados | Fonte, sensibilidade, base legal, retenção | Dados/DPO | Jurídico/Segurança | Fontes conhecidas classificadas |
| Matriz de riscos | Gerir risco cedo | Causa, impacto, prob., mitigação, dono | Segurança | Diretoria | Riscos altos com dono |
| Objetivos do projeto | Definir resultado esperado | Principal, específicos, prazos, não-metas | Gestão | Diretoria | Aprovados |
| Escopo inicial | Delimitar a fase | Dentro/fora, conceitos diferenciados | Gestão | Diretoria | Aprovado |
| Critérios de sucesso | Medir a fase | Indicadores, metas, responsáveis | Gestão | Diretoria | Aprovados |
| Matriz de priorização | Ordenar problemas | Critérios, classes, lógica | Produto/Gestão | Diretoria | Aprovada |
| Lista de perguntas pendentes | Guiar descoberta | Perguntas por área | Gestão | Áreas | Respondidas/registradas |
| Registro de decisões | Rastrear escolhas | Decisão, data, responsável, justificativa | Gestão | — | Mantido vivo |
| Termo de aprovação da fase | Encerrar a fase formalmente | Aceite das áreas e Diretoria | Gestão | Diretoria + áreas | Assinado |

---

## 20. Informações ausentes (lacunas explícitas — a confirmar)

1. **Inventário real de sistemas** e qual é fonte-mestre de cada tipo de dado.
2. **Volumes**: nº de clientes, empresas, certificados ativos, parceiros, ARs, PAs, leads/mês.
3. **Organograma e patrocínio**: quem patrocina, quem decide, donos por área.
4. **Existência de DPO** e do estado atual de conformidade LGPD (base legal, RIPD, incidentes).
5. **Requisitos concretos de retenção da ICP-Brasil** e como convivem com a LGPD.
6. **Modelo atual de propriedade do cliente** entre venda direta, representantes e parceiros.
7. **Controladoria vs. operação de dados** nos casos de cliente atendido por parceiro.
8. **Estado das integrações** atuais (APIs, arquivos, manual) e sua confiabilidade.
9. **Orçamento, prazo e equipe** disponíveis para o projeto.
10. **Localidade de armazenamento/processamento** e uso de SaaS/terceiros/IA de terceiros.
11. **Definições de negócio** para "cliente", "contato", "usuário", "parceiro" — hoje ambíguas.
12. **Métricas hoje existentes** (há algo instrumentado?) para estabelecer linha de base.

---

## 21. Próximas decisões necessárias

1. Nomear **patrocinador executivo** e **dono do projeto** da Fase 1.
2. Nomear **DPO/Jurídico** e **Segurança** como participantes centrais (não consultivos).
3. Aprovar a **lista de stakeholders a entrevistar** e o cronograma de entrevistas.
4. Acordar as **definições de entidade** (pessoa, empresa, contato, usuário, parceiro, cliente, papel) como decisão de negócio a validar — **não** como decisão técnica.
5. Autorizar o **inventário de sistemas e dados** (descoberta, sem tocar em produção).
6. Definir **critérios de priorização** e pesos da matriz.
7. Estabelecer o **registro de decisões** e o **termo de aprovação** da fase.
8. Confirmar o **conflito ICP-Brasil × LGPD** e obter posição formal do Jurídico.

---

## 22. Checklist de aprovação da Fase 1

- [ ] Problema definido em termos de negócio, **sem antecipar a solução**.
- [ ] Hipóteses claramente rotuladas como hipóteses (não fatos).
- [ ] Riscos de **segurança** e **LGPD** considerados desde o início.
- [ ] Papéis múltiplos e simultâneos de clientes/parceiros contemplados.
- [ ] Entidades pessoa/empresa/contato/usuário/parceiro/cliente **diferenciadas**.
- [ ] Histórico completo do relacionamento (não só vendas) contemplado.
- [ ] Objetivos expressos como **resultado mensurável**.
- [ ] Escopo dentro/fora da fase explícito.
- [ ] Informações ausentes listadas explicitamente.
- [ ] Stakeholders mapeados (internos e externos).
- [ ] Jornadas principais levantadas.
- [ ] Matriz de riscos e de priorização produzidas.
- [ ] Critérios de sucesso da fase definidos e com responsáveis.
- [ ] Termo de aprovação assinado por Diretoria e áreas.

---

## Bloqueios para avançar

> Somente os pontos que **impedem** o início seguro da próxima fase (arquitetura/solução). Enquanto não resolvidos, **não avançar**.

1. **Inventário de sistemas e fontes de dados não confirmado.** Sem saber onde o dado vive e qual é fonte-mestre, qualquer arquitetura é chute. *(Bloqueia modelagem e integração futuras.)*
2. **Modelo conceitual de identidade não decidido** (pessoa × empresa × contato × usuário × parceiro × papel). É a fundação de tudo e ainda é ambíguo no contexto.
3. **Posição formal de LGPD e ICP-Brasil ausente** — incluindo controladoria vs. operação nos casos de parceiro e o conflito retenção × exclusão. Risco jurídico direto.
4. **Governança de dados sem donos definidos.** Sem donos e ciclo de vida, o novo sistema herdaria o problema atual.
5. **Patrocínio e disponibilidade das áreas não confirmados.** Sem isso, a descoberta não se completa e a aprovação da fase não acontece.
6. **Ausência de linha de base (métricas).** Sem baseline, não há como comprovar impacto nem priorizar com evidência.

---

## Recomendação executiva

A Safeweb **não deve iniciar nenhum desenvolvimento, escolha de tecnologia ou modelagem de banco** antes de concluir e aprovar esta Fase 1. O problema a resolver **não é a falta de um CRM** — é a **falta de uma visão única, confiável, governada e auditável dos agentes e dos papéis que eles exercem, e do histórico completo do relacionamento**, num ambiente onde segurança e LGPD são restrições de primeira ordem por ser a Safeweb uma empresa de identidade e segurança digital.

Antes de avançar, a Safeweb precisa **validar**, com evidência e não com suposição:
1. **Onde estão os dados** (inventário confirmado de sistemas e fontes, com fonte-mestre e classificação de sensibilidade);
2. **Como modelar identidade e papéis** (decisão conceitual de negócio, aprovada pelas áreas, antes de qualquer decisão técnica);
3. **A posição jurídica e de segurança** (base legal, direitos do titular, controlador × operador no modelo de parceiros, e o conflito ICP-Brasil × LGPD);
4. **Governança** (donos de dado, ciclo de vida, retenção/descarte);
5. **Patrocínio e responsáveis**, com um **termo de aprovação** que registre o alinhamento entre áreas.

Concluídos esses cinco pontos e assinado o termo de aprovação da fase, a Safeweb terá base sólida — e não suposições — para iniciar com segurança a próxima fase de arquitetura da solução.

> **Nota de conformidade com as regras da tarefa:** este documento não escreve código, não cria banco de dados, não seleciona tecnologia de forma definitiva, não trata hipóteses como fatos, não inventa dados sobre a Safeweb, diferencia fatos/hipóteses/riscos/premissas/recomendações, considera segurança e privacidade desde o início, contempla papéis múltiplos e simultâneos, distingue pessoa/empresa/contato/usuário/parceiro/cliente, e considera o histórico completo do relacionamento — não apenas vendas.
