<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    protected $table = 'links';
    protected $primaryKey = 'link_id';
    public $timestamps = false;
    protected $guarded = [];

    //所有文章中最新的6篇文章
    public function getAllLinks()
    {
        $allLinks = $this->orderBy('link_order', 'asc')->get();
        return $allLinks;
    }

}
