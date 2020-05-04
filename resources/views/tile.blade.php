<x-dashboard-tile :position="$position" refresh-interval="10">
    @if($title)
        <h1 class="font-medium text-dimmed text-sm uppercase tracking-wide tabular-nums text-center">
            {{ $title }}
        </h1>
    @endif

    @if($data['metros']->isNotEmpty())
        <h2 class="text-xl font-bold tracking-wide">Tunnelbana</h2>
        @include('dashboard-sl-tile::tile-timetable', ['timeTable' => $data['metros']])
    @endif

    @if($data['buses']->isNotEmpty())
        <h2 class="text-xl font-bold tracking-wide mt-3">Buss</h2>
        @include('dashboard-sl-tile::tile-timetable', ['timeTable' => $data['buses']])
    @endif

    @if($data['trains']->isNotEmpty())
        <h2 class="text-xl font-bold tracking-wide mt-3">Pendeltåg</h2>
        @include('dashboard-sl-tile::tile-timetable', ['timeTable' => $data['trains']])
    @endif
</x-dashboard-tile>
