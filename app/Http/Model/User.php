<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table      = 'user';//设置表名,不带表前缀
    protected $primaryKey = 'user_id';//设置主键
    public $timestamps    = false;
}
