<?php

namespace app\model;

class Basket extends Model {
    public $id;
    public $name;
    public $products;
    public $quantity;
    public $sum;



    public function getTableName() {
        return 'basket';
    }
}