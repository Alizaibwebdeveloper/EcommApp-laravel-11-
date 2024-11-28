<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder
{
    public function run()
    {
        $subcategories = [
            ['name' => 'Mobile Phones', 'category_name' => 'Electronics'],
            ['name' => 'Laptops', 'category_name' => 'Electronics'],
            ['name' => 'Televisions', 'category_name' => 'Electronics'],
            ['name' => 'Men', 'category_name' => 'Clothing'],
            ['name' => 'Women', 'category_name' => 'Clothing'],
            ['name' => 'Kids', 'category_name' => 'Clothing'],
            ['name' => 'Fiction', 'category_name' => 'Books'],
            ['name' => 'Non-fiction', 'category_name' => 'Books'],
            ['name' => 'Educational', 'category_name' => 'Books'],
        ];

        foreach ($subcategories as $subcategory) {
            $category = DB::table('categories')->where('name', $subcategory['category_name'])->first();

            if ($category) {
                DB::table('sub_categories')->insert([
                    'name' => $subcategory['name'],
                    'category_id' => $category->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
