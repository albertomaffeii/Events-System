@extends('layouts.main')

@section('title', 'Allsites IT Events Dashboard')

@section('content')

<div id="search-container" class="col-md-12">
    <p></p>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Search Event ...">
    </form>
</div>

<div id="events-container" class="col md 12">
    @if($search)
        <h2>Search for: {{ $search }}</h2>
        <p><a href="/">Ver Todos</a></p>
    @else
        <h2>Next Events</h2>
        <p class="subtitle">See the events of the next days</p>
    @endif

    <div id="cards-container" class="row">
        @foreach($events as $event)
            <div class="card col-md-3">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                <div class="card-bord">
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <div class="card-date">{{ date('d/m/Y', strtotime($event->date)) }} at {{ date('h:m', strtotime($event->time)) }}</div>
                    <p class="card-participants">{{ count($event->users) }} Participants</p>
                    <p class="card-participants">{{ $event->city }}</p>
                    <a href="/events/{{ $event->id }}" class="btn btn-primary">Read more</a>
                </div>
            </div>
        @endforeach
        
        @if(count($events) == 0 && $search)
            <p>There are no events scheduled for the search key {{ $search }}!</p>
        @elseif(count($events) == 0)
            <p>There are no events scheduled for the next few days.</p>
        @endif
    </div>
</div>


@endsection