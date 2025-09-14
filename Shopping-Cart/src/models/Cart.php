<?php

class Cart
{
    private array $items = [];
    private array $products;
    private float $discount = 0;

    public function __construct(array $products)
    {
        $this->products = $products;
    }

    public function addItem(int $productId, int $quantity)
    {
        if (!isset($this->products[$productId])) {
            echo "Produto não Existe.<br>";
            return;
        }

        if ($quantity <= 0) {
            echo "Quantidade Invalida.<br>";
            return;
        }

        $product = $this->products[$productId];

        if ($product->getStock() < $quantity) {
            echo "Estoque insuficiente.<br>";
            return;
        }

        $product->setStock($product->getStock() - $quantity);

        if (isset($this->items[$productId])) {
            $this->items[$productId]['quantity'] += $quantity;
        } else {
            $this->items[$productId] = [
                'ID-Produto' => $productId,
                'Quantidade' => $quantity,
                'Subtotal' => 0,
            ];
        }

        $this->items[$productId]['subtotal'] = $product->getPrice() * $this->items[$productId]['quantity'];

        echo "Produto adicionado ao carrinho.<br>";
    }

    public function removeItem(int $productId)
    {
        if (!isset($this->items[$productId])) {
            echo "Produto nao encontrado no carrinho.<br>";
            return;
        }

        $quantity = $this->items[$productId]['quantity'];
        $product = $this->products[$productId];
        $product->setStock($product->getStock() + $quantity);

        unset($this->items[$productId]);

        echo "Produto removido do carrinho.<br>";
    }

  
    public function listItems()
    {
        if (empty($this->items)) {
            echo "Carrinho está vazio.<br>";
            return;
        }

        foreach ($this->items as $item) {
            $product = $this->products[$item['product_id']];
            echo "Product: " . $product->getName() . " | Quantity: " . $item['quantity'] . " | Subtotal: $ " . number_format($item['subtotal'], 2) . "<br>";
        }

        echo "Total: $ " . number_format($this->calculateTotal(), 2) . "<br>";
    }

    public function calculateTotal(): float
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['subtotal'];
        }

        if ($this->discount > 0) {
            $total = $total - ($total * $this->discount);
        }

        return $total;
    }

    public function applyCoupon(string $coupon)
    {
        $coupon = strtoupper(trim($coupon));
        if ($coupon === 'DESCONTO10') {
            $this->discount = 0.10;
            echo "Cupon desconto de 10% aplicado.<br>";
        } else {
            echo "Cupon inválido.<br>";
        }
    }
}

?>
