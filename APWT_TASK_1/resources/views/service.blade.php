@extends('layout.app')
<html>
@section('content')
    <h1>Service</h1>

    <ul>
        @foreach($f1 as $key)
        <li>
            {{$key}}
        </li>
        @endforeach
    </ul>
    @endsection
</html>