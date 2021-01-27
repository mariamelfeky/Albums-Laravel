<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'super admin',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('password'),
            'role_id' => 1,
        ]);
    }
}
