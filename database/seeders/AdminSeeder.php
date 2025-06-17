<?php

namespace Database\Seeders;

use App\Models\Admin;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        DB::transaction(function () use ($faker) {
            // Membuat Admin
            Admin::create([
                'nama_admin' => 'Ujang',
                'username' => 'damaarsi01',
                'password' => Hash::make('DamaarsiDiHati'),
                'no_telp' => '081231298709',
                'email' => 'damaarsi@gmail.com',
                'role' => 'superadmin',
            ]);
            Admin::create([
                'nama_admin' => 'Udin',
                'username' => 'admin01',
                'password' => Hash::make('DamaarsiDiHati'),
                'no_telp' => '081231298719',
                'email' => 'damaarsi2@gmail.com',
                'role' => 'admin',
            ]);
            Admin::create([
                'nama_admin' => 'Umar',
                'username' => 'admin02',
                'password' => Hash::make('DamaarsiDiHati'),
                'no_telp' => '081231298729',
                'email' => 'damaarsi3@gmail.com',
                'role' => 'nonaktif',
            ]);
        });
    }
}
