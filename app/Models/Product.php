<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'price',
        'description',
        'avaliable',
        'photo',
    ];

    public function order (){
        return $this-> hasMany('App\Models\Order');    
    }
        public function scopeNames($products, $query)
    {
        if (trim($query)) {
            $products->where('name', 'LIKE', '%' . $query . '%');
        }
    }
}

