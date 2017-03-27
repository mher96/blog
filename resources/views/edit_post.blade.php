@extends('layouts.app')

@section('sidebar')    
  @include('sidebar')
@endsection
@section('content')
        <div class="col-sm-9">
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
           
        	{{ Form::open(array('url' => url('home/'.$post->id), 'method' => 'put','class' => 'post_form')) }}

            <div class="form-group">
                {{ Form::label('name', 'Title') }}
                {{ Form::text('title', $post->title, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('name', 'Desc') }}
                {{ Form::textarea('desc', $post->desc, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                    <select required name="category_id" class="form-control">
                @foreach (Auth::user()->categories as $category)
                        @if($category->id == $post->category->id)
                        <option selected="selected" value="{{$category->id}}">{{$category->name}}</option>
                        @else
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endif
                @endforeach
                    </select>
                    </div>
            	{{ Form::submit('Edit Post!', array('class' => 'btn btn-primary')) }}
                
        	{{ Form::close() }}
            
        </div>
    </div>
</div>
@endsection
