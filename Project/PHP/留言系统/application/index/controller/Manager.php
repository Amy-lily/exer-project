<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;
class Manager extends Controller
{
    //留言列表 
    public function index(){
        $Uid = Session('Uid');
        if($Uid != NULL){
            if(request()->isPost()){
                $proname = $_POST['proname'];               
                $sel = Db::name('message')->where('proname','like','%'.$proname.'%')->order('id desc')->paginate(10);
                $this->assign('empty','<p class="empty">暂时没有数据</p>');
                $this->assign('sel',$sel);
                return $this->fetch();
            }else{
                $sel = Db::name('message')->order('id desc')->paginate(10);
                $this->assign('empty','<p class="empty">暂时没有数据</p>');
                $this->assign('sel',$sel);
                return $this->fetch();
            }
        }else{            
            return $this->error('请先登陆','Index/index');
        }
    }

    //用户列表
    public function userlist(){
        $Uid = Session('Uid');
        if($Uid != NULL){
           if(request()->isPost()){
                $proname = $_POST['proname'];
                $sel = Db::name('user')->where('proname','like','%'.$proname.'%')->where("utype",0)->paginate(10);
                $this->assign('empty','<p class="empty">暂时没有数据</p>');
                $this->assign('sel',$sel);
                return $this->fetch();
           }else{
                $sel = Db::name('user')->where("utype",0)->order('id desc')->paginate(10);
                $this->assign('empty','<p class="empty">暂时没有数据</p>');
                $this->assign('sel',$sel);
                return $this->fetch();
           }
        }else{            
            return $this->error('请先登陆','Index/index');
        }
    }
    // 添加用户 
    public function adduser(){
        $Uid = Session('Uid');
        if($Uid != NULL){
            if(request()->isPost()){
                $data = [
                    'uname'     => $_POST['uname'],
                    'proname'   => $_POST['proname'],
                    'utype'     => 0,
                    'upass'     => substr(md5(time()), 0, 8),
                    'time'      => time()
                ];
                $sel = Db::name('user')->where('proname',$data['proname'])->select();
                if($sel){
                    return $this->error('已经存在该项目的用户','Manager/userlist');
                }
                if($data['uname']== null || $data['proname'] == null){
                    return $this->error('信息填写不完整，请重新填写');
                }
                $inser = Db::name('user')->insert($data);
                if($inser){
                    return $this->success('添加用户成功','Manager/userlist');
                }else{
                    return $this->error('添加用户失败');
                }
            }else{
                return $this->fetch();
            }
        }else{            
            return $this->error('请先登陆','Index/index');
        }
    }
    // 删除用户 
    public function deluser(){
       $Uid = Session('Uid');
       if($Uid != NULL){
            $id = $_GET['id'];
            $del = Db::name('user')->where('id',$id)->delete();
            if($del){
                return $this->success('删除用户成功');
            }else{
                return $this->error('删除用户失败');
            } 
       }else{            
           return $this->error('请先登陆','Index/index');
       }

    }
    // 用户数据导出
    public function Userexport(){
        vendor("PHPExcel.PHPExcel.PHPExcel");
        vendor("PHPExcel.PHPExcel.IOFactory");
        $objPHPExcel = new \PHPExcel();
        $name='用户信息导出';
        $headArr=['ID','用户名-uname','密码-upass','项目名-proname','用户类型-utype','更新时间-time'];
        $data = Db::name('user')->select();

        $count = count($data);
        for ($x=0; $x<$count; $x++) {
            $data[$x]['time'] = date("Y-m-d",$data[$x]['time']);
        }
        // var_dump($data);die;
        $fileName = "快道留言系统用户信息表.xls";
        $objPHPExcel = new \PHPExcel();
        $objPHPExcel->getProperties();
        $key = ord("A"); // 设置表头

        foreach ($headArr as $v) {
            $colum = chr($key);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue($colum . '1', $v);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue($colum . '1', $v);
            $key += 1;
        }
        $column = 2;
        $objActSheet = $objPHPExcel->getActiveSheet();
        foreach ($data as $key => $rows) { // 行写入
            $span = ord("A");
            foreach ($rows as $keyName => $value) { // 列写入
                $objActSheet->setCellValue(chr($span) . $column, $value);
                $span++;
            }
            $column++;
        }
        $fileName = iconv("utf-8", "gb2312", $fileName); // 重命名表
        $objPHPExcel->setActiveSheetIndex(0); // 设置活动单指数到第一个表,所以Excel打开这是第一个表
        header('Content-Type: application/vnd.ms-excel');
        header("Content-Disposition: attachment;filename='$fileName'");
        header('Cache-Control: max-age=0');
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output'); // 文件通过浏览器下载
        exit();
    }



    // 留言数据导出
    public function Msgexport(){
        vendor("PHPExcel.PHPExcel.PHPExcel");
        vendor("PHPExcel.PHPExcel.IOFactory");
        $objPHPExcel = new \PHPExcel();
        $name='留言信息导出';
        $headArr=['ID','姓名-username','手机号-phone','项目名-proname','品牌名-pbrand','地址-address','QQ号-uqq','微信号-wchat','留言-mesage','项目地址-proaddre','更新时间-time'];
        $data = Db::name('message')->select();

        $count = count($data);
        for ($x=0; $x<$count; $x++) {
            $data[$x]['time'] = date("Y-m-d",$data[$x]['time']);
        }
        // var_dump($data);die;
        $fileName = "快道留言系统留言信息表.xls";
        $objPHPExcel = new \PHPExcel();
        $objPHPExcel->getProperties();
        $key = ord("A"); // 设置表头

        foreach ($headArr as $v) {
            $colum = chr($key);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue($colum . '1', $v);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue($colum . '1', $v);
            $key += 1;
        }
        $column = 2;
        $objActSheet = $objPHPExcel->getActiveSheet();
        foreach ($data as $key => $rows) { // 行写入
            $span = ord("A");
            foreach ($rows as $keyName => $value) { // 列写入
                $objActSheet->setCellValue(chr($span) . $column, $value);
                $span++;
            }
            $column++;
        }
        $fileName = iconv("utf-8", "gb2312", $fileName); // 重命名表
        $objPHPExcel->setActiveSheetIndex(0); // 设置活动单指数到第一个表,所以Excel打开这是第一个表
        header('Content-Type: application/vnd.ms-excel');
        header("Content-Disposition: attachment;filename='$fileName'");
        header('Cache-Control: max-age=0');
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output'); // 文件通过浏览器下载
        exit();
    }
    //退出登陆
    public function logout(){
        Session::clear();
       return $this->success('退出登录成功','Index/index');
    }
    // 删除留言 
    public function delMsg(){
        $id = $_GET['id'];
        $del = Db::name('message')->where('id',$id)->delete();
        if($del){
            return $this->success('删除留言成功');
        }else{
            return $this->error('删除留言失败');
        }
    }
    
    //状态修改
    // public function msgstate(){
    //     $id = $_POST['id'];
    //     echo $id;
    // }
}