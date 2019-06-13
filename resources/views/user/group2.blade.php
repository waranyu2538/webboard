@extends('user.master')
@section('title','Group')
@section('content')

<br><br>
<div class="container" style="background-color:white;">
  <!--<a href="{{route('user.index')}}" class="btn btn-success">home</a>-->

  <div class="row">
        <nav class="col-lg-12"><br>
            <ul class="breadcrumb" style="color:blue;"><a href="#" style="font-size:30px;">
              Group</a></ul>
        </nav>
        <nav class="col-lg-6">
            <ul class="breadcrumb" style="color:blue;"><a href="#" style="font-size:20px;">
              แม่บ้าน</a></ul>
            <ul class="breadcrumb"><a href="#" style="font-size:20px;">
              หางานทำ</a></ul>
            <ul class="breadcrumb"><a href="#" style="font-size:20px;">
              start up</a></ul>
            <ul class="breadcrumb"><a href="tppgm" style="font-size:20px;">
              เล่นหุ้น</a></ul>
            <ul class="breadcrumb"><a href="#" style="font-size:20px;">
              เกาหลี</a></ul>
            <ul class="breadcrumb"><a href="#" style="font-size:20px;">
              ญี่ปุ่น</a></ul>
            <ul class="breadcrumb"><a href="#" style="font-size:20px;">
              อุตสาหกรรม</a></ul>
            <ul class="breadcrumb"><a href="#" style="font-size:20px;">
              เบเกอรี่</a></ul>

              <ul class="pagination pagination-lg">
                <li><a href="group">1</a></li>
                <li><a href="group2">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
              </ul>
        </nav>

  </div>
</div>

@stop
