<?php

namespace App\Menu;

interface MenuInterface
{
    CONST CHILD_ITEMS = 'childItems';
    public function getName(): string;

    public function addItem($name, $options = []);
    public function addItemBefore(string $beforeName,string $name, $options = []);
    public function addItemAfter(string $afterName,string $name, $options = []);
    public function addChildItem(string $id, string $name, $options = []);
    public function getItems(): array;
    public function setChildrenAttribute(string $name, string $value);
    public function getChildrenAttribute();
}
