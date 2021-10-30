<?php

namespace Database\Seeders;

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
        \Schema::disableForeignKeyConstraints();
        \App\Models\User::create([
            "name" => "Guanleng",
            "email" => "guanleng48@gmail.com",
            "password" => \Hash::make("123456")
            
            ]);
            $this->call([
                KategoriSeeder::class,
                BeritaSeeder::class,
                KomentarSeeder::class
                
                ]);
                \Schema::enableForeignKeyConstraints();
    }
}
