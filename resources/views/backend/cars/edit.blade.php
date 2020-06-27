@extends('layout.master')
@section('title','Create Car')
@section('content')
<div class="container-fluid">
    <div class="col-md-3">
        @include('backend.admin.sidebar')
    </div>
    <div class="col-md-8">
        <div class="card rounded-0">
            <div class="card-header bg-primary text-white text-center rounded-0"><strong>Update Car</strong></div>
            <div class="card-body rounded-0 p-5">
                @if(session('status'))
                    <p class="alert alert-success show">
                        {{session('status')}}
                        <button class="close" data-dismiss="alert">
                            <span>x</span>
                        </button>
                    </p>
                @endif
                <form method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{-- start form row --}}
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="brand">Brand</label>
                                <select name="category_id" id="brand" class="form-control rounded-0"> 
                                    <option value="{{$cate->brand}}">{{$cate->brand}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="year">Released Year</label>
                                <input type="text" class="form-control rounded-0" id="year" name="year" value="{{$car->year}}">
                            </div>
                        </div>
                    </div>
                    {{-- end form row --}}
                    {{-- create row --}}
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="model">Model</label>
                                <input type="text" class="form-control rounded-0" id="model" name="model" value="{{$car->model}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="type">Type</label>
                                <input type="text" class="form-control rounded-0" name="type" id="type" value="{{$car->type}}">
                            </div>
                        </div>
                    </div>
                    {{-- end row --}}
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="color">Color</label>
                                <input type="text" class="form-control rounded-0" id="color" name="color" value="{{$car->color}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" class="form-control rounded-0" id="price" name="price" value="{{$car->price}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="mileage">Mileage</label>
                                <input type="text" class="form-control rounded-0" id="mileage" name="mileage" value="{{$car->mileage}}">
                            </div>
                        </div>
                    </div>
                    {{-- star form row --}}
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fuel">Fuel Type</label>
                                <input type="text" class="form-control rounded-0" id="fuel" name="fuel" value="{{$car->fuel}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="seat">Seat</label>
                                <input type="number" class="form-control rounded-0" id="seat" name="seat" value="{{$car->seat}}">
                            </div>
                        </div>
                    </div>
                    {{-- end form row --}}
                    <button class="btn btn-primary rounded-0">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection