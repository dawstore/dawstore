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
        
        $name = ['Mario Ariza', 'Víctor Torres', 'Óscar Povea'];
        $username = ['marioariza_admin', 'victortorres_admin', 'oscarpovea_admin'];
        $email = ['marioarizaadmin@admintello.com', 'victortorresadmin@admintello.com', 'oscarpoveaadmin@admintello.com'];
        $password = ['marioadmin', 'victoradmin', 'oscaradmin'];
        $status = ['Admin', 'Admin', 'Admin'];

        $tamaño = sizeof($name);

        for ($i = 0; $i < $tamaño; $i++) {
            DB::table('users')->insert([
                'name' => $name[$i],
                'username' => $username[$i],
                'email' => $email[$i],
                'password' => $password[$i],
                'status' => $status[$i]
            ]);
        }

        $brands = ['Adidas', 'Nike', 'New Balance','Jordan'];

        $tamaño = sizeof($brands);

        for ($i = 0; $i < $tamaño; $i++) {
            DB::table('brands')->insert([
                'name' => $brands[$i]
            ]);
        }

        $sku = ['1','2','3','4','8','9','7','11','6','10','5'];
        $name = ['Adidas Forum','Adidas Yeezy Foam','Air Force 1','Nike Blazer','Nike Air Max 97 Premium','Nike Air Vapormax','New Balance 550','Adidas Yeezy','New Balance 530','Adidas Super Star','Jordan 4'];
        $price = ['200','250','70','80','120','90','150','140','70','100','170'];
        $description = ['Description 1','Description 2','Description 3','Description 4','Description 5','Description 6','Description 7','Description 8','Description 9','Description 10','Description 11'];
        $stock = ['25','55','10','20','53','34','15','60','50','45','70'];
        $genre = ['Male','Unisex','Female','Male','Unisex','Female','Male','Unisex','Female','Male','Unisex'];
        $brand = ['1','1','2','2','2','2','3','1','3','1','4'];


        $tamaño = sizeof($sku);

        for ($i = 0; $i < $tamaño; $i++) {
            DB::table('products')->insert([
                'sku' => $sku[$i],
                'name' => $name[$i],
                'price' => $price[$i],
                'description' => $description[$i],
                'stock' => $stock[$i],
                'genre' => $genre[$i],
                'brand_id' => $brand[$i]
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
