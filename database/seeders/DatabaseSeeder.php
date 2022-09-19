<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

        \App\Models\User::factory()->create([
            'id_ruang'      => '1',
            'id_ruang_sub'  => '1',
            'nama'          => 'Administrator Test',
            'id_akses'      => '1',
            'username'      => 'administrator-test',
        ]);
    }
}
