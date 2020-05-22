<template>
    <div>
        <header id="header" class="header">
        <div class="header-top bg-theme-colored-darker2 sm-text-center">
            <div class="container">
            <div class="row">
                <div class="col-md-8">
                <div class="widget no-border m-0">
                    <ul class="list-inline">
                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white"></i> <a class="text-white" href="#">123-456-789</a> </li>
                    <li class="text-white m-0 pl-10 pr-10"> <i class="fa fa-clock-o text-white"></i> Mon-Fri 8:00 to 2:00 </li>
                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-white"></i> <a class="text-white" href="#">contact@yourdomain.com</a> </li>
                    </ul>
                </div>
                </div>
                <div class="col-md-4">
                <div class="widget no-border m-0">
                    <ul class="list-inline text-right sm-text-center">
                        <li>
                            <a href="#" class="text-white">FAQ</a>
                        </li>
                        <li class="text-white">|</li>
                        <li>
                            <a href="#" class="text-white">Help Desk</a>
                        </li>
                        <li class="text-white">|</li>
                        <li>
                            <router-link to="/Register" class="nav-link text-gray-aaa">
                                Register
                            </router-link> 
                        </li>
                        <li class="text-white">|</li>
                        <li>
                            <router-link to="/logincomp" class="nav-link text-gray-aaa">
                                Longin
                            </router-link>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="header-nav">
            <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
            <div class="container">
                <nav id="menuzord-right" class="menuzord default">
                <a class="menuzord-brand pull-left flip" href="javascript:void(0)">
                    <img src="images/logo-wide.png" alt="">
                </a>
                <ul class="menuzord-menu">
                    <li class="active"> 
                        <router-link to="/" class="nav-link">
                            Home
                        </router-link>
                    </li>
                    <li><a href="#">Features</a>
                    <ul class="dropdown">
                        <li><a href="features-preloader.html">Preloaders</a></li>
                        <li>
                           
                        </li>
                        <li><a href="#">Popup Promo Box</a>
                        <ul class="dropdown">
                            <li><a href="features-popup-promo-box.html">Default</a></li>
                            <li><a href="features-popup-promo-box-cookie-enabled.html">Cookie Enabled</a></li>
                        </ul>
                        </li>
                    </ul>
                    </li>
                </ul>
                </nav>
            </div>
            </div>
        </div>
        </header>
    </div>
     
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
