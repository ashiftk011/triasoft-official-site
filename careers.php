<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Careers – Internship Program | Triasoft</title>
    <meta name="description" content="Join Triasoft's 3-Month Full Stack Internship Program in Angular and .NET. Gain hands-on industry experience, mentorship, and build a strong development portfolio." />
    <meta name="keywords" content="Triasoft careers, internship, Angular, .NET, full stack developer, web development internship" />
    <meta name="robots" content="INDEX,FOLLOW" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="icon" type="image/png" href="assets/img/logo.png" />
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-png" />
    <link rel="manifest" href="assets/img/favicons/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />

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

    <!-- slider drag cursor -->
    <div class="slider-drag-cursor d-flex align-items-center justify-content-between">
      <span class="drag-icon-left"><img src="assets/img/icon/drag-arrow-left.svg" alt="" /></span>
      DRAG
      <span class="drag-icon-right"><img src="assets/img/icon/drag-arrow-right.svg" alt="" /></span>
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
      (function(){
        var minWait = 3000;
        setTimeout(function(){
          var p = document.getElementById('sitePreloader');
          if(p){ p.classList.add('loaded'); }
        }, minWait);
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
      #sitePreloader.loaded { opacity: 0; visibility: hidden; pointer-events: none; }
      #sitePreloader .th-btn {
        position: absolute; top: 28px; right: 28px;
        border: 1px solid rgba(255,255,255,0.12); border-radius: 999px;
        padding: 12px 20px; background: rgba(255,255,255,0.06);
        backdrop-filter: blur(10px); color: #eaf2ff;
        font-size: 13px; font-weight: 600; letter-spacing: 0.08em;
        text-transform: uppercase; box-shadow: 0 10px 25px rgba(0,0,0,0.22);
      }
      #sitePreloader .th-btn:hover { background: rgba(255,255,255,0.12); color: #ffffff; }
      #sitePreloader .preloader-inner {
        width: min(92vw, 520px); padding: 24px; border: 0; border-radius: 0;
        background: transparent; box-shadow: none; backdrop-filter: none;
      }
      #sitePreloader .preloader-copy { max-width: 100%; text-align: center; }
      #sitePreloader .preloader-kicker {
        display: inline-block; margin-bottom: 10px;
        color: rgba(234,242,255,0.78); font-size: 12px; font-weight: 600;
        letter-spacing: 0.2em; text-transform: uppercase;
      }
      #sitePreloader .preloader-copy p {
        margin: 0 auto; max-width: 360px;
        color: rgba(214,227,247,0.68); font-size: 15px; line-height: 1.7;
      }
      #sitePreloader .loader-container {
        position: relative; width: min(300px,72vw); height: 200px; margin: 0 auto 18px;
      }
      #sitePreloader .part {
        position: absolute; overflow: hidden; opacity: 0;
        top: 50%; left: 50%; transform: translate(-50%,-50%);
        animation: triLoaderMove 1.2s cubic-bezier(0.25,1,0.5,1) forwards;
        filter: drop-shadow(0 4px 8px rgba(0,0,0,0.1));
      }
      #sitePreloader .part::after {
        content: ""; position: absolute; top: 0; left: -200%;
        width: 200%; height: 100%;
        background: linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0.9) 50%, rgba(255,255,255,0) 100%);
        transform: skewX(-30deg);
        animation: triLoaderGlare 3s ease-in-out infinite; animation-delay: 1.5s;
      }
      #sitePreloader .part-1 {
        width: 170px; height: 55px;
        background: linear-gradient(135deg, #50c9ff 0%, #3db2e5 100%);
        clip-path: polygon(40% 0%, 100% 0%, 60% 100%, 0% 100%);
        --final-x: -150px; --final-y: -70px;
      }
      #sitePreloader .part-2 {
        width: 130px; height: 55px;
        background: linear-gradient(135deg, #4d9de0 0%, #2a64ad 100%);
        clip-path: polygon(0% 0%, 100% 0%, 52% 100%, 18% 100%);
        --final-x: 25px; --final-y: -76px;
      }
      #sitePreloader .part-3 {
        width: 155px; height: 55px;
        background: linear-gradient(135deg, #ffb347 0%, #f88a25 100%);
        clip-path: polygon(45% 0%, 100% 0%, 60% 100%, 0% 100%);
        --final-x: -100px; --final-y: -15px;
      }
      @keyframes triLoaderMove {
        0% { opacity: 0; transform: translate(-50%,-50%); }
        100% { opacity: 1; transform: translate(var(--final-x), var(--final-y)); }
      }
      @keyframes triLoaderGlare {
        0% { left: -200%; } 30% { left: 150%; } 100% { left: 150%; }
      }
      @media (max-width: 767px) {
        #sitePreloader .th-btn { top: 18px; right: 18px; padding: 10px 16px; }
        #sitePreloader .preloader-inner { width: min(92vw,92vw); padding: 24px 18px; }
        #sitePreloader .loader-container { width: min(280px,78vw); height: 170px; }
        #sitePreloader .preloader-copy p { font-size: 14px; line-height: 1.7; }
      }
    </style>

    <!--==============================
    Mobile Menu
  ==============================-->
    <div class="th-menu-wrapper onepage-nav">
      <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
          <a href="default.php"><img src="assets/img/logo2.svg" alt="Triasoft" /></a>
        </div>
        <div class="th-mobile-menu">
          <ul>
            <li class="menu-item mega-menu-wrap">
              <a href="default.php">Home</a>
            </li>
            <li class="menu-item">
              <a href="default.php#about-sec">About Us</a>
            </li>
            <li class="menu-item">
              <a href="default.php#services">Our Services</a>
            </li>
            <li class="menu-item">
              <a href="products.php">Our Products</a>
            </li>
            <li class="menu-item">
              <a class="active" href="careers.php">Careers</a>
            </li>
            <li class="menu-item">
              <a href="contact.php">Contact us</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!--==============================
    Header
  ==============================-->
    <header class="th-header header-layout5 tech-header">
      <div class="sticky-wrapper">
        <div class="menu-area">
          <div class="container th-container6">
            <div class="row align-items-center justify-content-between">
              <div class="col-auto">
                <div class="header-logo">
                  <a href="default.php">
                    <img src="assets/img/logo-white.png" width="250px" alt="Triasoft" />
                  </a>
                </div>
              </div>
              <div class="col-auto">
                <nav class="main-menu d-none d-xl-block">
                  <ul>
                    <li class="menu-item mega-menu-wrap">
                      <a href="default.php">Home</a>
                    </li>
                    <li class="menu-item">
                      <a href="default.php#about-sec">About Us</a>
                    </li>
                    <li class="menu-item">
                      <a href="default.php#services">Our Services</a>
                    </li>
                    <li class="menu-item">
                      <a href="products.php">Products</a>
                    </li>
                    <li class="menu-item">
                      <a class="active" href="careers.php">Careers</a>
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
    Page Styles
  ==============================-->
    <style>
      html, body { background-color: #03020A !important; color: #fff; }

      /* Header styles */
      .tech-header {
        position: absolute; top: 0; left: 0; width: 100%;
        z-index: 100; background: transparent !important;
        border-bottom: 1px solid rgba(255,255,255,0.05);
      }
      .tech-header .menu-area { background: transparent !important; }
      .tech-header .main-menu > ul > li > a { color: #fff !important; }
      .tech-header .main-menu > ul > li > a:hover { color: #a5b4fc !important; }
      .tech-header .main-menu > ul > li > a.active { color: #a5b4fc !important; }
      .sticky-wrapper.sticky,
      .sticky-wrapper.sticky .menu-area,
      .sticky-wrapper.sticky .sticky-active {
        background: transparent !important; background-color: #000 !important; box-shadow: none !important;
      }
      .sticky-wrapper.sticky .tech-header,
      .tech-header.sticky-active {
        background: rgba(3,2,10,0.95) !important;
        backdrop-filter: blur(10px);
        box-shadow: 0 4px 30px rgba(0,0,0,0.5) !important;
      }

      /* ========== Hero Banner ========== */
      .careers-hero {
        position: relative;
        background:
          radial-gradient(circle at 30% 40%, rgba(99,102,241,0.18) 0%, transparent 45%),
          radial-gradient(circle at 70% 20%, rgba(168,85,247,0.12) 0%, transparent 40%),
          #03020A;
        padding: 200px 0 100px;
        overflow: hidden;
      }
      .careers-hero::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image:
          linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px),
          linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px);
        background-size: 60px 60px;
        pointer-events: none;
      }
      .careers-hero-badge {
        display: inline-flex; align-items: center; gap: 8px;
        background: rgba(99,102,241,0.1); border: 1px solid rgba(99,102,241,0.3);
        color: #a5b4fc; padding: 8px 20px; border-radius: 50px;
        font-size: 0.78rem; font-weight: 700; letter-spacing: 0.16em;
        text-transform: uppercase; margin-bottom: 24px; backdrop-filter: blur(10px);
      }
      .careers-hero-badge::before {
        content: ''; width: 8px; height: 8px; border-radius: 50%;
        background: #6366f1; box-shadow: 0 0 12px rgba(99,102,241,0.85);
        animation: pulse-dot 2s ease-in-out infinite;
      }
      @keyframes pulse-dot {
        0%, 100% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.4); opacity: 0.7; }
      }
      .careers-hero h1 {
        font-size: clamp(2.4rem, 5vw, 4rem);
        font-weight: 800; line-height: 1.15; color: #fff; margin-bottom: 16px;
      }
      .careers-hero h1 span {
        background: linear-gradient(90deg, #6366f1, #a855f7, #ec4899);
        -webkit-background-clip: text; -webkit-text-fill-color: transparent;
      }
      .careers-hero .subtitle {
        font-size: 1.2rem; color: rgba(255,255,255,0.65);
        max-width: 680px; line-height: 1.7; margin-bottom: 40px;
      }
      .careers-hero-stats {
        display: flex; gap: 40px; flex-wrap: wrap;
      }
      .careers-hero-stat { text-align: center; }
      .careers-hero-stat .stat-num {
        display: block; font-size: 2rem; font-weight: 800;
        background: linear-gradient(90deg, #6366f1, #a855f7);
        -webkit-background-clip: text; -webkit-text-fill-color: transparent;
        line-height: 1;
      }
      .careers-hero-stat .stat-label {
        font-size: 0.8rem; color: rgba(255,255,255,0.5);
        text-transform: uppercase; letter-spacing: 0.1em; margin-top: 6px;
      }
      .careers-hero-img-col {
        display: flex; align-items: center; justify-content: center;
      }
      .careers-hero-card {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 24px; padding: 36px 32px;
        backdrop-filter: blur(12px);
        box-shadow: 0 20px 60px rgba(0,0,0,0.4);
        width: 100%; max-width: 400px;
      }
      .careers-hero-card .stack-item {
        display: flex; align-items: center; gap: 14px;
        padding: 14px 0;
        border-bottom: 1px solid rgba(255,255,255,0.07);
      }
      .careers-hero-card .stack-item:last-child { border-bottom: none; }
      .careers-hero-card .stack-icon {
        width: 44px; height: 44px; border-radius: 12px;
        background: linear-gradient(135deg, rgba(99,102,241,0.2), rgba(168,85,247,0.2));
        border: 1px solid rgba(99,102,241,0.3);
        display: flex; align-items: center; justify-content: center;
        font-size: 1.2rem; color: #a5b4fc; flex-shrink: 0;
      }
      .careers-hero-card .stack-info .stack-name {
        font-weight: 700; color: #fff; font-size: 0.95rem;
      }
      .careers-hero-card .stack-info .stack-desc {
        font-size: 0.78rem; color: rgba(255,255,255,0.5); margin-top: 2px;
      }

      /* ========== Section common ========== */
      .careers-section {
        padding: 90px 0;
        background: #03020A;
        position: relative;
      }
      .careers-section + .careers-section {
        border-top: 1px solid rgba(255,255,255,0.05);
      }
      .section-badge {
        display: inline-flex; align-items: center; gap: 8px;
        background: rgba(99,102,241,0.08); border: 1px solid rgba(99,102,241,0.2);
        color: #a5b4fc; padding: 6px 16px; border-radius: 50px;
        font-size: 0.72rem; font-weight: 700; letter-spacing: 0.14em;
        text-transform: uppercase; margin-bottom: 16px;
      }
      .section-title {
        font-size: clamp(1.8rem, 3vw, 2.6rem);
        font-weight: 800; color: #fff; margin-bottom: 16px; line-height: 1.2;
      }
      .section-title span {
        background: linear-gradient(90deg, #6366f1, #a855f7);
        -webkit-background-clip: text; -webkit-text-fill-color: transparent;
      }
      .section-desc {
        color: rgba(255,255,255,0.6); line-height: 1.75; max-width: 660px;
      }

      /* ========== Program Overview Cards ========== */
      .overview-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 24px; margin-top: 48px;
      }
      .overview-card {
        background: rgba(255,255,255,0.03);
        border: 1px solid rgba(255,255,255,0.08);
        border-radius: 20px; padding: 30px 24px;
        transition: all 0.35s ease;
        position: relative; overflow: hidden;
      }
      .overview-card::before {
        content: ''; position: absolute; top: 0; left: 0; right: 0; height: 2px;
        background: linear-gradient(90deg, #6366f1, #a855f7);
        opacity: 0; transition: opacity 0.35s ease;
      }
      .overview-card:hover { transform: translateY(-6px); border-color: rgba(99,102,241,0.3); box-shadow: 0 20px 50px rgba(0,0,0,0.4); }
      .overview-card:hover::before { opacity: 1; }
      .overview-card .ov-icon {
        width: 52px; height: 52px; border-radius: 14px;
        background: linear-gradient(135deg, rgba(99,102,241,0.15), rgba(168,85,247,0.15));
        border: 1px solid rgba(99,102,241,0.25);
        display: flex; align-items: center; justify-content: center;
        font-size: 1.4rem; color: #a5b4fc; margin-bottom: 18px;
      }
      .overview-card .ov-label {
        font-size: 0.72rem; color: rgba(255,255,255,0.45);
        text-transform: uppercase; letter-spacing: 0.12em; margin-bottom: 6px;
      }
      .overview-card .ov-value {
        font-size: 1.05rem; font-weight: 700; color: #fff; line-height: 1.4;
      }

      /* ========== What You'll Learn ========== */
      .learn-alt {
        background:
          radial-gradient(circle at 80% 50%, rgba(99,102,241,0.08) 0%, transparent 50%),
          #040310;
      }
      .learn-list {
        display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 16px; margin-top: 40px;
      }
      .learn-item {
        display: flex; align-items: flex-start; gap: 14px;
        background: rgba(255,255,255,0.025);
        border: 1px solid rgba(255,255,255,0.07);
        border-radius: 14px; padding: 18px 20px;
        transition: all 0.3s ease;
      }
      .learn-item:hover {
        background: rgba(99,102,241,0.07);
        border-color: rgba(99,102,241,0.2);
        transform: translateX(4px);
      }
      .learn-item .li-icon {
        width: 36px; height: 36px; border-radius: 10px;
        background: rgba(99,102,241,0.12);
        display: flex; align-items: center; justify-content: center;
        color: #6366f1; font-size: 1rem; flex-shrink: 0; margin-top: 2px;
      }
      .learn-item .li-text { font-size: 0.95rem; color: rgba(255,255,255,0.8); line-height: 1.5; }
      .learn-item .li-text strong { color: #fff; display: block; margin-bottom: 2px; }

      /* ========== Program Highlights ========== */
      .highlights-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 24px;
        margin-top: 48px;
      }
      .highlight-card {
        flex: 0 1 calc(25% - 18px);
        min-width: 240px;
        max-width: 340px;
        background: rgba(255,255,255,0.03);
        border: 1px solid rgba(255,255,255,0.08);
        border-radius: 20px; padding: 28px 24px;
        display: flex; align-items: flex-start; gap: 16px;
        transition: all 0.35s ease;
      }
      .highlight-card:hover {
        background: rgba(99,102,241,0.06);
        border-color: rgba(99,102,241,0.25);
        transform: translateY(-4px);
        box-shadow: 0 16px 40px rgba(0,0,0,0.3);
      }
      .highlight-card .hc-icon {
        width: 48px; height: 48px; border-radius: 12px;
        background: linear-gradient(135deg, rgba(99,102,241,0.2), rgba(168,85,247,0.2));
        border: 1px solid rgba(99,102,241,0.3);
        display: flex; align-items: center; justify-content: center;
        font-size: 1.2rem; color: #a5b4fc; flex-shrink: 0;
      }
      .highlight-card .hc-text h4 {
        font-size: 0.95rem; font-weight: 700; color: #fff; margin-bottom: 6px;
      }
      .highlight-card .hc-text p {
        font-size: 0.82rem; color: rgba(255,255,255,0.55); margin: 0; line-height: 1.5;
      }

      /* ========== Who Should Apply ========== */
      .who-alt {
        background:
          radial-gradient(circle at 20% 50%, rgba(168,85,247,0.08) 0%, transparent 50%),
          #040310;
      }
      .who-criteria {
        display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 16px; margin-top: 40px;
      }
      .who-item {
        display: flex; align-items: center; gap: 14px;
        background: rgba(255,255,255,0.025);
        border: 1px solid rgba(255,255,255,0.07);
        border-radius: 12px; padding: 16px 20px;
        transition: all 0.3s ease;
      }
      .who-item:hover {
        background: rgba(168,85,247,0.07);
        border-color: rgba(168,85,247,0.2);
      }
      .who-item .wi-check {
        width: 32px; height: 32px; border-radius: 50%;
        background: rgba(99,102,241,0.15);
        display: flex; align-items: center; justify-content: center;
        color: #6366f1; font-size: 0.9rem; flex-shrink: 0;
      }
      .who-item .wi-text { font-size: 0.9rem; color: rgba(255,255,255,0.78); }

      /* ========== Selection Process ========== */
      .selection-process {
        margin-top: 48px;
        display: flex; align-items: flex-start; gap: 0;
        position: relative;
      }
      /* Single line spanning from center of step 1 to center of step 4 */
      .selection-process::before {
        content: '';
        position: absolute;
        top: 30px; /* vertically centers with the 60px circle */
        left: 12.5%; /* center of the first of 4 equal steps */
        right: 12.5%; /* center of the last of 4 equal steps */
        height: 2px;
        background: linear-gradient(90deg, #6366f1, #a855f7);
        z-index: 0;
      }
      .selection-step {
        flex: 1; text-align: center;
        position: relative; padding: 0 16px;
      }
      .step-num {
        width: 60px; height: 60px; border-radius: 50%;
        background: linear-gradient(135deg, #6366f1, #a855f7);
        display: flex; align-items: center; justify-content: center;
        font-size: 1.2rem; font-weight: 800; color: #fff;
        margin: 0 auto 16px; position: relative; z-index: 1;
        box-shadow: 0 0 0 8px rgba(99,102,241,0.12), 0 0 24px rgba(99,102,241,0.35);
      }
      .step-label {
        font-size: 0.88rem; font-weight: 600; color: #fff; line-height: 1.5;
        margin-top: 4px;
      }
      @media (max-width: 767px) {
        .selection-process { flex-direction: column; align-items: center; gap: 28px; }
        .selection-process::before { display: none; }
      }

      /* ========== Application Form ========== */
      .apply-section {
        background:
          radial-gradient(circle at 50% 0%, rgba(99,102,241,0.15) 0%, transparent 50%),
          #03020A;
        padding: 100px 0;
      }
      .apply-form-wrap {
        background: rgba(255,255,255,0.025);
        border: 1px solid rgba(255,255,255,0.08);
        border-radius: 28px; padding: 50px 44px;
        backdrop-filter: blur(12px);
        box-shadow: 0 30px 80px rgba(0,0,0,0.4);
        max-width: 900px; margin: 0 auto;
      }
      .apply-form-wrap .form-label {
        color: rgba(255,255,255,0.7); font-size: 0.85rem; font-weight: 600;
        margin-bottom: 8px; letter-spacing: 0.04em;
      }
      .apply-form-wrap .form-label .req { color: #f87171; margin-left: 3px; }
      .apply-form-wrap .form-control,
      .apply-form-wrap .form-select {
        background: rgba(0,0,0,0.25) !important;
        border: 1px solid rgba(255,255,255,0.1) !important;
        color: #fff !important; border-radius: 12px;
        padding: 12px 16px; font-size: 0.95rem;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
      }
      .apply-form-wrap .form-control:focus,
      .apply-form-wrap .form-select:focus {
        background: rgba(0,0,0,0.35) !important;
        border-color: rgba(99,102,241,0.6) !important;
        box-shadow: 0 0 0 3px rgba(99,102,241,0.15) !important;
        outline: none;
      }
      .apply-form-wrap .form-control::placeholder { color: rgba(255,255,255,0.35) !important; }
      .apply-form-wrap .form-select option { background: #0f172a; color: #fff; }

      /* CV Upload */
      .cv-upload-label {
        display: flex; flex-direction: column; align-items: center;
        justify-content: center; gap: 10px;
        border: 2px dashed rgba(99,102,241,0.35);
        border-radius: 14px; padding: 32px 24px;
        cursor: pointer; transition: all 0.3s ease;
        background: rgba(99,102,241,0.04);
        color: rgba(255,255,255,0.5); text-align: center;
      }
      .cv-upload-label:hover {
        border-color: rgba(99,102,241,0.7);
        background: rgba(99,102,241,0.08);
        color: rgba(255,255,255,0.8);
      }
      .cv-upload-label.has-file {
        border-color: rgba(34,197,94,0.5);
        background: rgba(34,197,94,0.06);
        color: #4ade80;
      }
      .cv-upload-label .upload-icon { font-size: 2rem; }
      .cv-upload-label .upload-text { font-size: 0.9rem; font-weight: 600; }
      .cv-upload-label .upload-hint { font-size: 0.75rem; opacity: 0.7; }
      #cv-file { display: none; }

      /* Submit button */
      .careers-submit-btn {
        display: inline-flex; align-items: center; gap: 12px;
        background: linear-gradient(90deg, #6366f1, #a855f7);
        color: #fff; border: none; border-radius: 50px;
        padding: 16px 44px; font-size: 1rem; font-weight: 700;
        cursor: pointer; transition: all 0.4s ease;
        box-shadow: 0 10px 30px rgba(99,102,241,0.4);
        letter-spacing: 0.02em;
      }
      .careers-submit-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 16px 40px rgba(99,102,241,0.6);
      }
      .careers-submit-btn:disabled {
        opacity: 0.7; cursor: not-allowed; transform: none;
      }

      /* Form messages */
      .form-messages {
        border-radius: 12px; padding: 14px 20px;
        font-size: 0.9rem; display: none; margin-top: 16px;
      }
      .form-messages.success {
        background: rgba(34,197,94,0.1);
        border: 1px solid rgba(34,197,94,0.3);
        color: #4ade80; display: block;
      }
      .form-messages.error {
        background: rgba(239,68,68,0.1);
        border: 1px solid rgba(239,68,68,0.3);
        color: #f87171; display: block;
      }

      /* ========== Footer ========== */
      .new-footer-sec {
        background-color: #0d044aff;
        background-image: radial-gradient(circle at 50% 100%, rgba(20,20,70,0.45) 0%, transparent 60%);
        border-top: 1px solid rgba(255,255,255,0.05);
        color: rgba(255,255,255,0.7);
        padding-top: 80px; position: relative; overflow: hidden;
      }
      .new-footer-sec .widget_title { color: #fff; font-size: 1.25rem; margin-bottom: 25px; font-weight: 600; }
      .new-footer-sec .about-text { color: rgba(255,255,255,0.7); margin-top: 20px; margin-bottom: 25px; line-height: 1.6; }
      .new-footer-sec .th-social a {
        background: rgba(255,255,255,0.05); color: #fff; width: 40px; height: 40px;
        display: inline-flex; align-items: center; justify-content: center;
        border-radius: 50%; margin-right: 10px; border: 1px solid rgba(255,255,255,0.1);
        transition: all 0.4s ease;
      }
      .new-footer-sec .th-social a:hover {
        background: #6366f1; border-color: #6366f1;
        transform: translateY(-3px); box-shadow: 0 5px 15px rgba(99,102,241,0.4);
      }
      .new-footer-sec .menu { padding: 0; margin: 0; }
      .new-footer-sec .menu li { list-style: none; margin-bottom: 12px; }
      .new-footer-sec .menu li a {
        color: rgba(255,255,255,0.7); text-decoration: none;
        transition: all 0.3s ease; display: inline-flex; align-items: center;
      }
      .new-footer-sec .menu li a:hover { color: #a5b4fc; transform: translateX(5px); }
      .new-footer-sec .menu li a::before {
        content: '\f105'; font-family: 'Font Awesome 6 Free'; font-weight: 900;
        margin-right: 8px; font-size: 0.8rem; color: #6366f1; opacity: 0.5; transition: all 0.3s ease;
      }
      .new-footer-sec .menu li a:hover::before { opacity: 1; color: #a5b4fc; }
      .new-footer-sec .info-box_text {
        display: flex; align-items: flex-start; margin-bottom: 20px;
      }
      .new-footer-sec .info-box_text .icon {
        width: 40px; height: 40px; background: rgba(99,102,241,0.1);
        border-radius: 50%; display: flex; align-items: center; justify-content: center;
        margin-right: 15px; flex-shrink: 0; border: 1px solid rgba(99,102,241,0.2); color: #6366f1;
      }
      .new-footer-sec .info-box_text .icon img { width: 16px; filter: brightness(0) invert(1); }
      .new-footer-sec .info-box_text .details p { margin: 0; line-height: 1.6; }
      .new-footer-sec .info-box_link { color: rgba(255,255,255,0.7); text-decoration: none; transition: color 0.3s ease; }
      .new-footer-sec .info-box_link:hover { color: #a5b4fc; }
      .new-footer-sec .copyright-wrap {
        border-top: 1px solid rgba(255,255,255,0.1);
        padding: 25px 0; margin-top: 50px; background: rgba(0,0,0,0.2);
      }
      .new-footer-sec .copyright-text { margin: 0; color: rgba(255,255,255,0.6); }
      .new-footer-sec .copyright-text a { color: #fff; font-weight: 600; text-decoration: none; }
      .new-footer-sec .copyright-text a:hover { color: #6366f1; }
      .new-footer-sec .footer-links ul {
        list-style: none; padding: 0; margin: 0;
        display: flex; justify-content: flex-end; gap: 20px;
      }
      .new-footer-sec .footer-links a { color: rgba(255,255,255,0.6); text-decoration: none; transition: color 0.3s ease; }
      .new-footer-sec .footer-links a:hover { color: #a5b4fc; }
      @media (max-width: 991px) {
        .new-footer-sec .footer-links ul { justify-content: center; margin-top: 15px; }
        .new-footer-sec .copyright-text { text-align: center; }
        .new-footer-sec { padding-top: 60px; }
        .new-footer-sec .widget { margin-bottom: 40px; }
      }
      @media (max-width: 767px) {
        .apply-form-wrap { padding: 30px 20px; }
        .careers-hero { padding: 160px 0 70px; }
      }
    </style>

    <!--==============================
    Careers Hero
  ==============================-->
    <section class="careers-hero">
      <div class="container">
        <div class="row align-items-center gy-5">
          <div class="col-lg-6">
            <div class="careers-hero-badge">
              <span></span> Now Accepting Applications
            </div>
            <h1>
              Internship Program –<br /><span>Full Stack Web Development</span>
            </h1>
            <p class="subtitle">
              Launch Your Career with Hands-On Industry Experience in Angular &amp; .NET
            </p>
            <div class="careers-hero-stats">
              <div class="careers-hero-stat">
                <span class="stat-num">3</span>
                <span class="stat-label">Months Duration</span>
              </div>
              <div class="careers-hero-stat">
                <span class="stat-num">8+</span>
                <span class="stat-label">Skills Covered</span>
              </div>
              <div class="careers-hero-stat">
                <span class="stat-num">100%</span>
                <span class="stat-label">Hands-On Projects</span>
              </div>
            </div>
          </div>
          <div class="col-lg-6 careers-hero-img-col">
            <div class="careers-hero-card">
              <div class="stack-item">
                <div class="stack-icon"><i class="fa-brands fa-angular"></i></div>
                <div class="stack-info">
                  <div class="stack-name">Angular Framework</div>
                  <div class="stack-desc">Modern Frontend Development</div>
                </div>
              </div>
              <div class="stack-item">
                <div class="stack-icon"><i class="fa-solid fa-server"></i></div>
                <div class="stack-info">
                  <div class="stack-name">ASP.NET Core</div>
                  <div class="stack-desc">Robust Backend Development</div>
                </div>
              </div>
              <div class="stack-item">
                <div class="stack-icon"><i class="fa-solid fa-database"></i></div>
                <div class="stack-info">
                  <div class="stack-name">SQL Server</div>
                  <div class="stack-desc">Database Design &amp; Fundamentals</div>
                </div>
              </div>
              <div class="stack-item">
                <div class="stack-icon"><i class="fa-brands fa-git-alt"></i></div>
                <div class="stack-info">
                  <div class="stack-name">Git &amp; Version Control</div>
                  <div class="stack-desc">Industry-Standard Workflows</div>
                </div>
              </div>
              <div class="stack-item">
                <div class="stack-icon"><i class="fa-solid fa-code"></i></div>
                <div class="stack-info">
                  <div class="stack-name">RESTful Web APIs</div>
                  <div class="stack-desc">API Design &amp; Integration</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--==============================
    Program Overview
  ==============================-->
    <section class="careers-section" id="overview">
      <div class="container">
        <div class="text-center">
          <div class="section-badge">Program Overview</div>
          <h2 class="section-title">What This Program <span>Offers</span></h2>
          <p class="section-desc mx-auto text-center">
            This internship provides structured learning, mentorship, and hands-on development experience to help participants strengthen their technical skills and prepare for professional software development careers.
          </p>
        </div>
        <div class="overview-grid">
          <div class="overview-card">
            <div class="ov-icon"><i class="fa-light fa-calendar-days"></i></div>
            <div class="ov-label">Duration</div>
            <div class="ov-value">3 Months</div>
          </div>
          <div class="overview-card">
            <div class="ov-icon"><i class="fa-light fa-user-graduate"></i></div>
            <div class="ov-label">Eligibility</div>
            <div class="ov-value">Recent Graduates &amp; Final-Year Students</div>
          </div>
          <div class="overview-card">
            <div class="ov-icon"><i class="fa-light fa-layer-group"></i></div>
            <div class="ov-label">Tech Stack</div>
            <div class="ov-value">Angular, ASP.NET Core, C#, Web APIs, SQL Server, Git</div>
          </div>
          <div class="overview-card">
            <div class="ov-icon"><i class="fa-light fa-briefcase"></i></div>
            <div class="ov-label">Type</div>
            <div class="ov-value">Structured Internship with Mentorship</div>
          </div>
        </div>
      </div>
    </section>

    <!--==============================
    What You'll Learn
  ==============================-->
    <section class="careers-section learn-alt" id="learn">
      <div class="container">
        <div class="row align-items-center gy-4">
          <div class="col-lg-4">
            <div class="section-badge">Curriculum</div>
            <h2 class="section-title">What You'll <span>Learn</span></h2>
            <p class="section-desc">
              During the internship, participants will receive training and practical exposure to a comprehensive set of modern development technologies and best practices.
            </p>
          </div>
          <div class="col-lg-8">
            <div class="learn-list">
              <div class="learn-item">
                <div class="li-icon"><i class="fa-brands fa-angular"></i></div>
                <div class="li-text"><strong>Angular Framework and Frontend Development</strong>Build modern, dynamic single-page applications using Angular.</div>
              </div>
              <div class="learn-item">
                <div class="li-icon"><i class="fa-solid fa-server"></i></div>
                <div class="li-text"><strong>ASP.NET Core and Backend Development</strong>Build scalable server-side applications with C# and .NET.</div>
              </div>
              <div class="learn-item">
                <div class="li-icon"><i class="fa-solid fa-plug"></i></div>
                <div class="li-text"><strong>RESTful API Design and Integration</strong>Design, build, and consume RESTful Web APIs.</div>
              </div>
              <div class="learn-item">
                <div class="li-icon"><i class="fa-solid fa-database"></i></div>
                <div class="li-text"><strong>Database Design and SQL Fundamentals</strong>Relational database design and SQL Server querying.</div>
              </div>
              <div class="learn-item">
                <div class="li-icon"><i class="fa-brands fa-git-alt"></i></div>
                <div class="li-text"><strong>Version Control with Git</strong>Collaborative development using Git workflows.</div>
              </div>
              <div class="learn-item">
                <div class="li-icon"><i class="fa-light fa-shield-check"></i></div>
                <div class="li-text"><strong>Software Development Best Practices</strong>Clean code, code reviews, and agile methodologies.</div>
              </div>
              <div class="learn-item">
                <div class="li-icon"><i class="fa-light fa-vial"></i></div>
                <div class="li-text"><strong>Debugging, Testing, and Deployment Concepts</strong>Quality assurance and deployment pipelines.</div>
              </div>
              <div class="learn-item">
                <div class="li-icon"><i class="fa-light fa-laptop-code"></i></div>
                <div class="li-text"><strong>Real-World Project Development</strong>Work on real client-facing or internal industry projects.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--==============================
    Program Highlights
  ==============================-->
    <section class="careers-section" id="highlights">
      <div class="container">
        <div class="text-center">
          <div class="section-badge">Why Join Us</div>
          <h2 class="section-title">Program <span>Highlights</span></h2>
          <p class="section-desc mx-auto text-center">
            Our internship is crafted to give you maximum value and prepare you to hit the ground running as a full-stack developer.
          </p>
        </div>
        <div class="highlights-grid">
          <div class="highlight-card">
            <div class="hc-icon"><i class="fa-light fa-map-signs"></i></div>
            <div class="hc-text">
              <h4>Structured Learning Plan</h4>
              <p>A carefully designed curriculum that builds your skills progressively from fundamentals to advanced concepts.</p>
            </div>
          </div>
          <div class="highlight-card">
            <div class="hc-icon"><i class="fa-light fa-screwdriver-wrench"></i></div>
            <div class="hc-text">
              <h4>Hands-On Project Experience</h4>
              <p>Work on real-world projects that simulate professional software development environments.</p>
            </div>
          </div>
          <div class="highlight-card">
            <div class="hc-icon"><i class="fa-light fa-person-chalkboard"></i></div>
            <div class="hc-text">
              <h4>Guidance from Experienced Developers</h4>
              <p>Learn directly from seasoned professionals who have worked on large-scale production applications.</p>
            </div>
          </div>
          <div class="highlight-card">
            <div class="hc-icon"><i class="fa-light fa-gears"></i></div>
            <div class="hc-text">
              <h4>Industry-Standard Tools &amp; Workflows</h4>
              <p>Get exposure to tools and processes used by professional development teams around the world.</p>
            </div>
          </div>
          <div class="highlight-card">
            <div class="hc-icon"><i class="fa-light fa-folder-open"></i></div>
            <div class="hc-text">
              <h4>Build a Strong Portfolio</h4>
              <p>Complete the program with real projects you can showcase to future employers.</p>
            </div>
          </div>
          <div class="highlight-card">
            <div class="hc-icon"><i class="fa-light fa-diagram-project"></i></div>
            <div class="hc-text">
              <h4>Full-Stack Application Understanding</h4>
              <p>Gain practical understanding of how frontend and backend systems work together in production.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--==============================
    Who Should Apply
  ==============================-->
    <section class="careers-section who-alt" id="who">
      <div class="container">
        <div class="row align-items-center gy-5">
          <div class="col-lg-5">
            <div class="section-badge">Eligibility</div>
            <h2 class="section-title">Who Should <span>Apply?</span></h2>
            <p class="section-desc">
              We are looking for passionate and motivated candidates who are ready to take their software development journey to the next level.
            </p>
          </div>
          <div class="col-lg-7">
            <div class="who-criteria">
              <div class="who-item">
                <div class="wi-check"><i class="fa-solid fa-check"></i></div>
                <div class="wi-text">Have completed a degree in Computer Science, Information Technology, or a related field</div>
              </div>
              <div class="who-item">
                <div class="wi-check"><i class="fa-solid fa-check"></i></div>
                <div class="wi-text">Possess basic programming knowledge</div>
              </div>
              <div class="who-item">
                <div class="wi-check"><i class="fa-solid fa-check"></i></div>
                <div class="wi-text">Are eager to learn and grow as a software developer</div>
              </div>
              <div class="who-item">
                <div class="wi-check"><i class="fa-solid fa-check"></i></div>
                <div class="wi-text">Have a genuine interest in Angular and .NET technologies</div>
              </div>
              <div class="who-item">
                <div class="wi-check"><i class="fa-solid fa-check"></i></div>
                <div class="wi-text">Are committed to completing the full 3-month program</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--==============================
    Selection Process
  ==============================-->
    <section class="careers-section" id="process">
      <div class="container">
        <div class="text-center">
          <div class="section-badge">How To Join</div>
          <h2 class="section-title">Selection <span>Process</span></h2>
          <p class="section-desc mx-auto text-center">
            Our selection process is straightforward and designed to find the best-fit candidates for the program.
          </p>
        </div>
        <div class="selection-process">
          <div class="selection-step">
            <div class="step-num">1</div>
            <div class="step-label">Application<br />Submission</div>
          </div>
          <div class="selection-step">
            <div class="step-num">2</div>
            <div class="step-label">Initial<br />Screening</div>
          </div>
          <div class="selection-step">
            <div class="step-num">3</div>
            <div class="step-label">Technical /&nbsp;Personal<br />Interview</div>
          </div>
          <div class="selection-step">
            <div class="step-num">4</div>
            <div class="step-label">Internship<br />Offer</div>
          </div>
        </div>
      </div>
    </section>

    <!--==============================
    Apply Now – Application Form
  ==============================-->
    <section class="apply-section" id="apply">
      <div class="container">
        <div class="text-center mb-5">
          <div class="section-badge">Apply Now</div>
          <h2 class="section-title">Start Your Journey as a <span>Full Stack Developer</span></h2>
          <p class="section-desc mx-auto" style="max-width: 700px;">
            If you are passionate about software development and ready to enhance your skills through practical learning, we would love to hear from you. Submit your application using the form below and our team will review all applications and contact shortlisted candidates for the next steps.
          </p>
        </div>

        <div class="apply-form-wrap">
          <h3 style="color:#fff; font-size:1.4rem; font-weight:700; margin-bottom:6px;">Internship Application Form</h3>
          <p style="color:rgba(255,255,255,0.5); font-size:0.85rem; margin-bottom:32px;">
            Fields marked with <span style="color:#f87171;">*</span> are required. Applications are sent to <a href="mailto:careers@triassoftware.com" style="color:#a5b4fc; text-decoration:none;">careers@triassoftware.com</a>
          </p>

          <form id="careersForm" enctype="multipart/form-data" novalidate>
            <div class="row g-4">

              <!-- Full Name -->
              <div class="col-sm-6">
                <label for="career_name" class="form-label">Full Name <span class="req">*</span></label>
                <input type="text" class="form-control" id="career_name" name="name" placeholder="Enter your full name" required />
              </div>

              <!-- Email -->
              <div class="col-sm-6">
                <label for="career_email" class="form-label">Email Address <span class="req">*</span></label>
                <input type="email" class="form-control" id="career_email" name="email" placeholder="Enter your email address" required />
              </div>

              <!-- Phone -->
              <div class="col-sm-6">
                <label for="career_phone" class="form-label">Phone Number <span class="req">*</span></label>
                <input type="tel" class="form-control" id="career_phone" name="phone" placeholder="Enter your phone number" required />
              </div>

              <!-- Degree -->
              <div class="col-sm-6">
                <label for="career_degree" class="form-label">Degree / Qualification</label>
                <input type="text" class="form-control" id="career_degree" name="degree" placeholder="e.g. B.Tech Computer Science" />
              </div>

              <!-- University -->
              <div class="col-sm-6">
                <label for="career_university" class="form-label">University / College</label>
                <input type="text" class="form-control" id="career_university" name="university" placeholder="Your institution name" />
              </div>

              <!-- Graduation Year -->
              <div class="col-sm-6">
                <label for="career_grad_year" class="form-label">Year of Graduation / Passing</label>
                <select class="form-select" id="career_grad_year" name="grad_year">
                  <option value="" selected disabled>Select year</option>
                  <option value="2025">2025</option>
                  <option value="2024">2024</option>
                  <option value="2023">2023</option>
                  <option value="2022">2022</option>
                  <option value="2026 (Final Year)">2026 (Final Year)</option>
                  <option value="Other">Other</option>
                </select>
              </div>

              <!-- Cover Letter / Message -->
              <div class="col-12">
                <label for="career_message" class="form-label">Cover Letter / Message</label>
                <textarea class="form-control" id="career_message" name="message" rows="4" placeholder="Tell us about yourself, your interest in the program, and any relevant experience..."></textarea>
              </div>

              <!-- CV Upload -->
              <div class="col-12">
                <label class="form-label">Upload CV / Resume <span class="req">*</span></label>
                <label for="cv-file" class="cv-upload-label" id="cvUploadLabel">
                  <span class="upload-icon"><i class="fa-light fa-cloud-arrow-up"></i></span>
                  <span class="upload-text" id="cvFileName">Click to upload your CV</span>
                  <span class="upload-hint">Accepted formats: PDF, DOC, DOCX &nbsp;|&nbsp; Max size: 5 MB</span>
                </label>
                <input type="file" id="cv-file" name="cv" accept=".pdf,.doc,.docx" required />
              </div>

              <!-- Submit -->
              <div class="col-12 text-center mt-2">
                <button type="submit" class="careers-submit-btn" id="careersSubmitBtn">
                  <i class="fa-light fa-paper-plane"></i> Submit Application
                </button>
                <div class="form-messages" id="careersFormMsg"></div>
              </div>

            </div>
          </form>
        </div>
      </div>
    </section>

    <!--==============================
    Footer Area
  ==============================-->
    <footer class="new-footer-sec">
      <div class="widget-area">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-md-6 col-xl-4">
              <div class="widget footer-widget">
                <div class="th-widget-about">
                  <div class="about-logo">
                    <a href="default.php"><img src="assets/img/logo-white.png" alt="Triasoft" /></a>
                  </div>
                  <p class="about-text">
                    Empower businesses with innovative, scalable, and intelligent software solutions that drive efficiency, growth, and digital transformation.
                  </p>
                  <div class="th-social">
                    <a href="https://www.facebook.com/profile.php?id=61577595294412"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://wa.me/919605885550"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://instagram.com/triasoft_softwares"><i class="fab fa-instagram"></i></a>
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
                    <li><a href="default.php#about-sec">About Us</a></li>
                    <li><a href="default.php#services">Our Services</a></li>
                    <li><a href="products.php">Our Products</a></li>
                    <li><a href="careers.php">Careers</a></li>
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
                    <div class="icon"><img src="assets/img/icon/phone.svg" alt="img" /></div>
                    <div class="details">
                      <p><a href="tel:+919605885550" class="info-box_link">+91 96058 85550</a></p>
                      <p><a href="tel:+916235919219" class="info-box_link">+91 62359 19219</a></p>
                    </div>
                  </div>
                  <div class="info-box_text">
                    <div class="icon"><img src="assets/img/icon/envelope.svg" alt="img" /></div>
                    <div class="details">
                      <p><a href="mailto:info@triassoftware.com" class="info-box_link">info@triassoftware.com</a></p>
                      <p><a href="mailto:careers@triassoftware.com" class="info-box_link">careers@triassoftware.com</a></p>
                    </div>
                  </div>
                  <div class="info-box_text">
                    <div class="icon"><img src="assets/img/icon/location-dot.svg" alt="img" /></div>
                    <div class="details">
                      <p><a href="https://maps.app.goo.gl/QyH2fFoJ9fii93mt7" target="_blank" class="info-box_link">Sai Arcade, Panamaram, Wayanad, Kerala</a></p>
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
                  <li><a href="careers.php">Careers</a></li>
                  <li><a href="contact.php">Privacy Policy</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scroll To Top -->
    <div class="scroll-top">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
          style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
      </svg>
    </div>

    <!--==============================
    All Js File
  ==============================-->
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
    <!-- Lenis Smooth Scroll -->
    <script src="assets/js/lenis.min.js"></script>
    <!-- Main Js File -->
    <script src="assets/js/main.js"></script>

    <script>
      // CV file upload label update
      document.getElementById('cv-file').addEventListener('change', function () {
        var label = document.getElementById('cvUploadLabel');
        var nameEl = document.getElementById('cvFileName');
        if (this.files && this.files[0]) {
          nameEl.textContent = this.files[0].name;
          label.classList.add('has-file');
        } else {
          nameEl.textContent = 'Click to upload your CV';
          label.classList.remove('has-file');
        }
      });

      // Careers form AJAX submit
      document.getElementById('careersForm').addEventListener('submit', function (e) {
        e.preventDefault();
        var form    = this;
        var btn     = document.getElementById('careersSubmitBtn');
        var msgEl   = document.getElementById('careersFormMsg');
        var cvFile  = document.getElementById('cv-file');

        // Client-side validation
        var name    = form.querySelector('[name="name"]').value.trim();
        var email   = form.querySelector('[name="email"]').value.trim();
        var phone   = form.querySelector('[name="phone"]').value.trim();

        if (!name || !email || !phone) {
          msgEl.className = 'form-messages error';
          msgEl.textContent = 'Please fill in all required fields (Name, Email, Phone).';
          return;
        }
        if (!cvFile.files || !cvFile.files[0]) {
          msgEl.className = 'form-messages error';
          msgEl.textContent = 'Please upload your CV / Resume before submitting.';
          return;
        }

        btn.disabled = true;
        btn.innerHTML = '<i class="fa-light fa-spinner fa-spin"></i> Submitting...';
        msgEl.className = 'form-messages';
        msgEl.textContent = '';

        var formData = new FormData(form);

        fetch('careers_mail.php', {
          method: 'POST',
          body: formData
        })
        .then(function (res) {
          return res.text().then(function (text) {
            return { status: res.status, text: text };
          });
        })
        .then(function (result) {
          btn.disabled = false;
          btn.innerHTML = '<i class="fa-light fa-paper-plane"></i> Submit Application';
          if (result.status === 200) {
            msgEl.className = 'form-messages success';
            msgEl.textContent = result.text;
            form.reset();
            document.getElementById('cvFileName').textContent = 'Click to upload your CV';
            document.getElementById('cvUploadLabel').classList.remove('has-file');
          } else {
            msgEl.className = 'form-messages error';
            msgEl.textContent = result.text || 'Something went wrong. Please try again.';
          }
        })
        .catch(function () {
          btn.disabled = false;
          btn.innerHTML = '<i class="fa-light fa-paper-plane"></i> Submit Application';
          msgEl.className = 'form-messages error';
          msgEl.textContent = 'Network error. Please check your connection and try again.';
        });
      });
    </script>
  </body>
</html>
