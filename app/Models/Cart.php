<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';

    protected $fillable = ['user_id','product_id','quantity','product_name','product_price'];

    protected $hidden = ['status','created_at','updated_at','ordered_at'];

    public function User() : BelongsTo {
      return $this->belongsTo(User::class);
    }

    public function Product() : HasMany {
       return $this->hasMany(Product::class,'id','product_id');
    }

}
