<?php
use App\Http\Controllers\CartController;
$total=0;
if(auth()->user()){
    $total=CartController::cartItem();
}
?>

<nav class="navbar  navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="/show">Orders</a></li>
                <li><a href="/list">Customer List</a></li>
                <li><a href="/url">Currencies</a></li>

            </ul>
            <form action="" method="" enctype="multipart/form-data" class="navbar-form navbar-left">
                @csrf
                <div class="form-group">
                    <input type="text" name="query" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                 @if(auth()->user())
                    <li><a href="/cartList"><i class="bi bi-cart4"></i>({{$total}})</a></li>
                @else
                    <li><a href="/login">Cart()</a></li>
                @endif
                @auth
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{auth()->user()['name']}} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/logout">Logout</a></li>

                        </ul>
                    </li>
             @endauth
                     @guest()
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                @endguest

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

