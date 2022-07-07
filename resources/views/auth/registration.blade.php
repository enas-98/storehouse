@extends('layout')
  
@section('content')
<html>
<head>
 <style type="text/css">
/* set form background colour*/
form{
background-color:white;
}
 input
{
  box-shadow:inset 0 0 5px 5px #D8BFD8;
}
.btn {
  background-color: #800080;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn {
  background-color: #800080;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.card-header{
    color: white;

  background-color: #800080;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 10.9;
}
</style>
   

<main class="login-form">

  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Register</div>
                  <div class="card-body">
  
                      <form action="{{ route('register.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="name" class="form-control" name="name" required autofocus>
                                  @if ($errors->has('name'))
                                      <span class="text-danger">{{ $errors->first('name') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
  <div class="form-group row">
                              <label for="phone_numbre" class="col-md-4 col-form-label text-md-right">phone_numbre</label>
                              <div class="col-md-6">
                                  <input  id="phone_numbre" class="form-control" name="phone_numbre" required autofocus>
                                  @if ($errors->has('phone_numbre'))
                                      <span class="text-danger">{{ $errors->first('phone_numbre') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" required>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <div class="col-md-6 offset-md-4">
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember"> Remember Me
                                      </label>
                                  </div>
                              </div>
                          </div>
  
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn">
                                  Register
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection