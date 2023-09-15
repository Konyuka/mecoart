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
            <h6 class="display-5 text-white animated slideInRight">Bakery Equipment</h6>
        </div>

    </div>
    <!-- Page Header End -->




    <!-- Features Start -->
    <div class="container-xxl">
        <div class="container">

            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">


                <p>
                    We offer a range of bakery equipment that empowers you to create confections that delight. From
                    versatile ovens to efficient mixers and everything in between, our bakery equipment is designed to
                    make your baking endeavors a true masterpiece.
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
                                <img style="height: 350px;" class="img-fluid"
                                    src="https://5.imimg.com/data5/GLADMIN/Default/2020/8/GQ/VG/RR/9360645/gas-baking-oven-1-deck-2-tray-500x500.jpg"
                                    alt="">
                                <a class="case-overlay text-decoration-none" href="">
                                    <h5 class="text-center mt-1 text-primary fw-bold">Single Deck Oven
                                    </h5>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                            <div class="case-item position-relative overflow-hidden rounded mb-2">
                                <img style="height: 350px;" class="img-fluid"
                                    src="data:image/jpeg;base64,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"
                                    alt="">
                                <a class="case-overlay text-decoration-none" href="">
                                    <h5 class="text-center mt-1 text-primary fw-bold">Double Deck Oven
                                    </h5>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                            <div class="case-item position-relative overflow-hidden rounded mb-2">
                                <img style="height: 350px;" class="img-fluid"
                                    src="./img/oven.jpeg"
                                    alt="">
                                <a class="case-overlay text-decoration-none" href="">
                                    <h5 class="text-center mt-1 text-primary fw-bold">Triple Deck Oven
                                    </h5>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                            <div class="case-item position-relative overflow-hidden rounded mb-2">
                                <img style="height: 350px;" class="img-fluid"
                                    src="https://pics.acitydiscount.com/pics/md/peachtrader/md_n148301.jpg"
                                    alt="">
                                <a class="case-overlay text-decoration-none" href="">
                                    <h5 class="text-center mt-1 text-primary fw-bold">4 Tray Convection Oven
                                    </h5>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                            <div class="case-item position-relative overflow-hidden rounded mb-2">
                                <img style="height: 350px;" class="img-fluid"
                                    src="https://www.albayan-co.com/image/cache/catalog/OVEN/NB-SA-006EW00-500x500.png"
                                    alt="">
                                <a class="case-overlay text-decoration-none" href="">
                                    <h5 class="text-center mt-1 text-primary fw-bold">6 Tray Convection Oven
                                    </h5>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                            <div class="case-item position-relative overflow-hidden rounded mb-2">
                                <img style="height: 350px;" class="img-fluid"
                                    src="https://5.imimg.com/data5/SELLER/Default/2022/8/ZM/JK/RN/121460892/spiral-mixers-h40-500x500.jpg"
                                    alt="">
                                <a class="case-overlay text-decoration-none" href="">
                                    <h5 class="text-center mt-1 text-primary fw-bold">Spiral Mixer
                                    </h5>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                            <div class="case-item position-relative overflow-hidden rounded mb-2">
                                <img style="height: 350px;" class="img-fluid"
                                    src="https://bakewave.co.ke/wp-content/uploads/2023/07/10l-planetary-mixer.webp"
                                    alt="">
                                <a class="case-overlay text-decoration-none" href="">
                                    <h5 class="text-center mt-1 text-primary fw-bold">Planetary Mixer
                                    </h5>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                            <div class="case-item position-relative overflow-hidden rounded mb-2">
                                <img style="height: 350px;" class="img-fluid"
                                    src="https://en.metos.com/wp-content/uploads/2020/09/4216281.jpg"
                                    alt="">
                                <a class="case-overlay text-decoration-none" href="">
                                    <h5 class="text-center mt-1 text-primary fw-bold">Proofing Rack
                                    </h5>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                            <div class="case-item position-relative overflow-hidden rounded mb-2">
                                <img style="height: 350px;" class="img-fluid"
                                    src="https://serviscopegroup.com/wp-content/uploads/2020/03/S_18_5.jpg"
                                    alt="">
                                <a class="case-overlay text-decoration-none" href="">
                                    <h5 class="text-center mt-1 text-primary fw-bold">Tall Boy Trolley
                                    </h5>
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