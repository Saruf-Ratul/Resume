<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Saruf Ratul</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap"/>
    </noscript>
    <link href="{{ url('/css/font-awesome/css/all.min.css?ver=1.2.0') }}" rel="stylesheet">
    <link href="{{ url('/css/bootstrap-icons/bootstrap-icons.css?ver=1.2.0') }}" rel="stylesheet">
    <link href="{{ url('/css/bootstrap.min.css?ver=1.2.0') }}" rel="stylesheet">
    <link href="{{ url('/css/aos.css?ver=1.2.0') }}" rel="stylesheet">
    <link href="{{ url('/css/main.css?ver=1.2.0') }}" rel="stylesheet">
    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
    </head>
    <body id="top">
          <header class="bg-light">
      <nav class="navbar navbar-expand-lg navbar-light bg-light" id="header-nav" role="navigation">
        <div class="container"><a class="link-dark navbar-brand site-title mb-0" href="{{url('/')}}">SR</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-2">
              <li class="nav-item"><a class="nav-link" href="{{url('About')}}">About</a></li>
              <li class="nav-item"><a class="nav-link" href="{{url('Services')}}">Services</a></li>
              <li class="nav-item"><a class="nav-link" href="{{url('Skills')}}">Skills</a></li>
              <li class="nav-item"><a class="nav-link" href="{{url('Portfolio')}}">Portfolio</a></li>
              <li class="nav-item"><a class="nav-link" href="{{url('Experience')}}">Experience</a></li>
              <li class="nav-item"><a class="nav-link" href="{{url('Contact')}}">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="section px-3 px-lg-4 pt-5" id="services">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">My Services</h2>
    </div>
    <div class="text-center">
      <p class="mx-auto mb-3" style="max-width:600px"> I offer services fit for any website or app. I can quickly maximize timely deliverables for real-time schemas.</p>
    </div>
    <div class="row py-3">
      <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="100"><img class="mb-2" src="images/services/graphic-design.svg" width="96" height="96" alt="web design"/>
        <div class="h5">Frontend Development</div>
      </div>
      <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="200"><img class="mb-2" src="images/services/web-design.svg" width="96" height="96" alt="graphic design"/>
        <div class="h5">Backend Development</div>
      </div>
      <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="300"><img class="mb-2" src="images/services/ui-ux.svg" width="96" height="96" alt="ui-ux"/>
        <div class="h5">Web Design</div>
      </div>
      <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="400"><img class="mb-2" src="images/services/app-development.svg" width="96" height="96" alt="app development"/>
        <div class="h5">App Development</div>
      </div>
      <br>

      <!-- <div class="col-md-2 text-center" data-aos="fade-up" data-aos-delay="400"><img class="mb-2" src="images/services/html.svg" width="50" height="50" alt="app development"/>
        <div class="h5"></div>
      </div>
      <div class="col-md-2 text-center" data-aos="fade-up" data-aos-delay="400"><img class="mb-2" src="images/services/css.svg" width="50" height="50" alt="app development"/>
        <div class="h5"></div>
      </div>
      <div class="col-md-2 text-center" data-aos="fade-up" data-aos-delay="400"><img class="mb-2" src="images/services/javascript.svg" width="50" height="50" alt="app development"/>
        <div class="h5"></div>
      </div>
      <div class="col-md-2 text-center" data-aos="fade-up" data-aos-delay="400"><img class="mb-2" src="images/services/nodejs.svg" width="50" height="50" alt="app development"/>
        <div class="h5"></div>
      </div>
      <br>
      <div class="col-md-2 text-center" data-aos="fade-up" data-aos-delay="400"><img class="mb-2" src="images/services/PHP.svg" width="50" height="50" alt="app development"/>
        <div class="h5"></div>
      </div>
      <div class="col-md-2 text-center" data-aos="fade-up" data-aos-delay="400"><img class="mb-2" src="images/services/npm.svg" width="40" height="40" alt="app development"/>
        <div class="h5"></div>
      </div>
      <div class="col-md-2 text-center" data-aos="fade-up" data-aos-delay="400"><img class="mb-2" src="images/services/laravel.svg" width="50" height="50" alt="app development"/>
        <div class="h5"></div>
      </div>
      <div class="col-md-2 text-center" data-aos="fade-up" data-aos-delay="400"><img class="mb-2" src="images/services/wordpress.svg" width="50" height="50" alt="app development"/>
        <div class="h5"></div>
      </div>
      <div class="col-md-2 text-center" data-aos="fade-up" data-aos-delay="400"><img class="mb-2" src="images/services/woocommerce.svg" width="50" height="50" alt="app development"/>
        <div class="h5"></div>
      </div>
      <div class="col-md-2 text-center" data-aos="fade-up" data-aos-delay="400"><img class="mb-2" src="images/services/mysql.svg" width="50" height="50" alt="app development"/>
        <div class="h5"></div>
      </div>
      <div class="col-md-2 text-center" data-aos="fade-up" data-aos-delay="400"><img class="mb-2" src="images/services/microsoft-sql.svg" width="50" height="50" alt="app development"/>
        <div class="h5"></div>
      </div>
      <div class="col-md-2 text-center" data-aos="fade-up" data-aos-delay="400"><img class="mb-2" src="images/services/sqlite.svg" width="50" height="50" alt="app development"/>
        <div class="h5"></div>
      </div> -->

    </div>
  </div>
</div>

<footer class="pt-4 pb-4 text-center bg-light">
  <div class="container">
    <div class="my-3">
      <div class="h4">Walter Patterson</div>
      <p>Web Developer & Mobile Application Developer</p>
      <div class="social-nav">
        <nav role="navigation">
          <ul class="nav justify-content-center">
            <li class="nav-item"><a class="nav-link" href="https://twitter.com/templateflip" title="Twitter"><i class="fab fa-twitter"></i><span class="menu-title sr-only">Twitter</span></a></li>
            <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/templateflip" title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a></li>
            <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/templateflip" title="Instagram"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a></li>
            <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/" title="LinkedIn"><i class="fab fa-linkedin"></i><span class="menu-title sr-only">LinkedIn</span></a></li>
            <li class="nav-item"><a class="nav-link" href="https://www.behance.net/templateflip" title="Behance"><i class="fab fa-behance"></i><span class="menu-title sr-only">Behance</span></a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="text-small text-secondary">
      <div class="mb-1">&copy; Super Folio. All rights reserved.</div>
      <div>
        <!-- Make sure to buy a license for the template before removing the line below. Buy license on https://templateflip.com/ -->Design - <a href="https://templateflip.com/" target="_blank">TemplateFlip</a></div>
    </div>
  </div>
</footer></div>
    </div>
    <div id="scrolltop"><a class="btn btn-secondary" href="#top"><span class="icon"><i class="fas fa-angle-up fa-x"></i></span></a></div>
    <script src="./js/imagesloaded.pkgd.min.js?ver=1.2.0"></script>
    <script src="./js/masonry.pkgd.min.js?ver=1.2.0"></script>
    <script src="./js/BigPicture.min.js?ver=1.2.0"></script>
    <script src="./js/purecounter.min.js?ver=1.2.0"></script>
    <script src="./js/bootstrap.bundle.min.js?ver=1.2.0"></script>
    <script src="./js/aos.min.js?ver=1.2.0"></script>
    <script src="./js/main.js?ver=1.2.0"></script>
    </body>
    </html>