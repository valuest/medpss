<?php
namespace Admin\Controller;
use Think\Controller;

class InventoryController extends Controller{
    //库存展示
    function show(){
        $this->display();
    }
    //库存报警
    function warning(){
        $this->display();
    }
}

