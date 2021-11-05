<?php

namespace App\Models\Funnel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductFunnel extends Model
{
    use HasFactory, SoftDeletes;

    function getAllProductFunnel($condition, $id = 'id', $desc = 'desc')
    {
        return ProductFunnel::where($condition)->orderBy($id, $desc)->get();
    }

    function allProductFunnelPaginate($num, $condition, $id = 'id', $desc = 'desc')
    {
        return ProductFunnel::where($condition)->orderBy($id, $desc)->paginate($num);
    }

    function getSingleProductFunnel($condition)
    {
        return ProductFunnel::where($condition)->first();
    }
}
