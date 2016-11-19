<?php
//roc_med的Model模型
namespace Model;
use Think\Model;

class ManagerModel extends Model{
    //用户名和密码检验
    function checkNamePsw($name,$password){
        //根据$name判断名字是否存在
        //若存在就让记录的密码和$psw做比较
        $info= $this->where("mg_name='$name'")->find();
        //dump($info);
        //name存在的情况下验证name所对应的密码是否正确
        if($info){
            if($info['mg_password']===$password){
                return $info;
            }
        }
        return null;
    }
//    function checkPsw($password){
//        $info= $this->where("mg_password='$password'")->find();
//    }
}
