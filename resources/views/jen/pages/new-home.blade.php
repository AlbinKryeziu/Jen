

@include('jen/pages/assets/header')

<style>

@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
#team {
    background: #F6F7F7 !important;
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

  #contatti{padding-bottom: 350px;}
  #contatti .maps iframe{
    width: 100%;
    height: 450px;
  }
 }


@media (min-width: 576px) {

   #contatti{padding-bottom: 350px;}

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
  #contatti{padding-bottom: 350px;}

   #contatti .maps iframe{
     width: 100%;
     height: 700px;
   }
}

@import url(//fonts.googleapis.com/css?family=Montserrat:300,400,500);
.contact3 {
  font-family: "Montserrat", sans-serif;
  color: #8d97ad;
  font-weight: 300;
}

.contact3 h1,
.contact3 h2,
.contact3 h3,
.contact3 h4,
.contact3 h5,
.contact3 h6 {
  color: #3e4555;
}

.contact3 .font-weight-medium {
  font-weight: 500;
}

.contact3 .card-shadow {
  -webkit-box-shadow: 0px 0px 30px rgba(115, 128, 157, 0.1);
  box-shadow: 0px 0px 30px rgba(115, 128, 157, 0.1);
}

.contact3 .btn-danger-gradiant {
  background: #ff4d7e;
  background: -webkit-linear-gradient(legacy-direction(to right), #ff4d7e 0%, #ff6a5b 100%);
  background: -webkit-gradient(linear, left top, right top, from(#ff4d7e), to(#ff6a5b));
  background: -webkit-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
  background: -o-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
  background: linear-gradient(to right, #ff4d7e 0%, #ff6a5b 100%);
}

.contact3 .btn-danger-gradiant:hover {
  background: #ff6a5b;
  background: -webkit-linear-gradient(legacy-direction(to right), #ff6a5b 0%, #ff4d7e 100%);
  background: -webkit-gradient(linear, left top, right top, from(#ff6a5b), to(#ff4d7e));
  background: -webkit-linear-gradient(left, #ff6a5b 0%, #ff4d7e 100%);
  background: -o-linear-gradient(left, #ff6a5b 0%, #ff4d7e 100%);
  background: linear-gradient(to right, #ff6a5b 0%, #ff4d7e 100%);
}



</style>


  <section id="hero" class="d-flex align-items-center" style="background: url('{{ asset('jen/assets/img/img2.jpg') }}') top center;">

    <div class="container" style="text-align: center">
      <h1>Welcome to SelfPayNet</h1>
      <h2>SelfPayNet is a resource for anyone searching for quality medical care at a transparent and affordable price. When you tap the SEARCH button below it will take you a network of general and specialized medical service providers in your area.</h2>
      <a href="{{ url('/') }}" class="btn-get-started scrollto">Search Doctor</a>
    </div>
  </section>
<div class="padding" style="margin: 80px;">
</div>
  <main id="main">

  
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

   

   




    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch">
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3 style="text-align: center" style="color: #00a8a8;">Our Mission
            </h3>
            <p>
            </p>

            <div class="icon-box">
                <div class="card" style=" box-shadow: 5px 7px 9px -4px #D3D7D7;">
                    <div class="card-body">
              <div class="icon"><strong>1</strong></div>
              <h4 class="title" style="border: 1px solid #17a2b8"><a href=""></a></h4>
                  <p class="card-text" style="padding: 10px; text-align: center;">
                    By creating a comprehensive network of independent medical professionals willing to work toward price transparency, we all benefit from affordable prices to access superior health care leading to a healthier life.
                  </p>
                </div>
              </div>
            </div>

            <div class="icon-box">
                <div class="card" style=" box-shadow: 5px 7px 9px -4px #D3D7D7">
                    <div class="card-body">
              <div class="icon"><strong>2</strong></div>
              <h4 class="title" style="border: 1px solid #17a2b8"><a href=""></a></h4>
                  <p class="card-text" style="padding: 10px; text-align: center;">
                    When third party (insurance) is eliminated from the personal relationship between you and your doctor, you take control of your health journey.
                  </p>
                </div>
              </div>
            </div>

            <div class="icon-box">
                <div class="card">
                    <div class="card-body" style=" box-shadow: 5px 7px 9px -4px #D3D7D7">
              <div class="icon"><strong>3</strong></div>
              <h4 class="title" style="border: 1px solid #17a2b8"><a href=""></a></h4>
                  <p class="card-text" style="padding: 15px; text-align: center;">
                    We believe the medical system has been intentionally overburdened by insurance bureaucracy. We want to change this with a network of medical professionals willing to work with those patients who decide paying out of pocket is the most efficient path.
                  </p>
                </div>
              </div>
            </div>

      </div>
    </section>
    <section id="carousel" style="" >
        <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="box-shadow: 7px 2px 25px #E0E5E5">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('jen/assets/img/img15.jpg') }}" alt="First slide" style="height: 550px; object-fit: cover;">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('jen/assets/img/female.jpg') }}" alt="Second slide"style="height: 550px; object-fit: cover;">
           
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('jen/assets/img/young.jpg') }}" alt="Third slide"style="height: 550px; object-fit: cover;">
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


    
    
    

  
    <section id="testimonials" class="testimonials">
      <div class="container">
        <h3 style="text-align: center; color:#00A8A3"> <i class="bx bxs-quote-alt-left quote-icon-left" style="color: #70c3be"></i>Happy Clients <i class="bx bxs-quote-alt-right quote-icon-right" style="color: #70c3be"></i></h3>
        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-wrap">
            <div class="testimonial-item"  style="border-top: 1px solid #17a2b8; border-bottom:1px solid #17a2b8">
              <img src="" class="testimonial-img" alt="">
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
            <div class="testimonial-item" style="border-top: 1px solid #17a2b8; border-bottom:1px solid #17a2b8">
              <img src="" class="testimonial-img" alt="">
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
            <div class="testimonial-item" style="border-top: 2px solid #17a2b8; border-bottom:1px solid #17a2b8">
              <img src="" class="testimonial-img" alt="">
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
              <img src="" class="testimonial-img" alt="">
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
              <img src="" class="testimonial-img" alt="">
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
          <h5 class="section-title h1">Our Doctors</h5>
          <div class="row">
            
              <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="image-flip" >
                      <div class="mainflip flip-0">
                          <div class="frontside">
                              <div class="card" style="border-top: 2px solid #17a2b8; border-bottom:2px solid #17a2b8">
                                  <div class="card-body text-center">
                                      <p><img class=" img-fluid" src="{{ asset('jen/assets/img/pic.png') }}" alt="card image"></p>
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                      <a href=" class="btn btn-primary btn-sm col-12"><i class="fa fa-plus"></i></a>
                                  </div>
                              </div>
                          </div>
                          <div class="backside">
                              <div class="card" style="border-top: 2px solid #17a2b8; border-bottom:2px solid #17a2b8">
                                  <div class="card-body text-center mt-4">
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                      <ul class="list-inline">
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="">
                                                  <i class="fa fa-facebook"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="">
                                                  <i class="fa fa-twitter"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="">
                                                  <i class="fa fa-skype"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="">
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
           
              <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                      <div class="mainflip">
                          <div class="frontside">
                              <div class="card" style="border-top: 2px solid #17a2b8; border-bottom:2px solid #17a2b8">
                                  <div class="card-body text-center">
                                      <p><img class=" img-fluid" src="{{ asset('jen/assets/img/pic.png') }}" alt="card image"></p>
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                      <a href="" class="btn btn-primary btn-sm col-12"><i class="fa fa-plus"></i></a>
                                  </div>
                              </div>
                          </div>
                          <div class="backside">
                              <div class="card" style="border-top: 2px solid #17a2b8; border-bottom:2px solid #17a2b8">
                                  <div class="card-body text-center mt-4">
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                      <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
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
           
              <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                      <div class="mainflip">
                          <div class="frontside">
                              <div class="card" style="border-top: 2px solid #17a2b8; border-bottom:2px solid #17a2b8">
                                  <div class="card-body text-center">
                                      <p><img class=" img-fluid" src="{{ asset('jen/assets/img/pic.png') }}" alt="card image"></p>
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                      <a href="" class="btn btn-primary btn-sm col-12"><i class="fa fa-plus"></i></a>
                                  </div>
                              </div>
                          </div>
                          <div class="backside">
                              <div class="card" style="border-top: 2px solid #17a2b8; border-bottom:2px solid #17a2b8">
                                  <div class="card-body text-center mt-4">
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                      <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
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
            
              <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                      <div class="mainflip">
                          <div class="frontside">
                              <div class="card" style="border-top: 2px solid #17a2b8; border-bottom:2px solid #17a2b8">
                                  <div class="card-body text-center">
                                      <p><img class=" img-fluid" src="{{ asset('jen/assets/img/pic.png') }}" alt="card image"></p>
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                      <a href="" class="btn btn-primary btn-sm col-12"><i class="fa fa-plus"></i></a>
                                  </div>
                              </div>
                          </div>
                          <div class="backside">
                              <div class="card" style="border-top: 2px solid #17a2b8; border-bottom:2px solid #17a2b8">
                                  <div class="card-body text-center mt-4">
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                      <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
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
          
              <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                      <div class="mainflip">
                          <div class="frontside">
                              <div class="card" style="border-top: 2px solid #17a2b8; border-bottom:2px solid #17a2b8">
                                  <div class="card-body text-center">
                                      <p><img class=" img-fluid" src="{{ asset('jen/assets/img/pic.png') }}" alt="card image"></p>
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                      <a href="" class="btn btn-primary btn-sm col-12"><i class="fa fa-plus"></i></a>
                                  </div>
                              </div>
                          </div>
                          <div class="backside">
                              <div class="card" style="border-top: 2px solid #17a2b8; border-bottom:2px solid #17a2b8">
                                  <div class="card-body text-center mt-4">
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                      <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
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
            
              <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                      <div class="mainflip">
                          <div class="frontside">
                              <div class="card" style="border-top: 2px solid #17a2b8; border-bottom:2px solid #17a2b8">
                                  <div class="card-body text-center">
                                      <p><img class=" img-fluid" src="{{ asset('jen/assets/img/pic.png') }}" alt="card image"></p>
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                      <a href="" class="btn btn-primary btn-sm col-12"><i class="fa fa-plus"></i></a>
                                  </div>
                              </div>
                          </div>
                          <div class="backside">
                              <div class="card" style="border-top: 2px solid #17a2b8; border-bottom:2px solid #17a2b8">
                                  <div class="card-body text-center mt-4">
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                      <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
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
         
  
          </div>
      </div>
  </section>
  

{{-- <div class="row" id="contatti">
<div class="container mt-5" >

    <div class="row" style="height:550px;">
      <div class="col-md-6 maps" >
     
         <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Frisco,%20TX%2075035+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
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
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message" rows="3" required></textarea>
              </div>
            </div>
            <div class="col-lg-12" style="float: right">
              
              <button class="btn" style="background-color:#00A8A3;color:white;" type="submit">Sent</button>
           
            </div>
            
          </div>
        </form>
        <div class="text-white">
          <i class="fa fa-phone mt-3" style="color: black"></i> <a href="tel:++1 (469) 715-8408" style="color: black">+1 (469) 715-8408</a><br>
      
          <i class="fa fa-envelope mt-3" style="color: black"></i> <a href="mailto:spn@selfpaynet.com" style="color: black">spn@selfpaynet.com</a><br>
          <i class=" fa fa-map-marker mt-3" style="color: black"></i> <a  style="color: black">SelfPayNet
            15922 Eldorado Pkwy Ste 500 #845
            Frisco, TX 75035</a><br>
          
          <div class="my-4">
          
          </div>
          </div>
        </div>
        
      </div>

    </div>
</div>
</div> --}}
<div class="contact3 py-5">
  <div class="row no-gutters">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="card-shadow">
            <img src="{{ asset('jen/assets/img/contact3.png') }}" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-box ml-3">
            <h1 class="font-weight-light mt-2">Contact Us</h1>
            <form class="mt-4">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group mt-2">
                    <input class="form-control" type="text" placeholder="Name">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group mt-2">
                    <input class="form-control" type="email" placeholder="Email Address">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group mt-2">
                    <input class="form-control" type="text" placeholder="Phone">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group mt-2">
                    <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                  </div>
                </div>
                <div class="col-lg-12">
                  <button type="submit" class="btn  mt-3 text-white border-0 px-3 py-2" style="background: #17a2b8"><span>Sent Message</span></button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="card mt-4 border-0 mb-4">
            <div class="row">
              <div class="col-lg-4 col-md-4">
                <div class="card-body d-flex align-items-center c-detail">
                  <div class="mr-3 align-self-center">
                    <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon1.png">
                  </div>
                  <div class="">
                    <h6 class="font-weight-medium">Address</h6>
                    <p class=""> 15922 Eldorado Pkwy Ste <br> 500 #845
                      Frisco, TX 75035
                      </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="card-body d-flex align-items-center c-detail">
                  <div class="mr-3 align-self-center">
                    <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon2.png">
                  
                  </div>
                
                  <div class="">
                    <h6 class="font-weight-medium">Phone</h6>
                    <p class="">+1 (469) 715-8408
                      </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="card-body d-flex align-items-center c-detail">
                  <div class="mr-3 align-self-center">
                    <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon3.png">
                   
                  </div>
                  <div class="">
                    <h6 class="font-weight-medium">Email</h6>
                    <p class="">
                      spn@selfpaynet.com
                    
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
          &copy; Copyright <strong><span>SelfPayNet</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            
         
        </div>
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
</body>

</html>