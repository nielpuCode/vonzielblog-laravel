<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'shortdesc', 'textblog', 'image', 'user_id'];


    /**
     * Relationship: Many-to-One
     * Get the user who owns this post.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
