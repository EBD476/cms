<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type_Project extends Model
{
   protected $table='hnt_project_type';
    use SoftDeletes;
}
