<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KnowledgeModel extends Model
{
    use HasFactory;
    public $timestamps = false;

    public $table ='knowledge';
    public $guarded ='[]';
}