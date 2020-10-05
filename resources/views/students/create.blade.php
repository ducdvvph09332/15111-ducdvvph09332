@extends('admin-layout.master')
@section('title', 'Student-create')
@section('content')
@section('header', "Thêm sinh viên")
<?php
$genders = [1 => 'Nam', 2 => 'Nữ', 0 => 'Không hiển thị'];
$is_active = [1 => 'Yes', 0 => 'No'];
?>
<div class="container">
    <form action="{{route('students.store')}}" method="post" class="form-group">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name" id="" class="form-control">
        <label for="">Phone</label>
        <input type="text" name="phone" id="" class="form-control">
        <label for="">Age</label>
        <input type="text" name="age" id="" class="form-control">
        <label for="">Địa chỉ</label>
        <input type="text" name="address" id="" class="form-control"">
        <label for="">Giới tính</label>
        <br>
        @foreach($genders as $key => $item)
        <input type="radio" name="gender" id="" value="{{$key}}">{{$item}} &nbsp;
        @endforeach
        <br>
        <br>
        <label for="">Kích hoạt</label>
        <br>
        @foreach($is_active as $key => $item)
        <input type="radio" name="is_active"  {{ $key===1 ? 'checked':''}} value="{{$key}}">{{$item}} &nbsp;
        @endforeach
        <br>
        <input type="submit" name="" id="" class="btn btn-primary" value="Thêm">
    </form>
</div>

@endsection