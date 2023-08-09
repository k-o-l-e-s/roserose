<?php

namespace App\Updaters;

use App\Models\Item;
use App\Traits\QualityModifierTrait;
use App\Traits\SellInModifierTrait;

class RegularItemUpdater extends ItemUpdater
{
    use QualityModifierTrait, SellInModifierTrait;

    public function updateItem(Item $item): void
    {
        $this->decreaseQuality($item);

        if ($item->sell_in <= 0) {
            $this->decreaseQuality($item);
        }

        $this->decreaseSellIn($item);
    }
}
