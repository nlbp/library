<?php

namespace App\Library;

use Illuminate\Database\Eloquent\Model;

class BookManagement extends Model
{
    //
    public function Province()
    {
        return $this->hasOne('App\Library\Province');
    }
}
