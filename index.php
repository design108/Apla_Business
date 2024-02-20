<?php 
include('./common-files/common-function.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aapla Business</title>
    <?=main_links();?>
</head>

<body>

    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader"></div>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
        <!-- Start Navigation -->
        <div class="header header-light dark-text">
            <div class="container">
                <?=main_navbar();?>
            </div>
        </div>
        <!-- End Navigation -->
        <div class="clearfix"></div>
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->

        <!-- ======================= Home Banner ======================== -->
        <div class="home-banner margin-bottom-0">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-8 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="pe-3">
                            <div class="banner_caption text-left mb-4">
                                <h1 class="banner_title ft-normal mb-1"> Search across &nbsp;<span
                                        class="ft-bold"></span>
                                </h1>

                            </div>
                            <form class="main-search-wrap fl-wrap">
                                <div class="main-search-item">
                                    <input type="text" class="form-control radius" id="location" name="location"
                                        placeholder="Location" />
                                </div>
                                <div class="main-search-item">
                                    <input type="text" class="form-control" placeholder="Services" />
                                    <div class="main-search-button">
                                        <button class="btn full-width theme-bg text-white" type="button"><i
                                                class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="advertise">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a href=""><img src="./assets/img/advertise/banner_website design.webp"
                                                class="d-block w-100" alt="..."></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href=""><img src="./assets/img/advertise/banner_hotel.webp"
                                                class="d-block w-100" alt="..."></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href=""><img src="./assets/img/advertise/banner_website design.webp"
                                                class="d-block w-100" alt="..."></a>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-target="#carouselExampleControls" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-target="#carouselExampleControls" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">

                        <div class="advertise_2">
                            <div class="add-text">

                                <h4 class="text-white">B2B</h4>
                                <p class="text-white">Quick Quotes</p>

                            </div>
                            <a href="#"> <img src="./assets/img/B2B.webp" alt="" class="img-responsive" width="100%"
                                    style="margin-top: -80px;"></a>
                        </div>

                    </div>
                    <div class="col-lg-2">
                        <div class="advertise_4">
                            <div class="add-text">
                                <h4 class="text-white">Real Estate</h4>
                                <p class="text-white">Finest Agents</p>
                            </div>
                            <a href="#"><img src="./assets/img/Real-estate.webp" alt="" class="img-responsive"
                                    width="100%" style="margin-top: -80px;"></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="advertise_3">
                            <div class="add-text">
                                <h4 class="text-white">Doctors</h4>
                                <p class="text-white">Book Now</p>
                            </div>
                            <img src="./assets/img/Doctor.webp" alt="" class="img-responsive" width="100%"
                                style="margin-top: -80px;">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- ======================= Home Banner ======================== -->
        <!-- ======================= Listing Categories ======================== -->
        <section class="space min" style="padding-top: 0px;">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center mb-5">
                        
                            <h2 class="ft-bold">Browse <span class="theme-cl">Top Categories</span></h2>
                        </div>
                    </div>
                </div>

                <!-- row -->
                <div class="row align-items-center">

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="cats-wrap text-center">
                            <a href="half-map-search-2.html" class="Goodup-catg-wrap">

                                <div class="Goodup-catg-icon"><i class="fas fa-stethoscope"></i></div>
                                <div class="Goodup-catg-caption">
                                    <h4 class="fs-md mb-0 ft-medium m-catrio">Dentists</h4>

                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="cats-wrap text-center">
                            <a href="half-map-search-2.html" class="Goodup-catg-wrap">

                                <div class="Goodup-catg-icon"><i class="fas fa-building"></i></div>
                                <div class="Goodup-catg-caption">
                                    <h4 class="fs-md mb-0 ft-medium m-catrio">IT &amp; Banking</h4>

                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="cats-wrap text-center">
                            <a href="half-map-search-2.html" class="Goodup-catg-wrap">

                                <div class="Goodup-catg-icon"><i class="fas fa-shopping-basket"></i></div>
                                <div class="Goodup-catg-caption">
                                    <h4 class="fs-md mb-0 ft-medium m-catrio">Shoppings</h4>

                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="cats-wrap text-center">
                            <a href="half-map-search-2.html" class="Goodup-catg-wrap">

                                <div class="Goodup-catg-icon"><i class="fas fa-screwdriver"></i></div>
                                <div class="Goodup-catg-caption">
                                    <h4 class="fs-md mb-0 ft-medium m-catrio">Home Services</h4>

                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="cats-wrap text-center">
                            <a href="half-map-search-2.html" class="Goodup-catg-wrap">

                                <div class="Goodup-catg-icon"><i class="fas fa-basketball-ball"></i></div>
                                <div class="Goodup-catg-caption">
                                    <h4 class="fs-md mb-0 ft-medium m-catrio">Active Life</h4>

                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="cats-wrap text-center">
                            <a href="half-map-search-2.html" class="Goodup-catg-wrap">

                                <div class="Goodup-catg-icon"><i class="fas fa-utensils"></i></div>
                                <div class="Goodup-catg-caption">
                                    <h4 class="fs-md mb-0 ft-medium m-catrio">Restaurants</h4>

                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="cats-wrap text-center">
                            <a href="half-map-search-2.html" class="Goodup-catg-wrap">

                                <div class="Goodup-catg-icon"><i class="fas fa-book-open"></i></div>
                                <div class="Goodup-catg-caption">
                                    <h4 class="fs-md mb-0 ft-medium m-catrio">Education</h4>

                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="cats-wrap text-center">
                            <a href="half-map-search-2.html" class="Goodup-catg-wrap">

                                <div class="Goodup-catg-icon"><i class="fas fa-house-damage"></i></div>
                                <div class="Goodup-catg-caption">
                                    <h4 class="fs-md mb-0 ft-medium m-catrio">Real Estate</h4>

                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="cats-wrap text-center">
                            <a href="half-map-search-2.html" class="Goodup-catg-wrap">

                                <div class="Goodup-catg-icon"><i class="fas fa-wine-glass"></i></div>
                                <div class="Goodup-catg-caption">
                                    <h4 class="fs-md mb-0 ft-medium m-catrio">Event Palnning</h4>

                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="cats-wrap text-center">
                            <a href="half-map-search-2.html" class="Goodup-catg-wrap">

                                <div class="Goodup-catg-icon"><i class="fas fa-car-alt"></i></div>
                                <div class="Goodup-catg-caption">
                                    <h4 class="fs-md mb-0 ft-medium m-catrio">Automotive</h4>

                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="cats-wrap text-center">
                            <a href="half-map-search-2.html" class="Goodup-catg-wrap">

                                <div class="Goodup-catg-icon"><i class="fas fa-pencil-ruler"></i></div>
                                <div class="Goodup-catg-caption">
                                    <h4 class="fs-md mb-0 ft-medium m-catrio">Art &amp; Design</h4>

                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="cats-wrap text-center">
                            <a href="half-map-search-2.html" class="Goodup-catg-wrap">

                                <div class="Goodup-catg-icon"><i class="fas fa-list"></i></div>
                                <div class="Goodup-catg-caption">
                                    <h4 class="fs-md mb-0 ft-medium m-catrio">View More listing</h4>

                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <!-- row -->

            </div>
        </section>
        <!-- ======================= Listing Categories End ======================== -->

        <!-- ======================= Explore By Location ======================== -->
        <section class="space min" style="padding-top:20px">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center mb-5">

                            <h2 class="ft-bold">Popular <span class="theme-cl">Searches</span></h2>
                        </div>
                    </div>
                </div>

                <!-- row -->
                <div class="row justify-content-center">

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="Goodup-img-location-wrap">
                            <div class="Goodup-img-location-thumb"><a href="#"><img
                                        src="./assets/img/popular-search/packers-movers.webp" class="img-fluid"
                                        alt=""></a></div>
                            <div class="Goodup-img-location-caption">
                                <h4 class="fs-md mb-0 ft-medium m-catrio">Packers & Movers</h4>
                                <a href="#" class="Goodup-cat-arrow"><i class="lni lni-arrow-right-circle"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="Goodup-img-location-wrap">
                            <div class="Goodup-img-location-thumb"><a href="#"><img
                                        src="./assets/img/popular-search/repair-service.webp" class="img-fluid"
                                        alt=""></a></div>
                            <div class="Goodup-img-location-caption">
                                <h4 class="fs-md mb-0 ft-medium m-catrio">Repair & Service</h4>
                                <a href="#" class="Goodup-cat-arrow"><i class="lni lni-arrow-right-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="Goodup-img-location-wrap">
                            <div class="Goodup-img-location-thumb"><a href="#"><img
                                        src="./assets/img/popular-search/Real-Estate.webp" class="img-fluid" alt=""></a>
                            </div>
                            <div class="Goodup-img-location-caption">
                                <h4 class="fs-md mb-0 ft-medium m-catrio">Real Estate</h4>
                                <a href="#" class="Goodup-cat-arrow"><i class="lni lni-arrow-right-circle"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="Goodup-img-location-wrap">
                            <div class="Goodup-img-location-thumb"><a href="#"><img
                                        src="./assets/img/popular-search/Carpenters.webp" class="img-fluid" alt=""></a>
                            </div>
                            <div class="Goodup-img-location-caption">
                                <h4 class="fs-md mb-0 ft-medium m-catrio">Carpenters</h4>
                                <a href="half-map-search-2.html" class="Goodup-cat-arrow"><i
                                        class="lni lni-arrow-right-circle"></i></a>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /row -->

            </div>
        </section>
        <!-- ======================= Explore By Location ======================== -->


        <!-- ============================ Tag & Submit listing ============================= -->
        <section class="space min" style="padding-top:20px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="ft-bold mb-4">Repairs & Services</h3>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="assets/img/listing-search/hkim_bikeservice.webp" width="100%">
                                        <h5 class="text-center mt-2">Bike Services</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="assets/img/listing-search/hkim_carservice.webp" width="100%">
                                        <h5 class="text-center mt-2">Car Services</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="assets/img/listing-search/hkim_acrepair.webp" width="100%">
                                        <h5 class="text-center mt-2">AC Services</h5>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="ft-bold mb-4">Wedding Requisites</h3>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="assets/img/listing-search/hkim_banquethall.webp" width="100%">
                                        <h5 class="text-center mt-2">Banquet Halls</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="assets/img/listing-search/hkim_bridalrequisites.webp" width="100%">
                                        <h5 class="text-center mt-2">Gold/Jewellery</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="assets/img/listing-search/hkim_caterers.webp" width="100%">
                                        <h5 class="text-center mt-2">Caterers</h5>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card mt-4">
                            <div class="card-body">
                                <h3 class="ft-bold mb-4">Daily Needs</h3>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="assets/img/listing-search/hkim_grocery.webp" width="100%">
                                        <h5 class="text-center mt-2">Grocery</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="assets/img/listing-search/hkim_electrician.webp" width="100%">
                                        <h5 class="text-center mt-2">Electricians</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="assets/img/listing-search/hkim_movies.webp" width="100%">
                                        <h5 class="text-center mt-2">Movies</h5>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card mt-4">
                            <div class="card-body">
                                <h3 class="ft-bold mb-4">Beauty & Salons</h3>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="assets/img/listing-search/salon.jpg" width="100%"
                                            style="border-radius: 10px;">
                                        <h5 class="text-center mt-2">Salons</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="assets/img/listing-search/spa.jpg" width="100%"
                                            style="border-radius: 10px;">
                                        <h5 class="text-center mt-2">Spa</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="assets/img/listing-search/beauty-parlour.jpg" width="100%"
                                            style="border-radius: 10px;">
                                        <h5 class="text-center mt-2">Beauty Parlours</h5>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ============================ Tag & Submit listing End ============================= -->


        <!-- ============================ Footer Start ================================== -->
        <footer class="light-footer skin-light-footer style-2">
            <?=main_footer();?>
        </footer>
        <!-- ============================ Footer End ================================== -->
        <a id="tops-button" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <?=main_script();?>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->

</body>

</html>