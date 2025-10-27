// Slider functionality
class CardSlider {
    constructor() {
        this.container = document.getElementById('cardsContainer');
        this.prevBtn = document.getElementById('prevBtn');
        this.nextBtn = document.getElementById('nextBtn');
        this.currentIndex = 0;
        this.cards = document.querySelectorAll('.card');
        this.totalCards = this.cards.length;
        this.cardsPerView = this.getCardsPerView();
        
        this.init();
    }
    
    init() {
        // Add event listeners
        this.prevBtn.addEventListener('click', () => this.prev());
        this.nextBtn.addEventListener('click', () => this.next());
        
        // Handle window resize
        window.addEventListener('resize', () => {
            this.cardsPerView = this.getCardsPerView();
            this.updateSlider();
        });
        
        // Initial state
        this.updateButtons();
        
        // Touch/Swipe support
        this.addTouchSupport();
    }
    
    getCardsPerView() {
        const width = window.innerWidth;
        if (width <= 1200) return 2;
        return 3;
    }
    
    next() {
        const maxIndex = this.totalCards - this.cardsPerView;
        if (this.currentIndex < maxIndex) {
            this.currentIndex++;
            this.updateSlider();
        }
    }
    
    prev() {
        if (this.currentIndex > 0) {
            this.currentIndex--;
            this.updateSlider();
        }
    }
    
    updateSlider() {
        const cardWidth = this.cards[0].offsetWidth;
        const gap = 30;
        const offset = -(this.currentIndex * (cardWidth + gap));
        
        this.container.style.transform = `translateX(${offset}px)`;
        this.updateButtons();
    }
    
    updateButtons() {
        const maxIndex = this.totalCards - this.cardsPerView;
        
        // Disable/enable buttons
        this.prevBtn.disabled = this.currentIndex === 0;
        this.nextBtn.disabled = this.currentIndex >= maxIndex;
    }
    
    addTouchSupport() {
        let startX = 0;
        let currentX = 0;
        let isDragging = false;
        
        this.container.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
            isDragging = true;
        }, { passive: true });
        
        this.container.addEventListener('touchmove', (e) => {
            if (!isDragging) return;
            currentX = e.touches[0].clientX;
        }, { passive: true });
        
        this.container.addEventListener('touchend', () => {
            if (!isDragging) return;
            isDragging = false;
            
            const diff = startX - currentX;
            const threshold = 50;
            
            if (Math.abs(diff) > threshold) {
                if (diff > 0) {
                    this.next();
                } else {
                    this.prev();
                }
            }
        });
        
        // Mouse drag support for desktop
        let mouseStartX = 0;
        let mouseCurrentX = 0;
        let isMouseDragging = false;
        
        this.container.addEventListener('mousedown', (e) => {
            mouseStartX = e.clientX;
            isMouseDragging = true;
            this.container.style.cursor = 'grabbing';
        });
        
        document.addEventListener('mousemove', (e) => {
            if (!isMouseDragging) return;
            mouseCurrentX = e.clientX;
        });
        
        document.addEventListener('mouseup', () => {
            if (!isMouseDragging) return;
            isMouseDragging = false;
            this.container.style.cursor = 'grab';
            
            const diff = mouseStartX - mouseCurrentX;
            const threshold = 50;
            
            if (Math.abs(diff) > threshold) {
                if (diff > 0) {
                    this.next();
                } else {
                    this.prev();
                }
            }
        });
    }
}

// Keyboard navigation
document.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowLeft') {
        document.getElementById('prevBtn').click();
    } else if (e.key === 'ArrowRight') {
        document.getElementById('nextBtn').click();
    }
});

// Hamburger menu animation
const hamburger = document.querySelector('.hamburger');
hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
});

// Smooth scroll for navigation links
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        // Remove active class from all links
        document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
        // Add active class to clicked link
        link.classList.add('active');
    });
});

// Card hover effect enhancement
document.querySelectorAll('.card').forEach(card => {
    card.addEventListener('mouseenter', function() {
        this.style.boxShadow = '0 20px 40px rgba(0, 0, 0, 0.15)';
    });
    
    card.addEventListener('mouseleave', function() {
        this.style.boxShadow = 'none';
    });
});

// Initialize slider when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new CardSlider();
    
    // Add loading animation
    document.body.style.opacity = '0';
    setTimeout(() => {
        document.body.style.transition = 'opacity 0.5s';
        document.body.style.opacity = '1';
    }, 100);
});

// Parallax effect on scroll (optional enhancement)
let ticking = false;
window.addEventListener('scroll', () => {
    if (!ticking) {
        window.requestAnimationFrame(() => {
            const scrolled = window.pageYOffset;
            const cards = document.querySelectorAll('.card');
            
            cards.forEach((card, index) => {
                const speed = 0.5 + (index * 0.1);
                card.style.transform = `translateY(${scrolled * speed * 0.1}px)`;
            });
            
            ticking = false;
        });
        ticking = true;
    }
});

