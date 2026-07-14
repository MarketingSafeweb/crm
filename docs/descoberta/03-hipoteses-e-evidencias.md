# 03 — Hipóteses e Evidências

> **Status:** Rascunho para validação (v0.1) · **Data:** 2026-07-14
> **Aviso:** Nenhuma hipótese abaixo é fato sobre a Safeweb. Cada uma traz **classificação**, **nível de confiança atual**, **evidência necessária**, **fonte provável**, **forma de análise**, **critério de confirmação** e **critério de descarte**. As evidências substituem entrevistas humanas nesta descoberta simulada.

## Classificação usada

- **Hipótese forte:** múltiplos sinais no contexto + prática comum convergem.
- **Hipótese moderada:** plausível, sinais parciais.
- **Hipótese fraca:** possível, sem sinal claro.
- **Risco:** evento futuro adverso.
- **Lacuna:** informação ausente.
- **Fato informado:** dado explícito no contexto do projeto.

## Fatos informados (base — não são hipóteses)

| ID | Fato (do contexto) | Confiança |
|----|--------------------|:---:|
| F1 | Safeweb atua em certificação/identidade/assinatura digital e ICP-Brasil. | Alta |
| F2 | Atende PF, PJ, contadores, parceiros, ARs, PAs, representantes, revendedores, clientes diretos e via parceiro. | Alta |
| F3 | Um mesmo agente pode acumular papéis simultâneos. | Alta |
| F4 | Prioridade é fundação: segurança, infraestrutura, arquitetura, banco, governança, acesso, auditoria, privacidade, LGPD, rastreabilidade, qualidade. | Alta |
| F5 | Nesta fase não se desenvolve sistema, código, banco nem se escolhe tecnologia. | Alta |

---

## Catálogo de hipóteses e evidências

> Confiança atual segue a escala (Alta/Média/Baixa/ND). Todas exigem validação com evidência antes de virar requisito.

### Bloco 1 — Identidade e visão única

| ID | Hipótese | Classe | Confiança | Evidência necessária | Fonte provável | Forma de análise | Confirma se… | Descarta se… |
|----|----------|--------|:---:|----------------------|----------------|------------------|--------------|--------------|
| HE01 | Não há chave/entidade única que reconcilie a mesma pessoa entre sistemas. | Forte | Média | Esquemas de cadastro; amostra de registros; regras de chave. | Bancos/exportações dos sistemas de cadastro. | Tentar reconciliar 1 pessoa real entre fontes. | Mesma pessoa aparece com IDs diferentes sem chave comum. | Existe chave única compartilhada e usada. |
| HE02 | Existe duplicidade relevante de cadastros (pessoa/empresa). | Forte | Média | Amostra + regras de deduplicação. | Exportações de sistemas. | Deduplicação exploratória por CPF/CNPJ/e-mail. | Taxa de duplicidade material na amostra. | Duplicidade desprezível. |
| HE03 | Papéis (contador, representante, parceiro) não são modelados como entidade separada da pessoa. | Forte | Média | Modelo de dados atual; telas de cadastro. | Documentação/sistemas. | Verificar se papel é campo, entidade ou implícito. | Papel é atributo/implícito, não entidade com vigência. | Papéis já modelados com vigência. |
| HE04 | Relações pessoa↔empresa não guardam vigência (início/fim). | Forte | Média | Modelo de vínculos; histórico de troca de representante. | Sistemas comercial/emissão. | Checar se há data de início/fim de vínculo. | Vínculos sem histórico temporal. | Vínculos versionados por período. |
| HE05 | Não há fonte-mestre definida para "cliente" e "empresa". | Forte | Média | Inventário de sistemas; donos de dado. | TI/Dados. | Perguntar/verificar qual sistema é autoritativo. | Nenhum sistema é fonte-mestre reconhecida. | Fonte-mestre existe e é respeitada. |

### Bloco 2 — Governança e qualidade de dados

