<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>John's Blog</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active">
          <a href="">My Posts</a>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">My Categories
          <span class="caret"></span></a>
          <ul style="width: 300px;" class="dropdown-menu">
            @foreach (Auth::user()->categories as $category)
              <li >
                <a style="float: left;width: 220px;" href="colection{{$category->id}}">{{$category->name}} 
                  
                </a>
                <span style="float: right; margin-right: 10px" class="glyphicon glyphicon-trash"></span>
                  <span style="float: right; margin-right: 10px;" class="glyphicon glyphicon-pencil"></span>
              </li>
            @endforeach
          </ul>
        </li>
        <li><a href="#section2">My Categories</a></li>
        <li><a href="#section2">All Posts</a></li>
        <li><a href="{{url('home/create')}}">Add Post</a></li>
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