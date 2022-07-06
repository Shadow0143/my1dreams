{{--  @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  --}}



<!doctype html>
<html lang="en">
    <head>
        <title>My 1 Dreams </title>
    
        <!-- Favicon icon -->
        <link rel="icon" href="{{ asset('extra/libraries\assets\images\favicon.ico') }}" type="image/x-icon">
        <!-- Google font-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
        <!-- Required Fremwork -->
        <link rel="stylesheet" type="text/css" href="{{ asset('extra/libraries\bower_components\bootstrap\css\bootstrap.min.css') }}">
        <!-- radial chart.css -->
        <link rel="stylesheet" href="{{ asset('extra/libraries\assets\pages\chart\radial\css\radial.css') }}" type="text/css" media="all">
        <!-- feather Awesome -->
        <link rel="stylesheet" type="text/css" href="{{ asset('extra/libraries\assets\icon\feather\css\feather.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('extra/libraries\bower_components\bootstrap\css\bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('extra/libraries\assets\icon\themify-icons\themify-icons.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('extra/libraries\assets\icon\icofont\css\icofont.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('extra/libraries\assets\icon\feather\css\feather.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('extra/libraries\assets\pages\j-pro\css\demo.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('extra/libraries\assets\pages\j-pro\css\font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('extra/libraries\assets\pages\j-pro\css\j-pro-modern.css') }}">
    
        <!-- Data Table Css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('extra/libraries\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('extra/libraries\assets\pages\data-table\css\buttons.dataTables.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('extra/libraries\bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css') }}">
        <link rel="manifest" href="{{ asset('manifest.json') }}">
    
    
        <!-- Style.css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('extra/libraries\assets\css\style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('extra/libraries\assets\css\jquery.mCustomScrollbar.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
        
        @laravelPWA
    
    </head>
  <body>
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <div class="loginheader text-center">
                    <h3>LOGIN</h3>
                    <hr id="hr">
                </div>
                
                <form method="POST" action="{{ route('customLogin') }}">
                    @csrf
                    <div class="login__field">
                        <i class="fa fa-mobile icon_size"></i>
                        <input type="text" class="login__input  @error('phone_no') is-invalid @enderror numericOnly" placeholder="Phone Number" name="Phone_number"  id="Phone_number" maxlength="10" autocomplete="new-password" required>
                     
                        @error('phone_no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="login__field">
                        <i class="fa fa-key icon_size"></i>
                        <input type="password" class="login__input @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

                        <input  type="password" class="login__input @error('password') is-invalid @enderror"   style="display: none;">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>		
                    
                    @if(session()->has('message'))
                            <p class="text-danger ml-5" style="margin-top: 10px;">{{ session()->get('message') }}</p>
                    @endif

                <div class="social-login">
                      <button class="button login__submit" type="sumit">
                        <span class="button__text mr-2 ml-5">Log In Now</span>
                        <i class="fa fa-chevron-right ml-5" ></i><i class="fa fa-chevron-right"></i>
                    </button>		
                </div>
            </div>
        </form>
       

            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>		
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>		
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script>
        $(".numericOnly").keypress(function (e) {
            if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
        });
    </script>
  </body>
</html>





