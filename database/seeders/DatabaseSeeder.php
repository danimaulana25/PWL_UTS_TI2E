<?php

namespace Database\Seeders;

use App\Models\BarangElektronik;
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
<<<<<<< HEAD
        $this->call([
            SekolahSeeder::class,
            
=======
        // \App\Models\User::factory(10)->create();
<<<<<<< HEAD

        $this->call([
            KendaraanUmumSeeder::class,
=======
        $this->call([
            BarangElektronikSeeder::class,
>>>>>>> 57b483ee94a80d7d82e9fddbe24980e976cc71d1
>>>>>>> 7145a5789f9118c8b7e0be9528d471dd11b09fb7
        ]);
    }
}
