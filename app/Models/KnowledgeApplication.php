<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KnowledgeApplication extends Model
{
    protected $fillable = ['id_application', 'id_knowledge', 'grade'];
}
