<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DimensionModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'unique_id';
    public $incrementing = false;
    protected $keyType = 'string';  

    function getAllDimension($condition, $id = 'id', $desc = 'desc'){
        return DimensionModel::where($condition)->orderBy($id, $desc)->get();
    }

    function allDimensionPaginate($num, $condition, $id = 'id', $desc = 'desc'){
        return DimensionModel::where($condition)->orderBy($id, $desc)->paginate($num);
    }

    function getSingleDimension($condition){
        return DimensionModel::where($condition)->first();
    }
}
