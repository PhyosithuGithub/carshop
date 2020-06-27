@extends('layout.master')
@section('title','Create User Role')
@section('content')
<div class="containter-fluid my-2">
    <div class="col-md-3">
        @include('backend.admin.sidebar')
    </div>
    <div class="col-md-8">
        <div class="card rounded-0">
            <div class="card-header text-center bg-primary text-white"><b>Create User Role</b> </div>
            <div class="card-body p-5">
                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
                @if(session('status'))
                  <p class="alert alert-success">{{session('status')}}</p>
                @endif
               <form action="#" method="POST">
               {{csrf_field()}}
                   <div class="form-group">
                       <label for="name">Role Name</label>
                       <input type="text" class="form-control rounded-0" id="name" name="name" placeholder="Name">
                   </div>
                   <button class="btn btn-primary rounded-0">Create</button>
               </form>
            </div>
        </div>
    </div>
</div>
@endsection