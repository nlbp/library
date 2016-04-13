<?php

namespace App\Library;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    //
    public function BookManagement()
    {
        return $this->belongsTo('App\Library\BookManagement');
    }
}
