<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

    public function login(){
    	$user  = D('user_info');
    	$username  = I('post.username');
    	$passwd = I('post.password');
    	$userinfo = $user -> where("username = '{$username}' AND passwd = '{$passwd}'") -> field('username,passwd') -> find();	
    	if($userinfo){
    		session('username',$username);
    		$this -> redirect('Admin/Student/index');
    	}
    	$this->display();
	}
}