@extends('layouts.app')

@section('sidebar')    
  @include('sidebar')
@endsection
@section('content')
  <div class="col-sm-9">
				
				<h4><small>{{$post->category->user->name}} Posts</small></h4>
				<hr>
				
				<h2>{{$post->title}}</h2>
				<h5><span class="glyphicon glyphicon-time"></span>{{$post->category->name}}</h5>
				<h5><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span></h5><br>
				<div class="ed_del">
					<button type="button" class="btn btn-primary">Primary</button>
					<button type="button" class="btn btn-danger">Danger</button>
				</div>
				<p>{{$post->desc}}</p>
		      <br><br>
    </div>
  </div>
</div>
@endsection
