<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Level::create([
            'name' => 'nivel basico',
        ]);
        Level::create([
            'name' => 'nivel intermedio',
        ]);
        Level::create([
            'name' => 'nivel avanzado',
        ]);
    }
}
