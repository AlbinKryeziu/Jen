
@include('jen/pages/assets/header')




<section id="hero" class="d-flex align-items-center" style="background: url('{{ asset('jen/assets/img/doctor.jpg') }}') top center;">
    <div class="container">
      <h1>Doctor Here</h1>
      <h2 style=" width: 800px;">Please fill in all the fields to ask for a doctor and our system will find a doctor if it exists with your data</h2>
     
    </div>
  </section>

  <main id="main">

    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row col-12">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="content col-12">
              <h3>Why Choose Medilab?</h3>
              <label style="margin: 4px;">Speciality</label >
              <input type="text" class="form-control p-4" style="margin: 4px;">
              <label style="margin: 4px;">Country</label >
                <input type="text" class="form-control p-4"style="margin: 4px;">
              <label style="margin: 4px;">Address</label >
              <input type="text" class="form-control p-4"style="margin: 4px;">
              <div class="text-center">
                <a href="#" class="more-btn" style="margin: 4px;">Search <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
             
                
                
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
   

   
    <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Doctors</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Medical Officer</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Anesthesiologist</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Cardiology</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Neurosurgeon</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

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

  <div id="preloader"></div>
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

</body>

</html>