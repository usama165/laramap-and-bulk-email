<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class privilage extends Model
{
    protected $table='privilages';
    protected $guarded=[];
    public $timestamps=false;
    protected $primaryKey='privilageId';
}


