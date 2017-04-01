@extends('base')

@section('body_cont')
  
		@foreach ($posts as $post)	
			<h4><small>{{$post->category->name}} Posts</small></h4>
			<hr>
			<h2>{{$post->title}}</h2>
			<h5><span class="glyphicon glyphicon-time"></span> Your Post, {{$post->created_at}}.</h5>
			<!-- <h5><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span></h5><br> -->
			<p>
				{{substr($post->desc, 0, 300)}} <a href="{{url('home/'.$post->id)}}" style="color: blue;font-size: 18px">More...</a>
			</p>
	      	<br><br>
		@endforeach
		{{$posts->links()}}
@endsection


