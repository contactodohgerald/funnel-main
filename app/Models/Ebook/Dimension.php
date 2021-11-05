<?php

namespace App\Models\Ebook;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dimension extends Model
{
    use HasFactory, SoftDeletes;

    function getAllDimension($condition, $id = 'id', $desc = 'desc')
    {
        return DimensionModel::where($condition)->orderBy($id, $desc)->get();
    }

    function allDimensionPaginate($num, $condition, $id = 'id', $desc = 'desc')
    {
        return Dimension::where($condition)->orderBy($id, $desc)->paginate($num);
    }

    function getSingleDimension($condition)
    {
        return Dimension::where($condition)->first();
    }
}
