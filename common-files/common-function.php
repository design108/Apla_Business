<?php
function main_links()
{
?>
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<!-- Custom CSS -->
<link href="assets/css/styles.css" rel="stylesheet">
<script src="./assets/js/jquery.slim.min.js"></script>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
<?php    
}
function main_script()
{
?>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/dropzone.js"></script>
<script src="assets/js/counterup.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/daterangepicker.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/jQuery.style.switcher.js"></script>
<script src="assets/js/custom.js"></script>
<script>
       window.onload = function() {
            // Check if the location permission prompt has been shown before
            var locationPermissionShown = sessionStorage.getItem('locationPermissionShown');

            if (!locationPermissionShown) {
                getLocation();
                // Set the flag to indicate that the location permission prompt has been shown
                sessionStorage.setItem('locationPermissionShown', 'true');
            }
        };

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            document.getElementById("location").value = "Latitude: " + latitude + ", Longitude: " + longitude;
        }
    </script>
<?php    
}
function main_navbar()
{
?>
<nav id="navigation" class="navigation navigation-landscape">
    <div class="nav-header">
        <a class="nav-brand" href="#">
            <img src="assets/img/Logo_AaplaBusiness-new.svg" class="logo" alt="" />
        </a>
        <div class="nav-toggle"></div>
        <div class="mobile_nav">
            <ul>

                <li>
                    <a href="add-listing.html" class="crs_yuo12 w-auto text-white theme-bg">
                        <span class="embos_45"><i class="fas fa-plus me-2"></i>Get Business</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="nav-menus-wrapper" style="transition-property: none;">
        <!-- <ul class="nav-menu">
                            <li class="active"><a href="index.php">Home</a> </li>

                        </ul> -->


        <ul class="nav-menu nav-menu-social align-to-right">
            <li>
                <a href="#">
                    <i class="fas fa-solid fa-list"></i> Popular Categories
                </a>
            </li>
            <li>
                <a href="#" class="ft-bold">
                    <img src="assets/img/icons/nav_advertise_icon.svg">&nbsp; Advertise
                </a>
            </li>
            <li class="add-listing">
                <a href="#">
                    <i class="fas fa-plus me-2"></i> Get Business
                </a>
            </li>
        </ul>
    </div>
</nav>
<?php
}
function main_footer()
{
?>
 <div class="footer-middle">
                <div class="container">
                    <div class="row">

                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12">
                            <div class="footer_widget">
                                <img src="assets/img/logo.png" class="img-footer small mb-2" alt="" />

                              
                                <div class="address mt-3">
                                   +91 9988776655<br>support@aplabusiness.com
                                </div>
                                <div class="address mt-2">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#" class="theme-cl"><i
                                                    class="lni lni-facebook-filled"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="theme-cl"><i
                                                    class="lni lni-twitter-filled"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="theme-cl"><i
                                                    class="lni lni-youtube"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="theme-cl"><i
                                                    class="lni lni-instagram-filled"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="theme-cl"><i
                                                    class="lni lni-linkedin-original"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-2 col-md-2 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">Quick Links</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="#">Advertise</a></li>
                                    <li><a href="#">Feedback</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-2 col-md-2 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">Our Verticals</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Hotels/Restaurants</a></li>
                                    <li><a href="#">Repair & Services</a></li>
                                    <li><a href="#">Real Estate</a></li>
                                    <li><a href="#">View More...</a></li>
                                </ul>
                            </div>
                        </div>

                     
                        <div class="col-xl-3 col-lg-2 col-md-2 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">Helpful Topics</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Site Map</a></li>
                                    <li><a href="#">Security</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">FAQ's Page</a></li>
                                    <li><a href="#">Privacy</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-bottom br-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12 text-center">
                            <p class="mb-0" style="font-size: 11px;">© 2024 Aapla Business.com. All rights reserved | Developed By <a href="https://www.designforu.in/" target="_blank">Design For U</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
<?php    
}