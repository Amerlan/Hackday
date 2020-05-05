@extends('template')
@section('content')
<div class="user-dashboard">
  <h2> Organizations of our University</h2>
<div class="row">
<div class="col-md-10 col-sm-10 col-xs-12 gutter">
@foreach($data as $elem)
  <div class="sales">
    <div class="img-circle">
<img src="https://psv4.userapi.com/c848032/u182568964/docs/d13/d6ee289fa41b/Resurs_2_4x.png?extra=tgv2c4OuT9TI9ZoW0wFBZxUUIgYSQz7rMM0rMn9_9lubO4Co16o_E5OUfXA3IZhTpF2lfwy7pVHHYsvfMCHe7iOy8IyBLyCrkHc8TX0YmqUed42phMVUonY6I3xqOaH2Z6sHLXlDVGB4IyldZVFc7aE" alt="tiger-logo" class='img-org'>
    </div>

<h1><a href = "#">{{$elem->name}}</a></h1>
<p>{{$elem->description}}</p>

</div>
<br><br>
@endforeach
    </div>

  </div>
  {{$data->links()}}
</div>
@endsection
