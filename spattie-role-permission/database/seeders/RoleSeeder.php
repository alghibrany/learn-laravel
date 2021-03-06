<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->insert([
                [
                    'name' => 'admin',
                    'guard_name' => 'web',
                    'created_at' => date('Y-m-d h:m:s'),
                ], 
                [
                    'name' => 'user',
                    'guard_name' => 'web',
                    'created_at' => date('Y-m-d h:m:s'),
                ]
        ]);
    }
}
