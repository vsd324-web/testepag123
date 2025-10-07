<?php require __DIR__ . '/auth.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men's Force — Bonuses Portal</title>
    <meta name="description" content="Get access to all your Men's Force bonuses">
    <link rel="stylesheet" href="style.css">
    <script src="main.js" defer></script>
    <style>
      /* Minor helpers to reflect Men's Force brand in header */
      .logo-mens { color:#fff; font-weight:800; letter-spacing:2px; font-size: 1.25rem; display:inline-block; }
      .logo-force { color:#dc2626; font-weight:800; letter-spacing:2px; font-style:italic; margin-top:0; display:inline-block; }
      .hero-mens { color:#ffffff; display:inline-block; }
      .hero-force { color:#dc2626; display:inline-block; font-style: italic; }
    </style>
  </head>
<body>
    <header class="header">
        <div class="container">
            <div class="header-content">
                <a href="index.php" class="logo">
                    <span class="logo-text">
                        <span class="logo-mens">MEN'S</span>
                        <span class="logo-force">FORCE</span>
                    </span>
                </a>

                <nav class="nav desktop-nav">
                    <a href="index.php" class="nav-link">Home</a>
                    <a href="logout.php" class="nav-link">Logout</a>
                </nav>

                <button class="mobile-menu-btn" onclick="toggleMobileMenu()">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>

            <nav class="mobile-nav" id="mobileNav">
                <a href="index.php" class="nav-link">Home</a>
                <a href="logout.php" class="nav-link">Logout</a>
            </nav>
        </div>
    </header>

    <main>
        <!-- Hero: Men's Force only + subtitle, no buttons -->
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title">
                        <span class="hero-mens">MEN'S</span>
                        <span class="hero-force">FORCE</span>
                    </h1>
                    <p class="hero-subtitle">Get access to all your bonuses.</p>
                </div>
            </div>
        </section>

        <!-- Daily Dosage Section -->
        <section class="dosage-section" style="background: #f9fafb; padding: 2.5rem 0;">
            <div class="container">
                <div class="dosage-card" style="background: white; border-radius: 12px; padding: 2rem; max-width: 700px; margin: 0 auto; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                    <div style="display: grid; gap: 1.5rem;">
                        <div>
                            <h3 style="color: #dc2626; font-size: 1.1rem; font-weight: 700; margin-bottom: 0.5rem;">Daily Dosage</h3>
                            <p style="color: #374151; line-height: 1.6;">Take 1 capsule per day with water.</p>
                        </div>
                        <div>
                            <h3 style="color: #dc2626; font-size: 1.1rem; font-weight: 700; margin-bottom: 0.5rem;">Best Time</h3>
                            <p style="color: #374151; line-height: 1.6;">Take at the same time every day — choose a time that works for your schedule and stick to it for best results.</p>
                        </div>
                        <div>
                            <h3 style="color: #dc2626; font-size: 1.1rem; font-weight: 700; margin-bottom: 0.5rem;">Need Help?</h3>
                            <p style="color: #374151; line-height: 1.6;">For questions or support, please contact:<br><a href="mailto:clientassistdesk@gmail.com" style="color: #dc2626; text-decoration: none; font-weight: 500;">clientassistdesk@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Deliverables -->
        <section class="modules">
            <div class="container">
                <div class="modules-grid">
                    <a href="bonus-positions.php" class="module-card featured">
                        <div class="module-icon">❤️</div>
                        <h3>The Five Positions to Make Her Squirt</h3>
                        <p>Carefully selected positions inspired by ancient Kama Sutra to trigger deep sensitivity points and deliver new levels of pleasure.</p>
                    </a>

                    <a href="bonus-private-session.php" class="module-card">
                        <div class="module-icon">🧠</div>
                        <h3>Adult Actor Performance Masterclass</h3>
                        <p>In‑depth written protocol to build control and endurance — practical drills, pacing, and breathwork to go 30–60+ minutes.</p>
                    </a>

                    <a href="bonus-lesbian-trick.php" class="module-card">
                        <div class="module-icon">💋</div>
                        <h3>The Lesbian Trick</h3>
                        <p>Practical, explicit guide on how to make a woman climax using only your tongue and fingers — understand every pleasure button.</p>
                    </a>
                </div>
                
            </div>
        </section>

        <!-- Extra Bonuses (existing modules reused) -->
        <section class="modules">
            <div class="container">
                <div class="section-header">
                    <h2>Extra Bonuses</h2>
                    <p>Additional resources to accelerate your results.</p>
                </div>
                <div class="modules-grid">
                    <a href="bonus-audio.php" class="module-card">
                        <div class="module-icon">🎧</div>
                        <h3>3‑Minute Confidence Audio</h3>
                        <p>Quick mental reset to eliminate anxiety and activate performance confidence.</p>
                    </a>
                    <a href="aphrodisiac-african-juice.php" class="module-card">
                        <div class="module-icon">🧪</div>
                        <h3>Aphrodisiac African Juice</h3>
                        <p>Core daily protocol to support hardness, stamina, and confidence.</p>
                    </a>
                    <a href="additional-recipes.php" class="module-card">
                        <div class="module-icon">📚</div>
                        <h3>Additional Recipes</h3>
                        <p>Complementary combinations to layer on top of your main stack.</p>
                    </a>
                    <a href="daily-tips.php" class="module-card">
                        <div class="module-icon">🎯</div>
                        <h3>Daily Wellness Tips</h3>
                        <p>Simple lifestyle tweaks that compound into lasting results.</p>
                    </a>
                    <a href="exercises.php" class="module-card">
                        <div class="module-icon">💪</div>
                        <h3>Exercise Program</h3>
                        <p>Targeted exercises for control, blood flow, and endurance.</p>
                    </a>
                    <a href="foods-to-avoid.php" class="module-card">
                        <div class="module-icon">⚠️</div>
                        <h3>Foods to Avoid</h3>
                        <p>Identify and remove foods that undermine your performance.</p>
                    </a>
                    <a href="advanced-techniques.php" class="module-card">
                        <div class="module-icon">🧠</div>
                        <h3>Advanced Techniques</h3>
                        <p>Methods to intensify pleasure and control with precision.</p>
                    </a>
                    <a href="mental-preparation.php" class="module-card">
                        <div class="module-icon">❤️</div>
                        <h3>Mental Preparation</h3>
                        <p>Fast pre‑session routine to reset your mind and body.</p>
                    </a>
                </div>
            </div>
        </section>

        <!-- Label Information Section -->
        <section class="modules" style="padding: 3rem 0;">
            <div class="container">
                <div class="modules-grid" style="display: grid; grid-template-columns: 1fr; max-width: 500px; margin: 0 auto;">
                    <a href="#" onclick="openLabelPopup(event)" class="module-card" style="cursor: pointer; text-align: center;">
                        <div class="module-icon">📋</div>
                        <h3>Label Information</h3>
                        <p>View complete product details, ingredients, and manufacturing information.</p>
                    </a>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="footer-content">
                    <div>
                        <div class="footer-logo">
                            <div class="logo-endurox">MEN'S</div>
                            <div class="logo-prime">FORCE</div>
                        </div>
                        <p>Your private portal for Men's Force bonuses.</p>
                        <p style="margin-top: 0.5rem; font-size: 0.9rem;">Contact: clientassistdesk@gmail.com</p>
                    </div>
                    <div class="footer-section">
                        <h3>Account</h3>
                        <ul>
                            <li><a class="nav-link" href="logout.php">Logout</a></li>
                            <li><a class="nav-link" href="#" onclick="openTermsPopup(event)" style="cursor: pointer;">Terms and Information</a></li>
                        </ul>
                    </div>
                </div>
                <div class="copyright">
                    <p>© <?php echo date('Y'); ?> Men's Force. All rights reserved. This website is for informational purposes only.</p>
                </div>
            </div>
        </footer>
    </main>
</body>
</html>
