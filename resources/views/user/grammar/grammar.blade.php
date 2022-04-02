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
                            <a class="nav-link" href="{{url('full-calender')}}">Schedule </a>
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


    <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_4.jpg);">
        <div class="hero-section">
            <div class="container text-center wow zoomIn">
                <!-- <span class="subhead">One of the most effective ways to improve</span> -->
                <h1 class="display-4">Lessons</h1>
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



        <div class="container">
          <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="../assets/img/a1_g.jpg" alt="Card image cap">
              <div class="card-body">
                <h1 class="card-title"><a href="{{url('elementary_grammar')}}"><span>Elementary (A1)</a></h1>
                  <p class="card-text">Listening practice to help you understand familiar words and basic phrases when people speak slowly and clearly. Situations include meeting people, shopping and conversations at work.</p>
              </div>

            </div>
            <div class="card">
              <img class="card-img-top" src="../assets/img/a2_g.jpg" alt="Card image cap">
              <div class="card-body">
                <h1 class="card-title"><a href="{{url('pre_elementary_grammar')}}"><span>Pre-intermediate (A2)</a></h1>
                  <p class="card-text">Listening practice to help you understand common vocabulary and expressions in short, clear dialogues. Situations include simple explanations, introductions, messages and announcements.</p>
              </div>

            </div>

          </div>
          <br>
          <br>
          <hr><br><br>
          <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="../assets/img/b1g.jpg" alt="Card image cap">
              <div class="card-body">
                <h1 class="card-title"><a href="{{url('intermediate_grammar')}}"><span>Intermediate (B1)</a></h1>
                  <p class="card-text">Listening practice to help you understand the main points of clear, standard speech about everyday or job-related topics. Situations include phone calls, meetings and interviews.</p>
              </div>

            </div>


            <div class="card">
              <img class="card-img-top" src="../assets/img/b2_g.jpg" alt="Card image cap">
              <div class="card-body">
                <h1 class="card-title"><a href="{{url('upper_intermediate_grammar')}}"><span>Upper intermediate (B2)</a></h1>
                  <p class="card-text">Listening practice to help you understand extended, standard speech about familiar topics that may contain complex ideas. Situations include broadcasts, reviews, presentations and lectures.</p>
              </div>

            </div>

          </div>

          <br>
          <br>
          <hr><br><br>

          <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="../assets/img/c1_g.jpg" alt="Card image cap">
              <div class="card-body">
                <h1 class="card-title"><a href="{{url('advanced_grammar')}}"><span>Advanced (C1)</a></h5>
                  <p class="card-text">Listening practice to help you understand extended speech about abstract, complex or unfamiliar topics. Situations include job interviews, lectures, talks and meetings.</p>
              </div>

            </div>

          </div>
        </div>
      </div>



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