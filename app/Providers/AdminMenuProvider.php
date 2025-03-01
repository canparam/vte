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

//        $menu->createMenu('Tin tức / Sự kiện')
//            ->addItem('Danh sách bài viết',[
//                'route' => 'admin.users',
//                'icon' => 'fe fe-folder',
//            ])
//            ->addItem('Thêm mới',[
//                'route' => 'admin.users',
//                'icon' => 'fe fe-plus',
//            ])
//            ;

        $menu->createMenu('Hệ thống')
            ->addItem('Thành viên',[
                'route' => 'admin.system.users',
                'icon' => 'fe fe-users',
                'extraRoute' => [
                    'admin.system.users',
                    'admin.system.users.edit',
                    'admin.system.users.create'
                ]
            ]);
//            ->addItem('Cài đặt',[
//                'route' => 'admin.settings',
//                'icon' => 'fe fe-sliders',
//            ]);

    }
}
