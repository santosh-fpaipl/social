<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Fpaipl\Panel\Models\Module;
use Fpaipl\Panel\Models\MenuGroup;
use Fpaipl\Panel\Models\Menu;


class MenuSeeder extends Seeder
{
    public function run(): void
    {
        MenuGroup::create([
            'name' => 'Root',
            'slug' => 'root',
            'icon' => 'bi bi-record-fill',
            'info' => 'Its a root group that contains direct menu links, such as dashboard',
            'active' => true,
        ]);
        
        Module::create([
            'name' => 'Base Module',
            'slug' => 'basemodule',
            'path' => '',
            'namespace' => '',
            'provider' => '',
            'active' => true,
        ]);

        Module::create([
            'name' => 'Marketing',
            'slug' => 'marketing',
            'path' => 'modules/marketing/src',
            'namespace' => 'Fpaipl/Marketing',
            'provider' => 'MarketingServiceProvider',
            'active' => true,
        ]);

        Menu::create([
            'module_id' => 1, 
            'group_id' => 1, 
            'parent_id' => null, 
            'name' => 'Dashboard',
            'icon' => 'bi bi-speedometer2',
            'route' => null, 
            'position' => 1,
            'access' => 'data_manager|store_manager|support'
        ]);

        Menu::create([
            'module_id' => 1, 
            'group_id' => 1, 
            'parent_id' => null, 
            'name' => 'Datasets',
            'icon' => 'bi bi-speedometer2',
            'route' => null, 
            'position' => 2,
            'access' => 'data_manager'
        ]);

        Menu::create([
            'module_id' => 1, 
            'group_id' => 1, 
            'parent_id' => null, 
            'name' => 'System Controls',
            'icon' => 'bi bi-shield-check',
            'route' => null, 
            'position' => 9,
            'access' => 'data_manager|store_manager|support'
        ]);

        Menu::create([
            'module_id' => 1, 
            'group_id' => 1, 
            'parent_id' => 3, 
            'name' => 'Users',
            'icon' => 'bi bi-speedometer2',
            'route' => 'users.index', 
            'position' => 10,
            'access' => 'data_manager|store_manager|support'
        ]);

        Menu::create([
            'module_id' => 1, 
            'group_id' => 1, 
            'parent_id' => 2, 
            'name' => 'Facebooks',
            'icon' => 'bi bi-speedometer2',
            'route' => 'facebooks.index', 
            'position' => 10,
            'access' => 'data_manager|store_manager|support'
        ]);
    }
}
