<?php

namespace App\Models\Ebook;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ecover extends Model
{
    use HasFactory, SoftDeletes;

    // protected $primaryKey = 'unique_id';
    // public $incrementing = false;
    // protected $keyType = 'string';  

    function getAllEcover($condition, $id = 'id', $desc = 'desc')
    {
        return Ecover::where($condition)->orderBy($id, $desc)->get();
    }

    function allEcoverPaginate($num, $condition, $id = 'id', $desc = 'desc')
    {
        return Ecover::where($condition)->orderBy($id, $desc)->paginate($num);
    }

    function getSingleEcover($condition)
    {
        return Ecover::where($condition)->first();
    }
}
