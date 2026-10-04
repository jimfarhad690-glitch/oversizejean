/**
 * OVERSIZEJEAN.COM — Main Interactive Logic
 * Premium High-Fashion Streetwear Architecture & E-Commerce SPA Engine
 */

// ==========================================================================
// 1. PRODUCT CATALOG DATA
// ==========================================================================
const PRODUCTS = [
  {
    id: 'osj-01',
    name: '1996 Super-Wide Vintage Stone Wash',
    cut: 'Super Wide (Floor Puddle)',
    category: 'vintage',
    price: 185,
    originalPrice: 220,
    weight: '14.5 oz Kurabo Denim',
    rating: 4.95,
    reviewCount: 342,
    badge: 'Best Seller',
    badgeType: 'heavy',
    image: 'assets/images/vintage_stone.jpg',
    description: 'The archetype of volume. Crafted from 14.5oz Japanese Kurabo slub cotton with authentic 90s vintage stonewash and hand-distressed whiskering. Engineered with a wide 25" leg opening designed to drape effortlessly over chunky retro sneakers.',
    specs: {
      legOpening: '25.0 inches',
      rise: '13.5" High Rise',
      thigh: '33.0" Relaxed',
      hardware: 'Brushed Brass Rivets & YKK #5'
    }
  },
  {
    id: 'osj-02',
    name: 'Kuroki Mill Raw Indigo Carpenter Baggy',
    cut: 'Raw Carpenter Slub',
    category: 'raw',
    price: 215,
    originalPrice: 250,
    weight: '15.0 oz Japanese Selvedge',
    rating: 5.0,
    reviewCount: 188,
    badge: 'Selvedge ID',
    badgeType: 'selvedge',
    image: 'assets/images/raw_selvedge.jpg',
    description: 'Woven on vintage 1950s Toyoda shuttle looms in Okayama, Japan. 100% natural rope-dyed indigo selvedge with signature white-and-red ticker line. Reinforced double-knee utility paneling, hammer loop, and deep coin pocket.',
    specs: {
      legOpening: '23.5 inches',
      rise: '13.0" Mid-to-High',
      thigh: '32.0" Carpenter Room',
      hardware: 'Hand-hammered Copper Rivets'
    }
  },
  {
    id: 'osj-03',
    name: 'Phantom Washed Charcoal Skater Denim',
    cut: 'Balloon Barrel Stacking',
    category: 'washed-black',
    price: 195,
    originalPrice: 230,
    weight: '14.2 oz Sulfur Overdye',
    rating: 4.91,
    reviewCount: 215,
    badge: 'Drop 04 Excl.',
    badgeType: 'limited',
    image: 'assets/images/washed_black.jpg',
    description: 'Sulfur-washed charcoal grey denim with 3D ergonomic knee darting. Curved barrel silhouette provides dramatic thigh room that stacks crisply on low-profile or skate footwear without dragging into puddles.',
    specs: {
      legOpening: '21.5 inches',
      rise: '12.8" Mid Rise',
      thigh: '34.0" Curved Barrel',
      hardware: 'Matte Gunmetal Hardware'
    }
  },
  {
    id: 'osj-04',
    name: 'Arctic Bleach Acid Stacking Jean',
    cut: 'Super Wide (Floor Puddle)',
    category: 'vintage',
    price: 190,
    originalPrice: 225,
    weight: '13.8 oz Light Slub',
    rating: 4.88,
    reviewCount: 164,
    badge: 'Limited 200 Pcs',
    badgeType: 'limited',
    image: 'assets/images/acid_ice.jpg',
    description: 'Extreme bleach wash with ice-blue lowlights. Tailored with frayed raw cut hems and custom chainstitch hems. Delivers an effortless, worn-in runway aesthetic that gets better with every single skate session.',
    specs: {
      legOpening: '26.0 inches',
      rise: '13.8" High Waist',
      thigh: '33.5" Slouch Room',
      hardware: 'Nickel Silver Rivets'
    }
  },
  {
    id: 'osj-05',
    name: 'Dirty Tinted Mud Wash Over-Jean',
    cut: 'Raw Carpenter Slub',
    category: 'utility',
    price: 198,
    originalPrice: 235,
    weight: '14.5 oz Tinted Cotton',
    rating: 4.94,
    reviewCount: 129,
    badge: 'Vintage Patina',
    badgeType: 'heavy',
    image: 'assets/images/mud_wash.jpg',
    description: 'Infused with mineral pigments and clay-tinted overdye to achieve an authentic archive 1990s workwear patina. Heavy contrast tobacco triple-stitching along outseams and durable dual tool holsters.',
    specs: {
      legOpening: '24.0 inches',
      rise: '13.2" Relaxed Rise',
      thigh: '32.5" Workwear Drape',
      hardware: 'Antique Copper Shifter Buttons'
    }
  },
  {
    id: 'osj-06',
    name: 'Atelier Pleated Tailored Baggy Denim',
    cut: 'Tailored Double Pleat',
    category: 'raw',
    price: 220,
    originalPrice: 260,
    weight: '14.0 oz Sanforized Cotton',
    rating: 4.97,
    reviewCount: 97,
    badge: 'Luxury Tailoring',
    badgeType: 'selvedge',
    image: 'assets/images/raw_selvedge.jpg',
    description: 'Where sartorial tailoring meets streetwear volume. Double forward pleats create an elegant, sculptural crease down the leg that holds its shape. Ideal for elevating oversized denim with blazers, boots, or designer trainers.',
    specs: {
      legOpening: '22.5 inches',
      rise: '14.0" Tailored High Rise',
      thigh: '31.5" Pleated Volume',
      hardware: 'Hidden Horn Button Fly'
    }
  }
];

