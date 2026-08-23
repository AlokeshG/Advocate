// VaultEdge Custom JS

// Sticky navbar on scroll
window.addEventListener('scroll', function() {
    var header = document.getElementById('ve-sticky');
    if (header) {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }
});

// Mobile menu toggle
var toggler = document.getElementById('ve-toggle');
var mobileMenu = document.getElementById('ve-mobile-menu');
if (toggler && mobileMenu) {
    toggler.addEventListener('click', function() {
        mobileMenu.classList.toggle('open');
    });
}

// Footer Services menu toggle
var footerServicesLink = document.getElementById('footer-services-link');
if (footerServicesLink) {
    footerServicesLink.addEventListener('click', function(e) {
        e.preventDefault();
        var navServicesItem = document.querySelector('.ve-nav .has-drop');
        var dropdown = document.querySelector('.ve-nav .ve-dropdown');
        if (navServicesItem && dropdown) {
            navServicesItem.classList.toggle('open');
            dropdown.classList.toggle('show');
        }
    });
}

// Close dropdown when clicking outside
document.addEventListener('click', function(e) {
    var navServicesItem = document.querySelector('.ve-nav .has-drop');
    var dropdown = document.querySelector('.ve-nav .ve-dropdown');
    var footerServicesLink = document.getElementById('footer-services-link');
    if (navServicesItem && dropdown && !navServicesItem.contains(e.target) && e.target !== footerServicesLink) {
        navServicesItem.classList.remove('open');
        dropdown.classList.remove('show');
    }
});

// Counter animation
function animateCounters() {
    var counters = document.querySelectorAll('.counter');
    counters.forEach(function(counter) {
        var target = parseInt(counter.getAttribute('data-count'));
        var count = 0;
        var duration = 2000;
        var step = target / (duration / 16);
        var timer = setInterval(function() {
            count += step;
            if (count >= target) {
                counter.textContent = target.toLocaleString();
                clearInterval(timer);
            } else {
                counter.textContent = Math.floor(count).toLocaleString();
            }
        }, 16);
    });
}

// Trigger counters when in view
var counterSection = document.querySelector('.ve-counter-section');
if (counterSection) {
    var triggered = false;
    var observer = new IntersectionObserver(function(entries) {
        if (entries[0].isIntersecting && !triggered) {
            triggered = true;
            animateCounters();
        }
    }, { threshold: 0.3 });
    observer.observe(counterSection);
}

// FAQ accordion toggle
document.querySelectorAll('.ve-faq-q').forEach(function(q) {
    q.addEventListener('click', function() {
        var item = this.closest('.ve-faq-item');
        var wasOpen = item.classList.contains('open');
        document.querySelectorAll('.ve-faq-item').forEach(function(i) { i.classList.remove('open'); });
        if (!wasOpen) item.classList.add('open');
    });
});

// ===== Modals: Get Quote + Thank You =====
function veGetParam(name) {
    try {
        return new URLSearchParams(window.location.search).get(name);
    } catch (e) {
        return null;
    }
}

function veOpenModal(modalEl) {
    if (!modalEl) return;
    modalEl.classList.add('is-open');
    modalEl.setAttribute('aria-hidden', 'false');
    document.documentElement.style.overflow = 'hidden';
}

function veCloseModal(modalEl) {
    if (!modalEl) return;
    modalEl.classList.remove('is-open');
    modalEl.setAttribute('aria-hidden', 'true');
    document.documentElement.style.overflow = '';
}

var quoteModal = document.getElementById('ve-quote-modal');
var thankyouModal = document.getElementById('ve-thankyou-modal');

document.querySelectorAll('[data-ve-open-quote]').forEach(function(btn) {
    btn.addEventListener('click', function(e) {
        // keep normal navigation as fallback if modal missing
        if (!quoteModal) return;
        e.preventDefault();
        veOpenModal(quoteModal);
    });
});

document.querySelectorAll('[data-ve-modal-close]').forEach(function(el) {
    el.addEventListener('click', function() {
        veCloseModal(quoteModal);
        veCloseModal(thankyouModal);
        // after thank you, always go back home
        if (veGetParam('thankyou') === '1') {
            window.location.href = 'index.php';
        }
    });
});

window.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        veCloseModal(quoteModal);
        veCloseModal(thankyouModal);
    }
});

// Auto-show thank you modal when redirected with query params
if (thankyouModal && veGetParam('thankyou') === '1') {
    var name = veGetParam('name') || '';
    var phone = veGetParam('phone') || '—';
    var service = veGetParam('service') || 'General Inquiry';
    var source = veGetParam('source') || 'website';

    var nameSuffix = document.getElementById('ve-thankyou-name-suffix');
    if (nameSuffix) {
        nameSuffix.textContent = name ? ', ' + name.toUpperCase() : '';
    }
    var phoneEl = document.getElementById('ve-thankyou-phone');
    if (phoneEl) phoneEl.textContent = phone;
    var serviceEl = document.getElementById('ve-thankyou-service');
    if (serviceEl) serviceEl.textContent = service;
    var sourceEl = document.getElementById('ve-thankyou-source');
    if (sourceEl) sourceEl.textContent = source;

    veOpenModal(thankyouModal);
}

// Auto-show quote modal after 5 seconds if not on thank you page
if (quoteModal && veGetParam('thankyou') !== '1') {
    var isHomePage = (window.location.pathname === '/' || window.location.pathname.endsWith('index.php'));
    if (isHomePage) {
        var isReload = false;
        if (window.performance && window.performance.navigation) {
            isReload = window.performance.navigation.type === 1;
        }
        if (window.performance && window.performance.getEntriesByType) {
            var navEntries = window.performance.getEntriesByType("navigation");
            if (navEntries.length > 0 && navEntries[0].type === "reload") {
                isReload = true;
            }
        }
        var popupShown = sessionStorage.getItem('popup_shown');
        if (!popupShown || isReload) {
            setTimeout(function() {
                if (!document.querySelector('.ve-modal.is-open')) {
                    veOpenModal(quoteModal);
                    sessionStorage.setItem('popup_shown', 'true');
                }
            }, 5000);
        }
    }
}

// CAPTCHA validation for forms
document.addEventListener('DOMContentLoaded', function() {
    // For modal form
    var modalForm = document.querySelector('.ve-modal-form');
    if (modalForm) {
        modalForm.addEventListener('submit', function(e) {
            var captcha = modalForm.querySelector('input[name="captcha"]').value;
            var expected = modalForm.querySelector('input[name="captcha_expected"]').value;
            if (captcha != expected) {
                e.preventDefault();
                alert('Incorrect CAPTCHA answer. Please try again.');
            }
        });
    }
    // For contact form
    var contactForm = document.querySelector('.ve-contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            var captcha = contactForm.querySelector('input[name="captcha"]').value;
            var expected = contactForm.querySelector('input[name="captcha_expected"]').value;
            if (captcha != expected) {
                e.preventDefault();
                alert('Incorrect CAPTCHA answer. Please try again.');
            }
        });
    }
});
