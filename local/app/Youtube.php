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

    private function humorous () {
    	$danhhai = DB::table('categories')
    					->join('youtubes', 'categories.id', '=', 'youtubes.cid')
    					->where('categories.pid', '=', 5)
    					->select('youtubes.*')
    					->take(9)
    					->get();
    	$nguyhiem = DB::table('categories')
    					->join('youtubes', 'categories.id', '=', 'youtubes.cid')
    					->where('categories.pid', '=', 8)
    					->select('youtubes.*')
    					->take(9)
    					->get();

    	$humorous = array($danhhai, $nguyhiem);
    	return $humorous;
    }

    private function movies () { 
    	$phimtruyenhinh = DB::table('categories')
    					->join('youtubes', 'categories.id', '=', 'youtubes.cid')
    					->where('categories.pid', '=', 17)
    					->select('youtubes.*')
    					->take(9)
    					->get();
    	$hongkong = DB::table('categories')
    					->join('youtubes', 'categories.id', '=', 'youtubes.cid')
    					->where('categories.pid', '=', 19)
    					->select('youtubes.*')
    					->take(9)
    					->get();
    	$movies = array($phimtruyenhinh, $hongkong);
    	return $movies;
    }

    public function get_new_video () {
    	$videos = array(
    		array('humorous' => $this->humorous()), 
    		array('movies' => $this->movies())
    	);
    	return $videos;
    }
}
