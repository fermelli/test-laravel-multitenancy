<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Api\Usuarios\Models\Usuario;
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
        Usuario::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Usuario::factory(9)->create();
    }
}
