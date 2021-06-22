@include('jen/pages/assets/header') @include('jen/doctors/assets/swal')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<style type="text/css">
    .dropdown-toggle {
        height: 40px;
        width: 670px !important;
    }
    @media screen and (max-width: 640px) {
        .dropdown-toggle {
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
<style>
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
        margin-top: 150px;
    }
    body {
        font-family: "Varela Round", sans-serif;
    }
    .modal-confirm {
        color: #636363;
        width: 400px;
    }
    .modal-confirm .modal-content {
        padding: 20px;
        border-radius: 5px;
        border: none;
        text-align: center;
        font-size: 14px;
    }
    .modal-confirm .modal-header {
        border-bottom: none;
        position: relative;
    }
    .modal-confirm h4 {
        text-align: center;
        font-size: 26px;
        margin: 30px 0 -10px;
    }
    .modal-confirm .close {
        position: absolute;
        top: -5px;
        right: -2px;
    }
    .modal-confirm .modal-body {
        color: #999;
    }
    .modal-confirm .modal-footer {
        border: none;
        text-align: center;
        border-radius: 5px;
        font-size: 13px;
        padding: 10px 15px 25px;
    }
    .modal-confirm .modal-footer a {
        color: #999;
    }
    .modal-confirm .icon-box {
        width: 80px;
        height: 80px;
        margin: 0 auto;
        border-radius: 50%;
        z-index: 9;
        text-align: center;
    }
    .modal-confirm .icon-box i {
        color: #f15e5e;
        font-size: 46px;
        display: inline-block;
        margin-top: 13px;
    }
    .modal-confirm .btn,
    .modal-confirm .btn:active {
        color: #fff;
        border-radius: 4px;
        background: #60c7c1;
        text-decoration: none;
        transition: all 0.4s;
        line-height: normal;
        min-width: 120px;
        border: none;
        min-height: 40px;
        border-radius: 3px;
        margin: 0 5px;
    }
    .modal-confirm .btn-secondary {
        background: #c1c1c1;
    }
    .modal-confirm .btn-secondary:hover,
    .modal-confirm .btn-secondary:focus {
        background: #a8a8a8;
    }
    .modal-confirm .btn-danger {
        background: #f15e5e;
    }
    .modal-confirm .btn-danger:hover,
    .modal-confirm .btn-danger:focus {
        background: #ee3535;
    }
    .trigger-btn {
        display: inline-block;
        margin: 100px auto;
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
                        <h6 class="d-flex align-items-center mb-3" style="color: #00a8a3;">Edit Speciality Details</h6>
                        @if(!empty($user->doctor->specialitizies->first()))

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Speciality</th>

                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user->doctor->specialitizies as $speciality)

                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $speciality->speciality }}</td>

                                        <td>
                                            <i class="fa fa-trash scheduleDelete" style="margin: 1px; color: red;" data-shcheduleId="{{ $speciality->id }}"></i>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                        <p>No Speciality so far .</p>
                        @endif
                        <hr style="background-color:#00A8A3"/>
                        <h6 class="d-flex align-items-center mb-3" style="color: #00a8a3;">Add New Speciality</h6>
                        <form method="POST" action="{{ url('speciality/update') }}">
                            @csrf

                            <div class="form-group">
                                <label>Select Speciality :</label><br />
                                <select class="selectpicker" multiple data-live-search="true" name="speciality[]" class="form-group col-12">
                                    @foreach ( $speacility as $speacility )
                                    <option value="{{ $speacility->depart }}">{{ $speacility->depart }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br />
                            <button type="submit" class="btn btn-primary" style="float: right; background-color: #00a8a3;">Update</button>
                        </form>
                    </div>
                </div>
                <div class="card mb-3" style="border-top: 3px solid #70c3be;">
                    <div class="card-body">
                        <h6 class="d-flex align-items-center mb-3" style="color: #00a8a3;">Edit Professional Details</h6>
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
                                <input type="number" name="price_1" id="" class="form-control"  value="{{ $user->doctor->price_1 }}" placeholder="{{ $user->doctor->price_1 }}" />
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
                                <input type="number" name="price_2" id="" class="form-control" value="{{ $user->doctor->price_2 }}" placeholder="{{ $user->doctor->price_1 }}" />
                                @error('price_2')
                                <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Service 3 </label>
                                <textarea class="form-control" id="exampleFormControlTextarea1"  name="services_3" rows="5">{{ $user->doctor->services_3 }}</textarea>
                                @error('services_3')
                                <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Price for Service 3</label>
                                <input type="number" name="price_3" id="" class="form-control" value="{{ $user->doctor->price_3 }}" placeholder="{{ $user->doctor->price_1 }}" />
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

<div id="deleteModal" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <form action="{{ url('deleteSpeciality') }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <div class="icon-box" style="border: 3px solid red;">
                        <i class="fa fa-trash" aria-hidden="true" style="color: red;"></i>
                    </div>
                    <h4 class="modal-title w-100">Are you shure</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Are you sure if you want to delete this record ?</p>
                    <input type="hidden" name="id" id="id" class="form-control" />
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success" style="background-color: red; color: white;">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).on("click", ".acceptEvent", function () {
        var requestId = $(this).attr("data-evenRequstId");
        var scheduleId = $(this).attr("data-shchedule");
        var days = $(this).attr("data-name");
        var start = $(this).attr("data-start");
        var end = $(this).attr("data-end");
        $("#scheduleId").val(scheduleId);
        $("#day").val(days);
        $("#start").val(start);
        $("#end").val(end);
        $("#myModal").modal("show");
    });
    $(document).on("click", ".scheduleDelete", function () {
        var requestId = $(this).attr("data-evenRequstId");
        var id = $(this).attr("data-shcheduleId");
        $("#id").val(id);
        $("#deleteModal").modal("show");
    });
    $(document).on("click", ".multipleDelete", function () {
        var requestId = $(this).attr("data-evenRequstId");
        var id = $(this).attr("data-shcheduleId");
        $("#id").val(id);
        $("#deleteMultiple").modal("show");
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $("select").selectpicker();
    });
</script>
<footer id="footer">
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
