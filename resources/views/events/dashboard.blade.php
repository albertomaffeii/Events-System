@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>My Events</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($events) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date</th>
                    <th scope="col">Name</th>
                    <th scope="col"># Participants</th>
                    <th scope="col" class="action" colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                    <tr>
                        <td scropt="row">{{ $loop->index +1 }}</td>
                        <td>{{ date('d/m/Y', strtotime($event->date)) }}</td>
                        <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                        <td>{{ count($event->users) }}</td>
                        <td class="action">
                            <a href="/events/edit/{{ $event->id }}" class="btn btn-info edit-btn">
                                <ion-icon name="create-outline"></ion-icon> Editar
                            </a>
                        </td>
                        <td>
                            <form action="/events/{{ $event->id }}" method="POST" >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-btn">
                                    <ion-icon id="trash-outline" name="trash-outline"></ion-icon> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach                
            </tbody>
        </table>
    @else
        <p>You have no events yet, <a href="/events/create">Create Events</a></p>
    @endif
</div>

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h2>Events I signed up for:</h2>
</div>

<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($eventsAsParticipant) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date</th>
                    <th scope="col">Name</th>
                    <th scope="col"># Participants</th>
                    <th scope="col" class="action" colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($eventsAsParticipant as $event)
                    <tr>
                        <td scropt="row">{{ $loop->index +1 }}</td>
                        <td>{{ date('d/m/Y', strtotime($event->date)) }}</td>
                        <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                        <td>{{ count($event->users) }}</td>
                        <td class="action">
                            <form action="/events/{{ $event->id }}" method="POST" >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-btn btn-sm">
                                    <ion-icon id="exit-outline" name="exit-outline"></ion-icon> Sair do Evento
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    @else
        <p>You haven't participated in any events yet, <a href="/">see all events!</a></p>
    @endif
</div>


@endsection