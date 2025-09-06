<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;
        $user->name = 'Juan Esteban';
        $user->lastname = 'Vera Velez ';
        $user->phone = '3003553688 ';
        $user->address = 'calle 57 #12 b';
        $user->email = 'juanestebanv0612@gmail.com';
        $user->password = bcrypt('12345678');
        $user->role = "admin";
        $user->save();
    }
}
