@extends('Orange::default.home')
@section('content-main')

@if(sizeof($page))
    {!! $page->content !!}
@else
    @includeIf('Orange::default.homecontent')
@endif

@stop
