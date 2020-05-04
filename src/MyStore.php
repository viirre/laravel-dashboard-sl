<?php

namespace Robbens\SlTile;

use Illuminate\Support\Collection;
use Spatie\Dashboard\Models\Tile;

class MyStore
{
    private Tile $tile;

    public static function make()
    {
        return new static();
    }

    public function __construct()
    {
        $this->tile = Tile::firstOrCreateForName('slTile');
    }

    public function setData(array $data): self
    {
        $this->tile->putData('realtimedeparturesV4', $data);

        return $this;
    }

    public function getData(): Collection
    {
        return collect($this->tile->getData('realtimedeparturesV4'))
            ->mapWithKeys(function ($value, $key) {
                $defaultLimit = 5;
                $configLimit = config('dashboard.tiles.sl.transport_modes.'.$key);
                $limit = $configLimit === false ? 0 : ($configLimit ?? $defaultLimit);

                return [$key => collect($value)->take($limit)];
            });
    }
}
