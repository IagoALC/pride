<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Post extends Model
{
    use SoftDeletes;

    protected $table = 'blog_posts';
    protected $fillable = ['title', 'subtitle', 'content', 'author', 'uri', 'cover', 'views'];

    public const RELATIONSHIP_POST_CATEGORY = 'blog_post_category';

    public function author()
    {
        return $this->belongsTo(User::class, 'author', 'id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, self::RELATIONSHIP_POST_CATEGORY, 'post', 'category');
    }

//    public function comments()
//    {
//        return $this->morphMany(Comment::class, 'item');
//    }

    public function getCreatedFmtAttribute()
    {
        return date('d/m/Y H:i', strtotime($this->created_at));
    }
}
