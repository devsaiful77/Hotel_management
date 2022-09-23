<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['address', 'user_id', 'rstrt_slug'];

    public function userInfo()
    {
    	return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function restaurantInfo()
    {
    	return $this->belongsTo('App\Models\Restaurant', 'rstrt_slug', 'slug');
    }
}
