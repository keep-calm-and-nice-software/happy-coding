<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Item;
use App\GildedRose;

class GildedRoseTest extends TestCase
{
    public function testFoo()
    {
        $items      = [new Item("foo", 0, 0)];
        $gildedRose = new GildedRose($items);

        $gildedRose->updateQuality();

        $this->assertEquals("fixme", $items[0]->name);
    }
}