// ==========================================================================
// 2. SILHOUETTE DATA
// ==========================================================================
const SILHOUETTES = {
  'super-wide': {
    title: 'Cut 01: Super Wide Puddle',
    subtitle: 'Extreme 90s skater volume with natural floor drape and puddle hem.',
    legOpening: '25" - 26"',
    rise: '13.5" High Waist',
    thigh: '33" Extra Loose',
    fabricWeight: '14.5 oz Slub',
    barFill: 96,
    sneakers: 'Chunky Runners, Skate Lows, Platform Boots',
    image: 'assets/images/vintage_stone.jpg'
  },
  'curved-barrel': {
    title: 'Cut 02: Balloon Barrel',
    subtitle: 'Curved 3D ergonomic leg architecture. Dramatic knee volume with tapered stacking.',
    legOpening: '21" - 22"',
    rise: '12.8" Mid Rise',
    thigh: '34" Ergonomic Thigh',
    fabricWeight: '14.2 oz Sulfur',
    barFill: 84,
    sneakers: 'Slim Trainers, Loafers, Retro Court Shoes',
    image: 'assets/images/washed_black.jpg'
  },
  'raw-carpenter': {
    title: 'Cut 03: Raw Carpenter Slub',
    subtitle: 'Rugged utility cut with reinforced double-knees, hammer loop, and stiff selvedge drape.',
    legOpening: '23.5" - 24"',
    rise: '13.0" Relaxed Rise',
    thigh: '32" Utility Room',
    fabricWeight: '15.0 oz Selvedge',
    barFill: 88,
    sneakers: 'Work Boots, High-Top Dunks, Combat Boots',
    image: 'assets/images/raw_selvedge.jpg'
  },
  'tailored-pleat': {
    title: 'Cut 04: Tailored Double Pleat',
    subtitle: 'Sartorial luxury volume with sharp pressed creases, double front pleats, and clean drape.',
    legOpening: '22" - 23"',
    rise: '14.0" Sartorial Rise',
    thigh: '31.5" Structured Fold',
    fabricWeight: '14.0 oz Sanforized',
    barFill: 78,
    sneakers: 'Derbies, Chelsea Boots, Clean Minimal Lows',
    image: 'assets/images/raw_selvedge.jpg'
  }
};

// ==========================================================================
// 3. STATE MANAGEMENT
// ==========================================================================
class AppState {
  constructor() {
    this.cart = JSON.parse(localStorage.getItem('osj_cart') || '[]');
    this.wishlist = JSON.parse(localStorage.getItem('osj_wishlist') || '[]');
    this.activeFilter = 'all';
    this.activeSilhouette = 'super-wide';
    this.discount = 0;
    this.couponCode = null;
    this.selectedSizes = {}; // productId -> { waist, inseam }
    
    // Default size selection for all products
    PRODUCTS.forEach(p => {
      this.selectedSizes[p.id] = { waist: '32', inseam: '32" Regular Stack' };
    });
  }

  saveCart() {
    localStorage.setItem('osj_cart', JSON.stringify(this.cart));
    this.updateCartUI();
  }

  saveWishlist() {
    localStorage.setItem('osj_wishlist', JSON.stringify(this.wishlist));
    this.updateWishlistUI();
  }

  addToCart(productId, waist, inseam, quantity = 1) {
    const product = PRODUCTS.find(p => p.id === productId);
    if (!product) return;

    const existingIndex = this.cart.findIndex(
      item => item.id === productId && item.waist === waist && item.inseam === inseam
    );

    if (existingIndex > -1) {
      this.cart[existingIndex].quantity += quantity;
    } else {
      this.cart.push({
        id: product.id,
        name: product.name,
        price: product.price,
        image: product.image,
        waist: waist,
        inseam: inseam,
        quantity: quantity,
        cut: product.cut
      });
    }

    this.saveCart();
    showToast(`Added to Bag: ${product.name} (Waist ${waist})`);
    openCartDrawer();
  }

