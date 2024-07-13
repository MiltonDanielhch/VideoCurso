<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $directoryName = 'cursos';
        // Eliminar el directorio 'cursos' si ya existe
        if (Storage::disk('public')->exists($directoryName)) {
            Storage::disk('public')->deleteDirectory($directoryName);
        }

        // Crea el directorio 'cursos' dentro de 'storage/app/public'
        if (Storage::disk('public')->makeDirectory($directoryName)) {
            echo 'Directory created successfully!' . PHP_EOL;
            Log::info('Directory created successfully: ' . $directoryName);
        } else {
            echo 'Failed to create directory.' . PHP_EOL;
            Log::error('Failed to create directory: ' . $directoryName);
        }


        $this->call([
            UserSeeder::class,
            LevelSeeder::class,
            CategorySeeder::class,
            PriceSeeder::class,
            PlatformSeeder::class,
            CourseSeeder::class,
        ]);


    }
}
