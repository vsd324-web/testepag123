<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3-Minute Confidence Audio - Men's Force</title>
    <meta name="description" content="Professional mental conditioning audio tracks for instant confidence">
    <link rel="stylesheet" href="style.css">
</head>
<body class="module-page">
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
        <section class="page-header">
            <div class="container">
                <div class="bonus-icon">🎁</div>
                <h1 class="page-title">3-Minute Confidence Audio Collection</h1>
                <p class="page-subtitle">
                    Professional mental conditioning audio tracks that eliminate anxiety and activate 
                    peak masculine confidence in just minutes. Used by elite performers worldwide.
                </p>
            </div>
        </section>

        <section class="content-section">
            <div class="container">
                <!-- Audio Player -->
                <div id="audioPlayer" style="background: linear-gradient(135deg, #dc2626, #000); color: white; border-radius: 12px; padding: 2rem; margin-bottom: 3rem;">
                    <div style="text-align: center; margin-bottom: 2rem;">
                        <h2 style="font-size: 2rem; margin-bottom: 1rem;">Instant Confidence Activation</h2>
                        <p style="color: #fff; margin-bottom: 1.5rem;">Eliminates anxiety and activates peak masculine confidence in just 3 minutes</p>
                    </div>

                    <div style="background: rgba(255,255,255,0.1); border-radius: 8px; padding: 1.5rem; max-width: 400px; margin: 0 auto 2rem;">
                        <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
                            <button id="playBtn" style="background: white; color: #dc2626; border: none; border-radius: 50%; width: 60px; height: 60px; font-size: 1.5rem; cursor: pointer; display: flex; align-items: center; justify-content: center;">▶️</button>
                            <button id="resetBtn" style="background: rgba(255,255,255,0.2); color: white; border: none; border-radius: 50%; width: 50px; height: 50px; font-size: 1.2rem; cursor: pointer; display: flex; align-items: center; justify-content: center;">🔄</button>
                            <button id="muteBtn" style="background: rgba(255,255,255,0.2); color: white; border: none; border-radius: 50%; width: 50px; height: 50px; font-size: 1.2rem; cursor: pointer; display: flex; align-items: center; justify-content: center;">🔊</button>
                        </div>

                        <div style="margin-bottom: 1rem;">
                            <div style="background: rgba(255,255,255,0.2); border-radius: 10px; height: 8px; overflow: hidden;">
                                <div id="progressBar" style="background: white; height: 100%; width: 0%; transition: width 0.3s; border-radius: 10px;"></div>
                            </div>
                        </div>

                        <div style="display: flex; justify-content: space-between; font-size: 0.9rem;">
                            <span id="currentTime">0:00</span>
                            <span id="totalTime">3:00</span>
                        </div>

                        <div style="text-align: center; margin-top: 1rem;">
                            <p style="color: #fff; font-size: 0.9rem;">🎧 Use headphones for maximum effectiveness</p>
                        </div>
                    </div>

                    <!-- Track Selection -->
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem;">
                        <button class="track-btn active" data-track="0" style="padding: 1rem; border-radius: 8px; background: white; color: #dc2626; border: none; cursor: pointer; text-align: left;">
                            <h4 style="margin: 0 0 0.5rem 0; font-size: 1rem;">Instant Confidence Activation</h4>
                            <p style="margin: 0; font-size: 0.8rem; opacity: 0.8;">3:00</p>
                        </button>
                        <button class="track-btn" data-track="1" style="padding: 1rem; border-radius: 8px; background: rgba(255,255,255,0.2); color: white; border: none; cursor: pointer; text-align: left;">
                            <h4 style="margin: 0 0 0.5rem 0; font-size: 1rem;">Performance Anxiety Destroyer</h4>
                            <p style="margin: 0; font-size: 0.8rem; opacity: 0.8;">3:30</p>
                        </button>
                        <button class="track-btn" data-track="2" style="padding: 1rem; border-radius: 8px; background: rgba(255,255,255,0.2); color: white; border: none; cursor: pointer; text-align: left;">
                            <h4 style="margin: 0 0 0.5rem 0; font-size: 1rem;">Alpha Male Activation</h4>
                            <p style="margin: 0; font-size: 0.8rem; opacity: 0.8;">2:45</p>
                        </button>
                    </div>
                </div>

                <!-- Complete Audio Content -->
                <div style="display: grid; grid-template-columns: 1fr; gap: 2rem;">
                    <!-- Track 1 -->
                    <div class="card">
                        <div style="background: linear-gradient(135deg, #dc2626, #000); color: white; padding: 1.5rem; margin: -2rem -2rem 1.5rem -2rem; border-radius: 12px 12px 0 0;">
                            <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
                                <div style="font-size: 2rem;">🎧</div>
                                <h3 style="margin: 0; font-size: 1.5rem;">Instant Confidence Activation</h3>
                                <span style="background: rgba(255,255,255,0.2); padding: 0.25rem 0.75rem; border-radius: 15px; font-size: 0.8rem;">3:00</span>
                            </div>
                            <p style="color: #fff; font-size: 1.1rem; margin: 0;">Eliminates anxiety and activates peak masculine confidence in just 3 minutes</p>
                        </div>
                        
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
                            <div>
                                <h4 style="color: #dc2626; margin-bottom: 1rem;">Audio Script Preview</h4>
                                <div style="background: #f9fafb; border: 1px solid #e5e7eb; border-radius: 8px; padding: 1rem; margin-bottom: 1.5rem;">
                                    <p style="color: #666; font-style: italic; line-height: 1.6; margin: 0;">
                                        Close your eyes and take a deep breath... You are a powerful, confident man...
                                        Feel the strength flowing through your body... Your shoulders are broad and strong...
                                        Your voice is deep and commanding... You move with purpose and confidence...
                                        Every woman you meet is attracted to your natural masculine energy...
                                        You are in complete control of your sexual power...
                                        Feel this confidence radiating from every cell in your body...
                                        You are irresistible... You are unstoppable... You are the alpha male...
                                    </p>
                                </div>

                                <h4 style="color: #dc2626; margin-bottom: 0.75rem;">Technical Specifications</h4>
                                <ul style="list-style: none; margin: 0; padding: 0;">
                                    <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                                        <span style="color: #dc2626;">✓</span>
                                        <span>Binaural Beats: 40Hz Alpha waves for confidence</span>
                                    </li>
                                    <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                                        <span style="color: #dc2626;">✓</span>
                                        <span>High-quality 320kbps MP3 format</span>
                                    </li>
                                    <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                                        <span style="color: #dc2626;">✓</span>
                                        <span>Professional studio production</span>
                                    </li>
                                    <li style="display: flex; align-items: center; gap: 0.75rem;">
                                        <span style="color: #dc2626;">✓</span>
                                        <span>Subliminal affirmations embedded</span>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <h4 style="color: #dc2626; margin-bottom: 1rem;">Key Benefits</h4>
                                <div style="margin-bottom: 1.5rem;">
                                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                                        <span style="color: #dc2626; font-size: 1.2rem;">⭐</span>
                                        <span>Instant anxiety elimination</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                                        <span style="color: #dc2626; font-size: 1.2rem;">⭐</span>
                                        <span>Confidence boost within minutes</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                                        <span style="color: #dc2626; font-size: 1.2rem;">⭐</span>
                                        <span>Mental clarity and focus</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                                        <span style="color: #dc2626; font-size: 1.2rem;">⭐</span>
                                        <span>Masculine energy activation</span>
                                    </div>
                                </div>

                                <h4 style="color: #dc2626; margin-bottom: 0.75rem;">Subliminal Affirmations</h4>
                                <div style="background: #fef2f2; border: 1px solid #fecaca; border-radius: 8px; padding: 1rem;">
                                    <ul style="margin: 0; padding: 0; list-style: none;">
                                        <li style="color: #dc2626; font-size: 0.9rem; margin-bottom: 0.25rem;">• "I am completely confident"</li>
                                        <li style="color: #dc2626; font-size: 0.9rem; margin-bottom: 0.25rem;">• "I am sexually powerful"</li>
                                        <li style="color: #dc2626; font-size: 0.9rem; margin-bottom: 0.25rem;">• "Women are attracted to me"</li>
                                        <li style="color: #dc2626; font-size: 0.9rem; margin-bottom: 0.25rem;">• "I am in control"</li>
                                        <li style="color: #dc2626; font-size: 0.9rem;">• "I am the alpha male"</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Track 2 -->
                    <div class="card">
                        <div style="background: linear-gradient(135deg, #dc2626, #000); color: white; padding: 1.5rem; margin: -2rem -2rem 1.5rem -2rem; border-radius: 12px 12px 0 0;">
                            <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
                                <div style="font-size: 2rem;">🎧</div>
                                <h3 style="margin: 0; font-size: 1.5rem;">Performance Anxiety Destroyer</h3>
                                <span style="background: rgba(255,255,255,0.2); padding: 0.25rem 0.75rem; border-radius: 15px; font-size: 0.8rem;">3:30</span>
                            </div>
                            <p style="color: #fff; font-size: 1.1rem; margin: 0;">Specialized audio to completely eliminate performance anxiety and fear</p>
                        </div>
                        
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
                            <div>
                                <h4 style="color: #dc2626; margin-bottom: 1rem;">Audio Script Preview</h4>
                                <div style="background: #f9fafb; border: 1px solid #e5e7eb; border-radius: 8px; padding: 1rem; margin-bottom: 1.5rem;">
                                    <p style="color: #666; font-style: italic; line-height: 1.6; margin: 0;">
                                        Breathe deeply and let all tension leave your body...
                                        Performance anxiety is melting away like ice in the sun...
                                        You are calm, relaxed, and completely in control...
                                        Your body responds perfectly to your commands...
                                        You feel no pressure, only pleasure and confidence...
                                        Every intimate moment is natural and effortless...
                                        You are focused only on pleasure and connection...
                                        Anxiety has no power over you... You are free and confident...
                                    </p>
                                </div>

                                <h4 style="color: #dc2626; margin-bottom: 0.75rem;">Technical Specifications</h4>
                                <ul style="list-style: none; margin: 0; padding: 0;">
                                    <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                                        <span style="color: #dc2626;">✓</span>
                                        <span>Binaural Beats: 10Hz Alpha waves for relaxation</span>
                                    </li>
                                    <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                                        <span style="color: #dc2626;">✓</span>
                                        <span>High-quality 320kbps MP3 format</span>
                                    </li>
                                    <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                                        <span style="color: #dc2626;">✓</span>
                                        <span>Professional studio production</span>
                                    </li>
                                    <li style="display: flex; align-items: center; gap: 0.75rem;">
                                        <span style="color: #dc2626;">✓</span>
                                        <span>Subliminal affirmations embedded</span>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <h4 style="color: #dc2626; margin-bottom: 1rem;">Key Benefits</h4>
                                <div style="margin-bottom: 1.5rem;">
                                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                                        <span style="color: #dc2626; font-size: 1.2rem;">⭐</span>
                                        <span>Destroys performance anxiety</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                                        <span style="color: #dc2626; font-size: 1.2rem;">⭐</span>
                                        <span>Builds unshakeable confidence</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                                        <span style="color: #dc2626; font-size: 1.2rem;">⭐</span>
                                        <span>Removes mental blocks</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                                        <span style="color: #dc2626; font-size: 1.2rem;">⭐</span>
                                        <span>Creates calm focus</span>
                                    </div>
                                </div>

                                <h4 style="color: #dc2626; margin-bottom: 0.75rem;">Subliminal Affirmations</h4>
                                <div style="background: #fef2f2; border: 1px solid #fecaca; border-radius: 8px; padding: 1rem;">
                                    <ul style="margin: 0; padding: 0; list-style: none;">
                                        <li style="color: #dc2626; font-size: 0.9rem; margin-bottom: 0.25rem;">• "I am completely relaxed"</li>
                                        <li style="color: #dc2626; font-size: 0.9rem; margin-bottom: 0.25rem;">• "I have no anxiety"</li>
                                        <li style="color: #dc2626; font-size: 0.9rem; margin-bottom: 0.25rem;">• "I perform with confidence"</li>
                                        <li style="color: #dc2626; font-size: 0.9rem; margin-bottom: 0.25rem;">• "I am naturally skilled"</li>
                                        <li style="color: #dc2626; font-size: 0.9rem;">• "I enjoy every moment"</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Track 3 -->
                    <div class="card">
                        <div style="background: linear-gradient(135deg, #dc2626, #000); color: white; padding: 1.5rem; margin: -2rem -2rem 1.5rem -2rem; border-radius: 12px 12px 0 0;">
                            <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
                                <div style="font-size: 2rem;">🎧</div>
                                <h3 style="margin: 0; font-size: 1.5rem;">Alpha Male Activation</h3>
                                <span style="background: rgba(255,255,255,0.2); padding: 0.25rem 0.75rem; border-radius: 15px; font-size: 0.8rem;">2:45</span>
                            </div>
                            <p style="color: #fff; font-size: 1.1rem; margin: 0;">Awakens your primal masculine energy and natural dominance</p>
                        </div>
                        
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
                            <div>
                                <h4 style="color: #dc2626; margin-bottom: 1rem;">Audio Script Preview</h4>
                                <div style="background: #f9fafb; border: 1px solid #e5e7eb; border-radius: 8px; padding: 1rem; margin-bottom: 1.5rem;">
                                    <p style="color: #666; font-style: italic; line-height: 1.6; margin: 0;">
                                        Feel the primal power awakening within you...
                                        You are the descendant of warriors and kings...
                                        Your masculine energy is magnetic and irresistible...
                                        You command respect wherever you go...
                                        Your presence alone makes women feel safe and aroused...
                                        You are the protector, the provider, the alpha...
                                        This power flows through your veins like liquid fire...
                                        You are the man every woman desires and every man respects...
                                    </p>
                                </div>

                                <h4 style="color: #dc2626; margin-bottom: 0.75rem;">Technical Specifications</h4>
                                <ul style="list-style: none; margin: 0; padding: 0;">
                                    <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                                        <span style="color: #dc2626;">✓</span>
                                        <span>Binaural Beats: 30Hz Beta waves for alertness</span>
                                    </li>
                                    <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                                        <span style="color: #dc2626;">✓</span>
                                        <span>High-quality 320kbps MP3 format</span>
                                    </li>
                                    <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                                        <span style="color: #dc2626;">✓</span>
                                        <span>Professional studio production</span>
                                    </li>
                                    <li style="display: flex; align-items: center; gap: 0.75rem;">
                                        <span style="color: #dc2626;">✓</span>
                                        <span>Subliminal affirmations embedded</span>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <h4 style="color: #dc2626; margin-bottom: 1rem;">Key Benefits</h4>
                                <div style="margin-bottom: 1.5rem;">
                                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                                        <span style="color: #dc2626; font-size: 1.2rem;">⭐</span>
                                        <span>Activates alpha energy</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                                        <span style="color: #dc2626; font-size: 1.2rem;">⭐</span>
                                        <span>Increases natural dominance</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                                        <span style="color: #dc2626; font-size: 1.2rem;">⭐</span>
                                        <span>Boosts testosterone mentally</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                                        <span style="color: #dc2626; font-size: 1.2rem;">⭐</span>
                                        <span>Enhances masculine presence</span>
                                    </div>
                                </div>

                                <h4 style="color: #dc2626; margin-bottom: 0.75rem;">Subliminal Affirmations</h4>
                                <div style="background: #fef2f2; border: 1px solid #fecaca; border-radius: 8px; padding: 1rem;">
                                    <ul style="margin: 0; padding: 0; list-style: none;">
                                        <li style="color: #dc2626; font-size: 0.9rem; margin-bottom: 0.25rem;">• "I am the alpha male"</li>
                                        <li style="color: #dc2626; font-size: 0.9rem; margin-bottom: 0.25rem;">• "I am naturally dominant"</li>
                                        <li style="color: #dc2626; font-size: 0.9rem; margin-bottom: 0.25rem;">• "I command respect"</li>
                                        <li style="color: #dc2626; font-size: 0.9rem; margin-bottom: 0.25rem;">• "I am irresistibly masculine"</li>
                                        <li style="color: #dc2626; font-size: 0.9rem;">• "I am a natural leader"</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Usage Instructions -->
                <div style="background: linear-gradient(135deg, #dc2626, #b91c1c); color: white; border-radius: 12px; padding: 2rem; margin-top: 3rem;">
                    <h2 style="font-size: 2rem; margin-bottom: 1.5rem; text-align: center;">How to Use for Maximum Results</h2>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem;">
                        <div style="text-align: center;">
                            <div style="background: rgba(255,255,255,0.2); border-radius: 50%; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem; font-weight: bold;">1</div>
                            <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem;">Before Intimacy</h3>
                            <p style="color: #fff;">Listen 5-10 minutes before intimate moments for instant confidence</p>
                        </div>
                        <div style="text-align: center;">
                            <div style="background: rgba(255,255,255,0.2); border-radius: 50%; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem; font-weight: bold;">2</div>
                            <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem;">Daily Conditioning</h3>
                            <p style="color: #fff;">Use daily for 21 days to reprogram your subconscious mind</p>
                        </div>
                        <div style="text-align: center;">
                            <div style="background: rgba(255,255,255,0.2); border-radius: 50%; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem; font-weight: bold;">3</div>
                            <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem;">Emergency Use</h3>
                            <p style="color: #fff;">Play immediately when feeling anxious or uncertain</p>
                        </div>
                    </div>
                </div>

                <!-- Success Stories -->
                <div class="card" style="margin-top: 2rem;">
                    <h2 style="font-size: 2rem; text-align: center; margin-bottom: 2rem;">Success Stories</h2>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                        <div style="background: #f9fafb; border-radius: 8px; padding: 1.5rem;">
                            <div style="display: flex; align-items: center; gap: 0.25rem; margin-bottom: 1rem;">
                                <span style="color: #fbbf24; font-size: 1.2rem;">★★★★★</span>
                            </div>
                            <p style="color: #666; margin-bottom: 1rem; line-height: 1.6;">
                                "I was skeptical about audio therapy, but this changed everything. I went from 
                                being terrified of intimacy to feeling like a confident alpha male. The change 
                                was immediate and lasting."
                            </p>
                            <p style="color: #666; font-size: 0.9rem; font-weight: bold;">- Michael R., Age 34</p>
                        </div>
                        <div style="background: #f9fafb; border-radius: 8px; padding: 1.5rem;">
                            <div style="display: flex; align-items: center; gap: 0.25rem; margin-bottom: 1rem;">
                                <span style="color: #fbbf24; font-size: 1.2rem;">★★★★★</span>
                            </div>
                            <p style="color: #666; margin-bottom: 1rem; line-height: 1.6;">
                                "After years of performance anxiety, this 3-minute audio became my secret weapon. 
                                Now I approach every intimate moment with complete confidence and control."
                            </p>
                            <p style="color: #666; font-size: 0.9rem; font-weight: bold;">- David L., Age 42</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <div class="footer-logo">
                        <span class="logo-endurox">MEN'S</span>
                        <span class="logo-prime">FORCE</span>
                    </div>
                    <div class="copyright">
                        <p>© <?php echo date('Y'); ?> Men's Force. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="main.js"></script>
    <script>
        // Enhanced audio player for this page
        document.addEventListener('DOMContentLoaded', function() {
            const tracks = [
                { name: 'Instant Confidence Activation', duration: 180, frequency: 40 },
                { name: 'Performance Anxiety Destroyer', duration: 210, frequency: 10 },
                { name: 'Alpha Male Activation', duration: 165, frequency: 30 }
            ];
            
            let currentTrack = 0;
            let isPlaying = false;
            let currentTime = 0;
            let audioContext = null;
            let oscillator = null;
            let gainNode = null;
            let interval = null;
            
            const playBtn = document.getElementById('playBtn');
            const resetBtn = document.getElementById('resetBtn');
            const muteBtn = document.getElementById('muteBtn');
            const progressBar = document.getElementById('progressBar');
            const currentTimeEl = document.getElementById('currentTime');
            const totalTimeEl = document.getElementById('totalTime');
            const trackBtns = document.querySelectorAll('.track-btn');
            
            function formatTime(seconds) {
                const mins = Math.floor(seconds / 60);
                const secs = seconds % 60;
                return `${mins}:${secs.toString().padStart(2, '0')}`;
            }
            
            function updateDisplay() {
                const track = tracks[currentTrack];
                currentTimeEl.textContent = formatTime(currentTime);
                totalTimeEl.textContent = formatTime(track.duration);
                const progress = (currentTime / track.duration) * 100;
                progressBar.style.width = `${progress}%`;
            }
            
            function updateTrackButtons() {
                trackBtns.forEach((btn, index) => {
                    if (index === currentTrack) {
                        btn.style.background = 'white';
                        btn.style.color = '#dc2626';
                        btn.classList.add('active');
                    } else {
                        btn.style.background = 'rgba(255,255,255,0.2)';
                        btn.style.color = 'white';
                        btn.classList.remove('active');
                    }
                });
            }
            
            async function createAudioContext() {
                if (!audioContext) {
                    audioContext = new (window.AudioContext || window.webkitAudioContext)();
                }
                if (audioContext.state === 'suspended') {
                    await audioContext.resume();
                }
            }
            
            async function play() {
                try {
                    await createAudioContext();
                    
                    oscillator = audioContext.createOscillator();
                    gainNode = audioContext.createGain();
                    
                    oscillator.connect(gainNode);
                    gainNode.connect(audioContext.destination);
                    
                    const track = tracks[currentTrack];
                    oscillator.frequency.setValueAtTime(track.frequency, audioContext.currentTime);
                    oscillator.type = 'sine';
                    
                    gainNode.gain.setValueAtTime(0.1, audioContext.currentTime);
                    
                    oscillator.start();
                    isPlaying = true;
                    playBtn.innerHTML = '⏸️';
                    
                    interval = setInterval(() => {
                        currentTime++;
                        updateDisplay();
                        
                        if (currentTime >= tracks[currentTrack].duration) {
                            stop();
                        }
                    }, 1000);
                } catch (error) {
                    console.log('Audio not supported');
                }
            }
            
            function stop() {
                if (oscillator) {
                    oscillator.stop();
                    oscillator = null;
                }
                if (interval) {
                    clearInterval(interval);
                    interval = null;
                }
                isPlaying = false;
                playBtn.innerHTML = '▶️';
            }
            
            function reset() {
                stop();
                currentTime = 0;
                updateDisplay();
            }
            
            function selectTrack(index) {
                stop();
                currentTrack = index;
                currentTime = 0;
                updateDisplay();
                updateTrackButtons();
            }
            
            playBtn.addEventListener('click', () => {
                if (isPlaying) {
                    stop();
                } else {
                    play();
                }
            });
            
            resetBtn.addEventListener('click', reset);
            
            muteBtn.addEventListener('click', () => {
                if (gainNode) {
                    const currentGain = gainNode.gain.value;
                    gainNode.gain.setValueAtTime(currentGain > 0 ? 0 : 0.1, audioContext.currentTime);
                }
            });
            
            trackBtns.forEach((btn, index) => {
                btn.addEventListener('click', () => selectTrack(index));
            });
            
            // Initialize
            updateDisplay();
            updateTrackButtons();
        });
    </script>
</body>
</html>
