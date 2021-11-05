<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    function getAllProduct($condition, $id = 'id', $desc = 'desc')
    {
        return Product::where($condition)->orderBy($id, $desc)->get();
    }

    function allProductPaginate($num, $condition, $id = 'id', $desc = 'desc')
    {
        return Product::where($condition)->orderBy($id, $desc)->paginate($num);
    }

    function getSingleProduct($condition)
    {
        return Product::where($condition)->first();
    }
}