  removeFromCart(index) {
    this.cart.splice(index, 1);
    this.saveCart();
  }

  updateQuantity(index, delta) {
    if (!this.cart[index]) return;
    this.cart[index].quantity += delta;
    if (this.cart[index].quantity <= 0) {
      this.cart.splice(index, 1);
    }
    this.saveCart();
  }

  toggleWishlist(productId) {
    const index = this.wishlist.indexOf(productId);
    if (index > -1) {
      this.wishlist.splice(index, 1);
      showToast('Removed from Wishlist');
    } else {
      this.wishlist.push(productId);
      showToast('Saved to Wishlist');
    }
    this.saveWishlist();
    renderProducts();
  }

  applyCoupon(code) {
    const upper = code.trim().toUpperCase();
    if (upper === 'OVERSIZE10') {
      this.discount = 0.10;
      this.couponCode = 'OVERSIZE10 (10% OFF)';
      showToast('Promo code applied: 10% OFF!');
      this.updateCartUI();
      return true;
    } else if (upper === 'DROP04') {
      this.discount = 20; // $20 flat
      this.couponCode = 'DROP04 ($20 OFF)';
      showToast('VIP Drop code applied: $20 OFF!');
      this.updateCartUI();
      return true;
    } else {
      showToast('Invalid promo code. Try "OVERSIZE10"', true);
      return false;
    }
  }

  updateWishlistUI() {
    const badge = document.getElementById('wishlistCountBadge');
    if (badge) {
      badge.textContent = this.wishlist.length;
      badge.style.display = this.wishlist.length > 0 ? 'flex' : 'none';
    }
  }

  updateCartUI() {
    const countBadge = document.getElementById('cartCountBadge');
    const totalItems = this.cart.reduce((sum, item) => sum + item.quantity, 0);
    if (countBadge) {
      countBadge.textContent = totalItems;
      countBadge.style.display = totalItems > 0 ? 'flex' : 'none';
    }

    const container = document.getElementById('cartItemsList');
    const emptyState = document.getElementById('cartEmptyState');
    const cartFooter = document.getElementById('cartFooter');
    
    if (!container) return;

    if (this.cart.length === 0) {
      container.innerHTML = '';
      if (emptyState) emptyState.style.display = 'block';
      if (cartFooter) cartFooter.style.display = 'none';
    } else {
      if (emptyState) emptyState.style.display = 'none';
      if (cartFooter) cartFooter.style.display = 'block';

      container.innerHTML = this.cart.map((item, idx) => `
        <div class="cart-item-card">
          <div class="cart-item-thumb">
            <img src="${item.image}" alt="${item.name}">
          </div>
          <div class="cart-item-details">
            <div>
              <h4 class="cart-item-title">${item.name}</h4>
              <p class="cart-item-specs">Waist: ${item.waist} | ${item.inseam}</p>
            </div>
            <div class="cart-item-bottom">
              <div class="cart-qty-control">
                <button class="cart-qty-btn" onclick="window.appState.updateQuantity(${idx}, -1)">−</button>
                <span class="cart-qty-display">${item.quantity}</span>
                <button class="cart-qty-btn" onclick="window.appState.updateQuantity(${idx}, 1)">+</button>
              </div>
              <div class="cart-item-price">$${item.price * item.quantity}</div>
            </div>
          </div>
        </div>
      `).join('');
    }

    // Totals & Free Shipping Bar
    const subtotal = this.cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
    const subtotalEl = document.getElementById('cartSubtotalAmount');
    if (subtotalEl) subtotalEl.textContent = `$${subtotal.toFixed(2)}`;

    // Free shipping threshold = $150
    const threshold = 150;
    const trackerMsg = document.getElementById('shippingTrackerMsg');
    const trackerFill = document.getElementById('shippingTrackerFill');

    if (trackerMsg && trackerFill) {
      if (subtotal >= threshold || subtotal === 0 && this.cart.length === 0) {
        if (subtotal >= threshold) {
          trackerMsg.innerHTML = `<span>Complimentary Express Shipping: <strong>Unlocked</strong></span>`;
          trackerFill.style.width = '100%';
        } else {
          trackerMsg.innerHTML = `<span>Add <strong>$${threshold}</strong> for Free Worldwide Express</span>`;
          trackerFill.style.width = '0%';
        }
      } else {
        const remaining = threshold - subtotal;
        const pct = Math.min(100, Math.round((subtotal / threshold) * 100));
        trackerMsg.innerHTML = `<span>Add <strong>$${remaining.toFixed(2)}</strong> more for Free Worldwide Shipping</span>`;
        trackerFill.style.width = `${pct}%`;
      }
    }

    // Discount Calculation
    let discountAmount = 0;
    if (this.discount > 0 && this.discount < 1) {
      discountAmount = subtotal * this.discount;
    } else if (this.discount >= 1) {
      discountAmount = Math.min(subtotal, this.discount);
    }

    const discountRow = document.getElementById('cartDiscountRow');
    const discountVal = document.getElementById('cartDiscountVal');
    if (discountRow && discountVal) {
      if (discountAmount > 0) {
        discountRow.style.display = 'flex';
        discountVal.textContent = `-$${discountAmount.toFixed(2)}`;
      } else {
        discountRow.style.display = 'none';
      }
    }

    const finalTotal = Math.max(0, subtotal - discountAmount);
    const finalTotalEl = document.getElementById('cartFinalTotal');
    if (finalTotalEl) finalTotalEl.textContent = `$${finalTotal.toFixed(2)}`;
  }
}

// Global App State Instance
window.appState = new AppState();

// ==========================================================================
// 4. UI RENDERING & COMPONENT LOGIC
// ==========================================================================

function renderProducts() {
  const grid = document.getElementById('productsGrid');
  if (!grid) return;

  const filter = window.appState.activeFilter;
  const filtered = filter === 'all' 
    ? PRODUCTS 
    : PRODUCTS.filter(p => p.category === filter || (filter === 'selvedge' && p.weight.includes('Selvedge')));

  grid.innerHTML = filtered.map(product => {
    const isWishlisted = window.appState.wishlist.includes(product.id);
    const selectedWaist = window.appState.selectedSizes[product.id]?.waist || '32';

    return `
      <div class="product-card" data-id="${product.id}">
        <div class="product-image-container">
          <img src="${product.image}" alt="${product.name}" class="product-img" loading="lazy">
          <div class="product-badges">
            <span class="badge badge-${product.badgeType}">${product.badge}</span>
            <span class="badge" style="background: rgba(0,0,0,0.6); color: #fff;">${product.weight}</span>
          </div>
          <button class="btn-wishlist ${isWishlisted ? 'active' : ''}" 
                  onclick="window.appState.toggleWishlist('${product.id}')"
                  title="Add to Wishlist"
                  aria-label="Add to Wishlist">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="${isWishlisted ? 'currentColor' : 'none'}" stroke="currentColor" stroke-width="2">
              <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
            </svg>
          </button>
          <button class="quick-view-overlay-btn" onclick="openQuickView('${product.id}')">
            Quick Architecture View
          </button>
        </div>

        <div class="product-card-body">
          <div class="product-cut-tag">${product.cut}</div>
          <h3 class="product-title">${product.name}</h3>
          
          <div class="product-meta-row">
            <div>
              <span class="product-price">$${product.price}</span>
              ${product.originalPrice ? `<span class="product-original-price">$${product.originalPrice}</span>` : ''}
            </div>
            <span class="product-weight">★ ${product.rating} (${product.reviewCount})</span>
          </div>

          <div class="size-selector-label">
            <span>Select Waist Size:</span>
            <span style="color: var(--accent-amber);">${selectedWaist}W (Oversized Cut)</span>
          </div>

          <div class="size-pills-row">
            ${['28', '30', '32', '34', '36', '38'].map(w => `
              <button class="size-pill ${selectedWaist === w ? 'selected' : ''}" 
                      onclick="selectWaistSize('${product.id}', '${w}')">
                ${w}
              </button>
            `).join('')}
          </div>

          <button class="btn-add-to-cart" onclick="quickAddToCart('${product.id}')">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
              <line x1="3" y1="6" x2="21" y2="6"></line>
              <path d="M16 10a4 4 0 0 1-8 0"></path>
            </svg>
            Add to Bag • $${product.price}
          </button>
        </div>
      </div>
    `;
  }).join('');
}

function selectWaistSize(productId, waist) {
  if (!window.appState.selectedSizes[productId]) {
    window.appState.selectedSizes[productId] = { waist: '32', inseam: '32" Regular Stack' };
  }
  window.appState.selectedSizes[productId].waist = waist;
  renderProducts();
}

function quickAddToCart(productId) {
  const current = window.appState.selectedSizes[productId] || { waist: '32', inseam: '32" Regular Stack' };
  window.appState.addToCart(productId, current.waist, current.inseam);
}

