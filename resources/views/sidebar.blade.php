<div class="container">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          {{Form::open(['url' => url('category'), 'method' => 'put', 'class' => 'form_modal'])}}
            {{ Form::label('name', 'Category Name') }}
            {{ Form::text('name', 'Your cat name', array('class' => 'form-control mod')) }}
            {{ Form::submit('Edit!', array('class' => 'btn btn-primary')) }}
          {{ Form::close() }}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<!-- Modal for create -->
<div class="container">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal_1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          {{Form::open(['url' => url('category'), 'method' => 'post', 'class' => 'form_add_catl'])}}
            {{ Form::label('name', 'Category Name') }}
            {{ Form::text('name', 'Your cat name', array('class' => 'form-control mod_add')) }}
            {{ Form::submit('Add!', array('class' => 'btn btn-primary')) }}
          {{ Form::close() }}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>



<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
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
    </div>
<!-- <div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>John's Blog</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Home</a></li>
        <li><a href="#section2">Friends</a></li>
        <li><a href="#section3">Family</a></li>
        <li><a href="#section3">Photos</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div> -->
          {{Form::open(['url' => url('category'), 'method' => 'delete', 'class' => 'form_del_catl'])}}
            
            {{ Form::submit('Add!', array('class' => 'del_cat btn btn-primary')) }}
          {{ Form::close() }}