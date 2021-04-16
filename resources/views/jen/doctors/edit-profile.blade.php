@include('jen/pages/assets/header') @include('jen/doctors/assets/swal')
<link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />

<!-- add before </body> -->
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<style>
    @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

    body {
        margin-top: 150px;
        color: #1a202c;
        text-align: left;
        background-color: #e4e8e8;
    }
    .main-body {
        padding: 15px;
    }
    .card {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0, 0, 0, 0.125);
        border-radius: 0.25rem;
    }

    .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1rem;
    }

    .gutters-sm {
        margin-right: -8px;
        margin-left: -8px;
    }

    .gutters-sm > .col,
    .gutters-sm > [class*="col-"] {
        padding-right: 8px;
        padding-left: 8px;
    }
    .mb-3,
    .my-3 {
        margin-bottom: 1rem !important;
    }

    .bg-gray-300 {
        background-color: #e2e8f0;
    }
    .h-100 {
        height: 100% !important;
    }
    .shadow-none {
        box-shadow: none !important;
    }
    #footer {
        margin-top: 110px;
    }
    .inputWrapper {
        height: 32px;
        width: 64px;
        overflow: hidden;
        position: relative;
        cursor: pointer;
        /*Using a background color, but you can use a background image to represent a button*/
    }
</style>
<div class="container p-4">
    <div class="main-body">
        @foreach($user as $key => $user)

        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card" style="border-top: 3px solid #70c3be;">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            @if(!$user->doctor->profilePath)
                            <img src="{{ asset('jen/assets/img/doctorLogoFinal.png') }}" alt="Admin" class="rounded-circle" width="120" height="120px;" style="box-shadow: 5px 7px 9px -4px #d8dcdc; object-fit: cover;" />
                            @else
                            <img src="{{ asset('store/'.$user->doctor->profilePath) }}" alt="Admin" class="rounded-circle" width="120" height="120px;" style="box-shadow: 5px 7px 9px -4px #d8dcdc; object-fit: cover;" />
                            @endif

                            <div class="mt-3">
                                <h4>{{ $user->name }}</h4>
                                <p class="text-secondary mb-1"></p>
                                <p class="text-muted font-size-sm">{{ $user->doctor->speciality }}</p>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <a href="{{ url('photo/') }}" class="p-2"><strong>Change Photo</strong></a>
                                    <a href="{{ url('profile/') }} " class="p-2"><strong>Profile</strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3" style="border-top: 3px solid #70c3be;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <a href="{{ url('doctor/edit/profile/'.$user->id) }}" style="color: black;">
                                <h6 class="mb-0"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i> Edit Profile</h6>
                            </a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <a href="{{ url('doctor/work') }}" style="color: black;">
                                <h6 class="mb-0"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i> Edit Proefesional Details</h6>
                            </a>
                        </li>
                        @if(!count(auth()->user()->schedule))
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <a href="{{ url('doctor/schedule') }}" style="color: black;">
                                <h6 class="mb-0"><i class="fa fa-clock-o fa-lg" aria-hidden="true"></i> Create Work Schedule</h6>
                            </a>
                        </li>
                        @else
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <a href="{{ url('edit/schedule') }}" style="color: black;">
                                <h6 class="mb-0"><i class="fa fa-clock-o fa-lg" aria-hidden="true"></i> Edit Work Schedule</h6>
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
                <div class="card mt-3" style="border-top: 3px solid #70c3be;">
                    <ul class="list-group list-group-flush">
                        @if($user->socialMedia)
                            
                       
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <a href="{{ url($user->socialMedia->website) }}" target="_blank" style="color: black;">
                                <h6 class="mb-0"><i class="fa fa-globe fa-lg" aria-hidden="true"></i> My Website</h6>
                            </a>
                        </li>
                        @endif
                        @if($user->socialMedia)
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <a href="{{ url('socail/edit') }}" style="color: black;">
                                <h6 class="mb-0"><i class="fa fa-clock-o fa-lg" aria-hidden="true"></i> Edit Social Media</h6>
                            </a>
                        </li>
                        @else
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <a href="{{ url('socail/media') }}" style="color: black;">
                                <h6 class="mb-0"><i class="fa fa-clock-o fa-lg" aria-hidden="true"></i> Add Social Media</h6>
                            </a>
                        </li>

                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-3" style="border-top: 3px solid #70c3be;">
                    <div class="card-body">
                        <h6 class="d-flex align-items-center mb-3" style="color: #00a8a3;">Edit Personal Info</h6>
                        <form method="POST" action="{{ url('doctor/update/profile') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">First Name</label>
                                <input type="text" class="form-control" name="first_name" aria-describedby="emailHelp" value="{{ $user->doctor->name }}" />
                                @error('first_name')
                                <div class="error" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Last Name</label>
                                <input type="text" class="form-control" name="last_name" aria-describedby="emailHelp" value="{{ $user->doctor->surname }}" />
                                @error('last_name')
                                <div class="error" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>

                           

                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone</label>
                                <input type="text" class="form-control" name="phone" aria-describedby="emailHelp" value="{{ $user->doctor->phone }}" />
                                @error('phone')
                                <div class="error" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address</label>
                                <input type="text" class="form-control" name="address" aria-describedby="emailHelp" value="{{ $user->doctor->address }}" />
                                @error('address')
                                <div class="error" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Country</label>
                                <input type="text" class="form-control" name="country" aria-describedby="emailHelp" value="{{ $user->doctor->country }}" />
                                @error('country')
                                <div class="error" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary" style="float: right; background-color: #00a8a3;">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach

<footer id="footer">
    <div class="container d-md-flex py-4">
        <div class="mr-md-auto text-center text-md-left">
            <div class="copyright">
                &copy; Copyright <strong><span>Jen</span></strong>. All Rights Reserved
            </div>
            <div class="credits"></div>
        </div>
    </div>
</footer>
<script src="{{ asset('jen/assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('jen/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('jen/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('jen/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('jen/assets/vendor/venobox/venobox.min.js') }}"></script>
<script src="{{ asset('jen/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('jen/assets/vendor/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('jen/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('jen/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('jen/assets/js/main.js') }}"></script>

@if(Session::has('success'))
<script>
    swal("Success", "{{Session::get('success')}}", "success", {
        button: "ok",
    });
</script>

@endif
