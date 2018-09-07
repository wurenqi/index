<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use http\Env\Requests;
use Storage;
use App\Models\Info;
use App\Models\Example;
use App\Models\Message;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
//    后台首页
    public function index(){
//        验证登陆
        if(empty(session('is_admin')) || session('is_admin')==0){
            return view('admin/login');
        }
//        获取网站信息
        $info = Info::getInfo();
        return view('admin/index',['info'=>$info]);
    }
//    登录及验证
    public function login(Request $request){
//        如果是post请求
        if($request->isMethod('post')){
            $bool = Admin::inTable($_POST['username'],$_POST['password']);
            if($bool){
//            储存登录状态
                session(['is_admin' => 1]);
            }
            $array = $this->returnInfo($bool,'登录成功','/admin','登录失败！','/index',2);
            return view('jump')->with($array);
        }
        return view('admin/login');
    }
//    退出登录
    public function exit(){
        session(['is_admin' => 0]);
        session()->forget('is_admin');
        return view('admin/login');
    }
//    编辑网站信息
    public function info_ed(Request $request){
//        登录验证
        if(empty(session('is_admin')) || session('is_admin')==0){
            return view('admin/login');
        }
//        post请求
        if($request->isMethod('post')){
            $bool = Info::edit($_POST['url'],$_POST['email'],$_POST['phone'],$_POST['telphone'],$_POST['address'],$_POST['name'],$_POST['home_subtitle'],$_POST['about_subtitle']);
            $array = $this->returnInfo($bool,'编辑成功!','/admin','编辑失败！','/admin',2);
            return view('jump')->with($array);
        }
    }
//    需求管理
    public function message(){
//        登录验证
        if(empty(session('is_admin')) || session('is_admin')==0){
            return view('admin/login');
        }
        $message = Message::getMessage();
        $message_del = Message::getMessage(0);
        return view('admin/message',['message'=>$message,'message_del'=>$message_del]);
    }
//    项目管理
    public function example(){
//        登录验证
        if(empty(session('is_admin')) || session('is_admin')==0){
            return view('admin/login');
        }
        $example = Example::getExample();
        $example_del = Example::getExample(0);
        return view('admin/example',['example'=>$example,'example_del'=>$example_del]);
    }
//    新增项目
    public function insert(Request $request){
        if(empty(session('is_admin')) || session('is_admin')==0){
            return view('admin/login');
        }
        if($request->isMethod('post')){
//            图片上传
            $img=$request->file('img');
            if(!is_null($img)) {
                $name = $img->getClientOriginalName();//得到图片名；
                $ext = $img->getClientOriginalExtension();//得到图片后缀；
                $fileName = md5(uniqid($name));
                $fileName = $fileName . '.' . $ext;//生成新的的文件名
                move_uploaded_file($_FILES["img"]["tmp_name"], "images/upload/" . $fileName);
                $img = 'images/upload/' . $fileName;//返回文件路径存贮在数据库
//                处理其他数据
                $bool = Example::isnert($img,$_POST['title'],$_POST['subtitle'],$_POST['cate'],$_POST['content']);
                $array = $this->returnInfo($bool,'添加成功!','/example','添加失败！','/insert',2);
                return view('jump')->with($array);
            }
        }
        return view('admin/insert');
    }
//    编辑项目
    public function edit(Request $request){
//        登录验证
        if(empty(session('is_admin')) || session('is_admin')==0){
            return view('admin/login');
        }
        if(isset($_GET['id'])){
            $example = Example::getExampleOne($_GET['id']);
            return view('admin/edit',['example'=>$example]);
        }
        $bool=false;
        if($request->isMethod('post')){
            $bool = Example::otherEdit($_POST['title'],$_POST['subtitle'],$_POST['cate'],$_POST['content'],$_POST['open'],$_POST['id']);
        }
        $img=$request->file('img');
        if(!is_null($img)) {
            $img=$request->file('img');
            $name = $img->getClientOriginalName();//得到图片名；
            $ext = $img->getClientOriginalExtension();//得到图片后缀；
            $fileName = md5(uniqid($name));
            $fileName = $fileName . '.' . $ext;//生成新的的文件名
            move_uploaded_file($_FILES["img"]["tmp_name"], "images/upload/" . $fileName);
            $img = 'images/upload/' . $fileName;//新的路径
            $bool = Example::imgEdit($img,$_POST['id']);
        }
        $array = $this->returnInfo($bool,'编辑成功!','/example','编辑失败！','/example',2);
        return view('jump')->with($array);
    }
//    查看详情
    public function detail(){
        if(empty(session('is_admin')) || session('is_admin')==0){
            return view('admin/login');
        }
        if(isset($_GET['id'])){
            $message = Message::getMessageOne($_GET['id']);
            return view('admin/detail',['message'=>$message]);
        }
        return view('admin/login');
    }
//    删除
    public function delete(){
//        登录验证
        if(empty(session('is_admin')) || session('is_admin')==0){
            return view('admin/login');
        }
        if(empty($_GET['id']) || empty($_GET['type']) ){
            return view('admin/login');
        }
        if($_GET['type']=='message'){
            $bool = Message::del($_GET['id']);
        }elseif($_GET['type']=='example'){
            $bool = Example::del($_GET['id']);
        }
        return redirect()->action('AdminController@'.$_GET['type']);
    }
//    恢复
    public function recovery(){
//        登录验证
        if(empty(session('is_admin')) || session('is_admin')==0){
            return view('admin/login');
        }
        if(empty($_GET['id']) || empty($_GET['type']) ){
            return view('admin/login');
        }
        if($_GET['type']=='message'){
            $bool = Message::recovery($_GET['id']);
        }elseif($_GET['type']=='example'){
            $bool = Example::recovery($_GET['id']);
        }
        return redirect()->action('AdminController@'.$_GET['type']);
    }
/*   处理结果提示
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
