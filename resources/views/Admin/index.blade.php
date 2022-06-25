@extends('master.masterpage')

@section('main')
    <div class="container">
        <h1 class="display-4">Admin Index</h1>

        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                {{--        <th scope="col">#</th>--}}
                <th scope="col">Username </th>
                <th scope="col">Contact</th>
                <th scope="col">Email</th>
                <th scope="col">Password(Hash)</th>
                <th scope="col">&nbsp;</th>

            </tr>
            </thead>
            <tbody>
            @foreach($admin as $a)
                <tr>
                    <td>{{$a->username}}</td>
                    <td>{{$a->contact}}</td>
                    <td>{{$a->email}}</td>
                    <td>{{$a->pass_hash}}</td>
                    <td><a type="button" class="btn btn-success btn-sm"
                           href="{{route('Admin.edit', ['username' => $a->username])}}"
                        >Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection

@section('script')
@endsection
