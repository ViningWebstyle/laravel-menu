<?php

namespace RSpeekenbrink\LaravelMenu\Tests;

use RSpeekenbrink\LaravelMenu\Menu;
use RSpeekenbrink\LaravelMenu\MenuItem;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    /** @var Menu */
    protected $menu;

    public function setUp(): void
    {
        parent::setUp();

        $this->menu = new Menu();
    }

    protected function assertMenuCount(int $expectedCount)
    {
        $this->assertCount($expectedCount, $this->menu->getMenuItems());
    }

    protected function assertMenuItemEquals($menuItem, string $name, array $attributes)
    {
        $this->assertInstanceOf(MenuItem::class, $menuItem);
        $this->assertEquals($name, $menuItem->getName());
        $this->assertEquals($attributes, $menuItem->getAttributes());
    }
}
