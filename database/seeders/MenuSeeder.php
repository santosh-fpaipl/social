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
            'name' => 'Promotion',
            'slug' => 'promotion',
            'path' => 'modules/promotion/src',
            'namespace' => 'Fpaipl/Promotion',
            'provider' => 'PromotionServiceProvider',
            'active' => true,
        ]);

        Module::create([
            'name' => 'Product',
            'slug' => 'product',
            'path' => 'modules/product/src',
            'namespace' => 'Fpaipl/Product',
            'provider' => 'ProductServiceProvider',
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
            'access' => 'data_manager|store_manager|support'
        ]);

        Menu::create([
            'module_id' => 3, 
            'group_id' => 1, 
            'parent_id' => 2, 
            'name' => 'Products',
            'icon' => 'bi bi-speedometer2',
            'route' => 'products.index', 
            'position' => 3,
            'access' => 'data_manager|store_manager|support'
        ]);

        Menu::create([
            'module_id' => 1, 
            'group_id' => 1, 
            'parent_id' => null, 
            'name' => 'Promotions',
            'icon' => 'bi bi-speedometer2',
            'route' => null, 
            'position' => 4,
            'access' => 'data_manager|store_manager|support'
        ]);

        Menu::create([
            'module_id' => 2, 
            'group_id' => 1, 
            'parent_id' => 4, 
            'name' => 'Metas',
            'icon' => 'bi bi-speedometer2',
            'route' => 'metas.index', 
            'position' => 5,
            'access' => 'data_manager|store_manager|support'
        ]);

        

        Menu::create([
            'module_id' => 4, 
            'group_id' => 1, 
            'parent_id' => null, 
            'name' => 'Marketings',
            'icon' => 'bi bi-speedometer2',
            'route' => null, 
            'position' => 6,
            'access' => 'data_manager|store_manager|support'
        ]);

        Menu::create([
            'module_id' => 4, 
            'group_id' => 1, 
            'parent_id' => 6, 
            'name' => 'Intimations',
            'icon' => 'bi bi-speedometer2',
            'route' => 'intimations.index', 
            'position' => 7,
            'access' => 'data_manager|store_manager|support'
        ]);

        Menu::create([
            'module_id' => 4, 
            'group_id' => 1, 
            'parent_id' => 6, 
            'name' => 'Offers',
            'icon' => 'bi bi-speedometer2',
            'route' => 'offers.index', 
            'position' => 8,
            'access' => 'data_manager|store_manager|support'
        ]);

        Menu::create([
            'module_id' => 4, 
            'group_id' => 1, 
            'parent_id' => 6, 
            'name' => 'Promotions',
            'icon' => 'bi bi-speedometer2',
            'route' => 'promotions.index', 
            'position' => 9,
            'access' => 'data_manager|store_manager|support'
        ]);

        Menu::create([
            'module_id' => 4, 
            'group_id' => 1, 
            'parent_id' => 6, 
            'name' => 'SendOffers',
            'icon' => 'bi bi-speedometer2',
            'route' => 'sendoffers.index', 
            'position' => 10,
            'access' => 'data_manager|store_manager|support'
        ]);

        Menu::create([
            'module_id' => 4, 
            'group_id' => 1, 
            'parent_id' => 6, 
            'name' => 'SendPromotions',
            'icon' => 'bi bi-speedometer2',
            'route' => 'sendpromotions.index', 
            'position' => 11,
            'access' => 'data_manager|store_manager|support'
        ]);
        

        Menu::create([
            'module_id' => 1, 
            'group_id' => 1, 
            'parent_id' => null, 
            'name' => 'System Controls',
            'icon' => 'bi bi-shield-check',
            'route' => null, 
            'position' => 12,
            'access' => 'data_manager|store_manager|support'
        ]);

        Menu::create([
            'module_id' => 1, 
            'group_id' => 1, 
            'parent_id' => 12, 
            'name' => 'Users',
            'icon' => 'bi bi-speedometer2',
            'route' => 'users.index', 
            'position' => 13,
            'access' => 'data_manager|store_manager|support'
        ]);
    }
}
