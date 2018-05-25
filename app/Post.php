<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'category_id', 'featured', 'slug'
    ];

    protected $date = ['deleted_at'];

    // Acessors/
    // This adds the url along with the image returned from the db
    public function getFeaturedAttribute($featured)
    {
        return asset($featured);
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    // We can have multiple tags for a post
    public function tags(){
        return $this->belongsToMany('App\Tag');
    }
}
