<!DOCTYPE html>
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <!-- <style>
    body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    }

    .topnav {
    overflow: hidden;
    background-color: #333;
    }

    .topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    }

    .topnav a:hover {
    background-color: #ddd;
    color: black;
    }

    .topnav a.active {
    background-color: #04AA6D;
    color: white;
    }
    </style> -->
<!-- </head> -->
<!-- <body>
    <div class="topnav">
    <a class="active" href="{{url('/')}}">Home</a>
    <a href="{{url('About')}}">About</a>
    <a href="{{url('Contact')}}">Contact</a>
</div>
<div><h1>Welcome To Contact</h1></div> -->
<!-- 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{url('/')}}">Saruf Ratul</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a class="active" href="{{url('/')}}">Home</a></li>
      <li><a href="{{url('About')}}">About</a></li>
      <li><a href="{{url('Contact')}}">Contact</a></li>
      <li><a href="{{url('Project')}}">Project</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Contact</h3>
  <p>Welcome To Contact</p>


</body>
</html> -->

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
<div class="section px-2 px-lg-4 pb-4 pt-5 mb-5" id="contact">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">Contact Me</h2>
    </div>
    <div class="row">
      <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="bg-light my-2 p-3 pt-2"><form action="https://formspree.io/your@email.com"
    method="POST">
    <div class="form-group my-2">
      <label for="name" class="form-label fw-bolder">Name</label>
      <input class="form-control" type="text" id="name" name="name" required>
    </div>
    <div class="form-group my-2">
      <label for="email" class="form-label fw-bolder">Email</label>
      <input class="form-control" type="email" id="email" name="_replyto" required>
    </div>
  <div class="form-group my-2">
    <label for="message" class="form-label fw-bolder">Message</label>
    <textarea class="form-control" style="resize: none;" id="message" name="message" rows="4" required></textarea>
  </div>
  <button class="btn btn-primary mt-2" type="submit">Send</button>
</form>
        </div>
      </div>
      <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
        <div class="mt-3 px-1">
          <div class="h5">Let’s talk how I can help you!</div>
          <p>If you like my work and want to avail my services then drop me a message using the contact form. </p>
          <p>Or get in touch using my email, skype or my contact number.</p>
          <p>See you!</p>
        </div>
        <div class="mt-53 px-1">
          <div class="row"> 
            <div class="col-sm-2">
              <div class="pb-1">Email:</div>
            </div>
            <div class="col-sm-10">
              <div class="pb-1 fw-bolder">walter@company.com</div>
            </div>
            <div class="col-sm-2">
              <div class="pb-1">Skype:</div>
            </div>
            <div class="col-sm-10">
              <div class="pb-1 fw-bolder">username@skype.com</div>
            </div>
            <div class="col-sm-2">
              <div class="pb-1">Phone:</div>
            </div>
            <div class="col-sm-10">
              <div class="pb-1 fw-bolder">+0718-111-0011</div>
            </div>
          </div>
        </div>
      </div>
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