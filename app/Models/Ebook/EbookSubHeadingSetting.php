<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EbookSubHeadingSetting extends Model
{
    use HasFactory, SoftDeletes;

    function getAllEbookSubHeadingSetting($condition, $id = 'id', $desc = 'desc')
    {
        return EbookSubHeadingSetting::where($condition)->orderBy($id, $desc)->get();
    }

    function allEbookSubHeadingSettingPaginate($num, $condition, $id = 'id', $desc = 'desc')
    {
        return EbookSubHeadingSetting::where($condition)->orderBy($id, $desc)->paginate($num);
    }

    function getSingleEbookSubHeadingSetting($condition)
    {
        return EbookSubHeadingSetting::where($condition)->first();
    }
}
