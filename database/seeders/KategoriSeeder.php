<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Schema::disableForeignKeyConstraints();
        \App\Models\Kategori::truncate();
        \App\Models\Kategori::insert([
            ["nama_kategori" => "News"],
            ["nama_kategori" => "Tren"],
            ["nama_kategori" => "Health"],
            ["nama_kategori" => "Food"],
            ["nama_kategori" => "Edukasi"],
            
        ]);
        \Schema::enableForeignKeyConstraints();
    }
}
