<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('user_roles')->insert([
            'role_name' => 'Visitor',
        ]);
        DB::table('user_roles')->insert([
            'role_name' => 'Staff member',
        ]);
        DB::table('user_roles')->insert([
            'role_name' => 'Manager',
        ]);
    }

}
