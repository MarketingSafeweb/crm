# Templates de coleta (somente metadados)

Estes arquivos CSV contêm **apenas cabeçalhos**. Preencha com **metadados** e
**amostras fictícias** (classe C0/C1 — ver `../01-politica-de-classificacao-e-minimizacao.md`).

## Regras
- **Nunca** insira dados pessoais reais (CPF, nome+contato), sensíveis, financeiros
  reais ou segredos. Para ilustrar formato, use a coluna `exemplo_ficticio` com um
  valor **claramente inventado** (ex.: `000.000.000-00`, `fulano@exemplo.com`).
- Estatísticas devem ser **agregadas** (contagens, %), nunca por indivíduo.
- Para duplicidade, traga **contagem de colisões de hash**, não os identificadores.

## Arquivos
| Template | Uso | Valida |
|----------|-----|--------|
| `template-inventario-sistema.csv` | Um sistema por linha | BL1, HE35 |
| `template-fonte-de-dados.csv` | Uma fonte/tabela por linha | BL1, HE01–HE10 |
| `template-integracao.csv` | Uma integração por linha | HE31, HE32 |
| `template-dicionario-de-dados.csv` | Um campo por linha | HE28, HE29, BL5 |
| `template-ropa.csv` | Uma operação de tratamento por linha | HE16, PRV-* |

> Ao preencher, registre cada arquivo no log de custódia (`../04-registro-de-evidencias.md`).
