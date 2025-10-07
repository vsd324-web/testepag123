// Mobile Menu Toggle
function toggleMobileMenu() {
    const mobileNav = document.getElementById('mobileNav');
    mobileNav.classList.toggle('active');
}

// Terms and Information Popup
function openTermsPopup(event) {
    event.preventDefault();
    const popup = document.createElement('div');
    popup.className = 'popup-overlay';
    popup.innerHTML = `
        <div class="popup-content">
            <div class="popup-header">
                <h2 style="color: #dc2626; font-size: 1.75rem; font-weight: 700; margin: 0;">Terms and Information</h2>
                <button class="popup-close" onclick="closePopup()">&times;</button>
            </div>
            <div class="popup-body">
                <h3 style="color: #dc2626; font-size: 1.25rem; font-weight: 700; margin-bottom: 1rem;">Limitation of Liability</h3>
                <p style="line-height: 1.8; color: #374151; margin-bottom: 1rem;">
                    The products offered on this website are dietary supplements and should not be used as a substitute for a balanced diet or a healthy lifestyle. Results may vary significantly from person to person, depending on individual factors such as genetics, age, physical activity, diet, health conditions, among others. We do not guarantee specific results or concrete effects. The experiences shared by other users are individual testimonials and do not represent promises of effectiveness.
                </p>
                <p style="line-height: 1.8; color: #374151; margin-bottom: 1rem;">
                    These products are not intended to diagnose, treat, cure, or prevent any disease, nor should they be construed as medical treatments. They have also not been evaluated by the European Food Safety Authority (EFSA) or any other medical or governmental body.
                </p>
                <p style="line-height: 1.8; color: #374151;">
                    This website has no commercial relationship, sponsorship, or affiliation with Meta (Facebook, Instagram), TikTok, Google, or other platforms mentioned.
                </p>
            </div>
        </div>
    `;
    document.body.appendChild(popup);
    setTimeout(() => popup.classList.add('active'), 10);
}

// Label Information Popup
function openLabelPopup(event) {
    event.preventDefault();
    const popup = document.createElement('div');
    popup.className = 'popup-overlay';
    popup.innerHTML = `
        <div class="popup-content">
            <div class="popup-header">
                <h2 style="color: #dc2626; font-size: 1.75rem; font-weight: 700; margin: 0;">Label Information</h2>
                <button class="popup-close" onclick="closePopup()">&times;</button>
            </div>
            <div class="popup-body">
                <div style="line-height: 1.8; color: #374151;">
                    <p style="margin-bottom: 1rem;"><strong>30 vegetarian capsules</strong><br>Dietary supplement<br>Net quantity: 23.88 g</p>

                    <p style="margin-bottom: 1rem; font-weight: 700; color: #dc2626;">Ingredients per daily dose (1 capsule):</p>
                    <ul style="margin-bottom: 1.5rem; padding-left: 1.5rem;">
                        <li>Maca root extract (Lepidium meyenii) – 300 mg</li>
                        <li>Tribulus terrestris extract (Tribulus terrestris) – 300 mg</li>
                        <li>Ashwagandha root extract (Withania somnifera) – 100 mg</li>
                        <li>Capsule composition – 100% hypromellose</li>
                    </ul>

                    <p style="margin-bottom: 0.75rem;"><strong>Directions for use:</strong> Take 1 capsule daily with water</p>
                    <p style="margin-bottom: 0.75rem;"><strong>Warning:</strong> Do not exceed the recommended daily dose</p>
                    <p style="margin-bottom: 1.5rem;">Do not use as a substitute for a varied diet<br>Store at room temperature, out of reach of children</p>

                    <p style="margin-bottom: 0.5rem; font-size: 0.9rem; color: #6b7280;">
                        <strong>Batch:</strong> L0725 | <strong>Expiration date:</strong> July 31, 2027<br>
                        L0825 | <strong>Expiration date:</strong> August 31, 2027<br>
                        <strong>Reg. no.:</strong> П142407528
                    </p>
                    <p style="font-size: 0.9rem; color: #6b7280;">
                        <strong>Manufactured by:</strong> Evelin 29 EOOD, Nikolaevsko shose 3, Radomir 2400, Bulgaria
                    </p>
                </div>
            </div>
        </div>
    `;
    document.body.appendChild(popup);
    setTimeout(() => popup.classList.add('active'), 10);
}

// Close Popup
function closePopup() {
    const popup = document.querySelector('.popup-overlay');
    if (popup) {
        popup.classList.remove('active');
        setTimeout(() => popup.remove(), 300);
    }
}

// Close popup when clicking on overlay
document.addEventListener('click', function(e) {
    if (e.target.classList.contains('popup-overlay')) {
        closePopup();
    }
});

// Audio Player Functionality
class AudioPlayer {
    constructor() {
        this.audioContext = null;
        this.oscillator = null;
        this.gainNode = null;
        this.isPlaying = false;
        this.currentTime = 0;
        this.duration = 180; // 3 minutes default
        this.interval = null;
        this.tracks = [
            { name: 'Instant Confidence Activation', duration: 180, frequency: 40 },
            { name: 'Performance Anxiety Destroyer', duration: 210, frequency: 10 },
            { name: 'Alpha Male Activation', duration: 165, frequency: 30 }
        ];
        this.currentTrack = 0;
    }

    init() {
        this.setupEventListeners();
        this.updateDisplay();
    }

