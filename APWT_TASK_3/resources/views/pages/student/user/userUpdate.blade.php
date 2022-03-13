@extends('layout.app')

@section('content')

<h2>Update Information</h2>

<form action="{{route('userUpdate')}}" class="form-group" method="post">

    <!-- Cross Site Request Forgery-->

    {{csrf_field()}}

    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

        <label for="">ID</label>

        <input type="text" name="id" id="" value="{{$user->id}}" class="form-control" readonly>

        @error('name')

            <span class="text-danger">{{$message}}</span>

        @enderror
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

        <br>
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

@endsection