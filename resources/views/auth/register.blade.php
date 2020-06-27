@extends("layout.master")
@section("title","Register")
@section("content")
<div class="container-fluid my-2">
	<div class="col-md-3">
		@include('sidebar')
	</div>
	<div class="col-md-8">
		<div class="card rounded-0">
			<form method="post">
				{{csrf_field()}}
			<div class="card-header text-center text-white bg-primary rounded-0 mb-1">
				<b><i class="fa fa-users"></i>&nbsp;Register To be Member!</b>				
			</div>
			@foreach($errors->all() as $error)
				<p class="alert alert-danger">{{$error}}</p>
			@endforeach
			<div class="card-body p-5 rounded-0">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control rounded-0" id="username" name="name" placeholder="UserName">
				</div>
				<div class="form-group">
					<label for="email">User Email</label>
					<input type="email" class="form-control rounded-0" id="email" name="email" placeholder="Email">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control rounded-0" id="password" name="password" placeholder="Password">
				</div>
				<div class="form-group">
					<label for="confirmpassword"> Confirm Password</label>
					<input type="password" class="form-control rounded-0" id="confirmpassword" name="password_confirmation" placeholder="Confirm Password">
				</div>
				<button class="btn btn-primary rounded-0 ">Register</button>
				<button class="btn btn-outline-primary rounded-0 ml-2">Cancel</button>
			</div>
			</form>

		</div>
	</div>
</div>
@endsection