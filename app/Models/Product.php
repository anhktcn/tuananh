<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','status','price','sale_price','image','category_id'];

    public function scopeSearch($query)
    {
        $search_value = request()->search;
        $cat_id = request()->cat_id;
        
        if($search_value) {
            $query = $query->where('name','LIKE','%'.$search_value.'%');
        }
        if ($cat_id) {
            $query = $query->where('category_id', $cat_id);
        }

        return $query;
    }

    public function cat()
    {
        return $this->hasOne(Category::class,'id','category_id');
    }

    public function scopeSale($query, $limit = 4)
    {

        $query = $query->where('sale_price','>',0)->limit($limit)->get();
        return $query;
    }

    
    public function scopeNew($query, $limit = 4)
    {
        $query = $query->orderBy('id','DESC')->limit($limit)->get();
        return $query;
    }
}
