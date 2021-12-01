<?php
namespace Home\Controller;
use Think\Controller;
class AdminController extends Controller{
    public function index(){
        $name = "/jianli";
        if ($_GET){
            $cook = I("get.cook");
            if ($cook == 0){
                cookie("name",null);
                $this->redirect("/home/index/index");
            }elseif ($cook == 1){
                cookie("name",null);
                $this->redirect("/home/index/login");
            }
        }else{
        if (cookie('name')) {
            $this->assign("name", $name);
            $this->display();
        }else{
            $this->redirect("/home/index/login");
        }
            }
    }
}