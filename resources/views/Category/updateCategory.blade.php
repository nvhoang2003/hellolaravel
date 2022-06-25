@extends('master.masterpage')

@section('main')
    <div class="container">
        <h1 class="display-4">Update Event</h1>
        @include('partial.error')

        <form action="{{route('Event.update', ['eventid' =>  $event->eventid])}}" method="post">
            @csrf

            <input type="hidden" name="eventid" value="{{old('eventid')?? $event->eventid}}">
            <div class="form-group">
                <label for="eventname" class="font-weight-bold">Eventname</label>
                <input type="text" class="form-control" id="eventname" name="eventname" value="{{old('eventname')?? $event->eventname}}">
            </div>

            <div class="form-group">
                <label for="image" class="font-weight-bold">Image</label>
            </div>
            <input type="file" name="image" id="image" />

            <div class="form-group">
                <label for="description" class="font-weight-bold">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{old('description')?? $event->description}}">
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
            <a href="{{route('Event.index')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
