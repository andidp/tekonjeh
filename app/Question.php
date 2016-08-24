<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

	protected $fillable = [
		'title',
		'body'
	];

	/**
     * Get the answers for the blog post.
     */
    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
}
