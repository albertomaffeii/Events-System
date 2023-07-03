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
                        <td>0</td>
                        <td class="action"><a href="#">Editar</a></td>
                        <td class="action"><a href="#">Deletar</a></td>
                    </tr>
                @endforeach                
            </tbody>
        </table>
    @else
        <p>You have no events yet, <a href="/events/create">Create Events</a></p>
    @endif

    



</div>


@endsection