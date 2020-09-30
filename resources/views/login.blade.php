@extends('student-layout.master')
@section('title')
@section('header','login header')
@section('navbar','login navbar')
@section('main')
<form action="{{route('post-login')}}" method="POST">
    @csrf
    <label for="">Email</label>
    <input type="text" name="username" id="">
    <br>
    <label for="">Password</label>
    <input type="password" name="password" id="">
    <button type="submit">Submit</button>
</form>
@endsection
@section('footer','login footer')
</body>

</html>