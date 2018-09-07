<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\Info;
use App\Models\Example;
use App\Models\Message;
class IndexController extends Controller
{
//    主页
    public function index(){
//        获取网站信息
        $info = Info::getInfo();
//        获取示例
        $example = Example::getExample12();
//        展示首页
        return view('index',['info'=>$info,'example'=>$example]);
    }
//        需求提交
    public function message(Request $request){
//        如果是post请求
        if($request->isMethod('post')){
//            数据入库
            $bool = Message::insert($_POST['name'],$_POST['phone'],$_POST['message'],$_POST['title']);
//            给出处理结果提示
            $array = $this->returnInfo($bool,'你的信息已经提交，请您耐心等待回复！','/index','信息提交失败，请您检查后重新提交！','/index',3);
            return view('jump')->with($array);
        }
    }
/*      处理结果提示
        $bool：处理结果
        $suInfo：成功提示信息
        $suUrl：成功后跳转目标
        $faInfo：失败提示信息
        $suUrl：失败后跳转目标
        $time：提示页停留时间*/
    public function returnInfo($bool,$suInfo,$suUrl,$faInfo,$faUrl,$time){
        if($bool){
            return array('message'=>$suInfo,'url' =>$suUrl,'jumpTime'=>$time);
        }else{
            return array('message'=>$faInfo,'url' =>$faUrl,'jumpTime'=>$time,
            );
        }
    }
}
