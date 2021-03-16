
@include('jen/pages/assets/header')


<style>
  @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  </style>

<section id="hero" class="d-flex align-items-center" style="background: url('{{ asset('jen/assets/img/doctor.jpg') }}') top center;">
    <div class="container">
      <h1>Doctor Here</h1>
      <h2 style=" width: 800px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
     
    </div>
  </section>
  @php
                    $specialty = App\Models\Depart::get()
                  @endphp
  <main id="main">
    <form>
      @csrf
   
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row col-12">
          <div class="col-lg-12 d-flex align-items-stretch">
           
            <div class="content col-12">
              <h3>Search Doctors</h3>
              <label style="margin: 4px;">Specialty</label >
                <select name="specialty" class="form-control" id="cars" value="AEfdaef">
                  @foreach ($specialty as $specialty)
                  <option value="{{$specialty->depart}}">{{ $specialty->depart}}</option>
                  @endforeach
                </select>
  
              <label style="margin: 4px;">Country</label >
                <input type="text" class="form-control " name="country" style="margin: 4px;">
              <label style="margin: 4px;">Address</label >
              <input type="text" class="form-control " name="address" style="margin: 4px;">
              <div class="text-center">
                <button type="submit" class="more-btn">Search <i class="bx bx-chevron-right"></i></button>
              </div>
            </div>
          
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
             
                
                
              </div>
            </div>
          </div>
        </div>
      </form>
      </div>
    </section>
   

   
    <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Doctors</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
         @foreach($doctor as $key => $doctor)
           
     
          <div class="col-lg-6 p-4">
            <div class="member d-flex align-items-start" style="box-shadow: 8px 7px 9px -4px #D3D7D7;">
              <div class="pic"><img src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>{{ $doctor->name }} {{ $doctor->surname }}</h4>
                <span>{{ $doctor->speciality }}</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <br>
                <a href="{{ url('profile/doctor/details/'.$doctor->user_id) }}" type="button" class="btn col-lg-12" style="background-color:#70c3be; color:white;"><i class="fa fa-plus"></i></a>
                <div class="social" style="text-align: center">
                
                </div>
              </div>
            </div>
          </div>
          @endforeach
          
     
         
          

          

         

          

        </div>

      </div>
    </section>

   
    
   

  </main>
  <footer id="footer">

   
    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Jen</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
        </div>
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

</body>

</html>