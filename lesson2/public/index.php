<?php
require "../engine/Autoload.php";

use app\model\Products;

use app\engine\Autoload;

spl_autoload_register([new Autoload(), 'loadClass']);

$product = new Products(new Db());
$product = new Users(new Db());
$product = new Basket(new Db());
$product = new Orders(new Db());



