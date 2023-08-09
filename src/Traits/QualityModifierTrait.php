<?php

namespace App\Traits;

use App\Enums\ItemEnum;
use App\Models\Item;

trait QualityModifierTrait
{
    private function increaseQuality(Item $item): void
    {
        if ($item->quality < Item::MAX_QUALITY) {
            $item->quality++;
        }
    }

    private function decreaseQuality(Item $item): void
    {
        if ($item->quality > Item::MIN_QUALITY) {
            $item->quality--;
        }
    }

}