<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function categorie()
    {
        return $this->belongsTo(Category::class);
    }

    protected $fillable = ['title', 'description', 'category_id', 'completed'];
}
