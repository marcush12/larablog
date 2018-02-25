<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;//trait caracteristica

    protected $fillable = [//allows the permission to edit table fields
    //by default in create_users_table we cant
    	'title', 'content', 'category_id', 'featured', 'slug', 'user_id'
    ];

    public function getFeaturedAttribute($featured)//acessors
    {
    	return asset($featured);//to generate the link for that image in the app
    }

    protected $dates = ['deleted_at'];

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function tags()//plural here! many to many
    {
        return $this->belongsToMany('App\Tag');
    }

    public function user()//singular
    {
        return $this->belongsTo('App\User');
    }
}
