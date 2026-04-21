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
              <a href="products.php">Our Products</a>
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
                    <img src="assets/img/logo-white.png" alt="Atek" width="250px" />
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
                      <a href="products.php">Products</a>
                    </li>
                    <li class="menu-item">
                      <a href="contact.php">Contact us</a>
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
Hero Area
==============================-->
    <style>
      /* Removed CSS Snap to prevent sudden skipped frames */
      html, body {
        scroll-behavior: smooth;
      }
    </style>
    <script>
      // Smooth Full-Page Section Switcher
      document.addEventListener("DOMContentLoaded", () => {
        const sections = Array.from(document.querySelectorAll('.tech-hero, .about-4-area, .service-area5, .process-area, .new-products-sec, .new-brand-sec, .footer-wrapper'));
        let isAnimating = false;

        window.addEventListener('wheel', (e) => {
          if (isAnimating) {
            e.preventDefault();
            return;
          }
          
          let viewportHeight = window.innerHeight;
          let currentScroll = window.scrollY;
          
          // Determine current section we are looking at (approx)
          let currentIndex = 0;
          let minDiff = Infinity;
          sections.forEach((sec, index) => {
             let diff = Math.abs(sec.offsetTop - currentScroll);
             if(diff < minDiff) { minDiff = diff; currentIndex = index; }
          });

          // Moving logic
          const direction = e.deltaY > 0 ? 1 : -1;
          let nextIndex = currentIndex + direction;

          // Check if we aren't restricted by a section being much taller than the window
          // If the section is huge, let native scroll happen
          let currentSec = sections[currentIndex];
          if (direction === 1 && currentScroll + viewportHeight < currentSec.offsetTop + currentSec.offsetHeight - 50) {
             return; // Let user scroll inside the tall section
          }
          if (direction === -1 && currentScroll > currentSec.offsetTop + 50) {
             return; // Let user scroll up inside the tall section
          }

          if (nextIndex >= 0 && nextIndex < sections.length) {
            e.preventDefault(); // Intercept normal scroll
            isAnimating = true;
            
            window.scrollTo({
              top: sections[nextIndex].offsetTop,
              behavior: 'smooth'
            });
            
            // Typical smooth scroll duration is ~600-800ms
            setTimeout(() => {
              isAnimating = false;
            }, 800);
          }
        }, { passive: false });
      });
    </script>
    <style>
      /* Global Dark Background Fix */
      body {
        background-color: #03020A !important;
        color: #fff;
      }
      /* Prevent particles from blocking interaction */
      #particles-js, .tsparticles-canvas-el {
        pointer-events: none !important;
      }
      /* Bring all section contents ABOVE the particles */
      .new-about-sec .container,
      .new-service-sec .container,
      .new-process-sec .container,
      .new-products-sec .container,
      .new-brand-sec .container,
      .tech-hero-content {
        position: relative;
        z-index: 2;
      }

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
      /* Override theme's white sticky background */
      .sticky-wrapper.sticky,
      .sticky-wrapper.sticky .menu-area,
      .sticky-wrapper.sticky .sticky-active {
        background: transparent !important;
        background-color: transparent !important;
        box-shadow: none !important;
      }
      .sticky-wrapper.sticky .tech-header,
      .tech-header.sticky-active {
        background: rgba(3, 2, 10, 0.95) !important;
        backdrop-filter: blur(10px);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5) !important;
      }

      .tech-hero {
        position: relative;
        background-color: #03020A;
        height: 100vh;
        min-height: 700px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        z-index: 1;
      }
      .tech-hero-bg {
        position: absolute;
        inset: -50%;
        background-image: 
          radial-gradient(circle at 50% 50%, rgba(36, 34, 165, 0.25) 0%, transparent 40%),
          linear-gradient(rgba(255,255,255,0.04) 1px, transparent 1px),
          linear-gradient(90deg, rgba(255,255,255,0.04) 1px, transparent 1px);
        background-size: 100% 100%, 60px 60px, 60px 60px;
        background-position: center bottom;
        z-index: -2;
        transform: perspective(1000px) rotateX(75deg) translateY(-100px) scale(1.5);
        transform-origin: bottom center;
        opacity: 0.8;
      }
      
      .tech-hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
        max-width: 1000px;
        padding: 0 20px;
        transform-style: preserve-3d;
        transition: transform 0.1s ease-out;
      }

      .tech-sub {
        display: inline-block;
        color: #a5b4fc;
        border: 1px solid rgba(165, 180, 252, 0.3);
        background: rgba(165, 180, 252, 0.05);
        padding: 8px 24px;
        border-radius: 50px;
        font-weight: 600;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 30px;
        backdrop-filter: blur(5px);
        box-shadow: 0 0 20px rgba(165, 180, 252, 0.1);
      }

      .tech-title {
        font-size: 5.5rem;
        font-weight: 800;
        color: #fff;
        line-height: 1.15;
        margin-bottom: 25px;
        text-transform: capitalize;
      }
      
      .tech-title span {
        background: linear-gradient(to right, #6366f1, #a855f7, #ec4899);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: inline-block;
        padding-bottom: 15px; /* prevent font clipping on tall letters */
      }

      .tech-desc {
        font-size: 1.25rem;
        color: rgba(255,255,255,0.7);
        margin-bottom: 40px;
        font-weight: 400;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
        line-height: 1.7;
      }

      .tech-btn {
        display: inline-flex;
        align-items: center;
        gap: 15px;
        background: linear-gradient(90deg, #4f46e5, #7c3aed);
        color: #fff;
        padding: 16px 40px;
        border-radius: 50px;
        font-size: 1.1rem;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.4s ease;
        border: 1px solid rgba(255,255,255,0.1);
        box-shadow: 0 10px 30px rgba(79, 70, 229, 0.4);
      }
      .tech-btn:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(79, 70, 229, 0.6);
        color: #fff;
      }

      /* Parallax Floating Elements */
      .plx-el {
        position: absolute;
        z-index: 1;
        pointer-events: none;
        transition: transform 0.1s ease-out;
      }
      .plx-el-1 {
        top: 20%;
        left: 10%;
        font-size: 4rem;
        color: rgba(99, 102, 241, 0.2);
        filter: drop-shadow(0 0 20px rgba(99, 102, 241, 0.4));
      }
      .plx-el-2 {
        bottom: 25%;
        right: 15%;
        font-size: 5rem;
        color: rgba(168, 85, 247, 0.2);
        filter: drop-shadow(0 0 20px rgba(168, 85, 247, 0.4));
      }
      .plx-el-3 {
        top: 30%;
        right: 12%;
        font-size: 3rem;
        color: rgba(236, 72, 153, 0.2);
        filter: drop-shadow(0 0 20px rgba(236, 72, 153, 0.4));
      }
      .plx-el-4 {
        bottom: 20%;
        left: 20%;
        width: 150px;
        height: 150px;
        border: 2px solid rgba(99, 102, 241, 0.15);
        border-radius: 50%;
      }
      
      @media (max-width: 991px) {
        .tech-title { font-size: 4rem; }
      }
      @media (max-width: 575px) {
        .tech-title { font-size: 2.8rem; }
        .tech-desc { font-size: 1rem; }
      }
    </style>

    <div class="tech-hero" id="hero">
      <!-- 3D Grid Engine BG -->
      <div class="tech-hero-bg"></div>
      
      <!-- Existing Particles JS Container -->
      <div id="particles-js" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;"></div>

      <!-- Floating Parallax Elements -->
      <i class="fa-light fa-laptop-code plx-el plx-el-1" data-speed="-0.06"></i>
      <i class="fa-light fa-microchip plx-el plx-el-2" data-speed="0.08"></i>
      <i class="fa-light fa-qrcode plx-el plx-el-3" data-speed="-0.04"></i>
      <div class="plx-el plx-el-4" data-speed="0.05"></div>

      <div class="tech-hero-content" id="techHeroContent">
        <span class="tech-sub">Innovating Beyond Code</span>
        <h1 class="tech-title">
          Your Digital Transformation <br /><span>Starts Here</span>
        </h1>
        <p class="tech-desc">
          We empower businesses with highly scalable, optimized, and intelligently designed software solutions that drive growth and digital mastery.
        </p>
        <a href="contact.php" class="tech-btn">
          Explore Solutions <i class="fa-light fa-arrow-right-long"></i>
        </a>
      </div>
    </div>

    <!-- Parallax MouseMove Script -->
    <script>
      document.addEventListener('DOMContentLoaded', () => {
        const hero = document.getElementById('hero');
        const plxElements = document.querySelectorAll('.plx-el');
        const techContent = document.getElementById('techHeroContent');

        if(hero) {
          hero.addEventListener('mousemove', (e) => {
            const x = e.clientX - window.innerWidth / 2;
            const y = e.clientY - window.innerHeight / 2;
            
            // Move floating background elements
            plxElements.forEach(el => {
              const speed = parseFloat(el.getAttribute('data-speed'));
              const xPos = x * speed;
              const yPos = y * speed;
              el.style.transform = `translate(${xPos}px, ${yPos}px)`;
            });

            // Very subtle 3D tilt on the main content
            const rotateX = (y / window.innerHeight) * -15; // Max 7.5 deg tilt
            const rotateY = (x / window.innerWidth) * 15;
            techContent.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
          });
          
          hero.addEventListener('mouseleave', () => {
            plxElements.forEach(el => {
              el.style.transform = `translate(0px, 0px)`;
            });
            techContent.style.transform = `perspective(1000px) rotateX(0deg) rotateY(0deg)`;
          });
        }
      });
    </script>

    <!--============================== Category Area ==============================-->
    <style>
      /* ===== Services Section ===== */
      .new-service-sec {
        position: relative;
        overflow: hidden;
        padding: 90px 0 80px;
        background:
          radial-gradient(circle at top center, rgba(53, 102, 191, 0.18) 0%, transparent 30%),
          radial-gradient(circle at 15% 30%, rgba(74, 144, 226, 0.08) 0%, transparent 26%),
          #08080c;
      }
      .new-service-sec::before,
      .new-service-sec::after {
        content: "";
        position: absolute;
        inset: auto;
        border-radius: 50%;
        pointer-events: none;
        filter: blur(80px);
      }
      .new-service-sec::before {
        top: 80px;
        left: -70px;
        width: 220px;
        height: 220px;
        background: rgba(69, 125, 220, 0.12);
      }
      .new-service-sec::after {
        right: -60px;
        bottom: 20px;
        width: 180px;
        height: 180px;
        background: rgba(95, 126, 255, 0.1);
      }

      .new-service-sec .svc-header {
        text-align: center;
        max-width: 760px;
        margin: 0 auto 48px;
      }
      .new-service-sec .svc-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: rgba(255,255,255,0.72);
        background: rgba(255,255,255,0.06);
        border: 1px solid rgba(255,255,255,0.14);
        padding: 7px 18px;
        border-radius: 999px;
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.16em;
        text-transform: uppercase;
        margin-bottom: 18px;
        backdrop-filter: blur(14px);
      }
      .new-service-sec .svc-badge::before {
        content: "";
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #6ca9ff;
        box-shadow: 0 0 12px rgba(108, 169, 255, 0.85);
      }
      .new-service-sec .svc-title-line1,
      .new-service-sec .svc-title-line2 {
        display: block;
        font-size: clamp(2rem, 4vw, 3.3rem);
        font-weight: 800;
        line-height: 1.1;
      }
      .new-service-sec .svc-title-line1 {
        color: #ffffff;
      }
      .new-service-sec .svc-title-line2 {
        color: rgba(255,255,255,0.72);
      }
      .new-service-sec .svc-header p {
        max-width: 620px;
        margin: 18px auto 0;
        color: rgba(255,255,255,0.58);
        line-height: 1.7;
      }

      .svc-grid {
        display: grid;
        grid-template-columns: repeat(12, minmax(0, 1fr));
        gap: 24px;
      }

      .svc-card {
        position: relative;
        min-height: 260px;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 28px;
        border-radius: 28px;
        overflow: hidden;
        background:
          linear-gradient(180deg, rgba(255,255,255,0.05), rgba(255,255,255,0.015)),
          rgba(14, 14, 19, 0.92);
        border: 1px solid rgba(255,255,255,0.1);
        box-shadow:
          inset 0 1px 0 rgba(255,255,255,0.08),
          0 18px 40px rgba(0,0,0,0.35);
        transition: transform 0.35s ease, border-color 0.35s ease, box-shadow 0.35s ease;
        isolation: isolate;
      }
      .svc-card::before {
        content: "";
        position: absolute;
        inset: 0;
        background:
          linear-gradient(135deg, rgba(255,255,255,0.08), transparent 28%),
          radial-gradient(circle at top right, rgba(97, 154, 255, 0.13), transparent 35%);
        opacity: 0.85;
        z-index: -2;
      }
      .svc-card::after {
        content: "";
        position: absolute;
        inset: 1px;
        border-radius: 27px;
        border: 1px solid rgba(255,255,255,0.03);
        z-index: -1;
      }
      .svc-card:hover {
        transform: translateY(-8px);
        border-color: rgba(128, 180, 255, 0.26);
        box-shadow:
          inset 0 1px 0 rgba(255,255,255,0.1),
          0 24px 50px rgba(0,0,0,0.42);
      }

      .svc-card--small {
        grid-column: span 4;
      }
      .svc-card--tall {
        grid-column: span 4;
        min-height: 320px;
      }
      .svc-card--feature {
        grid-column: span 8;
        min-height: 320px;
      }

      .svc-visual {
        position: absolute;
        inset: 18px 18px auto 18px;
        height: 58%;
        border-radius: 22px;
        overflow: hidden;
        pointer-events: none;
      }
      .svc-card--small .svc-visual {
        height: 52%;
      }
      .svc-card--feature .svc-visual {
        inset: 0;
        height: 100%;
        border-radius: 28px;
      }

      .svc-bg-image {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.22;
        filter: saturate(0.85) brightness(0.75);
      }
      .svc-card--feature .svc-bg-image {
        opacity: 0.18;
      }

      .svc-visual::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(7,8,12,0.05) 0%, rgba(7,8,12,0.9) 100%);
      }

      .svc-panel,
      .svc-orbit,
      .svc-wave,
      .svc-nodes,
      .svc-capsule {
        position: absolute;
        inset: 0;
      }

      .svc-panel {
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        padding: 22px;
      }
      .svc-panel-box {
        width: min(230px, 100%);
        padding: 16px 18px;
        border-radius: 18px;
        background: rgba(10, 11, 16, 0.8);
        border: 1px solid rgba(255,255,255,0.08);
        box-shadow: 0 14px 30px rgba(0,0,0,0.35);
        backdrop-filter: blur(10px);
      }
      .svc-panel-label {
        display: block;
        color: rgba(255,255,255,0.45);
        font-size: 0.64rem;
        letter-spacing: 0.16em;
        text-transform: uppercase;
        margin-bottom: 10px;
      }
      .svc-panel-row {
        display: flex;
        align-items: center;
        gap: 12px;
      }
      .svc-panel-icon {
        width: 42px;
        height: 42px;
        border-radius: 14px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: #77adff;
        background: rgba(119, 173, 255, 0.14);
        border: 1px solid rgba(119, 173, 255, 0.18);
        font-size: 1rem;
      }
      .svc-panel-copy strong {
        display: block;
        color: #fff;
        font-size: 1rem;
        line-height: 1.3;
      }
      .svc-panel-copy span {
        display: block;
        margin-top: 2px;
        color: rgba(255,255,255,0.46);
        font-size: 0.82rem;
      }

      .svc-orbit {
        display: grid;
        place-items: center;
      }
      .svc-orbit-ring,
      .svc-orbit-core {
        position: absolute;
        border-radius: 28px;
        border: 1px solid rgba(102, 153, 255, 0.18);
        box-shadow: inset 0 0 20px rgba(102, 153, 255, 0.05);
      }
      .svc-orbit-ring.r1 { width: 72%; height: 72%; }
      .svc-orbit-ring.r2 { width: 54%; height: 54%; }
      .svc-orbit-ring.r3 { width: 37%; height: 37%; }
      .svc-orbit-core {
        width: 88px;
        height: 88px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(11, 16, 28, 0.92);
        color: #7cb4ff;
        font-size: 2rem;
        font-weight: 700;
      }

      .svc-wave {
        overflow: hidden;
      }
      .svc-wave svg,
      .svc-nodes svg {
        width: 100%;
        height: 100%;
      }

      .svc-capsule {
        display: grid;
        place-items: center;
        padding: 24px;
      }
      .svc-capsule-box {
        width: min(250px, 100%);
        padding: 16px 18px 14px;
        border-radius: 20px;
        background: rgba(10, 11, 16, 0.82);
        border: 1px solid rgba(255,255,255,0.08);
        box-shadow: 0 14px 30px rgba(0,0,0,0.36);
        text-align: center;
      }
      .svc-capsule-box strong {
        display: block;
        color: #fff;
        font-size: 1rem;
        margin-bottom: 4px;
      }
      .svc-capsule-box span {
        display: block;
        color: rgba(255,255,255,0.58);
        font-size: 0.84rem;
        line-height: 1.45;
      }
      .svc-capsule-actions {
        display: grid;
        grid-template-columns: 1fr 1fr;
        margin-top: 14px;
        border-top: 1px solid rgba(255,255,255,0.08);
      }
      .svc-capsule-actions em {
        padding-top: 12px;
        color: #78aefe;
        font-style: normal;
        font-weight: 600;
      }
      .svc-capsule-actions em + em {
        border-left: 1px solid rgba(255,255,255,0.08);
      }

      .svc-hex {
        position: absolute;
        width: 140px;
        aspect-ratio: 1;
        clip-path: polygon(25% 6.7%, 75% 6.7%, 100% 50%, 75% 93.3%, 25% 93.3%, 0% 50%);
        background: linear-gradient(180deg, rgba(112, 162, 255, 0.18), rgba(255,255,255,0.04));
        border: 1px solid rgba(255,255,255,0.08);
        box-shadow: inset 0 0 26px rgba(125, 171, 255, 0.08);
        display: flex;
        align-items: center;
        justify-content: center;
        color: rgba(255,255,255,0.3);
        font-size: 2rem;
      }
      .svc-hex.h1 { top: 24px; left: 22px; }
      .svc-hex.h2 { top: 38px; left: 170px; width: 168px; }
      .svc-hex.h3 { top: 118px; left: 318px; width: 144px; }
      .svc-hex.h4 { top: 42px; right: 182px; width: 148px; }
      .svc-hex.h5 { top: 104px; right: 30px; width: 136px; }
      .svc-hex.h6 { bottom: 26px; left: 140px; width: 140px; }
      .svc-hex.h7 { bottom: 18px; right: 176px; width: 150px; }
      .svc-hex.active {
        background: linear-gradient(180deg, rgba(115, 171, 255, 0.34), rgba(86, 132, 217, 0.16));
        box-shadow:
          inset 0 0 28px rgba(155, 196, 255, 0.18),
          0 0 35px rgba(62, 115, 206, 0.12);
        color: rgba(255,255,255,0.92);
      }

      .svc-card-content {
        position: relative;
        z-index: 2;
        max-width: 330px;
      }
      .svc-card-content.wide {
        max-width: 380px;
      }

      .svc-chip {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 14px;
        padding: 8px 14px;
        border-radius: 999px;
        background: rgba(255,255,255,0.06);
        border: 1px solid rgba(255,255,255,0.09);
        color: rgba(255,255,255,0.7);
        font-size: 0.74rem;
        letter-spacing: 0.12em;
        text-transform: uppercase;
      }
      .svc-chip i {
        color: #73abff;
      }

      .svc-card-title {
        color: #fff;
        font-size: clamp(1.25rem, 2vw, 1.85rem);
        font-weight: 700;
        line-height: 1.14;
        margin-bottom: 10px;
      }
      .svc-card--small .svc-card-title {
        font-size: 1.55rem;
      }
      .svc-card-desc {
        color: rgba(255,255,255,0.68);
        font-size: 0.97rem;
        line-height: 1.62;
        margin-bottom: 18px;
      }

      .svc-learn-more {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #ffffff;
        font-size: 0.9rem;
        font-weight: 600;
        text-decoration: none;
        transition: gap 0.25s ease, color 0.25s ease;
      }
      .svc-learn-more:hover {
        gap: 12px;
        color: #8ab9ff;
      }

      @media (max-width: 1199px) {
        .svc-card--feature,
        .svc-card--tall,
        .svc-card--small {
          grid-column: span 6;
        }
        .svc-card--feature {
          min-height: 300px;
        }
        .svc-hex.h1 { left: 18px; }
        .svc-hex.h2 { left: 130px; width: 150px; }
        .svc-hex.h3 { left: 250px; top: 126px; width: 126px; }
        .svc-hex.h4 { right: 132px; width: 130px; }
        .svc-hex.h5 { right: 22px; width: 118px; }
        .svc-hex.h6 { left: 88px; }
        .svc-hex.h7 { right: 122px; }
      }

      @media (max-width: 767px) {
        .new-service-sec {
          padding: 72px 0 64px;
        }
        .svc-grid {
          grid-template-columns: 1fr;
          gap: 18px;
        }
        .svc-card--feature,
        .svc-card--tall,
        .svc-card--small {
          grid-column: auto;
          min-height: 280px;
        }
        .svc-card {
          padding: 22px;
          border-radius: 24px;
        }
        .svc-card::after,
        .svc-card--feature .svc-visual {
          border-radius: 23px;
        }
        .svc-visual {
          inset: 16px 16px auto 16px;
          border-radius: 18px;
        }
        .svc-hex {
          width: 96px;
          font-size: 1.5rem;
        }
        .svc-hex.h1 { top: 20px; left: 12px; }
        .svc-hex.h2 { top: 26px; left: 96px; width: 112px; }
        .svc-hex.h3 { top: 84px; left: 180px; width: 96px; }
        .svc-hex.h4 { top: 24px; right: 74px; width: 102px; }
        .svc-hex.h5 { top: 82px; right: 10px; width: 92px; }
        .svc-hex.h6 { bottom: 20px; left: 48px; width: 92px; }
        .svc-hex.h7 { bottom: 12px; right: 82px; width: 102px; }
      }
    </style>

    <section class="new-service-sec" id="services">
      <div class="container">

        <div class="svc-header">
          <span class="svc-badge">Our Services</span>
          <h2>
            <span class="svc-title-line1">Scalable Digital Services</span>
            <span class="svc-title-line2">crafted for modern businesses</span>
          </h2>
          <p>
            A redesigned service experience inspired by your reference, with the same offerings presented in a richer, more premium grid.
          </p>
        </div>

        <div class="svc-grid">
          <article class="svc-card svc-card--tall">
            <div class="svc-visual">
              <img class="svc-bg-image" src="assets/img/web.jpg" alt="Custom Web Development">
            </div>
            <div class="svc-card-content">
              <span class="svc-chip"><i class="fa-solid fa-globe"></i> Web Services</span>
              <h3 class="svc-card-title">Custom Web Development</h3>
              <p class="svc-card-desc">Tailored website solutions designed to meet specific business requirements.</p>
              <a href="service.html" class="svc-learn-more">Learn more <i class="fa-solid fa-arrow-up-right"></i></a>
            </div>
          </article>

          <article class="svc-card svc-card--feature">
            <div class="svc-visual">
              <img class="svc-bg-image" src="assets/img/mobile.jpg" alt="Mobile App Development">
              <span class="svc-hex h1"><i class="fa-brands fa-android"></i></span>
              <span class="svc-hex h2 active"><i class="fa-brands fa-apple"></i></span>
              <span class="svc-hex h3"><i class="fa-brands fa-flutter"></i></span>
              <span class="svc-hex h4"><i class="fa-brands fa-react"></i></span>
              <span class="svc-hex h5"><i class="fa-brands fa-google-play"></i></span>
              <span class="svc-hex h6"><i class="fa-solid fa-mobile-screen-button"></i></span>
              <span class="svc-hex h7"><i class="fa-solid fa-cloud-arrow-up"></i></span>
            </div>
            <div class="svc-card-content wide">
              <span class="svc-chip"><i class="fa-solid fa-mobile-screen"></i> App Experience</span>
              <h3 class="svc-card-title">Mobile App Development</h3>
              <p class="svc-card-desc">We design and develop native mobile apps for iOS and Android platforms with performance, clarity, and polished user journeys.</p>
              <a href="service.html" class="svc-learn-more">Learn more <i class="fa-solid fa-arrow-up-right"></i></a>
            </div>
          </article>

          <article class="svc-card svc-card--small">
            <div class="svc-visual">
              <img class="svc-bg-image" src="assets/img/ecommerce.jpg" alt="E-Commerce Development">
              <div class="svc-orbit">
                <span class="svc-orbit-ring r1"></span>
                <span class="svc-orbit-ring r2"></span>
                <span class="svc-orbit-ring r3"></span>
              </div>
            </div>
            <div class="svc-card-content">
              <span class="svc-chip"><i class="fa-solid fa-cart-shopping"></i> Commerce</span>
              <h3 class="svc-card-title">E-Commerce Development</h3>
              <p class="svc-card-desc">Development of secure, scalable, and user-friendly online stores that drive sales.</p>
              <a href="service.html" class="svc-learn-more">Learn more <i class="fa-solid fa-arrow-up-right"></i></a>
            </div>
          </article>

          <article class="svc-card svc-card--small">
            <div class="svc-visual">
              <img class="svc-bg-image" src="assets/img/ui.jpg" alt="UI/UX Design">
              <div class="svc-wave">
                <svg viewBox="0 0 300 180" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path d="M22 140C72 140 78 70 121 70C154 70 157 122 194 122C229 122 236 56 278 36" stroke="rgba(112,170,255,0.95)" stroke-width="4" stroke-linecap="round"/>
                  <circle cx="278" cy="36" r="9" fill="#7db3ff"/>
                  <circle cx="278" cy="36" r="18" stroke="rgba(125,179,255,0.28)" stroke-width="6"/>
                </svg>
              </div>
            </div>
            <div class="svc-card-content">
              <span class="svc-chip"><i class="fa-solid fa-pen-ruler"></i> Product Design</span>
              <h3 class="svc-card-title">UI/UX Design</h3>
              <p class="svc-card-desc">Designing intuitive and visually appealing interfaces for websites and apps.</p>
              <a href="service.html" class="svc-learn-more">Learn more <i class="fa-solid fa-arrow-up-right"></i></a>
            </div>
          </article>

          <article class="svc-card svc-card--small">
            <div class="svc-visual">
              <img class="svc-bg-image" src="assets/img/api.jpg" alt="API Development">
             
            </div>
            <div class="svc-card-content">
              <span class="svc-chip"><i class="fa-solid fa-plug"></i> Integrations</span>
              <h3 class="svc-card-title">API Development</h3>
              <p class="svc-card-desc">Integration of third-party APIs to enhance app and website functionality.</p>
              <a href="service.html" class="svc-learn-more">Learn more <i class="fa-solid fa-arrow-up-right"></i></a>
            </div>
          </article>

          <article class="svc-card svc-card--small">
            <div class="svc-visual">
              <img class="svc-bg-image" src="assets/img/erp.jpg" alt="ERP Applications">
              
            </div>
            <div class="svc-card-content">
              <span class="svc-chip"><i class="fa-solid fa-diagram-project"></i> Enterprise</span>
              <h3 class="svc-card-title">ERP Applications</h3>
              <p class="svc-card-desc">Customized ERP systems to streamline operations, manage resources, and drive growth.</p>
              <a href="service.html" class="svc-learn-more">Learn more <i class="fa-solid fa-arrow-up-right"></i></a>
            </div>
          </article>

          <article class="svc-card svc-card--small">
            <div class="svc-visual">
              <img class="svc-bg-image" src="assets/img/iot.jpg" alt="IoT Applications">
              <div class="svc-nodes">
                <svg viewBox="0 0 300 180" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path d="M45 118L108 86L168 112L244 58" stroke="rgba(121,175,255,0.65)" stroke-width="3"/>
                  <circle cx="45" cy="118" r="8" fill="#7cb4ff"/>
                  <circle cx="108" cy="86" r="10" fill="#6e9cff"/>
                  <circle cx="168" cy="112" r="8" fill="#7cb4ff"/>
                  <circle cx="244" cy="58" r="12" fill="#8cc0ff"/>
                </svg>
              </div>
            </div>
            <div class="svc-card-content">
              <span class="svc-chip"><i class="fa-solid fa-microchip"></i> Connected Devices</span>
              <h3 class="svc-card-title">IoT Applications</h3>
              <p class="svc-card-desc">Solutions connecting devices and sensors for real-time monitoring and automation.</p>
              <a href="service.html" class="svc-learn-more">Learn more <i class="fa-solid fa-arrow-up-right"></i></a>
            </div>
          </article>

          <article class="svc-card svc-card--small">
            <div class="svc-visual">
              <img class="svc-bg-image" src="assets/img/support.jpg" alt="Maintenance and Support">
              
            </div>
            <div class="svc-card-content">
              <span class="svc-chip"><i class="fa-solid fa-headset"></i> Reliability</span>
              <h3 class="svc-card-title">Maintenance and Support</h3>
              <p class="svc-card-desc">Ongoing maintenance and support to keep your digital products running smoothly.</p>
              <a href="service.html" class="svc-learn-more">Learn more <i class="fa-solid fa-arrow-up-right"></i></a>
            </div>
          </article>
        </div>

      </div>
    </section>

    <!--==============================
  Process Area  
  ==============================-->
    <section class="process-area bg-top-center space new-process-sec">
      <div class="container">
        <div class="process-area">
          <div class="process-content text-center">
            <div class="title-area mb-55">
              <span class="sub-title style1 text-anime-style-2"
                >Our Process</span
              >
              <h2 class="sec-title text-anime-style-3">
                How It Works Behind the Scene!
              </h2>
            </div>
          </div>
          <div class="slider-area">
            <div
              class="swiper th-slider has-shadow"
              id="processSlider"
              data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"4"}}}'
            >
              <div class="swiper-wrapper">
                <!--==============================
              Process Area  
              ==============================-->
                <div class="swiper-slide">
                  <div class="process-item">
                    <div class="process-img mb-20">
                      <a href="#">
                        <i class="fa-light fa-magnifying-glass-chart"></i>
                      </a>
                    </div>
                    <div class="process-content text-center">
                      <h3 class="box-title mb-10">
                        <a href="#">Requirement Analysis</a>
                      </h3>
                      <p class="process-text">
                        Study your business and the software requirements.
                        Identify and create relevant features that help your
                        business.
                      </p>
                      <p class="box-number">STEP-01</p>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="process-item">
                    <div class="process-img mb-20">
                      <a href="#">
                        <i class="fa-light fa-pen-ruler"></i>
                      </a>
                    </div>
                    <div class="process-content text-center">
                      <h3 class="box-title mb-10">
                        <a href="#">Planning & Wireframing</a>
                      </h3>
                      <p class="process-text">
                        Plan how the software will be built. Create wireframes
                        and prototypes to visualize the user journey.
                      </p>
                      <p class="box-number">STEP-02</p>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="process-item">
                    <div class="process-img mb-20">
                      <a href="#">
                        <i class="fa-light fa-desktop"></i>
                      </a>
                    </div>
                    <div class="process-content text-center">
                      <h3 class="box-title mb-10">
                        <a href="#">UI/UX Design</a>
                      </h3>
                      <p class="process-text">
                        Design user-friendly interfaces with brand-aligned
                        aesthetics. Ensure responsive layouts for every device
                        size.
                      </p>
                      <p class="box-number">STEP-03</p>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="process-item">
                    <div class="process-img mb-20">
                      <a href="#">
                        <i class="fa-light fa-code"></i>
                      </a>
                    </div>
                    <div class="process-content text-center">
                      <h3 class="box-title mb-10">
                        <a href="#">Development</a>
                      </h3>
                      <p class="process-text">
                        We then move into development, building responsive and
                        scalable solutions with the latest technologies.
                      </p>
                      <p class="box-number">STEP-04</p>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="process-item">
                    <div class="process-img mb-20">
                      <a href="#">
                        <i class="fa-light fa-shield-check"></i>
                      </a>
                    </div>
                    <div class="process-content text-center">
                      <h3 class="box-title mb-10">
                        <a href="#">Testing & Quality Check</a>
                      </h3>
                      <p class="process-text">
                        Each project undergoes rigorous testing to ensure
                        performance, security, and compatibility before
                        deployment.
                      </p>
                      <p class="box-number">STEP-05</p>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="process-item">
                    <div class="process-img mb-20">
                      <a href="#">
                        <i class="fa-light fa-rocket"></i>
                      </a>
                    </div>
                    <div class="process-content text-center">
                      <h3 class="box-title mb-10">
                        <a href="#">Deployment</a>
                      </h3>
                      <p class="process-text">
                        After testing, we deploy the software to your live
                        environment, ensuring a smooth launch and transition.
                      </p>
                      <p class="box-number">STEP-06</p>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="process-item">
                    <div class="process-img mb-20">
                      <a href="#">
                        <i class="fa-light fa-screwdriver-wrench"></i>
                      </a>
                    </div>
                    <div class="process-content text-center">
                      <h3 class="box-title mb-10">
                        <a href="#">Maintenance</a>
                      </h3>
                      <p class="process-text">
                        After launch, we provide continuous maintenance and
                        updates to keep your app secure, optimized and
                        future-ready.
                      </p>
                      <p class="box-number">STEP-07</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <style>
      /* Process Section Dark Theme */
      .new-process-sec {
        background-color: #03020A;
        background-image: radial-gradient(circle at 50% 0%, rgba(20, 20, 70, 0.45) 0%, transparent 60%);
        position: relative;
        overflow: hidden;
      }
      .new-process-sec::before {
        content: '';
        position: absolute;
        inset: 0;
        background-color: rgba(3, 2, 10, 0.85); /* Dark overlay just in case */
        z-index: 0;
        display: none;
      }
      .new-process-sec .container {
        position: relative;
        z-index: 1;
      }
      .new-process-sec .sub-title {
        color: rgba(255,255,255,0.75) !important;
        background: rgba(255,255,255,0.12) !important;
        border: 1px solid rgba(255,255,255,0.25) !important;
        padding: 5px 18px !important;
        border-radius: 50px !important;
        display: inline-block;
        margin-bottom: 1rem;
      }
      .new-process-sec .sec-title {
        color: #fff !important;
      }
      .new-process-sec .swiper-wrapper {
        align-items: stretch;
      }
      .new-process-sec .swiper-slide {
        height: auto;
      }
      .new-process-sec .process-item {
        background: #111;
        border: 1px solid rgba(255,255,255,0.15);
        border-radius: 20px;
        padding: 40px 25px;
        transition: transform 0.4s ease, box-shadow 0.4s ease, background-color 0.4s ease;
        cursor: pointer;
        box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        height: 100%;
        position: relative;
        overflow: hidden;
        display: flex;
        flex-direction: column;
      }
      .new-process-sec .process-item::after {
        content: '';
        position: absolute;
        inset: 0;
        box-shadow: inset 0 0 0 rgba(255,255,255,0);
        border-radius: 20px;
        transition: box-shadow 0.4s ease;
        pointer-events: none;
      }
      .new-process-sec .process-item:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(36, 34, 165, 0.6);
        background-color: #2422a5; 
        background-image: 
          linear-gradient(rgba(255,255,255,0.04) 1px, transparent 1px),
          linear-gradient(90deg, rgba(255,255,255,0.04) 1px, transparent 1px);
        background-size: 35px 35px;
        background-position: center;
      }
      .new-process-sec .process-item:hover::after {
        box-shadow: inset 0 0 1px 1px rgba(255,255,255,0.15), inset 0 0 20px rgba(255,255,255,0.1);
      }
      .new-process-sec .process-content {
        display: flex;
        flex-direction: column;
        flex: 1;
      }
      .new-process-sec .box-title a {
        color: #fff !important;
        transition: color 0.3s;
        font-size: 1.25rem;
      }
      .new-process-sec .process-item:hover .box-title a {
        color: #a5b4fc !important;
      }
      .new-process-sec .process-text {
        color: rgba(255,255,255,0.7) !important;
        font-size: 0.9rem;
        line-height: 1.6;
        transition: color 0.4s ease;
      }
      .new-process-sec .process-item:hover .process-text {
        color: #e0e7ff !important;
      }
      .new-process-sec .box-number {
        color: #6366f1 !important;
        font-weight: 700;
        margin-top: auto;
        padding-top: 20px;
        font-size: 0.9rem;
        transition: color 0.4s ease;
      }
      .new-process-sec .process-item:hover .box-number {
        color: #fff !important;
      }
      .new-process-sec .process-img {
        background: rgba(255,255,255,0.05);
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        border: 1px solid rgba(255,255,255,0.1);
        transition: all 0.4s ease;
      }
      .new-process-sec .process-item:hover .process-img {
        background: rgba(255,255,255,0.15);
        border-color: rgba(255,255,255,0.3);
        transform: scale(1.1);
      }
      .new-process-sec .process-img i {
        font-size: 32px;
        color: #fff;
        transition: all 0.4s ease;
      }
      .new-process-sec .process-item:hover .process-img i {
        color: #a5b4fc;
        transform: scale(1.1);
      }
    </style>
    
    <!--==============================
