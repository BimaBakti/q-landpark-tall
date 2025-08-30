// GSAP Modern Animations 2025
document.addEventListener('DOMContentLoaded', function() {
    // Register GSAP plugins
    gsap.registerPlugin(ScrollTrigger, ScrollToPlugin, TextPlugin);

    // Mouse tracking for magnetic effects
    let mouse = { x: 0, y: 0 };
    document.addEventListener('mousemove', (e) => {
        mouse.x = e.clientX;
        mouse.y = e.clientY;
    });

    // Smooth scrolling with enhanced easing
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                gsap.to(window, {
                    duration: 2.5, 
                    scrollTo: {
                        y: target,
                        offsetY: 80
                    }, 
                    ease: "power4.inOut"
                });
            }
        });
    });

    // Advanced text splitting and animation
    const splitTexts = document.querySelectorAll('.split-text');
    splitTexts.forEach(text => {
        // Split text into characters (fallback if SplitText not available)
        const textContent = text.textContent;
        text.innerHTML = textContent.split('').map(char => 
            `<span class="split-char">${char === ' ' ? '&nbsp;' : char}</span>`
        ).join('');
        
        // Animate characters
        gsap.fromTo(text.querySelectorAll('.split-char'), 
            {
                y: 100,
                opacity: 0,
                rotateX: -90
            },
            {
                y: 0,
                opacity: 1,
                rotateX: 0,
                duration: 0.8,
                stagger: 0.05,
                ease: "back.out(1.7)",
                scrollTrigger: {
                    trigger: text,
                    start: "top 80%",
                    toggleActions: "play none none reverse"
                }
            }
        );
    });

    // Morphing text animation
    const morphingTexts = document.querySelectorAll('.morphing-text');
    morphingTexts.forEach(text => {
        gsap.fromTo(text, 
            {
                scale: 0.8,
                opacity: 0,
                filter: "blur(10px)"
            },
            {
                scale: 1,
                opacity: 1,
                filter: "blur(0px)",
                duration: 1.5,
                delay: 0.8,
                ease: "elastic.out(1, 0.3)",
                scrollTrigger: {
                    trigger: text,
                    start: "top 80%"
                }
            }
        );
    });

    // Particle system
    function createParticles() {
        const container = document.querySelector('.particle-container');
        if (!container) return;

        for (let i = 0; i < 50; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            
            // Random position
            particle.style.left = Math.random() * 100 + '%';
            particle.style.top = Math.random() * 100 + '%';
            
            container.appendChild(particle);
            
            // Animate particle
            gsap.set(particle, {
                x: Math.random() * 200 - 100,
                y: Math.random() * 200 - 100,
                opacity: Math.random() * 0.8 + 0.2
            });
            
            gsap.to(particle, {
                y: "-=300",
                opacity: 0,
                duration: Math.random() * 3 + 2,
                ease: "power2.out",
                repeat: -1,
                delay: Math.random() * 2
            });
        }
    }
    createParticles();

    // Enhanced page load animations
    const masterTl = gsap.timeline();
    
    // Hero content cascade animation
    masterTl
        .from('.hero-content .split-text', {
            duration: 1,
            y: 100,
            opacity: 0,
            ease: "power3.out"
        })
        .from('.hero-content .morphing-text', {
            duration: 1.2,
            scale: 0.5,
            opacity: 0,
            ease: "elastic.out(1, 0.3)"
        }, "-=0.5")
        .from('.hero-content p', {
            duration: 0.8,
            y: 50,
            opacity: 0,
            ease: "power2.out"
        }, "-=0.3")
        .from('.hero-content .fade-in-section', {
            duration: 0.6,
            y: 30,
            opacity: 0,
            stagger: 0.1,
            ease: "power2.out"
        }, "-=0.2")
        .from('.hero-content .magnetic-button', {
            duration: 0.8,
            y: 30,
            opacity: 0,
            scale: 0.9,
            stagger: 0.2,
            ease: "back.out(1.7)"
        }, "-=0.3");

    // Multi-layer parallax effects
    gsap.to('.hero-bg', {
        yPercent: -50,
        ease: "none",
        scrollTrigger: {
            trigger: ".hero-section",
            start: "top bottom",
            end: "bottom top",
            scrub: 1.5
        }
    });

    // Gentle floating shapes without rotation
    gsap.utils.toArray('.hero-section [class*="absolute"]').forEach((element, i) => {
        // Breathing/floating animation
        gsap.to(element, {
            yPercent: -20 - (i * 10),
            scale: 0.95 + (i * 0.02),
            ease: "none",
            scrollTrigger: {
                trigger: ".hero-section",
                start: "top bottom", 
                end: "bottom top",
                scrub: 1.5 + i
            }
        });

        // Gentle floating loop
        gsap.to(element, {
            y: "+=20",
            duration: 3 + (i * 0.5),
            ease: "sine.inOut",
            yoyo: true,
            repeat: -1,
            delay: i * 0.3
        });

        // Breathing scale effect
        gsap.to(element, {
            scale: "+=0.05", 
            duration: 4 + (i * 0.5),
            ease: "sine.inOut",
            yoyo: true,
            repeat: -1,
            delay: i * 0.2
        });
    });

    // Magnetic effects for buttons and interactive elements
    function addMagneticEffect(element) {
        element.addEventListener('mousemove', (e) => {
            const rect = element.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            
            gsap.to(element, {
                duration: 0.3,
                x: x * 0.3,
                y: y * 0.3,
                rotation: x * 0.05,
                ease: "power2.out"
            });
        });

        element.addEventListener('mouseleave', () => {
            gsap.to(element, {
                duration: 0.5,
                x: 0,
                y: 0,
                rotation: 0,
                ease: "elastic.out(1, 0.3)"
            });
        });
    }

    // Apply magnetic effect to buttons
    document.querySelectorAll('.magnetic-button').forEach(addMagneticEffect);

    // Smooth section color morphing based on scroll
    const sections = gsap.utils.toArray('section');
    sections.forEach((section, index) => {
        ScrollTrigger.create({
            trigger: section,
            start: "top 50%",
            end: "bottom 50%",
            onEnter: () => {
                // Smooth color transitions for each section
                gsap.to('body', {
                    duration: 1,
                    backgroundColor: index % 2 === 0 ? 'rgb(254, 249, 225)' : 'rgb(249, 245, 220)',
                    ease: "power2.out"
                });
            },
            onLeave: () => {
                gsap.to(section, {
                    duration: 0.6,
                    opacity: 0.95,
                    ease: "power1.out"
                });
            },
            onEnterBack: () => {
                gsap.to(section, {
                    duration: 0.6,
                    opacity: 1,
                    ease: "power1.out"
                });
            }
        });

        // Section entrance animations
        gsap.fromTo(section, 
            {
                opacity: 0,
                y: 60
            },
            {
                opacity: 1,
                y: 0,
                duration: 1.2,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: section,
                    start: "top 80%",
                    toggleActions: "play none none reverse"
                }
            }
        );
    });

    // Enhanced morphing card animations
    gsap.utils.toArray('.activity-card').forEach((card, index) => {
        // Staggered entrance animation
        gsap.fromTo(card, 
            {
                opacity: 0,
                y: 80,
                rotateY: -15,
                scale: 0.8
            },
            {
                opacity: 1,
                y: 0,
                rotateY: 0,
                scale: 1,
                duration: 1,
                delay: index * 0.15,
                ease: "back.out(1.7)",
                scrollTrigger: {
                    trigger: card,
                    start: "top 80%",
                    toggleActions: "play none none reverse"
                }
            }
        );

        const icon = card.querySelector('.activity-icon');
        const image = card.querySelector('.activity-image');
        
        // Enhanced hover effects
        card.addEventListener('mouseenter', () => {
            gsap.to(card, {
                duration: 0.5,
                y: -15,
                scale: 1.05,
                rotateY: 5,
                rotateX: 5,
                boxShadow: "0 25px 50px rgba(163, 29, 29, 0.3)",
                ease: "power3.out"
            });
            
            if (icon) {
                gsap.to(icon, {
                    duration: 0.4,
                    y: -5,
                    scale: 1.3,
                    ease: "back.out(1.7)"
                });
            }
            
            if (image) {
                gsap.to(image, {
                    duration: 0.5,
                    scale: 1.15,
                    rotation: 2,
                    filter: "brightness(1.1) saturate(1.2)",
                    ease: "power2.out"
                });
            }
        });
        
        card.addEventListener('mouseleave', () => {
            gsap.to(card, {
                duration: 0.4,
                y: 0,
                scale: 1,
                rotateY: 0,
                rotateX: 0,
                boxShadow: "0 10px 25px rgba(0, 0, 0, 0.1)",
                ease: "power2.out"
            });
            
            if (icon) {
                gsap.to(icon, {
                    duration: 0.4,
                    y: 0,
                    scale: 1,
                    ease: "power2.out"
                });
            }
            
            if (image) {
                gsap.to(image, {
                    duration: 0.4,
                    scale: 1,
                    rotation: 0,
                    filter: "brightness(1) saturate(1)",
                    ease: "power2.out"
                });
            }
        });

        // Add magnetic effect to cards as well
        addMagneticEffect(card);
    });

    // Enhanced counter animation with morphing effect
    gsap.utils.toArray('.counter').forEach((counter, index) => {
        const target = +counter.getAttribute('data-target');
        
        // Initial scale and glow effect
        gsap.set(counter, {
            scale: 0.5,
            opacity: 0,
            color: "var(--color-primary-600)"
        });
        
        gsap.timeline({
            scrollTrigger: {
                trigger: counter,
                start: "top 80%"
            }
        })
        .to(counter, {
            scale: 1,
            opacity: 1,
            duration: 0.5,
            ease: "back.out(1.7)",
            delay: index * 0.1
        })
        .to(counter, {
            textContent: target,
            duration: 2,
            ease: "power2.out",
            snap: { textContent: 1 },
            onUpdate: function() {
                // Add pulsing effect during counting
                gsap.to(counter, {
                    scale: 1.1,
                    duration: 0.1,
                    yoyo: true,
                    repeat: 1,
                    ease: "power2.inOut"
                });
            }
        }, "-=0.2");
    });

    // Smooth color transitions based on scroll
    ScrollTrigger.create({
        trigger: "body",
        start: "top top",
        end: "bottom bottom",
        scrub: true,
        onUpdate: (self) => {
            const progress = self.progress;
            const hue = 0 + (progress * 30); // Shift from red to orange
            document.documentElement.style.setProperty('--dynamic-color', `hsl(${hue}, 70%, 50%)`);
        }
    });

    // Gallery lightbox functionality
    const galleryItems = document.querySelectorAll('.gallery-item');
    const lightbox = document.querySelector('.lightbox');
    const lightboxImage = document.querySelector('.lightbox-image');
    const lightboxClose = document.querySelector('.lightbox-close');

    if (lightbox && lightboxImage && lightboxClose) {
        galleryItems.forEach(item => {
            item.addEventListener('click', () => {
                const imageSrc = item.querySelector('img').src;
                lightboxImage.src = imageSrc;
                
                gsap.set(lightbox, { display: 'flex', opacity: 0 });
                gsap.to(lightbox, { duration: 0.3, opacity: 1 });
                gsap.fromTo(lightboxImage, 
                    { scale: 0.8 },
                    { duration: 0.3, scale: 1, ease: "power2.out" }
                );
            });
        });

        lightboxClose.addEventListener('click', closeLightbox);
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) closeLightbox();
        });

        function closeLightbox() {
            gsap.to(lightbox, { 
                duration: 0.3, 
                opacity: 0, 
                onComplete: () => {
                    lightbox.style.display = 'none';
                }
            });
        }
    }

    // Mobile menu toggle
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    const mobileMenu = document.querySelector('.mobile-menu');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            const isOpen = mobileMenu.classList.contains('menu-open');
            
            if (isOpen) {
                gsap.to(mobileMenu, {
                    duration: 0.3,
                    opacity: 0,
                    y: -10,
                    ease: "power2.out",
                    onComplete: () => {
                        mobileMenu.classList.remove('menu-open');
                    }
                });
            } else {
                mobileMenu.classList.add('menu-open');
                gsap.fromTo(mobileMenu, 
                    { opacity: 0, y: -10 },
                    { duration: 0.3, opacity: 1, y: 0, ease: "power2.out" }
                );
            }
        });
    }

    // Infinite Testimonial Carousel
    function initTestimonialCarousel() {
        const carousel = document.querySelector('.testimonial-carousel');
        const track = document.querySelector('.testimonial-track');
        const cards = document.querySelectorAll('.testimonial-card');
        
        if (!carousel || !track || cards.length === 0) return;

        // Clone cards for seamless infinite scroll
        cards.forEach(card => {
            const clone = card.cloneNode(true);
            track.appendChild(clone);
        });

        // Get updated cards after cloning
        const allCards = track.querySelectorAll('.testimonial-card');
        const cardWidth = allCards[0].offsetWidth + 24; // 24px is gap-6
        const totalWidth = cardWidth * cards.length;

        // Set initial position
        gsap.set(track, { x: 0 });

        // Infinite scrolling animation
        const infiniteScroll = gsap.to(track, {
            x: -totalWidth,
            duration: 20,
            ease: "none",
            repeat: -1,
            paused: false
        });

        // Pause on hover
        carousel.addEventListener('mouseenter', () => {
            infiniteScroll.pause();
        });

        carousel.addEventListener('mouseleave', () => {
            infiniteScroll.resume();
        });

        // Entrance animations for cards
        allCards.forEach((card, i) => {
            gsap.fromTo(card, 
                {
                    opacity: 0,
                    y: 60,
                    scale: 0.9
                },
                {
                    opacity: 1,
                    y: 0,
                    scale: 1,
                    duration: 0.8,
                    delay: (i % cards.length) * 0.1,
                    ease: "back.out(1.7)",
                    scrollTrigger: {
                        trigger: carousel,
                        start: "top 80%",
                        toggleActions: "play none none reverse"
                    }
                }
            );

            // Subtle floating effect
            gsap.to(card, {
                y: -5,
                duration: 2 + (i * 0.2),
                ease: "sine.inOut",
                yoyo: true,
                repeat: -1,
                delay: i * 0.3
            });
        });
    }

    // Initialize carousel
    initTestimonialCarousel();

    // Mobile optimizations and performance
    ScrollTrigger.matchMedia({
        // Desktop animations
        "(min-width: 768px)": function() {
            // Enable all advanced animations for desktop
            gsap.set('.magnetic-button', { willChange: 'transform' });
            
            // Enhanced parallax for desktop
            gsap.to('.particle', {
                x: 'random(-100, 100)',
                y: 'random(-100, 100)',
                duration: 'random(2, 4)',
                ease: "sine.inOut",
                repeat: -1,
                yoyo: true,
                stagger: 0.1
            });
        },
        
        // Mobile/tablet simplified animations
        "(max-width: 767px)": function() {
            // Disable heavy animations on mobile for better performance
            gsap.set('.particle', { display: 'none' });
            gsap.set('.magnetic-button', { willChange: 'auto' });
            
            // Simplified mobile animations
            document.querySelectorAll('.magnetic-button').forEach(button => {
                button.addEventListener('touchstart', () => {
                    gsap.to(button, {
                        scale: 0.95,
                        duration: 0.1
                    });
                });
                
                button.addEventListener('touchend', () => {
                    gsap.to(button, {
                        scale: 1,
                        duration: 0.2,
                        ease: "back.out(1.7)"
                    });
                });
            });
        }
    });

    // Performance optimization: Batch DOM updates
    gsap.ticker.lagSmoothing(0);
    
    // Cleanup and refresh ScrollTrigger on resize
    window.addEventListener('resize', ScrollTrigger.refresh);
    
    console.log('🚀 GSAP Modern Animations 2025 Loaded Successfully!');
});