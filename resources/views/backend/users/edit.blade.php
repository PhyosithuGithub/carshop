@extends('layout.master')
@section('title','User Edit Role')
@section('content')
    <div class="container-fluid my-2">
        <div class="col-md-3">
            @include('backend.admin.sidebar')
        </div>
        <div class="col-md-8">
            <div class="card rounded-0">
                <div class="card-header text-center text-white bg-primary"><b>Edit User Roles</b></div>
                <div class="card-body p-5">
                    @if(session('status'))
                <p class="alert alert-success">{{session('status')}}</p>
                    @endif
                    <form method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="username">User Name</label>
                            <input type="text" class="form-control rounded-0" id="name" name="name" value="{!!$user->name!!}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control rounded-0" id="email" name="email" value="{!!$user->email!!}">
                        </div>
                        <div class="form-group">
                            <label for="role"> User Roles</label>
                            <select name="role[]" id="role" class="form-control rounded-0" multiple>
                                @foreach($roles as $role)
                                    <option value="{{$role->name}}"
                                        @if(in_array($role->name,$selectedRoles))
                                            selected="selected"
                                        @endif
                                        >{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn-primary rounded-0">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection