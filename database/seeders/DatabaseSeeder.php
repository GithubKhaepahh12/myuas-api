<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Buah;
use App\Models\Sayur;


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

        User::create([
            'name' => 'khaepah',
            'email' => 'khaepah@gmail.com',
            'password' => 'khaepah12345',
            'gambar' => 'profil/profilwanita.jpg',
        ]);

        //Buah
        Buah::create([
            'nama' => 'Buah Apel',
            'jenis_vitamin' => 'A',
            'gambar' => 'buah/buahapel.jpg',
            'status' => 'Buah',
        ]);

        Buah::create([
            'nama' => 'Buah Alpokat',
            'jenis_vitamin' => 'C',
            'gambar' => 'buah/buahalpokat.jpg',
            'status' => 'Buah',
        ]);

        Buah::create([
            'nama' => 'Buah Mangga',
            'jenis_vitamin' => 'C',
            'gambar' => 'buah/buahmangga.jpg',
            'status' => 'Buah',
        ]);

        Buah::create([
            'nama' => 'Buah Naga',
            'jenis_vitamin' => 'C',
            'gambar' => 'buah/buahnaga.jpg',
            'status' => 'Buah',
        ]);

        Buah::create([
            'nama' => 'Buah Jeruk',
            'jenis_vitamin' => 'C',
            'gambar' => 'buah/buahjeruk.jpg',
            'status' => 'Buah',
        ]);

        Buah::create([
            'nama' => 'Buah Pisang',
            'jenis_vitamin' => 'C',
            'gambar' => 'buah/buahpisang.jpg',
            'status' => 'Buah',
        ]);

        Sayur::create([
            'nama' => 'Sayur Bayam',
            'jenis_vitamin' => 'A, B, C dan E',
            'gambar' => 'sayur/sayurbayam.jpg',
            'status' => 'Sayur',
        ]);

        Sayur::create([
            'nama' => 'Sayur Kol',
            'jenis_vitamin' => 'C',
            'gambar' => 'sayur/sayurkol.jpg',
            'status' => 'Sayur',
        ]);

        Sayur::create([
            'nama' => 'Sayur Tomat',
            'jenis_vitamin' => 'C',
            'gambar' => 'sayur/sayurtomat.jpg',
            'status' => 'Sayur',
        ]);

        Sayur::create([
            'nama' => 'Sayur wortel',
            'jenis_vitamin' => 'A, K1 dan B6',
            'gambar' => 'sayur/sayurwortel.jpg',
            'status' => 'Sayur',
        ]);
    }
}
