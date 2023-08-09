<?php

namespace App\Updaters;

use App\Enums\ItemEnum;
use App\Models\Item;
use App\Traits\SellInModifierTrait;

class SulfurasUpdater extends ItemUpdater
{
    use SellInModifierTrait;

    public function updateItem(Item $item): void
    {
        $item->quality = Item::LEGENDARY_QUALITY;
    }
}
