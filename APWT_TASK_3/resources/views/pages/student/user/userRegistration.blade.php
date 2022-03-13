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
<form action="{{route('userRegistration')}}" class="form-group" method="post">

{{csrf_field()}}


<label for="">Name</label>

        <input type="text" name="name" id="" value="{{old('name')}}" class="form-control">

        @error('name')

            <span class="text-danger">{{$message}}</span>

        @enderror

        <br>



        <label for="">Email</label>

        <input type="email" name="email" id="" value="{{old('email')}}" class="form-control">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
        <br>
        <br>
        <label for="">Phone</label>
        <input type="text" name="phone" id="" value="{{old('phone')}}" class="form-control">
        @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
        <label for="">Address</label>
<input type="text" name="address" id="" value="{{old('address')}}" class="form-control">
@error('address')
    <span class="text-danger">{{$message}}</span>
@enderror
<br>
<label for="">password</label>
<input type="password" name="password" id="" value="{{old('password')}}" class="form-control">
@error('password')
    <span class="text-danger">{{$message}}</span>
@enderror
<br>
<input type="submit">
        <br>
</form>

</body>
</html>
@endsection