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

    <!-- Bootstrap css -->
	<link rel="stylesheet" href="{{ url('content/bootstrap/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- custom css -->
	<link rel="stylesheet" href="{{ url('content/css/navbar.css') }}">
	<link rel="stylesheet" href="{{ url('content/css/footer.css') }}">
	<link rel="stylesheet" href="{{ url('content/css/teachers-bio.css') }}">

    <title>Teachers details</title>
  </head>
  <body>
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

<div class="container">
    <div class="row teachers-info">
            <div class="mb-3">
            <h1 class="teachers-head meet-color pt-2 mb-0">YOGINI GOPIKA</h1>
            <!-- <small class="teachers-small meet-color d-block"></small> -->
            <p><img src="{{ url('content/img/gopika.jpg')}}" alt="Yoga Trainer Nepal" class="img-techers">Since Yogini Gopika was a young girl she was in love with the deep beauty and peace found in Nature.  For her life was always full of magic and mystery.  Upon getting her first “real job” after college, she can remember thinking with a feeling of longing for something greater, “there must be more to life than this”. Upon discovering yoga everything transformed and she made a swift exit from mainstream society in search of life’s true meaning.  Her journey back to herself had begun.
After teaching yoga in New York City for about a year she journeyed to India. She spent the better part of 10 years in Vrindavan, the land of Lord Krishna, where every step is a dance and every word is a song.  It is here that she fell in love with the culture of bhakti and where she found her spiritual home.  Her life fell into a rhythm with the Universe and the Divine. Everything became spiritualized as living in this ancient holy place brought about purification of the heart.  This time period taught many lessons and gave much spiritual strength.
Ayurveda, the art of living in exquisite balance, taught her much about herself and her beloved nature.  Becoming an Ayurvedic Practitioner was a natural compliment to her yogic lifestyle.  Finally ready to share her wisdom she has been teaching Ayurveda and Yoga through lectures and teacher trainings both at home and abroad.  All this time she was practicing Tantra, intuitively weaving together spiritual practices with life to create a more boundless and fearless existence.  Her purpose has always been intuitively Tantric – to expand and move beyond limitations to bring out her fullest potential and use her gifts to inspire others to do the same.
She became a certified Tantra Yoga teacher through the tradition of Nepalese Tantra under the guidance of Yogi Prakash at Shanti Yoga Ashram, Nepal – the land of Tantra itself.  Since then she has been working by his side to develop the ashram and has been co-teacher in three successful teacher trainings so far.  It is her greatest joy to share the light and love that yoga has to offer with other spiritual seekers and inspire them deeply to make real change in their life; so they may embrace a yogic lifestyle that is in harmony with themselves and the world around them.  Hari Om Tat Sat.
Yogini Gopika, ERYT, Ayurvedic Practitioner and Tantra Yoga Teacher, is ready to guide you to uncover your own power and unique gifts. With more than 16 years of teaching and coaching experience; she possesses effective methods and tools to help you bring your life into alignment. While living mostly in India, she has developed the intuition and insight necessary to create inner transformation. Whether you desire radiant health, material abundance, deep intimacy or spiritual awakening; Gopika can act as a catalyst on your path of becoming who you are meant to be in this life.
She got Certifications in - 
Tantra Yoga Teacher Training 500 Hours, Shanti Yoga Ashram Nepal (Yogi Prakash), 
Vinyasa Yoga Teacher Training 200 Hours, Atmananda Yoga Center NYC,
Hatha Yoga Teacher Training 200 Hours, Integral Yoga Institute NYC - Yoga Alliance
Ayurvedic Lifestyle Counselor, American Institute of Vedic Studies (Dr. David Frawley),
Maharishi Ayurveda Practitioner Training/ Apprenticeship, Harit Spa Madrid Spain (Pilar Franco)

    </p>
            </div>
        </div>
    <div class="row teachers-info" id="shiva">
        <div class="mb-3">
        <h1 class="teachers-head meet-color pt-2 mb-0">SHIVA</h1>
          <small class="teachers-small meet-color d-block">KERALA</small>
          <p><img src="{{ url('content/img/ratheesh-kochukatil.jpg')}}" alt="Yoga Trainer Nepal" class="img-techers">
                Shiva (Ratheesh Kochukattil) was born in Vagamon, Kerala. Where he studied Vedanta Philosophy for five years in Shivagiri Ashram. During his teenage years, he undertook a monastery life, and since then, he has been committed to the science of yoga. After the completion of 5 years in the ashram with Vedanta study, he felt the earnest desire to pilgrim in the Himalayas. As an ascetic, he has roamed around the Himalayas barefoot to places like Amarnath, Badrinath, and all over India. During his odyssey, he met many adepts and sadhus in the Himalayas who have inspired him spiritually. He reached Rishikesh, where he met His Holiness Swami Veda Bharti and he began his spiritual journey.
                He is a trained professional under His Holiness Swami Veda Bharathi of Himalayan tradition. During the training, he was indulged into stringent spiritual vows along with the study of yoga, meditation and Yoga Philosophy for five years. At the age of 29 following the instructions of his revered master, he began sharing the wisdom of eternal yoga to true seekers. Since then, he has been on the path of spreading yoga knowledge to all those who come in contact. He has been a yoga teacher and spiritual motivator in vatious schools of Rishikesh as well all over the country.
                </p>
        </div>
    </div>
    <div class="row teachers-info">
        <div class="mb-3">
        <h1 class="teachers-head meet-color pt-2 mb-0">YOGI AMAN NAUGHAN</h1>
          <small class="teachers-small meet-color d-block">RISHIKESH</small>
          <p><img src="{{ url('content/img/yogi-aman.jpg')}}" alt="Yoga Trainer Nepal" class="img-techers">Growing up in a traditional Indian family he has a strong foundation of spiritual practice from childhood. His mother is a Yogi, which influenced the whole family to understand the 8 limbs of yoga and also the practice of them. He grew up in Rishikesh, also called the capital of Yoga, this is a very spiritual place situated in the foothills of the Himalayas, with the holy River Gangaji giving high spiritual energy to everyone around.
