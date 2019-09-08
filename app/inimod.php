<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inimod extends Model
{
    protected $table='ini_tb';
    protected $fillable=['name','stock'];
    
}
