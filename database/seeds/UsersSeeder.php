<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Agil Pamungkas.',
            'username' => 'admin',
            'email' => 'agilpamungkassc@gmail.com',
            'password' => bcrypt('admin')
        ]);
        $admin->assignRole('superadmin');

        $user = User::create([
            'name' => 'Yunni Silvrihartini',
            'username' => 'yunni',
            'email' => 'yunni@gmail.com',
            'password' => bcrypt('admin')
        ]);
        $user->assignRole('user');

        $user = User::create([
            'name' => 'Nur Aini',
            'username' => 'aini',
            'email' => 'aini@gmail.com',
            'password' => bcrypt('user')
        ]);
        $user->assignRole('user');
    }
}