// ==========================================================================
// 5. SILHOUETTE SELECTOR
// ==========================================================================
function setSilhouette(key) {
  window.appState.activeSilhouette = key;
  const data = SILHOUETTES[key];
  if (!data) return;

  // Update tabs
  document.querySelectorAll('.silhouette-tab-btn').forEach(btn => {
    btn.classList.toggle('active', btn.dataset.silhouette === key);
  });

  // Update contents
  const titleEl = document.getElementById('silTitle');
  const descEl = document.getElementById('silDesc');
  const legEl = document.getElementById('silLegOpening');
  const riseEl = document.getElementById('silRise');
  const thighEl = document.getElementById('silThigh');
  const weightEl = document.getElementById('silWeight');
  const barFillEl = document.getElementById('silDrapeBar');
  const imgEl = document.getElementById('silVisualImg');
  const sneakerEl = document.getElementById('silSneakers');

  if (titleEl) titleEl.textContent = data.title;
  if (descEl) descEl.textContent = data.subtitle;
  if (legEl) legEl.textContent = data.legOpening;
  if (riseEl) riseEl.textContent = data.rise;
  if (thighEl) thighEl.textContent = data.thigh;
  if (weightEl) weightEl.textContent = data.fabricWeight;
  if (barFillEl) barFillEl.style.width = `${data.barFill}%`;
  if (imgEl) imgEl.src = data.image;
  if (sneakerEl) sneakerEl.textContent = data.sneakers;
}

// ==========================================================================
// 6. INTERACTIVE BAGGY FIT CALCULATOR
// ==========================================================================
function updateFitCalculator() {
  const heightSlider = document.getElementById('calcHeightSlider');
  const heightDisplay = document.getElementById('calcHeightDisplay');
  const weightSlider = document.getElementById('calcWeightSlider');
  const weightDisplay = document.getElementById('calcWeightDisplay');
  
  if (!heightSlider || !weightSlider) return;

  const heightVal = parseInt(heightSlider.value, 10);
  const weightVal = parseInt(weightSlider.value, 10);

  // Convert height cm to ft/in
  const totalInches = Math.round(heightVal / 2.54);
  const feet = Math.floor(totalInches / 12);
  const inches = totalInches % 12;
  if (heightDisplay) heightDisplay.textContent = `${heightVal} cm (${feet}'${inches}")`;
  if (weightDisplay) weightDisplay.textContent = `${weightVal} kg (${Math.round(weightVal * 2.205)} lbs)`;

  // Active Vibe
  const activeVibeBtn = document.querySelector('.vibe-btn.active');
  const vibe = activeVibeBtn ? activeVibeBtn.dataset.vibe : 'true-baggy';

  // Sizing Formula
  // Baseline estimated waist from weight & height
  let baseWaist = 30;
  if (weightVal < 60) baseWaist = 28;
  else if (weightVal < 70) baseWaist = 30;
  else if (weightVal < 80) baseWaist = 32;
  else if (weightVal < 92) baseWaist = 34;
  else if (weightVal < 105) baseWaist = 36;
  else baseWaist = 38;

  let recommendedWaist = baseWaist;
  let recommendedInseam = '32" Regular Stack';
  let recommendedCut = 'Cut 01: Super Wide Puddle';
  let drapeIndex = '8.5 / 10';

  if (vibe === 'relaxed') {
    recommendedWaist = baseWaist; // true to size
    recommendedInseam = heightVal > 185 ? '32" Regular' : '30" Standard';
    recommendedCut = 'Cut 02: Balloon Barrel';
    drapeIndex = '6.8 / 10 (Clean Taper Stack)';
  } else if (vibe === 'true-baggy') {
    recommendedWaist = baseWaist + 2; // size up +2 inches for authentic 90s drop
    recommendedInseam = heightVal > 180 ? '34" Extreme Stack' : '32" Regular Stack';
    recommendedCut = 'Cut 01: Super Wide Puddle';
    drapeIndex = '9.2 / 10 (Puddle Hem)';
  } else if (vibe === 'floor-puddle') {
    recommendedWaist = baseWaist + 4; // size up +4 inches for extreme runway slouch
    recommendedInseam = '34" Extreme Stacking';
    recommendedCut = 'Cut 01: Super Wide Puddle';
    drapeIndex = '10 / 10 (Ultra Puddle)';
  }

  // Update Result DOM
  const outWaist = document.getElementById('calcResultWaist');
  const outInseam = document.getElementById('calcResultInseam');
  const outCut = document.getElementById('calcResultCut');
  const outDrape = document.getElementById('calcResultDrape');

  if (outWaist) outWaist.textContent = `${recommendedWaist}W`;
  if (outInseam) outInseam.textContent = recommendedInseam;
  if (outCut) outCut.textContent = recommendedCut;
  if (outDrape) outDrape.textContent = drapeIndex;
}

// ==========================================================================
// 7. MODALS & DRAWER CONTROLS
// ==========================================================================
function openCartDrawer() {
  const drawer = document.getElementById('cartDrawer');
  const backdrop = document.getElementById('drawerBackdrop');
  if (drawer && backdrop) {
    drawer.classList.add('open');
    backdrop.classList.add('active');
    document.body.style.overflow = 'hidden';
  }
}

function closeCartDrawer() {
  const drawer = document.getElementById('cartDrawer');
  const backdrop = document.getElementById('drawerBackdrop');
  if (drawer && backdrop) {
    drawer.classList.remove('open');
    backdrop.classList.remove('active');
    document.body.style.overflow = '';
  }
}

