<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2019/5/4
 * Time: 14:01
 */
namespace app\index\model;

use think\Model;

class User extends Model
{
    public function getOne(){
        return self::where('id',1)->find();
    }
}