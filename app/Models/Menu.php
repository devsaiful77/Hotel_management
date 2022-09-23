<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stock;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menus';
    protected $fillable = ['name', 'price', 'actual_cost', 'crust', 'size', 'addons', 'description', 'cate_id', 'rstrt_slug', 'photo', 'status', 'dining_service', 'takeaway_service', 'menu_tag'];

    public function menuCategory()
    {
    	return $this->belongsTo('App\Category', 'cate_id', 'id');
    }

    public function stockAmount(){
        return $this->hasOne(Stock::class, 'menu_id');
    }
}
