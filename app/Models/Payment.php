<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function packageInfo()
    {
    	return $this->belongsTo('App\Models\Package', 'package_id', 'id');
    }
}
