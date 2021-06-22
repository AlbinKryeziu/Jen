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
        margin-top: 180px;
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
                        <h6 class="d-flex align-items-center mb-3" style="color: #00a8a3;">Add Social Media Links</h6>
                        <form method="POST" action="{{ url('socail/add') }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Your Personal Website</label>
                                <input type="text" class="form-control" pattern="https?://.+"  name="website" />
                                @error('website')
                                   <span style="font-size: 12px; color:red">{{ $message }}</span> 
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"><fieldset>Facebook</fieldset></label>
                                <input type="text" class="form-control" pattern="https?://.+" name="facebook" />
                                @error('facebook')
                                   <span style="font-size: 12px; color:red">{{ $message }}</span> 
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"><fieldset>Instagram</fieldset></label>
                                <input type="text" class="form-control"  pattern="https?://.+" name="instagram" />
                                @error('instagram')
                                   <span style="font-size: 12px; color:red">{{ $message }}</span> 
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"><fieldset>Other</fieldset></label>
                                <input type="text" class="form-control" pattern="https?://.+" name="other" />
                                @error('other')
                                <span style="font-size: 12px; color:red">{{ $message }}</span> 
                             @enderror
                            </div>

                            <button type="submit" class="btn btn-primary" style="float: right; background-color: #00a8a3;">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach

<footer id="footer" style="margin-top:260px">
    <div class="container d-md-flex py-4">
        <div class="mr-md-auto text-center text-md-left">
            <div class="copyright">
                &copy; Copyright {{ Carbon\Carbon::now()->format('Y') }} <strong><span>SelfPayNet</span></strong>. All Rights Reserved.
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
