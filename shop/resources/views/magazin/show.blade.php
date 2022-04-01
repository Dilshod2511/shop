@extends('magazin.index')
@section('content')

    <div class="costum-product">

        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h3 class="h">My Orders</h3>

                @foreach($orders as $order)
                    <div class=" row trending-p ">
                        <div class="col-12 col-sm-6">
                            <img class="trending-image" src="{{$order->gallery}}" >
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="">
                                <h2>Name: {{$order->title}} </h2>
                                <h5>Address: {{$order->address}}</h5>
                                <h5>Payment Method: {{$order->payment_method}}</h5>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    @endsection
