@extends('layouts.main')

@section('title', 'Allsites IT - New Event')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Create your event</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Event image:</label>
            <input type="file" class="form-control-file" id="image" name="image" requiired>
        </div>
        <div class="form-group">
            <label for="title">Event:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Event's name"  requiired>
        </div>
        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" id="city" name="city" class="form-control" placeholder="Event's place"  required>
        </div>
        <div class="form-group">
            <label for="private">Is this a private event?</label>
            <select name="private" id="private" class="form-control" required>
                <option>Select</option>
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control" placeholder="What will happen at the event."></textarea>
        </div>
        <div class="sendBtnBox">
            <input type="submit" class="btn btn-primary" value="create event">
        </div>
    </form>
</div>

@endsection