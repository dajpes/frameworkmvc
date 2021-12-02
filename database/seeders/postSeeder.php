<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use App\Models\Categories;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryName = 'Comida Category';
        DB::table('categories')->insert([
            'name' => $categoryName,
            'description' => 'Commida Category',
        ]);
        
        $categoryCreated = Categories::where('name', $categoryName)->first();
        DB::table('posts')->insert([
            'publication' => 'Test Posts',
            'Content' => 'Test Content',
            'state' => 'accepted',
            'category_id' => $categoryCreated->id,
            'publication_content' => 'Publication Content',
        ]);
    }
}
