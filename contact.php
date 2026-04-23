<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>
      Triasoft - Web & App Development Services for Digital Transformation
    </title>
    <meta name="author" content="Atek" />
    <meta
      name="description"
      content="Atek - It Business and Consulting Service Html Template"
    />
    <meta
      name="keywords"
      content="Atek - It Business and Consulting Service Html Template"
    />
    <meta name="robots" content="INDEX,FOLLOW" />

    <!-- Mobile Specific Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link
      rel="apple-touch-icon"
      sizes="57x57"
      href="assets/img/favicons/apple-icon-57x57.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="60x60"
      href="assets/img/favicons/apple-icon-60x60.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="72x72"
      href="assets/img/favicons/apple-icon-72x72.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="assets/img/favicons/apple-icon-76x76.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="114x114"
      href="assets/img/favicons/apple-icon-114x114.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="120x120"
      href="assets/img/favicons/apple-icon-120x120.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="144x144"
      href="assets/img/favicons/apple-icon-144x144.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="152x152"
      href="assets/img/favicons/apple-icon-152x152.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="assets/img/favicons/apple-icon-180x180.png"
    />
    <link rel="icon" type="image/png" href="assets/img/logo.png" />
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-png" />
    <!-- <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png" /> -->
    <link rel="manifest" href="assets/img/favicons/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta
      name="msapplication-TileImage"
      content="assets/img/favicons/ms-icon-144x144.png"
    />
    <meta name="theme-color" content="#ffffff" />

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />

    <!--==============================
	    All CSS File
	============================== -->
    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css" />

    <!-- Swiper css -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>

  <body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!--********************************
   		Code Start From Here 
	******************************** -->

    <!-- <div class="cursor-follower"></div> -->

    <!-- slider drag cursor -->
    <div
      class="slider-drag-cursor d-flex align-items-center justify-content-between"
    >
      <span class="drag-icon-left"
        ><img src="assets/img/icon/drag-arrow-left.svg" alt=""
      /></span>
      DRAG
      <span class="drag-icon-right">
        <img src="assets/img/icon/drag-arrow-right.svg" alt="" />
      </span>
    </div>

    <!--==============================
     Preloader
  ==============================-->
    <div class="preloader" id="sitePreloader">
      <button class="th-btn preloaderCls">Skip Intro</button>
      <div class="preloader-inner">
        <div class="loader-container" aria-label="Triasoft loading">
          <div class="part part-1"></div>
          <div class="part part-2"></div>
          <div class="part part-3"></div>
        </div>
        <div class="preloader-copy">
          <span class="preloader-kicker">Loading Triasoft</span>
          <p>Preparing web, mobile, and product experiences.</p>
        </div>
      </div>
    </div>
    <script>
      // Keep the preloader visible for 3 seconds
      (function(){
        var minWait = 3000;
        var t = setTimeout(function(){
          var p = document.getElementById('sitePreloader');
          if(p){ p.classList.add('loaded'); }
        }, minWait);
        window.addEventListener('load', function(){
          // Let the timer control when the preloader hides.
        });
      })();
    </script>
    <style>
      #sitePreloader {
        background:
          radial-gradient(circle at 20% 20%, rgba(80, 201, 255, 0.12), transparent 28%),
          radial-gradient(circle at 80% 18%, rgba(77, 157, 224, 0.12), transparent 24%),
          linear-gradient(135deg, #050816 0%, #0a1120 48%, #060a13 100%);
        overflow: hidden;
        transition: opacity 0.45s ease, visibility 0.45s ease;
      }

      #sitePreloader.loaded {
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
      }

      #sitePreloader .th-btn {
        position: absolute;
        top: 28px;
        right: 28px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: 999px;
        padding: 12px 20px;
        background: rgba(255, 255, 255, 0.06);
        backdrop-filter: blur(10px);
        color: #eaf2ff;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.22);
      }

      #sitePreloader .th-btn:hover {
        background: rgba(255, 255, 255, 0.12);
        color: #ffffff;
      }

      #sitePreloader .preloader-inner {
        width: min(92vw, 520px);
        padding: 24px;
        border: 0;
        border-radius: 0;
        background: transparent;
        box-shadow: none;
        backdrop-filter: none;
      }

      #sitePreloader .preloader-copy {
        max-width: 100%;
        text-align: center;
      }

      #sitePreloader .preloader-kicker {
        display: inline-block;
        margin-bottom: 10px;
        color: rgba(234, 242, 255, 0.78);
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 0.2em;
        text-transform: uppercase;
      }

      #sitePreloader .preloader-copy p {
        margin: 0 auto;
        max-width: 360px;
        color: rgba(214, 227, 247, 0.68);
        font-size: 15px;
        line-height: 1.7;
      }

      #sitePreloader .loader-container {
        position: relative;
        width: min(300px, 72vw);
        height: 200px;
        margin: 0 auto 18px;
      }

      #sitePreloader .part {
        position: absolute;
        overflow: hidden;
        opacity: 0;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        animation: triLoaderMove 1.2s cubic-bezier(0.25, 1, 0.5, 1) forwards;
        filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.1));
      }

      #sitePreloader .part::after {
        content: "";
        position: absolute;
        top: 0;
        left: -200%;
        width: 200%;
        height: 100%;
        background: linear-gradient(
          90deg,
          rgba(255, 255, 255, 0) 0%,
          rgba(255, 255, 255, 0.9) 50%,
          rgba(255, 255, 255, 0) 100%
        );
        transform: skewX(-30deg);
        animation: triLoaderGlare 3s ease-in-out infinite;
        animation-delay: 1.5s;
      }

      #sitePreloader .part-1 {
        width: 170px;
        height: 55px;
        background: linear-gradient(135deg, #50c9ff 0%, #3db2e5 100%);
        clip-path: polygon(40% 0%, 100% 0%, 60% 100%, 0% 100%);
        --final-x: -150px;
        --final-y: -70px;
      }

      #sitePreloader .part-2 {
        width: 130px;
        height: 55px;
        background: linear-gradient(135deg, #4d9de0 0%, #2a64ad 100%);
        clip-path: polygon(0% 0%, 100% 0%, 52% 100%, 18% 100%);
        --final-x: 25px;
        --final-y: -76px;
      }

      #sitePreloader .part-3 {
        width: 155px;
        height: 55px;
        background: linear-gradient(135deg, #ffb347 0%, #f88a25 100%);
        clip-path: polygon(45% 0%, 100% 0%, 60% 100%, 0% 100%);
        --final-x: -100px;
        --final-y: -15px;
      }

      @keyframes triLoaderMove {
        0% {
          opacity: 0;
          transform: translate(-50%, -50%);
        }
        100% {
          opacity: 1;
          transform: translate(var(--final-x), var(--final-y));
        }
      }

      @keyframes triLoaderGlare {
        0% { left: -200%; }
        30% { left: 150%; }
        100% { left: 150%; }
      }

      @media (max-width: 767px) {
        #sitePreloader .th-btn {
          top: 18px;
          right: 18px;
          padding: 10px 16px;
        }

        #sitePreloader .preloader-inner {
          width: min(92vw, 92vw);
          padding: 24px 18px;
        }

        #sitePreloader .loader-container {
          width: min(280px, 78vw);
          height: 170px;
        }

        #sitePreloader .preloader-copy p {
          font-size: 14px;
          line-height: 1.7;
        }
      }
    </style>

    <!--==============================
    Mobile Menu
  ============================== -->
    <div class="th-menu-wrapper onepage-nav">
      <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
          <a href="index.html"><img src="assets/img/logo2.svg" alt="Atek" /></a>
        </div>
        <div class="th-mobile-menu">
          <ul>
            <li class="menu-item mega-menu-wrap">
              <a class="active" href="index.html">Home</a>
            </li>
            <li class="menu-item">
              <a href="#">About Us</a>
            </li>
            <li class="menu-item">
              <a href="#">Our Services</a>
            </li>
            <li class="menu-item">
              <a href="#">Our Products</a>
            </li>
            <li class="menu-item">
              <a href="contact.html">Contact us</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!--==============================
    Sidemenu