| ID | Hipótese | Classe | Confiança | Evidência necessária | Fonte provável | Forma de análise | Confirma se… | Descarta se… |
|----|----------|--------|:---:|----------------------|----------------|------------------|--------------|--------------|
| HE06 | Não existe governança de dados formal (donos, dicionário, ciclo de vida). | Forte | Média | Política de dados; dicionário; RACI de dados. | Governança/TI. | Buscar documentos e responsáveis. | Ausência de dono/dicionário. | Governança formal documentada e ativa. |
| HE07 | Dados não são padronizados (formatos, domínios). | Moderada | Média | Amostra de campos-chave. | Exportações. | Perfilar formatos (CPF, telefone, e-mail). | Alta variação/inconsistência. | Padrões aplicados consistentemente. |
| HE08 | Não há critérios de retenção/descarte de dados. | Forte | Média | Política de retenção. | Jurídico/DPO/TI. | Revisar política e sua aplicação. | Sem política ou não aplicada. | Política existe e é seguida. |
| HE09 | Sistemas apresentam informações conflitantes sobre o mesmo cliente. | Moderada | Média | Comparação cross-sistema de um mesmo cliente. | Exportações. | Diff de atributos-chave. | Conflitos materiais entre fontes. | Consistência entre fontes. |
| HE10 | Dados têm níveis de confiabilidade variáveis (não rotulados). | Moderada | Média | Metadados de origem/validação. | Sistemas. | Verificar se há indicador de confiabilidade. | Sem rotulagem de confiabilidade. | Confiabilidade rastreada. |

### Bloco 3 — Segurança e acesso

| ID | Hipótese | Classe | Confiança | Evidência necessária | Fonte provável | Forma de análise | Confirma se… | Descarta se… |
|----|----------|--------|:---:|----------------------|----------------|------------------|--------------|--------------|
| HE11 | Acessos a dados pessoais são amplos/sem privilégio mínimo. | Moderada | Média | Matriz de perfis de acesso. | Segurança/IAM. | Revisar perfis vs. necessidade. | Perfis amplos sem justificativa. | Privilégio mínimo aplicado. |
| HE12 | Não há trilha de auditoria consolidada de acesso/alteração. | Forte | Média | Logs por sistema; solução de auditoria. | Segurança/TI. | Verificar existência e consolidação de logs. | Logs dispersos/ausentes. | Auditoria consolidada existente. |
| HE13 | Ciclo de vida de acesso (leaver) é frágil — acesso residual. | Moderada | Média | Processo de revogação; casos de ex-colaborador/ex-contador. | Segurança/RH/Parcerias. | Revisar processo de desligamento. | Acesso persiste após fim de vínculo. | Revogação tempestiva comprovada. |
| HE14 | Dados de parceiros não são isolados entre carteiras. | Moderada | Média | Modelo de acesso por parceiro. | Segurança/Parcerias. | Testar visibilidade cruzada. | Parceiro vê dados de outro. | Isolamento comprovado. |
| HE15 | Dados sensíveis não têm classificação formal. | Moderada | Média | Política de classificação. | Segurança/Jurídico. | Buscar classificação de dados. | Sem classificação. | Classificação aplicada. |

### Bloco 4 — LGPD e jurídico

| ID | Hipótese | Classe | Confiança | Evidência necessária | Fonte provável | Forma de análise | Confirma se… | Descarta se… |
|----|----------|--------|:---:|----------------------|----------------|------------------|--------------|--------------|
| HE16 | Base legal de cada tratamento não é rastreável por registro. | Forte | Média | Mapa de tratamentos; RIPD/ROPA. | Jurídico/DPO. | Revisar registro de operações de tratamento. | Sem mapeamento por finalidade. | Base legal documentada por uso. |
| HE17 | Consentimento não é gerido de forma central/versionada/revogável. | Forte | Média | Registros de consentimento; opt-out. | Marketing/Jurídico. | Revisar fluxo de consentimento. | Consentimento disperso. | Gestão central existente. |
| HE18 | Atender solicitação de titular (acesso/correção/exclusão) é difícil no prazo. | Forte | Média | Processo e histórico de solicitações. | DPO/Atendimento. | Simular localização de dados de 1 titular. | Não localiza todos os dados a tempo. | Processo eficaz comprovado. |
| HE19 | Há conflito entre retenção ICP-Brasil e exclusão LGPD sem posição formal. | Risco+Forte | Média | Parecer jurídico; requisitos ICP-Brasil de retenção. | Jurídico/Compliance. | Revisar exigências e parecer. | Sem posição formal sobre o conflito. | Posição jurídica documentada. |
| HE20 | Papel controlador × operador nos casos de parceiro não está definido. | Risco+Moderada | Média | Contratos de parceria; cláusulas LGPD. | Jurídico/Parcerias. | Revisar contratos. | Indefinição contratual. | Papéis definidos em contrato. |

