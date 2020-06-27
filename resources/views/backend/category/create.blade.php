@extends('layout.master')
@section('title','Create Category')
@section('content')
    <div class="container-fluid my-2">
        <div class="col-md-3">
            @include('backend.admin.sidebar')
        </div>
        <div class="col-md-8">
            <div class="card rounded-0">
                <div class="card-header rounded-0 text-white text-center bg-primary">
                    <b>Create Category</b>
                </div>
                <div class="card-body rounded-0 p-5">
                    @foreach($errors->all() as $error)
                    <p class="alert alert-danger show">
                        {{$error}}
                        <button class="close" data-dismiss="alert">
                          <span>x</span>
                        </button>
                    </p>
                    @endforeach
                    @if(session('status'))
                        <p class="alert alert-success show">
                            {{session('status')}}
                            <button class="close" data-dismiss="alert">
                                <span>x</span>
                            </button>
                        </p>
                    @endif
                    <form method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="brand">Brand</label>
                            <input type="text" class="form-control rounded-0" id="brand" name="brand" placeholder="Car Brand">
                        </div>
                        <button class="btn btn-primary rounded-0">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection