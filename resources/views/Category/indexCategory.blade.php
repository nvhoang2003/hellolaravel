@extends('master.masterpage')


@section('main')
    @include('partial.message')
    <div class="container oorange">
        <h1 class="display-4 text-center font-weight_bold ">Event Index</h1>
        <table class="table table-warning table-hover">
            <thead class="text-dark">
            <tr>
                <th scope="col">Eventname</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($event as $e)
                <tr>

                    <td>{{$e->eventname}}</td>
                    <td>{{$e->image}}</td>
                    <td>{{$e->description}}</td>
                    <td><a type="button" class="btn btn-success btn-sm"
                           href="{{route('Event.edit',['eventid'=>$e->eventid])}}"
                        >Update</a> </td>
                    <td><a type="button" class="btn btn-danger btn-sm"
                           href="{{route('Event.confirm',['eventid'=>$e->eventid])}}"
                        >Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('script')
@endsection
