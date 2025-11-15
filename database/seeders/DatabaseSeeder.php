<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create('en_GB');
        // User::factory(10)->create();

        User::factory()->create([
            'name' => $faker->name,
            'phone' => $faker->phoneNumber,
        ]);

         $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            SliderSeeder::class,
        ]);
    }
}
