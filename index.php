<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Cart.php';

$product1 = new Product(1, 'Camiseta', 59.90, 10);
$product2 = new Product(2, 'Calça Jeans', 129.90, 5);
$product3 = new Product(3, 'Tênis', 199.90, 3);
$product4 = new Product(4, 'Boné', 39.90, 15);

$cart = new Cart([
    $product1->getId() => $product1,
    $product2->getId() => $product2,
    $product3->getId() => $product3,
    $product4->getId() => $product4
]);

//Caso 1 — Adicionar produto válido
echo "<h3>Caso 1 — Adicionar produto válido</h3>";
echo "Adicionando 2 unidades do produto: " . $product1->getName() . "<br>";
$cart->addItem(1, 2);
$cart->listItems();
echo "<hr>";

//Caso 2 — Adicionar além do estoque
echo "<h3>Caso 2 — Adicionar além do estoque</h3>";
echo "Tentando adicionar 10 unidades do produto: " . $product3->getName() . "<br>";
$cart->addItem(3, 10);
$cart->listItems();
echo "<hr>";

//Caso 3 — Remover produto do carrinho
echo "<h3>Caso 3 — Remover produto do carrinho</h3>";
echo "Adicionando 1 unidade do produto: " . $product2->getName() . "<br>";
$cart->addItem(2, 1);
$cart->listItems();
echo "Removendo o produto do carrinho: " . $product2->getName() . "<br>";
$cart->removeItem(2);
$cart->listItems();
echo "<hr>";

//Caso 4 — Aplicar cupom
echo "<h3>Caso 4 — Aplicar cupom</h3>";
echo "Aplicando cupom de 10% (DESCONTO10)<br>";
$cart->applyCoupon('DESCONTO10');
$cart->listItems();
echo "<hr>";

//Caso 5 — Adicionar novo produto com sucesso
echo "<h3>Caso 5 — Adicionar novo produto com sucesso</h3>";
echo "Adicionando 3 unidades do produto: " . $product4->getName() . "<br>";
$cart->addItem(4, 3);
$cart->listItems();
echo "<hr>";
