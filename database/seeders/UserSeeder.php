<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // this is just the example of seeding
        $admin = User::create([
            'name' => 'Faisal Ramadhan',
            'email' => 'faisalramadhan08@gmail.com',
            'password' => bcrypt('Faisal04#'),
            'mobile' => '085877889966'
        ]);

        $admin->assignRole('admin');

        // $user = User::create([
        //     'name' => 'User',
        //     'email' => 'user@kawankoding.id',
        //     'password' => bcrypt('12345678'),
        //     'mobile' => '085877665544'
        // ]);

        // $user->assignRole('user');
    }
}
