<!DOCTYPE html>
<html>
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

	<title> Details </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/png" href="{{ url('content/img/favicon.png') }}"/>
    
    <!-- custome css -->
    <link rel="stylesheet" href="{{ url('content/css/footer.css')}}">
    <link rel="stylesheet" href="{{ url('content/css/navbar.css')}}">
   
    <link rel="stylesheet" href="{{ url('content/css/style.css')}}">
    <link rel="stylesheet" href="{{ url('content/css/responsive.css')}}">
    
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
    
<section>
<div class="container pt-5">
    <div class="row row-cust">
        <div class="col-md-8 mb-5">
            <div class="login-div">
              <label style="color: white;">{{ Session::get('success') }}</label>
              <label style="color: white;">{{ Session::get('failure') }}</label>
                <form method="POST" action="{{ url('/user-details') }}">
                    {{ csrf_field() }}
                    <h4 class="text-center">Book Now</h4>
                    
                    <div class="row">
                    <div class="form-group flex-cust col-md-6">
                       <input type="text" name="name" class="form-control" placeholder="Name" data-parsley-required="true" data-parsley-error-message="Please enter your name." required />
                    </div>
                    
                    <div class="form-group flex-cust col-md-6">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" data-parsley-type="email" data-parsley-required="true" data-parsley-error-message="Please enter your valid email." data-parsley-trigger="change" required />
                         <span id="error_email"></span>
                    </div>
                    </div>

                    <div class="row">
                    <div class="form-group flex-cust col-md-6">
                      <select class="form-control" id="gender" name="gender">
                          <option value="">Select Gender</option>
                          <option value="Male" >Male</option>
                          <option value="Female" >Female</option>
                          <option value="Custom" >Custom</option>
                      </select>
                    </div>
                    
                    <div class="form-group flex-cust col-md-6">
                      <select class="form-control" id="country" name="country">
                          <option value="">Select Country</option>
                          <option value="Afghanistan">Afghanistan</option>
                          <option value="Albania">Albania</option>
                          <option value="Algeria">Algeria</option>
                          <option value="American Samoa">American Samoa</option>
                          <option value="Andorra">Andorra</option>
                          <option value="Angola">Angola</option>
                          <option value="Anguilla">Anguilla</option>
                          <option value="Antartica">Antarctica</option>
                          <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                          <option value="Argentina">Argentina</option>
                          <option value="Armenia">Armenia</option>
                          <option value="Aruba">Aruba</option>
                          <option value="Australia">Australia</option>
                          <option value="Austria">Austria</option>
                          <option value="Azerbaijan">Azerbaijan</option>
                          <option value="Bahamas">Bahamas</option>
                          <option value="Bahrain">Bahrain</option>
                          <option value="Bangladesh">Bangladesh</option>
                          <option value="Barbados">Barbados</option>
                          <option value="Belarus">Belarus</option>
                          <option value="Belgium">Belgium</option>
                          <option value="Belize">Belize</option>
                          <option value="Benin">Benin</option>
                          <option value="Bermuda">Bermuda</option>
                          <option value="Bhutan">Bhutan</option>
                          <option value="Bolivia">Bolivia</option>
                          <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                          <option value="Botswana">Botswana</option>
                          <option value="Bouvet Island">Bouvet Island</option>
                          <option value="Brazil">Brazil</option>
                          <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                          <option value="Brunei Darussalam">Brunei Darussalam</option>
                          <option value="Bulgaria">Bulgaria</option>
                          <option value="Burkina Faso">Burkina Faso</option>
                          <option value="Burundi">Burundi</option>
                          <option value="Cambodia">Cambodia</option>
                          <option value="Cameroon">Cameroon</option>
                          <option value="Canada">Canada</option>
                          <option value="Cape Verde">Cape Verde</option>
                          <option value="Cayman Islands">Cayman Islands</option>
                          <option value="Central African Republic">Central African Republic</option>
                          <option value="Chad">Chad</option>
                          <option value="Chile">Chile</option>
                          <option value="China">China</option>
                          <option value="Christmas Island">Christmas Island</option>
                          <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                          <option value="Colombia">Colombia</option>
                          <option value="Comoros">Comoros</option>
                          <option value="Congo">Congo</option>
                          <option value="Congo">Congo, the Democratic Republic of the</option>
                          <option value="Cook Islands">Cook Islands</option>
                          <option value="Costa Rica">Costa Rica</option>
                          <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                          <option value="Croatia">Croatia (Hrvatska)</option>
                          <option value="Cuba">Cuba</option>
                          <option value="Cyprus">Cyprus</option>
                          <option value="Czech Republic">Czech Republic</option>
                          <option value="Denmark">Denmark</option>
                          <option value="Djibouti">Djibouti</option>
                          <option value="Dominica">Dominica</option>
                          <option value="Dominican Republic">Dominican Republic</option>
                          <option value="East Timor">East Timor</option>
                          <option value="Ecuador">Ecuador</option>
                          <option value="Egypt">Egypt</option>
                          <option value="El Salvador">El Salvador</option>
                          <option value="Equatorial Guinea">Equatorial Guinea</option>
                          <option value="Eritrea">Eritrea</option>
                          <option value="Estonia">Estonia</option>
                          <option value="Ethiopia">Ethiopia</option>
                          <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                          <option value="Faroe Islands">Faroe Islands</option>
                          <option value="Fiji">Fiji</option>
                          <option value="Finland">Finland</option>
                          <option value="France">France</option>
                          <option value="France Metropolitan">France, Metropolitan</option>
                          <option value="French Guiana">French Guiana</option>
                          <option value="French Polynesia">French Polynesia</option>
                          <option value="French Southern Territories">French Southern Territories</option>
                          <option value="Gabon">Gabon</option>
                          <option value="Gambia">Gambia</option>
                          <option value="Georgia">Georgia</option>
                          <option value="Germany">Germany</option>
                          <option value="Ghana">Ghana</option>
                          <option value="Gibraltar">Gibraltar</option>
                          <option value="Greece">Greece</option>
                          <option value="Greenland">Greenland</option>
                          <option value="Grenada">Grenada</option>
                          <option value="Guadeloupe">Guadeloupe</option>
                          <option value="Guam">Guam</option>
                          <option value="Guatemala">Guatemala</option>
                          <option value="Guinea">Guinea</option>
                          <option value="Guinea-Bissau">Guinea-Bissau</option>
                          <option value="Guyana">Guyana</option>
                          <option value="Haiti">Haiti</option>
                          <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                          <option value="Holy See">Holy See (Vatican City State)</option>
                          <option value="Honduras">Honduras</option>
                          <option value="Hong Kong">Hong Kong</option>
                          <option value="Hungary">Hungary</option>
                          <option value="Iceland">Iceland</option>
                          <option value="India">India</option>
                          <option value="Indonesia">Indonesia</option>
                          <option value="Iran">Iran (Islamic Republic of)</option>
                          <option value="Iraq">Iraq</option>
                          <option value="Ireland">Ireland</option>
                          <option value="Israel">Israel</option>
                          <option value="Italy">Italy</option>
                          <option value="Jamaica">Jamaica</option>
                          <option value="Japan">Japan</option>
                          <option value="Jordan">Jordan</option>
                          <option value="Kazakhstan">Kazakhstan</option>
                          <option value="Kenya">Kenya</option>
                          <option value="Kiribati">Kiribati</option>
                          <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                          <option value="Korea">Korea, Republic of</option>
                          <option value="Kuwait">Kuwait</option>
                          <option value="Kyrgyzstan">Kyrgyzstan</option>
                          <option value="Lao">Lao People's Democratic Republic</option>
                          <option value="Latvia">Latvia</option>
                          <option value="Lebanon">Lebanon</option>
                          <option value="Lesotho">Lesotho</option>
                          <option value="Liberia">Liberia</option>
                          <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                          <option value="Liechtenstein">Liechtenstein</option>
                          <option value="Lithuania">Lithuania</option>
                          <option value="Luxembourg">Luxembourg</option>
                          <option value="Macau">Macau</option>
                          <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                          <option value="Madagascar">Madagascar</option>
                          <option value="Malawi">Malawi</option>
                          <option value="Malaysia">Malaysia</option>
                          <option value="Maldives">Maldives</option>
                          <option value="Mali">Mali</option>
                          <option value="Malta">Malta</option>
                          <option value="Marshall Islands">Marshall Islands</option>
                          <option value="Martinique">Martinique</option>
                          <option value="Mauritania">Mauritania</option>
                          <option value="Mauritius">Mauritius</option>
                          <option value="Mayotte">Mayotte</option>
                          <option value="Mexico">Mexico</option>
                          <option value="Micronesia">Micronesia, Federated States of</option>
                          <option value="Moldova">Moldova, Republic of</option>
                          <option value="Monaco">Monaco</option>
                          <option value="Mongolia">Mongolia</option>
                          <option value="Montserrat">Montserrat</option>
                          <option value="Morocco">Morocco</option>
                          <option value="Mozambique">Mozambique</option>
                          <option value="Myanmar">Myanmar</option>
                          <option value="Namibia">Namibia</option>
                          <option value="Nauru">Nauru</option>
                          <option value="Nepal">Nepal</option>
                          <option value="Netherlands">Netherlands</option>
                          <option value="Netherlands Antilles">Netherlands Antilles</option>
                          <option value="New Caledonia">New Caledonia</option>
                          <option value="New Zealand">New Zealand</option>
                          <option value="Nicaragua">Nicaragua</option>
                          <option value="Niger">Niger</option>
                          <option value="Nigeria">Nigeria</option>
                          <option value="Niue">Niue</option>
                          <option value="Norfolk Island">Norfolk Island</option>
                          <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                          <option value="Norway">Norway</option>
                          <option value="Oman">Oman</option>
                          <option value="Pakistan">Pakistan</option>
                          <option value="Palau">Palau</option>
                          <option value="Panama">Panama</option>
                          <option value="Papua New Guinea">Papua New Guinea</option>
                          <option value="Paraguay">Paraguay</option>
                          <option value="Peru">Peru</option>
                          <option value="Philippines">Philippines</option>
                          <option value="Pitcairn">Pitcairn</option>
                          <option value="Poland">Poland</option>
                          <option value="Portugal">Portugal</option>
                          <option value="Puerto Rico">Puerto Rico</option>
                          <option value="Qatar">Qatar</option>
                          <option value="Reunion">Reunion</option>
                          <option value="Romania">Romania</option>
                          <option value="Russia">Russian Federation</option>
                          <option value="Rwanda">Rwanda</option>
                          <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                          <option value="Saint LUCIA">Saint LUCIA</option>
                          <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                          <option value="Samoa">Samoa</option>
                          <option value="San Marino">San Marino</option>
                          <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                          <option value="Saudi Arabia">Saudi Arabia</option>
                          <option value="Senegal">Senegal</option>
                          <option value="Seychelles">Seychelles</option>
                          <option value="Sierra">Sierra Leone</option>
                          <option value="Singapore">Singapore</option>
                          <option value="Slovakia">Slovakia (Slovak Republic)</option>
                          <option value="Slovenia">Slovenia</option>
                          <option value="Solomon Islands">Solomon Islands</option>
                          <option value="Somalia">Somalia</option>
                          <option value="South Africa">South Africa</option>
                          <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                          <option value="Span">Spain</option>
                          <option value="SriLanka">Sri Lanka</option>
                          <option value="St. Helena">St. Helena</option>
                          <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                          <option value="Sudan">Sudan</option>
                          <option value="Suriname">Suriname</option>
                          <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                          <option value="Swaziland">Swaziland</option>
                          <option value="Sweden">Sweden</option>
                          <option value="Switzerland">Switzerland</option>
                          <option value="Syria">Syrian Arab Republic</option>
                          <option value="Taiwan">Taiwan, Province of China</option>
                          <option value="Tajikistan">Tajikistan</option>
                          <option value="Tanzania">Tanzania, United Republic of</option>
                          <option value="Thailand">Thailand</option>
                          <option value="Togo">Togo</option>
                          <option value="Tokelau">Tokelau</option>
                          <option value="Tonga">Tonga</option>
                          <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                          <option value="Tunisia">Tunisia</option>
                          <option value="Turkey">Turkey</option>
                          <option value="Turkmenistan">Turkmenistan</option>
                          <option value="Turks and Caicos">Turks and Caicos Islands</option>
                          <option value="Tuvalu">Tuvalu</option>
                          <option value="Uganda">Uganda</option>
                          <option value="Ukraine">Ukraine</option>
                          <option value="United Arab Emirates">United Arab Emirates</option>
                          <option value="United Kingdom">United Kingdom</option>
                          <option value="United States">United States</option>
                          <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                          <option value="Uruguay">Uruguay</option>
                          <option value="Uzbekistan">Uzbekistan</option>
                          <option value="Vanuatu">Vanuatu</option>
                          <option value="Venezuela">Venezuela</option>
                          <option value="Vietnam">Viet Nam</option>
                          <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                          <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                          <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                          <option value="Western Sahara">Western Sahara</option>
                          <option value="Yemen">Yemen</option>
                          <option value="Yugoslavia">Yugoslavia</option>
                          <option value="Zambia">Zambia</option>
                          <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </div>
                    </div>

                    <div class="row">
                    <div class="form-group flex-cust col-md-6">
                       <select class="form-control" id="course" name="course">
                          <option value="">Select Course</option>
                          <option value="200 Hours YTTC">200 Hours YTTC</option>
                          <option value="300 Hours YTTC">300 Hours YTTC</option>
                          <option value="500 Hours YTTC">500 Hours YTTC</option>
                          <option value="200 Hours Tantra YTTC">200 Hours Tantra YTTC</option>
                       </select>
                    </div>
                    
                    <div class="form-group flex-cust col-md-6">
                        <input type="date" name="joining_date" id="joining_date" class="form-control" placeholder="Joining Date" onfocus="(this.type='date')" onblur="(this.type='text')" required />
                         
                    </div>
                    </div>

                    <div class="row">
                    <div class="form-group flex-cust col-md-6">
                       <select class="form-control" id="accommodation" name="accommodation">
                          <option value="">Select Accommodation</option>
                          <option value="Private Room">Private Room</option>
                          <option value="Shared Room">Shared Room</option>
                       </select>
                    </div>
                    
                    <!--<div class="form-group flex-cust col-md-6">-->
                    <!--    <select class="form-control" id="food" name="food">-->
                    <!--      <option value="">Select Food</option>-->
                    <!--      <option value="Vegetarian">Vegetarian</option>-->
                    <!--      <option value="Non-Vegetarian">Non Vegetarian</option>-->
                    <!--      <option value="Vegan">Vegan</option>-->
                    <!--      <option value="Non-Vegan">Non Vegan</option>-->
                    <!--      <option value="Gluten-Free">Gluten Free</option>-->
                    <!--      <option value="Satvic">Satvic</option>-->
                    <!--      <option value="Yogic-Diet">Yogic Diet</option>-->
                    <!--      <option value="Others"> Others </option>-->
                    <!--   </select>-->
                    <!--</div>-->
                    <div class="form-group flex-cust col-md-6">
                        <input type="text" name="number" id="number" class="form-control" placeholder="WhatsApp Number"  />
                      </div>
                    </div>

                    <div class="row">

                      
                    </div>

                    <div class="row">
                      <div class="form-group flex-cust col-md-12 ">
                        <textarea class="form-control" name="message" id="message" placeholder="Meesage"></textarea>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-12">
                        <label><input type="checkbox" name="remember" class="mr-1" data-parsley-required="true" data-parsley-error-message="Please accept terms and conditions."required >I am agree that all the information that I am giving to the school are correct and I will be responsible    for these explanation which I am giving and writing down and this if I will get any issue during the    course show the schools and teachers will not be responsible for that sign.</label>
                      </div>
                    </div>
                    
                    <div class="text-center">
                        <input type="submit" name="register" id="register" value="Book Now" class="btn btn-primary">
                    </div>

                </form>
              
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="login-div">
                <h5 class="text-center">Book Using Wired Bank</h5>
                    <div class="row">
                        <div class="form-group flex-cust col-md-12" style="font-size:17px;">
                           Wire Bank Details<br/>

                            Account Name : Shivalaya Yoga Meditation Center<br/>
                            Account Number : 02400105200346<br/>
                            Swift code : EVBLNPKA<br/>
                            Bank Name: Everest Bank Ltd.<br/>
                        </div>
                    </div>
                     <h5 class="text-center">Book Using EUR RECEIVING (SEPA) </h5>
                    <div class="row">
                        <div class="form-group flex-cust col-md-12" style="font-size:17px;">
                           Online Bank Details<br/>

                            Bank Name : Wirecard Bank AG<br/>
                            Bank Address : Einsteinering 35 85609 Aschheim, Germany<br/>
                            BIC : WIREDEMM<br/>
                            IBAN : DE78512308006503802559<br/>
                            Bank Country : Germany<br/>
                            Beneficiary Name : Bishnu Hari Lamichhane <br/>
                        </div>
                    </div>
                    </div>
            </div>
    </div>
    </div>
