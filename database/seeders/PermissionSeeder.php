<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('permissions')->insert([
            'name' => 'ListUser',
            'parent' =>'User',

        ]);
        \DB::table('permissions')->insert([
            'name' => 'DeleteUser',
            'parent' =>'User',
            
        ]);
        \DB::table('permissions')->insert([
            'name' => 'ListAlbums',
            'parent' =>'Album',
            
        ]);
        \DB::table('permissions')->insert([
            'name' => 'DeleteAlbums',
            'parent' =>'Album',
            
        ]);

    }
}
