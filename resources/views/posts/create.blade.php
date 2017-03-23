@extends('layouts.app')


@section('content')

   {{-- <form action="/posts" method="post">--}}
   {!! Form::open() !!}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="title" placeholder="Enter Title">
        <input type="submit" name="submit">

    </form>

@endsection