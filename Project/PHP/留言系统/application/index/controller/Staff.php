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
        $Uid = Session('Uid');
        if($Uid != NULL){
            $proname = Db::name('user')->where('id',$Uid)->find();
            if(request()->isGet()){
                $url = $_SERVER['QUERY_STRING'];//获取地址栏中的内容 
                $ifphone = strpos($url,'phone');
                if($ifphone !== false){
                    $phone = $_GET['phone'];
                }else{
                    $phone = '';
                }
                // $sel = Db::name('message')->where('proname',$proname['proname'])->where('phone','like','%'.$phone.'%')->order('id desc')->paginate(10,false,[ 
                //     'query' => array('phone'=>$phone),]);
                
                $sel = Db::name('message')->where('proname',$proname['proname'])->where('phone','like','%'.$phone.'%')->order('id desc')->paginate(10);       
                        
                $this->assign('empty','<p class="empty">暂时没有数据</p>');
                $this->assign('sel',$sel);
                return $this->fetch();
            }else{         
                $phone = '';      
                $sel = Db::name('message')->where('proname',$proname['proname'])->order('id desc')->paginate(10);
                $this->assign('empty','<p class="empty">暂时没有数据</p>');
                $this->assign('sel',$sel);
                return $this->fetch();
            }
        }else{           
           
            return $this->error('请先登陆','Index/index');
            
        }
        
    }
    // 首页 
    public function home(){
        return $this->fetch();
    }

    public function UserMsgexport(){
        $Uid = Session('Uid');
        if($Uid != NULL){
            vendor("PHPExcel.PHPExcel.PHPExcel");
            vendor("PHPExcel.PHPExcel.IOFactory");
            $objPHPExcel = new \PHPExcel();
            $name='留言信息导出';
            $headArr=['ID','姓名-username','手机号-phone','项目名-proname','品牌名-pbrand','地址-address','QQ号-uqq','微信号-wchat','留言-mesage','项目地址-proaddre','审核状态','更新时间-time'];  
            $proname = Db::name('user')->where('id',$Uid)->find();          
            $data = Db::name('message')->where('proname',$proname['proname'])->select();
    
            $count = count($data);
            for ($x=0; $x<$count; $x++) {
                $data[$x]['time'] = date("Y-m-d",$data[$x]['time']);
            }
            // var_dump($data);die;
            $fileName = "快道留言系统".$proname['proname']."项目留言信息表.xls";
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




        }else{            
            return $this->error('请先登陆','Index/index');
        }
    }
}
