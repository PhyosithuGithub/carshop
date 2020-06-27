@extends('layout.master')
@section('title','Create Car')
@section('content')
<div class="container-fluid">
    <div class="col-md-3">
        @include('backend.admin.sidebar')
    </div>
    <div class="col-md-8">
        <div class="card rounded-0">
            <div class="card-header bg-primary text-white text-center rounded-0"><strong>Create Car</strong></div>
            <div class="card-body rounded-0 p-5">
                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
                @if(session('status'))
                <p class="alert alert-success">{{session('status')}}</p>
                @endif
                <form method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{-- start form row --}}
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="brand">Brand</label>
                                <select name="category_id" id="brand" class="form-control rounded-0">
                                    @foreach($cates as $cate)
                                        <option value="{{$cate->id}}">{{$cate->brand}}</option>
                                    @endforeach                               
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="year">Released Year</label>
                                <input type="date" class="form-control rounded-0" id="year" name="year">
                            </div>
                        </div>
                    </div>
                    {{-- end form row --}}
                    {{-- create row --}}
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="model">Model</label>
                                <input type="text" class="form-control rounded-0" id="model" name="model" placeholder="Model">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="type">Type</label>
                                <input type="text" class="form-control rounded-0" name="type" id="type" placeholder="Car Type">
                            </div>
                        </div>
                    </div>
                    {{-- end row --}}
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="color">Color</label>
                                <input type="text" class="form-control rounded-0" id="color" name="color" placeholder="Color">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" class="form-control rounded-0" id="price" name="price" placeholder="Price">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="mileage">Mileage</label>
                                <input type="text" class="form-control rounded-0" id="mileage" name="mileage" placeholder="Mileage">
                            </div>
                        </div>
                    </div>
                    {{-- star form row --}}
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fuel">Fuel Type</label>
                                <input type="text" class="form-control rounded-0" id="fuel" name="fuel" placeholder="Fuel Type">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="seat">Seat</label>
                                <input type="number" class="form-control rounded-0" id="seat" name="seat" placeholder="Type Seat">
                            </div>
                        </div>
                    </div>
                    {{-- end form row --}}
                    <div class="form-group">
                        <label for="file">Image</label>
                        <input type="file" id="file" name="file[]" multiple>
                    </div>
                    <button class="btn btn-primary rounded-0">Create</button>
                    <button class="btn btn-outline-primary rounded-0 ml-2">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection