<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'slug', 'excerpt', 'category', 'doc_url', 'published_at'];

    protected function casts(): array
    {
        return [
            'published_at' => 'date',
        ];
    }
}