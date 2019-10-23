<!DOCTYPE html>
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

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Single, Shared Room Accommodation - Shivalaya Yoga Ashram</title>
     <meta name="description" content="At Shivalaya Yoga Ashram, we offer 3 best different kinds of accommodation. All our rooms overlook the mountains and lake, offering a spectacular view of the scenery around." />
    <meta name="keywords" content="Best Accommodation, Accommodation for yoga teacher training"/>
    <meta name="topic" content="kinds of accommodation, rooms"/>
    <meta name="abstract" content="residental yoga with all facilities food,Bed,various types of extra things , 200 , 300 and 500 ytt best training with accomodation center, yoga accommodation"/>
    <meta name="author" content="shivalayayogaashram"/>
    <link rel="shortcut icon" type="image/png" href="{{ url('content/img/favicon.png') }}"/>
    
    <link rel="stylesheet" href="{{ url('content/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- custome css -->
    <link rel="stylesheet" href="{{ url('content/css/navbar.css')}}">
    <link rel="stylesheet" href="{{ url('content/css/footer.css')}}">
    <link rel="stylesheet" href="{{ url('content/css/accommodation.css')}}">
    <!--Font-->
    <link rel="stylesheet" href="{{ url('content/css/font.css')}}">
</head>
<body>
        <nav class="navbar navbar-light bg-white navbar-expand-lg sticky-top p-2">
      <a class="navbar-brand p-0" href="{{ url('/') }}"><img src="{{ url('content/img/logo.png')}}" alt="Shivalaya Yoga Ashram"></a>
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
    <div class="container">
        <label style="color: black; text-align: center;font-size: 20px;">{{ Session::get('success') }}</label>
        <div class="row">
            <div class="col-lg-12">
                <h3>ACCOMODATION</h3>
                <p>At Shivalaya Yoga Ashram, we offer 3 different kinds of accommodation. All our rooms overlook the mountains and lake, offering a spectacular view of the scenery around. Our three room options include:</p>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-lg-6">
                <h5>PRIVATE ROOMS</h5>
                <p></p>
                <h6>Facilities</h6>
                <ul class="list">
                    <li><i class="fa fa-check" aria-hidden="true"></i></li>
                    <li><i class="fa fa-check" aria-hidden="true"></i></li>
                    <li><i class="fa fa-check" aria-hidden="true"></i></li>
                    <li><i class="fa fa-check" aria-hidden="true"></i></li>
                </ul>
                <div class="d-flex align-items-center">
                        <div class="price">
                                <p class="mb-0">Price $</p>
                        </div>
                        <div >
        <button class="enq btn btnCust" data-toggle="modal" data-target="#myModal">Enquire</button>
        <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      
                      <h4 class="modal-title">Enquiry Form</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
              <form action="{{ url('/emails/enquiry') }}" accept-charset="UTF-8" method="POST">

                {{ csrf_field() }}
                      <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name"  placeholder="First Name" required="required">
                      </div>
                     
                      <div class="form-group">
                              <input type="text" name="number" class="form-control" id="number"  placeholder="Phone Number" required="required">
                      </div>
                      <div class="form-group">
                              <input type="email" name="email" class="form-control" id="exampleInputEmail1"  placeholder="Email ID" data-validation="email" required="required">
                      </div>
                      <div class="form-group">
                              <textarea class="form-control" name="message" id="message"  placeholder="Message" rows="4" cols="50"></textarea>
                      </div> 
                      <button type="submit" class="btn btn-success">Submit</button>                                                    
              </form>
                    </div>
                    
                  </div>
                  
                </div>
              </div>
                        </div>
                    </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <img src="{{ url('content/img/1.png') }}" alt="yoga retreat nepal kathmandu" class="rooms">
                </div>
            </div>
        </div>
        <div class="row pt-5">
                <div class="col-lg-6">
                    <h5>SHARING ROOMS</h5>
                    <h6>Facilities</h6>
                    <ul class="list">
                        <li><i class="fa fa-check" aria-hidden="true"></i></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i></li>
                    </ul>
                    <div class="d-flex align-items-center">
                            <div class="price">
                                    <p class="mb-0">Price $500</p>
                            </div>
                            <div >
                                    <button class="enq btn btnCust" data-toggle="modal" data-target="#myModal">Enquire</button>
                            </div>
                        </div>
                </div>
                <div class="col-lg-6">
                    <div>
                        <img src="{{ url('content/img/2.jpg') }}" alt="yoga retreat nepal pokhara" class="rooms">
                    </div>
                </div>
            </div> 
            <p>All the rooms provided to our guests are fully furnished with attached bathrooms. Guests will be able to avail all basic room facilities while special arrangements are available only upon request.</p>       
    </div>
    
    
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
          <img src="{{ url('content/img/footerlogoo.png')}}" alt="free yoga in kathmandu">
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
      
        <p class="text-center copyright-para">Copyright &#169; 2019 Shivalaya. All rights Reserved.<a href="#">Privacy Policy</a> | <a href="#">Terms & conditions</a></p>
      </div>
    </div>
  </div>
  </div>
</section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ url('content/bootstrap/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{ url('content/bootstrap/popper.min.js')}}"></script>
    <script src="{{ url('content/bootstrap/bootstrap.min.js')}}"></script>
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    
    <style type="text/css">
      body{
    font-family: 'Ubuntu', sans-serif;
    }
    .btnCust{
    	color:#fff;
    	background-image: linear-gradient(to bottom left,#1a0b8c, #fa50cb);
    	border:none;
    	border-radius:.5rem;
    	padding:.5rem;
    }
    </style>
    
</body>
</html>