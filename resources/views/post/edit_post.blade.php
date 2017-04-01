@extends('base')


@section('body_cont')
           
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
            
@endsection
