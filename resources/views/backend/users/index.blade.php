@extends('layout.master')
@section('title','View Users')
@section('content')
    <div class="container-fluid my-2">
        <div class="col-md-3">
            @include('backend.admin.sidebar')
        </div>
        <div class="col-md-8 ">
                <div class="card">
                    <div class="card-header text-center text-white bg-primary"><b>View All Users</b></div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="thead-dark text-center">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>created_at</th>
                                    <th>updated_at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->created_at}}</td>
                                        <td>{{$user->updated_at}}</td>
                                    <td class="text-center"><a href="{{action('admin\UserController@edit',$user->id)}}"><i class="fa fa-edit text-info"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
@endsection