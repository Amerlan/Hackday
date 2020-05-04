@extends('template')
@section('content')
<div class="user-dashboard">
  <h2> Project Ideas</h2>
<div class="row">
  {{$data->links()}}
<div class="col-md-10 col-sm-10 col-xs-12 gutter">
@foreach($data as $elem)
@if ($elem->taken)
<div class="taken">
  <div class="sales">
  <h1><a href = "#">{{$elem->name}}</a></h1>
  <h5>{{$elem->subject}}</h5>
  <p>{{$elem->description}}</p>

  </div>
  <br><br>
</div>
<br>
@else
<div class="nottaken">
  <div class="sales">
<h1><a href = "#">{{$elem->name}}</a></h1>
<h5>{{$elem->subject}}</h5>
<p>{{$elem->description}}</p>
</div>
<br><br>
</div>
<br>
@endif
@endforeach
    </div>

  </div>
</div>
@endsection
