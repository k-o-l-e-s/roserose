<?php

namespace App\Updaters;

use App\Models\Item;

abstract class ItemUpdater
{
    const DATE_FORMAT = 'Y-m-d';

    abstract public function updateItem(Item $item): void;

    public function updateQuality(Item $item): void
    {
        if ($this->isUpdatedToday($item)) return;

        $this->updateItem($item);

        $this->setUpdatedNow($item);
    }


    protected function setUpdatedNow(Item $item): void
    {
        $item->updated_at = date(self::DATE_FORMAT);
    }

    public function isUpdatedToday(Item $item): bool
    {
        return $item->updated_at == date(self::DATE_FORMAT);
    }

}
