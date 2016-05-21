<?php
namespace Home\Controller;
use Think\Controller;
class ResumeController extends Controller {
    public function index(){
        $id = $_GET['r_id'];
        //echo $id;die;
        //$id = 2;
        $model = D("Resume");
        $arr = $model->resume($id);
        //print_r($arr);die;
        //echo $model->aaa();die;
        session_start();
        session("name","6");
        $e_id = $_SESSION['name'];
        //echo $e_id;die;
        $tel = $_POST['tel'];
        //echo $tel;die;
        $model = D("Enterprise");
        $arr1 = $model->enterprise($e_id);
        //print_r($arr1);die;
        $this->assign("arr",$arr);
        $this->assign("arr1",$arr1);
        $this->display();
    }
    public function iphone(){
        //公司名称
        $company = $_POST['company'];
        //手机号
        $iphone = $_POST['iphone'];
        //echo $iphone;die;
        //职位
        $position = $_POST['nickname'];
        //期望薪资
        $money = $_POST['money'];
        //待遇
        $treatment = $_POST['daiyu'];
        //公司地址
        $address = $_POST['e_area'];
        //发送到
        $tel = $_POST['tel'];
        //echo $tel;die;
        //企业id
        $e_id = $_POST['e_id'];
        //简历id
        $r_id = $_POST['r_id'];
        //面试时间
        $addtime = $_POST['addtime'];
        $data['e_id'] = $e_id;
        $data['l_benefit'] = $treatment;
        $data['l_job'] = $position;
        $data['l_time'] = $addtime;
        $data['l_salary'] = $money;
        //$model = D(QipinLog);
        //$arr = $model->add1($data);
        //--短信接口
        
        $phone_num = $tel;
        $v_num= (int)rand (100000,999999);
        $order = "您好您收到来自:【".$company."】公司的面试邀请涵"."给您的工资是:【".$money."】公司的福利待遇【".$treatment."】邀请您面试的时间是:【".$addtime."】公司的详细地址是:【".$address."】";
        $iphone1 = "详情请联系公司公司负责人的手机号是".$iphone;
        $post_data = "account=arthurdou&password=doudou&mobile=$phone_num&content=".rawurlencode("订单：【".$tel."】，客户名称：【".$company."】，商品详情：【".$order."】，备注：【".$iphone1."】。");
        $url = "http://sms.106jiekou.com/utf8/sms.aspx";
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_NOBODY, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
        $return_str = curl_exec($curl);
        curl_close($curl);
        $user_ip = md5($_SERVER['REMOTE_ADDR']);
        cookie($user_ip,$v_num,300);
        echo "<script> alert($return_str);location.href='index.html' </script>";
    }
    
}