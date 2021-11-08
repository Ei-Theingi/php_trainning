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
        DB::table('users')->insert(
            [
              'name' => 'admin',
              'email' => 'scm.aungpyaesone@gmail.com',
              'password' => Hash::make('password'),
              'profile' => '1588646773.png',
              'type' => '0',
              'created_user_id' => 1,
              'updated_user_id' => 1,
            ]
          );
    }
}