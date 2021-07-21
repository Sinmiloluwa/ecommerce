<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Men',
                'slug' => 'men',
                'created_at' => '2021-05-01 09:52:01',
                'updated_at' => '2021-05-01 09:52:01',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Women',
                'slug' => 'women',
                'created_at' => '2021-05-01 09:52:01',
                'updated_at' => '2021-05-01 09:52:01',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Accessories',
                'slug' => 'accessories',
                'created_at' => '2021-05-01 09:52:01',
                'updated_at' => '2021-05-01 09:52:01',
            ),
        ));
        
        
    }
}