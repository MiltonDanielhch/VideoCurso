<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected static ?string $password;
    public function run(): void
    {
        User::create([
            'name' => 'Milton Daniel Hipamo',
            'email' => 'miltondaniel@gmail.com',
            'password' => static::$password ??= Hash::make('password'),
        ]);

        User::factory(99)->create();
    }
}
