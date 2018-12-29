<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;
class Staff extends Controller
{
    // 普通用户页面 首页
    public function index()
    {
       return $this->fetch();
        
    }
    // 首页 
    public function home(){
        return $this->fetch();
    }
}
