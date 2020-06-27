@extends("layout.master")
@section("title","Home")
@section("content")
    <div class="container-fluid my-2">
        <div class="row">
            <div class="col-md-3">
               @include('sidebar')
            </div>
            <div class="col-md-9">
                <p class="my-0 mb-3">
                    Availabe All Brand
                </p>
                @foreach($cars as $car)
                {{-- Product start --}}
                <div class="col-md-3">
                    <div class="card rounded-0 mb-2">
                        <div class="card-header text-center rounded-0"><b>{{$car->model}}</b></div>
                        {{-- @foreach(unserialize($car->image) as $img) --}}
                            <img src="{{asset('/uploads/'.unserialize($car->image)[0])}}" alt="Image" width="214px" height="180px">
                        {{-- @endforeach --}}
                        <div class="card-body rounded-0">
                            <p class="text-center"><b>${{$car->price}}</b></p>
                            <a href="{{action('HomeController@add',$car->id)}}" class="btn btn-info btn-sm rounded-0">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                            <a href="{{action('HomeController@showDetail',$car->id)}}" class="btn btn-info btn-sm float-right rounded-0">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Product End --}}
                @endforeach
            </div>
        </div>
    </div>
@endsection