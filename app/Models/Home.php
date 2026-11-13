<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = ['title', 'description', 'tech_stack', 'status', 'category'];
}
