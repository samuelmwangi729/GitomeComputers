
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}| Registration</title>

    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('vendors/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('vendors/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="login">
    <div class="container">
      <div class="login_wrapper" style="border:1px solid green">
        <div class="animate form login_form" >
          <section class="login_content">
            <form method="POST" action="{{ route('register') }}">
              <h1>Register With Us</h1>
                @csrf

                <div class="form-group row">
                    <div class="col @error('name') bad @enderror">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Your Name">
                        @error('name')
                            <span style="color:red" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col @error('email') bad @enderror">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email">
                        @error('email')
                        <span style="color:red" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col @error('password') bad @enderror">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Your Password">
                        @error('password')
                        <span style="color:red" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"  placeholder="Confirm Your Password">
                    </div>
                </div>
                <div class="separator">
                    <p class="change_link">Already A Member
                      <a href="{{ route('login') }}" class="to_register"> Login </a>
                    </p>
    
                    <div class="clearfix"></div>
                    <br />
                  </div>
                <div class="form-group row mb-0">
                    <div class="col">
                        <button type="submit" class="btn" style="background-color:gold;color:purple;font-weight:bolder">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
