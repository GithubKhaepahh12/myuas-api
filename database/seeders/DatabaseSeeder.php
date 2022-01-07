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
            'jenis_vitamin' => 'Vitamin A',
            'gambar' => 'buah/buahapel.jpg',
            'status' => 'Buah',
        ]);

        Buah::create([
            'nama' => 'Buah Alpokat',
            'jenis_vitamin' => 'Vitamin C',
            'gambar' => 'buah/buahalpokat.jpg',
            'status' => 'Buah',
        ]);

        Buah::create([
            'nama' => 'Buah Mangga',
            'jenis_vitamin' => 'Vitamin C',
            'gambar' => 'buah/buahmangga.jpg',
            'status' => 'Buah',
        ]);

        Buah::create([
            'nama' => 'Buah Naga',
            'jenis_vitamin' => 'Vitamin C',
            'gambar' => 'buah/buahnaga.jpg',
            'status' => 'Buah',
        ]);

        Buah::create([
            'nama' => 'Buah Jeruk',
            'jenis_vitamin' => 'Vitamin C',
            'gambar' => 'buah/buahjeruk.jpg',
            'status' => 'Buah',
        ]);

        Buah::create([
            'nama' => 'Buah Pisang',
            'jenis_vitamin' => 'Vitamin C',
            'gambar' => 'buah/buahpisang.jpg',
            'status' => 'Buah',
        ]);

        Buah::create([
            'nama' => 'Sayur Bayam',
            'jenis_vitamin' => 'A, B, C dan E',
            'gambar' => 'sayur/sayurbayam.jpg',
            'status' => 'Sayur',
        ]);

        Buah::create([
            'nama' => 'Sayur Kol',
            'jenis_vitamin' => 'Vitamin C',
            'gambar' => 'sayur/sayurkol.jpg',
            'status' => 'Sayur',
        ]);

        Buah::create([
            'nama' => 'Sayur Tomat',
            'jenis_vitamin' => 'Vitamin C',
            'gambar' => 'sayur/sayurtomat.jpg',
            'status' => 'Sayur',
        ]);

        Buah::create([
            'nama' => 'Sayur wortel',
            'jenis_vitamin' => 'A, K1 dan B6',
            'gambar' => 'sayur/sayurwortel.jpg',
            'status' => 'Sayur',
        ]);

        Sayur::create([
            'nama' => 'Ikan Salmon',
            'jenis_vitamin' => 'Vitamin B dan D',
            'gambar' => 'sayur/ikansalmon.jpg',
            'status' => 'Ikan',
        ]);

        Sayur::create([
            'nama' => 'Telur',
            'jenis_vitamin' => '1 telur 6 gram protein',
            'gambar' => 'sayur/telur.jpg',
            'status' => 'Telur',
        ]);

        Sayur::create([
            'nama' => 'Daging Sapi',
            'jenis_vitamin' => '50 gram protein.',
            'gambar' => 'sayur/daging.jpg',
            'status' => 'Daging',
        ]);

        Sayur::create([
            'nama' => 'Daging Ayam',
            'jenis_vitamin' => '50 gram protein.',
            'gambar' => 'sayur/dagingayam.jpg',
            'status' => 'Daging',
        ]);

        Sayur::create([
            'nama' => 'Susu',
            'jenis_vitamin' => 'vitamin B2 dan B6',
            'gambar' => 'sayur/susu.jpg',
            'status' => 'Susu',
        ]);

        Sayur::create([
            'nama' => 'Kacang',
            'jenis_vitamin' => 'vitamin B',
            'gambar' => 'sayur/kacang.jpg',
            'status' => 'Kacang',
        ]);
    }
}
