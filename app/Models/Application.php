<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = ['name', 'email'];

    public function knowledges()
    {
        return $this->belongsToMany('App/Models/Knowledge', 'knowledge_applications');
    }
}