</section>

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
    
<script>
$(document).ready(function(){

 $('#email').blur(function(){
  var error_email = '';
  var email = $('#email').val();
  var _token = $('input[name="_token"]').val();
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!filter.test(email))
  {    
   $('#error_email').html('<label class="text-danger">Invalid Email</label>');
   $('#email').addClass('has-error');
   $('#register').attr('disabled', 'disabled');
  }
  else
  {
   $.ajax({
    url:"{{ route('register.check') }}",
    method:"POST",
    data:{email:email, _token:_token},
    success:function(result)
    {
     if(result == 'unique')
     {
      $('#error_email').html('<label class="text-success">Email Available</label>');
      $('#email').removeClass('has-error');
      $('#register').attr('disabled', false);
     }
     else
     {
      $('#error_email').html('<label class="text-danger">Email Already Exist</label>');
      $('#email').addClass('has-error');
      $('#register').attr('disabled', 'disabled');
     }
    }
   })
  }
 });
 
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="{{ url('content/js/code.jquery.js')}}"></script>
<style type="text/css">
    body{
        background-image:url("./content/img/login.jpg");
        background-size:cover;
        background-repeat: no-repeat;
        color:#fff;
    }
    .row-cust{
        justify-content: center;
        align-items: center;
        height: auto;
    }
    .login-div{
        background:rgba(58, 2, 62, 0.88);
    }
    .login-div h4{
        padding:2rem 1rem;
        color:#fff;
    }
    .login-div form{
        margin-bottom: 1rem;
    }
    .flex-cust{
        display: flex;
    }
    .login-links a{
        color:#fff;
        text-transform: bolder;
    }
    .flex-cust i{
        color:#fff;
        padding:9px 9px;
        margin:0 5px;
        background:rgba(0, 0, 0, 0.5);
        border-radius: 50%;
    }
    .login-div{
        padding:1rem 3rem 1rem 3rem;
        border-radius:.5rem;
    }
    .login-links{
        text-align: center;
    }
    .login-links p{
        color:#fff;
    }
    .login-links p{
        margin-bottom:.5rem;
    }
</style>
</body>



</html>