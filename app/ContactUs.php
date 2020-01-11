<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactUs extends Model
{
   protected $table ='hnt_contact_us';
    use SoftDeletes;
}
