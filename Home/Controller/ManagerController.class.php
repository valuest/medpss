<?php
namespace Home\Controller;
use Think\Controller;
//use Think\Verify;//空间类元素引入方式

class ManagerController extends Controller {
    //用户登录系统
    public function login(){
        //两个逻辑:展示、收集
        if(!empty($_POST)){
            $vry = new \Think\Verify();
            //dump($_POST);
            //$_POST['code']==session('');
            if($vry->check($_POST['code'])){
                //cho "验证码正确";
                //用户名和密码校验
                $manager = new \Model\ManagerModel();
                //在IndexModel中丰富一个checkNamePsw,用于检验用户名和密码
                $info = $manager->checkNamePsw($_POST['username'],$_POST['userpassword']);
                if($info){
                    //dump($info);
                    //session持久化用户信息(ID,name)
                    session('user_id',$info['mg_id']);
                    session('user_name',$info['mg_name']);
                    $this ->redirect('/Admin/Admin/admin');
                }else
                    echo "<script>alert('用户名或密码错误');</script>";
                     
            }else
                echo "<script>alert('验证码错误');</script>";
            
        }
        $this->display();
        //echo '123';
      }
    //推出系统,清除session
    public function logout(){
        //清除session
        session(null);
        $this -> redirect('login');
    }


    //输出验证码
      function VerifyImg(){
           $config = array(
              'fontSize'  =>  18,                // 验证码字体大小(px)
              'imageH'    =>  35,                // 验证码图片高度
              'imageW'    =>  130,               // 验证码图片宽度
              'length'    =>  4,                 // 验证码位数
              'fontttf'   =>  '4.ttf',               // 验证码字体，不设置随机获取
          );
          //实例化Verifly验证码类
          $very = new \Think\Verify($config);//完全限定名称方式
          //$very = new Verify();
          $very -> entry();//输出验证码
      }
      
      
      //修改密码
      function changepass(){
          $mg = D('manager');
          $info = $mg->find($_SESSION['user_id']);
          $this->assign('info',$info);
          if(!empty($_POST)){
                if ($_POST['old_pass'] === $info['mg_password']) {
                //dump($_POST['mpass']);
                $z = $mg->save($_POST);
                if ($z) {
                    $js =<<<eof
                    <script type="text/javascript">
                    window.top.location.href="../../Home/Manager/skip";
                    </script>
eof;
             echo $js;
                    //$this->redirect('skip', array(),1 , 密码修改成功需重新登录);
                    session(null);
                }
            }
            else{
                       //dump($_POST['old_pass']);
                    //dump($_POST['mg_password']);
                    $this->redirect('changepass', array('mg_id' => $mg_id), 1, 原密码输入错误);
                }
          } 
        //dump($info['mg_password']);
        //dump($info);
          $this->display();
      }
}