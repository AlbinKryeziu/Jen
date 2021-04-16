@include('jen/pages/assets/header')
<style>
    @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

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
</style>

<style>
    @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
</style>

<section id="hero" class="d-flex align-items-center" style="background: url('{{ asset('jen/assets/img/doctor.jpg') }}') top center; background-size: cover ">
    <div class="container"></div>
</section>

<main id="main">
    <div class="container p-4">
        <div class="main-body">
            @foreach($user as $key => $user)

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card" style="border-top: 3px solid #70c3be;">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                @if($user->doctor->profilePath)
                                <img src="{{ asset('store/'.$user->doctor->profilePath) }}" alt="Admin" class="rounded-circle" width="120" height="120px;" style="box-shadow: 5px 7px 9px -4px #d8dcdc; object-fit: cover;" />
                                @else
                                <img src="{{ asset('jen/assets/img/doctorLogoFinal.png') }}" alt="Admin" class="rounded-circle" width="120" height="120px;" style="box-shadow: 5px 7px 9px -4px #d8dcdc; object-fit: cover;" />
                                @endif
                                <div class="mt-3">
                                    <h4>{{ $user->doctor->name }} {{$user->doctor->surname }}</h4>
                                    <p class="text-secondary mb-1"></p>
                                    <p class="text-muted font-size-sm">{{ $user->doctor->speciality }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-3" style="border-top: 3px solid #70c3be;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <a href="{{ $user->doctor->website }}" target="_blank" style="color: black;">
                                    <h6 class="mb-0">
                                        <i class="fa fa-globe" aria-hidden="true"></i>

                                        Website
                                    </h6>
                                </a>
                            </li>
                            @if($user->doctor->facebook)
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <a href="{{ $user->doctor->facebook }}" target="_blank" style="color: black;">
                                    <h6 class="mb-0"><i class="fa fa-facebook fa-lg"> </i> Facebook</h6>
                                </a>
                            </li>
                            @endif @if($user->doctor->instagram)
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <a href="{{ $user->doctor->instagram }}" target="_blank" style="color: black;">
                                    <h6 class="mb-0"><i class="fa fa-instagram fa-lg"> </i> Instagram</h6>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3" style="border-top: 3px solid #70c3be;">
                        <div class="card-body">
                            <h6 class="d-flex align-items-center mb-3" style="color: #00a8a3;">Personal Info</h6>
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
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $user->doctor->address }}
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Country</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $user->doctor->country }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-sm">
                        <div class="col-sm-12 mb-3">
                            <div class="card h-100" style="border-top: 3px solid #70c3be;">
                                <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3" style="color: #00a8a3;">Proefesional Details</h6>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Speciality</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $user->doctor->speciality }}
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Work Environment</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $user->doctor->workEnvironment }}
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Services</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $user->doctor->services }}
                                        </div>
                                    </div>
                                    <hr />

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">License</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $user->doctor->services }}
                                        </div>
                                    </div>
                                    <hr />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-sm">
                        <div class="col-sm-12 mb-3">
                            <div class="card h-100" style="border-top: 3px solid #70c3be;">
                                <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3" style="color: #00a8a3;">Work Schedule</h6>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Day</th>
                                                <th scope="col">Start Time</th>
                                                <th scope="col">End Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($user->schedule as $key => $schedule)

                                            <tr>
                                                <th scope="row">{{$loop->iteration }}</th>
                                                <td>{{ $schedule->day }}</td>
                                                <td>{{ $schedule->start }}</td>
                                                <td>{{ $schedule->end }}</td>
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

    <!-- Template Main JS File -->
    <script src="{{ asset('jen/assets/js/main.js') }}"></script>
</main>
