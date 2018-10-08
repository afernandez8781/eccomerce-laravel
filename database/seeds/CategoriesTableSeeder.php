<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
        	['name' => 'Laptops', 'slug' => 'laptops', 'created_at' => $now, 'updated_at' => $now],
        	['name' => 'Desktops', 'slup' => 'desktops', 'created_at' => $now, 'updated_at' => $now],
        	['name' => 'Mobile Phones', 'slug' => 'mobile-phones', 'created_at' => $now, 'updated_at' => $now],
        	['name' => 'Tablests', 'slup' => 'tablets', 'created_at' => $now, 'updated_at' => $now],
        	['name' => 'Tvs', 'slup' => 'tvs', 'created_at' => $now, 'updated_at' => $now],
        	['name' => 'Digital Cameras', 'slup' => 'digital-cameras', 'created_at' => $now, 'updated_at' => $now],
        	['name' => 'Appliances', 'slup' => 'applicances', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
