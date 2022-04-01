 @extends('magazin.master')
 @section('content')
     <div class="container ">
         <div class="row">
          <div class="col-sm-5 col-sm-offset-4 for ">
                              <h1>Login</h1>
              <form action="/login" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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