function openQuickView(productId) {
  const product = PRODUCTS.find(p => p.id === productId);
  if (!product) return;

  const modal = document.getElementById('quickViewModal');
  const container = document.getElementById('quickViewContent');
  if (!modal || !container) return;

  container.innerHTML = `
    <div class="quick-view-grid">
      <div class="quick-view-gallery">
        <img src="${product.image}" alt="${product.name}">
      </div>
      <div class="quick-view-content">
        <span class="product-cut-tag">${product.cut}</span>
        <h2 style="font-family: var(--font-heading); font-size: 1.6rem; color: #fff; margin-bottom: 8px;">${product.name}</h2>
        <div style="font-size: 1.4rem; font-weight: 700; color: #fff; margin-bottom: 16px;">$${product.price}</div>
        <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.6; margin-bottom: 24px;">${product.description}</p>
        
        <div style="margin-bottom: 24px;">
          <h4 style="font-family: var(--font-mono); font-size: 0.75rem; text-transform: uppercase; color: var(--accent-amber); margin-bottom: 8px;">Architecture Specifications</h4>
          <div style="font-size: 0.85rem; color: var(--text-muted); display: grid; grid-template-columns: 1fr 1fr; gap: 8px;">
            <div>• Leg Opening: <strong>${product.specs.legOpening}</strong></div>
            <div>• Rise: <strong>${product.specs.rise}</strong></div>
            <div>• Thigh: <strong>${product.specs.thigh}</strong></div>
            <div>• Hardware: <strong>${product.specs.hardware}</strong></div>
          </div>
        </div>

        <div style="margin-bottom: 24px;">
          <label style="display:block; font-size: 0.8rem; font-family: var(--font-mono); color: var(--text-secondary); margin-bottom: 8px;">SELECT WAIST (INCHES):</label>
          <div class="size-pills-row" id="qvWaistPills">
            ${['28', '30', '32', '34', '36', '38'].map(w => `
              <button class="size-pill ${w === '32' ? 'selected' : ''}" onclick="selectModalWaist(this, '${w}')">${w}</button>
            `).join('')}
          </div>
        </div>

        <button class="btn btn-primary" onclick="addFromModal('${product.id}')" style="width: 100%;">
          Add to Cart • $${product.price}
        </button>
      </div>
    </div>
  `;

  modal.classList.add('active');
  document.body.style.overflow = 'hidden';
}

function selectModalWaist(btn, waist) {
  document.querySelectorAll('#qvWaistPills .size-pill').forEach(b => b.classList.remove('selected'));
  btn.classList.add('selected');
  btn.dataset.waist = waist;
}

function addFromModal(productId) {
  const selectedBtn = document.querySelector('#qvWaistPills .size-pill.selected');
  const waist = selectedBtn ? selectedBtn.textContent.trim() : '32';
  window.appState.addToCart(productId, waist, '32" Regular Stack');
  closeModal('quickViewModal');
}

function closeModal(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
    modal.classList.remove('active');
    document.body.style.overflow = '';
  }
}

