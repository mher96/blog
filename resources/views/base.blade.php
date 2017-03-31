@extends('layouts.app')

@section('content')    
    <div class="container-fluid">
        <div class="row content">
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
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <div class="col-sm-3 sidenav">

                @include('sidebar_cont')

            </div>
            <div class="col-sm-9">

                @yield('body_cont')
                
            </div>
        </div>
    </div>
    <footer class="container-fluid">
        <p>Footer Text</p>
    </footer>   
@endsection