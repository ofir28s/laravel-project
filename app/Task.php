<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public static function incomplete()
    {
    	return static::where('complete', 1)->get();
// - alternativ -
//    	return $query->where('completed', 0);
    }
}
