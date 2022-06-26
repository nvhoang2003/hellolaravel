@extends('master.masterpage')

@section('main')
    @extends('master.masterpage')

    @section('main')
        <div class="row">
            <div class=" text-white bg-primary mr-3 mb-3 " style="max-width: 18rem;"   >
                <div class="card-header" >Admin</div>
                <div class="card-body">
                    <h5 class="card-title" >View admin</h5>

                </div>
            </div>
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                <div class="card-header">Customer</div>
                <div class="card-body">

                    <p class="card-text"> Customer</p>
                </div>
            </div>
        </div>

        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header">Cake</div>
            <div class="card-body">
                <h5 class="card-title">Success card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
            <div class="card-header">Event</div>
            <div class="card-body">
                <h5 class="card-title">Warning card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>

    @endsection

    @section('script')
    @endsection
@endsection

@section('script')
@endsection
