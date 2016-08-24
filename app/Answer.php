<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Eloquent
{
	/**
     * Get the question that owns the answer.
     */
    public function question()
    {
        return $this->belongsTo('App\Question');
    }
}
