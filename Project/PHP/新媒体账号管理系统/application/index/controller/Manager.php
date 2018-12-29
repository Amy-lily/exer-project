<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;
header('Content-Type:text/html; charset=utf-8');
class Manager extends Controller
{
    // 管理员页面 首页
    public function index()
    {
        $subQuery = Db::table('media-datainfo')
        ->order('id desc')
        ->buildSql();
        $sel = Db::table($subQuery.' a')
                ->group('a.phonesn')
                ->select();
        $this->assign('empty','<p>暂时没有数据</p>');
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
        $wxfans = 0;//微信粉丝 总数‘
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
        //抖音总账号数
        $this->assign('dyamouont',$dcount);
        //快手总账号数
        $this->assign('ksamouont',$kcount);
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
    }
      // 数据导出
      public function Dataexport(){
        vendor("PHPExcel.PHPExcel.PHPExcel");
        vendor("PHPExcel.PHPExcel.IOFactory");
        $objPHPExcel = new \PHPExcel();
        $name='管理员信息营销账号信息';
        $headArr=['ID','手机编号','手机品牌','SIM1','SIM2','开户名1','开户名2','负责人','抖音账号','抖音密码','抖音名','抖音粉丝量','最后修改时间','快手账号','快手密码','快手名','快手粉丝量','最后修改时间','微信账号','微信密码','微信名','微信好友量','最后修改时间','时间'];
        $subQuery = Db::table('media-datainfo')
                ->order('id desc')
                ->buildSql();
        $data =  Db::table($subQuery.' a')
                ->group('a.phonesn')
                ->select();
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

//    ---------------------------------------------------------手机信息管理
    public function phonelist(){
        $subQuery = Db::table('media-datainfo')
        ->order('id desc')
        ->where('phonesn','<>','')
        ->buildSql();
        $sel = Db::table($subQuery.' a')
                ->group('a.phonesn')
                ->select();
        $this->assign('empty','<p>暂无数据</p>');
        $this->assign('sel',$sel);
        return $this->fetch();
    }
    //添加 手机信息
    public function addphone(){
        if(request()->isPost()){
            $data = [
                'phonesn'       => $_POST['phonesn'],
                'phonebrand'    => $_POST['phonebrand'],
                'phonesim1'     => $_POST['phonesim1'],
                'phonesim2'     => $_POST['phonesim2'],
                'phonecreate1'  => $_POST['phonecreate1'],
                'phonecreate2'  => $_POST['phonecreate2'],
                'phonecharge'   => $_POST['phonecharge'],
                'time'          => time()
            ];
            $sel = Db::name('datainfo')->where('phonesn',$data['phonesn'])->find();
            if(!$sel){ 
                $inser = Db::name('datainfo')->insert($data);
                if($inser){
                    return $this->success('添加手机信息成功','Manager/phonelist');
                }else{
                    return $this->error('添加手机信息失败,请稍后再试');
                }
            }else{
                return $this->error('已经存在当前的手机编号，请重新添加');
            }
          
        }else{
            return $this->fetch();
        }
    }

    //编辑手机信息
    public function editphone(){
        if(request()->isPost()){
            $id = $_POST['id'];
            $data = [
                'phonesn'       => $_POST['phonesn'],
                'phonebrand'    => $_POST['phonebrand'],
                'phonesim1'     => $_POST['phonesim1'],
                'phonesim2'     => $_POST['phonesim2'],
                'phonecreate1'  => $_POST['phonecreate1'],
                'phonecreate2'  => $_POST['phonecreate2'],
                'phonecharge'   => $_POST['phonecharge']
            ];
            $upda = Db::name('datainfo')->where('id',$id)->update($data);
            if($upda){
                return $this->success('修改手机信息成功','Manager/phonelist');
            }else{
                return $this->error('修改手机信息失败');
            }
        }else{
            $id = $_GET['id'];
            $sel = Db::name('datainfo')->where('id',$id)->find();
            if($sel){
                $this->assign('sel',$sel);
                return $this->fetch();
            }else{
                return $this->error('无数据');
            }
        }
    }
    //删除手机信息
    public function delphone(){
        $id = $_GET['id'];

        $sel = Db::name('datainfo')->where('id',$id)->find();
        $del = Db::name('datainfo')->where('phonesn',$sel['phonesn'])->delete();
        if($del){
            return $this->success('删除手机信息成功','Manager/phonelist');
        }else{
            return $this->error('删除手机信息失败');
        }
    }


    // -------------------------------------------------------------------- 抖音账号管理 
    public function dylist(){
        $subQuery = Db::name('datainfo')
                    ->field('id,phonesn,dyaccount,dypass,dyname,dyfans,dytime')
                    ->where('dyaccount','<>','')
                    ->order('id desc')
                    ->buildSql();
        $dylist = Db::table($subQuery.' a')
                    ->group('a.dyaccount')
                    ->select();                
        $this->assign('sel',$dylist);
        $this->assign('empty','<p>暂时没有数据</p>');
        return $this->fetch();
    }

    //添加抖音数据 
    public function adddy(){
        if(request()->isPost()){
            $id = $_POST['pid'];
            $selsn = Db::name('datainfo')->where('id',$id)->find();
            $unit = $_POST['unit'];
            $data = [
                'phonesn'      => $selsn['phonesn'],
                'phonebrand'   => $selsn['phonebrand'],
                'phonesim1'    => $selsn['phonesim1'],
                'phonesim2'    => $selsn['phonesim2'],
                'phonecreate1' => $selsn['phonecreate1'],
                'phonecreate2' => $selsn['phonecreate2'],
                'phonecharge'  => $selsn['phonecharge'],
                'dyaccount'    => $_POST['dyaccount'],
                'dypass'       => $_POST['dypass'],
                'dyname'       => $_POST['dyname'],
                'dyfans'       => $_POST['dyfans'],
                'dytime'       => date('Y-m-d',strtotime(str_replace(' ','',$_POST['time']))),
                'ksaccount'    => $selsn['ksaccount'],
                'kspass'       => $selsn['kspass'],
                'ksname'       => $selsn['ksname'],
                'ksfans'       => $selsn['ksfans'],
                'kstime'       => $selsn['kstime'],
                'wxaccount'    => $selsn['wxaccount'],
                'wxpass'       => $selsn['wxpass'],
                'wxname'       => $selsn['wxname'],
                'wxfans'       => $selsn['wxfans'],
                'wxtime'       => $selsn['wxtime'],
                'time'         => time()
            ];         
            
            $selresu = Db::name('datainfo')->where('dyaccount',$data['dyaccount'])->select();
            if($selsn['dyaccount']<>''){
                if($selsn['dyaccount']<>$data['dyaccount']){
                    return $this->error($selsn['phonesn'].' 已经存在抖音账号，不能重复添加');
                }else{
                    return $this->error($selsn['dyaccount'].' 抖音账号已经存在');
                }
            }else{
                if($selresu){
                    return $this->error($data['dyaccount'].' 抖音账号已经存在');
                }
                if($unit =='ge'){
                    $sing = number_format($data['dyfans']/10000,2,'.','');
                    $data['dyfans'] = $sing;
                }    
                $inser = Db::name('datainfo')->where('phonesn',$data['phonesn'])->update($data);
                if($inser){
                    return $this->success('添加抖音账号信息成功','Manager/dylist');
                }else{
                    return $this->error('添加抖音账号信息失败');
                }  
            }
        }else{
            $subQuery = Db::name('datainfo')
            ->field('id,phonesn,dyaccount,dypass,dyname,dyfans,dytime')
            ->where('dyaccount','=','')
            ->order('id desc')
            ->buildSql();
            $sel = Db::table($subQuery.' a')
                        ->group('a.phonesn')
                        ->select();  
            if($sel){
                $this->assign('sel',$sel);
                return $this->fetch();
            }else{
                return $this->error('目前所有的手机编号都存在对应的抖音账号，需要添加手机编号再进行抖音账号的添加','Manager/dylist','5');
            }     
        }
    }
    //编辑抖音信息
    public function editdy(){
        if(request()->isPost()){
            $id = $_POST['id'];//原抖音id
            $newid = $_POST['pid'];//修改后抖音id

            $data = [
                'dyaccount' => $_POST['dyaccount'],
                'dypass'    => $_POST['dypass'],
                'dyname'    => $_POST['dyname'],
                'dyfans'    => $_POST['dyfans'],
                'dytime'    => date('Y-m-d',strtotime(str_replace(' ','',$_POST['time'])))
            ];
            $selold = Db::name('datainfo')->where('id',$id)->find();//原抖音数据信息
            $selnew = Db::name('datainfo')->where('id',$newid)->find();//修改后抖音数据信息

            //修改了手机编号 
            if($selold['phonesn']<>$selnew['phonesn']){             
                // 判断新的手机编号 是否存在 抖音账号  
                if($selnew['dyaccount']<>'' && $selnew['dyaccount']<>$selold['dyaccount']){
                    return $this->error($selnew['phonesn'].' 已经存在抖音账号,不可重复添加抖音号');
                }
            }
            if($data['dyaccount']<>$selold['dyaccount']){
                $seldy = Db::name('datainfo')->where('dyaccount',$data['dyaccount'])->select();
                if($seldy){
                    return $this->error($data['dyaccount'].' 抖音账号已经存在，不能重复添加');
                }
            }     
            $unit = $_POST['unit'];            
            if($unit =='ge'){
                $sing = number_format($data['dyfans']/10000,2,'.','');
                $data['dyfans'] = $sing;
            }  
           
            // 将表中所有相关信息都进行修改 
            $upda = Db::name('datainfo')->where('phonesn',$selnew['phonesn'])->where('dyaccount',$selold['dyaccount'])->update($data);
            if($upda){
                return $this->success('修改抖音账号信息成功','Manager/dylist');
            }else{
                return $this->error('修改抖音账号信息失败');
            }  
        }else{
            $id = $_GET['id'];            
            $sel = Db::name('datainfo')->where('id',$id)->find();
            $pid = Db::name('datainfo')->group('phonesn')->select();//按手机编号分组
            $this->assign('pid',$pid);
            $this->assign('sel',$sel);
            return $this->fetch();
        }
}

    //修改抖音粉丝量
    public function editdyfans(){
        if(request()->isPost()){
            $id = $_POST['id'];
            $selsn = Db::name('datainfo')->where('id',$id)->find();
            $data = [
                'phonesn'      => $selsn['phonesn'],
                'phonebrand'   => $selsn['phonebrand'],
                'phonesim1'    => $selsn['phonesim1'],
                'phonesim2'    => $selsn['phonesim2'],
                'phonecreate1' => $selsn['phonecreate1'],
                'phonecreate2' => $selsn['phonecreate2'],
                'phonecharge'  => $selsn['phonecharge'],
                'dyaccount'    => $selsn['dyaccount'],
                'dypass'       => $selsn['dypass'],
                'dyname'       => $selsn['dyname'],
                'dyfans'       => $_POST['dyfans'],
                'dytime'       => date('Y-m-d',strtotime(str_replace(' ','',$_POST['time']))),
                'ksaccount'    => $selsn['ksaccount'],
                'kspass'       => $selsn['kspass'],
                'ksname'       => $selsn['ksname'],
                'ksfans'       => $selsn['ksfans'],
                'kstime'       => $selsn['kstime'],
                'wxaccount'    => $selsn['wxaccount'],
                'wxpass'       => $selsn['wxpass'],
                'wxname'       => $selsn['wxname'],
                'wxfans'       => $selsn['wxfans'],
                'wxtime'       => $selsn['wxtime'],
                'time'         => time()
            ];   
            // 判断粉丝单位     
            $unit = $_POST['unit'];            
            if($unit =='ge'){
                $sing = number_format($data['dyfans']/10000,2,'.','');
                $data['dyfans'] = $sing;
            }     
            
            $upda = Db::name('datainfo')->insert($data);
            if($upda){
                return $this->success('修改粉丝数量成功','Manager/dylist');
            }else{
                return $this->error('修改粉丝数据失败');
            }
        }else{
            $id=$_GET['id'];
            $oldinfo = DB::name('datainfo')->where('id',$id)->find();
            $this->assign('info',$oldinfo);
            return $this->fetch();
        }
        
    }

    //删除抖音数据 
    public function deldy(){
        $id = $_GET['id'];
        $sel = Db::name('datainfo')->where('id',$id)->find();
        $data = [
            'dyaccount' => '',
            'dypass'    => '',
            'dyfans'    => '',
            'dyname'    => '',
            'dytime'    => ''
        ];
        $upda = Db::name('datainfo')->where('phonesn',$sel['phonesn'])->where('dyaccount',$sel['dyaccount'])->update($data);
        if($upda){
            return $this->success('删除抖音账号信息成功','Manager/dylist');
        }else{
            return $this->error('删除抖音账号信息失败，请稍后再试');
        }
    }

    // ----------------------------------------------------- 快手 
    public function kslist(){
        $subQuery = Db::name('datainfo')
            ->field('id,phonesn,ksaccount,kspass,ksname,ksfans,kstime')
            ->where('phonesn','<>','')
            ->where('ksaccount','<>','')
            ->order('id desc')
            ->buildSql();
        $kslist = Db::table($subQuery.' a')
            ->group('a.ksaccount')
            ->select();     

        $this->assign('sel',$kslist);
        $this->assign('empty','<p>暂时没有数据</p>');
        return $this->fetch();
    }

    //添加快手数据
    public function addks(){
        if(request()->isPost()){
            $id = $_POST['pid'];
            $sel = Db::name('datainfo')->where('id',$id)->find();             
            $data = [
                'phonesn'      => $sel['phonesn'],
                'phonebrand'   => $sel['phonebrand'],
                'phonesim1'    => $sel['phonesim1'],
                'phonesim2'    => $sel['phonesim2'],
                'phonecreate1' => $sel['phonecreate1'],
                'phonecreate2' => $sel['phonecreate2'],
                'phonecharge'  => $sel['phonecharge'],
                'dyaccount'    => $sel['dyaccount'],
                'dypass'       => $sel['dypass'],
                'dyname'       => $sel['dyname'],
                'dyfans'       => $sel['dyfans'],
                'dytime'       => $sel['dytime'],
                'ksaccount'    => $_POST['ksaccount'],
                'kspass'       => $_POST['kspass'],
                'ksname'       => $_POST['ksname'],
                'ksfans'       => $_POST['ksfans'],
                'kstime'       => date('Y-m-d',strtotime(str_replace(' ','',$_POST['time']))),
                'wxaccount'    => $sel['wxaccount'],
                'wxpass'       => $sel['wxpass'],
                'wxname'       => $sel['wxname'],
                'wxfans'       => $sel['wxfans'],
                'wxtime'       => $sel['wxtime'],
                'time'         => time()
            ];         
            $selresu = Db::name('datainfo')->where('ksaccount',$data['ksaccount'])->select();
            if($sel['ksaccount']<>''){
                if($sel['ksaccount']<>$data['ksaccount']){
                    return $this->error($sel['phonesn'].' 已经存在快手账号，不能重复添加');
                }else{
                    return $this->error($sel['ksaccount'].' 快手账号已经存在');
                }
            }else{
                if($selresu){
                    return $this->error($data['ksaccount'].' 快手账号已经存在');
                }
                $unit = $_POST['unit'];//获取粉丝量单位 
                if($unit =='ge'){
                    $sing = number_format($data['dyfans']/10000,2,'.','');
                    $data['dyfans'] = $sing;
                }   
                $inser = Db::name('datainfo')->where('phonesn',$data['phonesn'])->update($data);
                if($inser){
                    return $this->success('添加快手账号信息成功','Manager/kslist');
                }else{
                    return $this->error('添加快手账号信息失败');
                }  
            }
        }else{
            $subQuery = Db::name('datainfo')
            ->field('id,phonesn,ksaccount,kspass,ksname,ksfans,kstime')
            ->where('ksaccount','=','')
            ->order('id desc')
            ->buildSql();
            $selinfo = Db::table($subQuery.' a')
                        ->group('a.phonesn')
                        ->select();  
            if($selinfo){
                $this->assign('sel',$selinfo);
                return $this->fetch();
            }else{
                return $this->error('目前所有的手机编号都存在对应的快手账号，需要添加手机编号再进行快手账号的添加','Manager/kslist','5');
            }     
        }
    }

    //编辑快手信息
    public function editks(){
        if(request()->isPost()){
            $id = $_POST['id'];//原快手id
            $newid = $_POST['pid'];//修改后快手id
            $data = [
                'ksaccount' => $_POST['ksaccount'],
                'kspass'    => $_POST['kspass'],
                'ksname'    => $_POST['ksname'],
                'ksfans'    => $_POST['ksfans'],
                'kstime'    => date('Y-m-d',strtotime(str_replace(' ','',$_POST['time'])))
            ];
            $selold = Db::name('datainfo')->where('id',$id)->find();//原快手数据信息
            $selnew = Db::name('datainfo')->where('id',$newid)->find();//修改后快手数据信息
            $unit = $_POST['unit'];//获取粉丝量单位 ，如果为  个，需要将个转换为万
            if($unit =='ge'){
                $sing = number_format($data['ksfans']/10000,2,'.','');
                $data['ksfans'] = $sing;
            }
            //修改了手机编号 
            if($selold['phonesn']<>$selnew['phonesn']){             
                // 判断新的手机编号 是否存在 快手账号  
                if($selnew['ksaccount']<>'' && $selnew['ksaccount']<>$selold['ksaccount']){
                    return $this->error($selnew['phonesn'].' 已经存在快手账号,不可重复添加快手号');
                }
            }
            // 修改了快手账号，判断新添加的账号是否存在  
            if($data['ksaccount']<>$selold['ksaccount']){
                $selks = Db::name('datainfo')->where('ksaccount',$data['ksaccount'])->select();
                if($selks){
                    return $this->error($data['ksaccount'].' 快手账号已经存在，不能重复添加');
                }
            }     
            // 将表中所有 手机编号、快手账号 相同的记录都 需要进行修改
            $upda = Db::name('datainfo')->where('phonesn',$selnew['phonesn'])->where('ksaccount',$selold['ksaccount'])->update($data);
            if($upda){
                return $this->success('修改快手账号信息成功','Manager/kslist');
            }else{
                return $this->error('修改快手账号信息失败');
            }  
        }else{
            $id = $_GET['id'];            
            $sel = Db::name('datainfo')->where('id',$id)->find();
            $pid = Db::name('datainfo')->group('phonesn')->select();//按手机编号分组
            $this->assign('pid',$pid);
            $this->assign('sel',$sel);
            return $this->fetch();
        }
    }

    //修改快手粉丝量
    public function editksfans(){
        if(request()->isPost()){
            $id = $_POST['id'];
            $sel = Db::name('datainfo')->where('id',$id)->find();
            $data = [
                'phonesn'      => $selsn['phonesn'],
                'phonebrand'   => $selsn['phonebrand'],
                'phonesim1'    => $selsn['phonesim1'],
                'phonesim2'    => $selsn['phonesim2'],
                'phonecreate1' => $selsn['phonecreate1'],
                'phonecreate2' => $selsn['phonecreate2'],
                'phonecharge'  => $selsn['phonecharge'],
                'dyaccount'    => $selsn['dyaccount'],
                'dypass'       => $selsn['dypass'],
                'dyname'       => $selsn['dyname'],
                'dyfans'       => $selsn['dyfans'],
                'dytime'       => $selsn['dytime'],
                'ksaccount'    => $selsn['ksaccount'],
                'kspass'       => $selsn['kspass'],
                'ksname'       => $selsn['ksname'],
                'ksfans'       => $_POST['ksfans'],
                'kstime'       => date('Y-m-d',strtotime(str_replace(' ','',$_POST['time']))),
                'wxaccount'    => $selsn['wxaccount'],
                'wxpass'       => $selsn['wxpass'],
                'wxname'       => $selsn['wxname'],
                'wxfans'       => $selsn['wxfans'],
                'wxtime'       => $selsn['wxtime'],
                'time'         => time()
            ];            
            $unit = $_POST['unit'];//获取粉丝量单位 
            if($unit =='ge'){
                $sing = number_format($data['ksfans']/10000,2,'.','');
                $data['ksfans'] = $sing;
            }
            
            $upda = Db::name('datainfo')->insert($data);
            if($upda){
                return $this->success('修改粉丝数量成功','Manager/kslist');
            }else{
                return $this->error('修改粉丝数据失败');
            }
        }else{
            $id=$_GET['id'];
            $oldinfo = DB::name('datainfo')->where('id',$id)->find();
            $this->assign('info',$oldinfo);
            return $this->fetch();
        }
    }

    //删除快手信息
    public function delks(){
        $id = $_GET['id'];
        $sel = Db::name('datainfo')->where('id',$id)->find();
        $data = [
            'ksaccount' => '',
            'kspass'    => '',
            'ksfans'    => '',
            'ksname'    => '',
            'kstime'    => ''
        ];
        $upda = Db::name('datainfo')->where('phonesn',$sel['phonesn'])->where('ksaccount',$sel['ksaccount'])->update($data);
        if($upda){
            return $this->success('删除快手账号信息成功','Manager/kslist');
        }else{
            return $this->error('删除快手账号信息失败，请稍后再试');
        }
    }

    // ----------------------------------------------------------- 微信
    public function wxlist(){
        $subQuery = Db::name('datainfo')
        ->field('id,phonesn,wxaccount,wxpass,wxname,wxfans,wxtime')
        ->where('wxaccount','<>','')
        ->order('id desc')
        ->buildSql();
        $wxlist = Db::table($subQuery.' a')
                ->group('a.wxaccount')
                ->select();                
        $this->assign('sel',$wxlist);
        $this->assign('empty','<p>暂时没有数据</p>');
        return $this->fetch();
    }

    //添加微信账号信息
    public function addwx(){
        if(request()->isPost()){
            $id = $_POST['pid'];
            $selsn = Db::name('datainfo')->where('id',$id)->find();
            $unit = $_POST['unit'];
            $data = [
                'phonesn'      => $selsn['phonesn'],
                'phonebrand'   => $selsn['phonebrand'],
                'phonesim1'    => $selsn['phonesim1'],
                'phonesim2'    => $selsn['phonesim2'],
                'phonecreate1' => $selsn['phonecreate1'],
                'phonecreate2' => $selsn['phonecreate2'],
                'phonecharge'  => $selsn['phonecharge'],
                'dyaccount'    => $selsn['dyaccount'],
                'dypass'       => $selsn['dypass'],
                'dyname'       => $selsn['dyname'],
                'dyfans'       => $selsn['dyfans'],
                'dytime'       => $selsn['dytime'],
                'ksaccount'    => $selsn['ksaccount'],
                'kspass'       => $selsn['kspass'],
                'ksname'       => $selsn['ksname'],
                'ksfans'       => $selsn['ksfans'],
                'kstime'       => $selsn['kstime'],
                'wxaccount'    => $_POST['wxaccount'],
                'wxpass'       => $_POST['wxpass'],
                'wxname'       => $_POST['wxname'],
                'wxfans'       => $_POST['wxfans'],
                'wxtime'       => date('Y-m-d',strtotime(str_replace(' ','',$_POST['time']))),
                'time'         => time()
            ];         
            
            $selresu = Db::name('datainfo')->where('wxaccount',$data['wxaccount'])->select();
            if($selsn['wxaccount']<>''){
                if($selsn['wxaccount']<>$data['wxaccount']){
                    return $this->error($selsn['phonesn'].' 已经存在微信账号，不能重复添加');
                }else{
                    return $this->error($selsn['wxaccount'].' 微信账号已经存在');
                }
            }else{
                if($selresu){
                    return $this->error($data['wxaccount'].' 微信账号已经存在');
                }
                if($unit =='ge'){
                    $sing = number_format($data['wxfans']/10000,2,'.','');
                    $data['wxfans'] = $sing;
                }    
                $inser = Db::name('datainfo')->where('phonesn',$data['phonesn'])->update($data);
                if($inser){
                    return $this->success('添加微信账号信息成功','Manager/wxlist');
                }else{
                    return $this->error('添加微信账号信息失败');
                }  
            }
        }else{
            $subQuery = Db::name('datainfo')
            ->field('id,phonesn,wxaccount,wxpass,wxname,wxfans,time')
            ->where('wxaccount','=','')
            ->order('id desc')
            ->buildSql();
            $sel = Db::table($subQuery.' a')
                        ->group('a.phonesn')
                        ->select();  
            if($sel){
                $this->assign('sel',$sel);
                return $this->fetch();
            }else{
                return $this->error('目前所有的手机编号都存在对应的微信账号，需要添加手机编号再进行微信账号的添加','Manager/dylist','5');
            }     
        }
    }

    //编辑微信账号信息
    public function editwx(){
        if(request()->isPost()){
            $id = $_POST['id'];//原微信id
            $newid = $_POST['pid'];//修改后微信id
            $data = [
                'wxaccount' => $_POST['wxaccount'],
                'wxpass'    => $_POST['wxpass'],
                'wxname'    => $_POST['wxname'],
                'wxfans'    => $_POST['wxfans'],
                'wxtime'    => date('Y-m-d',strtotime(str_replace(' ','',$_POST['time'])))
            ];
            $unit = $_POST['unit'];//获取微信好友量 单位 
            if($unit == 'ge'){
                $sing = number_format($data['wxfans']/10000,2,'.','');
                $data['wxfans'] = $sing;
            }
            $selold = Db::name('datainfo')->where('id',$id)->find();//原微信数据信息
            $selnew = Db::name('datainfo')->where('id',$newid)->find();//修改后微信数据信息

            //修改了手机编号 
            if($selold['phonesn']<>$selnew['phonesn']){             
                // 判断新的手机编号 是否存在 微信账号  
                if($selnew['wxaccount']<>'' && $selnew['wxaccount']<>$selold['wxaccount']){
                    return $this->error($selnew['phonesn'].' 已经存在微信账号,不可重复添加微信号');
                }
            }
            if($data['wxaccount']<>$selold['wxaccount']){
                $selwx = Db::name('datainfo')->where('wxaccount',$data['wxaccount'])->select();
                if($selwx){
                    return $this->error($data['wxaccount'].' 微信账号已经存在，不能重复添加');
                }
            }     
            // 将表中所有相关信息都进行修改 
            $upda = Db::name('datainfo')->where('phonesn',$selnew['phonesn'])->where('wxaccount',$selold['wxaccount'])->update($data);
            if($upda){
                return $this->success('修改微信账号信息成功','Manager/wxlist');
            }else{
                return $this->error('修改微信账号信息失败');
            }  
        }else{
            $id = $_GET['id'];            
            $sel = Db::name('datainfo')->where('id',$id)->find();
            $pid = Db::name('datainfo')->group('phonesn')->select();//按手机编号分组
            $this->assign('pid',$pid);
            $this->assign('sel',$sel);
            return $this->fetch();
        }
    }
    //修改微信粉丝
    public function editwxfans(){
        if(request()->isPost()){
            $id = $_POST['id'];
            $sel = Db::name('datainfo')->where('id',$id)->find();
            $data = [
                'phonesn'      => $sel['phonesn'],
                'phonebrand'   => $sel['phonebrand'],
                'phonesim1'    => $sel['phonesim1'],
                'phonesim2'    => $sel['phonesim2'],
                'phonecreate1' => $sel['phonecreate1'],
                'phonecreate2' => $sel['phonecreate2'],
                'phonecharge'  => $sel['phonecharge'],
                'dyaccount'    => $sel['dyaccount'],
                'dypass'       => $sel['dypass'],
                'dyname'       => $sel['dyname'],
                'dyfans'       => $sel['dyfans'],
                'dytime'       => $sel['dytime'],
                'ksaccount'    => $sel['ksaccount'],
                'kspass'       => $sel['kspass'],
                'ksname'       => $sel['ksname'],
                'ksfans'       => $sel['ksfans'],
                'kstime'       => $sel['kstime'],
                'wxaccount'    => $sel['wxaccount'],
                'wxpass'       => $sel['wxpass'],
                'wxname'       => $sel['wxname'],
                'wxfans'       => $_POST['wxfans'],
                'wxtime'       => date('Y-m-d',strtotime(str_replace(' ','',$_POST['time']))),
                'time'         => time()
            ];       
            $unit = $_POST['unit'];//获取微信好友量 单位 
            if($unit == 'ge'){
                $sing = number_format($data['wxfans']/10000,2,'.','');
                $data['wxfans'] = $sing;
            }     
            $upda = Db::name('datainfo')->insert($data);
            if($upda){
                return $this->success('修改粉丝数量成功','Manager/wxlist');
            }else{
                return $this->error('修改粉丝数据失败');
            }
        }else{
            $id=$_GET['id'];
            $oldinfo = DB::name('datainfo')->where('id',$id)->find();
            $this->assign('info',$oldinfo);
            return $this->fetch();
        }
    }

    //删除微信账号
    public function delwx(){
        $id = $_GET['id'];
        $sel = Db::name('datainfo')->where('id',$id)->find();
        $data = [
            'wxaccount' => '',
            'wxpass'    => '',
            'wxfans'    => '',
            'wxname'    => '',
            'wxtime'    => '',
        ];
        $upda = Db::name('datainfo')->where('phonesn',$sel['phonesn'])->where('wxaccount',$sel['wxaccount'])->update($data);
        if($upda){
            return $this->success('删除微信账号信息成功','Manager/wxlist');
        }else{
            return $this->error('删除微信账号信息失败，请稍后再试');
        }
    }
}
