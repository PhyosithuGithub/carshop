@extends('layout.master')
@section('title','Show Cart')
@section('content')
<div class="container-fluid my-2">
    <div class="row">
        <div class="col-md-3">
           @include('sidebar')
        </div>
        <div class="col-md-8">
          <!-- Show Cart Start Here-->
          <table id="cart" class="table table-hover table-condensed">
            <div class="card-header bg-dark text-light">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Shipping cart
                <div class="clearfix"></div>
            </div>
            <thead>
                <tr>
                    <th style="width:50%">Product</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Total Price</th>
                    <th style="width:10%"></th>
                </tr>
            </thead>
            
            @foreach($products as $product)
            <tbody>
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-2 hidden-xs">
                                <img src="{{asset('/uploads/'.unserialize($product->image)[0])}}" alt="image" class="img-responsive"/>
                            </div>
                            <div class="col-sm-10">
                                <h4 class="nomargin">{{$product->model}}</h4>
                                <p>Color: {{$product->color}}</p>
                                <p>Fuel: {{$product->fuel}}</p>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{$product->price}}</td>
                    <td data-th="Quantity">
                        <input type="number" class="form-control text-center" value="1">
                    </td>
                    <td data-th="Subtotal" class="text-center">${{$product->price}}</td>
                    <td class="actions" data-th="">
                        <a href="#"><button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button></a>								
                    </td>
                </tr>
            </tbody>
            @endforeach

            <tfoot>
                <tr>
                    <td><a href="{{url('/')}}" class="btn btn-warning btn-sm">Continue Shopping</a></td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-center"><strong>Grand Total $1.99</strong></td>
                    @if(Auth::check())
                        <td><a href="{{url('car/checkout')}}" class="btn btn-success btn-block btn-sm">Checkout</a></td>
                    @else
                <td><a href="{{url('/')}}" class="btn btn-success btn-sm">SignIn To Checkout</a></td>
                    @endif
                </tr>
            </tfoot>
        </table>
          <!-- Show Cart End Here-->
        </div>
    </div>
</div>
@endsection