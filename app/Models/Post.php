<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $with = 'user';

    protected $fillable = [
        'title',
        'preview_text',
        'detail_text',
        'image',
        'slug'
    ];

    public function getRouteKeyName() {
        return 'slug';
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, 'post_tag');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
