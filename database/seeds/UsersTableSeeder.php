<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $superAdminCredentials = [
        //     'first_name' => 'Super',
        //     'last_name' => 'Admin',
        //     'phone_number' => '1234567890',
        //     'email' => 'superadmin@recab.com',
        //     'address' => 'Jos',
        //     'password' => 'secret',
        //     // 'sluger' => 'super',
        //     'bio_status' => '1'            
        // ];
        
        // $superAdmin = Sentinel::registerAndActivate($superAdminCredentials, true);
        // $role = Sentinel::findRoleBySlug('superadmin');
        // $role->users()->attach($superAdmin);
        
        $adminCredentials = [
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            // 'phone_number' => '1234567890',
            'email' => 'admin@psg.com',
            // 'address' => 'Jos',
            'password' => 'secret',
            
        ];
        
        $admin = Sentinel::registerAndActivate($adminCredentials, true);
        $role = Sentinel::findRoleBySlug('admin');
        $role->users()->attach($admin);
        
        $userCredentials = [
            'first_name' => 'Nani',
            'last_name' => 'User',
            // 'phone_number' => '1234567890',
            'email' => 'user@psg.com',
            // 'address' => 'Jos',
            'password' => 'secret',
        ];
        
        $user = Sentinel::registerAndActivate($userCredentials, true);
        $role = Sentinel::findRoleBySlug('user');
        $role->users()->attach($user);
    }
}
