# Carrinho de Compras

Projeto simples em **PHP** que simula o funcionamento de um carrinho de
compras.

- Guilherme Dalanora Dos Santos - RA: 1991839
- Igor Ryan De Mello Barbosa - RA: 2008543

------------------------------------------------------------------------

## Como rodar o projeto

1.  Copie a pasta `Shopping-Cart` para dentro do diretório `htdocs` do
    **XAMPP**:

   - **Windows** → `C:\xampp\htdocs\Shopping-Cart`  
   - **Linux** → `/opt/lampp/htdocs/Shopping-Cart`

2.  Inicie o **Apache** pelo painel do XAMPP.

3.  No navegador, acesse:

        http://localhost/Shopping-Cart/public/index.php

------------------------------------------------------------------------

## Funcionalidades implementadas

- Listar produtos com **id, nome, preço e estoque**
- **Adicionar item** ao carrinho (valida existência e estoque)
- **Remover item** do carrinho (estoque restaurado)
- **Listar itens** do carrinho com quantidade, subtotal e total
- **Calcular total** do carrinho
- **Aplicar cupom de desconto**:
    -   `DESCONTO10` → aplica **10%** no valor total

------------------------------------------------------------------------

## Exemplos de uso (Casos de teste)

1.  **Adicionar produto válido**
    -   Entrada: produto `id=1`, quantidade `2`
    -   Saída esperada: produto adicionado, estoque reduzido
2.  **Adicionar além do estoque**
    -   Entrada: produto `id=3`, quantidade `10`
    -   Saída esperada: mensagem *"Estoque insuficiente"*
3.  **Remover produto do carrinho**
    -   Entrada: remover produto `id=2`
    -   Saída esperada: item removido, estoque restaurado
4.  **Aplicar cupom de desconto**
    -   Entrada: `DESCONTO10`
    -   Saída esperada: total do carrinho reduzido em **10%**

------------------------------------------------------------------------
