@extends('admin-layout.master')
@section('title', 'Student-index')
@section('content')
@section('header', 'Danh sách sinh viên')
<table class="table table-hover">
        <thead class="bg-primary text-white">
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->age}}</td>
                <td>
                    @if($item->gender==1)
                    Nam
                    @elseif($item->gender==2)
                    Nữ
                    @else
                    Không hiển thị
                    @endif
                </td>
                <td>{{$item->address}}</td>
                <td>{{$item->is_active==1 ? "Yes" : "No"}}</td>
                <td>
                    <a href="{{route('students.create')}}" class="btn btn-primary">Thêm</a>
                    <a href="{{route('students.show', $item->id)}}" class="btn btn-info">Chi tiết</a>
                    <a href="{{route('students.edit', $item->id)}}" class="btn btn-success">Sửa</a>
                    <form action="{{route('students.destroy', $item->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE" id="">
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
