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


        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Careers</h1>
                    <!--a href="" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Contact</a-->
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

    <style>
    /* Container styling */
    .job-container {
        background-color:cream;
        border: 1px solid #ddd;
        padding: 10px;
        width: 100%; /* Full width on small screens */
        border-radius: 30px;
        margin-bottom: 20px;
    }

    /* Job title styling */
    .job-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
        color: black;
    }

    /* Job location styling */
    .job-location {
        font-size: 18px;
        color: #666;
        margin-bottom: 15px;
        color: black;
    }

    /* Apply button styling */
    .apply-button {
        background-color: red;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .apply-button:hover {
        background-color: green;
    }

    #parent {
        text-align: center;
        display: flex;
        flex-wrap: wrap; /* Allows job containers to wrap on smaller screens */
        justify-content: center;
    }

    #location-filter {
        padding: 10px;
        background-color: red;
        color: black;
        width: 100%; /* Full width on small screens */
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    #center {
        text-align: center;
    }

    /* Media query for smaller screens */
    @media only screen and (min-width: 768px) {
        .job-container {
            width: 45%; /* Two job containers per row on medium screens */
            margin: 10px;
        }

        #location-filter {
            width: 30%;
        }
    }
</style>
<div class="row">
    <div id="center">
        <label for="">Choose Location : &nbsp;</label>
        <select id="location-filter">
            <option value="all">All</option>
            <option value="india">India</option>
            <option value="usa">USA</option>
            <option value="philippines">Philippines</option>
        </select>
    </div>
</div>
<br>
<br>
<div class="row">
    <div id="parent">
        <div class="job-container india">
            <div class="job-title">Intermediate Network Engineer</div>
            <div class="job-location">Location - Noida, India</div>
            <!-- HTML -->
<button onclick="window.location.href='Intermediate Network engineer.html'" class="apply-button">APPLY NOW</button>

        </div>
        <div class="job-container india">
            <div class="job-title">LAMP Engineer</div>
            <div class="job-location">Location - Noida, India</div>
            <button onclick="window.location.href='lamp developer.html'" class="apply-button">APPLY NOW</button>

        </div>
        <div class="job-container india">
            <div class="job-title">Global Sales</div>
            <div class="job-location">Location - Noida, India</div>
            <button onclick="window.location.href='Global sales.html'" class="apply-button">APPLY NOW</button>

        </div>
        <div class="job-container india">
            <div class="job-title">AIX Architecture</div>
            <div class="job-location">Location - Noida, India</div>
            <button onclick="window.location.href='aix Architecture.html'" class="apply-button">APPLY NOW</button>

        </div>
        <div class="job-container india">
            <div class="job-title">Automation Test Engineer</div>
            <div class="job-location">Location - Noida, India</div>
            <button onclick="window.location.href='Automation Test Engineer.html'" class="apply-button">APPLY NOW</button>

        </div>
        <div class="job-container india">
            <div class="job-title">Customer Support Engineer – Freshers</div>
            <div class="job-location">Location - Noida, India</div>
            <button onclick="window.location.href='Automation Test Engineer.html'" class="apply-button">APPLY NOW</button>

        </div>
        <div class="job-container india">
            <div class="job-title">Software Sales Manager</div>
            <div class="job-location">Location - Noida, India</div>
            <button onclick="window.location.href='Software Sale.html'" class="apply-button">APPLY NOW</button>

        </div>

        <div class="job-container usa">
            <div class="job-title">React JS Developer</div>
            <div class="job-location">Location - Houston, Texas</div>
            <button onclick="window.location.href='React.html'" class="apply-button">APPLY NOW</button>

        </div>
        <div class="job-container usa">
            <div class="job-title">Full-Stack Developer</div>
            <div class="job-location">Location - Waller. TX, U.S</div>
            <button onclick="window.location.href='Fullstack.html'" class="apply-button">APPLY NOW</button>

        </div>
        <div class="job-container usa">
            <div class="job-title">iSeries/AS400 Developer</div>
            <div class="job-location">Location - USA</div>
            <button onclick="window.location.href='iseries.html'" class="apply-button">APPLY NOW</button>

        </div>
        <div class="job-container philippines">
            <div class="job-title">Intermediate Network Engineer</div>
            <div class="job-location">Location - Philippines</div>
            <button onclick="window.location.href='INEP.html'" class="apply-button">APPLY NOW</button>

        </div>
        <div class="job-container philippines">
            <div class="job-title">HR Manager</div>
            <div class="job-location">Location - Makati (Philippines)</div>
            <button onclick="window.location.href='Makati (philiphans).html'" class="apply-button">APPLY NOW</button>

        </div>
    </div>
</div>

<script>
    document.getElementById("location-filter").addEventListener("change", function() {
        var selectedLocation = this.value;
        var jobContainers = document.querySelectorAll(".job-container");

        jobContainers.forEach(function(container) {
            if (selectedLocation === "all") {
                container.style.display = "block";
            } else {
                if (container.classList.contains(selectedLocation)) {
                    container.style.display = "block";
                } else {
                    container.style.display = "none";
                }
            }
        });
    });
</script>


    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Join Us</h5>
                <h1 class="mb-0">Feel Free to Submit Your Application Here </h1>
            </div>
          
            <div class="row g-5">
                <div class="col-lg-15 wow slideInUp" data-wow-delay="0.3s">
                    <form enctype="multipart/form-data"  action="Backend/Function.php" method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input required type="text" name="name" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-md-6">
                                <input required type="email" name="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input required type="text" name="Position" class="form-control border-0 bg-light px-4" placeholder="Position" style="height: 55px;">
                            </div>
                            <br>
                            <br>
                            <div class="col-12">
    <label for="">Upload Your Resume : &nbsp;&nbsp;</label><input accept=".pdf,.doc,.docx" required type="file" name="resume" id="">
</div>

                            <br>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" name="career" type="submit">Submit Your Application</button>
                            </div>
                        </div>
                    </form>

                </div>
                
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Vendor Start -->
    <!--div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="img/vendor-1.jpg" alt="">
                    <img src="img/vendor-2.jpg" alt="">
                    <img src="img/vendor-3.jpg" alt="">
                    <img src="img/vendor-4.jpg" alt="">
                    <img src="img/vendor-5.jpg" alt="">
                    <img src="img/vendor-6.jpg" alt="">
                    <img src="img/vendor-7.jpg" alt="">
                    <img src="img/vendor-8.jpg" alt="">
                    <img src="img/vendor-9.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    < Vendor End -->
    

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