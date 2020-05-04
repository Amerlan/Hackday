@extends('template')
@section('content')
<div class="user-dashboard">
  <h2> Startups </h2>
<div class="row">
  {{$data->links()}}
<div class="col-md-10 col-sm-10 col-xs-12 gutter">
@foreach($data as $elem)

  <div class="sales">
  <h1><a href = "#">{{$elem->name}}</a></h1>
  <p>{{$elem->description}}</p>
  <p class='bottomright'>{{$elem->founder}} </p>
  </div>
  <br><br>
@endforeach
    </div>

  </div>
</div>
@endsection
