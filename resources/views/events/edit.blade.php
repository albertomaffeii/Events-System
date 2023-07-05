@extends('layouts.main')

@section('title', 'Editing: ' . $event->title)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editing your event</h1>
    <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-md-12 row">
            <div class="form-group col-md-6">
                <label for="actual-image">Actual Event image:</label>
                <input type="hidden" id="image" name="image" value="{{ $event->image }}">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview">

            </div>
            <div class="form-group col-md-6">
                <label for="image">New event image:</label>
                <p>To change the event image, click the button below and select a new image.<br></p>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
        </div>
        <div class="form-group">
            <label for="title">Event title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $event->title }}" placeholder="Event's name"  required>
        </div>
        <div class="form-group row col-md-12">
            <div class="form-group col-md-6">
                <label for="date">Event date:</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $event->date }}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="time">Event time:</label>
                <input type="time" class="form-control" id="time" name="time" value="{{ $event->time }}" required>
            </div>
        </div>
        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" id="city" name="city" class="form-control"value="{{ $event->city }}" placeholder="Event's place"  required>
        </div>
        <div class="form-group">
            <label for="private">Is this a private event?</label>
            <select name="private" id="private" class="form-control" required>
                <option>Select</option>
                <option value="0" {{ $event->private == 0 ? "selected='selected'" : ""}}>No</option>
                <option value="1" {{ $event->private == 1 ? "selected='selected'" : ""}}>Yes</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control" placeholder="What will happen at the event.">{{ $event->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="items">Add infrastructure items</label>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Air/Bus Tickets"> Air/Bus Tickets
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Open Bar"> Hotel
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Transfer"> Transfer
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Free Parking"> Free Parking
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Networking Areas"> Networking Areas
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Coffee Break"> Coffee Break
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Open Bar"> Open Bar
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Open Food"> Open Food
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Internet/WIFI"> Internet/WIFI
                    </div>
                    <div class="form-group">
                    <input type="checkbox" name="items[]" value="audiovisual equipment"> Audiovisual equipment
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Study material"> Study Material
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Gifts"> Gifts
                    </div> 
                </div>    
            </div>           
        </div>
        <div class="sendBtnBox">
            <input type="submit" class="btn btn-primary" value="Update Event">
        </div>
    </form>
</div>

@endsection