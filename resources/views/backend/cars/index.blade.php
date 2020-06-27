@extends('layout.master')
@section('title','Cars')
@section('content')
<div class="container-fluid my-2">
    <div class="col-md-3">
        @include('backend.admin.sidebar')
    </div>
    <div class="col-md-9">
        <div class="card">
            <div class="card-header text-white text-center bg-primary"><strong>View Car Info</strong></div>
            <div class="card-body">
                @if(session('status'))
                    <p class="alert alert-success show">
                        {{session('status')}}
                        <button class="close" data-dismiss="alert">
                            <span>x</span>
                        </button>
                    </p>
                @endif
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Model</th>
                            <th>Year</th>
                            <th>Type</th>
                            <th>Color</th>
                            <th>Price</th>
                            <th>Mileage</th>
                            <th>Fuel</th>
                            <th>Seat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cars as $car)
                            <tr>
                                <td>{{$car->id}}</td>
                                <td>{{$car->model}}</td>
                                <td>{{$car->year}}</td>
                                <td>{{$car->type}}</td>
                                <td>{{$car->color}}</td>
                                <td>{{$car->price}}</td>
                                <td>{{$car->mileage}}</td>
                                <td>{{$car->fuel}}</td>
                                <td>{{$car->seat}}</td>
                                <td class="text-center">
                                   <a href="{{action('admin\CarController@edit',$car->id)}}"> <i class="fa fa-edit"></i></a>
                                   <a href="{{action('admin\CarController@destroy',$car->id)}}"><i class="fa fa-trash text-danger ml-4"></i></a>
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