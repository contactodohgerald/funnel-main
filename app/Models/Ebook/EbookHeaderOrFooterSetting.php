<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EbookHeaderOrFooterSetting extends Model
{
    use HasFactory, SoftDeletes;

    function getAllEbookHeaderOrFooterSetting($condition, $id = 'id', $desc = 'desc')
    {
        return EbookHeaderOrFooterSetting::where($condition)->orderBy($id, $desc)->get();
    }

    function allEbookHeaderOrFooterSettingPaginate($num, $condition, $id = 'id', $desc = 'desc')
    {
        return EbookHeaderOrFooterSetting::where($condition)->orderBy($id, $desc)->paginate($num);
    }

    function getSingleEbookHeaderOrFooterSetting($condition)
    {
        return EbookHeaderOrFooterSetting::where($condition)->first();
    }
}
