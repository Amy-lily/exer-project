<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;
header('Access-Control-Allow-Origin:*');
header("Access-Control-Allow-Methods: POST");
header("Content-type: text/html; charset=utf-8");
class Index extends Controller
{
    // 登陆页面 
    public function index()
    {
        if(request() -> isPost()){
            $uname = $_POST['username'];
            $upass = $_POST['password'];
            $utype = $_POST['utype'];
            $uname = Db::name('user')->where('uname',$uname)->find();
            // 判断用户名 
            if($uname){
                // 判断密码以及用户类型
                if($upass ==  $uname['upass']){
                    // 判断用户类型 
                    if($utype == $uname['utype']){
                        if($utype == 1){
                            // 管理员 
                            Session('name',$uname['uname']);//保存用户名
                            Session('Uid',$uname['id']);//保存用户id
                            return $this->success('管理员'.$uname['uname'].'登陆成功','Manager/index');
                        }else if($utype == 0){
                            Session('name',$uname['uname']);//保存用户名
                            Session('Uid',$uname['id']);//保存用户id
                            return $this->success('普通用户'.$uname['uname'].'登陆成功','Staff/index');
                        }
                    }else{
                        return $this->error('所选用户类型错误,请重新选择');
                    }
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
    // 首页 
    public function home(){
        return $this->fetch();
    }

    public function message(){
        if(request()->isPost()){            
            $data = [
                'username'    => $_POST['username'],
                'phone'       => $_POST['phone'],
                'proname'     => $_POST['proname'],
                'uqq'         => $_POST['uqq'],
                'wchat'       => $_POST['wchat'],
                'mesage'      => $_POST['mesage'],  
                'pbrand'      => $_POST['pbrand'],
                'address'     => $_POST['address'],
                'proaddre'    => $_POST['proaddre'],
                'time'        => time()
            ];
            // 查找数据据中是否有相同的电话号码 
            $selphone = Db::name('message')->where('phone',$data['phone'])->find();
            if($data['username'] == null){
                $list = [
                    'message' => '用户名为空',
                    'retcode' => '10001',
                ];
                echo '<script language="JavaScript">alert("用户名为空!");history.back();</script>';die;
            }
            if($data['phone'] == null){
                $list = [
                    'message' => '手机号为空',
                    'retcode' => '10002',
                ];
                echo '<script language="JavaScript">alert("手机号为空!");history.back();</script>';die;
            }else{                
                if($selphone){
                    $list = [
                        'message' => '电话号码已经存在!',
                        'retcode' => '10003',
                    ];
                    echo '<script language="JavaScript">alert("电话号码已经存在！");history.back();</script>';die;
                }
            }
            if($data['uqq'] == null){
                $data['uqq'] = ' ';
            }
            $insrt = Db::name('message')->insert($data);
            if($insrt){
                $list = [
                    'message' => '提交成功，我们将尽快与您联系。',
                    'retcode' => '00000',
                ];
                echo '<script language="JavaScript">alert("提交成功，我们将尽快与您联系。");history.back();</script>';die;
            }else{
                $list = [
                    'message' => '提交留言失败',
                    'retcode' => '10004',
                ];
                echo '<script language="JavaScript">alert("提交留言失败！");history.back();</script>';die;
            }
        }else{
            return $this->fetch();
        }
        
    }



    
    public function msglist(){
        if(request()->isPost()){            
            $data = [
                'username'    => $_POST['username'],
                'phone'       => $_POST['phone'],
                'proname'     => $_POST['proname'],
                'uqq'         => $_POST['uqq'],
                'wchat'       => $_POST['wchat'],
                'mesage'      => $_POST['mesage'],  
                'pbrand'      => $_POST['pbrand'],
                'address'     => $_POST['address'],
                'proaddre'    => $_POST['proaddre'],
                'time'        => time()
            ];
            // 查找数据据中是否有相同的电话号码 
            $selphone = Db::name('message')->where('phone',$data['phone'])->find();
            if($data['username'] == null){
                $list = [
                    'message' => '用户名为空',
                    'retcode' => '10001',
                ];
                return json_encode($list);die;
            }
            if($data['phone'] == null){
                $list = [
                    'message' => '手机号为空',
                    'retcode' => '10002',
                ];
                return json_encode($list);die;
            }else{                
                if($selphone){
                    $list = [
                        'message' => '电话号码已经存在!',
                        'retcode' => '10003',
                    ];
                    return json_encode($list);die;
                }
            }
            if($data['uqq'] == null){
                $data['uqq'] = ' ';
            }
            $insrt = Db::name('message')->insert($data);
            if($insrt){
                $list = [
                    'message' => '提交成功，我们将尽快与您联系。',
                    'retcode' => '00000',
                ];
                return json_encode($list);die;
            }else{
                $list = [
                    'message' => '提交留言失败',
                    'retcode' => '10004',
                ];
                return json_encode($list);die;
            }
        }
    }

    //抽奖 次数返回
    public function lottery(){
        $sel = Db::name('lottery')->where('id',1)->find();
        if($sel){
            $list =[
                'pack'=>$sel['lotpack'],
                'member'=>$sel['lotmember']
            ];
            return json_encode($list);
        }else{
            $list =[
                'pack'=>'no-result',
                'member'=>'no-result'
            ];
            return json_encode($list);
        }
    }

    // 修改奖品个数
    public function editlottery(){
        $proj = $_POST['proj'];
        $sel = Db::name('lottery')->where('id',1)->find();
        $pack = $sel['lotpack'];
        $member = $sel['lotmember'];
        // 福袋
        if($proj == 'pack'){
            if($pack<=0){
                $result = [
                    'code' => '000',
                    'proj' => $proj,
                    'message' => '奖品派发完毕'
                ];
                return json_encode($result);
            }else{
                $upda = Db::name('lottery')->where('id',1)->update(['lotpack'=>$pack-1,'time' =>time()]);
                $res = Db::name('lottery')->select();
                if($upda){
                    $result = [
                        'code' => '001',
                        'proj' => $proj,
                        'message' => '库存丰足',
                        'data' => $res
                    ];
                    return json_encode($result);
                }else{
                    $result = [
                        'code' => '001',
                        'proj' => $proj,
                        'message' => '奖品个数修改失败'
                    ];
                    return json_encode($result);
                }

            }
        }else{
            // 会员
            if($member<=0){
                $result = [
                    'code' => '000',
                    'proj' => $proj,
                    'message' => '奖品派发完毕'
                ];
                return json_encode($result);
        }else{
            $upda = Db::name('lottery')->where('id',1)->update(['lotmember'=>$member-1,'time' =>time()]);
            $res = Db::name('lottery')->select();
            if($upda){ 
                $result = [
                    'code' => '001',
                    'proj' => $proj,
                    'message' => ' ',
                    'data' => $res
                ];
                return json_encode($result);
            }else{
                $result = [
                    'code' => '001',
                    'proj' => $proj,
                    'message' => '奖品个数修改失败'
                ];
                return json_encode($result);
            }

        }
        }
    }
    public function uplottery(){
        $data=[
            'lotpack'=>3,
            'lotmember'=>5,
        ];
        $updat = Db::name('lottery')->where('id',1)->update($data);
        if($updat){
            echo '成功';
        }else{
            echo '失败';
        }
    }

}
