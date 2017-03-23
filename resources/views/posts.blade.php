   












    <div class="col-sm-9">
		@foreach (Auth::user()->categories as $category)
			@foreach ($category->posts as $post)
				@if($post->title)
				<h4><small>{{$category->name}} Posts</small></h4>
				<hr>
				@endif
				<h2>{{$post->title}}</h2>
				<h5><span class="glyphicon glyphicon-time"></span> Your Post, Sep 27, 2015.</h5>
				<h5><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span></h5><br>
				<p>{{$post->desc}}</p>
		      <br><br>
			@endforeach
		@endforeach
    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>Footer Text</p>
</footer>