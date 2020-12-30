<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstName' => 'Joel',
            'lastName' => 'Rulof',
            'phone' => '0633234415',
            'email' => 'joelrulof20@hotmail.com',
            'password' => Hash::make('TestUser123!'),
        ]);


        $admin = UserRole::find(['3']);
        $manager = UserRole::find(['2']);
        $user = User::find(1);
        $user->roles()->attach($admin);
        $user->roles()->attach($manager);

    }
}
