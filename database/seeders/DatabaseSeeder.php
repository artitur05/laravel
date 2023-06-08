<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory()->create();
        Role::factory()->create([
           'name' => 'admin'

        ]);
        Role::factory()->create([
           'name' => 'guest'
        ]);


         \App\Models\User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@test.com',
             'password' => Hash::make('12345678'),
             'role_id' => 1
         ]);

         \App\Models\User::factory()->create([
             'name' => 'Test User 2',
             'email' => 'test2@test.com',
             'password' => Hash::make('12345679'),
         ]);


         Category::factory()->count(5)->create();

         Post::factory()->count(20)->create();
    }

}
