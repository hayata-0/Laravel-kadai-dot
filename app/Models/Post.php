<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Post->posts
class Post extends Model
{
    use HasFactory;

    //DBに一括でデータを入れられるようにする設定
    protected $fillable = [
        'title',
        'body'
    ];

    //$post->comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
