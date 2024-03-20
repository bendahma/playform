<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'Kaddour Bendahma',
            'last_name' => "Med Elamine",
            'email' => 'admin@playform.com',
            'slug' => 'kaddour-bendahma-med-elamine',
        ]);
    }
}
