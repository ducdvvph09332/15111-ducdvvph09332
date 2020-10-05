@extends('admin-layout.master')
@section('title', 'Student-edit')
@section('content')
@section('header', "Chỉnh sửa sinh viên $student->name")
<?php
$genders = [1 => 'Nam', 2 => 'Nữ', 0 => 'Không hiển thị'];
$is_active = [1 => 'Yes', 0 => 'No'];
?>
<div class="container">
    <form action="{{route('students.update', $student->id)}}" method="post" class="form-group">
        @csrf
        <input type="hidden" name="_method" value="PUT" id="">
        <label for="">Name</label>
        <input type="text" name="name" id="" class="form-control" value="{{$student->name}}">
        <label for="">Phone</label>
        <input type="text" name="phone" id="" class="form-control" value="{{$student->phone}}">
        <label for="">Age</label>
        <input type="text" name="age" id="" class="form-control" value="{{$student->age}}">
        <label for="">Địa chỉ</label>
        <input type="text" name="address" id="" class="form-control" value="{{$student->address}}">
        <label for="">Giới tính</label>
        <br>
        @foreach($genders as $key => $item)
        <input type="radio" name="gender" id="" value="{{$key}}" {{$student->gender==$key ? 'checked':''}}>{{$item}} &nbsp;
        @endforeach
        <br>
        <br>
        <label for="">Kích hoạt</label>
        @foreach($is_active as $key => $item)
        <input type="radio" name="is_active" value="{{$key}}" {{($student->is_active==$key) ? "checked" : ""}}>{{$item}} &nbsp;
        @endforeach
        <br>
        <input type="submit" name="" id="" class="btn btn-primary" value="Sửa">
    </form>
</div>

@endsection