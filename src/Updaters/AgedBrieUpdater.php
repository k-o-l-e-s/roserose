<?php

namespace App\Updaters;

use App\Models\Item;
use App\Traits\QualityModifierTrait;
use App\Traits\SellInModifierTrait;

class AgedBrieUpdater extends ItemUpdater
{
    use QualityModifierTrait, SellInModifierTrait;

    public function updateItem(Item $item): void
    {
        $this->increaseQuality($item);

        if ($item->sell_in <= 0) {
            $this->increaseQuality($item);
        }

        $this->decreaseSellIn($item);
    }
}
