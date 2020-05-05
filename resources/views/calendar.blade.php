@inject('calendar', 'App\Http\Controllers\SearchController')
@extends('template')
@section('content')
<div class="user-dashboard">
	<script src={{asset('js/poper.js')}}></script>
  <h2> Event calendar </h2>
<div class="row">
	<?php
	echo $calendar::create(date('m'), date('Y'))	
	 ?>
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/backbone.js/1.1.0/backbone-min.js"></script>
  </div>
</div>
@endsection
