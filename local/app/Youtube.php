<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Youtube extends Model
{
    protected $table = 'youtubes';
    protected $fillable = ['cid', 'pid', 'uid', 'title', 'alias', 'viewCount', 'likeCount' , 'dislikeCount', 'author', 'image', 'description','keyword', 'status'];

    public function category () {
    	return $this->belongsTo('App\Category', 'cid', 'id');
    }

    public function user () {
    	return $this->belongsTo('App\User', 'uid', 'id');
    }
}
