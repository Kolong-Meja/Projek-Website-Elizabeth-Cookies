<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\User;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create(
            [
                'user_id' => $admin->id,
                'name' => 'Lidah Kucing Original',
                'description' => 'Kue kering yang penuh trik, dari pengocokan mentega,putih telor, kalo ga pas, adonan bisa lengket, bisa bantet (kue kering pun bisa bantet) Dan akhirnya setelah otak atik dan korban puluhan kilo putih telor sekarang si lidah kucing jadi salah satu best seller cookies yang ada di @elisabeth.cookies Ada yang original, keju dan coklat. Tiap customer punya seleranya sendiri2 Have a blessed day, stay safe, stay healthy and stay happy💝',
                'price' => 80000.00,
                'image' => 'Lidah Kucing Original.jpeg',
            ]);
        
        Product::create(
            [
                'user_id' => $admin->id,
                'name' => 'Almond Chocochips',
                'description' => 'Salah satu jenis cookies yang terfavorit Cookies satu ini paling sering dijadikan souvenir di ulang tahun, tingjing (lamaran). Dan paling sering lagi di stock di rumah2 untuk temen cemilan😄 Perpaduan butter, palm sugar, almond slice dan chocochips❤️',
                'price' => 75000.00,
                'image' => 'Almond Chocochips.jpeg',
            ]);    
        
        Product::create(
            [
                'user_id' => $admin->id,
                'name' => 'Nastar Keju',
                'description' => 'Salah satu varian yang ada di menu cookies kita, nastar keju, dengan isian nanas dipadu keju edam dan cheddar Nastar Keju Elisabet Cookies',
                'price' => 80000.00,
                'image' => 'Nastar Keju.jpeg',
            ]); 
        
        Product::create(
            [
                'user_id' => $admin->id,
                'name' => 'Putri Salju',
                'description' => 'Perpaduan butter wijsman dengan keju edam dan kacang mete, ditabur gula halus.',
                'price' => 70000.00,
                'image' => 'Putri Salju.jpeg',
            ]); 
    }
}
