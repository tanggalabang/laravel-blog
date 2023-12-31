<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug'];
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
