<div class="col-md-4 mb-3">
    <div class="card" style="border-top: 3px solid #70c3be;">
        <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center image-file">
                @if(!$user->doctor->profilePath)
                <img src="{{ asset('jen/assets/img/doctorLogoFinal.png') }}" alt="Admin" class="rounded-circle" width="120" height="120px;" style="box-shadow: 5px 7px 9px -4px #d8dcdc; object-fit: cover;" />
                
                @else
                <img src="{{ asset('store/'.$user->doctor->profilePath) }}" alt="Admin" class="rounded-circle" width="120" height="120px;" style="box-shadow: 5px 7px 9px -4px #d8dcdc; object-fit: cover;" />
                
                @endif
                
                <div class="mt-3">
                    <h4>{{ $user->name }}</h4>
                    <p class="text-secondary mb-1"></p>
                    
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
                    <h6 class="mb-0"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true" style="color:#00A8A3 "></i> Edit Profile</h6>
                </a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <a href="{{ url('doctor/work') }}" style="color: black;">
                    <h6 class="mb-0"><i class="fa fa-user-md fa-lg" aria-hidden="true" style="color:#00A8A3 "></i> Edit Professional Details</h6>
                </a>
            </li>
            @if(!count(auth()->user()->schedule))
            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <a href="{{ url('doctor/schedule') }}" style="color: black;">
                    <h6 class="mb-0"><i class="fa fa-calendar-plus-o" aria-hidden="true" style="color:#00A8A3 "></i> Create Hours of Operation</h6>
                </a>
            </li>
            @else
            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <a href="{{ url('edit/schedule') }}" style="color: black;">
                    <h6 class="mb-0"><i class="fa fa-calendar fa-sm" aria-hidden="true" style="color:#00A8A3 "></i> Edit Hours of Operation</h6>
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
                    <h6 class="mb-0"><i class="fa fa-globe fa-lg" aria-hidden="true" style="color:#00A8A3 "></i> My Website</h6>
                </a>
            </li>
            @endif
            @if($user->socialMedia)
            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <a href="{{ url('socail/edit') }}" style="color: black;">
                    <h6 class="mb-0"><i class="fa fa-share-square-o fa-lg" aria-hidden="true" style="color:#00A8A3 "></i> Edit Social Media</h6>
                </a>
            </li>
            @else
            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <a href="{{ url('socail/media') }}" style="color: black;">
                    <h6 class="mb-0"><i class="fa fa-share-square-o fa-lg" aria-hidden="true" style="color:#00A8A3 "></i> Add Social Media</h6>
                </a>
            </li>

            @endif
        </ul>
    </div>
</div>

