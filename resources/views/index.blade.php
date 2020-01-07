<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Abdessalem Oumellal</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="{{ asset('assets/css/agency.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/css/agency.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

          <!-- Navigation -->
          <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
              <a class="navbar-brand js-scroll-trigger" href="#page-top">Abdessalem Oumellal</a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#accueil">Accueil</a>
                  </li>                  
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#work">Work</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                  </li>
                  <div class="dropdown">
                  <li class="nav-item">
                    <a class="nav-link dropdown-toggle" href="#" id="workprocesses" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Work Processes</a>
                  <div  id="navigation" class="dropdown-menu" aria-labelledby="workprocesses">>
                    <a class="dropdown-item nav-link" href="{{ url('uxuiwp') }}">UX/UI</a>
                    <a class="dropdown-item nav-link" href="{{ url('biwp') }}">Business Intelligence</a>
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
        <div class="intro-heading text-uppercase" style="font-size: 30px;">Welcome To my portfolio</div>
        <div class="intro-lead-in" style="font-size:25px;"> Abdessalem Oumellal, a final (5th) year student at the National Higher School of Computer Science - Algiers ESI ex INI</div>


        <!-- My image -->

        <div id="pictures-slider" class="carousel slide" style="margin-bottom: 20px;">
        <img class="d-block w-100" src="assets/img/personel-pics/1.jpg" alt="First slide">
        </div>


        <!-- Educational Background -->
        <br><br><br><br>
        <div class="intro-heading text-uppercase" style="font-size: 30px;">Educational Background</div>


        <!-- Lycee -->
        <div class="container">
          <div class="row">
            <div class="col-sm border" id="educational">
        <img class="rounded img-fluid" style="max-height: 80px; max-width: 150px;" src="assets/img/university-logos/lycee.jpg"> <br><br>
        2012 - 2015 <br><br>
        Baghlia Secondary School - Algeria : Mathematics Baccalaureat : 16.76 / 20 <br><br>
          </div>

           <!-- UD -->
            <div class="col-sm border" id="educational">
              <img class="rounded img-fluid" style="height: 80px; max-width: 150px; Background:white;" src="assets/img/university-logos/ud.png"> <br><br>
          Jun 2019 - Aug 2019 <br><br>
          University of Delaware - USA : Mepi Students Leader Program <br> <br><br><br>
          <a href="#" class="btn btn-light" data-toggle="modal" data-target="#mepiinfopopup">More</a> <br><br>
            </div>

                        <!-- Modal -->
                        <div class="modal fade" id="mepiinfopopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle" style="color:black;">Mepi Student Leaders Program</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body"> <p style="color:black; text-align:left;">
                                The Middle East Partnership Initiative (MEPI) Student Leaders Program (SLP) is a fully-funded 5-week intensive training program held at four U.S. universities for 60 undergraduate and early-stage graduate students between the ages 20 and 24 from the MENA region.  Students gain hands-on knowledge about leadership, civic engagement, social entrepreneurship, and decision-making processes and learn how to apply these skills in their home countries.
                    Participants have the opportunity to meet their American peers, engage in local community service activities, and observe and take part in the governmental process on the local, state, and federal levels. The program includes academic coursework as well as study tours to various regions of the United States.
                    The Student Leaders program will take place over the course of approximately five weeks in the United States from June 24-July 29, 2020.
                    </p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>



            <!-- ESI -->
            <div class="col-sm border" id="educational">
              <img class="rounded img-fluid" style="max-height: 80px; max-width: 150px; Background:white;" src="assets/img/university-logos/esi.png"> <br><br>
        2015 - Present <br><br>
        The National Higher School of Computer Science ESI ex INI : Final Year Student - Information Systems and Technology <br><br>
        <a href="#" class="btn btn-light" data-toggle="modal" data-target="#esiinfopopup">More</a> <br><br>
            </div>
          </div>
        </div> <br>

                              <!-- Modal -->
                              <div class="modal fade" id="esiinfopopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLongTitle" style="color:black;">Engineer training at ESI</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body"> <p style="color:black; text-align:left;">
                                      The National School of Computer Science trains state engineers in computer science. The schooling lasts five years and is divided into three periods:
                                Two years of integrated preparatory classes (CPI): These replace the two years of the common core of the old system, which consisted of two years of common core following which the student had to choose a specialty. No grade repetition is allowed in the first year of the CPI (Integrated Preparatory Cycle). Then in the second year, students who have obtained a general average of less than 12/20 must pass a competition that will allow them to access third-year Common Core, this competition is open even to students from other universities through the national territory.
                                One year of higher common core (SCS): after the two years of integrated preparatory classes, students having obtained 12 of general average during the second year as well as those who were admitted through the contest, will integrate their third year of base common.
                                Two years of specialization (4th + 5th year): the school offers its students three specialties that are taught for the engineering cycle. The choice is made starting from the 4th year at the base of the notes obtained during the year of the common base Superior and places available by specialty.
                                The purpose of the "Information Systems and Technology" (SIT) option is to train computer engineers capable of supporting and / or participating in any project for the analysis, design and implementation of computer systems. information within organizations and companies. The courses taught cover the analysis and design of information systems (methods, models and support tools), organizational systems, decision support tools (data analysis, optimization tools, etc.).

                              </p>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>




      <!-- Tell me more -->
                              <br>  
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#work">Tell Me More</a>
          </div>
          </div>
          </header>



  <!-- work -->
  <section class="page-section" id="work">
    <div class="container">

      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Work</h2>
        </div>
      </div>

          <!-- Sous-Section UX/UI -->
          <div class="row">
            <div class="col-lg-12 text-center">
              <h3 class="section-heading text-muted text-uppercase">UX/UI</h3>
            </div>

                      <!-- Mavor -->
                      <div class="col-md-4 col-sm-6 Ux-Ui-item shadow-sm">
                        <a class="Ux-Ui-link" data-toggle="modal" href="#Ux-UiModal1">
                          <img class="img-fluid" src="assets/img/Ux-Ui/mavor.png" alt="">
                        </a>
                        <div class="Ux-Ui-caption">
                          <h4>Mavor</h4>
                          <p class="text-muted">Oct 2019 - Nov 2019</p>
                        </div>
                      </div><br>

                      <!-- LCSI -->
                      <div class="col-md-4 col-sm-6 Ux-Ui-item shadow-sm">
                        <a class="Ux-Ui-link" data-toggle="modal" href="#Ux-UiModal2">
                          <img class="img-fluid" src="assets/img/Ux-Ui/lcsi.png" alt="">
                        </a>
                        <div class="Ux-Ui-caption">
                          <h4>LCSI</h4>
                          <p class="text-muted">Feb 2019 - May 2019</p>
                        </div>
                      </div><br>


                      <!-- Algen -->
                      <div class="col-md-4 col-sm-6 Ux-Ui-item shadow-sm">
                        <a class="Ux-Ui-link" data-toggle="modal" href="#Ux-UiModal3">
                          <img class="img-fluid" src="assets/img/Ux-Ui/algen.png" alt="">
                        </a>
                        <div class="Ux-Ui-caption">
                          <h4>Algen</h4>
                          <p class="text-muted">Feb 2019 - May 2019</p>
                        </div>
                      </div> <br>


                      <!-- Delice -->
                      <div class="col-md-4 col-sm-6 Ux-Ui-item shadow-sm">
                        <a class="Ux-Ui-link" data-toggle="modal" href="#Ux-UiModal4">
                          <img class="img-fluid" src="assets/img/Ux-Ui/delice.png" alt="">
                        </a>
                        <div class="Ux-Ui-caption">
                          <h4>Delice</h4>
                          <p class="text-muted">June 2018</p>
                        </div>
                      </div><br>


                      <!-- Esi7a -->
                      <div class="col-md-4 col-sm-6 Ux-Ui-item shadow-sm">
                        <a class="Ux-Ui-link" data-toggle="modal" href="#Ux-UiModal5">
                          <img class="img-fluid" src="assets/img/Ux-Ui/esi7a.png" alt="">
                        </a>
                        <div class="Ux-Ui-caption">
                          <h4>E-Si7a</h4>
                          <p class="text-muted">May 2018</p>
                        </div>
                      </div> <br>

        </div>



                          <!-- Sous-Section Web Font-end -->
                          <br><br>
                          <div class="row">
                            <div class="col-lg-12 text-center">
                              <h3 class="section-heading text-muted text-uppercase">Web Front-End Development</h3> <br>
                            </div>

                                      <!-- Bati360 -->
                                      <div class="col-md-4 Ux-Ui-item shadow-sm">
                                        <a class="Ux-Ui-link" data-toggle="modal" href="#Ux-UiModal9">
                                          <img class="img-fluid" src="assets/img/Ux-Ui/bati.png" alt="">
                                        </a>
                                        <div class="Ux-Ui-caption">
                                          <h4>Bati360</h4>
                                          <p class="text-muted">Nov 2019 - Dec 2019</p>
                                        </div>
                                      </div>

                        </div>



                                    <!-- Sous-Section Project management -->
                                    <br><br>
                                    <div class="row">
                                      <div class="col-lg-12 text-center">
                                        <h3 class="section-heading text-muted text-uppercase">Project Management</h3> <br>
                                      </div>

                                                <!-- Algen -->
                                                <div class="col-md-4 Ux-Ui-item shadow-sm">
                                                  <a class="Ux-Ui-link" data-toggle="modal" href="#Ux-UiModal6">
                                                    <img class="img-fluid" src="assets/img/Ux-Ui/algen.png" alt="">
                                                  </a>
                                                  <div class="Ux-Ui-caption">
                                                    <h4>Algen</h4>
                                                    <p class="text-muted">Feb 2019 - May 2019</p>
                                                  </div>
                                                </div>

                                                <!-- Traffico -->
                                                <div class="col-md-4 Ux-Ui-item shadow-sm">
                                                  <a class="Ux-Ui-link" data-toggle="modal" href="#Ux-UiModal7">
                                                    <img class="img-fluid" src="assets/img/Ux-Ui/traffico.png" alt="">
                                                  </a>
                                                  <div class="Ux-Ui-caption">
                                                    <h4>Traffico</h4>
                                                    <p class="text-muted">Feb 2018 - May 2018</p>
                                                  </div>
                                                </div>
                                  </div>


                  <!-- Sous-Section Business intelligence -->
                  <br><br>
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <h3 class="section-heading text-muted text-uppercase">Business-Intelligence</h3> <br>
                    </div>

                              <!-- B-Wise -->
                              <div class="col-md-4 Ux-Ui-item shadow-sm">
                                <a class="Ux-Ui-link" data-toggle="modal" href="#Ux-UiModal8">
                                  <img class="img-fluid" src="assets/img/Ux-Ui/powerbi.png" alt="">
                                </a>
                                <div class="Ux-Ui-caption">
                                  <h4>B-Wise Dashboard</h4>
                                  <p class="text-muted">Jun 2018 - Sep 2018</p>
                                </div>
                              </div>
                </div>



      </div>
    </section>


                                                                      <!-- Contact -->
                                                                      <section class="page-section" id="contact">
                                                                        <div class="container">
                                                                          <div class="row">
                                                                            <div class="col-lg-12 text-center">
                                                                              <h2 class="section-heading text-uppercase">Contact Me</h2>
                                                                              <br>
                                                                            </div>
                                                                          </div>
                                                                          <div class="row">
                                                                            <div class="col-lg-12">
                                                                              <form id="contactForm" name="sentMessage" novalidate="novalidate" action="storemsg" method="post">
                                                                              {{ csrf_field() }}
                                                                                <div class="row">
                                                                                  <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                      <input class="form-control" name="fullname" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                                                                                      <p class="help-block text-danger"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                      <input class="form-control" name="email" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                                                                                      <p class="help-block text-danger"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                      <input class="form-control" name="phone" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                                                                                      <p class="help-block text-danger"></p>
                                                                                    </div>
                                                                                  </div>
                                                                                  <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                      <textarea class="form-control" name="message" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                                                                      <p class="help-block text-danger"></p>
                                                                                    </div>
                                                                                  </div>
                                                                                  <div class="clearfix"></div>
                                                                                  <div class="col-lg-12 text-center">
                                                                                    <div id="success"></div>
                                                                                    @if (session('Successmsg'))
                                                                                    <br>
                                                                              <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                                              {{session('Successmsg')}}
                                                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                              </div><br>
                                                                              @endif

                                                                                  @if($errors->any())
                                                                                  <script>window.location = "./#contact";</script>
                                                                                  <br>
                                                                                  @foreach ($errors->all() as $error)
                                                                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                                                      {{$error}}
                                                                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                      </div>
                                                                                  @endforeach
                                                                                  <br>
                                                                                  @endif

                                                                                    <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                                                                                  </div>
                                                                                </div>
                                                                              </form>
                                                                            </div>
                                                                          </div>
                                                                        </div>
                                                                      </section>

  <!-- Footer -->
  <footer class="footer">
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



  <!-- Ux-Ui Modals -->
  <!-- Modal Mavor -->
  <div class="Ux-Ui-modal modal fade" id="Ux-UiModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Mavor</h2>
                <p class="item-intro text-muted">Mobile Application</p>
                <img class="img-fluid d-block mx-auto" src="assets/img/Ux-Ui/mavor.png" alt="">
                <p>Mavor is the last design that I have worked on, I don't have the possibility to preview the design or to talk about the app because of confidentiality agreement that I have signed. The client was very satisfied about my work and the app is in the development process </p>
                <ul class="list-inline">
                  <li>Date: October 2019 - November 2019</li>
                  <li>Client: Individual</li>
                  <li>Category: Mobile UX/UI</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal LCSI -->
  <div class="Ux-Ui-modal modal fade" id="Ux-UiModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">LCSI</h2>
                <p class="item-intro text-muted">Website</p>
                <img class="img-fluid d-block mx-auto" src="assets/img/Ux-Ui/lcsi.png" alt="">
                <p>This design was realized during a project in my forth year at the National Higher School of Computer Science, as a part of a module "human machine interaction", in order to apply some theoric knowledge that we got in the field of UX/UI, this website has been chosen randomly</p>
                <ul class="list-inline">
                  <li>Date: February 2019 - May 2019</li>
                  <li>Client: The National Higher School of Computer Science</li>
                  <li>Category: Website UX/UI</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close</button>
                  <a class="btn btn-dark" type="button" href="assets/img/Ux-Ui/lcsi1.png"  target="_blank"> Preview </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal Algen -->
  <div class="Ux-Ui-modal modal fade" id="Ux-UiModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Algen</h2>
                <p class="item-intro text-muted">Website</p>
                <img class="img-fluid d-block mx-auto" src="assets/img/Ux-Ui/algen.png" alt="">
                <p>Algen is the result of what we call 2 cs project in my forth year at the National Higher School of Computer Science, the aim was to develop a website for the management of genetic resources</p>
                <ul class="list-inline">
                  <li>Date: February 2019 - May 2019</li>
                  <li>Client: The National Higher School of Computer Science</li>
                  <li>Category: Website UX/UI</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close</button>
                  <a class="btn btn-dark" type="button" href="assets/img/Ux-Ui/algen1.png"  target="_blank"> Preview </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal Delice -->
  <div class="Ux-Ui-modal modal fade" id="Ux-UiModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Delice</h2>
                <p class="item-intro text-muted">Website</p>
                <img class="img-fluid d-block mx-auto" src="assets/img/Ux-Ui/delice.png" alt="">
                <p>Delice is the result of a program called "ELIP", this landing page had just made to demonstrate the main idea of the product</p>
                <ul class="list-inline">
                  <li>Date: June 2018</li>
                  <li>Client: Me</li>
                  <li>Category: Website UX/UI</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close</button>
                  <a class="btn btn-dark" type="button" href="assets/img/Ux-Ui/delice1.png"  target="_blank"> Preview </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal Esi7a -->
  <div class="Ux-Ui-modal modal fade" id="Ux-UiModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Esi7a</h2>
                <p class="item-intro text-muted">Mobile Application</p>
                <img class="img-fluid d-block mx-auto" src="assets/img/Ux-Ui/esi7a.png" alt="">
                <p>Esi7a is a mobile application that gives the opportunity to find the nearest doctors in the area, to call doctors in case of emergency, the idea has been raised in Hack-it 2, a hackathon organized in 2018 by "Club Scientifique de l'ESI - CSE" at the National Higher School pf Computer Science - Algiers</p>
                <ul class="list-inline">
                  <li>Date: May 2018</li>
                  <li>Client: Hack-it team</li>
                  <li>Category: Mobile UX/UI</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close</button>
                  <a class="btn btn-dark" type="button" href="assets/img/Ux-Ui/esi7a1.png"  target="_blank"> Preview </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



    <!-- Modal Algen-Project-management -->
    <div class="Ux-Ui-modal modal fade" id="Ux-UiModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Algen</h2>
                  <p class="item-intro text-muted">Website</p>
                  <img class="img-fluid d-block mx-auto" src="assets/img/Ux-Ui/algen.png" alt="">
                  <p>Algen is the result of what we call 2 cs project in my forth year at the National Higher School of Computer Science, the aim was to develop a website for the management of genetic resources, it has been developed by an entire team using J2EE Spring boot as a back-end framework, and Html/css/Js for the front-end</p>
                  <ul class="list-inline">
                    <li>Date: February 2019 - May 2019</li>
                    <li>Client: The National Higher School of Computer Science</li>
                    <li>Category: Website</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close</button>
                    <a class="btn btn-dark" type="button" href="assets/img/Ux-Ui/algen1.png"  target="_blank"> Preview </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


      <!-- Modal Bati360 -web front -->
      <div class="Ux-Ui-modal modal fade" id="Ux-UiModal9" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Bati360</h2>
                  <p class="item-intro text-muted">Website</p>
                  <img class="img-fluid d-block mx-auto" src="assets/img/Ux-Ui/bati.png" alt="">
                  <p>Bati 360 is a web plateform that matches professionals to projects, throughout this plateform, you can add a project and professionals make their offers, or a professional shows his profile, and stackholders contact him to work</p>
                  <ul class="list-inline">
                    <li>Date: November 2019 - December 2019</li>
                    <li>Client: Individual</li>
                    <li>Category: Website</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close</button>
                    <a class="btn btn-dark" type="button" href="assets/img/Ux-Ui/bati1.png"  target="_blank"> Preview </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- Modal traffico -->
    <div class="Ux-Ui-modal modal fade" id="Ux-UiModal7" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Traffico</h2>
                  <p class="item-intro text-muted">Project: Algerie 2030</p>
                  <img class="img-fluid d-block mx-auto" src="assets/img/Ux-Ui/traffico.png" alt="">
                  <p>Algerie 2030 project is a study on transportation in Algeria to identify existing problems and find implementable solutions. Based on a strategy and a security plan quite severe, rigorous and radical as well as this one