Product Area  
==============================-->
    <style>
      /* ====== Products Section – Modern Cascade UI ====== */
      .new-products-sec {
        background-color: #03020A;
        padding-top: 60px;
        padding-bottom: 120px;
        position: relative;
        overflow: hidden;
      }
      
      /* Split Header Typography */
      .product-header-split {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        margin-bottom: 80px;
        flex-wrap: wrap;
        gap: 30px;
      }
      .product-header-split .left {
        max-width: 600px;
      }
      .product-header-split .sub-title {
        color: #a855f7;
        font-size: 0.85rem;
        font-weight: 700;
        letter-spacing: 0.15em;
        text-transform: uppercase;
        display: block;
        margin-bottom: 15px;
      }
      .product-header-split .sec-title {
        color: #fff;
        font-size: 3rem;
        line-height: 1.2;
        font-weight: 400;
        margin: 0;
      }
      .product-header-split .highlight {
        color: #a855f7;
        font-weight: 400;
      }
      .product-header-split .right {
        max-width: 350px;
      }
      .product-header-split .right h4 {
        color: #fff;
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 10px;
      }
      .product-header-split .right p {
        color: rgba(255,255,255,0.7);
        font-size: 0.95rem;
        line-height: 1.6;
        margin: 0;
      }

      /* Cascade Grid */
      .product-cascade-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        align-items: start;
      }
     

      /* C-Card Design */
      .c-card {
        position: relative;
        overflow: hidden;
        border-radius: 30px;
        min-height: 350px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 35px 30px;
        border: 1px solid rgba(255,255,255,0.1);
        transition: transform 0.4s ease, border-color 0.4s ease;
        background: radial-gradient(circle at 50% 0%, rgba(99,102,241,0.2) 0%, transparent 60%), #0a0a0f;
        box-shadow: 0 20px 40px rgba(0,0,0,0.3);
      }
      .c-card:hover {
        transform: translateY(-10px);
        border-color: rgba(168, 85, 247, 0.4);
      }
      
      /* Subtle background abstract shapes (CSS only) */
      .c-card::before {
        content: '';
        position: absolute;
        top: -50px; right: -50px;
        width: 200px; height: 200px;
        background: radial-gradient(circle, rgba(168,85,247,0.15) 0%, transparent 70%);
        border-radius: 50%;
        filter: blur(20px);
        z-index: 0;
      }
      
      /* C-Card Top (Index & Icon) */
      .c-card-top {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        position: relative;
        z-index: 2;
      }
      .c-index {
        color: rgba(255,255,255,0.8);
        font-size: 1.1rem;
        font-weight: 500;
        font-family: 'Inter', sans-serif;
      }
      .c-icon {
        width: 40px; height: 40px;
        border-radius: 50%;
        border: 1px solid rgba(255,255,255,0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        color: rgba(255,255,255,0.9);
        background: rgba(255,255,255,0.1);
        backdrop-filter: blur(5px);
      }

      /* C-Card Bottom Content */
      .c-card-content {
        position: relative;
        z-index: 2;
      }
      .c-subtitle {
        color: #a855f7;
        font-size: 0.9rem;
        font-weight: 600;
        margin-bottom: 8px;
        letter-spacing: 0.5px;
      }
      .c-title {
        color: #fff;
        font-size: 1.6rem;
        font-weight: 500;
        line-height: 1.25;
        margin-bottom: 25px;
      }
      .c-desc {
        color: rgba(255,255,255,0.7);
        font-size: 0.95rem;
        line-height: 1.6;
        max-height: 0;
        opacity: 0;
        overflow: hidden;
        margin: 0;
        transform: translateY(15px);
        transition: all 0.5s ease;
      }
      .c-card:hover .c-desc {
        max-height: 150px;
        opacity: 1;
        margin-bottom: 25px;
        transform: translateY(0);
      }
      
      .c-explore {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        color: #fff;
        text-decoration: none;
        font-size: 0.95rem;
        font-weight: 500;
        transition: opacity 0.3s ease;
      }
      .c-explore:hover {
        opacity: 0.8;
      }
      .c-explore i {
        background: #a855f7;
        width: 24px; height: 24px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 0.75rem;
      }

      /* Responsive Fixes */
      @media (max-width: 1199px) {
        .product-cascade-grid {
          grid-template-columns: repeat(2, 1fr);
          gap: 30px;
        }
        .c-card-wrapper:nth-child(1) { margin-top: 0; }
        .c-card-wrapper:nth-child(2) { margin-top: 50px; }
        .c-card-wrapper:nth-child(3) { margin-top: 0; }
        .c-card-wrapper:nth-child(4) { margin-top: 50px; }
      }
      @media (max-width: 991px) {
        .product-header-split .sec-title { font-size: 2.2rem; }
        .product-cascade-grid {
          grid-template-columns: 1fr;
          gap: 40px;
        }
        .c-card-wrapper:nth-child(n) { margin-top: 0; }
        .c-card { min-height: 350px; }
        .c-desc { max-height: none; opacity: 1; margin-bottom: 25px; transform: translateY(0); }
      }
    </style>

    <section class="new-products-sec" id="products">
      <div class="container th-container4">
        
        <!-- Split Header Layout -->
        <div class="product-header-split wow fadeInUp" data-wow-delay="0.1s">
          <div class="left">
            <span class="sub-title">OUR PRODUCT</span>
            <h2 class="sec-title">
              <span class="highlight">Find</span> Our Best<br/>Products.
            </h2>
          </div>
          <div class="right">
            <h4>Work Smarter.</h4>
            <p>Our powerful ERP and management solutions boost ROI by enhancing efficiency, structuring data, and cutting operational costs.</p>
          </div>
        </div>

        <!-- The Cascade Grid -->
        <div class="product-cascade-grid">
          
          <!-- Card 1 -->
          <div class="c-card-wrapper">
            <div class="c-card wow fadeInUp" data-wow-delay="0.2s" style="background: linear-gradient(180deg, rgba(180,83,9,0) 0%, rgba(3,2,10,0.95) 100%), url('assets/img/product/stayleap.png') center/cover no-repeat;">
              <div class="c-card-top">
                <span class="c-index">01/</span>
                <div class="c-icon"><i class="fa-solid fa-hotel"></i></div>
              </div>
              <div class="c-card-content">
                <h5 class="c-subtitle">Hostels & PGs</h5>
                <h3 class="c-title">StayLeap Hostel Management</h3>
                <p class="c-desc">
                  StayLeap streamlines operations, enhances tenant management, and simplifies billing through an innovative mobile app interface.
                </p>
                <a href="products.php#stayleap" class="c-explore">Explore more <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Card 2 (Lowered by 100px) -->
          <div class="c-card-wrapper">
            <div class="c-card wow fadeInUp" data-wow-delay="0.3s" style="background: linear-gradient(180deg, rgba(14,116,144,0) 0%, rgba(3,2,10,0.95) 100%), url('assets/img/product/warehouse.png') center/cover no-repeat;">
              <div class="c-card-top">
                <span class="c-index">02/</span>
                <div class="c-icon"><i class="fa-solid fa-warehouse"></i></div>
              </div>
              <div class="c-card-content">
                <h5 class="c-subtitle" style="color: #22d3ee;">Warehouse Solutions</h5>
                <h3 class="c-title">Stoccoz ERP System</h3>
                <p class="c-desc">
                  Manage inventory tracking, stock movements, and order picking with absolute precision. Reduce manual work and boost logic visibility.
                </p>
                <a href="products.php#warehouse" class="c-explore">Explore more <i class="fa-solid fa-arrow-right" style="background: #0e7490;"></i></a>
              </div>
            </div>
          </div>

          <!-- Card 3 (Lowered by 50px) -->
          <div class="c-card-wrapper">
            <div class="c-card wow fadeInUp" data-wow-delay="0.4s" style="background: linear-gradient(180deg, rgba(180,83,9,0) 0%, rgba(3,2,10,0.95) 100%), url('assets/img/product/garage.png') center/cover no-repeat;">
              <div class="c-card-top">
                <span class="c-index">03/</span>
                <div class="c-icon"><i class="fa-solid fa-car"></i></div>
              </div>
              <div class="c-card-content">
                <h5 class="c-subtitle" style="color: #f59e0b;">Auto & Garage</h5>
                <h3 class="c-title">Smart Garage System</h3>
                <p class="c-desc">
                  Easily manage customer details, service history, billing, and spare parts inventory in one streamlined centralized platform.
                </p>
                <a href="products.php#garage" class="c-explore">Explore more <i class="fa-solid fa-arrow-right" style="background: #b45309;"></i></a>
              </div>
            </div>
          </div>

          <!-- Card 4 (Lowered by 120px) -->
          <div class="c-card-wrapper">
            <div class="c-card wow fadeInUp" data-wow-delay="0.5s" style="background: linear-gradient(180deg, rgba(16,185,129,0) 0%, rgba(3,2,10,0.95) 100%), url('assets/img/product/mediflow.png') center/cover no-repeat, radial-gradient(circle at 100% 0%, rgba(16,185,129,0.2) 0%, transparent 70%), #111;">
              <div class="c-card-top">
                <span class="c-index">04/</span>
                <div class="c-icon"><i class="fa-solid fa-stethoscope"></i></div>
              </div>
              <div class="c-card-content">
                <h5 class="c-subtitle" style="color: #10b981;">Clinic Management</h5>
                <h3 class="c-title">Mediflow</h3>
                <p class="c-desc">
                  Seamlessly handle clinic operations including patient records, advanced staff tokens, and doctor scheduling.
                </p>
                <a href="products.php#mediflow" class="c-explore">Explore more <i class="fa-solid fa-arrow-right" style="background: #10b981;"></i></a>
              </div>
            </div>
          </div>

        </div> <!-- /cascade-grid -->

      </div>
    </section>

    <style>
      .new-brand-sec {
        background-color: #03020A;
        background-image: radial-gradient(circle at 50% 100%, rgba(20, 20, 70, 0.45) 0%, transparent 60%);
        padding: 90px 0;
        position: relative;
        overflow: hidden;
      }
      .marquee-container {
        width: 100vw;
        max-width: 100%;
        overflow: hidden;
        position: relative;
        padding: 20px 0;
      }
      .marquee-track {
        display: flex;
        width: max-content;
        animation: marquee 35s linear infinite;
        gap: 30px;
        padding-left: 30px; /* offset the gap for initial shift */
      }
      .marquee-track:hover {
        animation-play-state: paused;
      }
      @keyframes marquee {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
      }
      .new-brand-sec .brand-box {
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.5);
        border-radius: 16px;
        padding: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 220px;
        height: 120px;
        transition: all 0.4s ease;
        flex-shrink: 0;
      }
      .new-brand-sec .brand-box:hover {
        background: rgba(255, 255, 255, 1);
        transform: translateY(-5px);
        border-color: rgba(255, 255, 255, 0.8);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
      }
      .new-brand-sec .brand-box img {
        opacity: 0.9;
        transition: all 0.4s ease;
        max-height: 60px;
        max-width: 100%;
        object-fit: contain;
      }
      .new-brand-sec .brand-box:hover img {
        opacity: 1;
      }
    </style>

    <div class="new-brand-sec space">
      <div class="container">
        <div class="row justify-content-center mb-55">
          <div class="col-lg-6 text-center">
            <span class="sub-title text-anime-style-2" style="color:rgba(255,255,255,0.75);background:rgba(255,255,255,0.12);border:1px solid rgba(255,255,255,0.25);padding:5px 18px;border-radius:50px;font-size:0.8rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;display:inline-block;margin-bottom:1rem;">Our Clients</span>
            <h2 class="sec-title text-anime-style-3" style="color:#fff;">Our Precious Clients</h2>
          </div>
        </div>
      </div>
      <div class="marquee-container">
        <div class="marquee-track">
          <!-- Item Set 1 -->
          <div class="brand-box"><a href="#"><img src="assets/img/brand/unique.png" alt="Brand Logo" /></a></div>
          <div class="brand-box"><a href="#"><img src="assets/img/brand/speedex.png" alt="Brand Logo" /></a></div>
          <div class="brand-box"><a href="#"><img src="assets/img/brand/nexon.png" alt="Brand Logo" /></a></div>
          <div class="brand-box"><a href="#"><img src="assets/img/brand/progress.jpeg" alt="Brand Logo" /></a></div>
          <div class="brand-box"><a href="#"><img src="assets/img/brand/yoc.png" alt="Brand Logo" /></a></div>
          <div class="brand-box"><a href="#"><img src="assets/img/brand/kaithakkal.png" alt="Brand Logo" /></a></div>
          <div class="brand-box"><a href="#"><img src="assets/img/brand/pmtc.png" alt="Brand Logo" style="width: 70% !important;" /></a></div>
          <div class="brand-box"><a href="#"><img src="assets/img/brand/bw.png" alt="Brand Logo" /></a></div>
          <div class="brand-box"><a href="#"><img src="assets/img/brand/infinity.png" alt="Brand Logo" /></a></div>
          <div class="brand-box"><a href="#"><img src="assets/img/brand/bics.png" alt="Brand Logo" /></a></div>
          <div class="brand-box"><a href="#"><img src="assets/img/brand/vasu.png" alt="Brand Logo" /></a></div>

          <!-- Item Set 2 (for seamless loop) -->
          <div class="brand-box"><a href="#"><img src="assets/img/brand/unique.png" alt="Brand Logo" /></a></div>
          <div class="brand-box"><a href="#"><img src="assets/img/brand/speedex.png" alt="Brand Logo" /></a></div>
          <div class="brand-box"><a href="#"><img src="assets/img/brand/nexon.png" alt="Brand Logo" /></a></div>
          <div class="brand-box"><a href="#"><img src="assets/img/brand/progress.jpeg" alt="Brand Logo" /></a></div>
          <div class="brand-box"><a href="#"><img src="assets/img/brand/yoc.png" alt="Brand Logo" /></a></div>
          <div class="brand-box"><a href="#"><img src="assets/img/brand/kaithakkal.png" alt="Brand Logo" /></a></div>
          <div class="brand-box"><a href="#"><img src="assets/img/brand/pmtc.png" alt="Brand Logo" style="width: 70% !important;" /></a></div>
          <div class="brand-box"><a href="#"><img src="assets/img/brand/bw.png" alt="Brand Logo" /></a></div>
          <div class="brand-box"><a href="#"><img src="assets/img/brand/infinity.png" alt="Brand Logo" /></a></div>
          <div class="brand-box"><a href="#"><img src="assets/img/brand/bics.png" alt="Brand Logo" /></a></div>
          <div class="brand-box"><a href="#"><img src="assets/img/brand/vasu.png" alt="Brand Logo" /></a></div>
        </div>
      </div>
    </div>

    <!--==============================
    Our Team Area
