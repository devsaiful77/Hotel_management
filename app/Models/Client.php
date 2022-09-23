<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'clients';
    protected $fillable = [
        'name','email','phone','company_name','address','subs_finishing_date','photo','package_id','status', 'package_at'
    ];

    public function scopePublished($query)
    {
    	return $query->where('status',1);
    }
    public function restaurantInfo()
  	{
  	  return $this->hasMany('App\Models\Restaurant', 'client_id', 'id');
  	}
    public function packageInfo()
    {
        return $this->belongsTo('App\Models\Package', 'package_id', 'id');
    }
    public function paymentInfo()
    {
        return $this->hasMany('App\Models\Payment', 'client_id', 'id');
    }
}
