<?php

namespace App\Traits;

use App\Enums\ItemEnum;
use App\Models\Item;

trait SellInModifierTrait
{
    private function decreaseSellIn(Item $item): void
    {
        if ($item->name !== ItemEnum::SULFURAS) {
            $item->sell_in--;
        }
    }
}
