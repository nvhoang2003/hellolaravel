@extends('master.masterpage')



@section('main')
  <div class="container">
    <h1 class="display-4">Cake Index</h1>
    <table class="table table-hover">
      <thead class="thead-dark">
      <tr>
        <th scope="col">CakeName</th>
        <th scope="col">flavor</th>
        <th scope="col">price</th>
        <th scope="col">expiry</th>
        <th scope="col">image</th>
        <th scope="col">size</th>
        <th scope="col">event</th>

        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
      </tr>
      </thead>
      <tbody>
      @foreach($cake as $c )
          @php
              $c->price = number_format($c->price, 0, ',', '.');
              $c->price .= "VND";
          @endphp
        <tr>
          <td>{{$c->cakename}}</td>
          <td>{{$c->flavor}}</td>
          <td>{{$c->price}}</td>
          <td>{{$c->expiry}}</td>
          <td>{{$c->image}}</td>
          <td>{{$c->size}}</td>
          <td>{{$c->event}}</td>

          <td><a type="button" class="btn btn-success btn-sm"
                 href="{{route('Cake.edit',['cakeid'=>$c->cakeid])}}"
            >Update</a> </td>
          <td><a type="button" class="btn btn-danger btn-sm"
                 href="{{route('Cake.confirm',['cakeid'=>$c->cakeid])}}"
            >Delete</a></td>
          <td><a type="button" class="btn btn-warning btn-sm"
                 href="{{route('Cake.show',['cakeid'=>$c->cakeid])}}"
            > Show </a></td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
@endsection

@section('script')
@endsection
