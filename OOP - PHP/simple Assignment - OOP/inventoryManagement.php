<?php
/*

Inventory Management:

Instructions:
* Develop an inventory management system. Create classes for Product and Inventory. The Product class should have properties 
like name, price, and quantity. Implement methods for:

* Adding a product to the inventory.
* Removing a product from the inventory.
* Displaying the list of products in the inventory.

*/

class Product {
    private $name;
    private $price;
    private $quantity;

    public function __construct($name, $price, $quantity) {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getQuantity(){
        return $this->quantity;
    }
}

class Inventory{
    private $products = [];
    public function addProduct(Product $product){
        $this->products[] = $product;
    }
    public function removeProduct($productName){
        foreach($this->products as $key => $product){
            if($product->getName() === $productName){
                unset($this->products[$key]);
                $this->products = array_values($this->products);
                return true;
            }
        } return false;
    } 

    public function showProduct(){
        echo "Product Inventory :" .PHP_EOL;
        foreach($this->products as $product){
            echo "Name: " . $product->getName() . "\n";
            echo "Price: $" . $product->getPrice() . "\n";
            echo "Quantity: " . $product->getQuantity() . "\n\n";
        }
    }

}

$product1 = new Product('Potato', '20' , '300');
$product2 = new Product('Rice', '65', '2000');
$product3 = new Product('Milk', '80', '80');

$inventory = new Inventory();
$inventory->addProduct($product1);
$inventory->addProduct($product2);
$inventory->addProduct($product3);

// show products
// echo $inventory->showProduct();

// delete Product
$inventory->removeProduct('Rice');

// check deleted product
echo $inventory->showProduct();