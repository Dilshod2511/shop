@extends('magazin.index')

@section('content')

    <div class="container ">
        <div class="row">
            <div class="col-sm-5 col-sm-offset-4 for ">
                <h1>Login</h1>
                @if(session('status'))
                    <div class="bg-danger p-4 rounded text-white text-center">
                        {{session('status')}}
                    </div>

                    @endif
                <form action="/login" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control  @error('password') border border-danger @enderror"
                               name="email" id="exampleInputEmail1" placeholder="Email">
                        @error('email')
                        <span class="invalid-feedback text-danger"  role="alert">
                                        <p>{{ $message }}</p>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control  @error('password') border border-danger @enderror"
                               id="exampleInputPassword1" placeholder="Password">
                        @error('password')
                        <span class="invalid-feedback text-danger"  role="alert">
                                        <p>{{ $message }}</p>
                                    </span>
                        @enderror
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Check me out
                        </label>
                    </div>
                    <button type="submit" class="btn btn-warning">Sign in</button>
                </form>
            </div>
        </div>
    </div>


@endsection




