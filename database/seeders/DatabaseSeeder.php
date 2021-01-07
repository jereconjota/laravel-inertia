<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Article;
use App\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(1)->create([
        //     'email' => 'jere@mail.com',
        //     'password' => Hash::make('foobar')
        // ]);
        // factory(User::class)->create([
        //     'email' => 'jere@mail.com',
        //     'password' => Hash::make('foobar')
        // ]);


        // factory(\App\Models\Article::class, 5)->create();
        \App\Models\Article::factory()->count(30)->create(); 


    }
}
