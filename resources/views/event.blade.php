@extends('template')
@section('content')
<div class="user-dashboard">
                    <h1>Event detail</h1>
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-12 gutter">
                            <div class="sales">
                            <h1 class="fortitle">{{$data[0]->title}}</h1>
                            <div>
                              <i class="fas fa-desktop topright_img"></i>
                              <i class="fas fa-users topright_img"></i>
                            </div>
                            <div>
                              <p class="fordesc">{{$data[0]->description}}</>
                            </div>
                            <p class="bottomright">{{$data[0]->when}}</p>
                          </div>
                    </div>
            </div>
    </div>
@endsection
