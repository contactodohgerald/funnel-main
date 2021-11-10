<?php

namespace Database\Seeders;
use App\Models\Ebook\Dimension;
use Illuminate\Support\Facades\DB;
use App\Traits\Generics;

use Illuminate\Database\Seeder;

class DimensionsSeeder extends Seeder
{
    use Generics;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $types = ['flat_cover', '3d_book_cover', '3d_cd_cover'];
        $width = [816, 1620, 1440];
        $height = [1056, 970, 720];
        for($i = 0; $i < count($types); $i++){
            DB::table('dimensions')->insert([
                'unique_id' => $this->createUniqueId('dimensions', 'unique_id'),
                'width' => $width[$i],
                'height' => $height[$i],
                'type' => $types[$i],
            ]);
        }
    }
}
