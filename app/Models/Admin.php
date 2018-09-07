<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;
class Admin extends Model
{
    protected $table='example';
//    验证密码是否正确
    public static function inTable($username,$password){
        $password = md5(md5($password));
        $bool = DB::select("select * from admin where username='{$username}' and password='{$password}'");
        return $bool;
    }
}