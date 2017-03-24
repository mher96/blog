@extends('layouts.app')

@section('sidebar')    
  @include('sidebar')
@endsection
@section('content')
            @if (session('success'))
                <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{session('error') }}
                </div>
            @endif
        <div class="col-sm-9">
           
        	{{ Form::open(array('url' => 'home', 'method' => 'post','class' => 'post_form')) }}

            <div class="form-group">
                {{ Form::label('name', 'Title') }}
                {{ Form::text('title', 'title', array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('name', 'Desc') }}
                {{ Form::textarea('desc', 'desc', array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                    <select name="category_id" class="form-control">
                @foreach (Auth::user()->categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
                    </select>
                    </div>
            	{{ Form::submit('Add the Post!', array('class' => 'btn btn-primary')) }}
                
        	{{ Form::close() }}
            
        </div>
    </div>
</div>
@endsection
