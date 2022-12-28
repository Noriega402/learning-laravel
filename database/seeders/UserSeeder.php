<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = 'admin';
        $options = ['cost' => 12];
        $hash = password_hash($password, PASSWORD_DEFAULT, $options);
        $u = new User();
        $u->name = 'daniel noriega';
        $u->email  = 'admin@gmail.com';
        $u->password = $hash;
        $u->save();
    }
}
