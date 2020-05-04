@foreach($timeTable as $time)
    <div class="flex py-1 {{ $loop->last ? '' : 'border-b' }}">
        <div>{{ $time['LineNumber'] }} &nbsp;{{ $time['Destination'] }}</div>

        <div class="ml-auto">{{ $time['DisplayTime'] }}</div>
    </div>
@endforeach
