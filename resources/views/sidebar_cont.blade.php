      @include('modals')
      <h4>John's Blog</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active">
          <a href="{{url('home')}}">My Posts</a>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">My Categories
          <span class="caret"></span></a>
          <ul style="width: 300px;" class="dropdown-menu">
            @foreach (Auth::user()->categories as $category)
              <li >
                <a style="float: left;width: 220px;" href="{{url('category/'.$category->id)}}">{{$category->name}} </a>
                <span data-id="{{$category->id}}" style="float: right; margin-right: 10px" class="glyphicon glyphicon-trash del_cat_i"></span>
                  <span data-id="{{$category->id}}" data-toggle="modal" data-target="#myModal" style="float: right; margin-right: 10px;" class="glyphicon glyphicon-pencil edit_cat"></span>
              </li>
            @endforeach
          </ul>
        </li>
        <li><a href="{{url('home/all')}}">All Posts</a></li>
        <li><a href="{{url('home/create')}}">Add Post</a></li>
        <li><a class="add_post" href="" data-toggle="modal" data-target="#myModal_1">Add Category</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    {{Form::open(['url' => url('category'), 'method' => 'delete', 'class' => 'form_del_catl'])}}        
      {{ Form::submit('Add!', array('class' => 'del_cat btn btn-primary')) }}
    {{ Form::close() }}