### Bloco 5 — Comercial, parcerias e experiência

| ID | Hipótese | Classe | Confiança | Evidência necessária | Fonte provável | Forma de análise | Confirma se… | Descarta se… |
|----|----------|--------|:---:|----------------------|----------------|------------------|--------------|--------------|
| HE21 | Origem de lead/venda não é rastreável de ponta a ponta. | Moderada | Média | Funil; campos de origem; relatórios de atribuição. | Marketing/Comercial. | Rastrear N vendas até a origem. | Origem se perde no caminho. | Origem preservada. |
| HE22 | Propriedade do cliente (direto × parceiro) é ambígua e gera conflito. | Moderada | Média | Regras de canal; casos de disputa. | Parcerias/Comercial. | Revisar regra e histórico de conflitos. | Sem regra clara/arbitragem. | Regra explícita e aplicada. |
| HE23 | Ocorrem abordagens comerciais duplicadas ao mesmo cliente. | Moderada | Baixa-média | Histórico de contatos por cliente. | Comercial/Atendimento. | Amostra de contatos sobrepostos. | Sobreposição frequente. | Contatos coordenados. |
| HE24 | Cliente precisa se reapresentar entre canais (jornada quebrada). | Moderada | Média | Logs de atendimento cross-canal. | Atendimento/CX. | Rastrear 1 cliente entre canais. | Reapresentação recorrente. | Contexto compartilhado entre canais. |
| HE25 | Comunicação é inadequada ao papel (ex.: contador tratado como cliente final). | Moderada | Baixa-média | Segmentação atual; conteúdos por segmento. | Marketing. | Revisar segmentação por papel. | Sem segmentação por papel. | Segmentação por papel existente. |

### Bloco 6 — Operações, produtos e financeiro

| ID | Hipótese | Classe | Confiança | Evidência necessária | Fonte provável | Forma de análise | Confirma se… | Descarta se… |
|----|----------|--------|:---:|----------------------|----------------|------------------|--------------|--------------|
| HE26 | Há forte dependência de processos manuais (reconciliação, validação). | Moderada | Baixa-média | Fluxos de operação; tempo por tarefa. | Operações. | Mapear rotinas manuais. | Muitas etapas manuais críticas. | Processos automatizados. |
| HE27 | Evidências de emissão (ICP-Brasil) ficam desvinculadas do cadastro comercial. | Moderada | Média | Fluxo de emissão; onde ficam evidências. | Operações. | Verificar vínculo evidência↔cliente. | Evidências em silo. | Evidências vinculadas e rastreáveis. |
| HE28 | Relação produto↔empresa↔usuário não é bem representada. | Forte | Média | Modelo de produto/contrato. | Produtos/Dados. | Verificar titularidade vs. uso. | Titular e usuário confundidos. | Modelo separa titular/usuário. |
| HE29 | Relação cliente↔pagador↔usuário é ambígua no financeiro. | Moderada | Média | Modelo de faturamento. | Financeiro. | Revisar casos pagador≠usuário. | Ambiguidade material. | Relação clara. |
| HE30 | Não há sinais de uso do produto para embasar upsell/cross-sell. | Lacuna | Baixa | Telemetria/uso. | Produtos/TI. | Verificar se uso é registrado. | Uso não instrumentado. | Uso disponível e confiável. |

