@extends('admin-layout.master')
@section('title', 'Student-index')
@section('content')

<div class="content-wrapper">

Tên:&nbsp; {{$student->name}}
<br>
Số điện thoại: &nbsp;{{$student->phone}}
<br>
Tuổi:&nbsp; {{$student->age}}
<br>
Giới tính:&nbsp; @if(($student->gender)==1)
            Nam
            @elseif(($student->gender)==2)
            Nữ
            @else
            Không hiển thị
            @endif
            <br>
Địa chỉ:&nbsp; {{$student->address}}
<br>
Trạng thái:&nbsp; {{($student->is_active) ? "Kích hoạt" : "Không kích hoạt"}}

</div>

@endsection
