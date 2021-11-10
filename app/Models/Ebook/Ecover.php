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

    public function createdBy(){
        return $this->belongsTo('App\Models\User', 'created_by');
    }  
    
    public function dimensions(){
        return $this->belongsTo('App\Models\Ebook\Dimension', 'dimension_id');
    } 

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
