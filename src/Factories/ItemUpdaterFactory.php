<?php

namespace App\Factories;

use App\Enums\ItemEnum;
use App\Models\Item;
use App\Updaters\AgedBrieUpdater;
use App\Updaters\BackstagePassesUpdater;
use App\Updaters\ItemUpdater;
use App\Updaters\RegularItemUpdater;
use App\Updaters\SulfurasUpdater;

class ItemUpdaterFactory
{
    public static function create(Item $item): ItemUpdater
    {
        switch ($item->name) {
            case ItemEnum::AGED_BRIE->value:
                return new AgedBrieUpdater();

            case ItemEnum::BACKSTAGE_PASSES->value:
                return new BackstagePassesUpdater();

            case ItemEnum::SULFURAS->value:
                return new SulfurasUpdater();

            default:
                return new RegularItemUpdater();
        }
    }
}
