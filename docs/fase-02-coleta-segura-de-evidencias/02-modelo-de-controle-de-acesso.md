# 02 — Modelo de Controle de Acesso (coleta de evidências)

> **Data:** 2026-07-14 · Privilégio mínimo, segregação de funções e cadeia de custódia para o ambiente seguro. Papéis são **funções**, não pessoas nomeadas (nomeação é decisão humana — lacuna da Fase 1).

## Papéis e permissões

| Papel | Depositar evidência | Ler metadados (C1) | Ler C2 | Ler C3 pseudonim. | Aprovar base legal | Administrar acesso |
|-------|:---:|:---:|:---:|:---:|:---:|:---:|
| Dono do sistema (fornecedor) | ✅ (só do seu sistema) | ✅ (do seu) | — | — | — | — |
| Analista de Dados (Fase 2) | — | ✅ | ✅ | ⚠️ sob aprovação | — | — |
| Analista de Segurança | — | ✅ | ✅ | ⚠️ sob aprovação | — | ✅ |
| DPO / Jurídico | — | ✅ | ✅ | ✅ | ✅ | — |
| Gestor da Fase 2 | — | ✅ | ✅ (resumo) | — | — | — |
| Diretoria/Patrocinador | — | ✅ (resumo) | — | — | — | — |

> **Segregação:** o **dono do sistema** deposita; o **analista** analisa; o **DPO** aprova o que envolve dado pessoal. Nenhum papel acumula depositar + aprovar + administrar.

## Princípios operacionais

1. **Contas de serviço de leitura** para acessar sistemas de origem — criadas pelo dono do sistema, escopo somente-leitura, **revogadas ao fim** da coleta.
2. **Acesso temporário (JIT)**: concessões com prazo; expiram automaticamente.
3. **Autenticação forte (MFA)** para o ambiente seguro.
4. **Toda leitura/depósito é logada** (quem, o quê, quando) — trilha de auditoria imutável.
5. **Revogação imediata** ao encerrar vínculo com a coleta (evita acesso residual — HE13).

## Cadeia de custódia (visão)

```mermaid
sequenceDiagram
    participant DS as Dono do Sistema
    participant AS as Ambiente Seguro
    participant AN as Analista
    participant DPO as DPO
    DS->>AS: Deposita metadados/amostra pseudonimizada
    AS-->>DS: Registro no log (04) + classificação
    AN->>DPO: Solicita acesso a C3 (se necessário)
    DPO-->>AN: Aprova/nega (base legal + prazo)
    AN->>AS: Lê o mínimo necessário (logado)
    AN->>AN: Analisa; atualiza validação de hipóteses
    AN->>AS: Solicita descarte ao fim (04)
```

## Matriz RACI (coleta)

| Atividade | Dono sist. | Analista | Segurança | DPO | Gestor |
|-----------|:---:|:---:|:---:|:---:|:---:|
| Extrair metadados | R | C | C | I | I |
| Pseudonimizar dado real | R | C | C | A | I |
| Depositar no ambiente | R | I | C | I | I |
| Analisar | I | R | C | C | I |
| Aprovar base legal | I | I | I | R/A | I |
| Descartar | C | C | R | A | I |

> R=Responsável, A=Aprova, C=Consultado, I=Informado. **A nomeação das pessoas é decisão humana pendente (DC6 da Fase 2).**