============================== -->
    <header class="th-header header-layout5 tech-header">
      <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
          <div class="container th-container6">
            <div class="row align-items-center justify-content-between">
              <div class="col-auto">
                <div class="header-logo">
                  <a href="#">
                    <img
                      src="assets/img/logo-white.png"
                      width="250px"
                      alt="Atek"
                    />
                  </a>
                </div>
              </div>
              <div class="col-auto">
                <nav class="main-menu d-none d-xl-block">
                  <ul>
                    <li class="menu-item mega-menu-wrap">
                      <a class="active" href="#">Home</a>
                    </li>
                    <li class="menu-item">
                      <a href="#about-sec">About Us</a>
                    </li>

                    <li class="menu-item">
                      <a href="#services">Our Services</a>
                    </li>
                    <li class="menu-item">
                      <a href="#products">Products</a>
                    </li>
                    <li class="menu-item">
                      <a href="#">Contact us</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!--==============================
Contact Area  
==============================-->
    <style>
      /* Tech Header Dark Theme Overrides */
      .tech-header {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 100;
        background: transparent !important;
        border-bottom: 1px solid rgba(255,255,255,0.05);
      }
      .tech-header .menu-area {
        background: transparent !important;
      }
      .tech-header .main-menu > ul > li > a {
        color: #fff !important;
      }
      .tech-header .main-menu > ul > li > a:hover {
        color: #a5b4fc !important;
      }
      .sticky-wrapper.sticky,
      .sticky-wrapper.sticky .menu-area,
      .sticky-wrapper.sticky .sticky-active {
        background: transparent !important;
        background-color: #000 !important;
        box-shadow: none !important;
      }
      .sticky-wrapper.sticky .tech-header,
      .tech-header.sticky-active {
        background: rgba(3, 2, 10, 0.95) !important;
        backdrop-filter: blur(10px);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5) !important;
      }

      /* Base section background */
      .new-contact-sec {
        background-color: #03020A;
        background-image: radial-gradient(circle at top left, rgba(40, 30, 80, 0.4) 0%, transparent 50%),
                          radial-gradient(circle at bottom right, rgba(99, 102, 241, 0.15) 0%, transparent 50%);
        color: rgba(255, 255, 255, 0.7);
        position: relative;
        overflow: hidden;
        padding-top: 180px; /* Clear the absolute header */
      }
      
      /* Remove smoke-bg or override it */
      .new-contact-sec .smoke-bg {
        background-color: transparent !important;
      }

      /* Contact Info Box */
      .new-contact-sec .contact-infobox {
        background: rgba(255, 255, 255, 0.03) !important;
        border: 1px solid rgba(255, 255, 255, 0.05) !important;
        border-radius: 20px;
        padding: 40px;
        backdrop-filter: blur(10px);
      }

      .new-contact-sec .sec-title {
        color: #fff !important;
      }
      .new-contact-sec .sub-title {
        color: #6366f1 !important;
      }
      .new-contact-sec .sec-text {
        color: rgba(255, 255, 255, 0.7) !important;
      }

      .new-contact-sec .about-contact-grid {
        background: rgba(255, 255, 255, 0.02) !important;
        border: 1px solid rgba(255, 255, 255, 0.05) !important;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 15px;
        transition: all 0.3s ease;
      }
      .new-contact-sec .about-contact-grid:hover {
        background: rgba(255, 255, 255, 0.05) !important;
        border-color: rgba(99, 102, 241, 0.3) !important;
        transform: translateY(-3px);
      }

      .new-contact-sec .about-contact-icon {
        background: rgba(99, 102, 241, 0.1) !important;
        color: #a5b4fc !important;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
      }

      .new-contact-sec .about-contact-details-text a {
        color: #fff !important;
        text-decoration: none;
        transition: color 0.3s ease;
      }
      .new-contact-sec .about-contact-details-text a:hover {
        color: #6366f1 !important;
      }

      /* Contact Form Box */
      .new-contact-sec .contact-formbox {
        background: rgba(255, 255, 255, 0.02) !important;
        border: 1px solid rgba(255, 255, 255, 0.05) !important;
        border-radius: 20px;
        padding: 40px;
        backdrop-filter: blur(10px);
      }

      .new-contact-sec .contact-formbox .contact-form {
        background: transparent !important;
        border: 1px solid rgba(255, 255, 255, 0.05) !important;
      }

      .new-contact-sec .form-control,
      .new-contact-sec .form-select {
        background: rgba(0, 0, 0, 0.2) !important;
        border: 1px solid rgba(255, 255, 255, 0.08) !important;
        color: #fff !important;
        border-radius: 10px;
      }
      .new-contact-sec .form-control:focus,
      .new-contact-sec .form-select:focus {
        background: rgba(0, 0, 0, 0.3) !important;
        border-color: #6366f1 !important;
        box-shadow: none;
        color: #fff !important;
      }
      .new-contact-sec .form-control::placeholder {
        color: rgba(255, 255, 255, 0.4) !important;
      }
      
      .new-contact-sec .nice-select {
        background: rgba(0, 0, 0, 0.2) !important;
        border: 1px solid rgba(255, 255, 255, 0.08) !important;
        color: rgba(255, 255, 255, 0.4) !important;
        border-radius: 10px;
      }
      .new-contact-sec .nice-select .list {
        background: #0f172a !important;
        border: 1px solid rgba(255, 255, 255, 0.1) !important;
      }
      .new-contact-sec .nice-select .option {
        color: #fff !important;
      }
      .new-contact-sec .nice-select .option:hover,
      .new-contact-sec .nice-select .option.focus,
      .new-contact-sec .nice-select .option.selected.focus {
        background: rgba(99, 102, 241, 0.2) !important;
      }
      .new-contact-sec .nice-select::after {
        border-bottom: 2px solid rgba(255, 255, 255, 0.4) !important;
        border-right: 2px solid rgba(255, 255, 255, 0.4) !important;
      }

      .new-contact-sec .form-group img {
        filter: brightness(0) invert(1) opacity(0.5);
      }

      .new-contact-sec .th-btn {
        background: linear-gradient(90deg, #6366f1, #8b5cf6) !important;
        color: #fff !important;
        border: none !important;
        box-shadow: 0 4px 15px rgba(99, 102, 241, 0.4) !important;
      }
      .new-contact-sec .th-btn:hover {
        box-shadow: 0 6px 20px rgba(99, 102, 241, 0.6) !important;
        transform: translateY(-2px);
      }
      .new-contact-sec .th-btn img {
        filter: brightness(0) invert(1);
      }

      /* Map Area Darkening */
      .new-map-sec {
        background-color: #03020A;
      }
      .new-map-sec .contact-map {
        border-radius: 20px;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.05);
        position: relative;
      }
      /* Dark mode map inversion trick */
      .new-map-sec .contact-map iframe {
        filter: invert(90%) hue-rotate(180deg) brightness(85%) contrast(110%);
      }
      .new-map-sec .contact-icon {
        background: linear-gradient(90deg, #6366f1, #8b5cf6);
        box-shadow: 0 4px 15px rgba(99, 102, 241, 0.4);
      }
      .new-map-sec .contact-icon img {
        filter: brightness(0) invert(1);
      }
    </style>
    <div class="space new-contact-sec">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <div class="title-area mb-5">
              <span class="sub-title">Contact Us</span>
              <h2 class="sec-title" style="color: #fff; font-size: 2.5rem;">Let's Build Something Great Together</h2>
              <p class="sec-text" style="color: rgba(255, 255, 255, 0.7); max-width: 600px; margin: 0 auto;">
                Whether you have a question about our services, need a custom software solution, or just want to say hello, our team is ready to answer all your questions.
              </p>
            </div>
          </div>
        </div>
        <!-- Horizontal Contact Info Cards -->
        <div class="row gy-4 mb-5 justify-content-center">
          <div class="col-md-6 col-lg-4">
            <div class="about-contact-grid inner-style text-center h-100 d-flex flex-column align-items-center justify-content-center" style="padding: 30px;">
              <span class="about-contact-icon mb-3 mx-auto">
                <i class="fa-solid fa-headphones-simple"></i>
              </span>
              <div class="about-contact-details">
                <span class="sec-text d-block mb-2">Call Us For Query</span>
                <p class="about-contact-details-text mb-0">
                  <a href="tel:+919633542550">(+91) 96335 42550</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="about-contact-grid inner-style text-center h-100 d-flex flex-column align-items-center justify-content-center" style="padding: 30px;">
              <span class="about-contact-icon mb-3 mx-auto">
                <i class="fa-light fa-envelope-open-text"></i>
              </span>
              <div class="about-contact-details">
                <span class="sec-text d-block mb-2">Email Us Anytime</span>
                <p class="about-contact-details-text mb-0">
                  <a href="mailto:info@triassoftware.com">info@triassoftware.com</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="about-contact-grid inner-style text-center h-100 d-flex flex-column align-items-center justify-content-center" style="padding: 30px;">
              <span class="about-contact-icon mb-3 mx-auto">
                <i class="fa-thin fa-map-location-dot"></i>
              </span>
              <div class="about-contact-details">
                <span class="sec-text d-block mb-2">Visit Our Office</span>
                <p class="about-contact-details-text mb-0">
                  <a href="https://maps.app.goo.gl/QyH2fFoJ9fii93mt7" target="_blank">Sai Arcade, Panamaram, Wayanad</a>
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Contact Form Below -->
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="contact-formbox">
              <div class="title-area mb-4 text-center">
                <h3 class="sec-title" style="color: #fff; font-size: 1.8rem; margin-bottom: 10px;">Send Us a Message</h3>
                <p class="sec-text" style="color: rgba(255, 255, 255, 0.7);">
                  Fill out the form below and we will get back to you as soon as possible.
                </p>
              </div>
              <form
                action="mail.php"
                method="POST"
                class="contact-form ajax-contact"
              >
                <div class="row">
                  <div class="col-sm-6 form-group">
                    <input
                      type="text"
                      class="form-control"
                      name="name"
                      id="name3"
                      placeholder="Your Name"
                    />
                    <img src="assets/img/icon/user.svg" alt="" />
                  </div>
                  <div class="col-sm-6 form-group">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      id="email"
                      placeholder="Email Address"
                    />
                    <img src="assets/img/icon/mail.svg" alt="" />
                  </div>
                  <div class="col-sm-6 form-group">
                    <input
                      type="text"
                      class="form-control"
                      name="number"
                      id="number"
                      placeholder="Phone Number"
                    />
                    <img src="assets/img/icon/call.svg" alt="" />
                  </div>
                  <div class="col-sm-6 form-group">
                    <select
                      name="subject"
                      id="subject"
                      class="form-select nice-select"
                    >
                      <option value="Select Subject" selected disabled>
                        Select Subject
                      </option>
                      <option value="Website Development">
                        Website Development
                      </option>
                      <option value="Ecommerce Development">
                        Ecommerce Development
                      </option>
                      <option value="Mobile App">Mobile App</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                  <div class="form-group col-12">
                    <textarea
                      name="message"
                      id="message"
                      cols="30"
                      rows="3"
                      class="form-control"
                      placeholder="Your Message"
                    ></textarea>
                    <img src="assets/img/icon/chat.svg" alt="" />
                  </div>
                  <div class="form-btn col-12">
                    <button type="submit" class="th-btn">
                      Send Email
                      <img src="assets/img/icon/plane4.svg" alt="" />
                    </button>
                  </div>
                </div>
                <p class="form-messages mb-0 mt-3"></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==============================
Map Area  
==============================-->
    <div class="space-bottom new-map-sec">
      <div class="container">
        <div class="contact-map style2">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3906.490402822259!2d76.0706399740307!3d11.730461640874578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa3b212918a182997%3A0xa193b69679835b71!2sTriasoft%20Softwares!5e0!3m2!1sen!2sin!4v1757740369119!5m2!1sen!2sin"
            width="600"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
          <div class="contact-icon">
            <img src="assets/img/icon/location-dot3.svg" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!--==============================
	Footer Area
==============================-->
    <style>
      .new-footer-sec {
        background-color: #0d044aff;
        background-image: radial-gradient(circle at 50% 100%, rgba(20, 20, 70, 0.45) 0%, transparent 60%);
        border-top: 1px solid rgba(255, 255, 255, 0.05);
        color: rgba(255, 255, 255, 0.7);
        padding-top: 80px;
        position: relative;
        overflow: hidden;
      }
      .new-footer-sec .widget_title {
        color: #fff;
        font-size: 1.25rem;
        margin-bottom: 25px;
        font-weight: 600;
      }
      .new-footer-sec .about-text {
        color: rgba(255, 255, 255, 0.7);
        margin-top: 20px;
        margin-bottom: 25px;
        line-height: 1.6;
      }
      .new-footer-sec .th-social a {
        background: rgba(255, 255, 255, 0.05);
        color: #fff;
        width: 40px;
        height: 40px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        margin-right: 10px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.4s ease;
      }
      .new-footer-sec .th-social a:hover {
        background: #6366f1;
        border-color: #6366f1;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(99, 102, 241, 0.4);
      }
      .new-footer-sec .menu {
        padding: 0;
        margin: 0;
      }
      .new-footer-sec .menu li {
        list-style: none;
        margin-bottom: 12px;
      }
      .new-footer-sec .menu li a {
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
      }
      .new-footer-sec .menu li a:hover {
        color: #a5b4fc;
        transform: translateX(5px);
      }
      .new-footer-sec .menu li a::before {
        content: '\f105';
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        margin-right: 8px;
        font-size: 0.8rem;
        color: #6366f1;
        opacity: 0.5;
        transition: all 0.3s ease;
      }
      .new-footer-sec .menu li a:hover::before {
        opacity: 1;
        color: #a5b4fc;
      }
      .new-footer-sec .info-box_text {
        display: flex;
        align-items: flex-start;
        margin-bottom: 20px;
      }
      .new-footer-sec .info-box_text .icon {
        width: 40px;
        height: 40px;
        background: rgba(99, 102, 241, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        flex-shrink: 0;
        border: 1px solid rgba(99, 102, 241, 0.2);
        color: #6366f1;
      }
      .new-footer-sec .info-box_text .icon img {
        width: 16px;
        filter: brightness(0) invert(1);
      }
      .new-footer-sec .info-box_text .details p {
        margin: 0;
        line-height: 1.6;
      }
      .new-footer-sec .info-box_link {
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        transition: color 0.3s ease;
      }
      .new-footer-sec .info-box_link:hover {
        color: #a5b4fc;
      }
      .new-footer-sec .copyright-wrap {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        padding: 25px 0;
        margin-top: 50px;
        background: rgba(0, 0, 0, 0.2);
      }
      .new-footer-sec .copyright-text {
        margin: 0;
        color: rgba(255, 255, 255, 0.6);
      }
      .new-footer-sec .copyright-text a {
        color: #fff;
        font-weight: 600;
        text-decoration: none;
      }
      .new-footer-sec .copyright-text a:hover {
        color: #6366f1;
      }
      .new-footer-sec .footer-links ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: flex-end;
        gap: 20px;
      }
      .new-footer-sec .footer-links a {
        color: rgba(255, 255, 255, 0.6);
        text-decoration: none;
        transition: color 0.3s ease;
      }
      .new-footer-sec .footer-links a:hover {
        color: #a5b4fc;
      }
      @media (max-width: 991px) {
        .new-footer-sec .footer-links ul {
          justify-content: center;
          margin-top: 15px;
        }
        .new-footer-sec .copyright-text {
          text-align: center;
        }
        .new-footer-sec {
          padding-top: 60px;
        }
        .new-footer-sec .widget {
          margin-bottom: 40px;
        }
      }
    </style>
    <footer class="new-footer-sec">
      <div class="widget-area">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-md-6 col-xl-4">
              <div class="widget footer-widget">
                <div class="th-widget-about">
                  <div class="about-logo">
                    <a href="index.html"
                      ><img src="assets/img/logo-white.png" alt="Atek"
                    /></a>
                  </div>
                  <p class="about-text">
                    Empower businesses with innovative, scalable, and
                    intelligent software solutions that drive efficiency,
                    growth, and digital transformation.
                  </p>
                  <div class="th-social">
                    <a
                      href="https://www.facebook.com/profile.php?id=61577595294412"
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                    <a href="https://www.linkedin.com/"
                      ><i class="fab fa-linkedin-in"></i
                    ></a>
                    <a href="https://wa.me/919633542550"
                      ><i class="fab fa-whatsapp"></i
                    ></a>
                    <a href="https://instagram.com/triasoft_softwares"
                      ><i class="fab fa-instagram"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-auto">
              <div class="widget widget_nav_menu footer-widget">
                <h3 class="widget_title">Useful Link</h3>
                <div class="menu-all-pages-container">
                  <ul class="menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About us</a></li>
                    <li><a href="service.html">Our Service</a></li>
                    <li><a href="contact.html">Terms of Service</a></li>
                    <li><a href="service.html">News & Media</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-auto">
              <div class="widget footer-widget">
                <h3 class="widget_title">Get In Touch</h3>
                <div class="th-widget-contact">
                  <div class="info-box_text">
                    <div class="icon">
                      <img src="assets/img/icon/phone.svg" alt="img" />
                    </div>
                    <div class="details">
                      <p>
                        <a href="tel:+919633542550" class="info-box_link"
                          >+91 96335 42550</a
                        >
                      </p>
                      <p>
                        <a href="tel:+916235919219" class="info-box_link"
                          >+91 62359 19219</a
                        >
                      </p>
                    </div>
                  </div>
                  <div class="info-box_text">
                    <div class="icon">
                      <img src="assets/img/icon/envelope.svg" alt="img" />
                    </div>
                    <div class="details">
                      <p>
                        <a
                          href="mailto:info@triassoftware.com"
                          class="info-box_link"
                          >info@triassoftware.com</a
                        >
                      </p>
                      <p>
                        <a
                          href="mailto:support@triassoftware.com"
                          class="info-box_link"
                          >support@triassoftware.com</a
                        >
                      </p>
                    </div>
                  </div>
                  <div class="info-box_text">
                    <div class="icon">
                      <img src="assets/img/icon/location-dot.svg" alt="img" />
                    </div>
                    <div class="details">
                      <p>
                        <a
                          href="https://maps.app.goo.gl/QyH2fFoJ9fii93mt7"
                          target="_blank"
                          >Sai Arcade, Panamaram, Wayanad, Kerala</a
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright-wrap">
        <div class="container">
          <div class="row justify-content-between align-items-center">
            <div class="col-lg-6">
              <p class="copyright-text">
                Copyright © 2025 <a href="index.html">Triasoft</a>. All rights
                reserved.
              </p>
            </div>
            <div class="col-lg-6 text-lg-end text-center">
              <div class="footer-links">
                <ul>
                  <li><a href="contact.html">Terms &amp; Conditions</a></li>
                  <li><a href="contact.html">Careers</a></li>
                  <li><a href="contact.html">Privacy Policy</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!--********************************
			Code End  Here 
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
      <svg
        class="progress-circle svg-content"
        width="100%"
        height="100%"
        viewBox="-1 -1 102 102"
      >
        <path
          d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
          style="
            transition: stroke-dashoffset 10ms linear 0s;
            stroke-dasharray: 307.919, 307.919;
            stroke-dashoffset: 307.919;
          "
        ></path>
      </svg>
    </div>
    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <!-- Swiper Js -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- circle-progress -->
    <script src="assets/js/circle-progress.js"></script>
    <!-- Range Slider -->
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- imagesloaded -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- isotope -->
    <script src="assets/js/isotope.pkgd.min.js"></script>

    <!-- nice select -->
    <script src="assets/js/nice-select.min.js"></script>
    <!-- wow -->
    <script src="assets/js/wow.min.js"></script>
    <!-- gsap -->
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/SplitText.js"></script>
    <!-- Scroll Trigger -->
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <!-- Lenis Smooth Scroll -->
    <script src="assets/js/lenis.min.js"></script>

    <!-- Main Js File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
