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
                    <div class="card-date">2023/10/10</div>
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-participants">100 Participants</p>
                    <a href="/events/{{ $event->id }}" class="btn btn-primary">Read more</a>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection