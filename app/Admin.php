<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'adminer';
    protected $primaryKey = 'admin_id';
    public $timestamps = false;
    protected $guarded = [];

}
