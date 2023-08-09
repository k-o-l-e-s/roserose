<?php

namespace App\Models;

final class Item
{
    public $name;
    public $sell_in;
    public $quality;
    // added to check only one update by day
    public $updated_at;

    const MAX_QUALITY = 50;
    const MIN_QUALITY = 0;
    const LEGENDARY_QUALITY = 80;

    function __construct($name, $sell_in, $quality)
    {
        // TODO: data validation
        $this->name = $name;
        $this->sell_in = $sell_in;
        $this->quality = $quality;
    }

    public function __toString()
    {
        return "{$this->name}, {$this->sell_in}, {$this->quality}, {$this->updated_at}";
    }

}