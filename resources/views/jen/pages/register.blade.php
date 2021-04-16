<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Colorlib Templates" />
        <meta name="author" content="Colorlib" />
        <meta name="keywords" content="Colorlib Templates" />
        <title>Register</title>
        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all" />
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet" />

        <link href="{{ asset('register/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all" />
        <link href="{{ asset('register/vendor/datepicker/daterangepicker.css') }}" rel="stylesheet" media="all" />

        <link href="{{ asset('register/css/main.css') }}" rel="stylesheet" media="all" />
    </head>

    <body>
        <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
            <div class="wrapper wrapper--w790">
                <div class="card card-5">
                    <div class="card-heading">
                        <h2 class="title">register as doctor</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('doctor/account') }}">
                            @csrf
                            <div class="form-row m-b-55">
                                <div class="name">Name</div>
                                <div class="value">
                                    <div class="row row-space">
                                        <div class="col-2">
                                            @error('first_name')
                                            <div class="error" style="color: red;">{{ $message }}</div>
                                            @enderror
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="text" name="first_name" value="{{ old('first_name') }}" />
                                                <label class="label--desc">first name</label>
                                            </div>
                                        </div>

                                        <div class="col-2">
                                            @error('last_name')
                                            <div class="error" style="color: red;">{{ $message }}</div>
                                            @enderror
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="text" name="last_name" value="{{ old('last_name') }}" />
                                                <label class="label--desc">last name</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="name">Email</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="email" name="email" value="{{ old('email') }}" />
                                    </div>
                                    @error('email')
                                    <div class="error" style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Phone</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="phone" value="{{ old('phone') }}" />
                                    </div>
                                    @error('phone')
                                    <div class="error" style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Speciality</div>
                                <div class="value">
                                    <div class="input-group">
                                        <select name="speciality" id="speciality" class="input--style-5">
                                            <option class="input--style-5" value="">Select Speciality</option>
                                            @foreach ( $speciality as $speacility )
                                            <option class="input--style-5" value="{{ $speacility->depart }}">{{ $speacility->depart }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('speciality')
                                    <div class="error" style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Country</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="country" value="{{ old('country') }}" />
                                    </div>
                                    @error('country')
                                    <div class="error" style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Address</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="address" value="{{ old('address') }}" />
                                    </div>
                                    @error('address')
                                    <div class="error" style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Password</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="password" name="password" />
                                    </div>
                                    @error('password')
                                    <div class="error" style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Password Confirm</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="password" name="password_confirmation" />
                                    </div>
                                    @error('password_confirmation')
                                    <div class="error" style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <a href="{{ url('register/client') }}"><p style="float: right; color: #00a8a3;">Register As Client</p></a>
                            <br />
                            <br />

                            <div style="float: right; top: -450px;">
                                <button class="btn btn--radius-2 btn--red" type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
