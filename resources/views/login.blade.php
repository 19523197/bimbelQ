@extends('layout.main')

@section('container')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">

<div class="row justify-content-center mt-5 px-5">
    <div class="col-md-4">
        <main class="form-signin">

          @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
              {{ session('$success') }}
            </div>
          @endif

          

            @if(session()->has('LoginError'))
            <div class="alert alert-danger" role="alert">
              {{ session('LoginError') }}
            </div>
            @endif

            <div class="row justify-content-center">
              <img src="{{ asset('img/logo.png') }}" alt="" class="img-fluid w-50">
            </div>
            
            <form action="/login" method="post">
              @csrf
          
              <label for="">Email</label>
              <div class="form-floating">
                
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror mb-3" id="email"  value="{{ old('email') }}" placeholder="Email Address" autofocus required>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              
              <label for="">Password</label>
              <div class="form-floating">
                
                <input type="password" name="password" class="form-control" id="email" placeholder="Password" required>
              </div>
          
              
              
              <button class="w-100 btn btn-lg btn-success mt-3 mx-auto" type="submit">Login</button>
              
            </form>
           
          </main>
    </div>
</div>


@endsection