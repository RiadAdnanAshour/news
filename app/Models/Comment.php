<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'comment', 'ip_address', 'status', 'user_id', 'post_id'];


    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