==============================-->
    <section class="new-team-sec space" id="our-team">
      <div class="container">
        <div class="row justify-content-center mb-55">
          <div class="col-lg-6 text-center">
            <span class="sub-title text-anime-style-2" style="color:rgba(255,255,255,0.75);background:rgba(255,255,255,0.12);border:1px solid rgba(255,255,255,0.25);padding:5px 18px;border-radius:50px;font-size:0.8rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;display:inline-block;margin-bottom:1rem;">Our Team</span>
            <h2 class="sec-title text-anime-style-3" style="color:#fff;">Meet the People Behind Triasoft</h2>
          </div>
        </div>
      </div>
      
      <div class="container position-relative new-team-container">
        <!-- Navigation -->
        <div class="swiper-button-prev team-slider-prev"><i class="fa-light fa-chevron-left"></i></div>
        <div class="swiper-button-next team-slider-next"><i class="fa-light fa-chevron-right"></i></div>

        <div class="swiper new-team-swiper">
          <div class="swiper-wrapper">

            <!-- Member 1 -->
            <div class="swiper-slide">
              <div class="nt-card">
                <div class="nt-front" style="background-image: url('assets/img/team/ashif.jpeg');">
                  <div class="nt-front-info">
                    <h3 class="nt-name">Ashif TK</h3>
                    <span class="nt-role">Senior Software Engineer</span>
                  </div>
                </div>
                <div class="nt-hover">
                  <div class="nt-hover-title">
                    <h3 class="nt-name">Ashif TK</h3>
                    <span class="nt-role">Senior Software Engineer</span>
                  </div>
                  <p class="nt-desc">Leading Triasoft with a vision to build world-class enterprise solutions, Ashkar brings over a decade of strategic direction and software expertise.</p>
                </div>
              </div>
            </div>

            <!-- Member 2 -->
            <div class="swiper-slide">
              <div class="nt-card">
                <div class="nt-front" style="background-image: url('assets/img/team/arshal.jpeg');">
                  <div class="nt-front-info">
                    <h3 class="nt-name">Arshal Sha</h3>
                    <span class="nt-role">Software Developer</span>
                  </div>
                </div>
                <div class="nt-hover">
                  <div class="nt-hover-title">
                    <h3 class="nt-name">Arshal Sha</h3>
                    <span class="nt-role">Software Developer</span>
                  </div>
                  <p class="nt-desc">An expert in full-stack architecture, Rohith ensures clean, scalable code and mentors the development team to deliver exceptional software.</p>
                </div>
              </div>
            </div>

            <!-- Member 3 -->
            <div class="swiper-slide">
              <div class="nt-card">
                <div class="nt-front" style="background-image: url('assets/img/team/farsi.jpeg');">
                  <div class="nt-front-info">
                    <h3 class="nt-name">Muhammed Farseen</h3>
                    <span class="nt-role">Software Developer</span>
                  </div>
                </div>
                <div class="nt-hover">
                  <div class="nt-hover-title">
                    <h3 class="nt-name">Muhammed Farseen</h3>
                    <span class="nt-role">Software Developer</span>
                  </div>
                  <p class="nt-desc">Passionate about seamless mobile experiences, Farseen crafts intuitive cross-platform applications that empower users on the go.</p>
                </div>
              </div>
            </div>

            <!-- Member 4 -->
            <div class="swiper-slide">
              <div class="nt-card">
                <div class="nt-front" style="background-image: url('assets/img/team/chrispin.jpeg');">
                  <div class="nt-front-info">
                    <h3 class="nt-name">Chrispin Saju</h3>
                    <span class="nt-role">Software Developer</span>
                  </div>
                </div>
                <div class="nt-hover">
                  <div class="nt-hover-title">
                    <h3 class="nt-name">Chrispin Saju</h3>
                    <span class="nt-role">Software Developer</span>
                  </div>
                  <p class="nt-desc">With a keen eye for detail, Chrispin designs user-centric interfaces that blend stunning aesthetics with intuitive functionality.</p>
                </div>
              </div>
            </div>

            <!-- Member 5 -->
            <div class="swiper-slide">
              <div class="nt-card">
                <div class="nt-front" style="background-image: url('assets/img/team/sundar.jpeg');">
                  <div class="nt-front-info">
                    <h3 class="nt-name">Sundar Das</h3>
                    <span class="nt-role">Software Developer</span>
                  </div>
                </div>
                <div class="nt-hover">
                  <div class="nt-hover-title">
                    <h3 class="nt-name">Sundar Das</h3>
                    <span class="nt-role">Software Developer</span>
                  </div>
                  <p class="nt-desc">Sundar architects robust backend systems and APIs, ensuring secure, high-performance data processing for all Triasoft products.</p>
                </div>
              </div>
            </div>

            <!-- Member 6 -->
            <div class="swiper-slide">
              <div class="nt-card">
                <div class="nt-front" style="background-image: url('assets/img/team/hanal.jpeg');">
                  <div class="nt-front-info">
                    <h3 class="nt-name">Hanal</h3>
                    <span class="nt-role">Senior Developer</span>
                  </div>
                </div>
                <div class="nt-hover">
                  <div class="nt-hover-title">
                    <h3 class="nt-name">Hanal</h3>
                    <span class="nt-role">Senior Developer</span>
                  </div>
                  <p class="nt-desc">Dedicated to faultless delivery, Hanal implements rigorous testing strategies to guarantee reliability and perfection in every release.</p>
                </div>
              </div>
            </div>

             <!-- Member 7 -->
            <div class="swiper-slide">
              <div class="nt-card">
                <div class="nt-front" style="background-image: url('assets/img/team/fayha.png');">
                  <div class="nt-front-info">
                    <h3 class="nt-name">Fathima Fayha</h3>
                    <span class="nt-role">Jr. Performance Marketer</span>
                  </div>
                </div>
                <div class="nt-hover">
                  <div class="nt-hover-title">
                    <h3 class="nt-name">Fathima Fayha</h3>
                    <span class="nt-role">Jr. Performance Marketer</span>
                  </div>
                  <p class="nt-desc">Fayha is a passionate digital marketer who loves creating engaging content and running successful ad campaigns.</p>
                </div>
              </div>
            </div>

          </div>
          <!-- Pagination/Scrollbar -->
          <div class="swiper-scrollbar team-slider-scrollbar"></div>
        </div>
      </div>
    </section>

    <style>
      .new-team-sec {
        background-color: #03020A;
        background-image: radial-gradient(circle at 50% 0%, rgba(20, 20, 70, 0.45) 0%, transparent 60%);
        padding: 90px 0;
        position: relative;
        overflow: hidden;
      }
      .new-team-container {
        padding: 0 50px;
        margin-top: 30px;
      }
      .new-team-swiper {
        padding-bottom: 50px;
        overflow: visible;
      }
      .nt-card {
        border-radius: 20px;
        overflow: hidden;
        position: relative;
        cursor: pointer;
        background: #111;
        aspect-ratio: 3 / 4;
        transition: transform 0.4s ease;
      }
      
      /* Front Face */
      .nt-front {
        position: absolute;
        inset: 0;
        z-index: 1;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        background-size: contain;
        background-position: center;
        transition: opacity 0.4s ease;
      }
      .nt-front::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0) 60%);
        z-index: -1;
      }
      .nt-placeholder {
        position: absolute;
        inset: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 5rem;
        font-weight: 900;
        color: rgba(255,255,255,0.15);
        z-index: -2;
      }
      .nt-front-info {
        padding: 30px 24px;
        z-index: 2;
      }
      .nt-name {
        color: #fff;
        font-size: 1.6rem;
        font-weight: 700;
        margin: 0 0 6px 0;
        line-height: 1.2;
      }
      .nt-role {
        color: #6366f1; /* Indigo light */
        font-size: 0.95rem;
        font-weight: 600;
        display: block;
      }
      
      /* Hover Face */
      .nt-hover {
        position: absolute;
        inset: 0;
        z-index: 2;
        background-color: #2422a5; /* Deep rich blue */
        background-image: 
          linear-gradient(rgba(255,255,255,0.04) 1px, transparent 1px),
          linear-gradient(90deg, rgba(255,255,255,0.04) 1px, transparent 1px);
        background-size: 35px 35px;
        background-position: center;
        padding: 35px 24px 30px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        opacity: 0;
        transition: opacity 0.4s ease;
      }
      
      .nt-card:hover .nt-hover {
        opacity: 1;
      }
      .nt-card:hover .nt-front {
        opacity: 0;
      }
      
      .nt-hover-title .nt-name {
        font-size: 1.5rem;
      }
      .nt-hover-title .nt-role {
        color: #a5b4fc;
      }
      
      .nt-desc {
        color: #e0e7ff;
        font-size: 0.9rem;
        line-height: 1.6;
        margin: 0;
        transform: translateY(15px);
        opacity: 0;
        transition: all 0.4s ease 0.1s;
      }
      .nt-card:hover .nt-desc {
        transform: translateY(0);
        opacity: 1;
      }

      /* Hover glow */
      .nt-card::after {
        content: '';
        position: absolute;
        inset: 0;
        box-shadow: inset 0 0 0 rgba(255,255,255,0);
        border-radius: 20px;
        transition: box-shadow 0.4s ease;
        pointer-events: none;
        z-index: 3;
      }
      .nt-card:hover::after {
        box-shadow: inset 0 0 1px 1px rgba(255,255,255,0.15), inset 0 0 20px rgba(255,255,255,0.1);
      }
      .nt-card:hover {
        box-shadow: 0 0 35px rgba(36, 34, 165, 0.7);
      }

      /* Navigation */
      .team-slider-prev, .team-slider-next {
        width: 48px;
        height: 48px;
        background: rgba(255,255,255,0.03);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 50%;
        color: #fff;
        backdrop-filter: blur(4px);
        transition: all 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 45%;
        transform: translateY(-50%);
        z-index: 10;
        cursor: pointer;
      }
      .team-slider-prev:hover, .team-slider-next:hover {
        background: rgba(255,255,255,0.1);
      }
      .team-slider-prev::after, .team-slider-next::after {
        display: none; /* Hide default swiper arrows */
      }
      .team-slider-prev {
        left: 0px;
      }
      .team-slider-next {
        right: 0px;
      }

      /* Scrollbar */
      .team-slider-scrollbar {
        bottom: 0 !important;
        background: rgba(255,255,255,0.1) !important;
        height: 3px !important;
        border-radius: 4px;
        width: 60% !important;
        left: 20% !important;
      }
      .new-team-swiper .swiper-scrollbar-drag {
        background: #fff !important;
        height: 3px;
        border-radius: 4px;
      }
      
      @media (max-width: 991px) {
        .new-team-container { padding: 0 20px; }
        .team-slider-prev, .team-slider-next { display: none; }
        .team-slider-scrollbar { width: 80% !important; left: 10% !important; }
      }
    </style>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        if(typeof Swiper !== 'undefined') {
          new Swiper('.new-team-swiper', {
            slidesPerView: 1.2,
            spaceBetween: 20,
            loop: true,
            autoplay: {
              delay: 3500,
              disableOnInteraction: false,
            },
            navigation: {
              nextEl: '.team-slider-next',
              prevEl: '.team-slider-prev',
            },
            scrollbar: {
              el: '.team-slider-scrollbar',
              draggable: true,
            },
            breakpoints: {
              576: { slidesPerView: 2.2, spaceBetween: 24 },
              768: { slidesPerView: 3.2, spaceBetween: 24 },
              992: { slidesPerView: 3.5, spaceBetween: 30 },
              1200: { slidesPerView: 4.2, spaceBetween: 30 }
            }
          });
        }
      });
    </script>


    <!--==============================
	Footer Area
