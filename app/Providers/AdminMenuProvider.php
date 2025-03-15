<?php

namespace App\Providers;

use App\Menu\MenuBuilder;
use App\Menu\MenuFactory;
use Illuminate\Support\ServiceProvider;

class AdminMenuProvider extends ServiceProvider
{
    public function boot()
    {
        /** @var MenuFactory $menu */
        $menu = $this->app->get('cnv.menu.factory');

        $menu->createMenu('Bài viết')
            ->addItem('Bài viết', [
                'route' => 'admin.posts',
                'icon' => 'fe fe-folder',
                'extraRoute' => [
                    'admin.posts',
                    'admin.posts.edit',
                    'admin.posts.create',
                ]
            ])
            ->addItem("Danh mục", [
                'route' => 'admin.categories',
                'icon' => 'fe fe-folder',
                'extraRoute' => [
                    'admin.categories',
                    'admin.categories.create',
                    'admin.categories.edit'
                ]
            ])
            ->addItem("Trang", [
                'route' => 'admin.pages',
                'icon' => 'fe fe-folder',
                'extraRoute' => [
                    'admin.pages',
                    'admin.pages.create',
                    'admin.pages.edit'
                ]
            ])
        ;


        $menu->createMenu('Hệ thống')
            ->addItem('Thành viên', [
                'route' => 'admin.system.users',
                'icon' => 'fe fe-users',
                'extraRoute' => [
                    'admin.system.users',
                    'admin.system.users.edit',
                    'admin.system.users.create'
                ]
            ])
            ->addItem('Cài đặt', [
                'route' => 'admin.system.settings',
                'icon' => 'fe fe-sliders',
                'extraRoute' => [
                    'admin.system.settings',
                ]
            ]);

    }
}
