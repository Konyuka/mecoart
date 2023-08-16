<!DOCTYPE html>
<html lang="en">

<?php include
    './components/header.html';
$currentPage = 'products';
?>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <?php include './components/nav.php'; ?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h6 class="display-5 text-white animated slideInRight">Cooling Units</h6>
        </div>

    </div>
    <!-- Page Header End -->




    <!-- Features Start -->
    <div class="container-xxl">
        <div class="container">

            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">


                <p>
                    When it comes to preserving freshness, our refrigeration units are second to none. We source these
                    units from the finest suppliers to ensure your ingredients remain at their best. From walk-in
                    coolers to
                    reach-in freezers, our refrigeration units maintain the ideal temperature and humidity levels,
                    ensuring
                    your culinary creations are nothing short of exceptional.
                </p>


                <div class="container py-5">
                    <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s"
                        style="max-width: 500px; visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                        <h1 class="mb-4">Product Line</h1>
                    </div>
                    <div class="container row g-4">
                        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                            <div class="case-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="img/real/cookingrange.webp" alt="">
                                <a class="case-overlay text-decoration-none" href="">
                                    <small>Robotic Automation</small>
                                    <h5 class="lh-base text-white mb-3">Lorem elitr magna stet eirmod labore
                                        amet labore clita
                                    </h5>
                                    <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s"
                            style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                            <div class="case-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="img/real/cookingrange.webp" alt="">
                                <a class="case-overlay text-decoration-none" href="">
                                    <small>Machine learning</small>
                                    <h5 class="lh-base text-white mb-3">Lorem elitr magna stet eirmod labore
                                        amet labore clita
                                    </h5>
                                    <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.7s"
                            style="visibility: visible; animation-delay: 0.7s; animation-name: fadeIn;">
                            <div class="case-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="img/real/cookingrange.webp" alt="">
                                <a class="case-overlay text-decoration-none" href="">
                                    <small>Predictive Analysis</small>
                                    <h5 class="lh-base text-white mb-3">Lorem elitr magna stet eirmod labore
                                        amet labore clita
                                    </h5>
                                    <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Features End -->


    <?php include './components/footer.html'; ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="fas fa-caret-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>