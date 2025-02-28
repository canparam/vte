<?php

namespace App\Menu;

class MenuFactory implements MenuFactoryInterface
{
    private $items = [];

    public function createMenu(string $name)
    {
        $menu = new Menu($name);
        $this->items[$name] = $menu;
        return $menu;
    }

    public function getMenu(string $name)
    {
        return $this->items[$name] ?? null;
    }

    public function getAllMenu()
    {
        return $this->items;
    }

}
