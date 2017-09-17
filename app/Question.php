<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'created_by');
    }
}