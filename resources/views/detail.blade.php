@extends('layout.master')
@section('title','Car Detail')
@section('content')
    <div class="container-fluid my-2">
        <div class="col-md-3">
            @include('sidebar')
        </div>
        <div class="col md-9">
            <div class="row ml-3 bg-muted">
                <div class="col-md-3">
                    <img src="{{asset('/uploads/'.unserialize($car->image)[0])}}" alt="img" width="220px" height="210px">
                </div>
                <div class="col-md-9">
                    <table class="table">
                        <thead>
                            <strong><p>{{$car->model}}</p></strong>
                        </thead>
                        <tbody class="text-muted">
                            <tr> <td>Year:</td><td>{{$car->year}}</td> </tr>
                            <tr> <td>Type:</td><td>{{$car->type}}</td> </tr>
                            <tr> <td>Color:</td><td>{{$car->color}}</td> </tr>
                            <tr> <td>Price:</td><td>${{$car->price}}</td> </tr>
                            <tr> <td>Mileage:</td><td>{{$car->mileage}}</td> </tr>
                            <tr> <td>Fuel:</td><td>{{$car->fuel}}</td> </tr>
                            <tr> <td>Seat:</td><td>{{$car->seat}}</td> </tr>
                            <tr> <td>Created_at:</td><td>{{$car->created_at}}</td> </tr>
                            <tr> <td>Updated_at:</td><td>{{$car->updated_at}}</td> </tr>
                            <tr>
                                <td> <a href="{{action('HomeController@add',$car->id)}}"><button class="btn btn-success btn-sm">Add To Cart</button></a></td>
                            </tr>
                        </tbody>
                    </table>
                   
                </div>
            </div>
        </div>
    </div>
@endsection