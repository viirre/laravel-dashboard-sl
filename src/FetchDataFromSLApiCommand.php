<?php

namespace Robbens\SlTile;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class FetchDataFromSLApiCommand extends Command
{
    protected $signature = 'dashboard:fetch-sl-data';

    protected $description = 'Fetch data for SL tile';

    public function handle()
    {
        $this->info('Fetching SL data...');

        $siteId = config('dashboard.tiles.sl.site_id');
        $apiKey = config('dashboard.tiles.sl.api_key');
        $timeWindow = config('dashboard.tiles.sl.time_window') ?? 60;

        $endpoint = "https://api.sl.se/api2/realtimedeparturesV4.json?key={$apiKey}&siteid={$siteId}&timewindow={$timeWindow}";

        $response = Http::get($endpoint)->json()['ResponseData'];

        $data = [
            'metros' => $response['Metros'],
            'buses' => $response['Buses'],
            'trains' => $response['Trains'],
        ];

        MyStore::make()->setData($data);

        $this->info('All done!');
    }
}
