@extends('magazin.index')
@section('content')
    <div class="costum-product">
        <div class="col-sm-10">
            <table  class="table">
                <tbody>
                <tr>
                    <td>Amout</td>
                    <td>${{$total}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$ 0</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>$ 10</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td> $ {{$total+10}}</td>
                </tr>
                </tbody>
            </table>
            <form action="/noworder" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group ">
                    <input class="form-control" type="text" name="name" placeholder="Enter name" >
                    @error('name')
                    <span class="invalid-feedback text-danger" role="alert">   <p>{{ $message }}</p>  </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="family" placeholder="Enter family" >
                    @error('family')
                    <span class="invalid-feedback text-danger" role="alert">   <p>{{ $message }}</p>  </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="phone" placeholder="Enter phone" >
                    @error('phone')
                    <span class="invalid-feedback text-danger" role="alert">   <p>{{ $message }}</p>  </span>
                    @enderror
                </div>
                <div class="form-group">
                   <textarea class="form-control" name="address" type="text" placeholder="Enter address here"></textarea>
                    @error('address')
                    <span class="invalid-feedback text-danger" role="alert">   <p>{{ $message }}</p>  </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Payment Method</label><br><br>
                     <input type="radio" value="cash" name="paynet">  <span>Online Payment</span><br><br>
                    <input type="radio" value="cash" name="paynet">  <span>EMI Payment</span><br><br>
                    <input type="radio" value="cash" name="paynet">  <span> Payment on Delivery</span><br>
                    @error('paynet')
                    <span class="invalid-feedback text-danger" role="alert">   <p>{{ $message }}</p>  </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-default">Order Now</button>
            </form>
        </div>



    </div>
@endsection

