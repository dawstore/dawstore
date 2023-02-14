<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Image;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   

        $sku = ['1','2','3','4','8','9','7','11','6','10','5'];
        $name = ['Adidas Forum','Adidas Yeezy Foam','Air Force 1','Nike Blazer','Nike Air Max 97 Premium','Nike Air Vapormax','New Balance 550','Adidas Yeezy','New Balance 530','Adidas Super Star','Jordan 4'];
        $price = ['100','100','100','100','100','100','100','100','100','100','100'];
        $description = ['Description 1','Description 2','Description 3','Description 4','Description 5','Description 6','Description 7','Description 8','Description 9','Description 10','Description 11'];
        $stock = ['50','50','50','50','50','50','50','50','50','50','50'];
        $genre = ['Male','Unisex','Female','Male','Unisex','Female','Male','Unisex','Female','Male','Unisex'];


        $tamaño = sizeof($sku);

        for ($i = 0; $i < $tamaño; $i++) {
            DB::table('products')->insert([
                'sku' => $sku[$i],
                'name' => $name[$i],
                'price' => $price[$i],
                'description' => $description[$i],
                'stock' => $stock[$i],
                'genre' => $genre[$i]
            ]);
        }

        for ($i = 0; $i < $tamaño; $i++) {
            
            $images = [$sku[$i].'-1.jpg',$sku[$i].'-2.jpg',$sku[$i].'-3.jpg',$sku[$i].'-4.jpg'];
    
            foreach ($images as $image) {
                DB::table('images')->insert([
                    'image_name' => $image,
                    'product_id' => $i+1
                ]);
            }
        }
    }
}
