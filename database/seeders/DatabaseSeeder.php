<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Artisan::call('passport:install');


        User::factory()->state([
            'email' => 'test@test',
            'name' => 'test',
            'password' => 'test',
        ])
            ->create();

        Blog::factory(25)->create();
    }
}
