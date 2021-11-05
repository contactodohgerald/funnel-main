<?php

namespace App\Models\Ebook;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
    use HasFactory, SoftDeletes;

    function getAllEbook($condition, $id = 'id', $desc = 'desc')
    {
        return Ebook::where($condition)->orderBy($id, $desc)->get();
    }

    function allEbookPaginate($num, $condition, $id = 'id', $desc = 'desc')
    {
        return Ebook::where($condition)->orderBy($id, $desc)->paginate($num);
    }

    function getSingleEbook($condition)
    {
        return Ebook::where($condition)->first();
    }
}
