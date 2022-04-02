<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>E-Learning</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}"><span class="text-primary">E</span>-Learning</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('about')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('teachers')}}">Teachers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('post')}}">Lesson</a>
            </li>
            

            @if (Route::has('login'))

            @auth
            <li class="nav-item">
              <a class="nav-link" href="{{url('myappointment')}}">Appointment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{url('full-calender')}}">Schedule </a>
            </li>
            <x-app-layout>

            </x-app-layout>

            @else

            <li class="nav-item">
              <a class="btn btn-outline-dark ml-lg-3" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-outline-dark ml-lg-3" href="{{route('register')}}">Register</a>
            </li>

            @endauth

            @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>


  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_2.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <!-- <span class="subhead">One of the most effective ways to improve</span> -->
        <h1 class="display-4">About Us</h1>
        <a href="{{url('about')}}" class="btn btn-outline-primary">Let's Consult</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Chat</span> with teachers</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>Improve</span> Your Skills</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>Enjoy</span> Our Courses</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section">
      <!-- <div class="container"> -->
      <div class="row justify-content-center">
        <div class="col-lg-8 wow fadeInUp">
          <h1 class="display-4">WELCOME TO E-LEANING</h1>
          <div class="text-lg">
            <br>
            <h1>WHO ARE WE?</h1>
            <br>
            <p>We are a voluntary organisation and we do what we do for the love of English.</p>
            <br>
            <p>We run a network of web sites and online services with the help of our volunteers.</p>
            <br>
            <p>We organise events on several platforms. These events (sessions) are dedicated to helping ESL and EFL learners and teachers. All sessions are free to participants and open to all.</p>
            <br>
            <p>E-Learning offers English grammar and extensive British English vocabulary sections along with a free English magazine, diary, games, lessons and tests and an insight into British culture, Traditions and customs.</p>

            <br>
            <h1>ABOUT THE WEB SITES</h1>
            <br>
            <p>By using some of the latest web based technologies the E-Learning covers a broad range of English skills.</p>
            <br>
            <p>This site contains a wealth of resources to help you learn English free online, including help with listening skills and pronunciation, along with sections on the basics of English, spelling, grammar and activities such as games, tests and quizzes.</p>
            <br>
            <p>In addition there is an extensive vocabulary section which uses pictures and sound.</p>
          </div>
          <!-- Teachers information -->
          <div class="page-section">
            <div class="container">
              <h1 class="text-center mb-5 wow fadeInUp">Our Teachers</h1>

              <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
                @foreach($data as $teacher)
                <div class="item">
                  <div class="card-doctor">
                    <div class="header">
                      <img src="teacherimage/{{$teacher -> image}}" alt="">
                      <div class="meta">
                        <a href="#"><span class="mai-call"></span></a>
                        <a href="#"><span class="mai-logo-whatsapp"></span></a>
                      </div>
                    </div>
                    <div class="body">
                      <p class="text-xl mb-0">{{$teacher -> name}}</p>
                      <span class="text-sm text-grey">{{$teacher -> speciality}}</span>
                    </div>
                  </div>
                </div>
                @endforeach

              </div>
            </div>
            <!-- </div> -->
          </div>
        </div>
      </div>
    </div>

    <footer class="page-footer">
      <div class="container">
        <div class="row px-md-3">
          <div class="col-sm-6 col-lg-3 py-3">
            <h5>Company</h5>
            <ul class="footer-menu">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Career</a></li>
              <li><a href="#">Editorial Team</a></li>
              <li><a href="#">Protection</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-lg-3 py-3">
            <h5>More</h5>
            <ul class="footer-menu">
              <li><a href="#">Terms & Condition</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Advertise</a></li>
              <li><a href="#">Join as Doctors</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-lg-3 py-3">
            <h5>Our partner</h5>
            <ul class="footer-menu">
              <li><a href="#">One-Fitness</a></li>
              <li><a href="#">One-Drugs</a></li>
              <li><a href="#">One-Live</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-lg-3 py-3">
            <h5>Contact</h5>
            <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
            <a href="#" class="footer-link">701-573-7582</a>
            <a href="#" class="footer-link">healthcare@temporary.net</a>

            <h5 class="mt-3">Social Media</h5>
            <div class="footer-sosmed mt-3">
              <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
              <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
              <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
              <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
              <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
            </div>
          </div>
        </div>

        <hr>

        <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode ID</a>. All right reserved</p>
      </div>
    </footer>


    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>