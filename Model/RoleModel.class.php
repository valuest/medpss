<?php
namespace Model;
use Think\Model;

class RoleModel extends Model{
    //制作数据(role_auth_ids和role_auth_ac)、存储数据
    function saveRole($roleid,$authid){
        //制作role_auth_ids
        $authids = implode(',', $authid);
        //dump($authid);
        
        //制作role_auth_ac(控制器和操作方法连接的字符串)
        //根据选择权限id信息,查询对应记录,获得权限的controller和action信息
        $authinfo = D('auth')->select($authids);
        $s ="";
        foreach ($authinfo as $k =>$v){
            if(!empty($v['auth_c'])&&!empty($v['auth_a']))
            $s.=",".$v['auth_c']."-".$v['auth_a'].",";        
        }
        //$s = rtrim($s,',');
        //echo $s;
        $sql ="update st_role set role_auth_ids='$authids',role_auth_ac='$s' where role_id='$roleid'";
        //$this 代表调用该方法的对象
        return $this ->execute($sql);
    }
}