Growing up he wanted to be an engineer and therefore pursued and completed a polytechnic diploma with the vision of finishing an electrical engineering degree. While studying the diploma his mother influenced him with her journey within Yoga. So, when the choice was there to be made, he switched his path into Yoga and enrolled into a 2-year long journey of working and attending classes at Rishikesh Yog Peeth in India. Her he was trained in Hatha and Ashtanga rooted in traditional style of Ghatastha Yoga (Kriya, Mudra, Bandha) as well as in Anatomy, Pranayama, Meditation, intention-setting. Trained to see the individual student, to be able to give the best variations to the specific individual. A lot of focus on adjustment to enhance the student’s alignment. After finishing the 2 years training Rishikesh Yog Peeth send him to his first teaching job in Darjeeling, West Bengal, India. After Darjeeling he returned to the school to teach drop-in classes in Rishikesh. Then he got a job teaching at a YTT in South Goa, India, which lead to a connection to us here at Shivalaya Yoga Ashram. Aman is teaching Hatha, Anatomy and Ashtanga with us. 
Certifications:
Hatha and Ashtanga Yoga Teacher Training 200 Hour, Yog Peeth Rishikesh  - Yoga Alliance
Hatha and Ashtanga Yoga Teacher Training 300 Hour, Yog Peeth Rishikesh  - Yoga Alliance
</p>
        </div>
    </div>
    <div class="row teachers-info">
        <div class="mb-3">
        <h1 class="teachers-head meet-color pt-2 mb-0">RISHI RAJ LAMSAL</h1>
          <small class="teachers-small meet-color d-block">RISHIKESH</small>
          <p><img src="{{ url('content/img/yogi-rishiraj-lamsal.jpg')}}" alt="Yoga Trainer Nepal" class="img-techers">Rishiji was born and raised in a village, called Dhading, outside Kathmandu. His first exposure to Yoga was in 1997 at Anananda Yoga, Ktm, Nepal. Seeds where planted inside and he felt great strength from the gained knowledge. In 1998, he was introduced to Hatha Yoga and Naturopathy in Arogya Ashram, ktm Nepal, which only made him more curious. Whilst yoga has its global talks and wider prospective, he decided to join Open University Alternative Medicine Council of India, Culcatta board in 1999. He was so touched and inspired by their teaching in the fields of alternative medicine that he knew now this was the way of life and he also found out that he wanted to share this knowledge somehow. He then admitted to Gandhi National Academy of Naturopathy, New Delhi in 2000. He is a follower of Osho and decided to follow the Sanyasi path life. He loves to practiced Tantric healing and reiki, to make a difference for other people is one of the greater goals of his journey. The last many years he has been occupied with healing the clients at Yeti Healing Temple, Lakeside Pokhara. 10 years teaching experience in teaching the 8 limbs of yoga. 5 years’ experience teaching in Yoga Teacher Training Courses as a Philosophy, Pranayama, meditation and mantra chanting teacher. Teaching at Yeti Yoga Center, Rishikul Yogshala Rishikesh/Pohkara and Shivalaya Yoga Ashram In Nepal. Teaching meditation and Energy healing at Osho divine zone POKHARA since 7 years in the experiences.
Certifications: -
Masters in Mikao ushui system of REIK,
Schiem REIKI,
Aruna REIKI,
2nd degree in Osho Neo REIKI.
</p>
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
    <script src="{{ url('content/bootstrap/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ url('content/bootstrap/popper.min.js') }}"></script>
    <script src="{{ url('content/bootstrap/bootstrap.min.js') }}"></script>
  </body>
</html>
