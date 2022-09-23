<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function orderRestaurant()
	{
		return $this->belongsTo('App\Models\Restaurant','rstrt_slug','slug');
	}

	public function detailInfo()
	{
		return $this->hasMany('App\Models\OrderDetail', 'order_id');
	}

	public function userInfo()
	{
		return $this->belongsTo('App\Models\User','updated_by', 'id');
	}

	public function billInfo()
	{
		return $this->belongsTo('App\Models\Bill','slug','order_slug');
	}

}
