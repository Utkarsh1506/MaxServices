<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Startup - Startup Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>1800 257 1003</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>sales@megamaxservices.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/megamaxservicespvtltd/"><i
                           class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.linkedin.com/company/megamax-services/"><i
                           class="fab fa-linkedin-in fw-normal"></i></a>    
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.instagram.com/megamaxservices/"><i
                            class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://twitter.com/MegamaxServices/"><i
                            class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="https://www.youtube.com/channel/UCG2zNEVBVd8SI8J8KK5mboA"><i
                            class="fab fa-youtube fw-normal"></i></a>

                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
    <?php

include 'nav.php';

?>

        <div class="container-fluid bg-primary py-5 bg-header" >
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Our Partners</h1>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Partners</h5>
                <h1 class="mb-0">Professional Clients Ready to Help Your Business</h1>
            </div>

            <div class="team-img position-relative overflow-hidden">
                <img class="img-fluid w-100" src="img/our partners.png" alt="">
                
            </div>
            <!--div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div-->
        </div>
    </div>
    <!-- Team End -->

    <!-- News Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Latest News</h5>
                <h1 class="mb-0"> Stay up to date with the latest news and announcements from our company and the tech industry.
                </h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/News 1.png" alt="">
                            <!--a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">Data Science</a-->
                        </div>
                        <div class="p-4">
                            
                            <h4 class="mb-3">Megamax Services Badminton Tournament 2022.</h4>
                            <a class="text-uppercase" href="./feature.html">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/News 2.png" alt="">
                            <!--a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">Infra Managed Services</a-->
                        </div>
                        <div class="p-4">
                            
                            <h4 class="mb-3">A Team of World-Class Mavens Catering to End-to-End Enterprise Requirements.</h4>
                            <a class="text-uppercase" href="./feature.html">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/News 3.png" alt="">
                            <!--a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">Cloud</a-->
                        </div>
                        <div class="p-4">
                            
                            <h4 class="mb-3"> Levearing News & Inovtaion technologies To cater To End-to-End Enterprise Requirements.</h4>
                            <a class="text-uppercase" href="./feature.html">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--News End -->


 <!-- Vendor Start -->
 <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 mb-5">
        <div class="bg-white">
            <div class="owl-carousel vendor-carousel">
                <img src="img/Partner 1.png" alt="">
                <img src="img/Partner 2.png" alt="">
                <img src="img/Partner 3.png" alt="">
                <img src="img/Partner 4.png" alt="">
                <img src="img/Partner 5.png" alt="">
                <img src="img/Partner 6.png" alt="">
                <img src="img/Partner 7.png" alt="">
                <img src="img/Partner 8.png" alt="">
                <img src="img/Partner 9.png" alt="">
                <img src="img/Partner 10.png" alt="">
                <img src="img/Partner 11.png" alt="">
                <img src="img/Partner 12.png" alt="">
                <img src="img/Partner 13.png" alt="">
                <img src="img/Partner 14.png" alt="">
                <img src="img/Partner 16.png" alt="">
                <img src="img/Partner 15.png" alt="">
                <img src="img/Partner 17.png" alt="">
                <img src="img/Partner 18.png" alt="">
                <img src="img/Partner 19.png" alt="">
                <img src="img/Partner 20.png" alt="">
                <img src="img/Partner 21.png" alt="">
                <img src="img/Partner 22.png" alt="">
                <img src="img/Partner 23.png" alt="">
                <img src="img/Partner 24.png" alt="">
                <img src="img/Partner 25.png" alt="">
                <img src="img/Partner 26.png" alt="">
                <img src="img/Partner 27.png" alt="">
                <img src="img/Partner 28.png" alt="">
                <img src="img/Partner 29.png" alt="">
                <img src="img/Partner 30.png" alt="">
                <img src="img/Partner 31.png" alt="">
                <img src="img/Partner 32.png" alt="">
                <img src="img/Partner 33.png" alt="">
                
                
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->

    

      <!-- Footer Start -->
      <?php
    include 'footer.php';
   ?>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#"> Megamax Services Pvt. Ltd</a>. All
                            Rights Reserved.

                           
                            <!-- Designed by <a class="text-white border-bottom"#">Anonymous</a> -->
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="index.html" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>