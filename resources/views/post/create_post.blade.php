@extends('base')


@section('body_cont')
   
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
            
@endsection
