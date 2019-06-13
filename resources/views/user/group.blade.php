@extends('user.master')
@section('title','Group')
@section('content')
<script>

</script>
<br><br>
<div class="container" style="background-color:white;">
  <!--<a href="{{route('user.index')}}" class="btn btn-success">home</a>-->
  <style>
  .braedcrumb{
      background-color: #0000FF;
      border-radius: 5px;
      height: 60px;
      color: #FFFFFF;
      margin-top: 3px;
  }
  </style>

  <div class="row">
        <nav class="col-lg-12"><br>
            <ul class="braedcrumb"><a href="group" style="font-size:30px;">
              Group</a></ul>
        </nav>
        <nav class="col-lg-6">
            <ul class="breadcrumb" ><a href="#" style="font-size:20px;">
              เรื่องทั่วไป</a></ul>
            <ul class="breadcrumb"><a href="#" style="font-size:20px;">
              คุยไปเรื่อย</a></ul>
            <ul class="breadcrumb"><a href="#" style="font-size:20px;">
              ความรู้ทั่วไป</a></ul>
            <ul class="breadcrumb"><a href="group/tp_programer" style="font-size:20px;">
              โปรแกรมเมอร์</a></ul>
            <ul class="breadcrumb"><a href="#" style="font-size:20px;">
              หนัง/ละคร</a></ul>
            <ul class="breadcrumb"><a href="#" style="font-size:20px;">
              ท่องเที่ยว</a></ul>
            <ul class="breadcrumb"><a href="#" style="font-size:20px;">
              เพลง/ดนตรี</a></ul>
            <ul class="breadcrumb"><a href="#" style="font-size:20px;">
              สมุนไพร</a></ul>

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
