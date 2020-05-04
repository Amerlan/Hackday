@extends('template')
@section('content')
<div class="user-dashboard">
    <h1>Conferences</h1>
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12 gutter">

            <div class="sales">
                <h2>Upcoming conferences</h2>

            </div>
            @foreach($data as $elem)
            <div class="sales">
              <div>
                <h2><a href = '#'>{{$elem->title}}</a></h2>
                <br>

                <img src = '{{$elem->image}}'  class="img-conf">
                <br>
                <p>{{$elem->description}}</p>
                <p>{{$elem->location}}</p>
                <p class='bottomright'>{{$elem->date}}</p>

            </div>
        </div>
@endforeach
    </div>
</div>
{{$data->links()}}
</div>
@endsection
