@extends('magazin.index')
@section('content')

    <div class="container  m">
        <div class="row">
            <div class="col-12  col-sm-6  ">
                <img class="detali-image" src="{{$products->gallery}}">
            </div>
            <div class="col-12 col-sm-6 mb-4">
                <a href="/">Go Back</a>
                <h2>{{$products->title}}</h2>
                <h3>Price:{{$products->price}}</h3>
                <h4>Details:{{$products->description}}</h4>
                <h4>Category:{{$products->category}}</h4>
                <br>
                <form action="/add_to_cart" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$products->id}}">
                    <button class="btn btn-primary" >Add to <i class="bi bi-cart4"></i></button>
                </form>
                <br><br>
                <button class="btn btn-success">Buy Now</button>





            </div>
        </div>
    </div>
@endsection
