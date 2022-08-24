<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $icons_path = 'assets/images/icons/';
        $product_image_path = 'assets/images/product-image/';
        \App\Models\Category::insert([['name' => 'Jewelry', 'image' => $icons_path . 'jewelry-icon.png'], ['name' => 'Pottery', 'image' => $icons_path . 'pottery-icon.png'], ['name' => 'Fabric', 'image' => $icons_path . 'fabric-icon.png'], ['name' => 'Paintings', 'image' => $icons_path . 'paintings-icon.png'], ['name' => 'Sculptures', 'image' => $icons_path . 'sculptures-icon.png'], ['name' => 'Wooden', 'image' => $icons_path . 'wooden-icon.png']]);
        \App\Models\Product::factory(20)->create();
        \App\Models\Wh::insert([
            [
                'name' => 'WH01',
            ],
            [
                'name' => 'WH02',
            ],
            [
                'name' => 'WH03',
            ],
        ]);
        $products = \App\Models\Product::all();
        foreach ($products as $index => $product) {
            \App\Models\Image::insert([['product_id' => $product->id, 'path' => $product_image_path . rand(1, 12) . '.jpg'], ['product_id' => $product->id, 'path' => $product_image_path . rand(1, 12) . '.jpg'], ['product_id' => $product->id, 'path' => $product_image_path . rand(1, 12) . '.jpg']]);
            $product->categories()->attach(
                \App\Models\Category::inRandomOrder()
                    ->limit(2)
                    ->get(),
            );
            \App\Models\Stock::insert([
                [
                    'product_id' => $product->id,
                    'wh_id' => 1,
                    'qty' => rand(71, 100),
                ],
                [
                    'product_id' => $product->id,
                    'wh_id' => 2,
                    'qty' => rand(51, 70),
                ],
                [
                    'product_id' => $product->id,
                    'wh_id' => 3,
                    'qty' => rand(20, 50),
                ],
            ]);

            $rand_day = rand(1, 20);
            $start_date_str = '2022-08-' . $rand_day;
            $start_date_time = strtotime($start_date_str);
            $start_date_promo = date('Y-m-d H:i:s', $start_date_time);
            $end_date_str = '2022-08-' . $rand_day + 5;
            $end_date_time = strtotime($end_date_str);
            $end_date_promo = date('Y-m-d H:i:s', $end_date_time);

            \App\Models\Promotion::create([
                'product_id' => $product->id,
                'name' => 'PROMO_' . $product->id,
                'new_price' => (float) rand(30, 60) . '.' . rand(0, 99),
                'start_date' => $start_date_promo,
                'end_date' => $end_date_promo,
            ]);
        }
    }
}
