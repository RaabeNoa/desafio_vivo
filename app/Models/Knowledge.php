<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Knowledge extends Model
{
    protected $table    = 'knowledge';
    protected $fillable = ['id','name'];

    public function applications()
    {
        return $this->belongsToMany('App/Models/Application', 'knowledge_applications');
    }
}
