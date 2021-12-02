<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert([
            'name' => 'Test Category',
            'description' => 'Test Category description',
        ]);

    }
}
