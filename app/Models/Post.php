<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'post_accesses', 'post_id', 'user_id');
    }
}
