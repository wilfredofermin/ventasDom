<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Laravel cursos',
            'cost' =>2000,
            'price' =>5000,
            'barcode' =>'750009389983',
            'stock' =>1000,
            'alert' => 10,
            'category_id' =>1,
            'image' =>'https://dummyimage.com/96x96/e075e0/fff'
        ]);

        Product::create([
            'name' => 'Running Bike',
            'cost' =>600,
            'price' =>1500,
            'barcode' =>'750009389981',
            'stock' =>1000,
            'alert' => 10,
            'category_id' =>2,
            'image' =>'https://dummyimage.com/96x96/e075e0/fff'
        ]);

        Product::create([
            'name' => 'Iphone 11',
            'cost' =>25000,
            'price' =>30000,
            'barcode' =>'750009389982',
            'stock' =>50,
            'alert' => 3,
            'category_id' =>2,
            'image' =>'https://dummyimage.com/96x96/e075e0/fff'
        ]);

        Product::create([
            'name' => 'PC Gamer',
            'cost' =>75000,
            'price' =>90000,
            'barcode' =>'750009389984',
            'stock' =>10,
            'alert' => 3,
            'category_id' =>2,
            'image' =>'https://dummyimage.com/96x96/e075e0/fff'
        ]);
    }
}
