<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSale extends Model
{
    use HasFactory, SoftDeletes;

    function getAllProductSale($condition, $id = 'id', $desc = 'desc')
    {
        return ProductSale::where($condition)->orderBy($id, $desc)->get();
    }

    function allProductSalePaginate($num, $condition, $id = 'id', $desc = 'desc')
    {
        return ProductSale::where($condition)->orderBy($id, $desc)->paginate($num);
    }

    function getSingleProductSale($condition)
    {
        return ProductSale::where($condition)->first();
    }
}
