@extends('master.masterpage')

@section('main')

        @include('partial.helo')
        <div class="row">
            <div class=" text-white bg-primary mr-3 mb-3 text-center row_card" style="width: 25rem;"   >
                <div class="card-body">
                    <a href="{{route('admin.index')}}" class="text-dark display-4 m-4">View Admin</a>
                    <br>
                    <img src="{{asset('/storage/images/logo/'.'admin.png')}}" alt="" height="150" width="200" class="ml-5" >
                </div>


            </div>
            <div class="card text-white bg-danger mb-3 text-center" style="width: 25rem;">
                <div class="card-body ">
                    <a href="{{route('Cus.index')}}" class="text-dark display-4 text-center">Customer</a>
                    <img src="{{asset('/storage/images/logo/'.'customer.jpg')}}" alt="" height="150" width="200" class="ml-5" >
                </div>
            </div>
        </div>

        <div class="row">
            <div class=" text-white bg-success mr-3 mb-3 text-center row_card" style="width: 25rem;"   >
                <div class="card-body">
                    <a href="{{route('Event.index')}}" class="text-dark display-4 m-4">View Event</a>
                    <br>
                    <img src="{{asset('/storage/images/logo/'.'event.png')}}" alt="" height="150" width="200" class="ml-5" >
                </div>


            </div>
            <div class="card text-white bg-warning mb-3 text-center" style="width: 25rem;">
                <div class="card-body">
                    <a href="{{route('Cake.index')}}" class="text-dark display-4 m-4">View Cake</a>
                    <img src="{{asset('/storage/images/logo/'.'cake.png')}}" alt="" height="150" width="200" class="ml-5" >
                </div>
            </div>
        </div>


@endsection




@section('script')
@endsection
