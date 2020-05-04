<?php

namespace Robbens\SlTile;

use Illuminate\View\View;
use Livewire\Component;

class SlTileComponent extends Component
{
    public string $position;

    public function mount(string $position)
    {
        $this->position = $position;
    }

    public function render() : View
    {
        return view('dashboard-sl-tile::tile', [
            'title' => config('dashboard.tiles.sl.site_label'),
            'data' => MyStore::make()->getData(),
        ]);
    }
}
