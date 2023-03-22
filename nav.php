<div class="nav-static" style="width: 100%;text-align: center;margin-top: 30px">
    <div style="display: flex;place-content: center;align-items: center;">
        <a href="/"><img src="image/logo.png" alt="" srcset="" style="width: 40px"></a>
        <a href="/" class="menu-links" style="margin-left: 80px;color: #002f42 !important">
            <?php
            echo $_SERVER['REQUEST_URI'] == '/' ? '<b>Home</b>' : 'Home';
            ?>
        </a>
        <a href="about-us" class="menu-links" style="margin-left: 80px;color: #002f42 !important">
            <?php
            echo $_SERVER['REQUEST_URI'] == '/about-us' ? '<b>About Us</b>' : 'About Us';
            ?>
        </a>
        <a href="contact-us" class="menu-links" style="margin-left: 80px;color: #002f42 !important">
            <?php
            echo $_SERVER['REQUEST_URI'] == '/contact-us' ? '<b>Contact Us</b>' : 'Contact Us';
            ?>
        </a>
        <a href="services" class="menu-links" style="margin-left: 80px;color: #002f42 !important">
            <?php
            echo $_SERVER['REQUEST_URI'] == '/services' ? '<b>Services</b>' : 'Services';
            ?>
        </a>
    </div>
</div>
<nav class="u-align-left u-menu u-menu-dropdown u-nav-spacing-25 u-offcanvas u-menu-1" data-responsive-from="XL">
    <div class="menu-collapse">
        <a class="u-button-style u-nav-link" href="#" style="padding: 4px 0px; font-size: calc(1em + 8px);">
            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style="">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7b92"></use>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-7b92" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content">
                <g>
                    <rect y="36" width="302" height="30"></rect>
                    <rect y="236" width="302" height="30"></rect>
                    <rect y="136" width="302" height="30"></rect>
                </g>
            </svg>
        </a>
    </div>
    <div class="u-custom-menu u-nav-container-collapse">
        <div class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="/" data-page-id="1059952">Home</a>
                    </li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="about-us" data-page-id="1059948">About Us</a>
                    </li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="contact-us" data-page-id="1059947">Contact Us</a>
                    </li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="services" data-page-id="1059947">Services</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
    </div>
</nav>