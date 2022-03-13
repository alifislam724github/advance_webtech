@extends('layout.app')
@section('content')
<form action="{{route('registration')}}" class="form-group" method="post">
{{csrf_field()}}
    <label for="">Student Name</label>
    <input type="text" class="form-control" name="name" value="{{old('name')}}">
    @error('name')
    <span>{{$message}}</span>
    @enderror
    <br>
    <label for="">ID</label>
    <input type="text" class="form-control" name="id" value="{{old('id')}}">
    @error('id')
    <span>{{$message}}</span>
    @enderror
    <br>
    <label for="">Password</label>
    <input type="password" class="form-control" name="phoneno" value="{{old('password')}}">
    @error('password')
    <span>{{$message}}</span>
    @enderror
    <br>
    <label for="">Email</label>
    <input type="text" class="form-control" name="email" value="{{old('email')}}">
    @error('email')
    <span>{{$message}}</span>
    @enderror
    <br>
    <label for="">Phone no</label>
    <input type="text" class="form-control" name="phoneno" value="{{old('phoneno')}}">
    @error('phoneno')
    <span>{{$message}}</span>
    @enderror
    <br>
    <input type="submit">
</form>

</body>
</html>
@endsection