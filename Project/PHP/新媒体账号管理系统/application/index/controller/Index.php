<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;
class Index extends Controller
{

    public function index(){
        $name = Session('name');
        if($name == NULL){
            $subQuery = Db::table('media-datainfo')
            ->order('id desc')
            ->buildSql();
            $sel = Db::table($subQuery.' a')
                    ->group('a.phonesn')
                    ->select();

            $this->assign('sel',$sel);
            //抖音粉丝量
            $douyin = Db::table($subQuery.'d')
                    ->where('d.dyaccount','<>','')
                    ->group('d.dyaccount')
                    ->select();
            $kuaishou = Db::table($subQuery.'k')
                    ->where('k.ksaccount','<>','')
                    ->group('k.ksaccount')
                    ->select();
            $weixin = Db::table($subQuery.'w')
                    ->where('w.wxaccount','<>','')
                    ->group('w.wxaccount')
                    ->select();
            $dyfans = 0;//抖音粉丝 总数
            $ksfans = 0;//快手粉丝 总数
            $wxfans = 0;//微信粉丝 总数
            $dcount = count($douyin);
            $kcount = count($kuaishou);
            $wcount = count($weixin);
            
            for($i=0;$i<$dcount;$i++){        
                $dyfans += $douyin[$i]['dyfans'];
            } 
            for($i=0;$i<$kcount;$i++){        
                $ksfans += $kuaishou[$i]['ksfans'];
            } 
            for($i=0;$i<$wcount;$i++){        
                $wxfans += $weixin[$i]['wxfans'];
            } 
            //快手总账号数
           $this->assign('ksamouont',$kcount);
           //抖音总账号数
           $this->assign('dyamouont',$dcount);
           //微信总账号数
           $this->assign('wxamouont',$wcount);
           //抖音粉丝总量
            $this->assign('dyfans',$dyfans);
            $this->assign('ksfans',$ksfans);
            $this->assign('wxfans',$wxfans);
            // 手机数量
            $pcount = count($sel);
            $this->assign('pcount',$pcount);
            // 手机卡数量 
            $sim1 = Db::table($subQuery.' a')
            ->group('a.phonesn')
            ->where('a.phonesim1','<>','')
            ->select();
            $sim2 = Db::table($subQuery.' a')
            ->group('a.phonesn')
            ->where('a.phonesim2','<>','')
            ->select();
            $cphone = count($sim1)+count($sim2);
            $this->assign('cphone',$cphone);
            return $this->fetch();     
        }else{
            return redirect('/Index/Manager/index/');
        }        
    }
    // 登陆页面 
    public function login()
    {
        if(request() -> isPost()){
            $uname = $_POST['uname'];
            $upass = $_POST['upass'];
            $uname = Db::name('user')->where('uname',$uname)->find();
            // 判断用户名 
            if($uname){
                // 判断密码
                if($upass ==  $uname['upass']){                    
                    Session('name',$uname['uname']);//保存用户名
                    Session('Uid',$uname['id']);//保存用户id
                    return $this->success('管理员'.$uname['uname'].'登陆成功','Manager/index');
                }else{
                    return $this->error('密码错误,请重新输入');
                }
            }else{
                return $this->error('用户名输入错误或者不存在，请重新输入');
            }
        }else{
            return $this->fetch();
        }
        
    }
    //退出系统
    public function lgout(){
        Session::clear('think');
        if(1){
            return $this->success('退出系统成功','Index/index');
        }else{
            return $this->error('退出系统失败');
        }
       
    }

    public function dyfans(){
        $id = $_POST['id'];
        $type = $_POST['type'];
        $sel = Db::name('datainfo')->where('id',$id)->find();
        switch ($type) {
            case 'dy':
            $subQuery = Db::table('media-datainfo')
                    ->where('phonesn',$sel['phonesn'])
                    ->where('dyaccount',$sel['dyaccount'])
                    ->order('id desc')
                    ->buildSql();
            $selinfo = Db::table($subQuery.'d')
            ->group('dytime')
            ->select();
                break;
            case 'ks':
            $subQuery = Db::table('media-datainfo')
                ->where('phonesn',$sel['phonesn'])
                ->where('ksaccount',$sel['ksaccount'])
                ->order('id desc')
                ->buildSql();
                $selinfo = Db::table($subQuery.'d')
                ->group('kstime')
                ->select();
                break;
            case 'wx':
            $subQuery = Db::table('media-datainfo')
                    ->where('phonesn',$sel['phonesn'])
                    ->where('wxaccount',$sel['wxaccount'])
                    ->order('id desc')
                    ->buildSql();
                    $selinfo = Db::table($subQuery.'d')
                    ->group('wxtime')
                    ->select();
                break;
        }             
        return json_encode($selinfo);
    }
}
