@extends('user.master')
@section('title','topic: programmer')
@section('content')

<body style="text-align:center;">
  <a style="font-size:24px;">โปรแกรมเมอร์</a>

<br><br>
<div class="container" style="background-color:white;">
  <!--<a href="{{route('user.index')}}" class="btn btn-success">home</a>-->

  <div class="row">
        <nav class="col-lg-12"><br>
            <ul class="breadcrumb" style="color:blue;">
              <a href="group" style="font-size:30px;">Group </a>
              <a href="tp_programer" style="font-size:30px;">/Topic</a>
            </ul>
        </nav>
        <nav class="col-lg-12">
            <ul class="breadcrumb"><a href="tp_programer/clanguage" style="font-size:20px;">
              ภาษา C</a></ul>
            <ul class="breadcrumb"><a href="#" style="font-size:20px;">
              ภาษา Java</a></ul>
            <ul class="breadcrumb"><a href="#" style="font-size:20px;">
              ภาษา php</a></ul>
            <ul class="breadcrumb"><a href="#" style="font-size:20px;">
              ภาษา Sql</a></ul>
            <ul class="breadcrumb"><a href="#" style="font-size:20px;">
              ภาษา C#</a></ul>
            <ul class="breadcrumb"><a href="#" style="font-size:20px;">
              ภาษา HTML</a></ul>
            <ul class="breadcrumb"><a href="#" style="font-size:20px;">
              ภาษา JS</a></ul>
            <ul class="breadcrumb"><a href="#" style="font-size:20px;">
              ภาษา Python</a></ul>

              <ul class="pagination pagination-lg">
                <li><a href="tp_programer">1</a></li>
                <li><a href="topic2">2</a></li>
                <li><a href="#">3</a></li>

              </ul>
        </nav>

  </div>
</div>
</body>

@stop
