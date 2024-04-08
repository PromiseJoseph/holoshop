<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table ='products';

    protected $hidden =['created_at','updated_at'];


    public function Cart (){
        $this->belongsTo(Cart::class,'id');
    }

    

 

}
