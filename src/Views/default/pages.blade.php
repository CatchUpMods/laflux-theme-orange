@extends('Orange::default.home')

@section('content-main')
@section('status-messages')
    <div class="row" style="position: absolute; top: 3%; width: 100%;">
        <div class="col-md-4 col-md-offset-4">
            @if(Session::has('message'))
                <div class="message alert alert-success fade in  col-md-12 text-center">{{ Session::get('message') }}</div>
            @endif
            @if(Session::has('error'))
                <div class="message alert alert-danger fade in  col-md-12 text-center">{{ Session::get('error') }}</div>
            @endif
            @if(Session::has('warning'))
                <div class="message alert alert-warning  fade in col-md-12 text-center">{{ Session::get('warning') }}</div>
            @endif
        </div>
    </div>
@stop
@includeIf('Orange::partials.pagetitle',['title' => $page->title])
                @if($page->layout == 'full-width')

                    @yield('page-content')

                @endif
@stop
