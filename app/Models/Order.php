<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'account_id',
        'name',
        'email',
        'phone',
        'address',
        'payment_method',
        'shipping_method',
        'order_note',
        'status'
    ];
    // 1-1
    public function account()
    {
        return $this->hasOne(Account::class, 'id', 'account_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class,'order_details');
    }

    public function details()
    {
        return $this->hasMany(OrderDetail::class,'order_id','id');
    }

    public function tottalQuantity()
    {
        $total = 0;

        foreach ($this->details as $dt) {
            $total += $dt->quantity;
        }

        return $total;
    }

    
    public function tottalAmount()
    {
        $total = 0;

        foreach ($this->details as $dt) {
            $total += $dt->quantity * $dt->price;
        }

        return $total;
    }

}
