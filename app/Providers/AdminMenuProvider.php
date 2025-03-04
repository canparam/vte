<?php

namespace App\Providers;

use App\Menu\MenuBuilder;
use App\Menu\MenuFactory;
use Illuminate\Support\ServiceProvider;

class AdminMenuProvider extends ServiceProvider
{
    public function boot(){
        /** @var MenuFactory $menu */
        $menu = $this->app->get('cnv.menu.factory');

        $menu->createMenu('Bài viết')
            ->addItem('Danh sách bài viết',[
                'route' => 'admin.posts',
                'icon' => 'fe fe-folder',
                'extraRoute' => [
                    'admin.posts'
                ]
            ])
            ->addItem('Thêm mới',[
                'route' => 'admin.posts.create',
                'icon' => 'fe fe-plus',
                'extraRoute' => [
                    'admin.posts.create',
                ]
            ])
            ;

        $menu->createMenu('Hệ thống')
            ->addItem('Thành viên',[
                'route' => 'admin.system.users',
                'icon' => 'fe fe-users',
                'extraRoute' => [
                    'admin.system.users',
                    'admin.system.users.edit',
                    'admin.system.users.create'
                ]
            ])
            ->addItem('Cài đặt',[
                'route' => 'admin.system.settings',
                'icon' => 'fe fe-sliders',
                'extraRoute' => [
                    'admin.system.settings',
                ]
            ]);

    }
}
