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

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css" />
    <!-- Swiper -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />

    <style>
      /* ====== Products Page Styles ====== */
      :root {
        --prod-radius: 24px;
      }

      /* ------- Hero ------- */
      .products-hero {
        background: linear-gradient(135deg, #0f0a6e 0%, #1c15a8 60%, #4a3fc0 100%);
        padding: 100px 0 80px;
        position: relative;
        overflow: hidden;
      }
      .products-hero::before {
        content: '';
        position: absolute;
        inset: 0;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.04'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
      }
      .products-hero .hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
        color: #fff;
      }
      .products-hero .hero-content .sub-badge {
        display: inline-block;
        background: rgba(255,255,255,0.15);
        border: 1px solid rgba(255,255,255,0.25);
        color: #fff;
        font-size: 0.8rem;
        font-weight: 600;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        padding: 6px 18px;
        border-radius: 50px;
        margin-bottom: 1.2rem;
      }
      .products-hero .hero-content h1 {
        font-size: clamp(2rem, 5vw, 3.5rem);
        font-weight: 800;
        color: #fff;
        margin-bottom: 1rem;
        line-height: 1.15;
      }
      .products-hero .hero-content p {
        font-size: 1.1rem;
        color: rgba(255,255,255,0.82);
        max-width: 560px;
        margin: 0 auto;
        line-height: 1.7;
      }

      /* ------- Product Section ------- */
      .product-detail-section {
        padding: 90px 0;
        border-bottom: 1px solid #f0f0f0;
      }
      .product-detail-section:last-child {
        border-bottom: none;
      }
      .product-detail-section.alt-bg {
        background: #f8f7ff;
      }

      /* product banner strip */
      .product-banner {
        border-radius: var(--prod-radius);
        padding: 50px 48px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 2rem;
        position: relative;
        overflow: hidden;
        min-height: 220px;
        margin-bottom: 3.5rem;
        box-shadow: 0 12px 48px rgba(0,0,0,0.12);
      }
      .product-banner .banner-text {
        flex: 1;
        z-index: 2;
        position: relative;
      }
      .product-banner .banner-badge {
        display: inline-block;
        background: rgba(255,255,255,0.22);
        border: 1px solid rgba(255,255,255,0.35);
        color: #fff;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        padding: 4px 14px;
        border-radius: 50px;
        margin-bottom: 1rem;
      }
      .product-banner .banner-text h2 {
        font-size: clamp(1.5rem, 3vw, 2.4rem);
        font-weight: 800;
        color: #fff;
        margin-bottom: 0.6rem;
        line-height: 1.2;
      }
      .product-banner .banner-text p {
        color: rgba(255,255,255,0.85);
        font-size: 1rem;
        line-height: 1.6;
        margin: 0;
      }
      .product-banner .banner-logo {
        width: 140px;
        height: 140px;
        object-fit: contain;
        background: rgba(255,255,255,0.18);
        border-radius: 28px;
        padding: 16px;
        flex-shrink: 0;
        z-index: 2;
        position: relative;
      }
      .product-banner .banner-bg-shape {
        position: absolute;
        right: -40px;
        top: -40px;
        width: 260px;
        height: 260px;
        border-radius: 50%;
        background: rgba(255,255,255,0.06);
        z-index: 1;
      }
      .product-banner .banner-bg-shape2 {
        position: absolute;
        left: -20px;
        bottom: -50px;
        width: 160px;
        height: 160px;
        border-radius: 50%;
        background: rgba(255,255,255,0.04);
        z-index: 1;
      }

      /* description */
      .product-description {
        font-size: 1.05rem;
        color: #444;
        line-height: 1.8;
        margin-bottom: 2.5rem;
      }

      /* features grid */
      .product-features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 1.25rem;
        margin-bottom: 2.5rem;
      }
      .product-feature-item {
        background: #fff;
        border: 1px solid #eee;
        border-radius: 16px;
        padding: 1.25rem 1.4rem;
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        transition: box-shadow 0.3s, transform 0.3s;
      }
      .product-detail-section.alt-bg .product-feature-item {
        background: #fff;
      }
      .product-feature-item:hover {
        box-shadow: 0 6px 24px rgba(0,0,0,0.08);
        transform: translateY(-3px);
      }
      .product-feature-icon {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.15rem;
        flex-shrink: 0;
      }
      .product-feature-item h6 {
        font-size: 0.95rem;
        font-weight: 700;
        color: #1a1a2e;
        margin: 0 0 4px;
      }
      .product-feature-item p {
        font-size: 0.85rem;
        color: #666;
        margin: 0;
        line-height: 1.5;
      }

      /* CTA buttons */
      .product-cta-group {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
        align-items: center;
      }
      .btn-product-demo {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.75rem 2rem;
        border-radius: 50px;
        font-size: 0.95rem;
        font-weight: 700;
        color: #fff;
        text-decoration: none;
        transition: all 0.3s ease;
        border: none;
      }
      .btn-product-demo:hover {
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(0,0,0,0.18);
      }
      .btn-product-outline {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.72rem 1.8rem;
        border-radius: 50px;
        font-size: 0.95rem;
        font-weight: 600;
        background: transparent;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 2px solid currentColor;
      }
      .btn-product-outline:hover {
        transform: translateY(-2px);
      }

      /* section anchor offset for sticky header */
      .product-anchor {
        display: block;
        position: relative;
        top: -80px;
        visibility: hidden;
      }

      @media (max-width: 767px) {
        .product-banner {
          flex-direction: column;
          align-items: flex-start;
          padding: 36px 28px;
        }
        .product-banner .banner-logo {
          width: 100px;
          height: 100px;
        }
        .product-banner .banner-text h2 {
          font-size: 1.5rem;
        }
        .product-features-grid {
          grid-template-columns: 1fr;
        }
      }
    </style>
  </head>
  <body>

    <!-- Preloader -->
    <div class="preloader">
      <button class="th-btn preloaderCls">Cancel Preloader</button>
      <div class="preloader-inner">
        <img src="assets/img/logo.png" alt="img" width="100px" />
        <span class="loader">TRIASOFT<span class="loading-text">TRIASOFT</span></span>
      </div>
    </div>

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
            <li class="menu-item"><a href="contact.php">Contact us</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Header -->
    <header class="th-header header-layout5">
      <div class="sticky-wrapper">
        <div class="menu-area">
          <div class="container th-container6">
            <div class="row align-items-center justify-content-between">
              <div class="col-auto">
                <div class="header-logo">
                  <a href="default.php">
                    <img src="assets/img/full-logo.png" width="250px" alt="Triasoft" />
                  </a>
                </div>
              </div>
              <div class="col-auto">
                <nav class="main-menu d-none d-xl-block">
                  <ul>
                    <li class="menu-item"><a href="default.php">Home</a></li>
                    <li class="menu-item"><a href="default.php#about-sec">About Us</a></li>
                    <li class="menu-item"><a href="default.php#services">Our Services</a></li>
                    <li class="menu-item"><a class="active" href="products.php">Products</a></li>
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

    <!-- Hero -->
    <div class="products-hero">
      <div class="container">
        <div class="hero-content">
          <span class="sub-badge">Our Products</span>
          <h1>Software Built to Power Your Business</h1>
          <p>From hostel management to petroleum distribution, discover intelligent software solutions crafted by Triasoft for every industry.</p>
        </div>
      </div>
    </div>

    <!-- ==============================
         1. StayLeap
    ============================== -->
    <section class="product-detail-section" id="stayleap">
      <span class="product-anchor" id="stayleap-anchor"></span>
      <div class="container">

        <!-- Banner -->
        <div class="product-banner" style="background: linear-gradient(135deg, #130b8a 0%, #4a3fc0 100%);">
          <div class="banner-bg-shape"></div>
          <div class="banner-bg-shape2"></div>
          <div class="banner-text">
            <span class="banner-badge">Hostel &amp; PG ERP</span>
            <h2>StayLeap</h2>
            <p>Complete hostel management platform for modern PG &amp; hostel owners.</p>
          </div>
          <img src="./assets/img/stayleap.png" class="banner-logo" alt="StayLeap" />
        </div>

        <!-- Description -->
        <p class="product-description">
          StayLeap is a comprehensive ERP solution built exclusively for hostel and PG (Paying Guest) accommodation owners. It streamlines every aspect of hostel operations — from tenant onboarding and room allocation to billing, maintenance tracking, and communication — all under one roof. With a seamless mobile app, both owners and tenants enjoy a modern, hassle-free experience.
        </p>

        <!-- Features -->
        <div class="product-features-grid">
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(19,11,138,0.1);color:#130b8a;">
              <i class="fa-solid fa-users"></i>
            </div>
            <div>
              <h6>Tenant Management</h6>
              <p>Onboard, track, and manage tenant profiles, move-ins, and move-outs effortlessly.</p>
            </div>
          </div>
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(19,11,138,0.1);color:#130b8a;">
              <i class="fa-solid fa-bed"></i>
            </div>
            <div>
              <h6>Room Allocation</h6>
              <p>Visualize room occupancy and assign beds with a real-time floor plan view.</p>
            </div>
          </div>
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(19,11,138,0.1);color:#130b8a;">
              <i class="fa-solid fa-file-invoice-dollar"></i>
            </div>
            <div>
              <h6>Automated Billing</h6>
              <p>Generate rent invoices, track dues, and send payment reminders automatically.</p>
            </div>
          </div>
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(19,11,138,0.1);color:#130b8a;">
              <i class="fa-solid fa-mobile-screen"></i>
            </div>
            <div>
              <h6>Mobile App</h6>
              <p>Dedicated mobile apps for owners and tenants for real-time communication and access.</p>
            </div>
          </div>
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(19,11,138,0.1);color:#130b8a;">
              <i class="fa-solid fa-screwdriver-wrench"></i>
            </div>
            <div>
              <h6>Maintenance Requests</h6>
              <p>Allow tenants to raise complaints and track resolution status in real time.</p>
            </div>
          </div>
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(19,11,138,0.1);color:#130b8a;">
              <i class="fa-solid fa-chart-line"></i>
            </div>
            <div>
              <h6>Analytics &amp; Reports</h6>
              <p>Get occupancy rates, revenue insights, and custom reports at a glance.</p>
            </div>
          </div>
        </div>

        <!-- CTA -->
        <div class="product-cta-group">
          <a href="contact.php" class="btn-product-demo" style="background: linear-gradient(90deg, #130b8a, #4a3fc0);">
            <i class="fa-solid fa-phone"></i> Get a Demo
          </a>
          <a href="contact.php" class="btn-product-outline" style="color:#130b8a;">
            <i class="fa-regular fa-envelope"></i> Contact Sales
          </a>
        </div>
      </div>
    </section>

    <!-- ==============================
         2. Petroleum ERP
    ============================== -->
    <section class="product-detail-section alt-bg" id="petroleum">
      <span class="product-anchor"></span>
      <div class="container">

        <div class="product-banner" style="background: linear-gradient(135deg, #064e30 0%, #0a7a4c 100%);">
          <div class="banner-bg-shape"></div>
          <div class="banner-bg-shape2"></div>
          <div class="banner-text">
            <span class="banner-badge">Industry ERP</span>
            <h2>Petroleum ERP</h2>
            <p>End-to-end ERP designed for the petroleum &amp; fuel distribution industry.</p>
          </div>
          <img src="https://triassoftware.com/img/speedex.png" class="banner-logo" alt="Petroleum ERP" style="background:rgba(255,255,255,0.15);" />
        </div>

        <p class="product-description">
          The Petroleum ERP system is purpose-built for companies operating in the petroleum, fuel, and energy sectors. It connects every layer of your operations — from upstream production to downstream retail — giving you complete visibility and control over refining, inventory, logistics, distribution, and sales in one unified platform.
        </p>

        <div class="product-features-grid">
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(10,92,54,0.1);color:#0a5c36;">
              <i class="fa-solid fa-oil-well"></i>
            </div>
            <div>
              <h6>Production Management</h6>
              <p>Track oil and gas extraction, production volumes, and plant operations in real time.</p>
            </div>
          </div>
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(10,92,54,0.1);color:#0a5c36;">
              <i class="fa-solid fa-truck"></i>
            </div>
            <div>
              <h6>Distribution &amp; Logistics</h6>
              <p>Manage fuel transport, tanker scheduling, and delivery routes efficiently.</p>
            </div>
          </div>
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(10,92,54,0.1);color:#0a5c36;">
              <i class="fa-solid fa-warehouse"></i>
            </div>
            <div>
              <h6>Inventory Control</h6>
              <p>Real-time tank level monitoring and automated stock replenishment alerts.</p>
            </div>
          </div>
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(10,92,54,0.1);color:#0a5c36;">
              <i class="fa-solid fa-file-contract"></i>
            </div>
            <div>
              <h6>Sales &amp; Billing</h6>
              <p>Automate invoicing, contracts, and pricing for bulk and retail fuel sales.</p>
            </div>
          </div>
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(10,92,54,0.1);color:#0a5c36;">
              <i class="fa-solid fa-shield-halved"></i>
            </div>
            <div>
              <h6>Compliance &amp; Safety</h6>
              <p>Built-in modules for HSE compliance, audit trails, and regulatory reporting.</p>
            </div>
          </div>
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(10,92,54,0.1);color:#0a5c36;">
              <i class="fa-solid fa-chart-pie"></i>
            </div>
            <div>
              <h6>Executive Dashboard</h6>
              <p>Consolidated KPIs and financial reporting across all business units.</p>
            </div>
          </div>
        </div>

        <div class="product-cta-group">
          <a href="contact.php" class="btn-product-demo" style="background: linear-gradient(90deg, #064e30, #0a7a4c);">
            <i class="fa-solid fa-phone"></i> Get a Demo
          </a>
          <a href="contact.php" class="btn-product-outline" style="color:#0a5c36;">
            <i class="fa-regular fa-envelope"></i> Contact Sales
          </a>
        </div>
      </div>
    </section>

    <!-- ==============================
         3. Garage Management System
    ============================== -->
    <section class="product-detail-section" id="garage">
      <span class="product-anchor"></span>
      <div class="container">

        <div class="product-banner" style="background: linear-gradient(135deg, #92400e 0%, #d97706 100%);">
          <div class="banner-bg-shape"></div>
          <div class="banner-bg-shape2"></div>
          <div class="banner-text">
            <span class="banner-badge">Auto &amp; Garage</span>
            <h2>Garage Management System</h2>
            <p>The all-in-one platform for modern garages and auto-service centers.</p>
          </div>
          <img src="./assets/img/garage.png" class="banner-logo" alt="Garage Management System" style="background:rgba(255,255,255,0.15);" />
        </div>

        <p class="product-description">
          The Garage Management System (GMS) is a centralized digital platform designed specifically for vehicle service centers, garages, and automotive workshops. It eliminates paper-based workflows and brings every operation — from customer intake and job cards to spare parts inventory and billing — into a single, easy-to-use system.
        </p>

        <div class="product-features-grid">
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(180,83,9,0.1);color:#b45309;">
              <i class="fa-solid fa-car"></i>
            </div>
            <div>
              <h6>Vehicle Records</h6>
              <p>Maintain complete vehicle history including past services, repairs, and owner details.</p>
            </div>
          </div>
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(180,83,9,0.1);color:#b45309;">
              <i class="fa-solid fa-clipboard-list"></i>
            </div>
            <div>
              <h6>Job Cards</h6>
              <p>Create and track job cards digitally from vehicle intake to delivery.</p>
            </div>
          </div>
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(180,83,9,0.1);color:#b45309;">
              <i class="fa-solid fa-boxes-stacked"></i>
            </div>
            <div>
              <h6>Spare Parts Inventory</h6>
              <p>Track spare parts stock, auto-debit usage per job card, and set reorder alerts.</p>
            </div>
          </div>
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(180,83,9,0.1);color:#b45309;">
              <i class="fa-solid fa-receipt"></i>
            </div>
            <div>
              <h6>Billing &amp; Invoicing</h6>
              <p>Generate professional invoices with labor charges and parts costs at one click.</p>
            </div>
          </div>
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(180,83,9,0.1);color:#b45309;">
              <i class="fa-solid fa-user-group"></i>
            </div>
            <div>
              <h6>Customer Management</h6>
              <p>Build customer profiles and send automated service reminders and follow-ups.</p>
            </div>
          </div>
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(180,83,9,0.1);color:#b45309;">
              <i class="fa-solid fa-gauge-high"></i>
            </div>
            <div>
              <h6>Service Tracking</h6>
              <p>Real-time job status updates for both staff and customers via SMS or app.</p>
            </div>
          </div>
        </div>

        <div class="product-cta-group">
          <a href="contact.php" class="btn-product-demo" style="background: linear-gradient(90deg, #92400e, #d97706);">
            <i class="fa-solid fa-phone"></i> Get a Demo
          </a>
          <a href="contact.php" class="btn-product-outline" style="color:#b45309;">
            <i class="fa-regular fa-envelope"></i> Contact Sales
          </a>
        </div>
      </div>
    </section>

    <!-- ==============================
         4. Warehouse Management Software
    ============================== -->
    <section class="product-detail-section alt-bg" id="warehouse">
      <span class="product-anchor"></span>
      <div class="container">

        <div class="product-banner" style="background: linear-gradient(135deg, #0c5a6e 0%, #0891b2 100%);">
          <div class="banner-bg-shape"></div>
          <div class="banner-bg-shape2"></div>
          <div class="banner-text">
            <span class="banner-badge">Warehouse</span>
            <h2>Warehouse Management Software</h2>
            <p>Total visibility and control over your inventory and supply chain operations.</p>
          </div>
          <img src="./assets/img/stoccoz.png" class="banner-logo" alt="Warehouse Management" style="background:rgba(255,255,255,0.15);" />
        </div>

        <p class="product-description">
          The Warehouse Management Software (WMS) is a powerful, scalable solution that gives businesses complete control over their warehouse operations. From receiving and put-away to picking, packing, and shipping, every movement is tracked in real time. Reduce errors, eliminate stock discrepancies, and fulfill orders faster with intelligent automation.
        </p>

        <div class="product-features-grid">
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(14,116,144,0.1);color:#0e7490;">
              <i class="fa-solid fa-cubes"></i>
            </div>
            <div>
              <h6>Inventory Control</h6>
              <p>Real-time stock levels, multi-location tracking, and low-stock alerts.</p>
            </div>
          </div>
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(14,116,144,0.1);color:#0e7490;">
              <i class="fa-solid fa-arrow-right-to-bracket"></i>
            </div>
            <div>
              <h6>Inbound &amp; Outbound</h6>
              <p>Manage goods receipt, quality checks, put-away, picking, and dispatch.</p>
            </div>
          </div>
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(14,116,144,0.1);color:#0e7490;">
              <i class="fa-solid fa-qrcode"></i>
            </div>
            <div>
              <h6>Barcode / QR Scanning</h6>
              <p>Eliminate manual entry errors with integrated barcode and QR code scanning.</p>
            </div>
          </div>
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(14,116,144,0.1);color:#0e7490;">
              <i class="fa-solid fa-file-lines"></i>
            </div>
            <div>
              <h6>Order Processing</h6>
              <p>Automate purchase orders, sales orders, and inter-warehouse transfers.</p>
            </div>
          </div>
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(14,116,144,0.1);color:#0e7490;">
              <i class="fa-solid fa-ship"></i>
            </div>
            <div>
              <h6>Shipment Tracking</h6>
              <p>Track shipments end-to-end and generate delivery notes and packing slips.</p>
            </div>
          </div>
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(14,116,144,0.1);color:#0e7490;">
              <i class="fa-solid fa-table-columns"></i>
            </div>
            <div>
              <h6>Reports &amp; Analytics</h6>
              <p>Inventory turnover, stock aging, order fulfillment, and custom report builder.</p>
            </div>
          </div>
        </div>

        <div class="product-cta-group">
          <a href="contact.php" class="btn-product-demo" style="background: linear-gradient(90deg, #0c5a6e, #0891b2);">
            <i class="fa-solid fa-phone"></i> Get a Demo
          </a>
          <a href="contact.php" class="btn-product-outline" style="color:#0e7490;">
            <i class="fa-regular fa-envelope"></i> Contact Sales
          </a>
        </div>
      </div>
    </section>

    <!-- ==============================
         5. Ecommerce Web & Mobile Apps
    ============================== -->
    <section class="product-detail-section" id="ecommerce">
      <span class="product-anchor"></span>
      <div class="container">

        <div class="product-banner" style="background: linear-gradient(135deg, #831843 0%, #db2777 100%);">
          <div class="banner-bg-shape"></div>
          <div class="banner-bg-shape2"></div>
          <div class="banner-text">
            <span class="banner-badge">E-Commerce</span>
            <h2>Ecommerce Web &amp; Mobile Apps</h2>
            <p>A complete online store platform for web and mobile — designed to convert.</p>
          </div>
          <img src="./assets/img/Ecommerce.png" class="banner-logo" alt="Ecommerce" style="background:rgba(255,255,255,0.15);" />
        </div>

        <p class="product-description">
          Triasoft's E-Commerce Web and Mobile Apps provide a fully integrated digital shopping platform that lets businesses sell products and services online with ease. Built for performance and conversion, the platform works seamlessly across web browsers and native iOS and Android apps, delivering a secure, personalized shopping experience for every customer.
        </p>

        <div class="product-features-grid">
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(157,23,77,0.1);color:#9d174d;">
              <i class="fa-solid fa-store"></i>
            </div>
            <div>
              <h6>Multi-Platform Store</h6>
              <p>One admin panel managing both your website and mobile apps in sync.</p>
            </div>
          </div>
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(157,23,77,0.1);color:#9d174d;">
              <i class="fa-solid fa-credit-card"></i>
            </div>
            <div>
              <h6>Secure Payments</h6>
              <p>Integrated with leading payment gateways — UPI, cards, wallets, and COD.</p>
            </div>
          </div>
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(157,23,77,0.1);color:#9d174d;">
              <i class="fa-solid fa-list"></i>
            </div>
            <div>
              <h6>Product Catalog</h6>
              <p>Unlimited products, categories, variants, and rich media galleries.</p>
            </div>
          </div>
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(157,23,77,0.1);color:#9d174d;">
              <i class="fa-solid fa-box"></i>
            </div>
            <div>
              <h6>Order Management</h6>
              <p>Full order lifecycle — from placement to delivery with tracking links.</p>
            </div>
          </div>
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(157,23,77,0.1);color:#9d174d;">
              <i class="fa-solid fa-tag"></i>
            </div>
            <div>
              <h6>Promotions &amp; Coupons</h6>
              <p>Create discount codes, flash sales, bundle offers, and loyalty programs.</p>
            </div>
          </div>
          <div class="product-feature-item">
            <div class="product-feature-icon" style="background:rgba(157,23,77,0.1);color:#9d174d;">
              <i class="fa-solid fa-magnifying-glass-chart"></i>
            </div>
            <div>
              <h6>SEO &amp; Analytics</h6>
              <p>Built-in SEO tools, conversion tracking, and sales performance dashboards.</p>
            </div>
          </div>
        </div>

        <div class="product-cta-group">
          <a href="contact.php" class="btn-product-demo" style="background: linear-gradient(90deg, #831843, #db2777);">
            <i class="fa-solid fa-phone"></i> Get a Demo
          </a>
          <a href="contact.php" class="btn-product-outline" style="color:#9d174d;">
            <i class="fa-regular fa-envelope"></i> Contact Sales
          </a>
        </div>
      </div>
    </section>

    <!-- CTA Banner -->
    <section style="background: linear-gradient(135deg, #0f0a6e 0%, #1c15a8 60%, #4a3fc0 100%); padding: 80px 0; text-align: center;">
      <div class="container">
        <h2 style="color:#fff; font-size:2.2rem; font-weight:800; margin-bottom:1rem;">Ready to Transform Your Business?</h2>
        <p style="color:rgba(255,255,255,0.82); font-size:1.05rem; max-width:520px; margin:0 auto 2rem;">Talk to our team today and get a free consultation on the right product for your needs.</p>
        <a href="contact.php" class="btn-product-demo" style="background:#fff; color:#130b8a; font-size:1rem;">
          <i class="fa-solid fa-headset"></i> Talk to Our Team
        </a>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer-wrapper bg-title footer-layout2 space-top">
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
                    <a href="https://wa.me/919633542550"><i class="fab fa-whatsapp"></i></a>
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
                      <p><a href="tel:+919633542550" class="info-box_link">+91 96335 42550</a></p>
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
          style="transition:stroke-dashoffset 10ms linear 0s;stroke-dasharray:307.919,307.919;stroke-dashoffset:307.919;">
        </path>
      </svg>
    </div>

    <!-- All JS File -->
    <!-- Jquery -->
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
