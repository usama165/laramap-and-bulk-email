<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fetch extends Model
{
    protected $table='subadmins';
    protected $guarded=[];
    public $timestamps=false;
    protected $primaryKey='subAdminId';
}