<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['Name' => 'Kursi Plastik',
                'Price' => 10000,
                'Description' => 'kursi yang memberikan anda skill gaming +999',
                'Image' => 'https://cf.shopee.co.id/file/e6ccf37abcfa938826f6e1ec33d18432',
                'Category' => 'Recycle'],
            ['Name' => 'tas plastik kece',
                'Price' => 5000,
                'Description' => 'tas yang bisa menampung banyak barang anda seperti kantong doraemon',
                'Image' => 'https://cdn.popbela.com/content-images/post/20180711/cdglaundrybag-acrimoniamagazine1-81d59feb0e83c6ed034f06bb5d928f7c_750x500.jpg',
                'Category' => 'Recycle'],
            ['Name' => 'meja kayu kuat',
                'Price' => 20000,
                'Description' => 'Kursi second yang memiliki kualitas bintang 10',
                'Image' => 'https://prodesign.id/images/products/large/meja-makan-bulat-jamon-5.png',
                'Category' => 'Second']
        ]);
    }
}
