<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    public function answers()
    {
    	return $this->hasMany(Answers::class);
    }
}
