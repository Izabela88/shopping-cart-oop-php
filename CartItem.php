<?php


class CartItem
{
    private Product $product;
    private int $quantity;

    // TODO Generate constructor with all properties of the class
    // TODO Generate getters and setters of properties
    public function __construct(Product $product, int $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function setProduct($product)
    {
        $this->$product = $product;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->$quantity = $quantity;
    }

    public function increaseQuantity()
    {
        //TODO $quantity must be increased by one.
        // Bonus: $quantity must not become more than whatever is Product::$availableQuantity
    }

    public function decreaseQuantity()
    {
        //TODO $quantity must be increased by one.
        // Bonus: Quantity must not become less than 1
    }
}