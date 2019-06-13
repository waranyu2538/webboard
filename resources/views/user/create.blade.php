@extends('user.master')
@section('title','ManageDB')
@section('content')
<div class="container">
<div class="row">
   <div class="col-md-12"><br/>
      <h3 align="center">Add Data Now</h3></br>

      <div align="left"><a href="{{route('user.index')}}" class="btn btn-success">Home</a><div><br/>
		  @if(count($errors) > 0)
			   <div class="alert aler-danger">
			   <ul>
				       @foreach($errors->all() as $error)
					     <li>{{$error}}</li>
				@endforeach
			</ul>
			</div>
		@endif

		@if(\Session::has('success'))
			<div class="alert alert-success">
			<p>{{ \Session::get('success') }}</p>
			</div>
		@endif

      <form method="post" action="{{url('user')}}">
         {{csrf_field()}}
         <div class="form-group">
            <input type="text" name="users" class="form-control" placeholder="input users"/>
         </div>
         <div class="form-group">
            <input type="text" name="posts" class="form-control" placeholder="input posts"/>
         </div>
         <div class="form-group">
            <input type="text" name="comments" class="form-control" placeholder="input comments"/>
         </div>
         <div class="form-group">
            <input type="text" name="groups" class="form-control" placeholder="input groups"/>
         </div>
         <div class="form-group">
            <input type="text" name="images" class="form-control" placeholder="input images"/>
         </div>
         <div class="form-group">
            <input type="submit" class="btn btn-primary" value="save" />
         </div>
      </form>
      <input type="button" value="click" onclick="msg()"/>
   </div>
</div>
</div>
@endsection
