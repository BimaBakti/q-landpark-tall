// GSAP Initialization and Animations
document.addEventListener('DOMContentLoaded', function() {
    // Register GSAP plugins
    gsap.registerPlugin(ScrollTrigger, ScrollToPlugin, TextPlugin);

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                gsap.to(window, {duration: 1.5, scrollTo: target, ease: "power2.inOut"});
            }
        });
    });

    // Page load animations
    const tl = gsap.timeline();
    tl.from('.hero-content > *', {
        duration: 1,
        y: 50,
        opacity: 0,
        stagger: 0.2,
        ease: "power3.out"
    });

    // Parallax effect for hero background
    gsap.to('.hero-bg', {
        yPercent: -50,
        ease: "none",
        scrollTrigger: {
            trigger: ".hero-section",
            start: "top bottom",
            end: "bottom top",
            scrub: true
        }
    });

    // Fade in animations for sections
    gsap.utils.toArray('.fade-in-section').forEach((section, i) => {
        gsap.fromTo(section, 
            {
                opacity: 0,
                y: 50
            },
            {
                opacity: 1,
                y: 0,
                duration: 1,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: section,
                    start: "top 80%",
                    end: "bottom 20%",
                    toggleActions: "play none none reverse"
                }
            }
        );
    });

    // Card hover animations
    gsap.utils.toArray('.activity-card').forEach(card => {
        const icon = card.querySelector('.activity-icon');
        const image = card.querySelector('.activity-image');
        
        card.addEventListener('mouseenter', () => {
            gsap.to(card, {
                duration: 0.3,
                y: -10,
                scale: 1.02,
                ease: "power2.out"
            });
            
            if (icon) {
                gsap.to(icon, {
                    duration: 0.3,
                    rotation: 10,
                    scale: 1.1,
                    ease: "power2.out"
                });
            }
            
            if (image) {
                gsap.to(image, {
                    duration: 0.3,
                    scale: 1.1,
                    ease: "power2.out"
                });
            }
        });
        
        card.addEventListener('mouseleave', () => {
            gsap.to(card, {
                duration: 0.3,
                y: 0,
                scale: 1,
                ease: "power2.out"
            });
            
            if (icon) {
                gsap.to(icon, {
                    duration: 0.3,
                    rotation: 0,
                    scale: 1,
                    ease: "power2.out"
                });
            }
            
            if (image) {
                gsap.to(image, {
                    duration: 0.3,
                    scale: 1,
                    ease: "power2.out"
                });
            }
        });
    });

    // Counter animation for statistics
    gsap.utils.toArray('.counter').forEach(counter => {
        const target = +counter.getAttribute('data-target');
        
        gsap.fromTo(counter, 
            { textContent: 0 },
            {
                textContent: target,
                duration: 2,
                ease: "power2.out",
                snap: { textContent: 1 },
                scrollTrigger: {
                    trigger: counter,
                    start: "top 80%"
                }
            }
        );
    });

    // Text typing animation
    const typingElements = document.querySelectorAll('.typing-text');
    typingElements.forEach(element => {
        const text = element.textContent;
        element.textContent = '';
        
        gsap.to(element, {
            duration: text.length * 0.05,
            text: text,
            ease: "none",
            scrollTrigger: {
                trigger: element,
                start: "top 80%"
            }
        });
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

    // Enhanced testimonial cards animation
    gsap.utils.toArray('.testimonial-card').forEach((card, i) => {
        gsap.fromTo(card, 
            {
                opacity: 0,
                y: 50,
                rotateX: -10
            },
            {
                opacity: 1,
                y: 0,
                rotateX: 0,
                duration: 0.8,
                delay: i * 0.2,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: card,
                    start: "top 80%",
                    end: "bottom 20%",
                    toggleActions: "play none none reverse"
                }
            }
        );
    });
});