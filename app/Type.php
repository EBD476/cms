<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{
   protected $table='hnt_menu_type';
    use SoftDeletes;
}
