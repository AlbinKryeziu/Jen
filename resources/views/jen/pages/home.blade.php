@include('jen/pages/assets/header')

<style>
    @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    body {
        margin-top: 20px;
    }
    .card-box {
        padding: 20px;
        border-radius: 3px;
        margin-bottom: 30px;
        background-color: #fff;
    }

    .social-links li a {
        border-radius: 50%;
        color: rgba(121, 121, 121, 0.8);
        display: inline-block;
        height: 30px;
        line-height: 27px;
        border: 2px solid rgba(121, 121, 121, 0.5);
        text-align: center;
        width: 30px;
    }

    .social-links li a:hover {
        color: #797979;
        border: 2px solid #797979;
    }
    .thumb-lg {
        height: 128px;
        width: 128px;
    }
    .img-thumbnail {
        padding: 0.25rem;
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: 0.25rem;
        object-fit: cover;
        width: 245px;
        height: 125px;
    }
    .text-pink {
        color: #ff679b !important;
    }
    .btn-rounded {
        border-radius: 2em;
    }
    .text-muted {
        color: #98a6ad !important;
    }
    h4 {
        line-height: 22px;
        font-size: 18px;
    }
</style>

<section id="hero" class="d-flex align-items-center" style="background: url('{{ asset('jen/assets/img/doctor.jpg') }}') top center;">
    <div class="container">
        <h1>Doctor Here</h1>
        <h2 style="width: 800px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
    </div>
</section>
@php $specialty = App\Models\Depart::get() @endphp
<main id="main">
    <form>
        @csrf
        

        <section id="why-us" class="why-us">
            <div class="container">
                <div class="row col-12">
                    <div class="col-lg-12 d-flex align-items-stretch">
                        <div class="content col-12">
                            <h3>Search Doctors</h3>
                            @if(Session::has('errors'))
                            <div class="alert alert-warning" style="background-color: #17a2b8; color: white; border: none;">
                                {{ Session::get('errors') }} @php Session::forget('errors'); @endphp
                            </div>

                            @endif
                         
                            
                            <label style="margin: 4px;">Specialty</label>
                            <select name="specialty" class="form-control" id="cars" value="AEfdaef" required>
                                <option value="">Select Specialty</option>
                                @foreach ($specialty as $specialty)
                                <option value="{{$specialty->depart}}">{{ $specialty->depart}}</option>
                                @endforeach
                            </select>

                            <label style="margin: 4px;">Country</label>
                            <input type="text" class="form-control" name="country" style="margin: 4px;" required />
                            <label style="margin: 4px;">Address</label>
                            <input type="text" class="form-control" name="address" style="margin: 4px;" required />
                            <div class="text-center">
                                <button type="submit" class="more-btn">Search <i class="bx bx-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center"></div>
                    </div>
                </div>
            </div>
        </section>
    </form>

    {{--
    <section id="doctors" class="doctors">
        <div class="container">
            <div class="section-title">
                <h2>Doctors</h2>
                <p>
                    Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste
                    officiis commodi quidem hic quas.
                </p>
            </div>

            <div class="row">
                @foreach($doctor as $key => $doctor)

                <div class="col-lg-5 p-4">
                    <div class="member d-flex align-items-start" style="box-shadow: 8px 7px 9px -4px #d3d7d7;">
                        <div class="pic"><img src="{{ asset('store/'.$doctor->profilePath) }}" class="img-fluid" alt="" style="width: 180px; height: 130px; object-fit: cover;" /></div>
                        <div class="member-info">
                            <h4>{{ $doctor->name }} {{ $doctor->surname }}</h4>
                            <span>{{ $doctor->speciality }}</span>
                            <p>{{ $doctor->address }}</p>
                            <br />
                            <a href="{{ url('profile/doctor/details/'.$doctor->user_id) }}" type="button" class="btn col-lg-12" style="background-color: #70c3be; color: white;"><i class="fa fa-plus"></i></a>
                            <div class="social" style="text-align: center;"></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    --}}
    <div class="content">
        <div class="container">
            <div class="section-title">
                <h2>Doctors</h2>
                <p>
                    Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste
                    officiis commodi quidem hic quas.
                </p>
            </div>
            <div class="row">
                
                <!-- end col -->
            </div>
            <!-- end row -->
            <div class="row">
                @foreach($doctor as $key => $doctor)
                <div class="col-lg-4">
                    <div class="text-center card-box" style="border: 1px solid #00a8a3;">
                        <div class="member-card pt-2 pb-2">
                          
                            <div class="thumb-lg member-thumb mx-auto">
                                @if($doctor->profilePath)
                                <img src="{{ asset('store/'.$doctor->profilePath) }}" class="rounded-circle img-thumbnail" alt="profile-image" />
                                @else
                                <img src="{{ asset('jen/assets/img/doctorLogoFinal.png') }}" class="rounded-circle img-thumbnail" alt="profile-image" />
                         
                                @endif
                            
                            </div>
                            <div class="">
                                <br>
                                <h4>{{ $doctor->name }} {{ $doctor->surname }}</h4>
                                <p class="text-muted">
                                    {{ $doctor->speciality }} <span>| </span><span><a href="">{{ $doctor->address }}</a></span>
                                </p>
                                <p>{{ $doctor->country }}</p>
                            </div>

                            <a href="{{ url('profile/doctor/details/'.$doctor->user_id) }}" class="btn btn-primary mt-2 btn-rounded waves-effect w-md waves-light" style="background-color: #00a8a3; border: none; width: 120px;">More</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

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

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <script src="{{ asset('jen/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('jen/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('jen/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('jen/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('jen/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('jen/assets/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('jen/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('jen/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

    <script src="{{ asset('jen/assets/js/main.js') }}"></script>
</main>
