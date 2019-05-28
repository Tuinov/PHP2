<?php
// 1. Придумать класс, который описывает любую сущность из предметной области интернет-магазинов: продукт, ценник, посылка и т.п.
// 2. Описать свойства класса из п.1 (состояние).
// 3. Описать поведение класса из п.1 (методы).
// 4. Придумать наследников класса из п.1. Чем они будут отличаться?
$quantity = 3;

class Product
{   
    public $id;
    public $name;
    public $img;
    public $price;
    public $category;
    public $description;

    function info() {
        echo "<h1>{$this->name}</h1>";
    }


    public function __construct($id, $name, $img, $price, $category, $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->img = $img;
        $this->price = $price;
        $this->category = $category;
        $this->description = $description;

    }

    public function render()
    {
    
    echo "<div id={$this->id}>
        <img src={$this->img}>
        <p>{$this->name}</p> <br>
        <span>{$this->price}</span>
    </div>";
        
    }
    public function sum($quantity) {
      return  $price * $quantity;
    }

}

$jacket  = new Product(1, 'куртка', 'img/1.jpg', 100, 'man', 'куртка летняя');

$jacket->render();

class SaleProduct extends Product {
public $sale;
    public function __construct($id, $name, $img, $price, $category, $description, $sale)
    {
        parent::__construct($id, $name, $img, $price, $category, $description);
        $this->sale = $sale;
    }



    function salePrice($price, $sale) {
        $this->price = $price * $sale;
    }

}



// 5. Дан код:
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo();  //1 
$a2->foo();  //2
$a1->foo();  //3
$a2->foo();  //4 потому, что $x - static  и принадлежит классу, а не объекту




// Немного изменим п.5:
class Ay {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends Ay {
}
$a1 = new Ay();
$b1 = new B();
$a1->foo(); //1
$b1->foo(); //1
$a1->foo(); //2
$b1->foo(); //2 потому, что $x - static  и принадлежит КАЖДОМУ СОЗДОВАЕМОМУ классу, а не объекту

