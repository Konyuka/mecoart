<!DOCTYPE html>
<html lang="en">

<?php include
    './components/header.html';
$currentPage = 'about';

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
            <h1 class="display-3 text-white animated slideInRight">About Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="image-layer img-fluid w-100" src="img/ckr.jfif" alt="">
                        <span
                            class=" position-absolute top-50 start-100 translate-middle bg-white rounded-circle d-none d-lg-block"
                            style="width: 120px; height: 120px;"></span>
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="#"
                            data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>

                    <div class="mt-5">
                        <h2 class="display-5 mb-4">Who we work with</h2>
                        <div class="fw-medium  text-primary mb-2">
                            <div class="row" style="font-size:20px">
                                <span class="col-6 mb-4">
                                    <i class="fas fa-chevron-right text-primary"> </i> Restaurants/Hotels
                                </span>
                                <span class="col-6 mb-4">
                                    <i class="fas fa-chevron-right text-primary"> </i> Hospitals/Schools
                                </span>
                                <span class="col-6 mb-4">
                                    <i class="fas fa-chevron-right text-primary"> </i> Institutions/Corporates
                                </span>
                                <span class="col-6 mb-4">
                                    <i class="fas fa-chevron-right text-primary"> </i> Fast foods/Cafes
                                </span>
                                <span class="col-6 mb-4">
                                    <i class="fas fa-chevron-right text-primary"> </i> Food processing Firms
                                </span>
                                <span class="col-6 mb-4">
                                    <i class="fas fa-chevron-right text-primary"> </i> Bakery / Supermarkets
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">
                        Quality equipment for quality food
                    </p>
                    <h1 class="display-5 mb-4">Meco Art Limited</h1>
                    <p class="mb-4">
                        Welcome to Meco Art Limited, your one-stop shop for all your commercial kitchen equipment needs.
                        With a steadfast presence in the industry for over 7 years, we&#39;ve cultivated a reputation as
                        a reliable
                        source for top-tier equipment at competitive prices. Our mission is to provide our clients with
                        the best
                        equipment and service, so they can focus on what they do best - making delicious food. We
                        understand
                        that every kitchen is different, and thus, our extensive product range caters to the different
                        demands of
                        our clientele. We are a team of experienced industry professionals who are passionate about the
                        hospitality Industry and have a deep understanding of the equipment that goes into a successful
                        commercial kitchen. We offer a wide range of products, including cooking ranges, preparation
                        units,
                        refrigeration, ventilation systems and more. Our equipment is energy-efficient, durable and easy
                        to
                        clean, ensuring that your kitchen runs smoothly and efficiently. As accredited suppliers, our
                        equipment
                        bears the hallmark of quality and safety, aligning with the highest industry standards. We have
                        partnered with other industry-leading brands to add more options to our collection, so you have
                        lots of
                        great equipment to choose from. Should you require guidance or assistance in selecting the
                        perfect
                        equipment for your kitchen, our team is at your service. Do not hesitate to reach out with your
                        inquiries,
                        as we are dedicated to providing comprehensive solutions tailored to your needs.

                    </p>
                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-flag text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Mission</h4>
                                    <span>
                                        To help people envision their business in the food industry and other
                                        industries, be part of the growth by building innovative commercial kitchen
                                        solutions and offering our clients the best service.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-eye text-white"></i>
                                    <!-- <i class="fa-solid fa-eye-low-vision text-white"></i> -->
                                </div>
                                <div class="ms-4">
                                    <h4>Vision</h4>
                                    <span>
                                        To be a globally recognised brand that builds the best commercial kitchens and
                                        offers the most innovative solution
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->

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