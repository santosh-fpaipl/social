<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = config('panel.roles');

        foreach($roles as $key => $role){
            Role::create(['guard_name' => 'web', 'name' => $role['name']]);
        }

        $data_manager = User::factory()->create([
                'name' => 'Data Manager',
                'email' => 'datamanager@machiddles.in',
            ]);

        $store_manager = User::factory()->create([
                'name' => 'Store Manager',
                'email' => 'storemanager@machiddles.in',
            ]);

        $support = User::factory()->create([
                'name' => 'Support',
                'email' => 'support@machiddles.in',
            ]);

        $role = Role::findByName($roles[0]['name']);
        $data_manager->assignRole($role);

        $role = Role::findByName($roles[1]['name']);
        $store_manager->assignRole($role);

        $role = Role::findByName($roles[2]['name']);
        $support->assignRole($role);


        // User::factory()->create([
        //     'name' => 'santosh singh',
        //     'email' => 'santosh@gmail.com',
        // ]);
        
    }
}
