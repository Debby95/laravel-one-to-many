<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Videogames', 'Comics', 'Music', 'Books', 'Movies', 'Tv Series'];

        foreach($categories as $category) {
            Category::create([
                "name" => $category,
                "slug" => Str::slug($category)
            ]);
        }
    }
}
