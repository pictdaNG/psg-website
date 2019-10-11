<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User([
            'name' => 'Super Admin',
        	'email' => 'superadmin@pictda.com',
        	'password' => bcrypt('secret')
        ]);
        $user->save();
        $user->assignRole("SuperAdmin");
        

        $user = new \App\User([
            'name' => 'Admin',
        	'email' => 'admin@pictda.com',
        	'password' => bcrypt('secret')
        ]);
        $user->save();
        $user->assignRole("Admin");
        
    }
}
