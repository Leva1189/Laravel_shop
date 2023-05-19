<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product_imagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 1; $i <= 4; $i++):
            DB::table('product_images')->insert([
                'img' => 'details_'.$i.'.'.'jpg',
                'product_id'=> 1,
            ]);
        endfor;

    }
}
