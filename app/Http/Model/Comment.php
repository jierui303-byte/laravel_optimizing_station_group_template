<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;


class Comment extends Model
{
    protected $table = 'comment';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = [];

    //laravel使用原生sql查询语句 pdo
    public function yuanShengSql()
    {
        //laravel使用原生sql查询语句 pdo
        $seos = DB::select('select * from blog_article where art_id = :id', [':id'=>1]);

        //插入数据
        DB::insert('insert into users (id, name, email, password) values (?, ?, ? , ? )',
            [1, 'Laravel','laravel@test.com','123']);

        //更新
        $affected = DB::update('update users set name="LaravelAcademy" where name = ?', ['Academy']);
        echo $affected;

        //删除
        $deleted = DB::delete('delete from users');
        echo $deleted;

        //通用语句
        DB::statement('drop table users');

        //监听查询事件
        DB::listen(function($sql, $bindings, $time) {
            echo 'SQL语句执行：'.$sql.'，参数：'.json_encode($bindings).',耗时：'.$time.'ms';
        });

        //数据库事务  http://blog.csdn.net/fationyyk/article/details/50856730
        DB::transaction(function () {
            DB::table('users')->update(['id' => 1]);
            DB::table('posts')->delete();
        });

        return $seos;
    }

    public function dd(){

    }

}
