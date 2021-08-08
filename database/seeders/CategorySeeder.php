<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Cursos',
            'image' =>'https://dummyimage.com/128x128/757375/fff'
        ]);

        Category::create([
            'name' => 'Tennis',
            'image' =>'https://dummyimage.com/128x128/757375/fff'
        ]);

        Category::create([
            'name' => 'Celulares',
            'image' =>'https://dummyimage.com/128x128/757375/fff'
        ]);

        Category::create([
            'name' => 'Computadoras',
            'image' =>'https://dummyimage.com/128x128/757375/fff'
        ]);

        Category::create([
            'name' => 'Tablets',
            'image' =>'https://dummyimage.com/128x128/757375/fff'
        ]);
    }
}
