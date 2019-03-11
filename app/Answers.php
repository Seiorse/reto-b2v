<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    public function question()
    {
    	return $this->belongsTo(Questions::class);
    }
}
