@extends('layouts.app')

@section('sidebar')    
  @include('sidebar')
@endsection
@section('content')
  <div class="col-sm-9">
				
				<h4><small>{{$post->category->user->name}} Posts</small></h4>
				<hr>
				
				<h2>{{$post->title}}</h2>
				<h5><span class="glyphicon glyphicon-time"></span>{{$post->updated_at}}</h5>
				@if($post->category->user->id == Auth::user()->id)
				<div style="margin-bottom: 20px;overflow: hidden; " class="ed_del">
					{{Form::open(['class' => 'left', 'url' => url('home/'.$post->id.'/edit'), 'method' => 'get'])}}
						{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}
					{{Form::close()}}
					{{Form::open(['class' => 'left', 'url' => url('home/'.$post->id), 'method' => 'delete'])}}
						{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
					{{Form::close()}}
					
				</div>
				@endif
				<p>{{$post->desc}}</p>
		      <br><br>
    </div>
  </div>
</div>
@endsection
