<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = [
        'sport_id',
        'title',
        'image',
        'author',
        'news_date',
        'category',
        'info',
        'content',
        'url',
        'tags'
    ];

    public function games()
    {
        return $this->hasMany('App\Games');
    }
}
