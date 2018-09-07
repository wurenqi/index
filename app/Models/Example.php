<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;
class Example extends Model
{
    protected $table='example';
//    首页项目展示
    public static function getExample12(){
        $example = DB::select('select * from example where open=1 order by time desc limit 12');
        $example = array_map('get_object_vars', $example);
        return $example;
    }
    /*    项目管理
           默认open为1，需要查隐藏需求传0
    */
    public static function getExample($open=1){
        if($open == 0){
            $example = DB::select('select * from example where open=0 order by time desc');
            $example = array_map('get_object_vars', $example);
        }else{
            $example = DB::select('select * from example where open=1 order by time desc');
            $example = array_map('get_object_vars', $example);
        }
        return $example;
    }
//    新增项目
    public static function isnert($img, $title, $subtitle, $cate, $content){
        $time = time();
        $bool = DB::insert("insert into example (img,title,subtitle,cate,content,time) values (?,?,?,?,?,?)", [$img, $title, $subtitle, $cate, $content, $time]);
        return $bool;
    }
//    编辑项目，图片之外内容
    public static function otherEdit($title, $subtitle, $cate, $content,$open,$id){
        $time = time();
        $bool = DB::update("update example set title=?,subtitle=?,cate=?,content=?,time=?,open=? where id=?", [$title, $subtitle, $cate, $content, $time,$open,$id]);
        return $bool;
    }
//    编辑项目，图片
    public static function imgEdit($img,$id){
        $time = time();
        $bool = DB::update("update example set img=?,time=? where id=?", [$img, $time,$id]);
        return $bool;
    }
//    查找单条项目
    public static function getExampleOne($id){
        $example = DB::select("select * from example where id={$id}");
        $example = array_map('get_object_vars', $example);
        $example = $example[0];
        return $example;
    }
//    删除  open不为0改为0   open为0  删除
    public static function del($id){
        $open = DB::select("select open from example where id={$id}");
        $open = array_map('get_object_vars', $open);
        if($open[0]['open']!=0){
            $time = time();
            $bool = DB::update("update example set open=0,time={$time} where id={$id}");
        }else{
            $bool = DB::delete("delete from example where id={$id}");
        }
        return $bool;
    }
//    恢复，  open为0改为1
    public static function recovery($id){
        $time=time();
        $bool = DB::update("update example set open=1,time={$time} where id={$id}");
        return $bool;
    }
}