    setupEventListeners() {
        const playBtn = document.getElementById('playBtn');
        const resetBtn = document.getElementById('resetBtn');
        const muteBtn = document.getElementById('muteBtn');
        const trackBtns = document.querySelectorAll('.track-btn');

        if (playBtn) playBtn.addEventListener('click', () => this.togglePlay());
        if (resetBtn) resetBtn.addEventListener('click', () => this.reset());
        if (muteBtn) muteBtn.addEventListener('click', () => this.toggleMute());
        
        trackBtns.forEach((btn, index) => {
            btn.addEventListener('click', () => this.selectTrack(index));
        });
    }

    async createAudioContext() {
        if (!this.audioContext) {
            this.audioContext = new (window.AudioContext || window.webkitAudioContext)();
        }
        
        if (this.audioContext.state === 'suspended') {
            await this.audioContext.resume();
        }
    }

    async togglePlay() {
        if (this.isPlaying) {
            this.stop();
        } else {
            await this.play();
        }
    }

    async play() {
        try {
            await this.createAudioContext();
            
            this.oscillator = this.audioContext.createOscillator();
            this.gainNode = this.audioContext.createGain();
            
            this.oscillator.connect(this.gainNode);
            this.gainNode.connect(this.audioContext.destination);
            
            const track = this.tracks[this.currentTrack];
            this.oscillator.frequency.setValueAtTime(track.frequency, this.audioContext.currentTime);
            this.oscillator.type = 'sine';
            
            this.gainNode.gain.setValueAtTime(0.1, this.audioContext.currentTime);
            
            this.oscillator.start();
            this.isPlaying = true;
            
            this.interval = setInterval(() => {
                this.currentTime++;
                this.updateDisplay();
                
                if (this.currentTime >= this.duration) {
                    this.stop();
                }
            }, 1000);
            
            this.updatePlayButton();
        } catch (error) {
            console.log('Audio not supported or blocked');
        }
    }

    stop() {
        if (this.oscillator) {
            this.oscillator.stop();
            this.oscillator = null;
        }
        
        if (this.interval) {
            clearInterval(this.interval);
            this.interval = null;
        }
        
        this.isPlaying = false;
        this.updatePlayButton();
    }

    reset() {
        this.stop();
        this.currentTime = 0;
        this.updateDisplay();
    }

    toggleMute() {
        if (this.gainNode) {
            const currentGain = this.gainNode.gain.value;
            this.gainNode.gain.setValueAtTime(currentGain > 0 ? 0 : 0.1, this.audioContext.currentTime);
        }
    }

    selectTrack(index) {
        this.stop();
        this.currentTrack = index;
        this.duration = this.tracks[index].duration;
        this.currentTime = 0;
        this.updateDisplay();
        this.updateTrackButtons();
    }

    updateDisplay() {
        const currentTimeEl = document.getElementById('currentTime');
        const totalTimeEl = document.getElementById('totalTime');
        const progressBar = document.getElementById('progressBar');
        
        if (currentTimeEl) currentTimeEl.textContent = this.formatTime(this.currentTime);
        if (totalTimeEl) totalTimeEl.textContent = this.formatTime(this.duration);
        if (progressBar) {
            const progress = (this.currentTime / this.duration) * 100;
            progressBar.style.width = `${progress}%`;
        }
    }

    updatePlayButton() {
        const playBtn = document.getElementById('playBtn');
        if (playBtn) {
            playBtn.innerHTML = this.isPlaying ? '⏸️' : '▶️';
        }
    }

    updateTrackButtons() {
        const trackBtns = document.querySelectorAll('.track-btn');
        trackBtns.forEach((btn, index) => {
            if (index === this.currentTrack) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });
    }

    formatTime(seconds) {
        const mins = Math.floor(seconds / 60);
        const secs = seconds % 60;
        return `${mins}:${secs.toString().padStart(2, '0')}`;
    }
}

// Initialize audio player when page loads
document.addEventListener('DOMContentLoaded', function() {
    // Initialize audio player if on audio page
    if (document.getElementById('audioPlayer')) {
        const player = new AudioPlayer();
        player.init();
    }

    // Enhanced smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const headerOffset = 80;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Add active class to current page nav link
    const currentPage = window.location.pathname.split('/').pop() || 'index.php';
    document.querySelectorAll('.nav-link').forEach(link => {
        if (link.getAttribute('href') === currentPage) {
            link.classList.add('active');
        }
    });

    // Close mobile menu on navigation
    document.querySelectorAll('.mobile-nav .nav-link').forEach(link => {
        link.addEventListener('click', function() {
            const mobileNav = document.getElementById('mobileNav');
            if (mobileNav && mobileNav.classList.contains('active')) {
                mobileNav.classList.remove('active');
            }
        });
    });

    // Add smooth scroll to top button
    let scrollToTopBtn = document.getElementById('scrollToTop');
    if (!scrollToTopBtn) {
        scrollToTopBtn = document.createElement('button');
        scrollToTopBtn.id = 'scrollToTop';
        scrollToTopBtn.innerHTML = '↑';
        scrollToTopBtn.setAttribute('aria-label', 'Scroll to top');
        document.body.appendChild(scrollToTopBtn);
    }

    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            scrollToTopBtn.classList.add('visible');
        } else {
            scrollToTopBtn.classList.remove('visible');
        }
    });

    scrollToTopBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});

// Close mobile menu when clicking outside
document.addEventListener('click', function(e) {
    const mobileNav = document.getElementById('mobileNav');
    const menuBtn = document.querySelector('.mobile-menu-btn');
    
    if (mobileNav && mobileNav.classList.contains('active')) {
        if (!mobileNav.contains(e.target) && !menuBtn.contains(e.target)) {
            mobileNav.classList.remove('active');
        }
    }
});

// Intersection Observer for animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe elements for animation
document.addEventListener('DOMContentLoaded', function() {
    const animatedElements = document.querySelectorAll('.module-card, .bonus-card, .benefit-card');
    animatedElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
});
