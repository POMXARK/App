<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public static function incomplete() {
    	return static::where('complited', 0)->get();
    }
}
