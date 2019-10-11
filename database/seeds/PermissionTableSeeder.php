<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;
use App\User;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = Permission::defaultPermissions();
 
 
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        $this->command->info('Default Permissions added.');

        // Ask to confirm to assign admin or user role
        if ($this->command->confirm('Create Roles for user, default is admin and user? [y|N]', true)) {
            // Ask for roles from input
            $roles = $this->command->ask('Enter roles in comma separate format.', 'SuperAdmin, Admin, User');
            // Explode roles
            $rolesArray = explode(',', $roles);
            // add roles
            foreach($rolesArray as $role) {
                $role = Role::firstOrCreate(['name' => trim($role)]);
                
                if( $role->name == 'SuperAdmin' ) {
                    // assign all permissions to admin role
                    $role->permissions()->sync(Permission::all());
                    $this->command->info('SuperAdmin will have full rights');
                } 
                else if( $role->name == 'Admin' ) {
                    // assign all permissions to admin role
                    $role->permissions()->sync(Permission::all());
                    $this->command->info('Admin will have full rights');
                } 
                else {
                    // for others, give access to view only
                    $role->permissions()->sync(Permission::where('name', 'LIKE', 'view_%')->get());
                }
                // create one user for each role
                // $this->createUser($role);
            }
            $this->command->info('Roles ' . $roles . ' added successfully');
        } else {
            Role::firstOrCreate(['name' => 'User', 'name' => 'Admin', 'name' => 'SuperAdmin']);
            $this->command->info('By default, User role added.');
        }
    }

    // private function createUser($role)
    // {
    //     $user = factory(User::class)->create();
    //     $user->assignRole($role->name);

    //     if( $role->name == 'Admin' ) {
    //         $this->command->info('Admin login details:');
    //         $this->command->warn('Username : '.$user->email);
    //         $this->command->warn('Password : "secret"');
    //     }
    // }
}
