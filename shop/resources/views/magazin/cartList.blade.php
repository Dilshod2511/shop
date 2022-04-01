@extends('magazin.index')
@section('content')

    <div class="costum-product">

        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h3 class="h">Result to Products</h3>
                   <a href="/ordernow" class="btn-warning btn">Order Now</a>
                @foreach($products as $product)
                    <div class=" row trending-p ">
                        <div class="col-sm-3">
                                <img class="trending-image" src="{{$product->gallery}}" >
                        </div>
                        <div class="col-sm-4">
                                <div class="">
                                    <h3> {{$product->title}} </h3>
                                    <h5> {{$product->description}} </h5>
                                </div>
                        </div>
                        <div class="col-sm-3">
                       <a href="/remove/{{$product->cart_id}}"><button class="btn btn-warning">Remove to Cart</button></a>
                        </div>
                    </div>
                @endforeach
                <a href="/ordernow" class="btn-warning btn">Order Now</a>
            </div>
        </div>
    </div>
    @endsection

