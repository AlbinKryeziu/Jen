@include('jen/pages/assets/header') @include('jen/doctors/assets/swal')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <style type="text/css">
        .dropdown-toggle{
            height: 40px;
            width: 670px !important;
        }
        @media screen and (max-width: 640px) {
            .dropdown-toggle{
            height: 40px;
            width: 270px !important;
        }  
        }
    </style>
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
        margin-top: 120px;
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
                        <h6 class="d-flex align-items-center mb-3" style="color: #00a8a3;">Edit Speciality  Details</h6>
                        <form method="POST" action="{{ url('speciality/update') }}">
                            @csrf
                           

                            <div class="form-group ">
                                <label>Select Speciality :</label><br/>
                                <select class="selectpicker" multiple data-live-search="true" name="speciality[]" class="form-group col-12">
                                    @foreach ( $speacility as $speacility )
                                    <option value="{{ $speacility->depart }}">{{ $speacility->depart }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <button type="submit" class="btn btn-primary" style="float: right; background-color: #00a8a3;">Update</button>
                            
                        </form>
                    </div>
                </div>
                <div class="card mb-3" style="border-top: 3px solid #70c3be;">
                    <div class="card-body">
                        <h6 class="d-flex align-items-center mb-3" style="color: #00a8a3;">Edit Professional  Details</h6>
                        <form method="POST" action="{{ url('doctor/update/work') }}">
                            @csrf
                           

                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Service 1</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="services_1" rows="5">{{ $user->doctor->services_1 }}</textarea>
                                @error('services_1')
                                <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Price for Service 1</label>
                                <input type="number" name="price_1" id="" class="form-control" placeholder="{{ $user->doctor->price_1 }}">
                                @error('price_1')
                                <div class="error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Service 2</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="services_2" rows="5">{{ $user->doctor->services_2 }}</textarea>
                                @error('services_2')
                                <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Price for Service 2</label>
                                <input type="number" name="price_2" id="" class="form-control" placeholder="{{ $user->doctor->price_1 }}">
                                @error('price_2')
                                <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Service 3 </label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="services_3" rows="5">{{ $user->doctor->services_3 }}</textarea>
                                @error('services_3')
                                <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Price for Service 3</label>
                                <input type="number" name="price_3" id="" class="form-control" placeholder="{{ $user->doctor->price_1 }}"> 
                                @error('price_3')
                                <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary" style="float: right; background-color: #00a8a3;">Update</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach
<script type="text/javascript">
    $(document).ready(function() {
        $('select').selectpicker();
    });
</script>
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
