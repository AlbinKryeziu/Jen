@include('jen/pages/assets/header')
@include('jen/doctors/assets/swal')
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
        margin-top: 150px;
    }
    body {
        font-family: 'Varela Round', sans-serif;
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
    .modal-confirm .btn, .modal-confirm .btn:active {
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
    .modal-confirm .btn-secondary:hover, .modal-confirm .btn-secondary:focus {
        background: #a8a8a8;
    }
    .modal-confirm .btn-danger {
        background: #f15e5e;
    }
    .modal-confirm .btn-danger:hover, .modal-confirm .btn-danger:focus {
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
                                    <a href="{{ url('profile/') }} "class="p-2"><strong>Profile</strong></a>
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
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <a href="{{ url($user->socialMedia->website) }}" target="_blank"  style="color: black;">
                                <h6 class="mb-0"><i class="fa fa-globe fa-lg" aria-hidden="true"></i> My Website</h6>
                            </a>
                        </li>
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
            <div class="col-md-6">
                <div class="card mb-3" style="border-top: 3px solid #70c3be;">
                    <div class="card-body">
                        <h6 class="d-flex align-items-center mb-3 " style="color: #00a8a3;">Create Work Schedule</h6>
                        <a class="btn btn-outline-danger float-right p-1 multipleDelete">Delete All</a>
                    <br/>
                    <br/>
                        <table class="table table-striped table-responsive ">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Day</th>
                                <th scope="col">Start Time</th>
                                <th scope="col">End Time</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($user->schedule as  $schedule)
                                    
                                
                              <tr>
                                <th scope="row">1</th>
                                <td>{{ $schedule->day }}</td>
                                <td><i class="fa fa-clock-o"></i> {{ $schedule->start }}</td>
                                <td><i class="fa fa-clock-o"></i> {{ $schedule->end }}</td>
                                <td>
                                    <i class="fa fa-pencil acceptEvent" data-shchedule="{{ $schedule->id }}" data-name="{{$schedule->day}}" data-start={{ $schedule->end}} data-end={{ $schedule->end}}></i>
                                    <i class="fa fa-trash scheduleDelete" data-shcheduleId="{{ $schedule->id }}"></i>
                                 
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                          <hr style="background-color:#00A8A3"/>
                          
                        <form method="POST" action="{{ url('doctor/add/schedule') }}">
                            @csrf
                            <table class="table table-striped table-responsive" id="tab_logic">
                                <thead>
                                    <tr id="num">
                                        <th scope="col" >#</th>
                                        <th scope="col"  >Day</th>
                                        <th scope="col" >Start Time</th>
                                        <th scope="col" >End Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="addr0">
                                        <td>1</td>
                                        <td><input type="text" name="day[]" id="myText" value="{{old('category[]')}}" class="form-control" /></td>
                                        <td><input type="time" name="start[]" id="" value="{{old('product[]')}}" class="form-control" allProducts /></td>
                                        <td><input type="time" name="end[]" id="" value="{{old('product[]')}}" class="form-control" allProducts /></td>
                                    </tr>

                                    <tr id="addr1"></tr>
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-primary" style="float: right;background-color:#00A8A3">Save</button>
                        </form>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12">
                        <button type="button" id="add_row" class="btn btn-default pull-left">Add Row</button>
                        <button type="button" id="delete_row" class="pull-right btn btn-default">Delete Row</button>
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
<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <form action="{{ url('update/schedule') }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <div class="icon-box" style="border: 3px solid green;">
                        <i class="fa fa-clock-o" aria-hidden="true" style="color:green"></i>
                    </div>
                    <h4 class="modal-title w-100">Update Day Schedule </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
                </div>
                <div class="modal-body">
                    <label style="float: left"><strong>Days</strong></label>
                   <input type="text" name="day"  id="day" class="form-control " value="day">
                   <br>
                   <label style="float: left"><strong>Start Time</strong></label>
                   <input type="text" name="start"  id="start" class="form-control " value="start">
                   <br>
                   <label style="float: left"><strong>End Time</strong></label>
                   <input type="text" name="end"  id="end" class="form-control " value="end">
                   <br>
                   <input type="hidden" name="scheduleId"  id="scheduleId" class="form-control ">
                   
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div id="deleteModal" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <form action="{{ url('update/delete') }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <div class="icon-box" style="border: 3px solid red;">
                        <i class="fa fa-trash" aria-hidden="true" style="color:red"></i>
                    </div>
                    <h4 class="modal-title w-100">Are you shure</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
                </div>
                <div class="modal-body">
                    <p>Are you sure if you want to delete this record</p>
                    <input type="hidden" name="id"  id="id" class="form-control ">
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success" style="background-color:red; color:white">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div id="deleteMultiple" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <form action="{{ url('delete/schedule/multiple') }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <div class="icon-box" style="border: 3px solid red;">
                        <i class="fa fa-trash" aria-hidden="true" style="color:red"></i>
                    </div>
                    <h4 class="modal-title w-100">Are you shure</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete all records</p>
                    <input type="hidden" name="id"  id="id" class="form-control ">
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success" style="background-color:red; color:white">Save</button>
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
<script>
    $(document).ready(function () {
        var i = 1;
        $("#add_row").click(function () {
            b = i - 1;
            $("#addr" + i)
                .html($("#addr" + b).html())
                .find("td:first-child")
                .html(i + 1);
            $("#tab_logic").append('<tr id="addr' + (i + 1) + '"></tr>');
            var lastProduct = jQuery("#addr" + (i - 1))
                .find("td:eq(1) input")
                .val();

            i++;
        });
        $("#delete_row").click(function () {
            if (i > 1) {
                $("#addr" + (i - 1)).html("");
                $("#addr" + i).remove();
                i--;
            }
            calc();
        });
        $("#tab_logic tbody").on("keyup change", function () {
            calc();
        });
        $("#tax").on("keyup change", function () {
            calc_total();
        });
    });
    $(document).ready(function () {
        $("#btn1").click(function () {
            $("ol").append("<li>other list<br>");
        });
        $("#btn2").click(function () {
            $("ol").append("<input></input><br>");
        });
    });
    function showContent() {
        myTable = document.getElementsById("form-data")[0];
        myClone = myTable.cloneNode(true);
        document.body.appendChild(myClone);
    }
    function calc() {
        $("#tab_logic tbody tr").each(function (i, element) {
            var html = $(this).html();
            var allProducts = [];
            if (html != "") {
                var qty = $(this).find(".qty").val();
                var price = $(this).find(".price").val();
                $(this)
                    .find(".total")
                    .val((qty * price).toFixed(2));
                calc_total();
            }
        });
    }
    function calc_total() {
        total = 0;
        $(".total").each(function () {
            total += parseFloat($(this).val());
        });
        $("#sub_total").val(total.toFixed(2));
        tax_sum = (total / 100) * $("#tax").val();
        $("#tax_amount").val(tax_sum.toFixed(2));
        $("#total_amount").val((tax_sum + total).toFixed(2));
    }
</script>
@if(Session::has('success'))
<script>
    swal("Success", "{{Session::get('success')}}", "success", {
        button: "ok",
    });
</script>
@endif
