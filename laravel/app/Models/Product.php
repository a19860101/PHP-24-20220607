<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = ['title','cover','desc','price','sale','started_at','ended_at','category_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function carts(){
        return $this->hasMany(Cart::class);
    }
    public function orderDetails(){
        return $this->hasMany(OrderDetail::class);
    }
}
