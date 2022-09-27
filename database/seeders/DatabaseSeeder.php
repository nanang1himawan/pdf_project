<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Pegawaii;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        
        for ($i=1; $i <= 50 ; $i++) { 
            
            Pegawaii::create([
                'nama' => $faker->name,
                'email' => $faker->email,
                'alamat' => $faker->address,
                'telepon' => $faker->phoneNumber
        ]);
        }


        
    }
}
