<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $fillable = ['order_slug', 'rstrt_slug', 'discount', 'amount', 'pay_by', 'given_amount'];

    public function orderInfo()
    {
    	return $this->belongsTo('App\Models\Order', 'order_slug', 'slug');
    }
}
