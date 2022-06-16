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
        \App\Models\User::factory(10)->create();

        \App\Models\Tag::create([
            'name' => 'Laravel'
        ]);
        \App\Models\Tag::create([
            'name' => 'Vue JS'
        ]);
        \App\Models\Tag::create([
            'name' => 'css'
        ]);
        \App\Models\Tag::create([
            'name' => 'html'
        ]);
        \App\Models\Tag::create([
            'name' => 'API'
        ]);

        \App\Models\Post::factory(3)->create();
        
    }
}
