# 01 — Política de Classificação e Minimização

> **Data:** 2026-07-14 · Regras para classificar, minimizar, pseudonimizar e descartar evidências. Aplicável a toda coleta da Fase 2.

## Classificação de dados

| Classe | Definição | Exemplos | Pode ir ao Git? | Onde reside |
|--------|-----------|----------|:---:|-------------|
| **C0 — Público** | Sem risco se divulgado. | Nomes de sistemas, categorias, este framework. | ✅ Sim | Repositório |
| **C1 — Interno** | Uso interno; baixo risco. | Metadados de schema, dicionário de dados, volumes agregados. | ✅ Sim (como metadado) | Repositório |
| **C2 — Confidencial** | Risco de negócio/segurança. | Matriz de acessos, contratos, integrações detalhadas. | ⚠️ Só resumo/metadado | Ambiente seguro |
| **C3 — Pessoal (LGPD)** | Dado pessoal identificável. | CPF, nome+contato, cadastros. | ❌ Nunca | Ambiente seguro (pseudonimizado) |
| **C4 — Sensível / Segredo** | Dado sensível LGPD, biométrico, credenciais. | Biometria, `service_role`, tokens, dados de saúde. | ❌ Nunca | Origem / cofre de segredos |

> **Regra de ouro:** o repositório só recebe **C0/C1** (metadados e amostras fictícias). **C2** apenas em forma resumida/agregada. **C3/C4 jamais** transitam pelo Git.

## Hierarquia de minimização (preferir de cima para baixo)

1. **Descrição textual** do dado (ex.: "campo CPF, 11 dígitos, obrigatório").
2. **Metadados de schema** (nome de tabela/coluna, tipo, cardinalidade) — sem linhas.
3. **Estatísticas agregadas** (contagens, % de nulos, distribuições) — sem indivíduos.
4. **Amostra fictícia** que ilustra o formato (rotulada como fictícia).
5. **Amostra real pseudonimizada** — só se 1–4 forem insuficientes, com aprovação do DPO.
6. **Dado real** — **evitar**; se indispensável, apenas no ambiente seguro, com base legal e prazo.

## Pseudonimização / anonimização (quando dado real for necessário)

| Técnica | Uso |
|---------|-----|
| Hashing com sal (por execução) de CPF/CNPJ/e-mail | Testar duplicidade/match **sem** expor o identificador. |
| Mascaramento parcial (ex.: `***.***.***-12`) | Quando o formato importa, não o valor. |
| Generalização (faixa etária, região em vez de endereço) | Reduzir identificabilidade. |
| Supressão de campos não necessários | Minimização direta. |
| Tokenização reversível (chave no cofre) | Só se a reidentificação for realmente necessária e autorizada. |

> **Deduplicação sem expor dado:** é possível medir a hipótese HE02 (duplicidade) usando **hashes** de CPF/e-mail — a análise vê colisões, não os valores.

## Proibições absolutas
- Coletar **credenciais, tokens, chaves privadas, `service_role`** — nunca. Acesso a sistemas é feito por **conta de serviço de leitura** criada pela equipe do sistema.
- Copiar **dumps completos** de banco para análise.
- Enviar dados pessoais a **modelos de IA de terceiros** (fica para fase futura, com governança própria).
- Versionar qualquer arquivo C2/C3/C4 no Git.

## Retenção e descarte da evidência
- Cada evidência tem **finalidade** (validar hipótese X) e **prazo** (padrão sugerido: até a conclusão do gate da Fase 2 + 30 dias — **a validar com DPO**).
- Ao fim: **descarte seguro** no ambiente provisionado e baixa no registro de custódia (`04`).
- Dados sob **retenção legal** (ex.: ICP-Brasil) não são coletados aqui — apenas seus **metadados**.

## Responsabilidades
| Papel | Responsabilidade |
|-------|------------------|
| DPO/Jurídico | Aprovar base legal da coleta e técnicas de pseudonimização; definir prazos. |
| Segurança | Garantir cifragem, acesso mínimo e descarte. |
| Dono do sistema | Fornecer conta de leitura e extrair metadados. |
| Analista (Fase 2) | Trabalhar só com o mínimo; registrar tudo em `04`. |
