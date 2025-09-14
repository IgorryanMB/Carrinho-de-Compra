README.md
🛒 Projeto Carrinho de Compras em PHP

Este projeto implementa um carrinho de compras em PHP seguindo a documentação fornecida.
Os produtos são definidos no código e o carrinho permite adicionar, remover, listar itens e aplicar cupom de desconto de 10%.

📂 Estrutura de Arquivos
/ (raiz do projeto)
├── Product.php   # Classe do produto
├── Cart.php      # Classe do carrinho
├── index.php     # Script principal com casos de uso
└── README.md     # Este arquivo

⚙️ Pré-requisitos

PHP 7.4 ou superior

Servidor local como XAMPP, WAMP, Laragon ou MAMP

🚀 Como Executar

Coloque os arquivos do projeto dentro de htdocs (no caso do XAMPP):
C:\xampp\htdocs\carrinho

Inicie o Apache pelo painel do XAMPP.

No navegador, abra:
http://localhost/carrinho/index.php

A página exibirá os 5 casos de uso do carrinho.

📝 Descrição das Classes
Product.php

Define a classe Product com atributos:

id, name, price, stock
Contém métodos getters e setters com validação.

Cart.php

Define a classe Cart que gerencia:

Adicionar itens ao carrinho (addItem)

Remover itens do carrinho (removeItem)

Listar itens (listItems)

Calcular total (calculateTotal)

Aplicar cupom de desconto (applyCoupon)

Mantém a mesma estrutura e textos definidos na documentação original.

🧪 Casos de Uso (no index.php)
Caso	Ação	Resultado Esperado
Caso 1	Adicionar 2 unidades de Camiseta	Produto adicionado ao carrinho, subtotal e total atualizados
Caso 2	Tentar adicionar 10 unidades de Tênis	Mensagem “Estoque insuficiente”
Caso 3	Adicionar 1 unidade de Calça Jeans e depois remover	Mensagem de adição, depois mensagem “Produto removido do carrinho” e estoque restaurado
Caso 4	Aplicar cupom DESCONTO10	Desconto de 10% aplicado ao total
Caso 5	Adicionar 3 unidades de Boné	Produto adicionado ao carrinho com sucesso
🖥️ Exemplo de Saída Esperada
Caso 1 — Adicionar produto válido
Adicionando 2 unidades do produto: Camiseta
Produto adicionado ao carrinho.
Product: Camiseta | Quantity: 2 | Subtotal: $ 119.80
Total: $ 119.80
...


Cada caso no navegador exibirá o texto correspondente e os totais atualizados.