==============================-->
    <footer class="footer-wrapper bg-title footer-layout2 space-top">
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
                    <li><a href="default.php">Home</a></li>
                    <li><a href="#about-sec">About Us</a></li>
                    <li><a href="#services">Our Services</a></li>
                    <li><a href="products.php">Our Products</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
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
                Copyright &copy; 2025 <a href="default.php">Triasoft</a>. All rights reserved.
              </p>
            </div>
            <div class="col-lg-6 text-lg-end text-center">
              <div class="footer-links">
                <ul>
                  <li><a href="contact.php">Terms &amp; Conditions</a></li>
                  <li><a href="contact.php">Careers</a></li>
                  <li><a href="contact.php">Privacy Policy</a></li>
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
modal Area  
==============================-->
    <div id="login-form" class="popup-login-register mfp-hide">
      <ul class="nav" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button
            class="nav-menu"
            id="pills-home-tab"
            data-bs-toggle="pill"
            data-bs-target="#pills-home"
            type="button"
            role="tab"
            aria-controls="pills-home"
            aria-selected="false"
          >
            Login
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button
            class="nav-menu active"
            id="pills-profile-tab"
            data-bs-toggle="pill"
            data-bs-target="#pills-profile"
            type="button"
            role="tab"
            aria-controls="pills-profile"
            aria-selected="true"
          >
            Register
          </button>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div
          class="tab-pane fade"
          id="pills-home"
          role="tabpanel"
          aria-labelledby="pills-home-tab"
        >
          <h3 class="box-title mb-30">Sign in to your account</h3>
          <div class="th-login-form">
            <form
              action="mail.php"
              method="POST"
              class="login-form ajax-contact"
            >
              <div class="row">
                <div class="form-group col-12">
                  <label>Username or email</label>
                  <input
                    type="text"
                    class="form-control"
                    name="email"
                    id="email"
                    required="required"
                  />
                </div>
                <div class="form-group col-12">
                  <label>Password</label>
                  <input
                    type="password"
                    class="form-control"
                    name="pasword"
                    id="pasword"
                    required="required"
                  />
                </div>

                <div class="form-btn mb-20 col-12">
                  <button class="th-btn btn-fw th-radius2">Send Message</button>
                </div>
              </div>
              <div id="forgot_url">
                <a href="my-account.html">Forgot password?</a>
              </div>
              <p class="form-messages mb-0 mt-3"></p>
            </form>
          </div>
        </div>
        <div
          class="tab-pane fade active show"
          id="pills-profile"
          role="tabpanel"
          aria-labelledby="pills-profile-tab"
        >
          <h3 class="th-form-title mb-30">Sign in to your account</h3>
          <form action="mail.php" method="POST" class="login-form ajax-contact">
            <div class="row">
              <div class="form-group col-12">
                <label>Username*</label>
                <input
                  type="text"
                  class="form-control"
                  name="usename"
                  id="usename"
                  required="required"
                />
              </div>
              <div class="form-group col-12">
                <label>First name*</label>
                <input
                  type="text"
                  class="form-control"
                  name="firstname"
                  id="firstname"
                  required="required"
                />
              </div>
              <div class="form-group col-12">
                <label>Last name*</label>
                <input
                  type="text"
                  class="form-control"
                  name="lastname"
                  id="lastname"
                  required="required"
                />
              </div>
              <div class="form-group col-12">
                <label for="new_email">Your email*</label>
                <input
                  type="text"
                  class="form-control"
                  name="new_email"
                  id="new_email"
                  required="required"
                />
              </div>
              <div class="form-group col-12">
                <label for="new_email_confirm">Confirm email*</label>
                <input
                  type="text"
                  class="form-control"
                  name="new_email_confirm"
                  id="new_email_confirm"
                  required="required"
                />
              </div>
              <div class="statement">
                <span class="register-notes"
                  >A password will be emailed to you.</span
                >
              </div>

              <div class="form-btn mt-20 col-12">
                <button class="th-btn btn-fw th-radius2">Sign up</button>
              </div>
            </div>
            <p class="form-messages mb-0 mt-3"></p>
          </form>
        </div>
      </div>
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
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@2/tsparticles.bundle.min.js"></script>
    <script>
      function initParticles(elementId, speed, size, opacity) {
        particlesJS(elementId, {
          particles: {
            number: { value: 30 },
            color: { value: "#a020f0" }, // Purple
            shape: { type: "circle" },
            opacity: { value: opacity },
            size: { value: size },
            line_linked: {
              enable: true,
              distance: 150,
              color: "#a020f0", // Purple
              opacity: opacity * 0.5,
              width: 1,
            },
            move: { enable: true, speed: speed },
          },
          interactivity: { events: { onhover: { enable: false } } },
          retina_detect: true,
        });
      }

      // Layer 1: slow & small
      //initParticles("particles-layer1", 0.6, 2, 0.15);

      // Layer 2: slightly faster & larger
      //initParticles("particles-layer2", 1.2, 3, 0.25);

      tsParticles.load("particles-js", {
        fullScreen: { enable: true, zIndex: 0 },
        fpsLimit: 60,
        interactivity: {
          events: {
            onHover: { enable: false, mode: "repulse" },
            resize: true,
          },
          modes: {
            repulse: { distance: 100, duration: 0.4 },
          },
        },
        particles: {
          color: { value: "rgba(14, 67, 240, 1)" }, // dot color
          links: {
            color: "rgba(14, 67, 240, 1)", // line color
            distance: 150,
            enable: true,
            opacity: 0.4,
            width: 1,
          },
          move: {
            enable: true,
            speed: 1,
            direction: "none",
            random: false,
            straight: false,
            outModes: { default: "out" },
          },
          number: {
            value: 60,
            density: { enable: true, area: 800 },
          },
          opacity: { value: 0.5 },
          shape: { type: "circle" },
          size: { value: { min: 1, max: 3 } },
        },
        detectRetina: true,
      });
    </script>
  </body>
</html>
