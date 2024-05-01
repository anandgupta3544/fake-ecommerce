<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Product;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Anand Gupta',
            'email' => 'anand@gmail.com',
            'password' => bcrypt('anand@123')
        ]);

        $categories = ['Smartphones', 'Fashion', 'Home Appliances'];

        foreach($categories as $category)
        {
            Category::create([
                'name' => $category,
                'slug' => Str::slug($category)
            ]);
        }

        Product::create([
            'name' => 'iphone 15 pro max',
            'slug' => Str::slug('iphone 15 pro max'),
            'description' => 'Apple iPhone 15 Pro Max (256 GB) - Blue Titanium',
            'price' => 148900,
            'category_id' => 1,
            'image' => 'iphone15.png'
        ]);

        Product::create([
            'name' => 'Jockey Black Underwear',
            'slug' => Str::slug('Jockey Black Underwear'),
            'description' => 'Men\'s Regular Fit underwear stylish and comfortable',
            'price' => 319.99,
            'category_id' => 2,
            'image' => 'jockey-underwear.jpg'
        ]);
    }
}
