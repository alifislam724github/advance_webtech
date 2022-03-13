
@extends('layout.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route('contactUs')}}" class="form-group" method="post">
{{csrf_field()}}
    <label for="">Email</label>
    <input type ="text"  class="form-control" name="email" id="" value="{{old('email')}}">
    @error('email')
    <span>{{$message}}</span>
    @enderror
    <br>
    <br>
    <label for="">Phone no</label>
    <input type="text" class="form-control" name="phoneno" id="" value="{{old('phoneno')}}">
    @error('phoneno')
    <span>{{$message}}</span>
    @enderror
    <br>
    <br>
    <label for="">Message</label>
    <input type="text"  class="form-control" name="message" id="" value="{{old('message')}}">
    @error('message')
    <span>{{$message}}</span>
    @enderror
    <br>
    <input type="submit">
    <br>
    <br>
</form>
</body>
</html>
@endsection