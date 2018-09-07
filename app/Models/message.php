<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;
class Message extends Model
{
    protected $table='message';
/*    需求管理
       默认open为1，需要查隐藏需求传0
*/
    public static function getMessage($open=1){
        if($open == 0){
            $message = DB::select('select * from message where open=0 order by time desc');
            $message = array_map('get_object_vars', $message);
        }else{
            $message = DB::select('select * from message where open=1 order by time desc');
            $message = array_map('get_object_vars', $message);
        }
        return $message;
    }
//    获取单条需求
    public static function getMessageOne($id){
        $message = DB::select("select * from message where id={$id}");
        $message = array_map('get_object_vars', $message);
        $message = $message[0];
        return $message;
    }
//    添加新需求
    public static function insert($name,$phone,$message,$title){
        $time = time();
        $bool = DB::insert("insert into message(name,phone,message,time,title) values(?,?,?,?,?)",[$name,$phone,$message,$time,$title]);
        return $bool;
    }
//    删除需求，open不为0改为0，open为0 删除
    public static function del($id){
        $open = DB::select("select open from message where id={$id}");
        $open = array_map('get_object_vars', $open);
        if($open[0]['open']!=0){
            $time = time();
            $bool = DB::update("update message set open=0,time={$time} where id={$id}");
        }else{
            $bool = DB::delete("delete from message where id={$id}");
        }
        return $bool;
    }
//    恢复，open改为1
    public static function recovery($id){
        $time=time();
        $bool = DB::update("update message set open=1,time={$time} where id={$id}");
        return $bool;
    }
}