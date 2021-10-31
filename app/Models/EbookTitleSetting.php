<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EbookTitleSetting extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'unique_id';
    public $incrementing = false;
    protected $keyType = 'string';  

    function getAllEbookTitleSetting($condition, $id = 'id', $desc = 'desc'){
        return EbookTitleSetting::where($condition)->orderBy($id, $desc)->get();
    }

    function allEbookTitleSettingPaginate($num, $condition, $id = 'id', $desc = 'desc'){
        return EbookTitleSetting::where($condition)->orderBy($id, $desc)->paginate($num);
    }

    function getSingleEbookTitleSetting($condition){
        return EbookTitleSetting::where($condition)->first();
    }
}
