<header>
        <div class="header-img">
            <img src="assests/css/Assets/logo.png" alt="header-icon">
        </div>
        <ul class="header-links">
            <li><a data-present="<?=isActive("/")?>" href="/">Home</a></li>
            <li><a data-present="<?=isActive("/about")?>" href="/about">About Us</a></li>
            <li><a data-present="<?=isActive("/services")?>" href="/services">Services</a></li>
        </ul>
        <div class="header-contact">
            <h5>Need help? <span class="contact-btn"><a href="#">
                Contact Us
                </a></span>
            </h5>
            <p>Mon-Fri: 8am-5pm Sat 9am-4pm</p>
        </div>
</header>
<div class="header-mobile">
        <div class="header-img">
            <img src="assests/css/Assets/logo.png" alt="header-icon">
        </div>
        <div class="header-nav-btn">
            <img class="nav-open-btn" src="assests/css/Assets/icons8-hamburger-menu.svg" alt="nav-open-btn">
        </div>
        <div class="mobile-nav">
            <div class="header-close-btn">
                <img src="./Assets/icons8-close-48.svg" alt="nav-close-btn">
            </div>
            <ul class="mobile-header-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
            </ul>
            <div class="mobile-header-contact">
                <h3>Need help? <span class="contact-btn"><a href="#">
                    Contact Us
                    </a></span>
                </h3>
                <p>Mon-Fri: 8am-5pm Sat 9am-4pm</p>
            </div>
        </div>
    </div>