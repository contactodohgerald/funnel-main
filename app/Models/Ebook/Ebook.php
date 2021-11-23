<?php

namespace App\Models\Ebook;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;


class Ebook extends Model
{
    use HasFactory, SoftDeletes;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($ebook, $id = 0) {
            $slug = Str::slug($ebook->title);
            $allSlugs = static::getRelatedSlugs($slug, $id);

            if (!$allSlugs->contains('slug', $slug)) {
                $ebook->slug = Str::slug($slug);
                return;
            }

            //else incr slug by 1
            $i = 1;
            $is_contain = true;
            do {
                $newSlug = $slug . '-' . $i;
                if (!$allSlugs->contains('slug', $newSlug)) {
                    $is_contain = false;
                    $ebook->slug = Str::slug($newSlug);
                }
                $i++;
            } while ($is_contain);
        });

        static::updating(function ($ebook, $id = 0) {
            $slug = Str::slug($ebook->name);
            $allSlugs = static::getRelatedSlugs($slug, $id);

            if (!$allSlugs->contains('slug', $slug)) {
                $ebook->slug = Str::slug($slug);
                return;
            }

            //else incr slug by 1
            $i = 1;
            $is_contain = true;
            do {
                $newSlug = $slug . '-' . $i;
                if (!$allSlugs->contains('slug', $newSlug)) {
                    $is_contain = false;
                    $ebook->slug = Str::slug($newSlug);
                }
                $i++;
            } while ($is_contain);
        });
    }

    //used in boot
    protected static function getRelatedSlugs($slug, $id = 0)
    {
        return static::select('slug')->where('slug', 'like', $slug . '%')
            ->where('id', '<>', $id)
            ->get();
    }

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
