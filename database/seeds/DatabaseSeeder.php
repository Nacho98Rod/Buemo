<?php

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
        DB::table('users')->insert([
            'name' => 'administrador',
            'email' => 'admin@admin.com',
            'role' => 'admin',
            'password' => bcrypt('admin12345')
        ]);
    }
}
