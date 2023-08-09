<?php

namespace App\Updaters;

use App\Enums\ItemEnum;
use App\Models\Item;
use App\Traits\QualityModifierTrait;
use App\Traits\SellInModifierTrait;

class BackstagePassesUpdater extends ItemUpdater
{
    use QualityModifierTrait, SellInModifierTrait;

    public function updateItem(Item $item): void
    {
        $this->increaseQuality($item);

        if ($item->sell_in <= 10) {
            $this->increaseQuality($item);
        }

        if ($item->sell_in <= 5) {
            $this->increaseQuality($item);
        }

        if ($item->sell_in <= 0) {
            $item->quality = Item::MIN_QUALITY;
        }

        $this->decreaseSellIn($item);
    }
}
