<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class designation extends Model
{
    protected $table='designation';
    protected $primarykey='designationId';
    protected $guarded=[];
    public $timestamps=false;
}
