<?php
namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;
class Info extends Model
{
    protected $table='info';
//    网站信息查询
    public static function getInfo(){
        $info = DB::select("select * from info");
        $info = array_map('get_object_vars', $info);
        $info = $info[0];
        return $info;
    }
//    网站信息修改
    public static function edit($url,$email,$phone,$telphone,$address,$name,$home_subtitle,$about_subtitle){
        $bool=DB::update('update info set url=?,email=?,phone=?,telphone=?,address=?,name=?,home_subtitle=?,about_subtitle=?',[$url,$email,$phone,$telphone,$address,$name,$home_subtitle,$about_subtitle]);
        return $bool;
    }
}