<?php

namespace App\Models;

use App\Models\User;
use App\Models\Admin;
use App\Models\Image;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use Sluggable;
    use HasFactory;
    protected $fillable = ['id',
     'title', 'slug', 'desc','comment_able','num_of_views','status','user_id
    ','admin_id','category_id'];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
   
    // public function admin(){
    //     return $this->belongsTo(Admin::class,'user_id');
    // }

    public function comments(){
        return $this->hasMany(Comment::class,'post_id');
    }


    public function images()
    {
        return $this->hasMany(Image::class, 'post_id');
    }
    
 public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


}