### Bloco 7 — Integração, arquitetura e IA

| ID | Hipótese | Classe | Confiança | Evidência necessária | Fonte provável | Forma de análise | Confirma se… | Descarta se… |
|----|----------|--------|:---:|----------------------|----------------|------------------|--------------|--------------|
| HE31 | Integrações entre sistemas são ponto-a-ponto e frágeis. | Moderada | Baixa-média | Inventário de integrações. | TI/Arquitetura. | Mapear integrações e falhas. | Muitas integrações ad hoc. | Integrações padronizadas/estáveis. |
| HE32 | Não há domínios/limites de responsabilidade definidos. | Moderada | Média | Documentação de arquitetura. | Arquitetura. | Buscar mapa de domínios. | Sem definição de domínios. | Domínios definidos. |
| HE33 | Aplicar IA agora seria prematuro por baixa qualidade/governança de dados. | Forte | Média-alta | Resultado dos blocos 1-2. | Dados/Segurança. | Avaliar prontidão de dados. | Dados não governados. | Dados governados e confiáveis. |
| HE34 | Há risco de enviar dados pessoais a modelos de IA de terceiros sem base legal. | Risco | Média | Política de uso de IA/terceiros. | Jurídico/Segurança. | Revisar contratos e fluxos. | Sem controle sobre envio a terceiros. | Controle e base legal definidos. |
| HE35 | Volumes (clientes, certificados, parceiros) e inventário de sistemas são desconhecidos. | Lacuna | ND | Relatórios e inventário. | TI/Gestão. | Levantar números e sistemas. | Números indisponíveis. | Inventário e volumes obtidos. |

---

## Mapa hipótese → evidência substituta (visão consolidada)

> Evidências que podem validar/refutar **sem** entrevista humana.

| Tipo de evidência | Hipóteses que ajuda a testar |
|-------------------|------------------------------|
| Esquemas/exportações de bancos e sistemas de cadastro | HE01, HE02, HE07, HE09, HE10, HE28, HE29 |
| Inventário de sistemas e integrações | HE05, HE31, HE32, HE35 |
| Matriz de perfis de acesso / IAM | HE11, HE13, HE14 |
| Logs e trilhas de auditoria | HE12 |
| Política de dados / dicionário / RACI | HE06, HE08, HE15 |
| ROPA/RIPD, contratos, termos de consentimento, política de privacidade | HE16, HE17, HE18, HE19, HE20, HE34 |
| Requisitos de retenção ICP-Brasil | HE19, HE27 |
| Funis, relatórios de campanha, histórico de vendas | HE21, HE23, HE25 |
| Tickets, reclamações, métricas de experiência | HE24, HE26 |
| Fluxos de operação e emissão | HE26, HE27 |
| Relatórios financeiros | HE29 |
| Telemetria de uso de produto | HE30 |

## Hipóteses críticas que **exigem** evidência antes de avançar

> (Critério de conclusão da descoberta: cada hipótese crítica tem evidência recomendada.)

| Hipótese crítica | Por que é bloqueante | Evidência mínima indispensável |
|------------------|----------------------|--------------------------------|
| HE01/HE03/HE04 (identidade e papéis) | Fundação de todo o modelo. | Esquemas de cadastro + amostra reconciliada + modelo de vínculos. |
| HE05/HE06/HE08 (fonte-mestre, governança, retenção) | Sem governança, o CRM herda o caos. | Inventário + política de dados/retenção (ou constatação de ausência). |
| HE12/HE11 (auditoria e acesso) | Segurança por design. | Estado dos logs + matriz de acesso. |
| HE16/HE18/HE19/HE20 (LGPD e ICP-Brasil) | Risco jurídico direto e conflito regulatório. | ROPA/consentimento + parecer sobre retenção × exclusão + contratos de parceria. |
| HE35 (volumes/sistemas) | Sem baseline não há priorização nem escopo. | Inventário de sistemas + volumes aproximados. |