// ==========================================================================
// 8. LEGAL READER MODAL (IN-SPA QUICK VIEWER)
// ==========================================================================
const LEGAL_DATA = {
  'disclaimer': {
    title: 'Legal Disclaimer & Artisan Notice',
    tag: 'Official Warranty & Tolerances',
    url: 'disclaimer.html',
    content: `
      <h4>1. Denim Dye & Natural Indigo Transfer</h4>
      <p>All oversizejean.com raw selvedge and dark washed items undergo traditional rope indigo dyeing. Natural indigo pigment bleeding onto light-colored sneakers, furniture, or apparel is an inherent, authentic characteristic of unwashed raw cotton denim and does not constitute a defect.</p>
      
      <h4>2. Sizing & Handcrafted Measurements Variance</h4>
      <p>Due to the artisanal washing, distressing, and shuttle loom tension of heavyweight 14.5oz+ cotton, actual leg openings and waist measurements may vary by ±0.5 inches (1.27 cm) within accepted tailoring tolerances.</p>
      
      <h4>3. Limitation of Liability</h4>
      <p>In no event shall oversizejean.com, its directors, employees, or mill partners be liable for any indirect or incidental damages resulting from the use of products or website navigation.</p>
    `
  },
  'privacy': {
    title: 'Privacy & Data Protection Policy',
    tag: 'GDPR & CCPA Compliant',
    url: 'privacy-policy.html',
    content: `
      <h4>1. Information Collection</h4>
      <p>We collect essential order information (shipping destination, email, contact phone) solely to fulfill your oversize denim shipments and send live tracking updates.</p>
      
      <h4>2. Zero Third-Party Selling</h4>
      <p>We strictly never sell, license, or monetize customer data to advertising brokers. Payments are processed with 256-bit AES encryption through certified PCI-DSS Level 1 compliant processors.</p>
      
      <h4>3. Your Privacy Rights</h4>
      <p>You have the absolute right to request a full copy of your data or request complete deletion under GDPR and CCPA regulations by emailing legal@oversizejean.com.</p>
    `
  },
  'terms': {
    title: 'Terms of Service & Sales Agreement',
    tag: 'Last Revised: October 2026',
    url: 'terms-of-service.html',
    content: `
      <h4>1. Acceptance of Terms</h4>
      <p>By purchasing from oversizejean.com or browsing our digital architecture catalog, you agree to be bound by these Terms of Service.</p>
      
      <h4>2. Limited Drop Orders & Resale Protections</h4>
      <p>To ensure fair access to limited production runs (e.g. Drop 04), we reserve the right to limit quantities per household to a maximum of 4 pairs per drop.</p>
      
      <h4>3. Intellectual Property</h4>
      <p>All photography, typography, denim patterns, and brand designs on oversizejean.com are exclusive intellectual property protected worldwide.</p>
    `
  },
  'shipping': {
    title: 'Shipping, Delivery & 30-Day Returns Policy',
    tag: 'Global Express Guarantee',
    url: 'shipping-returns.html',
    content: `
      <h4>1. Worldwide Express Shipping</h4>
      <p>Orders over $150 USD qualify for complimentary Express Worldwide Shipping. Standard transit time is 3–5 business days via DHL Express / FedEx Priority.</p>
      
      <h4>2. 30-Day Hassle-Free Baggy Exchange Guarantee</h4>
      <p>Unsure about whether you want 90s Baggy or Floor Puddle? Exchange your pair within 30 days of delivery with 100% free return postage for domestic orders.</p>
      
      <h4>3. Condition for Returns</h4>
      <p>Returned items must be unwashed, unworn, in original packaging with all mill tags intact.</p>
    `
  },
  'impressum': {
    title: 'Impressum / Legal Disclosure (Germany)',
    tag: '§ 5 DDG Anbieterkennzeichnung',
    url: 'impressum.html',
    content: `
      <h4>1. Diensteanbieter / Entity</h4>
      <p><strong>oversizejean GmbH</strong><br>
      Torstraße 108, 10119 Berlin, Deutschland / Germany<br>
      Amtsgericht Charlottenburg (Berlin), HRB 248910 B<br>
      Umsatzsteuer-ID (VAT): DE 358 912 405</p>
      
      <h4>2. Vertretungsberechtigte</h4>
      <p>Geschäftsführer: Maximilian Vance, Kenji Takahashi<br>
      Kontakt: support@oversizejean.com | Tel: +49 (0)30 8920 4410</p>

      <h4>3. EU-Streitschlichtung</h4>
      <p>Plattform der EU-Kommission zur Online-Streitbeilegung: <a href="https://ec.europa.eu/consumers/odr/" target="_blank" style="color: var(--accent-blue-light);">https://ec.europa.eu/consumers/odr/</a></p>
    `
  }
};

function openLegalModal(type) {
  const data = LEGAL_DATA[type];
  if (!data) return;

  const modal = document.getElementById('legalModal');
  const title = document.getElementById('legalModalTitle');
  const tag = document.getElementById('legalModalTag');
  const body = document.getElementById('legalModalBody');
  const fullPageLink = document.getElementById('legalModalFullLink');

  if (title) title.textContent = data.title;
  if (tag) tag.textContent = data.tag;
  if (body) body.innerHTML = data.content;
  if (fullPageLink) {
    fullPageLink.href = data.url;
    fullPageLink.textContent = `Open Dedicated ${data.title} Page →`;
  }

  if (modal) {
    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
  }
}

// ==========================================================================
// 9. CHECKOUT SIMULATOR
// ==========================================================================
function startCheckout() {
  if (window.appState.cart.length === 0) {
    showToast('Your bag is currently empty!', true);
    return;
  }
  closeCartDrawer();
  const modal = document.getElementById('checkoutModal');
  if (modal) {
    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
  }
}

function processSimulatedOrder(e) {
  e.preventDefault();
  const orderNumber = `OSJ-${Math.floor(100000 + Math.random() * 900000)}`;
  
  const content = document.getElementById('checkoutFormArea');
  if (content) {
    content.innerHTML = `
      <div style="text-align: center; padding: 40px 20px;">
        <div style="width: 72px; height: 72px; border-radius: 50%; background: rgba(16, 185, 129, 0.15); border: 2px solid var(--accent-emerald); display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto; color: var(--accent-emerald); font-size: 2rem;">
          ✓
        </div>
        <h2 style="font-family: var(--font-heading); font-size: 1.8rem; color: #fff; margin-bottom: 10px;">Order Confirmed!</h2>
        <p style="color: var(--accent-amber); font-family: var(--font-mono); font-size: 0.95rem; margin-bottom: 20px;">Tracking #${orderNumber}</p>
        <p style="color: var(--text-secondary); max-width: 440px; margin: 0 auto 30px auto; line-height: 1.6;">
          Thank you for choosing oversizejean.com. Your denim is being packaged with artisan care at our Kurabo dispatch hub. A confirmation email has been dispatched.
        </p>
        <button class="btn btn-primary" onclick="finishOrder()">Return to Collection</button>
      </div>
    `;
  }

  // Clear Cart
  window.appState.cart = [];
  window.appState.saveCart();
}

