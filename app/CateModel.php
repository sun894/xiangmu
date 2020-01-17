<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CateModel extends Model
{
    protected $table = 'new_cate';
    protected $primaryKey = 'c_id';
    public $timestamps = false;
    protected $guarded = [];

}
