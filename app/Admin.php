<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table='subadmins';
    protected $guarded=[];
    public $timestamps=false;
    protected $primaryKey='subadminid';
}
