<?php

namespace App\Models\Ebook;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Ecover extends Model
{
    use HasFactory, SoftDeletes;

    // protected $primaryKey = 'unique_id';
    // public $incrementing = false;
    // protected $keyType = 'string'; 
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($ecover, $id = 0) {
            $slug = Str::slug($ecover->title);
            $allSlugs = static::getRelatedSlugs($slug, $id);

            if (!$allSlugs->contains('slug', $slug)) {
                $ecover->slug = Str::slug($slug);
                return;
            }

            //else incr slug by 1
            $i = 1;
            $is_contain = true;
            do {
                $newSlug = $slug . '-' . $i;
                if (!$allSlugs->contains('slug', $newSlug)) {
                    $is_contain = false;
                    $ecover->slug = Str::slug($newSlug);
                }
                $i++;
            } while ($is_contain);
        });

        static::updating(function ($ecover, $id = 0) {
            $slug = Str::slug($ecover->name);
            $allSlugs = static::getRelatedSlugs($slug, $id);

            if (!$allSlugs->contains('slug', $slug)) {
                $ecover->slug = Str::slug($slug);
                return;
            }

            //else incr slug by 1
            $i = 1;
            $is_contain = true;
            do {
                $newSlug = $slug . '-' . $i;
                if (!$allSlugs->contains('slug', $newSlug)) {
                    $is_contain = false;
                    $ecover->slug = Str::slug($newSlug);
                }
                $i++;
            } while ($is_contain);
        });
    }

    //used in boot
    protected static function getRelatedSlugs($slug, $id = 0){
        return static::select('slug')->where('slug', 'like', $slug . '%')
            ->where('id', '<>', $id)
            ->get();
    }

    public function createdBy(){
        return $this->belongsTo('App\Models\User', 'created_by');
    }

    public function dimension(){
        return $this->belongsTo('App\Models\Ebook\Dimension', 'dimension_id');
    }

    function getAllEcover($condition, $id = 'id', $desc = 'desc'){
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
