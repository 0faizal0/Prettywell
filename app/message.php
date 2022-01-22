<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    protected $table = 'messages2';

    public function user()
    {
        return $this->belongsTo('App\user');
    }
}
