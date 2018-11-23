<div class="nav-toggle">
    <label for="toggle" class="toggle">&#9776;</label>
</div>
<nav class="sidebar">
    <input type="checkbox" id="toggle" />
    <ul class="side-nav">
        <li <?php if(is_page('home')) echo "class='side-nav__item side-nav__item--active'" ?> class="side-nav__item">
            <a href="<?php echo site_url('/') ?>" class="side-nav__link">
                <span><i class="fas fa-home fa-lg spaced"></i>   Home</span>
            </a>
        </li>
        <li <?php if(is_page('about')) echo "class='side-nav__item side-nav__item--active'" ?> class="side-nav__item">
            <a href="<?php echo site_url('/about') ?>" class="side-nav__link">
                <span><i class="fas fa-info-circle fa-lg spaced"></i>  About</span>
            </a>
        </li>
        <li class="side-nav__item">
            <a href="https://app.jackrabbitclass.com/jr3.0/ParentPortal/Login?orgID=516047" target="_blank" class="side-nav__link">
                <span style="word-wrap: none;"> <i class="fas fa-users fa-lg spaced"></i>  Parent Portal</span>
            </a>
        </li>
        <li <?php if(is_page('calendar')) echo "class='side-nav__item side-nav__item--active'" ?> class="side-nav__item">
            <a href="<?php echo site_url('/calendar') ?>" class="side-nav__link">
                <span><i class="fas fa-calendar fa-lg spaced"></i>  Calendar</span>
            </a>
        </li>
        <li <?php if(is_page('testimonials')) echo "class='side-nav__item side-nav__item--active'" ?> class="side-nav__item">
            <a href="<?php echo site_url('/testimonials') ?>" class="side-nav__link">
                <span><i class="fas fa-comment-alt fa-lg spaced"></i>  Testimonials</span>
            </a>
        </li>
        <li <?php if(is_page('gallery')) echo "class='side-nav__item side-nav__item--active'" ?> class="side-nav__item">
            <a href="<?php echo site_url('/gallery') ?>" class="side-nav__link">
                <span><i class="far fa-image fa-lg spaced"></i>  Gallery</span>
            </a>
        </li>
        <li <?php if(is_page('sign-up')) echo "class='side-nav__item side-nav__item--active'" ?> class="side-nav__item">
            <a href="https://app3.jackrabbitclass.com/regv2.asp?id=516047" target="_blank"class="side-nav__link">
                <span><i class="fas fa-pencil-alt fa-lg spaced"></i>  Sign Up</span>
            </a>
        </li>
        <li <?php if(is_page('contact')) echo "class='side-nav__item side-nav__item--active'" ?> class="side-nav__item">
            <a href="<?php echo site_url('/contact') ?>" class="side-nav__link">
                <span><i class="fas fa-phone fa-lg spaced"></i>  Contact</span>
            </a>
        </li>
        <li class="side-nav__item">
            <a href="http://choosefitnesstoday.com" class="side-nav__link">
                <span><i class="fas fa-heartbeat fa-lg spaced"></i>  Get Healthy</span>
            </a>
        </li>
    </ul>      

    <div class="nav-footer">
        <div class="nav-footer__social">
            <a class="link link-nav" href="https://www.facebook.com/AerialsSchoolOfGymanstics/"><i class="fab fa-facebook-f fa-3x"></i></a>
        </div>
        <div class="nav-footer__legal">
            &copy; 2018 by <a href="https://www.getdallaswebdesign.com" class="link link-nav">Dustin Heisey</a>. All rights reserved.
        </div>
    </div>
</nav>