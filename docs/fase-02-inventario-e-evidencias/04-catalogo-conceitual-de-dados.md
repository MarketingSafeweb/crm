# 04 — Catálogo Conceitual de Dados (preliminar)

> **Data:** 2026-07-14 · **Natureza: CONCEITUAL.** Não é schema, não é modelagem física (regras 17/23). Deriva do domínio descrito no enunciado e das entidades da Fase 1. **Nenhum campo aqui é confirmado por evidência do legado** — são conceitos a validar. Onde há distinção crítica de entidade, ela é destacada (regra: não confundir pessoa/empresa/contato/usuário/pagador/parceiro/representante).

## Princípio-chave: separar identidades

| Identidade | O que representa | Nunca confundir com |
|------------|------------------|---------------------|
| Identidade do **registro** | Uma linha em um sistema (pode haver várias para a mesma pessoa) | Identidade da pessoa |
| Identidade da **pessoa** (PF) | Um ser humano | Registro, usuário, conta |
| Identidade da **empresa** (PJ) | Uma organização | Representante, pagador |
| Identidade do **usuário** | Quem usa um produto/certificado | Titular, pagador |
| Identidade da **conta** | Agrupador de acesso/contrato | Empresa, pessoa |
| Identidade de **autenticação** | Credencial de login (Supabase Auth) | Identidade da pessoa |
| Identidade do **relacionamento** | Vínculo entre entidades, com vigência | Qualquer das partes |

## Conceitos de dados (preliminares)

### Pessoa (PF)
Nome; CPF; data de nascimento; e-mail; telefone; endereço; identificadores internos; status cadastral.
> **Sensibilidade:** dado pessoal (LGPD). CPF é identificador **sensível a exposição** e **não deve ser chave primária interna** (ver `05`).

### Empresa (PJ)
Razão social; nome fantasia; CNPJ; endereço; segmento; porte; situação cadastral; identificadores internos.
> **Nota:** CNPJ identifica a PJ, **não** a "conta comercial" (grupos econômicos, matriz/filial).

### Relacionamentos (com histórico temporal — ver `04`§Histórico)
Pessoa↔empresa; pessoa↔contador; empresa↔contador; pessoa↔parceiro; empresa↔parceiro; cliente↔ponto de atendimento; cliente↔AR; usuário↔produto; pagador↔compra; representante↔empresa; responsável por renovação; responsável financeiro.

### Dados comerciais
Lead; origem; canal; oportunidade; etapa; responsável; produto; valor; probabilidade; motivo de perda; data de fechamento.

### Dados de produto
Produto; categoria; tipo; validade; modalidade; elegibilidade; status; data de aquisição; data de emissão; data de vencimento.
> **Distinção:** titular do produto (pode ser PJ) ≠ usuário do certificado (PF) ≠ pagador.

### Dados de relacionamento
Atendimento; interação; campanha; mensagem; e-mail; chamado; reclamação; pesquisa; resposta; preferência de contato.

### Dados jurídicos e de privacidade
Consentimento; base legal; finalidade; termo aceito; data da coleta; origem; revogação; solicitação do titular; restrição de tratamento; retenção.

## Entidades conceituais e diferenças

| Entidade | Definição conceitual | Chave conceitual (não física) |
|----------|----------------------|-------------------------------|
| Pessoa | Indivíduo (PF) | ID interno de pessoa (surrogate) |
| Empresa | Organização (PJ) | ID interno de empresa (surrogate) |
| Contato | Ponto de comunicação vinculado a pessoa/empresa | ID de contato |
| Usuário | Quem opera um produto/sistema | ID de usuário / ID de autenticação |
| Pagador | Quem custeia uma compra | Papel sobre pessoa/empresa |
| Representante | Quem age por uma empresa | Papel com vigência |
| Parceiro/Contador/AR/PA/Revendedor | Papéis de canal | Papel com vigência e escopo |
| Produto/Certificado | Item contratado/emitido | ID de produto / ID de certificado |
| Oportunidade | Processo comercial | ID de oportunidade |
| Interação/Atendimento | Evento de relacionamento | ID de evento |
| Consentimento | Registro de base legal/opt-in | ID de consentimento |

## Papéis (o conceito central do domínio)
Uma **Pessoa** ou **Empresa** pode acumular vários **Papéis** simultâneos (titular, representante, contador, parceiro, indicador, responsável financeiro, usuário, contato de renovação). 
> **Modelagem conceitual recomendada (não física):** Papel como **entidade associativa** entre um agente (pessoa/empresa) e um contexto (empresa/produto/carteira), com **vigência** (início/fim), **status**, **motivo**, **fonte** e **confiabilidade**. Confirma as hipóteses conceituais da Fase 1; **a validar** com dados reais.

## Histórico temporal (obrigatório no domínio)
Todo relacionamento deve suportar: início de validade; fim de validade; status (ativo/suspenso/encerrado/substituído/inválido); motivo da alteração; fonte da informação; responsável pela alteração; histórico completo; trilha de auditoria.
> **Risco (herdado da Fase 1, não confirmado):** sistemas de origem podem **não** guardar vigência → perda de histórico. **Evidência necessária:** schemas dos sistemas de origem.

## Lacunas do catálogo
- Campos reais, tipos, obrigatoriedade e domínios: **ND** (sem schema).
- Quais entidades já existem em cada sistema: **ND**.
- Regras de elegibilidade/validade de produtos: **ND**.
- Definições oficiais de negócio (o que a Safeweb chama de "cliente", "conta", "usuário"): **ND / ambíguo**.
