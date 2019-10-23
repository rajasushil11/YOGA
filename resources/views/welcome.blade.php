<!doctype html>
<html lang="en-US">
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('content/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Font-->
    <link rel="stylesheet" href="{{ url('content/css/font.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/g/jquery.owlcarousel@1.31(owl.carousel.css+owl.theme.css)">

    <!-- custome css -->
    <link rel="stylesheet" href="{{ url('content/css/footer.css')}}">
    <link rel="stylesheet" href="{{ url('content/css/navbar.css')}}">
   
    <link rel="stylesheet" href="{{ url('content/css/style.css')}}">
    <link rel="stylesheet" href="{{ url('content/css/responsive.css')}}">

    <title>Shivalayas- Book Exclusive Yoga Teacher Training in Nepal</title>
     <meta name="description" content="Shivalaya Yoga Ashram offers RYT 200 hour, 300 hour and 500 hour residential multi-style yoga teacher training exclusively only for yoga enthusiast in Pokhara, Nepal." />
    <meta name="keywords" content="Yoga teacher training in Nepal"/>
    <meta name="topic" content="RYT 200, RYT 300, and RYT 500, Yoga Alliance registered school (RYS)"/>
    <meta name="abstract" content="Yoga teacher training, 200 hour yoga teacher training, 300 hours yoga teacher training, 500 hours yoga teacher training, 200 RYS, 300 RYS, 500 RYS, yoga teacher training in nepal, yoga teacher training in pokhara"/>
    <meta name="author" content=""/>
    <link rel="shortcut icon" type="image/png" href="{{ url('content/img/favicon.png') }}"/>
  </head>
  <body>
   <!-- <div id="spinoverlay" >
      <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
            <p>Loading...</p>
        </div>
  </div>  -->

      <!-- header and navbar -->
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

<section>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-none d-md-block w-100" src="{{ url('content/img/slider/pa1.jpg') }}" alt="First slide" height="auto">
      <img class="d-sm-none w-100" src="{{ url('content/img/slider/pa1-sm.jpg') }}" alt="First slide" height="auto">
        <div class="carousel-caption d-none d-md-block">
         <h5></h5>
         <p></p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-none d-md-block w-100" src="{{ url('content/img/slider/cr1.jpg') }}" alt="Second slide" height="auto">
      <img class="d-sm-none w-100" src="{{ url('content/img/slider/cr1-sm.jpg') }}" alt="Second slide" height="auto">
        <div class="carousel-caption d-none d-md-block">
         <h5></h5>
         <p></p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-none d-md-block w-100" src="{{ url('content/img/slider/rb1.jpg') }}" alt="Third slide" height="auto">
      <img class="d-sm-none w-100" src="{{ url('content/img/slider/rb1-sm.jpg') }}" alt="Third slide" height="auto">
        <div class="carousel-caption d-none d-md-block">
         <h5></h5>
         <p></p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-none d-md-block w-100" src="{{ url('content/img/slider/gr1.jpg') }}" alt="Fourth slide" height="auto">
      <img class="d-sm-none w-100" src="{{ url('content/img/slider/gr1-sm.jpg') }}" alt="Fourth slide" height="auto">
        <div class="carousel-caption d-none d-md-block">
         <h5></h5>
         <p></p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-none d-md-block w-100" src="{{ url('content/img/slider/ar1.jpg') }}" alt="Fifth slide" height="auto">
      <img class="d-sm-none w-100" src="{{ url('content/img/slider/ar1-sm.jpg') }}" alt="Fifth slide" height="auto">
        <div class="carousel-caption d-none d-md-block">
         <h5></h5>
         <p></p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-none d-md-block w-100" src="{{ url('content/img/slider/yh1.jpg') }}" alt="Sixth slide" height="auto">
      <img class="d-sm-none w-100" src="{{ url('content/img/slider/yh1-sm.jpg') }}" alt="Sixth slide" height="auto">
        <div class="carousel-caption d-none d-md-block">
         <h5></h5>
         <p></p>
        </div>
    </div>
</div
  
  <!-- Controls -->
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-touch="true" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-touch="true" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>

<section class="mb-5">
  <div class="secondDiv">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-8 p-md-5 second-div-position">
        <div class="secondDivContent my-md-5 px-md-5">
          <h1>LEARN YOGA AT WORLD'S MOST BEAUTIFUL PLACE</h1>
            <p class="px-md-3 w-100">An oasis for spirituality and a home for those seeking peace, Nepal Spiritual is located on a hilltop overlooking Begnas Lake. We are a product of our environment. Our environment shapes us up. As per the Yogic Culture, yoga is taught and practiced around the lakes, rivers and mountains. Living close to the mountains and forests calms the mind and recharges your energies.</p>
            <a href="{{ url('/contact-us') }}"><button class="btn btn-lg btnCust">TALK TO US</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<section>
        <div class="container">
            <h2 class="text-center pb-4">YOGA ALLIANCE CERTIFICATIONS</h2>
            <div class="row text-md-center justify-content-center">
                <div class="col-lg-6">
                    <p class="lead" style="font-weight:500;">
                            All Courses offered are accredited by Yoga Alliance.
                    </p>
                    <p>Teachers can register as a RYT 200, RYT 300, and RYT 500, if they successfully complete our 200-hour, 300-hour 500-hour Yoga Teacher Training program at our Yoga Alliance registered school (RYS).</p>
                </div>
                <div class="col-6 col-md-2 ">
                    <div class="p-3 p-md-0">
                        <img src="{{ url('content/img/RYT-200.jpg')}}" alt="Yoga Alliance RYT 200" width="100%">
                    </div>
                </div>
                <div class="col-6 col-md-2 ">
                    <div class="p-3 p-md-0">
                      <img src="{{ url('content/img/RYT-500.jpg')}}" alt="Yoga Alliance RYT 500" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="mb-3 mt-5">
  <div class="container">
    <h1 class="text-center mb-5">POPULAR YOGA COURSES</h1>
    <div class="row">
     <!-- <div class="col-md-6 col-lg-3"> -->
      <div class="col-md-6 col-lg-4">
        <div class="popular-courses">
          <a href="{{ url('/ryt-200-hour-yoga-teacher-training') }}">
          <div class="popular-img">
            <img src="{{ url('content/img/ytt200.png')}}" alt="200 Hour Yoga Teacher Training">
            <div class="overlay">
              <b class="icon" title="User Profile">
                <p>$ 1200</p>
              </b>
            </div>
          </div>
          </a>
          <p class="underlinePopular pt-2">200 HOURS YTT</p>
        </div>
      </div>

     <!-- <div class="col-md-6 col-lg-3"> -->
      <div class="col-md-6 col-lg-4">
        <div class="popular-courses">
          <a href="{{ url('/ryt-300-hour-yoga-teacher-training') }}">
          <div class="popular-img">
            <img src="{{ url('content/img/yogi-aman-naughan.jpg')}}" alt="300 Hours Yoga Teacher Training">
            <div class="overlay">
              <b class="icon" title="User Profile">
                <p>$ 1400</p>
              </b>
            </div>          
          </div>
        </a>
          <p class="underlinePopular pt-2">300 HOURS YTT</p>
        </div>
      </div>
      
     <!-- <div class="col-md-6 col-lg-3"> -->
      <div class="col-md-6 col-lg-4">
        <div class="popular-courses">
          <a href="{{ url('/ryt-500-hour-yoga-teacher-training') }}">
          <div class="popular-img">
            <img src="{{ url('content/img/ytt500.jpg')}}" alt="500 Hour Yoga Teacher Training">
            <div class="overlay">
              <b class="icon" title="User Profile">
                <p>$ 2800</p>
              </b>
            </div>
          </div>
        </a>
          <p class="underlinePopular pt-2">500 HOURS YTT</p>
        </div>
      </div>
    <!--  <div class="col-md-6 col-lg-3">
        <div class="popular-courses">
          <a href="{{ url('/200-hour-tantra-yoga-teacher-training') }}">
          <div class="popular-img">
            <img src="{{ url('content/img/tantra200.jpg')}}" alt="Tantra Yoga Teacher Training">
            <div class="overlay">
              <b class="icon" title="User Profile">
                <p>$ 1500</p>
              </b>
            </div>
          </div>
        </a>
          <p class="underlinePopular pt-2">200 HOURS TANTRA YTT</p>
        </div>
      </div> -->
    </div>
  </div>  
</section>

<section class="mb-3 table-bg pt-2">
  <h1 class="text-center my-3">DATES TO REMEMBER</h1>
  <div class="container d-flex flex-column">
    <ul class="nav nav-tabs navTabCust">
      <li class="nav-item">
        <a href="#ytt200" data-toggle="tab" class="nav-link active">200 YTTC</a></li>
      <li class="nav-item">
        <a href="#ytt300" data-toggle="tab" class="nav-link">300 YTTC</a></li>
      <li class="nav-item">
        <a href="#ytt500" data-toggle="tab" class="nav-link">500 YTTC</a></li>
      <li class="nav-item">
        <a href="#tantra200" data-toggle="tab" class="nav-link">200 TANTRA</a></li>
    </ul>

  <div class="tab-content">
    <div id="ytt200" class="container tab-pane active">
      <div class="table-responsive">
      <table class="table">
        <tr class="table-header">
          <td>FROM</td>
          <td>TO</td>
          <td>PRIVATE ROOM</td>
          <td>SHARED ROOM(2)</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>19 JAN 2020</td>
          <td>15 FEB 2020</td>
          <td>USD 1500</td>
          <td>USD 1200</td>
          <td><a href="{{ url('/details') }}"><button class="btn btn-success btn-sm">ENQUIRY NOW</button></a></td>
          <!--<td><a href="https://www.yogi360.com/shivalaya-yoga-ashram-reservation"><button class="btn btn-success btn-sm">BOOK NOW</button></a></td>-->
        </tr>
        <tr>
          <td>23 FEB 2020</td>
          <td>21 MAR 2020</td>
          <td>USD 1500</td>
          <td>USD 1200</td>
          <td><a href="{{ url('/details') }}"><button class="btn btn-success btn-sm">ENQUIRY NOW</button></a></td>
          <!--<td><a href="https://www.yogi360.com/shivalaya-yoga-ashram-reservation"><button class="btn btn-success btn-sm">BOOK NOW</button></a></td>-->
        </tr>
         <tr>
          <td>1 APRIL 2020</td>
          <td>28 APRIL 2020</td>
          <td>USD 1500</td>
          <td>USD 1200</td>
          <td><a href="{{ url('/details') }}"><button class="btn btn-success btn-sm">ENQUIRY NOW</button></a></td>
          <!--<td><a href="https://www.yogi360.com/shivalaya-yoga-ashram-reservation"><button class="btn btn-success btn-sm">BOOK NOW</button></a></td>-->
        </tr>
        <tr>
         <td>7 JUNE 2020</td>
          <td>4 JULY 2020</td>
          <td>USD 1500</td>
          <td>USD 1200</td>
          <td><a href="{{ url('/details') }}"><button class="btn btn-success btn-sm">ENQUIRY NOW</button></a></td>
          <!--<td><a href="https://www.yogi360.com/shivalaya-yoga-ashram-reservation"><button class="btn btn-success btn-sm">BOOK NOW</button></a></td>-->
        </tr>
        <tr>
         <td>1 AUG 2020</td>
          <td>28 AUG 2020</td>
          <td>USD 1400</td>
          <td>USD 1200</td>
          <td><a href="{{ url('/details') }}"><button class="btn btn-success btn-sm">ENQUIRY NOW</button></a></td>
          <!--<td><a href="https://www.yogi360.com/shivalaya-yoga-ashram-reservation"><button class="btn btn-success btn-sm">BOOK NOW</button></a></td>-->
        </tr>
        <tr>
         <td>4 NOV</td>
          <td>1 DEC</td>
          <td>USD 1400</td>
          <td>USD 1200</td>
          <td><a href="{{ url('/details') }}"><button class="btn btn-success btn-sm">ENQUIRY NOW</button></a></td>
          <!--<td><a href="https://www.yogi360.com/shivalaya-yoga-ashram-reservation"><button class="btn btn-success btn-sm">BOOK NOW</button></a></td>-->
        </tr>
        <tr>
         <td>3 DEC</td>
          <td>30 DEC</td>
          <td>USD 1400</td>
          <td>USD 1200</td>
          <td><a href="{{ url('/details') }}"><button class="btn btn-success btn-sm">ENQUIRY NOW</button></a></td>
          <!--<td><a href="https://www.yogi360.com/shivalaya-yoga-ashram-reservation"><button class="btn btn-success btn-sm">BOOK NOW</button></a></td>-->
        </tr>
      </table>
    </div>
    </div>
    <div id="ytt300" class="container tab-pane fade">
      <div class="table-responsive">
      <table class="table">
        <tr class="table-header">
          <td>FROM</td>
          <td>TO</td>
          <td>PRIVATE ROOM</td>
          <td>SHARED ROOM(2)</td>
          <td></td>
        </tr>
        <tr>
          <td>1 MAY 2020</td>
          <td>31 MAY 2020</td>
          <td>USD 1700</td>
          <td>USD 1400</td>
          <td><a href="{{ url('/details') }}"><button class="btn btn-success btn-sm">ENQUIRY NOW</button></a></td>
          <!--<td><a href="https://www.yogi360.com/shivalaya-yoga-ashram-reservation"><button class="btn btn-success btn-sm">BOOK NOW</button></a></td>-->
        </tr>
        <tr>
          <td>29 SEPT</td>
          <td>29 OCT</td>
          <td>USD 1600</td>
          <td>USD 1400</td>
          <td><a href="{{ url('/details') }}"><button class="btn btn-success btn-sm">ENQUIRY NOW</button></a></td>
          <!--<td><a href="https://www.yogi360.com/shivalaya-yoga-ashram-reservation"><button class="btn btn-success btn-sm">BOOK NOW</button></a></td>-->
        </tr>
      </table>
    </div>
    </div>
    <div id="ytt500" class="container tab-pane fade">
        <div class="table-responsive">
       <table class="table">
        <tr class="table-header">
          <td>FROM</td>
          <td>TO</td>
          <td>PRIVATE ROOM</td>
          <td>SHARED ROOM(2)</td>
          <td></td>
        </tr>
        <tr>
         <td>1 APRIL 2020</td>
          <td>31 MAY 2020</td>
          <td>USD 3200</td>
          <td>USD 2800</td>
          <td><a href="{{ url('/details') }}"><button class="btn btn-success btn-sm">ENQUIRY NOW</button></a></td>
          <!--<td><a href="https://www.yogi360.com/shivalaya-yoga-ashram-reservation"><button class="btn btn-success btn-sm">BOOK NOW</button></a></td>-->
        </tr>
      </table>
      </div>
    </div>
    <div id="tantra200" class="container tab-pane fade">
        <div class="table-responsive">
       <table class="table">
        <tr class="table-header">
          <td>FROM</td>
          <td>TO</td>
          <td>PRIVATE ROOM</td>
          <td>SHARED ROOM(2)</td>
          <td></td>
        </tr>
         <tr>
          <td>10 DEC</td>
          <td>15 DEC</td>
          <td>USD 1600</td>
          <td>USD 1500</td>
          <td><a href="{{ url('/details') }}"><button class="btn btn-success btn-sm">ENQUIRY NOW</button></a></td>
          <!--<td><a href="https://www.yogi360.com/shivalaya-yoga-ashram-reservation"><button class="btn btn-success btn-sm">BOOK NOW</button></a></td>-->
        </tr>
        <tr>
         <td>10 DEC</td>
          <td>15 DEC</td>
          <td>USD 1600</td>
          <td>USD 1500</td>
          <td><a href="{{ url('/details') }}"><button class="btn btn-success btn-sm">ENQUIRY NOW</button></a></td>
          <!--<td><a href="https://www.yogi360.com/shivalaya-yoga-ashram-reservation"><button class="btn btn-success btn-sm">BOOK NOW</button></a></td>-->
        </tr>
         <tr>
          <td>10 DEC</td>
          <td>15 DEC</td>
          <td>USD 1600</td>
          <td>USD 1500</td>
          <td><a href="{{ url('/details') }}"><button class="btn btn-success btn-sm">ENQUIRY NOW</button></a></td>
          <!--<td><a href="https://www.yogi360.com/shivalaya-yoga-ashram-reservation"><button class="btn btn-success btn-sm">BOOK NOW</button></a></td>-->
        </tr>
        <tr>
         <td>10 DEC</td>
          <td>15 DEC</td>
          <td>USD 1600</td>
          <td>USD 1500</td>
          <td><a href="{{ url('/details') }}"><button class="btn btn-success btn-sm">ENQUIRY NOW</button></a></td>
          <!--<td><a href="https://www.yogi360.com/shivalaya-yoga-ashram-reservation"><button class="btn btn-success btn-sm">BOOK NOW</button></a></td>-->
        </tr>
      </table>
      </div>
    </div>
  </div>
  </div>
</section>


<section class="mb-3">
  <div class="container">
    <h1 class="text-center mb-5">MEET THE YOGA TEACHERS</h1>
    <div class="row justify-content-center">
    <div class="col-md-3">
        <div class="meet-teachers">
          <div class="meet-teachers-img"><a href="https://www.shivalayayogaashram.com.np/teachers-bio"><img src="{{ url('content/img/gopika.jpg')}}" alt="Yoga Teacher Nepal"></a></div>
          <p class="meet-color pt-2">YOGINI GOPIKA</p>
        </div>
      </div>
    <div class="col-md-3">
        <div class="meet-teachers">
          <div class="meet-teachers-img"><a href="https://www.shivalayayogaashram.com.np/teachers-bio"><img src="{{ url('content/img/yogi-aman.jpg')}}" alt="Yoga Trainer"></a></div>
          <p class="meet-color pt-2">YOGI AMAN NAUGHAN</p>
          <small class="meet-color">RISHIKESH</small>
        </div>
      </div>
      <div class="col-md-3">
        <div class="meet-teachers">
          <div class="meet-teachers-img"><a href="https://www.shivalayayogaashram.com.np/teachers-bio"><img src="{{ url('content/img/ratheesh-kochukatil.jpg')}}" alt="Yoga Trainer Nepal"></a></div>
          <p class="meet-color pt-2">SHIVA</p>
          <small class="meet-color">KERALA</small>
        </div>  
      </div>
      <div class="col-md-3">
        <div class="meet-teachers">
          <div class="meet-teachers-img"><a href="https://www.shivalayayogaashram.com.np/teachers-bio"><img src="{{ url('content/img/yogi-rishiraj-lamsal.jpg')}}" alt="Yogi Trainer"></a></div>
          <p class="meet-color pt-2">RISHI RAJ LAMSAL</p>
          <small class="meet-color">RISHIKESH</small>
        </div>
      </div>    
    </div>
  </div>  
</section>


<section class="pt-4 pb-5 testibg">
  <div class="clientsDiv container">
    <h1 class="text-center mb-5">WHAT OUR HAPPY CLIENTS SAY</h1>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="container">
    <div class="row justify-content-center">
            <div class="col-md-2 p-5 p-md-0">
                <img src="{{ url('content/img/avatar.png')}}" alt="Nepal Spiritual Review" class="testi_image">
            </div>
            <div class="col-md-3 p-0 d-flex justify-content-center flex-column text-center">
                <h4>HENRY RICHAD</h4>
                <p class="purple"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i></p>
            </div>
            <div class="col-md-5 d-flex align-items-center testi_para">
                <img src="{{ url('content/img/inverted_icon.png')}}" alt="Testimonial" class="testi_icon">
                <h6 class="m-0  p-3">
                        Me and my partner spent couple of days here at Nepal Spiritual , practicing some yoga and meditation. It was a wonderful experience here. I try to visit this place every time I visit Nepal.
                </h6>
            </div>
        </div>
    </div>
    </div>
    <div class="carousel-item">
    <div class="container">
    <div class="row justify-content-center">
            <div class="col-md-2 p-5 p-md-0">
                <img src="{{ url('content/img/avatar.png')}}" alt="Nepal Spiritual Reviews" class="testi_image">
            </div>
            <div class="col-md-3 p-0 d-flex justify-content-center flex-column text-center">
                <h4>GARY RYAN</h4>
                <p class="purple"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i></p>
            </div>
            <div class="col-md-5 d-flex align-items-center testi_para">
                <img src="{{ url('content/img/inverted_icon.png')}}" alt="Testimonial2" class="testi_icon">
                <h6 class="m-0  p-3">
                It was a life time experience for me travelling all the way from Ukraine to the kingdom of Himalayas, and learn the different disciplines of Yoga. I am happy to say that I am certified for taking 200 yttc training form Nepal Spiritual.
                </h6>
            </div>
        </div>
    </div>
    </div>
    <div class="carousel-item">
    <div class="container">
    <div class="row justify-content-center">
            <div class="col-md-2 p-5 p-md-0">
                <img src="{{ url('content/img/avatar.png')}}" alt="Yoga Review" class="testi_image">
            </div>
            <div class="col-md-3 p-0 d-flex justify-content-center flex-column text-center">
                <h4>STUART BINNY</h4>
                <p class="purple"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i></p>
            </div>
            <div class="col-md-5 d-flex align-items-center testi_para">
                <img src="{{ url('content/img/inverted_icon.png')}}" alt="Testimonial3" class="testi_icon">
                <h6 class="m-0  p-3">
                It was such a wonderful time here at Nepal Spiritual. I feel so light and energetic after spending time in this beautiful place. I recommend every one to spend at least a couple of week here.
                </h6>
            </div>
        </div>
    </div>
    </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="custPrevicon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="custNexticon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
  </div>
</div>
</section>

<!-- Image sliding section -->
<section>
  <div class="container-fluid mt-5 mb-5">
    <h1 class="text-center mb-5">ALL YOGA GALLERY</h1>
  <div class="prod-slider-container">
        <div class="inner-container">
        </div>

        <div class="owl-carousel">
            <div class="myitem m-2">
                <a href="{{ url('/gallery') }}"><img src="{{ url('content/img/gallery/slider/group1.jpg')}}" alt="yoga training" style="width:100%"></a>
            </div>
            <div class="myitem m-2">
                <a href="{{ url('/gallery') }}"><img src="{{ url('content/img/gallery/slider/group4.jpg')}}" alt="yoga training" style="width:100%"></a>
            </div>
            <div class="myitem m-2">
                <a href="{{ url('/gallery') }}"><img src="{{ url('content/img/gallery/slider/gallery-19-6-4-1.jpg')}}" alt="yoga training" style="width:100%"></a>
            </div>

            <div class="myitem m-2">
                <a href="{{ url('/gallery') }}"><img src="{{ url('content/img/gallery/slider/gallery-19-6-4.jpg')}}" alt="200 hour yoga teacher training" style="width:100%"></a>
            </div>
            <!--<div class="myitem m-2">-->
            <!--    <a href="{{ url('/gallery') }}"><img src="{{ url('content/img/gallery/maps.jpg')}}" alt="200 hour yoga teacher training" style="width:100%"></a>-->
            <!--</div>-->
            <div class="myitem m-2">
                <a href="{{ url('/gallery') }}"><img src="{{ url('content/img/gallery/slider/location_2.jpg')}}" alt="200 hour yoga teacher training" style="width:100%"></a>
            </div>
            <div class="myitem m-2">
                <a href="{{ url('/gallery') }}"><img src="{{ url('content/img/gallery/slider/location_1.jpg')}}" alt="best yoga teacher training india" style="width:100%"></a>
            </div>
            <div class="myitem m-2">
                <a href="{{ url('/gallery') }}"><img src="{{ url('content/img/gallery/slider/ashram_1.jpg')}}" alt="yoga teacher training in india" style="width:100%"></a>
            </div>
            <div class="myitem m-2">
                <a href="{{ url('/gallery') }}"><img src="{{ url('content/img/gallery/slider/group.jpg')}}" alt="yoga teacher training program" style="width:100%"></a>
            </div>
            <div class="myitem m-2">
                <a href="{{ url('/gallery') }}"><img src="{{ url('content/img/gallery/slider/group2.jpg')}}" alt="yoga retreat pokhara" style="width:100%"></a>
            </div>
            <div class="myitem m-2">
                <a href="{{ url('/gallery') }}"><img src="{{ url('content/img/gallery/slider/group3.jpg')}}" alt="yoga retreat pokhara" style="width:100%"></a>
            </div>
            <div class="myitem m-2">
                <a href="{{ url('/gallery') }}"><img src="{{ url('content/img/gallery/slider/food_1.jpg')}}" alt="food at yoga school" style="width:100%"></a>
            </div>
            <div class="myitem m-2">
                <a href="{{ url('/gallery') }}"><img src="{{ url('content/img/gallery/slider/breakfast_1.jpg')}}" alt="breakfast at school" style="width:100%"></a>
            </div>
            <div class="myitem m-2">
                <a href="{{ url('/gallery') }}"><img src="{{ url('content/img/gallery/slider/trek_1.jpg')}}" alt="treking to annapurna" style="width:100%"></a>
            </div>
            <div class="myitem m-2">
                <a href="{{ url('/gallery') }}"><img src="{{ url('content/img/gallery/slider/trek_2.jpg')}}" alt="treking to annapurna day 3" style="width:100%"></a>
            </div>
            <div class="myitem m-2">
                <a href="{{ url('/gallery') }}"><img src="{{ url('content/img/gallery/slider/gallery_image3.jpg')}}" alt="purna yoga retreat" style="width:100%"></a>
            </div>
            <div class="myitem m-2">
                <a href="{{ url('/gallery') }}"><img src="{{ url('content/img/gallery/slider/school_1.jpg')}}" alt="sunset at school restaurant" style="width:100%"></a>
            </div>
        </div>
    </div>

  </div>
</section>

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
      
        <p class="text-center copyright-para">Copyright &#169; 2019 Nepal Spiritual. All rights Reserved.<a href="#">Privacy Policy</a> | <a href="#">Terms & conditions</a></p>
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
    <script src="https://cdn.jsdelivr.net/g/jquery@2.2.4,jquery.owlcarousel@1.31"></script>
    <script src="{{ url('content/js/commonscript.js')}}"></script>
    <script>
      var overlay = document.getElementById("spinoverlay");
      window.addEventListener('load',function(){
      overlay.style.display = 'none';
      });

      // Image slider
      $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
          items: 4,
          autoPlay: 2000,
          itemsDesktop: [1199, 4],
          itemsDesktopSmall: [979, 3],
        });
      });
</script>
 </body>
</html>
