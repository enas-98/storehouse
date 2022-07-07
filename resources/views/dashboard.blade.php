@extends('layout')
  
@section('content')
<style>
.card {
  /* The image used */

  /* Full height */

  /* Center and scale the image nicely */
  background-position: center;
  background-color: #E6E6FA;
 padding: -15px 20px;
 padding-top: 20px;
}
</style>
<div  class="bg"  >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('welcome') }}</div>
  
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
  
                   great!! You are Logged In
                </div>
            </div>
        </div>
    </div>
</div>
@endsection