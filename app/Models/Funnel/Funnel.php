<?php

namespace App\Models\Funnel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Funnel extends Model
{
    use HasFactory, SoftDeletes;

    function getAllFunnel($condition, $id = 'id', $desc = 'desc')
    {
        return Funnel::where($condition)->orderBy($id, $desc)->get();
    }

    function allFunnelPaginate($num, $condition, $id = 'id', $desc = 'desc')
    {
        return Funnel::where($condition)->orderBy($id, $desc)->paginate($num);
    }

    function getSingleFunnel($condition)
    {
        return Funnel::where($condition)->first();
    }
}
