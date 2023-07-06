@extends('layouts.main')

@section('title', 'Allsites IT - New Event')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Create your event</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Event image:</label>
            <input type="file" class="form-control-file" id="image" name="image" required>
        </div>
        <div class="form-group">
            <label for="title">Event:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Event's name"  required>
        </div>
        <div class="form-group row col-md-12">
            <div class="form-group col-md-6">
                <label for="date">Event date:</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="form-group col-md-6">
                <label for="time">Event time:</label>
                <input type="time" class="form-control" id="time" name="time" required>
            </div>
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
            <textarea name="description" cols="30" rows="10" id="description" class="form-control" placeholder="What will happen at the event."></textarea>
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
            <input type="submit" class="btn btn-primary" value="Create Event">
        </div>
    </form>
</div>

@endsection