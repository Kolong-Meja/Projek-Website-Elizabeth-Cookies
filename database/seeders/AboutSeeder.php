<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'content' => 'Toko Kue Online Elizabeth Cookies berdiri sejak tahun 2020. Kala itu tim kami yang beranggotakan 5 orang, memutuskan sebuah ide atau gagasan untuk membangun sebuah toko kue online yang menarik dan diminati masyarakat indonesia. Toko online kami, dirancang dalam bentuk sebuah website yang dibangun dengan framework Laravel dengan tambahan library bootstrap. Website yang kami rancang tidak begitu sulit, mudah dimengerti, serta minimalis dimata pelanggan.',
        ]);

        About::create([
            'content' => 'Lalu, pada 2 tahun selanjutnya, tim kami berinisiatif untuk mengembangkan tampilan baru di website kami, serta mengubah beberapa tampilan atau fiture lama, agar website yang kami bangun tidak usang dimakan zaman. Kami optimis bahwa dengan adanya pengembangan lanjutan dari website yang kami buat, membuat website kami lebih stabil dari sisi security, ringan dari volume database yang besar, serta tidak menghabiskan waktu lama dalam pengembangan berikutnya. Kami yakin, website yang kami bangun membuat masyarakat indonesia, tertarik untuk mengunjungi toko online kami.',
        ]);

        About::create([
            'content' => 'ntuk jenis-jenis kue yang kami jual, sangat berbagai macam, mulai dari Semprit Nanas, Semprit Coklat, Kue Putri Salju/Snow Ball, Kue Nastar Keju, Kue Castengel, Kue Sagu Keju, Kue Almond Chocochips, Kue Palm Cheese Ball, Lidah Kucing Coklat, Lidah Kucing Original.',
        ]);

    }
}
