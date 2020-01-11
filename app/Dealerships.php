<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dealerships extends Model
{
    protected $table='hnt_dealerships';
    use SoftDeletes;
}