function finishOrder() {
  closeModal('checkoutModal');
  window.location.reload();
}

// ==========================================================================
// 10. TOAST NOTIFICATION SYSTEM
// ==========================================================================
function showToast(message, isError = false) {
  let container = document.getElementById('toastContainer');
  if (!container) {
    container = document.createElement('div');
    container.id = 'toastContainer';
    container.className = 'toast-container';
    document.body.appendChild(container);
  }

  const toast = document.createElement('div');
  toast.className = 'toast';
  if (isError) {
    toast.style.borderLeftColor = 'var(--accent-rose)';
  }

  toast.innerHTML = `
    <span>${isError ? '⚠️' : '⚡'}</span>
    <span>${message}</span>
  `;

  container.appendChild(toast);

  setTimeout(() => {
    toast.style.opacity = '0';
    toast.style.transform = 'translateY(10px)';
    toast.style.transition = 'all 0.3s ease';
    setTimeout(() => toast.remove(), 300);
  }, 3200);
}

// ==========================================================================
// 11. INITIALIZATION & EVENT LISTENERS
// ==========================================================================
document.addEventListener('DOMContentLoaded', () => {
  // 1. Initial renders
  renderProducts();
  window.appState.updateCartUI();
  window.appState.updateWishlistUI();
  setSilhouette('super-wide');
  updateFitCalculator();

  // 2. Category Filter buttons
  document.querySelectorAll('.filter-pill').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.filter-pill').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      window.appState.activeFilter = btn.dataset.filter;
      renderProducts();
    });
  });

  // 3. Silhouette Tab buttons
  document.querySelectorAll('.silhouette-tab-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      setSilhouette(btn.dataset.silhouette);
    });
  });

  // 4. Calculator Sliders & Vibes
  const heightSlider = document.getElementById('calcHeightSlider');
  const weightSlider = document.getElementById('calcWeightSlider');
  if (heightSlider) heightSlider.addEventListener('input', updateFitCalculator);
  if (weightSlider) weightSlider.addEventListener('input', updateFitCalculator);

  document.querySelectorAll('.vibe-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.vibe-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      updateFitCalculator();
    });
  });

  // 5. Accordion FAQ
  document.querySelectorAll('.faq-question').forEach(btn => {
    btn.addEventListener('click', () => {
      const item = btn.parentElement;
      const isOpen = item.classList.contains('open');
      
      // Close others
      document.querySelectorAll('.faq-item').forEach(i => {
        i.classList.remove('open');
        i.querySelector('.faq-answer').style.maxHeight = null;
      });

      if (!isOpen) {
        item.classList.add('open');
        const answer = item.querySelector('.faq-answer');
        answer.style.maxHeight = answer.scrollHeight + 'px';
      }
    });
  });

  // 6. Header Scroll Effect
  const header = document.querySelector('.site-header');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      header?.classList.add('scrolled');
    } else {
      header?.classList.remove('scrolled');
    }
  });

  // 7. Coupon Form
  const couponBtn = document.getElementById('applyCouponBtn');
  const couponInput = document.getElementById('couponCodeInput');
  if (couponBtn && couponInput) {
    couponBtn.addEventListener('click', () => {
      if (couponInput.value) {
        window.appState.applyCoupon(couponInput.value);
      }
    });
  }

  // 8. Newsletter Form
  const newsletterForm = document.getElementById('newsletterForm');
  if (newsletterForm) {
    newsletterForm.addEventListener('submit', (e) => {
      e.preventDefault();
      showToast('Welcome to the Collective. Use code OVERSIZE10 for 10% off!');
      newsletterForm.reset();
    });
  }

  // 9. Mobile menu toggle
  const mobileToggle = document.getElementById('mobileMenuToggle');
  const mobileDrawer = document.getElementById('mobileNavDrawer');
  const mobileClose = document.getElementById('mobileNavClose');
  if (mobileToggle && mobileDrawer) {
    mobileToggle.addEventListener('click', () => mobileDrawer.classList.add('open'));
  }
  if (mobileClose && mobileDrawer) {
    mobileClose.addEventListener('click', () => mobileDrawer.classList.remove('open'));
  }
});
