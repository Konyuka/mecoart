<!DOCTYPE html>
<html lang="en">

<?php include
    './components/header.html';
$currentPage = 'products';
?>


<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
                        <img class="img-fluid" src="img/real/cookingrange.webp" alt="">
                        <div class="d-flex">
                            <button data-bs-toggle="modal" data-bs-target="#cookingRanges" type="button" class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <span class="text-white">
                                    <p style="color: white">
                                        Read <br> More 
                                    </p>
                                </span>
                            </button>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4" style="height: 90px;">
                                <h5>Cooking Ranges</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <img class="img-fluid" src="https://www.fedproducts.co.nz/wp-content/uploads/2014/10/ss_bench_centre_double_sink_bench_1800-7-dsbc-600x600.jpg" alt="">
                        <div class="d-flex">
                            <button data-bs-toggle="modal" data-bs-target="#washArea" type="button" class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <span class="text-white">
                                    <p style="color: white">
                                        Read <br> More 
                                    </p>
                                </span>
                            </button>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4" style="height: 90px;">
                                <h5>Stainless Steel Sinks</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <img class="img-fluid" src="https://i.ebayimg.com/images/g/EAwAAOSwM~ldUoRn/s-l1200.jpg" alt="">
                        <div class="d-flex">
                            <button data-bs-toggle="modal" data-bs-target="#tables" type="button" class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <!-- <i class="fa fa-2x fa-info text-white"></i> -->
                                <span class="text-white">
                                    <p style="color: white">
                                        Read <br> More 
                                    </p>
                                </span>
                            </button>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4" style="height: 90px;">
                                <h5>Stainless Steel Work Tables</h5>

                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <img class="img-fluid" src="img/real/racks.webp" alt="">
                        <div class="d-flex">
                            <button data-bs-toggle="modal" data-bs-target="#storage" type="button" class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <span class="text-white">
                                    <p style="color: white">
                                        Read <br> More 
                                    </p>
                                </span>
                            </button>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4" style="height: 90px;">
                                <h5>Storage Racks and Shelves</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <img class="img-fluid" src="https://i0.wp.com/craftsman.co.ke/wp-content/uploads/2022/10/bain_marie.jpg?fit=600%2C600&ssl=1" alt="">
                        <div class="d-flex">
                            <button data-bs-toggle="modal" data-bs-target="#service" type="button" class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <span class="text-white">
                                    <p style="color: white">
                                        Read <br> More 
                                    </p>
                                </span>
                            </button>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4" style="height: 90px;">
                                <h5>Service Area</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <img class="img-fluid" src="img/hood.webp" alt="">
                        <div class="d-flex">
                            <button data-bs-toggle="modal" data-bs-target="#hood" type="button" class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <span class="text-white">
                                    <p style="color: white">
                                        Read <br> More 
                                    </p>
                                </span>
                            </button>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4" style="height: 90px;">
                                <h5>Extraction Hood</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <img class="img-fluid" src="img/bake.webp" alt="">
                        <div class="d-flex">
                            <button  type="button" class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <span class="text-white">
                                    <p style="color: white">
                                        Read <br> More 
                                    </p>
                                </span>
                            </button>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4" style="height: 90px;">
                                <h5>Bakery Equipment</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <img class="img-fluid" src="img/rails.webp" alt="">
                        <div class="d-flex">
                            <button data-bs-toggle="modal" data-bs-target="#grating" type="button" class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <span class="text-white">
                                    <p style="color: white">
                                        Read <br> More 
                                    </p>
                                </span>
                            </button>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4" style="height: 90px;">
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
                        <img class="img-fluid" src="https://designerdrains.com/wp-content/uploads/2018/02/Designer-Drains-36-Inch-Linear.jpg" alt="">
                        <div class="d-flex">
                            <button data-bs-toggle="modal" data-bs-target="#grating" type="button" class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <span class="text-white">
                                    <p style="color: white">
                                        Read <br> More 
                                    </p>
                                </span>
                            </button>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4" style="height: 90px;">
                                <h5>
                                    Kitchen Drainage
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <img class="img-fluid" src="https://www.auckland.plumbing/wp-content/uploads/2014/08/commercial_gas_installation.jpg" alt="">
                        <div class="d-flex">
                            <button data-bs-toggle="modal" data-bs-target="#gas" type="button" class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <span class="text-white">
                                    <p style="color: white">
                                        Read <br> More 
                                    </p>
                                </span>
                            </button>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4" style="height: 90px;">
                                <h5>LPG Installation </h5>
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
                        Our cooking ranges comes in various sizes and designs it could be separated unit or combined. <br> 
                        If combined one unit can comprise of burners, fryers, hot plate and ovens. <br> <br>
                        A combined cooking unit can either be wall type or island type depending on kitchen set up and space available.
                        our Gas burners comes in two types:
                         - high pressure burner for bulk and quick cooking/boiling
                         - Low pressure burner for slow cooking
                         - each burner is connected to adjustable control tap (Italian tap) <br> <br>

                         <h6>HOT PLATE</h3>
                        -Hot plate is gas enabled it can either be flat surfaced, half grooved or fully grooved <br><br>
                        <h6>FRYERS</h6>
                        -Our fryers are electric with 3kwts-12kwts and an oil capacity of 10ltrs -20ltrs.

                        <hr>

                        <!-- <div class="mt-5">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="https://scontent.fnbo15-1.fna.fbcdn.net/v/t39.30808-6/325603598_530004999112384_6446798998210067823_n.webp?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=V6KZOEMn8uAAX_nALea&_nc_ht=scontent.fnbo15-1.fna&oh=00_AfDiP-UqbV2boABguxQ1FtHIlXJBpNhv5l7j8ucxlx-x2A&oe=6402AC83" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="https://scontent.fnbo15-1.fna.fbcdn.net/v/t39.30808-6/325309484_1553479558457866_2716546686608183017_n.webp?_nc_cat=103&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=0wtDmCic4AYAX-pl7bA&_nc_ht=scontent.fnbo15-1.fna&oh=00_AfCKJgEEOz8aNjErtOmdTlQe0M-QxAWzYgM_7_c7NiZItQ&oe=6400EB02" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="https://scontent.fnbo15-1.fna.fbcdn.net/v/t39.30808-6/324512693_1352922728883163_4456756350445065506_n.webp?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=tC4VEFxhCkIAX8YFc1i&_nc_ht=scontent.fnbo15-1.fna&oh=00_AfDK7rMXR6iJert04QmZK9RipKz639QUUjiWYQ8sgsWF0Q&oe=64022E3D" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                            </div>
                        </div> -->


                    </div>

                    


                    </div>
                </div>
            </div>
            <!-- Wash Area -->
            <div class="modal" id="washArea">
                <div class="modal-dialog">
                    <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h3 class="modal-title">Wash Area</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        A wash area set up would include; dirty cutlery receiving table with dumping chute, wash sinks and plates drying racks.
                        Wash sinks could either be single basin sink, double basin sink and triple basin sink.
                        plate racks can either be flat board, puff orated board or slatted.



                    </div>

                    


                    </div>
                </div>
            </div>
            <!-- Storage -->
            <div class="modal" id="storage">
                <div class="modal-dialog">
                    <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h3 class="modal-title">Storage Racks & Shelves</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        The shelves come in two types: <br> <br> <br>

                        a) stand-alone shelves/ racks with either 4 tier or 5 tier shelving compartments. The shelves can either be flat board or puff orated board with stand dimension(1100x500x8500) <br> <br>
                        b) wall mounted shelves

                        <hr>



                    </div>

                    


                    </div>
                </div>
            </div>
            <!-- Tables -->
            <div class="modal" id="tables">
                <div class="modal-dialog">
                    <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h3 class="modal-title">Work Tables</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                       Work tables are of different types with a standard height of 850mm that is: <br><br><br> 
                       
                        a) stand-alone Work tables with one under shelves and 100mm back splash. <br><br>
                        b) Work table with two under shelves and 100mm back splash. <br><br>
                        c) Work table island type with two under shelves and two over shelves. <br><br>

                        <hr>

                    
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
                        Our cooking ranges comes in various sizes and designs it could be separated unit or combined. <br> 
                        If combined one unit can comprise of burners, fryers, hot plate and ovens. <br> <br>
                        A combined cooking unit can either be wall type or island type depending on kitchen set up and space available.
                        our Gas burners comes in two types:
                         - high pressure burner for bulk and quick cooking/boiling
                         - Low pressure burner for slow cooking
                         - each burner is connected to adjustable control tap (Italian tap) <br> <br>

                         <h6>HOT PLATE</h3>
                        -Hot plate is gas enabled it can either be flat surfaced, half grooved or fully grooved <br><br>
                        <h6>FRYERS</h6>
                        -Our fryers are electric with 3kwts-12kwts and an oil capacity of 10ltrs -20ltrs.

                        <hr>


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
                        Our cooking ranges comes in various sizes and designs it could be separated unit or combined. <br> 
                        If combined one unit can comprise of burners, fryers, hot plate and ovens. <br> <br>
                        A combined cooking unit can either be wall type or island type depending on kitchen set up and space available.
                        our Gas burners comes in two types:
                         - high pressure burner for bulk and quick cooking/boiling
                         - Low pressure burner for slow cooking
                         - each burner is connected to adjustable control tap (Italian tap) <br> <br>

                         <h6>HOT PLATE</h3>
                        -Hot plate is gas enabled it can either be flat surfaced, half grooved or fully grooved <br><br>
                        <h6>FRYERS</h6>
                        -Our fryers are electric with 3kwts-12kwts and an oil capacity of 10ltrs -20ltrs.

                        <hr>


                    </div>

                    


                    </div>
                </div>
            </div>
            <!-- Service Area -->
            <div class="modal" id="service">
                <div class="modal-dialog">
                    <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h3 class="modal-title">Service Area</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        Service area would basically include: <br><br><br>
                        
                        a) electric Bain Marie could either have 3 full inserts ,4 inserts,5 inserts or 6 full inserts fitted with 8mm thick sneeze guard glass with (150mm deep) capacity. <br> <br>
                        b) Food trolley with caster wheels 3 tier. <br> <br>
                        c) Hot pass cabinet


                        <hr>


                    </div>

                    


                    </div>
                </div>
            </div>
            <!-- Extraction -->
            <div class="modal" id="hood">
                <div class="modal-dialog">
                    <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h3 class="modal-title">Extraction Hood</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        Extraction hood is a ventilation system used in commercial kitchens to remove heat, smoke and steam generated during cooking/boiling. Extraction hood comes in different sizes and types depending on cooking place, size of equipment used in the kitchen and generally kitchen arrangements. The hoods can either be wall mounted type or island/ central type. <br> <br>
                        Extraction hood consist of the canopy that usually hang above the cooking area, removable oil /grease filters that are fixed inside the canopy, the duct pipes that channels the fumes collected by the canopy out of the kitchen the extraction fan is installed along the duct .webp the fan, when turned on generates negative pressure that facilitates the pulling out of the fumes collected by the canopy. <br> <br>
                        Extraction hoods are essential for maintaining safe and comfortable .webping environment for kitchen staff, as well as preventing the buildup of gases and reducing risk of fires.


                        <hr>


                    </div>

                    


                    </div>
                </div>
            </div>
            <!-- Gas -->
            <div class="modal" id="grating">
                <div class="modal-dialog">
                    <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h3 class="modal-title">
                            Stainless Steel Railing &
                            Floor Grating</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        Our floor gratings are stainless steel made. They are versatile, durable and aesthetics. Gratings are easily customized into various sizes, thicknesses and spacing’s. stainless steel gratings are excellent choice in areas where corrosion and rusting are of concern.

                        <h6 class="mt-5">Wall Cladding</h6>  
                        We design and install high quality wall cladding suitable for food processing. For ease of operation stainless steel wall cladding is the best since its more hygienic.   

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
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


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