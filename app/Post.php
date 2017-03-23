<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;
//    protected $table='posts';
//    protected $primaryKey='post_id';

    protected $dates=['deleted_at'];


    protected $fillable=[
        'title',
        'content'

    ];

    /**
     * @return array
     */
    public function post(){
        return $this->hasOne('App\post');
    }



    public function photos(){
        return $this->morphMany('App\Photo','imageable');
    }


    public function tags(){
        return $this->morphToMany('App\Tag','taggable');
    }

}
