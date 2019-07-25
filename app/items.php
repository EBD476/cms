<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    public function Category()
    {
        return $this->belongsto('App\category');
    }
}
