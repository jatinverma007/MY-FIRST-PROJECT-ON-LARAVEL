<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'body',
        'published_at',
        'username'
        ];
    protected $dates = ['published_at'];
    public function scopepublished($query)
    {
        $query->where('published_at' , '<=' , Carbon::now());
    }
   /* public function scopeunpublished($query)
    {
        $query->where('published_at' , '>' , Carbon::now());
    }

        public function SetPublishedAtAttributes()
    {
        $this->attributes['published_at']= Carbon::createFromFormat('Y-m-d', $date);

        return $this->belongsTo('App/User');
    }
    public function tags()
    {
        return $this->belongsToMany('App/Tag')->withTimestamps();
    }*/
}
