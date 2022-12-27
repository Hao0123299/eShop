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
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            [
                'name' => 'Admin1',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
            ],
            [
                'name' => 'Admin2',
                'email' => 'admin2@gmail.com',
                'password' => Hash::make('admin'),
            ],
        ]);
    }
}
