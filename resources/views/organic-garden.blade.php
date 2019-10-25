<!doctype html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143349823-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-143349823-1');
        </script>
        
    <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5d5795d7eb1a6b0be607f2a7/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
    <!--End of Tawk.to Script-->

	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('content/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Lightbox -->
    <link rel="stylesheet" href="{{ url('lightbox2/dist/css/lightbox.min.css') }}">

    <!-- custome css -->
    <link rel="stylesheet" href="{{ url('content/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ url('content/css/footer.css') }}">

    <title>Organic Garden</title>
    <style>
      .img-div img, .img-div video {
        width: 100%;
        height: 12rem;
        padding: .25rem;
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: .25rem;
        max-width: 100%;
      }
      
      .cust-col [class*='col-'] {
        padding-left: 0;
        padding-right: 0;
      }
      .borderCust{
        border-left:3px solid purple;
        border-right:3px solid purple;
        padding:2rem;
      }
      .cust-col{
        margin-top:1rem;
        margin-bottom: 1rem;
      }
    </style>
  </head>
  <body>
    <!-- header and navbar -->
    <nav class="navbar navbar-light bg-white navbar-expand-lg sticky-top p-2">
      <a class="navbar-brand p-0" href="{{ url('/') }}"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#shivanavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse"  id="shivanavbar">
      <ul class="navbar-nav w-100 justify-content-around">
        <li class="nav-item dropdown">
          <a  href="{{ url('/shivalayayttc') }}" class="nav-link dropdown-toggle" id="yttcDropdown" data-hover="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          YOGA COURSES
          </a>
          <ul class="dropdown-menu" aria-labelledby="yttcDropdown">
            <a href="{{ url('/ryt-200-hour-yoga-teacher-training') }}" class="dropdown-item">200 HOURS YTTC</a>
            <a href="{{ url('/ryt-300-hour-yoga-teacher-training') }}" class="dropdown-item">300 HOURS YTTC</a>
            <a href="{{ url('/ryt-500-hour-yoga-teacher-training') }}" class="dropdown-item">500 HOURS YTTC</a>
            <!-- <a href="{{ url('/200-hour-tantra-yoga-teacher-training') }}" class="dropdown-item">200 HOURS TANTRA YTTC</a> --> 
            
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="curriculumDropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">
          CURRICULUM
          </a>
          <div class="dropdown-menu" aria-labelledby="curriculumDropdown">
            <a href="{{ url('/200-hour-yttc-curriculum') }}" class="dropdown-item">200 HOURS</a>
            <a href="{{ url('/300-hour-yttc-curriculum') }}" class="dropdown-item">300 HOURS</a>
            <a href="{{ url('/500-hour-yttc-curriculum') }}" class="dropdown-item">500 HOURS</a>
          </div>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="beginnersyogaDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
          BEGINNERS YOGA
          </a>
          <div class="dropdown-menu">
            <a href="#" class="dropdown-item">BEGINNERS YOGA</a>
            <a href="meditation.html" class="dropdown-item">MEDITATION</a>
          </div>
        </li> -->
        <!-- <li class="nav-item"><a class="nav-link" href="{{ url('/features') }}">FEATURES</a></li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="retreatsDropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">
          RETREATS
          </a>
          <div class="dropdown-menu" aria-labelledby="retreatsDropdown">
           <div class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">RETREATS IN NEPAL</a>
                <span class="dropdown-menu">
                  <a class="dropdown-item" href="{{ url('/yoga-sadhana-retreat') }}">YOGA SADHANA RETREAT</a>
                  <a class="dropdown-item" href="{{ url('/journey-back-to-nature-retreat') }}">JOURNEY BACK TO NATURE RETREAT</a>
                  <a class="dropdown-item" href="{{ url('/chakra-awakening-retreat') }}">CHAKRA AWAKENING RETREAT</a>
                  </span>
            </div>
                <!-- <a href="{{ url('/retreats-in-kerala') }}" class="dropdown-item">RETREATS IN KERALA</a> --> 
                <a href="{{ url('/yoga-and-trekking') }}" class="dropdown-item">YOGA AND TREKKING</a>  
          </div>
        </li>
        
        <li class="nav-item"><a class="nav-link" href="{{ url('/location') }}">LOCATION</a></li>         <li class="nav-item active"><a class="nav-link" href="{{ url('/gallery') }}">GALLERY</a></li>
        <li class="nav-item active"><a class="nav-link" href="{{ url('/organic-garden') }}">ORGANIC GARDEN</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/contact-us') }}">CONTACT US</a></li>
        <li class="nav-item"><a class="nav-link bookbtn" href="{{ url('/details') }}">BOOK NOW</a></li>
      </ul>
      </div>
    </nav>

<div class="container d-flex justify-content-center">
  <div class="col-md-10 borderCust">

<p>
By growing as much of our own food as possible we support our bodies and environment to be healthy and in-balance. 
"As it is within, so it is without"
We are currently working to cultivate more garden space to become more self-sustaining. We are also planning an Ayurvedic Herbs garden to help manifest healing of ourselves and our guests. 
We do not see this earth as belonging to us; rather we give gratitude and wisely use the abundance which is all around us.
</p>
  </div>
</div>

<!-- Organic garden gallery -->
<div class="container cust-col">
   <h1 class="text-center mt-3 mb-2" style="color:purple">Our Organic Garden</h1>
    <div class="row">
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="img-div">
          <a class="example-image-link" href="{{ url('content/img/organicgarden1.jpg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
              <img class="example-image" src="{{ url('content/img/organicgarden1.jpg') }}" alt="yoga classes in nepal"/>
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="img-div">
          <a class="example-image-link" href="{{ url('content/img/organicgarden2.jpg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
              <img class="example-image" src="{{ url('content/img/organicgarden2.jpg') }}" alt="yoga trek in nepal"/>
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="img-div">
          <a class="example-image-link" href="{{ url('content/img/organicgarden3.jpg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
              <img class="example-image" src="{{ url('content/img/organicgarden3.jpg') }}" alt="yoga retreat nepal"/>
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="img-div">
          <a class="example-image-link" href="{{ url('content/img/organicgarden4.jpg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
              <img class="example-image" src="{{ url('content/img/organicgarden4.jpg') }}" alt="yoga in nepal kathmandu"/>
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="img-div">
          <a class="example-image-link" href="{{ url('content/img/organicgarden5.jpg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
              <img class="example-image" src="{{ url('content/img/organicgarden5.jpg') }}" alt="yoga teacher training courses nepal"/>
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="img-div">
          <a class="example-image-link" href="{{ url('content/img/organicgarden6.jpg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
              <img class="example-image" src="{{ url('content/img/organicgarden6.jpg') }}" alt="yoga meditation retreat pokhara"/>
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="img-div">
          <a class="example-image-link" href="{{ url('content/img/organicgarden7.jpg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
              <img class="example-image" src="{{ url('content/img/organicgarden7.jpg') }}" alt="yoga pokhara"/>
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="img-div">
          <a class="example-image-link" href="{{ url('content/img/organicgarden8.jpg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
              <img class="example-image" src="{{ url('content/img/organicgarden8.jpg') }}" alt="himalayan yoga academy"/>
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="img-div">
          <a class="example-image-link" href="{{ url('content/img/organicgarden9.jpg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
              <img class="example-image" src="{{ url('content/img/organicgarden9.jpg') }}" alt="yoga kathmandu"/>
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="img-div">
          <a class="example-image-link" href="{{ url('content/img/organicgarden10.jpg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
              <img class="example-image" src="{{ url('content/img/organicgarden10.jpg') }}" alt="nepal meditation retreat"/>
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="img-div">
          <a class="example-image-link" href="{{ url('content/img/organicgarden11.jpg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
              <img class="example-image" src="{{ url('content/img/organicgarden11.jpg') }}" alt="nepal yoga treking package"/>
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="img-div">
          <a class="example-image-link" href="{{ url('content/img/organicgarden12.jpg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
              <img class="example-image" src="{{ url('content/img/organicgarden12.jpg') }}" alt="hatha yoga"/>
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="img-div">
          <a class="example-image-link" href="{{ url('content/img/organicgarden13.jpg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
              <img class="example-image" src="{{ url('content/img/organicgarden13.jpg') }}" alt="hatha yoga benifits"/>
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="img-div">
          <a class="example-image-link" href="{{ url('content/img/organicgarden14.jpg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
              <img class="example-image" src="{{ url('content/img/organicgarden14.jpg') }}" alt="hatha yoga for beginners"/>
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="img-div">
            <video width="100%" id="vid" autoplay controls muted loop>
                <source src="content/videos/compressed.mp4" type="video/mp4">
            </video>
        </div>
      </div>
    </div>
</div>

<!-- footer -->
<section>
  <div class="footerCust pt-md-5 pb-md-3">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
            <div class="row mt-3 mt-md-0">
                <div class="col-4 footer-rys">
                    <img src="{{ url('content/img/RYS-200.jpg')}}" alt="yoga alliance certificate rys-200">
                </div>
                <div class="col-4 footer-rys">
                    <img src="{{ url('content/img/RYS-300.jpg')}}" alt="yoga alliance certificate rys-300">
                </div>
                <div class="col-4 footer-rys">
                    <img src="{{ url('content/img/RYS-500.jpg')}}" alt="yoga alliance certificate rys-500">
                </div>
            </div>
          <div class="emailsubscribe">
              <div id = "sub">
            <label style="color: black;">{{ Session::get('success') }}</label>
            <label style="color: black;">{{ Session::get('failure') }}</label>
              </div>
            
            <h6 class="text-center">JOIN OUR MAILING LIST</h6>
            <div class="input-group-append mb-3">
              <form action="{{ url('/emails/subscribe') }}" accept-charset="UTF-8" method="POST" class="d-flex">
                {{ csrf_field() }}
              <input type="email" name="email" id="email" class="form-control myForm" placeholder="Your Email"  data-validation="email" required="required">
              <button type="submit" class="btn footerbtn">Subscribe</button>
              </form>
          </div>
        </div>
      </div>
      <div class="col-md-4  d-flex align-items-center justify-content-center">
        <div class="text-center">
         
        </div>
      </div>
      <div class="col-md-4 d-md-flex justify-content-center">
          <div class="social-icons">
            <h6 class="text-center">STAY CONNECTED</h6>
                <p style="color:white"><i class="fa fa-map-marker" aria-hidden="true"></i> Begnas Canal Rd, Lekhnath 33700, Nepal</p>
                <p style="color:white"><i class="fa fa-mobile" aria-hidden="true"></i> +977 9846265340</p>
                
                <p style="color:white"><i class="fa fa-envelope" aria-hidden="true"></i> shivalayayogaschool975@gmail.com</p>
            <ul class="d-flex justify-content-between pt-2 p-0">
              <li><a href="https://www.facebook.com/shivalayayogaaashram/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="https://www.instagram.com/shivalayayogaaashram/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="https://twitter.com/ShivalayaAshram" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="{{ url('/blog')}} "><i class="fa fa-newspaper-o" aria-hidden="true"></i></a></li>
              <li><a href="https://www.youtube.com/channel/UCT_LB6XE7y2mlbp16Z-BZHg" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></li> 
            </ul>
          </div>
        </div>
      <div class="container footer-menu mt-5">
        <ul class="col-md-10 d-md-flex justify-content-center">
          <li><a href="{{ url('about-us')}} ">ABOUT US</a></li>
          <li><a href="{{ url('/shivalayayttc') }}">COURSES</a></li>
          <li><a href="{{ url('/gallery') }}">GALLERY</a></li>
          <li><a href="{{ ('/blog') }}">BLOGS</a></li>
          <li><a href="{{ url('/location') }}">LOCATION</a></li>
          <li><a href="{{ url('/accommodation') }}">ACCOMMODATION</a></li>
        </ul>
      
        <p class="text-center copyright-para">Copyright &#169; 2019 Nepal Spiritual. All rights Reserved.<a href="#">Privacy Policy</a> | <a href="#">Terms & conditions</a></p>
      </div>
    </div>
  </div>
  </div>
</section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ url('content/bootstrap/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ url('content/bootstrap/popper.min.js') }}"></script>
    <script src="{{ url('content/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{url('lightbox2/dist/js/lightbox-plus-jquery.min.js') }}"></script>
    <script src="{{ url('content/js/commonscript.js')}}"></script>
  </body>
</html>
