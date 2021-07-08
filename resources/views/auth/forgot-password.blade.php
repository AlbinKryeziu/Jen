<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Forgot Password | SelfPayNet</title>
        <link href="{{ asset('jen/assets/img/icon.png') }}" rel="icon" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

        <link rel="stylesheet" href="{{ asset('loginPages/css/style.css') }}" />
    </head>
    <body>
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center" style="margin-top: 70px;">
                    <div class="col-md-6 text-center mb-5"></div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-10">
                        <div class="wrap d-md-flex">
                            <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                                <div class="text w-100">
                                    <img src="{{ asset('jen/assets/img/logo.png') }}" width="200px;" />
                                    <br />
                                    <br />
                                    <h4 style="color: white">Welcome to SelfPayNet</h4>
                                   

                                    <a href="{{ url('login') }}" class="btn btn-white btn-outline-white">Sign In</a>
                                </div>
                            </div>
                            <div class="login-wrap p-4 p-lg-5">
                                <div class="d-flex">
                                    <div class="w-100">
                                        <h3 class="mb-4">Forgot Password?</h3>
                                    </div>
                                </div>
                                @if (session('status'))
                                <span>{{ session('status') }}</span>
                                <br />
                                @endif

                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    <div class="form-group mb-3">
                                        <label class="label" for="name">Email</label>
                                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email" required />
                                        @error('email')
                                        <span style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="form-control btn btn-primary submit px-3">Email Password Reset Link</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
