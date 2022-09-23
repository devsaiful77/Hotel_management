<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Restaurant extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function scopePublished($query)
    {
    	return $query->where('status',1);
    }
    // Relations
    public function clientInfo()
    {
    	return $this->belongsTo('App\Client', 'client_id', 'id');
    }
    public function categoryInfo()
    {
        return $this->hasMany('App\Category', 'rstrt_slug', 'slug');
    }
    public function menuInfo()
    {
        return $this->hasMany('App\Menu', 'rstrt_slug', 'slug');
    }
    public function orderInfo()
    {
        return $this->hasMany('App\Order', 'rstrt_slug', 'slug');
    }
    public function employeeInfo()
    {
        return $this->hasMany('App\Employee', 'rstrt_slug', 'slug');
    }

}
