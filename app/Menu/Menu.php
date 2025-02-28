<?php

namespace App\Menu;

class Menu implements MenuInterface
{
    private  $name;
    private $items = [];
    private $childrenAttribute = [];
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function addItem($name, $options = [])
    {
        if (isset($this->items[$name])) {
            throw new \Exception("{$name} already exists");
        }
        $this->items[$name] = $options;
        return $this;
    }

    public function addItemBefore(string $beforeName, string $name, $options = [])
    {
        // TODO: Implement addItemBefore() method.
    }

    public function addItemAfter(string $afterName, string $name, $options = [])
    {
        // TODO: Implement addItemAfter() method.
    }

    public function addChildItem(string $id, string $name, $options = [])
    {
        // TODO: Implement addChildItem() method.
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function setChildrenAttribute(string $name, string $value)
    {
        // TODO: Implement setChildrenAttribute() method.
    }

    public function getChildrenAttribute()
    {
        // TODO: Implement getChildrenAttribute() method.
    }
}
