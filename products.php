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


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-5 mb-5">Products</h1>

            </div>

            <div class="row g-4">

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <img class="img-fluid" src="./img/range.jpg" alt="">
                        <div class="d-flex">
                            <!-- data-bs-toggle="modal" data-bs-target="#cookingRanges" -->
                            <a href="./cooking-ranges.php" type="button" class="flex-shrink-0 btn-square bg-primary"
                                style="width: 90px; height: 90px;">
                                <span class="text-white">
                                    <p style="color: white">
                                        View <br> More
                                    </p>
                                </span>
                            </a>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>Cooking Ranges</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <img class="img-fluid"
                            src="https://www.fedproducts.co.nz/wp-content/uploads/2014/10/ss_bench_centre_double_sink_bench_1800-7-dsbc-600x600.jpg"
                            alt="">
                        <div class="d-flex">
                            <a href="./stainless-steel-sink.php" type="button"
                                class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <span class="text-white">
                                    <p style="color: white">
                                        View <br> More
                                    </p>
                                </span>
                            </a>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>Stainless Steel Sinks</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <img class="img-fluid" src="https://i.ebayimg.com/images/g/EAwAAOSwM~ldUoRn/s-l1200.jpg" alt="">
                        <div class="d-flex">
                            <a href="./work-tables.php" type="button" class="flex-shrink-0 btn-square bg-primary"
                                style="width: 90px; height: 90px;">
                                <!-- <i class="fa fa-2x fa-info text-white"></i> -->
                                <span class="text-white">
                                    <p style="color: white">
                                        View <br> More
                                    </p>
                                </span>
                            </a>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>Stainless Steel Work Tables</h5>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <img class="img-fluid" src="img/real/racks.webp" alt="">
                        <div class="d-flex">
                            <a href="./storage-area.php" class="flex-shrink-0 btn-square bg-primary"
                                style="width: 90px; height: 90px;">
                                <span class="text-white">
                                    <p style="color: white">
                                        View <br> More
                                    </p>
                                </span>
                            </a>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>Storage Racks and Shelves</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <img class="img-fluid"
                            src="https://5.imimg.com/data5/WE/HJ/MY-23791231/bain-marie-counte-r-with-sneeze-guard-500x500.jpg"
                            alt="">
                        <div class="d-flex">
                            <a href="./servery-area.php" type="button" class="flex-shrink-0 btn-square bg-primary"
                                style="width: 90px; height: 90px;">
                                <span class="text-white">
                                    <p style="color: white">
                                        View <br> More
                                    </p>
                                </span>
                            </a>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>Service Area</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <img class="img-fluid" src="img/hood.webp" alt="">
                        <div class="d-flex">
                            <a href="./extraction-system.php" type="button"
                                class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <span class="text-white">
                                    <p style="color: white">
                                        View <br> More
                                    </p>
                                </span>
                            </a>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>Extraction Hoods</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <img class="img-fluid" src="https://www.monoequip.com/UserFiles/images/cms-products/800-x-600-10-Tray-Classic-O.png" alt="">
                        <div class="d-flex">
                            <a href="./bakery-equipment.php" type="button" class="flex-shrink-0 btn-square bg-primary"
                                style="width: 90px; height: 90px;">
                                <span class="text-white">
                                    <p style="color: white">
                                        View <br> More
                                    </p>
                                </span>
                            </a>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>Bakery Equipment</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNKUm1ZLQ1ArCQbDmNrP7-vMcTvSfJkiNDZA&amp;usqp=CAU" alt="">
                        <div class="d-flex">
                            <a href="./refrigeration-cooling-units.php" type="button" class="flex-shrink-0 btn-square bg-primary"
                                style="width: 90px; height: 90px;">
                                <span class="text-white">
                                    <p style="color: white">
                                        View <br> More
                                    </p>
                                </span>
                            </a>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>
                                    Cooling Equipment
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <img class="img-fluid"
                            src="https://procook.com.au/wp-content/uploads/2014/10/Food-Preparation-Equipment-300x224.jpg"
                            alt="">
                        <div class="d-flex">
                            <a href="./preparation-units.php" type="button" class="flex-shrink-0 btn-square bg-primary"
                                style="width: 90px; height: 90px;">
                                <span class="text-white">
                                    <p style="color: white">
                                        View <br> More
                                    </p>
                                </span>
                            </a>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>
                                    Preparation Units
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <img class="img-fluid"
                            src="./img/real/8.jpeg"
                            alt="">
                        <div class="d-flex">
                            <a href="./gas-installation.php" type="button" class="flex-shrink-0 btn-square bg-primary"
                                style="width: 90px; height: 90px;">
                                <span class="text-white">
                                    <p style="color: white">
                                        View <br> More
                                    </p>
                                </span>
                            </a>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>LPG Installation </h5>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <img class="img-fluid" src="img/rails.webp" alt="">
                        <div class="d-flex">
                            <a href="./stainless-steel-railing.php" type="button" class="flex-shrink-0 btn-square bg-primary"
                                style="width: 90px; height: 90px;">
                                <span class="text-white">
                                    <p style="color: white">
                                        View <br> More
                                    </p>
                                </span>
                            </a>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>
                                    Stainless Steel
                                    Railing
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <img class="img-fluid"
                            src="https://www.eboss.co.nz/assets/Uploads/detailed/2022/05/MC-Series-Moduilar-Channel-Drain-3000x1687px__FillWzE2MDAsOTAwXQ.jpg"
                            alt="">
                        <div class="d-flex">
                            <a href="./kitchen-drainage.php" type="button" class="flex-shrink-0 btn-square bg-primary"
                                style="width: 90px; height: 90px;">
                                <span class="text-white">
                                    <p style="color: white">
                                        View <br> More
                                    </p>
                                </span>
                            </a>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>
                                    Kitchen Drainage
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <!-- Cooking Ranges -->
            <div class="modal" id="cookingRanges">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h3 class="modal-title">Cooking Ranges</h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            Our cooking ranges comes in various sizes and designs it could be separated unit or
                            combined. <br>
                            If combined one unit can comprise of burners, fryers, hot plate and ovens. <br> <br>
                            A combined cooking unit can either be wall type or island type depending on kitchen set up
                            and space available.
                            our Gas burners comes in two types:
                            - high pressure burner for bulk and quick cooking/boiling
                            - Low pressure burner for slow cooking
                            - each burner is connected to adjustable control tap (Italian tap) <br> <br>

                            <h6>HOT PLATE</h3>
                                -Hot plate is gas enabled it can either be flat surfaced, half grooved or fully grooved
                                <br><br>
                                <h6>FRYERS</h6>
                                -Our fryers are electric with 3kwts-12kwts and an oil capacity of 10ltrs -20ltrs.

                                <hr>


                        </div>




                    </div>
                </div>
            </div>
           


        </div>


    </div>
    <!-- Team End -->

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