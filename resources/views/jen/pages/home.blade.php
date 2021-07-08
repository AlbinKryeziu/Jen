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

<section id="hero" class="d-flex align-items-center" style="background: url('{{ asset('jen/assets/img/doctor.jpg') }}') top center; object-fit:cover">
    <div class="container" style="text-align: center;">
        <h1>SEARCH HERE</h1>
        <h2>Find the care you need in 2 simple steps. First, select the specialty of care required. Second, enter your zip for a selection of providers near you!</h2>
    </div>
</section>
<div class="padding" style="margin: 80px;"></div>
<main id="main">
    @php $specialty = App\Models\Depart::get() @endphp

    <form>
        @csrf

        <section id="why-us" class="why-us">
            <div class="container">
                <div class="row col-11">
                    <div class="col-lg-12 d-flex align-items-stretch bd">
                        <div class="content col-12">
                            <h3>Search Doctors</h3>
                            @if(Session::has('errors'))
                            <div class="alert alert-warning" style="text-align: center; color: white; border: none; background: none;">
                                {{ Session::get('errors') }} @php Session::forget('errors'); @endphp
                            </div>

                            @endif

                            <label style="margin: 4px;">Specialty</label>
                            <select name="specialty" class="form-control" id="cars" value="AEfdaef" required style="border-radius: 15px;">
                                <option value="">Select Specialty</option>
                                @foreach ($specialty as $specialty)
                                <option value="{{$specialty->depart}}">{{ $specialty->depart}}</option>
                                @endforeach
                            </select>
                            <br />
                            <label style="margin: 4px;">Zip Code</label>
                            <input type="text" class="form-control" placeholder="Zip Code" name="zip_code" style="margin: 4px; border-radius: 15px;" required />

                            <div class="text-center" style="margin-top: 20px;">
                                <button type="submit" class="more-btn">Search</button>
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

    @if(!is_null($doctor))

    <div class="content">
        <div class="container">
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
                                <br />
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
                @endforeach
            </div>
        </div>
    </div>
    @endif

    <footer id="footer">
        <div class="container d-md-flex py-4">
            <div class="mr-md-auto text-center text-md-left">
                <div class="copyright">
                    &copy; Copyright <strong><span>SelfPayNet</span></strong>. All Rights Reserved
                </div>
                <div class="credits"></div>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

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

    @if(Session::has('success-message'))
    <script>
        swal("Success", "{{Session::get('success-message')}}", "success", {
            button: "ok",
        });
    </script>
    @endif
    
</main>
