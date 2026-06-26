<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Our Products – Triasoft</title>
    <meta name="author" content="Triasoft" />
    <meta name="description" content="Explore Triasoft's full range of software products including StayLeap, Petroleum ERP, Garage Management, Warehouse Management, and Ecommerce solutions." />
    <meta name="keywords" content="Triasoft products, StayLeap, Petroleum ERP, Garage Management, Warehouse Management, Ecommerce" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" type="image/png" href="assets/img/logo.png" />
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css" />
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />

    <style>
      /* ============================================================
         PRODUCTS PAGE — CREATIVE REDESIGN
      ============================================================ */
      :root {
        --radius-xl: 28px;
        --radius-lg: 18px;
        --radius-md: 12px;
      }

      /* ---- HERO ---- */
      .prod-hero {
        min-height: 100vh;
        background: radial-gradient(ellipse at 20% 60%, rgba(99,102,241,0.18) 0%, transparent 50%),
                    radial-gradient(ellipse at 80% 20%, rgba(139,92,246,0.15) 0%, transparent 45%),
                    linear-gradient(160deg, #05030f 0%, #0c0a2e 45%, #110836 100%);
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
        padding: 140px 0 80px;
      }
      .prod-hero .orb {
        position: absolute;
        border-radius: 50%;
        filter: blur(80px);
        animation: orbFloat 8s ease-in-out infinite;
        pointer-events: none;
      }
      .prod-hero .orb-1 { width:500px;height:500px;background:rgba(99,102,241,0.12);top:-100px;left:-150px;animation-delay:0s; }
      .prod-hero .orb-2 { width:400px;height:400px;background:rgba(139,92,246,0.1);bottom:-80px;right:-100px;animation-delay:3s; }
      .prod-hero .orb-3 { width:280px;height:280px;background:rgba(56,189,248,0.08);top:40%;left:55%;animation-delay:5s; }
      @keyframes orbFloat {
        0%,100%{ transform:translateY(0) scale(1); }
        50%{ transform:translateY(-30px) scale(1.05); }
      }
      .prod-hero .grid-lines {
        position:absolute;inset:0;
        background-image: linear-gradient(rgba(255,255,255,0.025) 1px, transparent 1px),
                          linear-gradient(90deg, rgba(255,255,255,0.025) 1px, transparent 1px);
        background-size: 60px 60px;
      }
      .prod-hero .hero-inner { position:relative;z-index:3; }
      .prod-hero .hero-eyebrow {
        display:inline-flex;align-items:center;gap:8px;
        background:rgba(99,102,241,0.15);border:1px solid rgba(99,102,241,0.3);
        color:#a5b4fc;font-size:.78rem;font-weight:700;letter-spacing:.14em;
        text-transform:uppercase;padding:7px 18px;border-radius:50px;
        margin-bottom:1.6rem;
      }
      .prod-hero .hero-eyebrow span.dot {
        width:6px;height:6px;border-radius:50%;background:#6366f1;
        animation:pulse 2s ease-in-out infinite;
      }
      @keyframes pulse{ 0%,100%{opacity:1;} 50%{opacity:0.3;} }
      .prod-hero h1 {
        font-size:clamp(2.4rem,5.5vw,4.2rem);font-weight:900;color:#fff;
        line-height:1.1;margin-bottom:1.4rem;letter-spacing:-0.02em;
      }
      .prod-hero h1 .accent { color:#818cf8; }
      .prod-hero .hero-sub {
        font-size:1.1rem;color:rgba(255,255,255,0.65);max-width:540px;
        line-height:1.8;margin-bottom:2.5rem;
      }
      .prod-hero .hero-stats {
        display:flex;gap:2.5rem;flex-wrap:wrap;margin-bottom:3rem;
      }
      .prod-hero .hero-stat-item { text-align:left; }
      .prod-hero .hero-stat-item .num {
        font-size:2rem;font-weight:900;color:#fff;line-height:1;
        background:linear-gradient(135deg,#a5b4fc,#818cf8);
        -webkit-background-clip:text;-webkit-text-fill-color:transparent;
      }
      .prod-hero .hero-stat-item .label {
        font-size:.8rem;color:rgba(255,255,255,0.5);font-weight:500;
        text-transform:uppercase;letter-spacing:.08em;margin-top:4px;
      }
      .prod-hero .hero-product-pills {
        display:flex;gap:.75rem;flex-wrap:wrap;
      }
      .hero-pill {
        display:inline-flex;align-items:center;gap:7px;
        padding:8px 18px;border-radius:50px;font-size:.82rem;font-weight:600;
        color:#fff;text-decoration:none;
        background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.12);
        transition:all .3s;
      }
      .hero-pill:hover,.hero-pill.active {
        background:rgba(99,102,241,0.25);border-color:rgba(99,102,241,0.5);
        color:#a5b4fc;transform:translateY(-2px);
      }
      .hero-pill .pip {
        width:7px;height:7px;border-radius:50%;flex-shrink:0;
      }
      /* right side floating product cards */
      .prod-hero .hero-cards {
        position:relative;height:480px;
      }
      .prod-hero .floating-card {
        position:absolute;
        background:rgba(255,255,255,0.04);
        border:1px solid rgba(255,255,255,0.09);
        border-radius:var(--radius-lg);
        padding:20px 22px;
        backdrop-filter:blur(12px);
        transition:all .3s;
        animation:cardFloat 6s ease-in-out infinite;
      }
      .prod-hero .floating-card:hover {
        background:rgba(99,102,241,0.1);
        border-color:rgba(99,102,241,0.3);
        transform:translateY(-6px) !important;
      }
      .prod-hero .fc-1 { top:0;left:20px;width:200px;animation-delay:0s; }
      .prod-hero .fc-2 { top:80px;right:10px;width:220px;animation-delay:1.5s; }
      .prod-hero .fc-3 { top:230px;left:0;width:190px;animation-delay:2.8s; }
      .prod-hero .fc-4 { top:300px;right:40px;width:200px;animation-delay:4s; }
      .prod-hero .fc-5 { bottom:20px;left:60px;width:210px;animation-delay:1s; }
      @keyframes cardFloat {
        0%,100%{ transform:translateY(0); }
        50%{ transform:translateY(-12px); }
      }
      .floating-card .fc-icon {
        width:40px;height:40px;border-radius:10px;
        display:flex;align-items:center;justify-content:center;
        font-size:1rem;margin-bottom:10px;
      }
      .floating-card .fc-name {
        font-size:.8rem;font-weight:700;color:#fff;margin-bottom:3px;
      }
      .floating-card .fc-desc {
        font-size:.72rem;color:rgba(255,255,255,0.5);line-height:1.4;
      }

      /* ---- STICKY PRODUCT NAV ---- */
      .prod-nav-wrap {
        position:sticky;top:0;z-index:90;
        background:rgba(8,6,28,0.92);
        border-bottom:1px solid rgba(255,255,255,0.07);
        backdrop-filter:blur(16px);
      }
      .prod-nav {
        display:flex;align-items:center;gap:.25rem;
        overflow-x:auto;padding:14px 0;scrollbar-width:none;
      }
      .prod-nav::-webkit-scrollbar{ display:none; }
      .prod-nav-link {
        display:inline-flex;align-items:center;gap:8px;
        padding:9px 20px;border-radius:50px;font-size:.85rem;font-weight:600;
        color:rgba(255,255,255,0.55);text-decoration:none;white-space:nowrap;
        transition:all .3s;border:1px solid transparent;
      }
      .prod-nav-link:hover {
        color:#fff;background:rgba(255,255,255,0.06);
      }
      .prod-nav-link.active {
        color:#fff;background:rgba(99,102,241,0.2);
        border-color:rgba(99,102,241,0.35);
      }
      .prod-nav-link .nav-dot {
        width:8px;height:8px;border-radius:50%;flex-shrink:0;
      }

      /* ---- PRODUCT SECTION ---- */
      .prod-section {
        padding:100px 0;
        border-bottom:1px solid rgba(0,0,0,0.07);
        position:relative;
        overflow:hidden;
      }
      .prod-section.dark-section {
        background:linear-gradient(160deg,#05030f 0%,#0c0a2e 100%);
        border-bottom:1px solid rgba(255,255,255,0.05);
      }

      /* section label */
      .prod-section-label {
        display:inline-flex;align-items:center;gap:8px;
        font-size:.75rem;font-weight:700;letter-spacing:.14em;
        text-transform:uppercase;padding:5px 16px;
        border-radius:50px;margin-bottom:1rem;
      }

      /* immersive product header */
      .prod-header {
        border-radius:var(--radius-xl);
        padding:60px 56px;
        position:relative;overflow:hidden;
        margin-bottom:4rem;
        min-height:280px;
        display:flex;align-items:center;
        box-shadow:0 24px 80px rgba(0,0,0,0.22);
      }
      .prod-header .ph-bg-grid {
        position:absolute;inset:0;
        background-image:linear-gradient(rgba(255,255,255,0.04) 1px,transparent 1px),
                         linear-gradient(90deg,rgba(255,255,255,0.04) 1px,transparent 1px);
        background-size:40px 40px;
      }
      .prod-header .ph-orb {
        position:absolute;border-radius:50%;filter:blur(60px);pointer-events:none;
      }
      .prod-header .ph-orb-1 { width:300px;height:300px;background:rgba(255,255,255,0.06);top:-80px;right:-50px; }
      .prod-header .ph-orb-2 { width:200px;height:200px;background:rgba(255,255,255,0.04);bottom:-60px;left:40%; }
      .prod-header .ph-content { position:relative;z-index:2;flex:1; }
      .prod-header .ph-badge {
        display:inline-block;background:rgba(255,255,255,0.18);
        border:1px solid rgba(255,255,255,0.3);color:#fff;
        font-size:.72rem;font-weight:700;letter-spacing:.12em;
        text-transform:uppercase;padding:4px 14px;border-radius:50px;
        margin-bottom:1rem;
      }
      .prod-header h2 {
        font-size:clamp(2rem,4vw,3rem);font-weight:900;color:#fff;
        margin-bottom:.8rem;line-height:1.1;letter-spacing:-.02em;
      }
      .prod-header .ph-tagline {
        color:rgba(255,255,255,0.78);font-size:1.05rem;
        line-height:1.6;max-width:520px;margin:0;
      }
      .prod-header .ph-logo-wrap {
        position:relative;z-index:2;flex-shrink:0;margin-left:3rem;
      }
      .prod-header .ph-logo {
        width:160px;height:160px;object-fit:contain;
        background:rgba(255,255,255,0.12);
        border:1px solid rgba(255,255,255,0.18);
        border-radius:24px;padding:20px;
      }
      .prod-header .ph-stats {
        display:flex;gap:2rem;margin-top:1.8rem;flex-wrap:wrap;
      }
      .prod-header .ph-stat .n {
        font-size:1.6rem;font-weight:900;color:#fff;display:block;line-height:1;
      }
      .prod-header .ph-stat .l {
        font-size:.75rem;color:rgba(255,255,255,0.6);
        text-transform:uppercase;letter-spacing:.08em;
      }

      /* description */
      .prod-intro {
        font-size:1.05rem;color:#555;line-height:1.85;
        max-width:820px;margin-bottom:3.5rem;
      }
      .dark-section .prod-intro { color:rgba(255,255,255,0.65); }

      /* why cards row */
      .why-row {
        display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;
        margin-bottom:3.5rem;
      }
      .why-card {
        border-radius:var(--radius-lg);padding:2rem 1.8rem;
        border:1px solid #eee;background:#fff;
        transition:all .3s;
      }
      .dark-section .why-card {
        background:rgba(255,255,255,0.04);
        border-color:rgba(255,255,255,0.07);
      }
      .why-card:hover {
        transform:translateY(-4px);
        box-shadow:0 12px 40px rgba(0,0,0,0.1);
      }
      .dark-section .why-card:hover {
        box-shadow:0 12px 40px rgba(0,0,0,0.4);
        background:rgba(255,255,255,0.07);
      }
      .why-card .wc-icon {
        width:52px;height:52px;border-radius:14px;
        display:flex;align-items:center;justify-content:center;
        font-size:1.3rem;margin-bottom:1.2rem;
      }
      .why-card h5 {
        font-size:1rem;font-weight:800;margin-bottom:.5rem;
      }
      .dark-section .why-card h5 { color:#fff; }
      .why-card p {
        font-size:.88rem;color:#666;line-height:1.6;margin:0;
      }
      .dark-section .why-card p { color:rgba(255,255,255,0.55); }

      /* features split */
      .features-split {
        display:grid;grid-template-columns:1fr 1fr;gap:3rem;
        align-items:start;margin-bottom:3.5rem;
      }
      .features-list-col .fs-title {
        font-size:1.35rem;font-weight:800;margin-bottom:1.5rem;color:#1a1a2e;
      }
      .dark-section .features-list-col .fs-title { color:#fff; }
      .features-list { display:flex;flex-direction:column;gap:1rem; }
      .feat-row {
        display:flex;align-items:flex-start;gap:1rem;
        padding:1.1rem 1.3rem;border-radius:var(--radius-md);
        border:1px solid #f0f0f0;background:#fff;
        transition:all .3s;
      }
      .dark-section .feat-row {
        background:rgba(255,255,255,0.04);
        border-color:rgba(255,255,255,0.07);
      }
      .feat-row:hover {
        transform:translateX(4px);
        box-shadow:0 4px 20px rgba(0,0,0,0.07);
      }
      .dark-section .feat-row:hover {
        background:rgba(255,255,255,0.07);
        box-shadow:0 4px 20px rgba(0,0,0,0.3);
      }
      .feat-icon {
        width:42px;height:42px;border-radius:11px;
        display:flex;align-items:center;justify-content:center;
        font-size:1rem;flex-shrink:0;
      }
      .feat-row h6 {
        font-size:.92rem;font-weight:700;margin:0 0 3px;
      }
      .dark-section .feat-row h6 { color:#fff; }
      .feat-row p { font-size:.82rem;color:#777;margin:0;line-height:1.5; }
      .dark-section .feat-row p { color:rgba(255,255,255,0.5); }

      /* info panel (right side of split) */
      .info-panel {
        border-radius:var(--radius-xl);padding:2.5rem;
        position:sticky;top:120px;
      }
      .info-panel .ip-heading {
        font-size:1.1rem;font-weight:800;margin-bottom:1.5rem;
      }
      .dark-section .info-panel .ip-heading { color:#fff; }
      .ip-stat-grid {
        display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-bottom:1.8rem;
      }
      .ip-stat {
        border-radius:var(--radius-md);padding:1.2rem;text-align:center;
      }
      .ip-stat .n {
        font-size:1.8rem;font-weight:900;display:block;line-height:1;margin-bottom:4px;
      }
      .ip-stat .l {
        font-size:.72rem;text-transform:uppercase;letter-spacing:.08em;
        opacity:.7;font-weight:600;
      }
      .audience-section { margin-top:1.5rem; }
      .audience-label {
        font-size:.78rem;font-weight:700;text-transform:uppercase;
        letter-spacing:.1em;opacity:.6;margin-bottom:.75rem;
      }
      .dark-section .audience-label { color:rgba(255,255,255,0.5); }
      .audience-chips {
        display:flex;flex-wrap:wrap;gap:.5rem;
      }
      .audience-chip {
        display:inline-flex;align-items:center;gap:6px;
        padding:5px 14px;border-radius:50px;font-size:.8rem;font-weight:600;
      }

      /* CTA group */
      .prod-cta-row {
        display:flex;gap:1rem;flex-wrap:wrap;align-items:center;
        padding-top:2rem;
        border-top:1px solid #f0f0f0;
        margin-top:2rem;
      }
      .dark-section .prod-cta-row {
        border-top-color:rgba(255,255,255,0.08);
      }
      .btn-prim {
        display:inline-flex;align-items:center;gap:8px;
        padding:.8rem 2rem;border-radius:50px;font-size:.95rem;font-weight:700;
        color:#fff;text-decoration:none;transition:all .3s;border:none;
      }
      .btn-prim:hover {
        color:#fff;transform:translateY(-2px);
        box-shadow:0 10px 30px rgba(0,0,0,0.22);
      }
      .btn-sec {
        display:inline-flex;align-items:center;gap:8px;
        padding:.78rem 1.8rem;border-radius:50px;font-size:.95rem;font-weight:600;
        background:transparent;text-decoration:none;transition:all .3s;
        border:2px solid currentColor;
      }
      .btn-sec:hover { transform:translateY(-2px); }

      /* Divider with product number */
      .prod-number-badge {
        display:inline-flex;align-items:center;justify-content:center;
        width:48px;height:48px;border-radius:50%;font-size:1.1rem;font-weight:900;
        color:#fff;margin-bottom:1.5rem;
      }

      /* Final CTA */
      .final-cta {
        padding:100px 0;
        background:radial-gradient(ellipse at 50% 120%,rgba(99,102,241,0.25),transparent 60%),
                   linear-gradient(160deg,#05030f,#0c0a2e 60%,#110836);
        text-align:center;position:relative;overflow:hidden;
      }
      .final-cta .fc-orb {
        position:absolute;border-radius:50%;filter:blur(80px);pointer-events:none;
      }
      .final-cta .fc-orb-1 { width:400px;height:400px;background:rgba(99,102,241,0.12);top:-100px;left:-100px; }
      .final-cta .fc-orb-2 { width:350px;height:350px;background:rgba(139,92,246,0.1);bottom:-80px;right:-80px; }
      .final-cta .fc-inner { position:relative;z-index:2; }
      .final-cta h2 {
        font-size:clamp(1.8rem,4vw,3rem);font-weight:900;color:#fff;
        letter-spacing:-.02em;margin-bottom:1rem;
      }
      .final-cta p {
        font-size:1.05rem;color:rgba(255,255,255,0.65);
        max-width:500px;margin:0 auto 2.5rem;line-height:1.7;
      }
      .final-cta .cta-btns {
        display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;
      }
      .btn-white {
        display:inline-flex;align-items:center;gap:8px;
        padding:.85rem 2.2rem;border-radius:50px;font-size:.95rem;font-weight:700;
        background:#fff;color:#0c0a2e;text-decoration:none;transition:all .3s;
      }
      .btn-white:hover {
        transform:translateY(-2px);box-shadow:0 12px 36px rgba(255,255,255,0.2);
        color:#0c0a2e;
      }
      .btn-ghost {
        display:inline-flex;align-items:center;gap:8px;
        padding:.82rem 2rem;border-radius:50px;font-size:.95rem;font-weight:600;
        background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);
        text-decoration:none;transition:all .3s;
      }
      .btn-ghost:hover {
        border-color:#fff;color:#fff;transform:translateY(-2px);
      }

      /* responsive */
      @media(max-width:991px){
        .why-row { grid-template-columns:1fr 1fr; }
        .features-split { grid-template-columns:1fr; }
        .info-panel { position:static; }
        .prod-header { flex-direction:column;padding:40px 28px; }
        .prod-header .ph-logo-wrap { margin-left:0;margin-top:1.5rem; }
        .prod-header h2 { font-size:2rem; }
      }
      @media(max-width:767px){
        .why-row { grid-template-columns:1fr; }
        .prod-hero .hero-stats { gap:1.5rem; }
        .ip-stat-grid { grid-template-columns:1fr 1fr; }
        .prod-hero .hero-cards { display:none; }
        .prod-hero { min-height:auto;padding:130px 0 60px; }
      }
    </style>
  </head>
  <body>

    <!-- Preloader -->
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
        var t = setTimeout(function(){
          var p = document.getElementById('sitePreloader');
          if(p){ p.classList.add('loaded'); }
        }, 3000);
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
        backdrop-filter: blur(10px); color: #eaf2ff; font-size: 13px;
        font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase;
        box-shadow: 0 10px 25px rgba(0,0,0,0.22);
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
        position: relative; width: min(300px, 72vw); height: 200px; margin: 0 auto 18px;
      }
      #sitePreloader .part {
        position: absolute; overflow: hidden; opacity: 0;
        top: 50%; left: 50%; transform: translate(-50%, -50%);
        animation: triLoaderMove 1.2s cubic-bezier(0.25,1,0.5,1) forwards;
        filter: drop-shadow(0 4px 8px rgba(0,0,0,0.1));
      }
      #sitePreloader .part::after {
        content: ""; position: absolute; top: 0; left: -200%; width: 200%; height: 100%;
        background: linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0.9) 50%, rgba(255,255,255,0) 100%);
        transform: skewX(-30deg);
        animation: triLoaderGlare 3s ease-in-out infinite; animation-delay: 1.5s;
      }
      #sitePreloader .part-1 { width:170px;height:55px;background:linear-gradient(135deg,#50c9ff,#3db2e5);clip-path:polygon(40% 0%,100% 0%,60% 100%,0% 100%);--final-x:-150px;--final-y:-70px; }
      #sitePreloader .part-2 { width:130px;height:55px;background:linear-gradient(135deg,#4d9de0,#2a64ad);clip-path:polygon(0% 0%,100% 0%,52% 100%,18% 100%);--final-x:25px;--final-y:-76px; }
      #sitePreloader .part-3 { width:155px;height:55px;background:linear-gradient(135deg,#ffb347,#f88a25);clip-path:polygon(45% 0%,100% 0%,60% 100%,0% 100%);--final-x:-100px;--final-y:-15px; }
      @keyframes triLoaderMove { 0%{opacity:0;transform:translate(-50%,-50%);} 100%{opacity:1;transform:translate(var(--final-x),var(--final-y));} }
      @keyframes triLoaderGlare { 0%{left:-200%;} 30%{left:150%;} 100%{left:150%;} }
    </style>

    <!-- Mobile Menu -->
    <div class="th-menu-wrapper onepage-nav">
      <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
          <a href="default.php"><img src="assets/img/logo2.svg" alt="Triasoft" /></a>
        </div>
        <div class="th-mobile-menu">
          <ul>
            <li class="menu-item"><a href="default.php">Home</a></li>
            <li class="menu-item"><a href="default.php#about-sec">About Us</a></li>
            <li class="menu-item"><a href="default.php#services">Our Services</a></li>
            <li class="menu-item"><a class="active" href="products.php">Our Products</a></li>
            <li class="menu-item"><a href="careers.php">Careers</a></li>
            <li class="menu-item"><a href="contact.php">Contact us</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Header -->
    <style>
      .tech-header { position:absolute;top:0;left:0;width:100%;z-index:100;background:transparent!important;border-bottom:1px solid rgba(255,255,255,0.05); }
      .tech-header .menu-area { background:transparent!important; }
      .tech-header .main-menu>ul>li>a { color:#fff!important; }
      .tech-header .main-menu>ul>li>a:hover { color:#a5b4fc!important; }
      .sticky-wrapper.sticky,.sticky-wrapper.sticky .menu-area,.sticky-wrapper.sticky .sticky-active { background:transparent!important;background-color:#000!important;box-shadow:none!important; }
      .sticky-wrapper.sticky .tech-header,.tech-header.sticky-active { background:rgba(3,2,10,0.95)!important;backdrop-filter:blur(10px);box-shadow:0 4px 30px rgba(0,0,0,0.5)!important; }
    </style>
    <header class="th-header header-layout5 tech-header">
      <div class="sticky-wrapper">
        <div class="menu-area">
          <div class="container th-container6">
            <div class="row align-items-center justify-content-between">
              <div class="col-auto">
                <div class="header-logo">
                  <a href="default.php"><img src="assets/img/logo-white.png" width="250px" alt="Triasoft" /></a>
                </div>
              </div>
              <div class="col-auto">
                <nav class="main-menu d-none d-xl-block">
                  <ul>
                    <li class="menu-item"><a href="default.php">Home</a></li>
                    <li class="menu-item"><a href="default.php#about-sec">About Us</a></li>
                    <li class="menu-item"><a href="default.php#services">Our Services</a></li>
                    <li class="menu-item"><a class="active" href="products.php">Products</a></li>
                    <li class="menu-item"><a href="careers.php">Careers</a></li>
                    <li class="menu-item"><a href="contact.php">Contact us</a></li>
                  </ul>
                </nav>
              </div>
              <div class="col-auto d-xl-none">
                <button type="button" class="th-menu-toggle style2">
                  <span class="line"></span><span class="line"></span><span class="line"></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- ==============================
         HERO
    ============================== -->
    <section class="prod-hero">
      <div class="orb orb-1"></div>
      <div class="orb orb-2"></div>
      <div class="orb orb-3"></div>
      <div class="grid-lines"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="hero-inner">
              <div class="hero-eyebrow">
                <span class="dot"></span>
                5 Industry-Ready Products
              </div>
              <h1>Software That Powers <span class="accent">Every Industry</span></h1>
              <p class="hero-sub">From hostel management to petroleum distribution — Triasoft delivers intelligent, scalable software built for real business challenges.</p>
              <div class="hero-stats">
                <div class="hero-stat-item">
                  <div class="num">5+</div>
                  <div class="label">Products</div>
                </div>
                <div class="hero-stat-item">
                  <div class="num">500+</div>
                  <div class="label">Active Users</div>
                </div>
                <div class="hero-stat-item">
                  <div class="num">99%</div>
                  <div class="label">Uptime SLA</div>
                </div>
                <div class="hero-stat-item">
                  <div class="num">24/7</div>
                  <div class="label">Support</div>
                </div>
              </div>
              <div class="hero-product-pills">
                <a href="#stayleap" class="hero-pill">
                  <span class="pip" style="background:#818cf8;"></span> StayLeap
                </a>
                <a href="#petroleum" class="hero-pill">
                  <span class="pip" style="background:#34d399;"></span> Petroleum ERP
                </a>
                <a href="#garage" class="hero-pill">
                  <span class="pip" style="background:#fbbf24;"></span> Garage Management
                </a>
                <a href="#warehouse" class="hero-pill">
                  <span class="pip" style="background:#38bdf8;"></span> Warehouse
                </a>
                <a href="#ecommerce" class="hero-pill">
                  <span class="pip" style="background:#f472b6;"></span> Ecommerce
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-5 d-none d-lg-block">
            <div class="hero-cards">
              <div class="floating-card fc-1">
                <div class="fc-icon" style="background:rgba(129,140,248,0.15);color:#818cf8;"><i class="fa-solid fa-bed"></i></div>
                <div class="fc-name">StayLeap</div>
                <div class="fc-desc">Hostel &amp; PG Management</div>
              </div>
              <div class="floating-card fc-2">
                <div class="fc-icon" style="background:rgba(56,189,248,0.15);color:#38bdf8;"><i class="fa-solid fa-warehouse"></i></div>
                <div class="fc-name">Stoccoz</div>
                <div class="fc-desc">Stock &amp; Supply Chain</div>
              </div>
              <div class="floating-card fc-3">
                <div class="fc-icon" style="background:rgba(251,191,36,0.15);color:#fbbf24;"><i class="fa-solid fa-car"></i></div>
                <div class="fc-name">Garage Management</div>
                <div class="fc-desc">Auto Service Centers</div>
              </div>
              <div class="floating-card fc-4">
                <div class="fc-icon" style="background:rgba(52,211,153,0.15);color:#34d399;"><i class="fa-solid fa-oil-well"></i></div>
                <div class="fc-name">Petroleum ERP</div>
                <div class="fc-desc">Fuel &amp; Energy Distribution</div>
              </div>
              <div class="floating-card fc-5">
                <div class="fc-icon" style="background:rgba(244,114,182,0.15);color:#f472b6;"><i class="fa-solid fa-store"></i></div>
                <div class="fc-name">Ecommerce Suite</div>
                <div class="fc-desc">Web &amp; Mobile Shopping</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ==============================
         STICKY PRODUCT NAV
    ============================== -->
    <div class="prod-nav-wrap">
      <div class="container">
        <div class="prod-nav">
          <a href="#stayleap" class="prod-nav-link active" data-target="stayleap">
            <span class="nav-dot" style="background:#818cf8;"></span> StayLeap
          </a>
          <a href="#petroleum" class="prod-nav-link" data-target="petroleum">
            <span class="nav-dot" style="background:#34d399;"></span> Petroleum ERP
          </a>
          <a href="#garage" class="prod-nav-link" data-target="garage">
            <span class="nav-dot" style="background:#fbbf24;"></span> Garage Management
          </a>
          <a href="#warehouse" class="prod-nav-link" data-target="warehouse">
            <span class="nav-dot" style="background:#38bdf8;"></span> Warehouse Management
          </a>
          <a href="#ecommerce" class="prod-nav-link" data-target="ecommerce">
            <span class="nav-dot" style="background:#f472b6;"></span> Ecommerce Suite
          </a>
        </div>
      </div>
    </div>

    <!-- ==============================
         1. STAYLEAP
    ============================== -->
    <section class="prod-section" id="stayleap">
      <div class="container">

        <!-- Number badge -->
        <div class="prod-number-badge" style="background:linear-gradient(135deg,#6366f1,#818cf8);">01</div>

        <!-- Header -->
        <div class="prod-header" style="background:linear-gradient(135deg,#130b8a 0%,#312e81 50%,#4a3fc0 100%);">
          <div class="ph-bg-grid"></div>
          <div class="ph-orb ph-orb-1"></div>
          <div class="ph-orb ph-orb-2"></div>
          <div class="ph-content">
            <span class="ph-badge">Hostel &amp; PG ERP</span>
            <h2>StayLeap</h2>
            <p class="ph-tagline">The complete digital backbone for hostel and paying-guest accommodation businesses — from tenant onboarding to rent collection, all in one platform.</p>
            <div class="ph-stats">
              <div class="ph-stat"><span class="n">100+</span><span class="l">Hostels Managed</span></div>
              <div class="ph-stat"><span class="n">5k+</span><span class="l">Tenant Records</span></div>
              <div class="ph-stat"><span class="n">Web + App</span><span class="l">Platform</span></div>
            </div>
          </div>
          <div class="ph-logo-wrap">
            <img src="./assets/img/stayleap.png" class="ph-logo" alt="StayLeap" />
          </div>
        </div>

        <!-- Intro -->
        <p class="prod-intro">
          StayLeap is a comprehensive ERP solution built exclusively for hostel and PG (Paying Guest) accommodation owners. It streamlines every aspect of operations — tenant onboarding, room allocation, billing, maintenance tracking, and communication — all under one intelligent roof. The seamless mobile app gives both owners and tenants a modern, real-time experience.
        </p>

        <!-- Why -->
        <div class="why-row">
          <div class="why-card">
            <div class="wc-icon" style="background:rgba(99,102,241,0.1);color:#6366f1;"><i class="fa-solid fa-bolt"></i></div>
            <h5>Instant Setup</h5>
            <p>Get your hostel live on StayLeap within hours. Import tenant data, configure rooms, and start billing the same day.</p>
          </div>
          <div class="why-card">
            <div class="wc-icon" style="background:rgba(99,102,241,0.1);color:#6366f1;"><i class="fa-solid fa-mobile-screen"></i></div>
            <h5>Mobile-First</h5>
            <p>Dedicated apps for owners and tenants — raise complaints, view invoices, and communicate in real time from any device.</p>
          </div>
          <div class="why-card">
            <div class="wc-icon" style="background:rgba(99,102,241,0.1);color:#6366f1;"><i class="fa-solid fa-shield-halved"></i></div>
            <h5>Secure &amp; Reliable</h5>
            <p>Role-based access, encrypted data storage, and automated daily backups protect every piece of your business data.</p>
          </div>
        </div>

        <!-- Features Split -->
        <div class="features-split">
          <div class="features-list-col">
            <div class="fs-title">Everything you need to run your hostel</div>
            <div class="features-list">
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(99,102,241,0.1);color:#6366f1;"><i class="fa-solid fa-users"></i></div>
                <div>
                  <h6>Tenant Management</h6>
                  <p>Full profiles with documents, move-in/out dates, emergency contacts, and a complete activity timeline per tenant.</p>
                </div>
              </div>
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(99,102,241,0.1);color:#6366f1;"><i class="fa-solid fa-bed"></i></div>
                <div>
                  <h6>Visual Room Allocation</h6>
                  <p>Interactive floor-plan view showing real-time occupancy across all floors. Drag-and-drop room assignments.</p>
                </div>
              </div>
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(99,102,241,0.1);color:#6366f1;"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                <div>
                  <h6>Automated Billing &amp; Reminders</h6>
                  <p>Auto-generate monthly invoices, track dues, and send WhatsApp/SMS/email reminders before due dates.</p>
                </div>
              </div>
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(99,102,241,0.1);color:#6366f1;"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                <div>
                  <h6>Maintenance &amp; Complaints</h6>
                  <p>Tenants raise requests via app; track assignment, resolution time, and satisfaction rating for every ticket.</p>
                </div>
              </div>
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(99,102,241,0.1);color:#6366f1;"><i class="fa-solid fa-chart-line"></i></div>
                <div>
                  <h6>Analytics Dashboard</h6>
                  <p>Occupancy rate, revenue trends, pending dues, and maintenance KPIs all on a live owner dashboard.</p>
                </div>
              </div>
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(99,102,241,0.1);color:#6366f1;"><i class="fa-solid fa-bell"></i></div>
                <div>
                  <h6>Smart Notifications</h6>
                  <p>Automated alerts for rent due, lease expiry, maintenance updates, and check-in / check-out events.</p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="info-panel" style="background:rgba(99,102,241,0.06);border:1px solid rgba(99,102,241,0.15);">
              <div class="ip-heading">Product at a Glance</div>
              <div class="ip-stat-grid">
                <div class="ip-stat" style="background:rgba(99,102,241,0.1);">
                  <span class="n" style="color:#818cf8;">∞</span>
                  <span class="l" style="color:#a5b4fc;">Tenants</span>
                </div>
                <div class="ip-stat" style="background:rgba(99,102,241,0.1);">
                  <span class="n" style="color:#818cf8;">Web</span>
                  <span class="l" style="color:#a5b4fc;">+ iOS + Android</span>
                </div>
                <div class="ip-stat" style="background:rgba(99,102,241,0.1);">
                  <span class="n" style="color:#818cf8;">24/7</span>
                  <span class="l" style="color:#a5b4fc;">Support</span>
                </div>
                <div class="ip-stat" style="background:rgba(99,102,241,0.1);">
                  <span class="n" style="color:#818cf8;">Cloud</span>
                  <span class="l" style="color:#a5b4fc;">Hosted</span>
                </div>
              </div>
              <div class="audience-section">
                <div class="audience-label">Best suited for</div>
                <div class="audience-chips">
                  <span class="audience-chip" style="background:rgba(99,102,241,0.12);color:#818cf8;"><i class="fa-solid fa-house"></i> PG Owners</span>
                  <span class="audience-chip" style="background:rgba(99,102,241,0.12);color:#818cf8;"><i class="fa-solid fa-building"></i> Hostel Chains</span>
                  <span class="audience-chip" style="background:rgba(99,102,241,0.12);color:#818cf8;"><i class="fa-solid fa-graduation-cap"></i> Student Housing</span>
                  <span class="audience-chip" style="background:rgba(99,102,241,0.12);color:#818cf8;"><i class="fa-solid fa-briefcase"></i> Corporate PGs</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="prod-cta-row">
          <a href="contact.php" class="btn-prim" style="background:linear-gradient(90deg,#4338ca,#6366f1);">
            <i class="fa-solid fa-phone"></i> Request a Demo
          </a>
          <a href="contact.php" class="btn-sec" style="color:#6366f1;">
            <i class="fa-regular fa-envelope"></i> Contact Sales
          </a>
          <span style="font-size:.85rem;color:#888;margin-left:auto;">Free trial available · No credit card required</span>
        </div>
      </div>
    </section>

    <!-- ==============================
         2. PETROLEUM ERP
    ============================== -->
    <section class="prod-section dark-section" id="petroleum">
      <div class="container">

        <div class="prod-number-badge" style="background:linear-gradient(135deg,#059669,#34d399);">02</div>

        <div class="prod-header" style="background:linear-gradient(135deg,#052e16 0%,#064e30 50%,#0a7a4c 100%);">
          <div class="ph-bg-grid"></div>
          <div class="ph-orb ph-orb-1"></div>
          <div class="ph-orb ph-orb-2"></div>
          <div class="ph-content">
            <span class="ph-badge">Industry ERP</span>
            <h2>Petroleum ERP</h2>
            <p class="ph-tagline">End-to-end enterprise resource planning built for the petroleum, fuel, and energy distribution industry — connecting production through retail in a single system.</p>
            <div class="ph-stats">
              <div class="ph-stat"><span class="n">Full-Chain</span><span class="l">Upstream to Retail</span></div>
              <div class="ph-stat"><span class="n">Real-Time</span><span class="l">Tank Monitoring</span></div>
              <div class="ph-stat"><span class="n">Multi-Site</span><span class="l">Operations</span></div>
            </div>
          </div>
          <div class="ph-logo-wrap">
            <img src="https://triassoftware.com/img/speedex.png" class="ph-logo" alt="Petroleum ERP" style="background:rgba(255,255,255,0.1);" />
          </div>
        </div>

        <p class="prod-intro">
          The Petroleum ERP connects every layer of your fuel and energy operations — from upstream extraction to downstream retail. It gives operations managers, logistics teams, and executives a single source of truth for production volumes, tank inventory, tanker routes, billing, HSE compliance, and consolidated financial reporting.
        </p>

        <div class="why-row">
          <div class="why-card">
            <div class="wc-icon" style="background:rgba(52,211,153,0.12);color:#34d399;"><i class="fa-solid fa-link"></i></div>
            <h5>Full Supply-Chain Visibility</h5>
            <p>Track every litre from source to pump. Real-time monitoring eliminates shrinkage, theft, and reconciliation errors.</p>
          </div>
          <div class="why-card">
            <div class="wc-icon" style="background:rgba(52,211,153,0.12);color:#34d399;"><i class="fa-solid fa-scale-balanced"></i></div>
            <h5>Compliance Built-In</h5>
            <p>Integrated HSE modules, digital audit trails, and automated regulatory reports keep your operations inspection-ready.</p>
          </div>
          <div class="why-card">
            <div class="wc-icon" style="background:rgba(52,211,153,0.12);color:#34d399;"><i class="fa-solid fa-gauge-high"></i></div>
            <h5>Executive Dashboard</h5>
            <p>Consolidated KPIs across all depots, retail outlets, and business units on a single live management screen.</p>
          </div>
        </div>

        <div class="features-split">
          <div class="features-list-col">
            <div class="fs-title">Modules built for the petroleum industry</div>
            <div class="features-list">
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(52,211,153,0.12);color:#34d399;"><i class="fa-solid fa-oil-well"></i></div>
                <div>
                  <h6>Production Management</h6>
                  <p>Track extraction volumes, plant downtime, shift logs, and quality testing results per well or facility.</p>
                </div>
              </div>
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(52,211,153,0.12);color:#34d399;"><i class="fa-solid fa-truck"></i></div>
                <div>
                  <h6>Distribution &amp; Logistics</h6>
                  <p>Schedule tanker routes, assign drivers, track GPS-live deliveries, and generate ePOD documents automatically.</p>
                </div>
              </div>
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(52,211,153,0.12);color:#34d399;"><i class="fa-solid fa-warehouse"></i></div>
                <div>
                  <h6>Tank Level Monitoring</h6>
                  <p>Real-time level gauges across all storage tanks with automated low-stock and overflow alerts.</p>
                </div>
              </div>
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(52,211,153,0.12);color:#34d399;"><i class="fa-solid fa-file-contract"></i></div>
                <div>
                  <h6>Sales &amp; Contract Billing</h6>
                  <p>Manage bulk fuel contracts, dynamic pricing, dealer ledgers, and automated invoice dispatch at scale.</p>
                </div>
              </div>
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(52,211,153,0.12);color:#34d399;"><i class="fa-solid fa-shield-halved"></i></div>
                <div>
                  <h6>HSE Compliance</h6>
                  <p>Digital safety checklists, incident reporting, permit-to-work workflows, and automated statutory submissions.</p>
                </div>
              </div>
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(52,211,153,0.12);color:#34d399;"><i class="fa-solid fa-chart-pie"></i></div>
                <div>
                  <h6>Financial Consolidation</h6>
                  <p>Multi-entity P&amp;L, cost-centre budgeting, and one-click consolidated reports across all business units.</p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="info-panel" style="background:rgba(52,211,153,0.05);border:1px solid rgba(52,211,153,0.15);">
              <div class="ip-heading" style="color:#fff;">Product at a Glance</div>
              <div class="ip-stat-grid">
                <div class="ip-stat" style="background:rgba(52,211,153,0.1);">
                  <span class="n" style="color:#34d399;">Multi</span>
                  <span class="l" style="color:#6ee7b7;">Site Support</span>
                </div>
                <div class="ip-stat" style="background:rgba(52,211,153,0.1);">
                  <span class="n" style="color:#34d399;">IoT</span>
                  <span class="l" style="color:#6ee7b7;">Tank Integration</span>
                </div>
                <div class="ip-stat" style="background:rgba(52,211,153,0.1);">
                  <span class="n" style="color:#34d399;">GPS</span>
                  <span class="l" style="color:#6ee7b7;">Live Tracking</span>
                </div>
                <div class="ip-stat" style="background:rgba(52,211,153,0.1);">
                  <span class="n" style="color:#34d399;">HSE</span>
                  <span class="l" style="color:#6ee7b7;">Compliance Module</span>
                </div>
              </div>
              <div class="audience-section">
                <div class="audience-label" style="color:rgba(255,255,255,0.45);">Best suited for</div>
                <div class="audience-chips">
                  <span class="audience-chip" style="background:rgba(52,211,153,0.12);color:#34d399;"><i class="fa-solid fa-industry"></i> Fuel Distributors</span>
                  <span class="audience-chip" style="background:rgba(52,211,153,0.12);color:#34d399;"><i class="fa-solid fa-gas-pump"></i> Petrol Stations</span>
                  <span class="audience-chip" style="background:rgba(52,211,153,0.12);color:#34d399;"><i class="fa-solid fa-ship"></i> Oil &amp; Gas Companies</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="prod-cta-row" style="border-top-color:rgba(255,255,255,0.08);">
          <a href="contact.php" class="btn-prim" style="background:linear-gradient(90deg,#064e30,#0a7a4c);">
            <i class="fa-solid fa-phone"></i> Request a Demo
          </a>
          <a href="contact.php" class="btn-sec" style="color:#34d399;">
            <i class="fa-regular fa-envelope"></i> Contact Sales
          </a>
          <span style="font-size:.85rem;color:rgba(255,255,255,0.35);margin-left:auto;">Custom deployment available</span>
        </div>
      </div>
    </section>

    <!-- ==============================
         3. GARAGE MANAGEMENT
    ============================== -->
    <section class="prod-section" id="garage">
      <div class="container">

        <div class="prod-number-badge" style="background:linear-gradient(135deg,#b45309,#f59e0b);">03</div>

        <div class="prod-header" style="background:linear-gradient(135deg,#78350f 0%,#92400e 50%,#d97706 100%);">
          <div class="ph-bg-grid"></div>
          <div class="ph-orb ph-orb-1"></div>
          <div class="ph-orb ph-orb-2"></div>
          <div class="ph-content">
            <span class="ph-badge">Auto &amp; Garage</span>
            <h2>Garage Management System</h2>
            <p class="ph-tagline">The all-in-one digital platform that eliminates paperwork from your auto-service center — job cards, parts inventory, billing, and customer communication in one place.</p>
            <div class="ph-stats">
              <div class="ph-stat"><span class="n">Zero</span><span class="l">Paperwork</span></div>
              <div class="ph-stat"><span class="n">Live</span><span class="l">Job Tracking</span></div>
              <div class="ph-stat"><span class="n">Auto</span><span class="l">SMS Updates</span></div>
            </div>
          </div>
          <div class="ph-logo-wrap">
            <img src="./assets/img/garage.png" class="ph-logo" alt="Garage Management System" style="background:rgba(255,255,255,0.12);" />
          </div>
        </div>

        <p class="prod-intro">
          The Garage Management System (GMS) is a centralised digital platform built specifically for vehicle service centres, garages, and automotive workshops. It replaces all paper-based workflows and brings customer intake, job cards, spare parts tracking, billing, and service history into a single easy-to-use system — helping your team work faster and your customers stay informed.
        </p>

        <div class="why-row">
          <div class="why-card">
            <div class="wc-icon" style="background:rgba(245,158,11,0.1);color:#f59e0b;"><i class="fa-solid fa-file-circle-check"></i></div>
            <h5>Digital Job Cards</h5>
            <p>Create, assign, and track service jobs digitally from vehicle arrival to customer delivery — no paper, no lost records.</p>
          </div>
          <div class="why-card">
            <div class="wc-icon" style="background:rgba(245,158,11,0.1);color:#f59e0b;"><i class="fa-solid fa-bell"></i></div>
            <h5>Real-Time Customer Updates</h5>
            <p>Automated SMS and app notifications keep customers informed about their vehicle's service progress at every stage.</p>
          </div>
          <div class="why-card">
            <div class="wc-icon" style="background:rgba(245,158,11,0.1);color:#f59e0b;"><i class="fa-solid fa-boxes-stacked"></i></div>
            <h5>Smart Parts Inventory</h5>
            <p>Parts are auto-debited from stock when added to a job card. Get reorder alerts before you run out of critical spares.</p>
          </div>
        </div>

        <div class="features-split">
          <div class="features-list-col">
            <div class="fs-title">Every tool your workshop needs</div>
            <div class="features-list">
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(245,158,11,0.1);color:#f59e0b;"><i class="fa-solid fa-car"></i></div>
                <div>
                  <h6>Vehicle History Records</h6>
                  <p>Complete service history per vehicle — past jobs, parts replaced, mileage, and linked owner contacts.</p>
                </div>
              </div>
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(245,158,11,0.1);color:#f59e0b;"><i class="fa-solid fa-clipboard-list"></i></div>
                <div>
                  <h6>Job Card Lifecycle</h6>
                  <p>Multi-stage workflow from intake to bay assignment, parts issuance, QC check, and final delivery sign-off.</p>
                </div>
              </div>
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(245,158,11,0.1);color:#f59e0b;"><i class="fa-solid fa-boxes-stacked"></i></div>
                <div>
                  <h6>Spare Parts &amp; Inventory</h6>
                  <p>Track stock levels, purchase orders, supplier ledgers, and automatic deduction from job cards per transaction.</p>
                </div>
              </div>
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(245,158,11,0.1);color:#f59e0b;"><i class="fa-solid fa-receipt"></i></div>
                <div>
                  <h6>One-Click Billing</h6>
                  <p>Auto-populate invoices with labour charges, parts costs, and applicable taxes — print or share digitally.</p>
                </div>
              </div>
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(245,158,11,0.1);color:#f59e0b;"><i class="fa-solid fa-user-group"></i></div>
                <div>
                  <h6>Customer CRM</h6>
                  <p>Build loyal customer profiles with service history, upcoming service reminders, and follow-up scheduling.</p>
                </div>
              </div>
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(245,158,11,0.1);color:#f59e0b;"><i class="fa-solid fa-gauge-high"></i></div>
                <div>
                  <h6>Workshop Dashboard</h6>
                  <p>Live bay occupancy, pending jobs, technician workload, and daily revenue summary — all in one view.</p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="info-panel" style="background:rgba(245,158,11,0.05);border:1px solid rgba(245,158,11,0.15);">
              <div class="ip-heading">Product at a Glance</div>
              <div class="ip-stat-grid">
                <div class="ip-stat" style="background:rgba(245,158,11,0.08);">
                  <span class="n" style="color:#f59e0b;">Digital</span>
                  <span class="l" style="color:#fbbf24;">Job Cards</span>
                </div>
                <div class="ip-stat" style="background:rgba(245,158,11,0.08);">
                  <span class="n" style="color:#f59e0b;">Auto</span>
                  <span class="l" style="color:#fbbf24;">SMS Alerts</span>
                </div>
                <div class="ip-stat" style="background:rgba(245,158,11,0.08);">
                  <span class="n" style="color:#f59e0b;">GST</span>
                  <span class="l" style="color:#fbbf24;">Ready Invoices</span>
                </div>
                <div class="ip-stat" style="background:rgba(245,158,11,0.08);">
                  <span class="n" style="color:#f59e0b;">Multi</span>
                  <span class="l" style="color:#fbbf24;">Bay Support</span>
                </div>
              </div>
              <div class="audience-section">
                <div class="audience-label">Best suited for</div>
                <div class="audience-chips">
                  <span class="audience-chip" style="background:rgba(245,158,11,0.1);color:#f59e0b;"><i class="fa-solid fa-car"></i> Car Service Centers</span>
                  <span class="audience-chip" style="background:rgba(245,158,11,0.1);color:#f59e0b;"><i class="fa-solid fa-motorcycle"></i> Bike Workshops</span>
                  <span class="audience-chip" style="background:rgba(245,158,11,0.1);color:#f59e0b;"><i class="fa-solid fa-truck"></i> Fleet Garages</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="prod-cta-row">
          <a href="contact.php" class="btn-prim" style="background:linear-gradient(90deg,#92400e,#d97706);">
            <i class="fa-solid fa-phone"></i> Request a Demo
          </a>
          <a href="contact.php" class="btn-sec" style="color:#b45309;">
            <i class="fa-regular fa-envelope"></i> Contact Sales
          </a>
          <span style="font-size:.85rem;color:#888;margin-left:auto;">Includes free onboarding support</span>
        </div>
      </div>
    </section>

    <!-- ==============================
         4. WAREHOUSE MANAGEMENT
    ============================== -->
    <section class="prod-section dark-section" id="warehouse">
      <div class="container">

        <div class="prod-number-badge" style="background:linear-gradient(135deg,#0e7490,#38bdf8);">04</div>

        <div class="prod-header" style="background:linear-gradient(135deg,#0c4a6e 0%,#0c5a6e 50%,#0891b2 100%);">
          <div class="ph-bg-grid"></div>
          <div class="ph-orb ph-orb-1"></div>
          <div class="ph-orb ph-orb-2"></div>
          <div class="ph-content">
            <span class="ph-badge">Warehouse WMS</span>
            <h2>Stoccoz</h2>
            <p class="ph-tagline">Total visibility and control over your warehouse — from goods receipt through dispatch, with barcode scanning, order automation, and live inventory tracking.</p>
            <div class="ph-stats">
              <div class="ph-stat"><span class="n">Real-Time</span><span class="l">Stock Visibility</span></div>
              <div class="ph-stat"><span class="n">Barcode</span><span class="l">&amp; QR Support</span></div>
              <div class="ph-stat"><span class="n">Multi-Location</span><span class="l">Warehouses</span></div>
            </div>
          </div>
          <div class="ph-logo-wrap">
            <img src="./assets/img/Stoccoz.png" class="ph-logo" alt="Warehouse Management" style="background:rgba(255,255,255,0.1);" />
          </div>
        </div>

        <p class="prod-intro">
          The Warehouse Management Software (WMS) is a powerful, scalable system giving businesses complete control over warehouse operations. Every movement — receiving, put-away, picking, packing, and shipping — is tracked in real time. Reduce errors, eliminate stock discrepancies, and fulfil orders faster with intelligent automation and seamless barcode integration.
        </p>

        <div class="why-row">
          <div class="why-card">
            <div class="wc-icon" style="background:rgba(56,189,248,0.12);color:#38bdf8;"><i class="fa-solid fa-eye"></i></div>
            <h5>Zero Blind Spots</h5>
            <p>Every item in your warehouse is tracked by location, lot, batch, or serial number — always know exactly what you have and where.</p>
          </div>
          <div class="why-card">
            <div class="wc-icon" style="background:rgba(56,189,248,0.12);color:#38bdf8;"><i class="fa-solid fa-robot"></i></div>
            <h5>Order Automation</h5>
            <p>Auto-generate purchase orders at reorder points, route picking tasks to staff, and send shipping notifications without manual effort.</p>
          </div>
          <div class="why-card">
            <div class="wc-icon" style="background:rgba(56,189,248,0.12);color:#38bdf8;"><i class="fa-solid fa-plug"></i></div>
            <h5>Seamless Integration</h5>
            <p>Connect with your existing accounting software, e-commerce platforms, and courier APIs for end-to-end supply chain automation.</p>
          </div>
        </div>

        <div class="features-split">
          <div class="features-list-col">
            <div class="fs-title">Complete warehouse control suite</div>
            <div class="features-list">
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(56,189,248,0.12);color:#38bdf8;"><i class="fa-solid fa-cubes"></i></div>
                <div>
                  <h6>Real-Time Inventory Control</h6>
                  <p>Live stock levels per SKU, per bin, per warehouse — with low-stock alerts and automated reorder triggers.</p>
                </div>
              </div>
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(56,189,248,0.12);color:#38bdf8;"><i class="fa-solid fa-arrow-right-to-bracket"></i></div>
                <div>
                  <h6>Inbound &amp; Outbound Workflows</h6>
                  <p>Manage goods receipt, quality inspection, put-away, pick lists, packing, and dispatch — all with digital sign-off.</p>
                </div>
              </div>
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(56,189,248,0.12);color:#38bdf8;"><i class="fa-solid fa-qrcode"></i></div>
                <div>
                  <h6>Barcode &amp; QR Scanning</h6>
                  <p>Use any Android device as a handheld scanner — eliminate manual entry errors and speed up all warehouse movements.</p>
                </div>
              </div>
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(56,189,248,0.12);color:#38bdf8;"><i class="fa-solid fa-file-lines"></i></div>
                <div>
                  <h6>Purchase &amp; Sales Orders</h6>
                  <p>Automate PO creation, vendor acknowledgment, GRN matching, and inter-warehouse transfer requests.</p>
                </div>
              </div>
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(56,189,248,0.12);color:#38bdf8;"><i class="fa-solid fa-ship"></i></div>
                <div>
                  <h6>Shipment &amp; Delivery Tracking</h6>
                  <p>Track outbound shipments, generate packing slips and delivery challans, and share live tracking links.</p>
                </div>
              </div>
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(56,189,248,0.12);color:#38bdf8;"><i class="fa-solid fa-table-columns"></i></div>
                <div>
                  <h6>Reports &amp; Analytics</h6>
                  <p>Stock aging, inventory turnover, order fill rate, and a custom report builder for any metric you need.</p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="info-panel" style="background:rgba(56,189,248,0.05);border:1px solid rgba(56,189,248,0.15);">
              <div class="ip-heading" style="color:#fff;">Product at a Glance</div>
              <div class="ip-stat-grid">
                <div class="ip-stat" style="background:rgba(56,189,248,0.1);">
                  <span class="n" style="color:#38bdf8;">Multi</span>
                  <span class="l" style="color:#7dd3fc;">Warehouse</span>
                </div>
                <div class="ip-stat" style="background:rgba(56,189,248,0.1);">
                  <span class="n" style="color:#38bdf8;">FIFO</span>
                  <span class="l" style="color:#7dd3fc;">&amp; FEFO Support</span>
                </div>
                <div class="ip-stat" style="background:rgba(56,189,248,0.1);">
                  <span class="n" style="color:#38bdf8;">API</span>
                  <span class="l" style="color:#7dd3fc;">Integrations</span>
                </div>
                <div class="ip-stat" style="background:rgba(56,189,248,0.1);">
                  <span class="n" style="color:#38bdf8;">Cloud</span>
                  <span class="l" style="color:#7dd3fc;">+ On-Premise</span>
                </div>
              </div>
              <div class="audience-section">
                <div class="audience-label" style="color:rgba(255,255,255,0.45);">Best suited for</div>
                <div class="audience-chips">
                  <span class="audience-chip" style="background:rgba(56,189,248,0.12);color:#38bdf8;"><i class="fa-solid fa-box"></i> Distributors</span>
                  <span class="audience-chip" style="background:rgba(56,189,248,0.12);color:#38bdf8;"><i class="fa-solid fa-industry"></i> Manufacturers</span>
                  <span class="audience-chip" style="background:rgba(56,189,248,0.12);color:#38bdf8;"><i class="fa-solid fa-store"></i> Retail Chains</span>
                  <span class="audience-chip" style="background:rgba(56,189,248,0.12);color:#38bdf8;"><i class="fa-solid fa-truck-ramp-box"></i> 3PL Providers</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="prod-cta-row" style="border-top-color:rgba(255,255,255,0.08);">
          <a href="https://stoccoz.com" class="btn-prim" style="background:linear-gradient(90deg,#0c5a6e,#0891b2);">
            <i class="fa-solid fa-phone"></i> More Details
          </a>
          <a href="contact.php" class="btn-sec" style="color:#38bdf8;">
            <i class="fa-regular fa-envelope"></i> Contact Sales
          </a>
          <span style="font-size:.85rem;color:rgba(255,255,255,0.35);margin-left:auto;">On-premise &amp; cloud options available</span>
        </div>
      </div>
    </section>

    <!-- ==============================
         5. ECOMMERCE
    ============================== -->
    <section class="prod-section" id="ecommerce">
      <div class="container">

        <div class="prod-number-badge" style="background:linear-gradient(135deg,#9d174d,#ec4899);">05</div>

        <div class="prod-header" style="background:linear-gradient(135deg,#500724 0%,#831843 50%,#db2777 100%);">
          <div class="ph-bg-grid"></div>
          <div class="ph-orb ph-orb-1"></div>
          <div class="ph-orb ph-orb-2"></div>
          <div class="ph-content">
            <span class="ph-badge">E-Commerce Platform</span>
            <h2>Ecommerce Web &amp; Mobile Apps</h2>
            <p class="ph-tagline">A complete, conversion-focused online store platform — manage your web store and native iOS/Android app from one admin panel, with built-in payments, SEO, and analytics.</p>
            <div class="ph-stats">
              <div class="ph-stat"><span class="n">Web</span><span class="l">+ iOS + Android</span></div>
              <div class="ph-stat"><span class="n">1 Panel</span><span class="l">All Channels</span></div>
              <div class="ph-stat"><span class="n">UPI+Card</span><span class="l">+Wallet+COD</span></div>
            </div>
          </div>
          <div class="ph-logo-wrap">
            <img src="./assets/img/Ecommerce.png" class="ph-logo" alt="Ecommerce" style="background:rgba(255,255,255,0.12);" />
          </div>
        </div>

        <p class="prod-intro">
          Triasoft's E-Commerce Web and Mobile Apps deliver a fully integrated digital shopping platform for businesses ready to sell online. Built for performance and conversion, the platform works seamlessly across web browsers and native iOS and Android apps — giving your customers a fast, secure, and personalised shopping experience while giving you one dashboard to manage everything.
        </p>

        <div class="why-row">
          <div class="why-card">
            <div class="wc-icon" style="background:rgba(236,72,153,0.1);color:#ec4899;"><i class="fa-solid fa-layer-group"></i></div>
            <h5>One Platform, All Channels</h5>
            <p>Manage your website and mobile apps from a single admin. Update products, prices, and promotions everywhere at once.</p>
          </div>
          <div class="why-card">
            <div class="wc-icon" style="background:rgba(236,72,153,0.1);color:#ec4899;"><i class="fa-solid fa-rocket"></i></div>
            <h5>Built to Convert</h5>
            <p>Optimised page speed, smart product recommendations, abandoned cart recovery, and personalised offers that drive sales.</p>
          </div>
          <div class="why-card">
            <div class="wc-icon" style="background:rgba(236,72,153,0.1);color:#ec4899;"><i class="fa-solid fa-lock"></i></div>
            <h5>Secure Payments</h5>
            <p>PCI-DSS compliant payment flow with support for UPI, cards, wallets, net banking, EMI, and cash on delivery.</p>
          </div>
        </div>

        <div class="features-split">
          <div class="features-list-col">
            <div class="fs-title">Everything in your online store toolkit</div>
            <div class="features-list">
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(236,72,153,0.1);color:#ec4899;"><i class="fa-solid fa-store"></i></div>
                <div>
                  <h6>Multi-Platform Store</h6>
                  <p>Responsive web storefront plus native iOS and Android apps all managed from a single product catalogue.</p>
                </div>
              </div>
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(236,72,153,0.1);color:#ec4899;"><i class="fa-solid fa-list"></i></div>
                <div>
                  <h6>Rich Product Catalogue</h6>
                  <p>Unlimited products, categories, variants (size/colour/material), bulk pricing tiers, and rich media galleries.</p>
                </div>
              </div>
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(236,72,153,0.1);color:#ec4899;"><i class="fa-solid fa-credit-card"></i></div>
                <div>
                  <h6>Integrated Payments</h6>
                  <p>Multi-gateway support — UPI, Razorpay, Paytm, Stripe, and COD — with automatic reconciliation and refunds.</p>
                </div>
              </div>
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(236,72,153,0.1);color:#ec4899;"><i class="fa-solid fa-box"></i></div>
                <div>
                  <h6>Order Management</h6>
                  <p>Full order lifecycle — placement, processing, fulfilment, tracking, returns, and refunds with customer self-service.</p>
                </div>
              </div>
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(236,72,153,0.1);color:#ec4899;"><i class="fa-solid fa-tag"></i></div>
                <div>
                  <h6>Promotions &amp; Loyalty</h6>
                  <p>Coupon codes, flash sales, buy-X-get-Y bundles, referral programs, and points-based loyalty rewards.</p>
                </div>
              </div>
              <div class="feat-row">
                <div class="feat-icon" style="background:rgba(236,72,153,0.1);color:#ec4899;"><i class="fa-solid fa-magnifying-glass-chart"></i></div>
                <div>
                  <h6>SEO &amp; Marketing Analytics</h6>
                  <p>Built-in meta editor, sitemap generation, conversion tracking, and Google Analytics / Facebook Pixel integration.</p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="info-panel" style="background:rgba(236,72,153,0.05);border:1px solid rgba(236,72,153,0.15);">
              <div class="ip-heading">Product at a Glance</div>
              <div class="ip-stat-grid">
                <div class="ip-stat" style="background:rgba(236,72,153,0.08);">
                  <span class="n" style="color:#ec4899;">PWA</span>
                  <span class="l" style="color:#f9a8d4;">Web App</span>
                </div>
                <div class="ip-stat" style="background:rgba(236,72,153,0.08);">
                  <span class="n" style="color:#ec4899;">Native</span>
                  <span class="l" style="color:#f9a8d4;">iOS &amp; Android</span>
                </div>
                <div class="ip-stat" style="background:rgba(236,72,153,0.08);">
                  <span class="n" style="color:#ec4899;">Multi</span>
                  <span class="l" style="color:#f9a8d4;">Currency &amp; Language</span>
                </div>
                <div class="ip-stat" style="background:rgba(236,72,153,0.08);">
                  <span class="n" style="color:#ec4899;">PCI</span>
                  <span class="l" style="color:#f9a8d4;">DSS Compliant</span>
                </div>
              </div>
              <div class="audience-section">
                <div class="audience-label">Best suited for</div>
                <div class="audience-chips">
                  <span class="audience-chip" style="background:rgba(236,72,153,0.1);color:#ec4899;"><i class="fa-solid fa-shirt"></i> Fashion &amp; Retail</span>
                  <span class="audience-chip" style="background:rgba(236,72,153,0.1);color:#ec4899;"><i class="fa-solid fa-utensils"></i> Food &amp; Grocery</span>
                  <span class="audience-chip" style="background:rgba(236,72,153,0.1);color:#ec4899;"><i class="fa-solid fa-laptop"></i> Electronics</span>
                  <span class="audience-chip" style="background:rgba(236,72,153,0.1);color:#ec4899;"><i class="fa-solid fa-building-columns"></i> B2B Wholesale</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="prod-cta-row">
          <a href="contact.php" class="btn-prim" style="background:linear-gradient(90deg,#831843,#db2777);">
            <i class="fa-solid fa-phone"></i> Request a Demo
          </a>
          <a href="contact.php" class="btn-sec" style="color:#ec4899;">
            <i class="fa-regular fa-envelope"></i> Contact Sales
          </a>
          <span style="font-size:.85rem;color:#888;margin-left:auto;">Launch your store in 2 weeks</span>
        </div>
      </div>
    </section>

    <!-- ==============================
         FINAL CTA
    ============================== -->
    <section class="final-cta">
      <div class="fc-orb fc-orb-1"></div>
      <div class="fc-orb fc-orb-2"></div>
      <div class="fc-inner container">
        <div class="hero-eyebrow" style="display:inline-flex;margin-bottom:1.5rem;">
          <span class="dot"></span> Ready to get started?
        </div>
        <h2>Transform Your Business<br>with the Right Software</h2>
        <p>Talk to our product specialists today and get a free consultation on which Triasoft solution fits your needs.</p>
        <div class="cta-btns">
          <a href="contact.php" class="btn-white">
            <i class="fa-solid fa-headset"></i> Talk to Our Team
          </a>
          <a href="contact.php" class="btn-ghost">
            <i class="fa-regular fa-calendar"></i> Book a Free Demo
          </a>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <style>
      .new-footer-sec { background-color:#0d044aff;background-image:radial-gradient(circle at 50% 100%,rgba(20,20,70,0.45) 0%,transparent 60%);border-top:1px solid rgba(255,255,255,0.05);color:rgba(255,255,255,0.7);padding-top:80px;position:relative;overflow:hidden; }
      .new-footer-sec .widget_title { color:#fff;font-size:1.25rem;margin-bottom:25px;font-weight:600; }
      .new-footer-sec .about-text { color:rgba(255,255,255,0.7);margin-top:20px;margin-bottom:25px;line-height:1.6; }
      .new-footer-sec .th-social a { background:rgba(255,255,255,0.05);color:#fff;width:40px;height:40px;display:inline-flex;align-items:center;justify-content:center;border-radius:50%;margin-right:10px;border:1px solid rgba(255,255,255,0.1);transition:all .4s ease; }
      .new-footer-sec .th-social a:hover { background:#6366f1;border-color:#6366f1;transform:translateY(-3px);box-shadow:0 5px 15px rgba(99,102,241,0.4); }
      .new-footer-sec .menu { padding:0;margin:0; }
      .new-footer-sec .menu li { list-style:none;margin-bottom:12px; }
      .new-footer-sec .menu li a { color:rgba(255,255,255,0.7);text-decoration:none;transition:all .3s ease;display:inline-flex;align-items:center; }
      .new-footer-sec .menu li a:hover { color:#a5b4fc;transform:translateX(5px); }
      .new-footer-sec .menu li a::before { content:'\f105';font-family:'Font Awesome 6 Free';font-weight:900;margin-right:8px;font-size:.8rem;color:#6366f1;opacity:.5;transition:all .3s ease; }
      .new-footer-sec .menu li a:hover::before { opacity:1;color:#a5b4fc; }
      .new-footer-sec .info-box_text { display:flex;align-items:flex-start;margin-bottom:20px; }
      .new-footer-sec .info-box_text .icon { width:40px;height:40px;background:rgba(99,102,241,0.1);border-radius:50%;display:flex;align-items:center;justify-content:center;margin-right:15px;flex-shrink:0;border:1px solid rgba(99,102,241,0.2);color:#6366f1; }
      .new-footer-sec .info-box_text .icon img { width:16px;filter:brightness(0) invert(1); }
      .new-footer-sec .info-box_text .details p { margin:0;line-height:1.6; }
      .new-footer-sec .info-box_link { color:rgba(255,255,255,0.7);text-decoration:none;transition:color .3s ease; }
      .new-footer-sec .info-box_link:hover { color:#a5b4fc; }
      .new-footer-sec .copyright-wrap { border-top:1px solid rgba(255,255,255,0.1);padding:25px 0;margin-top:50px;background:rgba(0,0,0,0.2); }
      .new-footer-sec .copyright-text { margin:0;color:rgba(255,255,255,0.6); }
      .new-footer-sec .copyright-text a { color:#fff;font-weight:600;text-decoration:none; }
      .new-footer-sec .copyright-text a:hover { color:#6366f1; }
      .new-footer-sec .footer-links ul { list-style:none;padding:0;margin:0;display:flex;justify-content:flex-end;gap:20px; }
      .new-footer-sec .footer-links a { color:rgba(255,255,255,0.6);text-decoration:none;transition:color .3s ease; }
      .new-footer-sec .footer-links a:hover { color:#a5b4fc; }
      @media(max-width:991px){ .new-footer-sec .footer-links ul{ justify-content:center;margin-top:15px; } .new-footer-sec .copyright-text{ text-align:center; } .new-footer-sec{ padding-top:60px; } .new-footer-sec .widget{ margin-bottom:40px; } }
    </style>
    <footer class="new-footer-sec">
      <div class="widget-area">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-md-6 col-xl-4">
              <div class="widget footer-widget">
                <div class="th-widget-about">
                  <div class="about-logo"><a href="default.php"><img src="assets/img/logo-white.png" alt="Triasoft" /></a></div>
                  <p class="about-text">Empower businesses with innovative, scalable, and intelligent software solutions that drive efficiency, growth, and digital transformation.</p>
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
                    <li><a href="default.php#about-sec">About us</a></li>
                    <li><a href="default.php#services">Our Services</a></li>
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
                    </div>
                  </div>
                  <div class="info-box_text">
                    <div class="icon"><img src="assets/img/icon/location-dot.svg" alt="img" /></div>
                    <div class="details">
                      <p><a href="https://maps.app.goo.gl/QyH2fFoJ9fii93mt7" target="_blank">Sai Arcade, Panamaram, Wayanad, Kerala</a></p>
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
              <p class="copyright-text">Copyright &copy; 2025 <a href="default.php">Triasoft</a>. All rights reserved.</p>
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

    <!-- Scroll To Top -->
    <div class="scroll-top">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
          style="transition:stroke-dashoffset 10ms linear 0s;stroke-dasharray:307.919,307.919;stroke-dashoffset:307.919;"></path>
      </svg>
    </div>

    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
      /* Sticky product nav active state on scroll */
      (function(){
        var sections = ['stayleap','petroleum','garage','warehouse','ecommerce'];
        var navLinks = document.querySelectorAll('.prod-nav-link');
        var heroLinks = document.querySelectorAll('.hero-pill');

        function setActive(id){
          navLinks.forEach(function(l){
            l.classList.toggle('active', l.dataset.target === id);
          });
        }

        window.addEventListener('scroll', function(){
          var scrollY = window.scrollY + 160;
          var current = sections[0];
          sections.forEach(function(id){
            var el = document.getElementById(id);
            if(el && el.offsetTop <= scrollY){ current = id; }
          });
          setActive(current);
        });

        /* smooth scroll for hero pills and nav links */
        document.querySelectorAll('a[href^="#"]').forEach(function(a){
          a.addEventListener('click', function(e){
            var target = document.querySelector(a.getAttribute('href'));
            if(target){
              e.preventDefault();
              var offset = target.getBoundingClientRect().top + window.scrollY - 70;
              window.scrollTo({ top: offset, behavior: 'smooth' });
            }
          });
        });
      })();
    </script>
  </body>
</html>
