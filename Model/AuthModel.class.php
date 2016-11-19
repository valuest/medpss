<?php
//roc_auth的Model模型
namespace Model;
use Think\Model;

class AuthModel extends Model{
    //实现权限添加
    function saveAuth($_auth){
        //1.根据已有_auth,生成一条新记录
        $newid = $this->add($_auth);
        //2.制作auth_path
        if($_auth['auth_pid']==0){
          //(1级权限auth_path===新记录id)
            $path = $newid;
        }else{
          //2级权限根据pid获得父级权限信息,进而获得全路径 
            $pidinfo = $this ->find($_auth['auth_pid']);
            $path = $pidinfo['auth_path']."-".$newid;
        }
        //$path = rtrim($path,'-');
        //echo $path;
        //3.制作auth_level   全路径中的"-"数量  substr_count();
        $level = substr_count($path,'-');
        
        $sql ="update st_auth set auth_path='$path',auth_level='$level' where auth_id='$newid'";
        return $this -> execute($sql);
    }
}
