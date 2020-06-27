@extends('layout.master')
@section('title','View Category')
@section('content')
    <div class="container-fluid my-2">
        <div class="col-md-3">
            @include('backend.admin.sidebar')
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white text-center"><b>View Car Brand</b></div>
                <div class="card-body">
                    @if(session('status'))
                        <p class="alert alert-success alert-sm show">
                            {{session('status')}}
                            <button class="close" data-dismiss="alert">
                                <span>x</span>
                            </button>
                        </p>
                    @endif
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <th>ID</th>
                            <th>Brand</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach($cates as $cate)
                                <tr>
                                    <td>{{$cate->id}}</td>
                                    <td>{{$cate->brand}}</td>
                                    <td>{{$cate->created_at}}</td>
                                    <td>{{$cate->updated_at}}</td>
                                    <td class="text-center">
                                        <a href="{{action('admin\CategoryController@edit',$cate->id)}}"> <i class="fa fa-edit text-primary"></i></a>
                                        <a href="{{action('admin\CategoryController@destroy',$cate->id)}}"><i class="fa fa-trash text-danger ml-4"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection