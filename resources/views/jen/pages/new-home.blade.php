

@include('jen/pages/assets/header')

<style>

@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
#team {
    background: #eee !important;
}

.btn-primary:hover,
.btn-primary:focus {
    background-color: #17a2b8;
    border-color: #17a2b8;
    box-shadow: none;
    outline: none;
}

.btn-primary {
    color: #fff;
    background-color:#17a2b8;
    border-color: #17a2b8;
}

section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #00a8a8;
    margin-bottom: 50px;
    text-transform: uppercase;
}

#team .card {
    border: none;
    background: #ffffff;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 312px;
}

.backside .card a {
    font-size: 18px;
    color: #00a8a8 !important;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #00a8a8 !important;
}

.frontside .card .card-body img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
}
#contatti{
  background-color:white;
  letter-spacing: 2px;
  }



@media (max-width: 575.98px) {

  #contatti{padding-bottom: 800px;}
  #contatti .maps iframe{
    width: 100%;
    height: 450px;
  }
 }


@media (min-width: 576px) {

   #contatti{padding-bottom: 800px;}

   #contatti .maps iframe{
     width: 100%;
     height: 450px;
   }
 }

@media (min-width: 768px) {

  #contatti{padding-bottom: 350px;}

  #contatti .maps iframe{
    width: 100%;
    height: 850px;
  }
}

@media (min-width: 992px) {
  #contatti{padding-bottom: 200px;}

   #contatti .maps iframe{
     width: 100%;
     height: 700px;
   }
}





</style>


  <section id="hero" class="d-flex align-items-center" style="background: url('{{ asset('jen/assets/img/img2.jpg') }}') top center;">

    <div class="container" style="text-align: center">
      <h1>Welcome to Len</h1>
      <h2>We are Website when you can search for any doctors</h2>
      <a href="{{ url('home/') }}" class="btn-get-started scrollto">Search Doctor</a>
    </div>
  </section><!-- End Hero -->
<div class="padding" style="margin: 80px;">
</div>
  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
             
                
                
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

   

    <section id="services" class="services">
        <div class="container">
  
          <div class="section-title">
            <h2>How it Work</h2>
            <p></p>
          </div>
  
          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class=" bx bx-user-plus"></i></div>
                <h4><a href="">Sign Up</a></h4>
                <p>The first step you need to do is open an account with us</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
              <div class="icon-box">
                <div class="icon"><i class="bx bxs-lock-alt"></i></div>
                <h4><a href="">Log in</a></h4>
                <p>The second step you need to log in on our website</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
              <div class="icon-box">
                <div class="icon"><i class="bx bx bx-search"></i></div>
                <h4><a href="">Explore</a></h4>
                <p>Step Three You can now search for your nearest doctor in your area</p>
              </div>
            </div>
          </div>
  
        </div>
      </section>




    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch">
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3 style="text-align: center" style="color: #00a8a8;">What we offer</h3>
            <p>We aim to bring clients together with doctors in a web site where it can be used and easily managed by users</p>

            <div class="icon-box">
                <div class="card" style="box-shadow: 7px 5px 5px #E0E5E5">
                    <div class="card-body">
              <div class="icon"><strong>1</strong></div>
              <h4 class="title"><a href=""></a></h4>
                  <p class="card-text" style="padding: 10px; text-align: center;">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content
                  </p>
                </div>
              </div>
            </div>

            <div class="icon-box">
                <div class="card" style="box-shadow: 7px 5px 5px #E0E5E5">
                    <div class="card-body">
              <div class="icon"><strong>2</strong></div>
              <h4 class="title"><a href=""></a></h4>
                  <p class="card-text" style="padding: 10px; text-align: center;">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content
                  </p>
                </div>
              </div>
            </div>

            <div class="icon-box">
                <div class="card">
                    <div class="card-body" style="box-shadow: 7px 5px 5px #E0E5E5">
              <div class="icon"><strong>3</strong></div>
              <h4 class="title"><a href=""></a></h4>
                  <p class="card-text" style="padding: 10px; text-align: center;">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content
                  </p>
                </div>
              </div>
            </div>

      </div>
    </section>
    <section id="carousel" style="" >
        <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="box-shadow: 7px 2px 25px #E0E5E5">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('jen/assets/img/imagedoctor.jpg') }}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('jen/assets/img/imageDoctor1.jpg') }}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('jen/assets/img/doctor3.jpg') }}" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
        </div>
    </section>
    <br>
