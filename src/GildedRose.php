<?php

namespace App;

use App\Factories\ItemUpdaterFactory;
use App\Models\Item;

final class GildedRose
{
    public function updateQuality(Item $item): void
    {
        $updater = ItemUpdaterFactory::create($item);
        $updater->updateQuality($item);
    }

}