Focusing on new technologies available in Algeria or elsewhere, solutions have been presented, you can consult the attached report or see the demonstrative video.</p>
                  <ul class="list-inline">
                    <li>Date: February 2018 - May 2018</li>
                    <li>Client: The National Higher School of Computer Science</li>
                    <li>Category: Project with several deliverables</li>
                  </ul>

                 <a class="btn btn-danger" type="button" href="{{ asset('assets/files/traffico.pdf') }}" target="_blank" download="Algerie-2030-Project-report-french"> Pdf file </a> &nbsp
                  <a class="btn btn-info" type="button" href="https://drive.google.com/file/d/13zg_7iihKQO6P7RqLTftBNIMN_gDWMBy/view?usp=sharing"  target="_blank"> Watch video </a> <br> <br> 
                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                      <i class="fas fa-times"></i>
                      Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal PowerBI -->
    <div class="Ux-Ui-modal modal fade" id="Ux-UiModal8" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">B-Wise Dashboard</h2>
                  <p class="item-intro text-muted">Tool : Microsoft PowerBI</p>
                  <img class="img-fluid d-block mx-auto" src="assets/img/Ux-Ui/powerbi.png" alt="">
                  <p>In this project, I have creating a monitoring and evaluation system for the entreprise business-wise-dz which is actually a dashboard that gives an overview on the actual situation with the different indicators in order to know which actions to planify evaluating the situation using the performance indicators.
                    The tool that I used is : Microsoft Power Bi that provides all business intelligence services (Conception, ETL, Reporting).
                    In what follows, a preview of the dashboard, but it is a little bit blured so that the contained information wont be visualised.
                  </p>
                    <ul class="list-inline">
                    <li>Date: June 2018 - September 2018</li>
                    <li>Client: Business-Wise-DZ (Internship)</li>
                    <li>Category: Dashboard</li>
                  </ul>
                      <button class="btn btn-primary" data-dismiss="modal" type="button">
                      <i class="fas fa-times"></i>
                      Close</button>
                      <a class="btn btn-dark" type="button" href="assets/img/Ux-Ui/bwise.png" target="_blank" > Dashboard </a>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Contact form JavaScript -->
  <script src="{{ asset('assets/js/jqBootstrapValidation.js')}}"></script>
  <!-- <script src="{{ asset('assets/js/contact_me.js')}}"></script> -->

  <!-- Custom scripts for this template -->
  <script src="{{ asset('assets/js/agency.js')}}"></script>
  <script src="{{ asset('assets/js/agency.min.js')}}"></script>

</body>

</html>
