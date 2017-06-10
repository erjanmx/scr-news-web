<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function source()
    {
        return $this->belongsTo('App\Models\Source');
    }
}
