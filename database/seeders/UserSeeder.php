<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

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
            // 'nom' => 'diallo',
            //  'prenom' => 'renaud',
            //  'telephone' => 34567,
            // 'email' => 'renaud@gmail.com',
            // 'password' => Hash::make('renaud'),
            // 'role' => 'Administrateur',

            'nom' => 'Ba',
            'prenom' => 'Aicha',
            'telephone' => 779946969,
           'email' => 'aicha@gmail.com',
           'password' => Hash::make('aicha'),
           'role' => 'Administrateur',
        ]);
    }
}
