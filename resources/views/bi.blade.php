<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BI Work Process</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="{{ asset('assets/css/agency-wp.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/css/agency.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

          <!-- Navigation -->
          <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
              <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}#accueil">Abdessalem Oumellal</a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ url('/') }}#accueil">Accueil</a>
                  </li>                  
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ url('/') }}#work">Work</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ url('/') }}#contact">Contact</a>
                  </li>
                  <div class="dropdown">
                  <li class="nav-item">
                    <a class="nav-link dropdown-toggle active" href="#" id="workprocesses" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Work Processes</a>
                  <div  id="navigation" class="dropdown-menu" aria-labelledby="workprocesses">>
                    <a class="dropdown-item nav-link" href="{{ url('uxuiwp') }}">UX/UI</a>
                    <a class="dropdown-item nav-link active" href="{{ url('biwp') }}">Business Intelligence</a>
                  </div>
                </div>
              </li>
                </ul>
              </div>
            </div>
          </nav>

          <!-- Dropdown Work Processes -->


          <!-- Dropdown Work Processes end -->


  <!-- Header -->

  <header class="masthead">
    <div class="container" id="accueil">
      <div class="intro-text">
        <div class="intro-heading text-uppercase" style="font-size: 30px;">Business Intelligence Work Process</div>
          </div>
          </div>
          </header>



          <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="assets/img/work-process/01.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="subheading">Study of exsisting</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">
                     -Define customer's needs.<br> -Identify the existing data.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image" style="background-color: white;">
                <img class="rounded-circle img-fluid" src="assets/img/work-process/02.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="subheading">Dashboard creation</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted"> -Data Extraction<br> -Data Transformation.<br> -Data Loading.<br> -Reporting.</p>
                </div>
              </div>
            </li>
            
            
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>On Time
                  <br>Product
                  <br>Delivery</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>


  <!-- Footer -->
  <footer class="footer border">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Abdessalem Oumellal 2019</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="https://www.instagram.com/abdessalem.oumellal" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/oumellal" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.linkedin.com/in/oumellal/" target="_blank">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
        <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <span>Email :</span>
            </li>
            <li class="list-inline-item">
              <a>fa_oumellal@esi.dz</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Contact form JavaScript -->
  <script src="{{ asset('assets/js/jqBootstrapValidation.js')}}"></script>
  <script src="{{ asset('assets/js/contact_me.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('assets/js/agency-wp.js')}}"></script>
  <script src="{{ asset('assets/js/agency.min.js')}}"></script>

</body>

</html>
