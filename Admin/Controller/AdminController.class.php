<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller{
    function admin(){
        $this ->display();
    }//索引页(整合)
    function head(){
        $this ->display();
    }//头部
    function left(){
        $this ->display();
    }//左部
    function right(){
        $this ->display();
    }//右侧
}