<br> 

    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="count-box">
              <i class="icofont-doctor-alt"></i>
              <span data-toggle="counter-up">85</span>
              <p>Doctors</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-patient-bed"></i>
              <span data-toggle="counter-up">18</span>
              <p>Departments</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-laboratory"></i>
              <span data-toggle="counter-up">8</span>
              <p>Research Labs</p>
            </div>
          </div>

          

        </div>

      </div>
    </section>
    
    

  
    <section id="testimonials" class="testimonials">
      <div class="container">
        <h2 style="text-align: center"> <i class="bx bxs-quote-alt-left quote-icon-left"></i>Happy Client <i class="bx bxs-quote-alt-right quote-icon-right"></i></h2>
        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section>
    
 
    <section id="team" class="pb-5">
      <div class="container">
          <h5 class="section-title h1">OUR TEAM</h5>
          <div class="row">
              <!-- Team member -->
              <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="image-flip" >
                      <div class="mainflip flip-0">
                          <div class="frontside">
                              <div class="card">
                                  <div class="card-body text-center">
                                      <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p>
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                      <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                  </div>
                              </div>
                          </div>
                          <div class="backside">
                              <div class="card">
                                  <div class="card-body text-center mt-4">
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                      <ul class="list-inline">
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                  <i class="fa fa-facebook"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                  <i class="fa fa-twitter"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                  <i class="fa fa-skype"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                  <i class="fa fa-google"></i>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- ./Team member -->
              <!-- Team member -->
              <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                      <div class="mainflip">
                          <div class="frontside">
                              <div class="card">
                                  <div class="card-body text-center">
                                      <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_02.png" alt="card image"></p>
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                      <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                  </div>
                              </div>
                          </div>
                          <div class="backside">
                              <div class="card">
                                  <div class="card-body text-center mt-4">
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                      <ul class="list-inline">
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                  <i class="fa fa-facebook"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                  <i class="fa fa-twitter"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                  <i class="fa fa-skype"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                  <i class="fa fa-google"></i>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- ./Team member -->
              <!-- Team member -->
              <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                      <div class="mainflip">
                          <div class="frontside">
                              <div class="card">
                                  <div class="card-body text-center">
                                      <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_03.png" alt="card image"></p>
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                      <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                  </div>
                              </div>
                          </div>
                          <div class="backside">
                              <div class="card">
                                  <div class="card-body text-center mt-4">
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                      <ul class="list-inline">
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                  <i class="fa fa-facebook"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                  <i class="fa fa-twitter"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                  <i class="fa fa-skype"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                  <i class="fa fa-google"></i>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- ./Team member -->
              <!-- Team member -->
              <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                      <div class="mainflip">
                          <div class="frontside">
                              <div class="card">
                                  <div class="card-body text-center">
                                      <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_04.jpg" alt="card image"></p>
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                      <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                  </div>
                              </div>
                          </div>
                          <div class="backside">
                              <div class="card">
                                  <div class="card-body text-center mt-4">
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                      <ul class="list-inline">
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                  <i class="fa fa-facebook"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                  <i class="fa fa-twitter"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                  <i class="fa fa-skype"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                  <i class="fa fa-google"></i>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- ./Team member -->
              <!-- Team member -->
              <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                      <div class="mainflip">
                          <div class="frontside">
                              <div class="card">
                                  <div class="card-body text-center">
                                      <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_05.png" alt="card image"></p>
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                      <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                  </div>
                              </div>
                          </div>
                          <div class="backside">
                              <div class="card">
                                  <div class="card-body text-center mt-4">
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                      <ul class="list-inline">
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                  <i class="fa fa-facebook"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                  <i class="fa fa-twitter"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                  <i class="fa fa-skype"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                  <i class="fa fa-google"></i>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- ./Team member -->
              <!-- Team member -->
              <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                      <div class="mainflip">
                          <div class="frontside">
                              <div class="card">
                                  <div class="card-body text-center">
                                      <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_06.jpg" alt="card image"></p>
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                      <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                  </div>
                              </div>
                          </div>
                          <div class="backside">
                              <div class="card">
                                  <div class="card-body text-center mt-4">
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                      <ul class="list-inline">
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                  <i class="fa fa-facebook"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                  <i class="fa fa-twitter"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                  <i class="fa fa-skype"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                  <i class="fa fa-google"></i>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- ./Team member -->
  
          </div>
      </div>
  </section>
  

<div class="row" id="contatti">
<div class="container mt-5" >

    <div class="row" style="height:550px;">
      <div class="col-md-6 maps" >
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11880.492291371422!2d12.4922309!3d41.8902102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28f1c82e908503c4!2sColosseo!5e0!3m2!1sit!2sit!4v1524815927977" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="col-md-6">
        <h2 class="text-uppercase mt-3 font-weight-bold text-white"><p style="color:#00a8a8; text-align:center">Contact Us<p></h2>
        <form action="">
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <input type="text" class="form-control mt-2" placeholder="First name" required>
              </div>
            </div>
           
            <div class="col-lg-12">
              <div class="form-group">
                <input type="email" class="form-control mt-2" placeholder="Email" required>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <input type="text" class="form-control mt-2" placeholder="Phone" required>
              </div>
            </div>
            
            <div class="col-12">
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Inserisci testo" rows="3" required></textarea>
              </div>
            </div>
            <div class="col-12" style="width: 120px;">
              
              <button class="btn btn-light" type="submit">Invia</button>
           
            </div>
            
          </div>
        </form>
       
        </div>
      </div>

    </div>
</div>
</div>

  

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
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
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

</body>

</html>