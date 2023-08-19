
const navOpenBtn = document.querySelector('.header-nav-btn img');
const navCloseBtn = document.querySelector('.header-close-btn img');
const mobileNav = document.querySelector('.mobile-nav');

navOpenBtn.addEventListener('click', openMobileNav);
navCloseBtn.addEventListener('click', closeMobileNav);


function openMobileNav() {
    mobileNav.classList.add('open');  
}

function closeMobileNav() {
    mobileNav.classList.remove('open');
}


// Function to handle the intersection
function handleIntersection(entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('active');
        } else {
            entry.target.classList.remove('active');
        }
    });
}

const section1ObserverOptions = {
    rootMargin: '-20px',
    threshold: 0.1
};

const section1Observer = new IntersectionObserver(handleIntersection, section1ObserverOptions);

const section1 = document.querySelector('.section-1');
section1Observer.observe(section1);

const section11Observer = new IntersectionObserver(handleIntersection, section1ObserverOptions);
const section11 = document.querySelector('.section-1-1');
section11Observer.observe(section11);

const section2ObserverOptions = {
    rootMargin: '-20px',
    threshold: 0.1
};

const section2Observer = new IntersectionObserver(handleIntersection, section2ObserverOptions);
const section2 = document.querySelector('.section-2');
section2Observer.observe(section2);

const section3Observer = new IntersectionObserver(handleIntersection, section2ObserverOptions);
const section3 = document.querySelector('.section-3');
section3Observer.observe(section3);

const section5ObserverOptions = {
    rootMargin: '-20px',
    threshold: 0.1
};

const section5Observer = new IntersectionObserver(handleIntersection, section5ObserverOptions);
const section5 = document.querySelector('.section-5');
section5Observer.observe(section5);

    const titles = [
        "Delivering Exclusive Products Of Unparalleled Worth!",
        "Crafting Bespoke Designs Curated to Perfectly Match Your Preferences!",
        "Discover a World of Colors with Our Product!"
    ];
    const texts = [
        "Our Dedication Lies in Unwavering Reliability, Unmatched Quality, Utmost Responsibility, and Constant Enhancement.",
        "We take pride in going beyond the ordinary to create extraordinary custom designs that encapsulate your personal style",   
        "Select your ideal product color today and make it uniquely yours"
    ];
    const images = [
        "./Assets/hero-section carousel/Group 2722.png",
        "./Assets/hero-section carousel/premium.png",
        "./Assets/hero-section carousel/Group 2714.png"
    ];
    let currentIndex = 0;

    function updateCarousel() {
        const titleElement = document.getElementById('carouselTitle');
        const textElement = document.getElementById('carouselText');
        const imageElement = document.getElementById('carouselImage');

        setTimeout(() => {
            titleElement.textContent = titles[currentIndex];
            textElement.textContent = texts[currentIndex];
            imageElement.src = images[currentIndex];

            currentIndex = (currentIndex + 1) % titles.length;
        }, 500);

    }
        setInterval(updateCarousel, 3000);
