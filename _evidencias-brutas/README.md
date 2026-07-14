# ⛔ Zona de evidências brutas — NÃO versionada

Esta pasta é uma **barreira de segurança local**. Tudo aqui (exceto este README) é
**ignorado pelo Git** (ver `.gitignore`). Ela existe para o caso de alguém salvar,
por engano, um arquivo de evidência dentro do repositório — o arquivo **não será
commitado**.

## Regras absolutas

1. **Um repositório Git NÃO é um ambiente seguro para dados pessoais.**
   Evidências reais (exportações, dumps, planilhas com dados de titulares) devem
   ficar no **ambiente seguro provisionado** — ver
   `docs/fase-02-coleta-segura-de-evidencias/05-especificacao-do-ambiente-seguro.md`.
2. **Nunca** coloque aqui: dados pessoais completos, dados sensíveis/biométricos,
   segredos, tokens, chaves privadas, `service_role`, backups de banco.
3. O que **pode** circular no repositório são apenas **metadados** e **amostras
   fictícias**, preenchidos nos templates de
   `docs/fase-02-coleta-segura-de-evidencias/templates/`.
4. Se você já salvou um dado real aqui: **não faça commit**, remova o arquivo e,
   se for segredo, rotacione-o e avise a Segurança/DPO.

> Esta pasta permanece intencionalmente vazia no Git.
