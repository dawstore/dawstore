<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsertBbdd extends Controller
{
    public function insert()
    {
        DB::table('products')->insert([
            'id' => '0',
            'sku' => '090223',
            'name' => 'Jordan 1',
            'price' => '100',
            'description' => 'asjbdjcbs',
            'stock' => '40',
            'genre' => 'Male',
            'images' => 'jordan-1.jpg'
        ]);

        return view('index', @compact('products'));
    }
}
