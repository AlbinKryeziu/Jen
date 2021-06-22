@include('jen/pages/assets/header') @include('jen/doctors/assets/swal')
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
        margin-top: 50px;
    }
    input[type="file"] {
        display: none;
    }
</style>

<div class="container p-4">
    <div class="main-body">
        @foreach($user as $key => $user)

        <div class="row gutters-sm">
            @include('jen.doctors.assets.profile-header')
            <div class="col-md-8">
                <div class="card mb-3" style="border-top: 3px solid #70c3be;">
                    <div class="card-body">
                        <h6 class="d-flex align-items-center mb-3" style="color: #00a8a3;">Business Info</h6>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $user->name }}
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $user->email }}
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $user->doctor->phone }}
                            </div>
                        </div>
                        <hr />

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Zip Code</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $user->doctor->zip_code }}
                            </div>
                        </div>
                        <br>
                       
                    </div>
                </div>
                <div class="row gutters-sm">
                    <div class="col-sm-12 mb-3">
                        <div class="card h-100" style="border-top: 3px solid #70c3be;">
                            <div class="card-body">
                                <h6 class="d-flex align-items-center mb-3" style="color: #00a8a3;">Professional Details</h6>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Speciality</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $user->doctor->address }}
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="">Services 1:</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <textarea name=""id="" class="col-sm-12" cols="44" rows="5" style="border: 1px solid #70c3be" disabled>{{ $user->doctor->services_1 }}</textarea>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Price of Service 1</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $user->doctor->price_1 }}$
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="">Services 2:</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <textarea name=""id="" class="col-sm-12" cols="44" rows="5" style="border: 1px solid #70c3be" disabled>{{ $user->doctor->services_2 }}</textarea>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Price of Service 2</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $user->doctor->price_2 }}$
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="">Services 3:</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <textarea name=""id="" class="col-sm-12" cols="44" rows="5" style="border: 1px solid #70c3be" disabled>{{ $user->doctor->services_3 }}</textarea>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Price of Service 3</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $user->doctor->price_3 }}$
                                    </div>
                                </div>
                                <hr>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-sm">
                    <div class="col-sm-12 mb-3">
                        <div class="card h-100" style="border-top: 3px solid #70c3be;">
                            <div class="card-body">
                                <h6 class="d-flex align-items-center mb-3" style="color: #00a8a3;">Hours of Operation</h6>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Day</th>
                                            <th scope="col">Open</th>
                                            <th scope="col">Close</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($user->schedule as $key => $schedule)

                                        <tr>
                                            <th scope="row">{{$loop->iteration }}</th>
                                            <td>{{ $schedule->day }}</td>
                                            <td>{{ Carbon\Carbon::parse( $schedule->start)->format('H:s') }}</td>
                                            <td>{{ Carbon\Carbon::parse( $schedule->end)->format('H:s')}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
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

<script src="{{ asset('jen/assets/js/main.js') }}"></script>
@if(Session::has('success'))
<script>
    swal("Success", "{{Session::get('success')}}", "success", {
        button: "ok",
    });
</script>
@endif
