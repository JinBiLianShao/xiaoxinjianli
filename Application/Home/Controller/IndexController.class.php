<?php
namespace Home\Controller;
use Think\Controller;
use Think\Image;

class IndexController extends Controller {
    public function index(){
        $name = "/jianli";
        /*操控留言表*/
        $m = M("liuyan");
        $data = $m->field("*")->order('id desc')->limit(10)->select();
        $this->assign("data",$data);
        $this->assign("name",$name);
        $this->display();
    }
    //留言
    public function contact(){
        $name = "/jianli";
        /*获取留言板的form数据*/
        $data["name"] = I("post.name");
        $data["email"] = I("post.email");
        $data["text"] = I("post.text");

        if($_POST){
            /*操控留言表*/
            $m = M("liuyan");
            /*写入数据库*/
            if($data["name"] == ""){
                $this->error("未填写用户名！");
            }
            elseif (!filter_var($data["email"], FILTER_VALIDATE_EMAIL)) {
                $this->error("未填写正确的邮箱！");
            }
            elseif ($data["text"] == ""){
                $this->error("您填写的内容为空！");
            }
            else{
                $m->add($data);
            }
        }
        $this->assign("name",$name);
        $this->display();
    }
    //登陆
    public function login(){
        $name = "/jianli";
        if ($_POST) {
            $uername = I("post.uername");
            $password = I("post.password");
            $yzm = I("post.yzm");
            $m = M("uer");
            if (empty($uername)) {
                $this->error("账号不能为空");
            }

            if (empty($password)) {
                $this->error("密码不能为空");
            }

            $verify = new \Think\Verify();
            if ($verify->check($yzm)) {
                $data_name = $m->field("*")->where("uername='%s'",array($uername))->select();
                if ($data_name){
                    if ($data_name[0]["password"] == $password){
                        cookie('name',$data_name[0]["name"],3600);
                        //$this->success("登陆成功！！", "".$name."/home/admin/index");
                        $this->redirect("/home/admin/index");
                    }else{
                        $this->success("密码错误！！", "".$name."/home/index/login");
                    }
                }else{
                    $this->success("用户名或密码错误！！", "".$name."/home/index/login");
                }
            } else {
                $this->success('验证码错误！', "".$name."/home/index/login");
            }
        }
        $this->assign("name",$name);
        $this->display();
    }
    //注册
    public function register(){
        $nane = "/jianli";
        if($_POST){
            $data["uername"] = I("post.uername");
            $data["name"] = I("post.name");
            $data["email"] = I("post.email");
            $data["password"] = I("post.password");
            $m = M("uer");
            if (empty($data["uername"])) {
                $this->assign("uername", "<span style='font-size: 12px; color: red'>用户名不能为空！</span>");
            }
            
            if (empty($data["name"])) {
                $this->assign("nane", "<span style='font-size: 12px; color: red'>姓名不能为空！</span>");
            }

            if (empty($data["email"])) {
                $this->assign("email", "<span style='font-size: 12px; color: red'>邮箱不能为空！</span>");
            }
            elseif (!filter_var($data["email"], FILTER_VALIDATE_EMAIL)) {
                $this->assign("email", "<span style='font-size: 12px; color: red'>邮箱格式不对！</span>");
            }

            if (empty($data["password"])) {
                $this->assign("password", "<span style='font-size: 12px; color: red'>密码不能为空！</span>");
            }
            $data_name = $m->field("*")->where("uername='%s'",array($data["uername"]))->select();
            if ($data_name){
                $this->assign("uername", "<span style='font-size: 12px; color: red'>用户名已被注册！</span>");
            }else if ( 15<strlen($data["uername"]) || strlen($data["uername"])<5 ){
                $this->assign("uername", "<span style='font-size: 12px; color: red'>用户名请在5~15位之间！</span>");
            }else{
                $m->add($data);
                $this->success('注册成功，去登陆！', "".$nane."/home/index/login");
            }
        }
        $this->assign("name",$nane);
        $this->display();
    }
    //验证码
    public function yzm(){
        $Verify = new \Think\Verify();
        $Verify->entry();
        $this->display();
    }
    //找回密码
    public function lostpassword(){
        $nane = "/jianli";
        $this->assign("name", $nane);
        $this->display();

    }
    // 验证找回
    public function password(){
        $nane = "/jianli";
        if ($_POST){
            $uername = I("post.uername");
            $name = I("post.name");
            $email = I("post.email");
            $m = M("uer");

            if (empty($uername)) {
                $this->error("账号不能为空");
            }

            if (empty($name)) {
                $this->error("姓名不能为空");
            }

            if (empty($email)) {
                $this->error("邮箱不能为空");
            }
            elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->error("未填写正确的邮箱！");
            }
            $data = $m->field("*")->where("uername='%s' and name='%s' and email='%s'",array($uername,$name,$email))->select();
            if($data){
                $this->assign("data", $data);
                $this->assign("name", $nane);
                $this->display();
            }
            else{
                $this->error("抱歉该用户不存在");
            }
        }
    }
    // 修改密码
    public function passwordyz(){
        $nane = "/jianli";
        $m = M("uer");
        if ($_POST){
            $uername = I("post.uername");
            $password = I("post.password");
            $password1 = I("post.password1");
            if (empty($password)){
                $this->error("密码不能为空");
            }elseif ($password == $password1){
                $m->where("uername='%s'",array($uername))->setField('password',$password);
                $this->success('修改成功，去登陆！', "".$nane."/home/index/login");
            }else{
                $this->error("两次密码不相同");
            }
        }
    }
}