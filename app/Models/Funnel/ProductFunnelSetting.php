<?php

namespace App\Models\Funnel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductFunnelSetting extends Model
{
    use HasFactory, SoftDeletes;

    function getAllProductFunnelSetting($condition, $id = 'id', $desc = 'desc')
    {
        return ProductFunnelSetting::where($condition)->orderBy($id, $desc)->get();
    }

    function allProductFunnelSettingPaginate($num, $condition, $id = 'id', $desc = 'desc')
    {
        return ProductFunnelSetting::where($condition)->orderBy($id, $desc)->paginate($num);
    }

    function getSingleProductFunnelSetting($condition)
    {
        return ProductFunnelSetting::where($condition)->first();
    }
}
