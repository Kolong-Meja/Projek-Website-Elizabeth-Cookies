<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_product_1 = Product::create(
            [
                'name' => 'Lidah Kucing Original',
                'description' => 'Kue kering yang penuh trik, dari pengocokan mentega,putih telor, kalo ga pas, adonan bisa lengket, bisa bantet (kue kering pun bisa bantet) Dan akhirnya setelah otak atik dan korban puluhan kilo putih telor sekarang si lidah kucing jadi salah satu best seller cookies yang ada di @elisabeth.cookies Ada yang original, keju dan coklat. Tiap customer punya seleranya sendiri2 Have a blessed day, stay safe, stay healthy and stay happy💝',
                'price' => '80.000',
                'image' => 'Lidah Kucing Original.jpeg',
            ]);
        
        $default_product_2 = Product::create(
            [
                'name' => 'Almond Chocochips',
                'description' => 'Salah satu jenis cookies yang terfavorit Cookies satu ini paling sering dijadikan souvenir di ulang tahun, tingjing (lamaran). Dan paling sering lagi di stock di rumah2 untuk temen cemilan😄 Perpaduan butter, palm sugar, almond slice dan chocochips❤️',
                'price' => '75.000',
                'image' => 'Almond Chocochips.jpeg',
            ]);    
        
        $default_product_3 = Product::create(
            [
                'name' => 'Nastar Keju',
                'description' => 'Salah satu varian yang ada di menu cookies kita, nastar keju, dengan isian nanas dipadu keju edam dan cheddar Nastar Keju Elisabet Cookies',
                'price' => '80.000',
                'image' => 'Nastar Keju.jpeg',
            ]); 
        
        $default_product_4 = Product::create(
            [
                'name' => 'Putri Salju',
                'description' => 'Perpaduan butter wijsman dengan keju edam dan kacang mete, ditabur gula halus.',
                'price' => '70.000',
                'image' => 'Putri Salju.jpeg',
            ]); 
    }
}
