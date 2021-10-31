<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EbookModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'unique_id';
    public $incrementing = false;
    protected $keyType = 'string';  

    function getAllEbook($condition, $id = 'id', $desc = 'desc'){
        return EbookModel::where($condition)->orderBy($id, $desc)->get();
    }

    function allEbookPaginate($num, $condition, $id = 'id', $desc = 'desc'){
        return EbookModel::where($condition)->orderBy($id, $desc)->paginate($num);
    }

    function getSingleEbook($condition){
        return EbookModel::where($condition)->first();
    }
}
