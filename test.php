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
    </body>
    </html>
