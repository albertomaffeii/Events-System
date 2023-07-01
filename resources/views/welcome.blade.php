@extends('layouts.main')

@section('title', 'Allsites IT Events Home')

@section('content')

<div id="search-container" class="col-md-12">
    <p></p>
    <form action="" method="post">
        <input type="text" id="search" name="search" class="form-control" placeholder="Search Event ...">
    </form>
</div>

<div id="events-container" class="col md 12">
    <h2>Next Events</h2>
    <p class="subtitle">See the events of the next days</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
            <div class="card col-md-3">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                <div class="card-bord">
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <div class="card-date">{{ date('d/m/Y', strtotime($event->date)) }} at {{ date('h:m', strtotime($event->time)) }}</div>
                    <p class="card-participants">100 Participants</p>
                    <p class="card-participants">{{ $event->city }}</p>
                    <a href="/events/{{ $event->id }}" class="btn btn-primary">Read more</a>
                </div>
            </div>
        @endforeach
        
        @if(count($events) == 0)
            <p>There are no events scheduled for the next few days.</p>
        @endif
        
    </div>
</div>


@endsection