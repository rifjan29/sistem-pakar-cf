<!doctype html>
<html class="h-100" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta name="description" content="A growing collection of ready to use components for the CSS framework Bootstrap 5">
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">
  <meta name="author" content="Holger Koenemann">
  <meta name="generator" content="Eleventy v2.0.0">
  <meta name="HandheldFriendly" content="true">
  <title>Stride HTML Template - Frontpage one</title>
  <link rel="stylesheet" href="{{ asset('') }}frontend/css/theme.min.css">

  <style>
    /* inter-300 - latin */
    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 300;
      font-display: swap;
      src: local(''),
        url('./../fonts/inter-v12-latin-300.woff2') format('woff2'),
        /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('./../fonts/inter-v12-latin-300.woff') format('woff');
      /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
    }

    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 500;
      font-display: swap;
      src: local(''),
        url('./fonts/inter-v12-latin-500.woff2') format('woff2'),
        /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('./fonts/inter-v12-latin-500.woff') format('woff');
      /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
    }

    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: local(''),
        url('./fonts/inter-v12-latin-700.woff2') format('woff2'),
        /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('./fonts/inter-v12-latin-700.woff') format('woff');
      /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
    }
  </style>

</head>

<body data-bs-spy="scroll" data-bs-target="#navScroll">

  <nav id="navScroll" class="navbar navbar-expand-lg navbar-light fixed-top" tabindex="0">
    <div class="container">
      <a class="navbar-brand pe-4 fs-4" href="/">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-layers-half"
          viewbox="0 0 16 16">
          <path
            d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z" />
        </svg>
        <span class="ms-1 fw-bolder">Stride</span>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('welcome') }}#services" aria-label="Brings you to the frontpage">
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('konsultasi') }}">
              Konsultasi
            </a>
          </li>


        </ul>

      </div>
    </div>
  </nav>

  <main>
    <div class="w-100 overflow-hidden bg-gray-100" id="top">

      <div class="container position-relative">
        <div class="col-12 col-lg-8 mt-0 h-100 position-absolute top-0 end-0 bg-cover" data-aos="fade-left"
          style="background-image: url({{ asset('') }}frontend/img/webp/interior11.webp);">

        </div>
        <div class="row">

          <div class="col-lg-7 py-vh-6 position-relative" data-aos="fade-right">
            <h1 class="display-1 fw-bold mt-5">Sell more useless stuff faster!</h1>
            <p class="lead">To be honest, this is just a stupid placeholder text. We don´t know how to sell anything,
              not even lesser or slower as you.</p>
            <a href="{{ route('konsultasi') }}" class="btn btn-dark btn-xl shadow me-3 rounded-0 my-5">Konsultasi</a>
          </div>



        </div>
      </div>

    </div>

    <div class="py-vh-5 w-100 overflow-hidden" id="services">
      <div class="container">
        <div class="row d-flex justify-content-end">
          <div class="col-lg-8" data-aos="fade-down">
            <h2 class="display-6">Okay, there are three really good reasons for us. There are no more than three, but we
              think three is a reasonable good number of good stuff.</h2>
          </div>
        </div>
        <div class="row d-flex align-items-center">
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <span class="h5 fw-lighter">01.</span>
            <h3 class="py-5 border-top border-dark">We rented this fancy startup office in an old factory building.</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus culpa, voluptatibus ex itaque, sapiente a
              consequatur inventore beatae, ipsam debitis omnis consequuntur iste asperiores. Similique quisquam debitis
              corrupti deserunt, dolor.</p>
            <a href="#" class="link-fancy">Learn more
            </a>
          </div>

          <div class="col-md-6 col-lg-4 py-vh-4 pb-0" data-aos="fade-up" data-aos-delay="400">
            <span class="h5 fw-lighter">02.</span>
            <h3 class="py-5 border-top border-dark">We don´t know exactly what we are doing. But thats good because we
              can´t break something intentionally.</h3>
            <p>Lorem, ipsum dolor sit adipisicing elit. Minus culpa, voluptatibus ex itaque, sapiente a consequatur
              inventore beatae, ipsam debitis omnis consequuntur iste asperiores. Similique quisquam debitis corrupti
              deserunt, dolor.</p>
            <a href="#" class="link-fancy">Learn more
            </a>
          </div>

          <div class="col-md-6 col-lg-4 py-vh-6 pb-0" data-aos="fade-up" data-aos-delay="600">
            <span class="h5 fw-lighter">03.</span>
            <h3 class="py-5 border-top border-dark">There is no real number three reason. So please read again number
              one and two.</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus culpa, voluptatibus ex itaque, sapiente a
              consequatur inventore beatae, ipsam debitis omnis consequuntur iste asperiores. Similique quisquam debitis
              corrupti deserunt, dolor.</p>
            <a href="#" class="link-fancy">Learn more
            </a>
          </div>
        </div>

      </div>
    </div>


  </main>

  <footer>
    <div class="container small border-top">
      <div class="row py-5 d-flex justify-content-between">

        <div class="col-12 col-lg-6 col-xl-3 border-end p-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-layers-half"
            viewbox="0 0 16 16">
            <path
              d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z" />
          </svg>
          <address class="text-secondary mt-3">
            <strong>Stride, Inc.</strong><br>
            1355 Market St, Suite 900<br>
            San Francisco, CA 94103<br>
            <abbr title="Phone">P:</abbr>
            (123) 456-7890
          </address>
        </div>
        <div class="col-12 col-lg-6 col-xl-3 border-end p-5">
          <h3 class="h6 mb-3">Company</h3>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link link-secondary ps-0" aria-current="page" href="#">Lorem ipsum</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-secondary ps-0" href="#">Dolor sitam est</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-secondary ps-0" href="#">Sed odio cras</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-secondary ps-0" href="#">Commodo tortor ac</a>
            </li>
          </ul>
        </div>
        <div class="col-12 col-lg-6 col-xl-3 border-end p-5">
          <h3 class="h6 mb-3">Products</h3>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link link-secondary ps-0" aria-current="page" href="#">Fusce dapibus est</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-secondary ps-0" href="#">Donec sed dui</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-secondary ps-0" href="#">Tortor mauris</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-secondary ps-0" href="#">Ut fermentum massa</a>
            </li>

            <li class="nav-item">
              <a class="nav-link link-secondary ps-0" href="#">Magna mollis</a>
            </li>
          </ul>
        </div>
        <div class="col-12 col-lg-6 col-xl-3 p-5">
          <h3 class="h6 mb-3">Subpages</h3>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link link-secondary ps-0" aria-current="page" href="404.html">404 System Page</a>
              <a class="nav-link link-secondary ps-0" aria-current="page" href="register.html">Register System Page</a>
              <a class="nav-link link-secondary ps-0" aria-current="page" href="content.html">Simple Text Content
                Page</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container text-center py-3 small">Made by <a href="https://templatedeck.com" class="link-fancy"
        target="_blank">templatedeck.com</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a>
    </div>
  </footer>

  <script src="{{ asset('') }}frontend/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('') }}frontend/js/aos.js"></script>
  <script>
    AOS.init({
      duration: 800, // values from 0 to 3000, with step 50ms
    });
  </script>

  <script>
    let scrollpos = window.scrollY;
    const header = document.querySelector(".navbar");
    const header_height = header.offsetHeight;

    const add_class_on_scroll = () => header.classList.add("scrolled", "shadow-sm");
    const remove_class_on_scroll = () => header.classList.remove("scrolled", "shadow-sm");

    window.addEventListener('scroll', function () {
      scrollpos = window.scrollY;

      if (scrollpos >= header_height) { add_class_on_scroll(); }
      else { remove_class_on_scroll(); }

      console.log(scrollpos);
    })
  </script>

</body>

</html>
