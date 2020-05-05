@extends('template')
@section('content')
<div class="user-dashboard">
    <h1>Events</h1>
    <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-12 gutter">

            <div class="sales">
                <h2>Upcoming events</h2>
            </div>
            <br>
            @foreach($data as $elem)
            <div class="sales">
              <div>
                <h2><a href = {{ route('detail',['id' => $elem->id]) }}>{{$elem->title}}</a></h2>
                <br><br>
                <span>{{$elem->description}}</span>
                <div>
                    <p class='bottomright'>{{$elem->when}}</p>
                  </div>
            </div>
        </div>
        <br><br>
@endforeach
    </div>
</div>
{{$data->links()}}
<br><br><br>
</div>
@endsection
