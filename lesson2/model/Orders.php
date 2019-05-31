<?php

namespace app\model;

class Orders extends Model {
    public $id;
    public $time;
    public $user;



    public function getTableName() {
        return 'orders';
    }



}