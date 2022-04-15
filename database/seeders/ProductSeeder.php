<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $category = Category::inRandomOrder()->first();

        $p = Product::make([
            'name' => 'Pencil',
            'price' => 1999, 
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus porro cupiditate quae tenetur est modi, ipsum repellat magni quam accusamus itaque! Saepe vitae officiis nostrum perferendis, voluptate et hic id.', 
            'image' => 'https://tailwindui.com/img/ecommerce-images/home-page-02-product-01.jpg',
        ]);

        $p->category()->associate($category);
        $p->save();

        $p = Product::make([
            'name' => 'Mug',
            'price' => 999, 
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus porro cupiditate quae tenetur est modi, ipsum repellat magni quam accusamus itaque! Saepe vitae officiis nostrum perferendis, voluptate et hic id.', 
            'image' => 'https://tailwindui.com/img/ecommerce-images/home-page-02-product-02.jpg',
        ]);

        $p->category()->associate($category);
        $p->save();

        $p = Product::make([
            'name' => 'Daily Journal',
            'price' => 1999, 
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus porro cupiditate quae tenetur est modi, ipsum repellat magni quam accusamus itaque! Saepe vitae officiis nostrum perferendis, voluptate et hic id.', 
            'image' => 'https://tailwindui.com/img/ecommerce-images/home-page-02-product-03.jpg',
        ]);

        $p->category()->associate($category);
        $p->save();

        $p = Product::make([
            'name' => 'Leader Daily Journal',
            'price' => 2999, 
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus porro cupiditate quae tenetur est modi, ipsum repellat magni quam accusamus itaque! Saepe vitae officiis nostrum perferendis, voluptate et hic id.', 
            'image' => 'https://tailwindui.com/img/ecommerce-images/home-page-02-product-04.jpg',
        ]);

        $p->category()->associate($category);
        $p->save();
    }
}
