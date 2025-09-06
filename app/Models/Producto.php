<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
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
        return $this-> belongsTo('App\Models\Order');    
    }
}
