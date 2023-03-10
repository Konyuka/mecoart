<!DOCTYPE html>
<html lang="en">

<?php include
    './components/header.html';
$currentPage = 'about';
?>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
                        <img class="img-fluid w-100" src="img/falling4.png" alt="">
                        <span class="position-absolute top-50 start-100 translate-middle bg-white rounded-circle d-none d-lg-block" style="width: 120px; height: 120px;"></span>
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="#" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">
                        Quality equipment for quality food
                    </p>
                    <h1 class="display-5 mb-4">Meco Art Limited</h1>
                    <p class="mb-4">
                        "Welcome to Meco Art Limited, your one-stop shop for all your commercial kitchen equipment needs. We have been in the industry for 6 years and have built a reputation for providing top-quality equipment at competitive prices.

                        Our mission is to provide our customers with the best equipment and service, so they can focus on what they do best - creating delicious food. We understand that every kitchen is different, and we strive to offer a wide range of products to meet the unique needs of our customers.

                        We are a team of experienced industry professionals with a passion for food and a deep understanding of the equipment that goes into a successful kitchen. Our founders have over 6 years of experience in the industry and have built a team of experts who share their passion.

                        We offer a wide range of products, including cookers, ovens, refrigeration, and more. Our equipment is energy-efficient, durable and easy to clean, ensuring that your kitchen runs smoothly and efficiently.

                        We are proud to be a authorized dealer, and our equipment is certified for quality and safety. We also partner with other industry-leading brands to offer our customers the best selection of equipment.

                        If you have any questions or need help selecting the right equipment for your kitchen, please don't hesitate to contact us. Our team is here to help, and we would be happy to answer any questions you may have.

                        Thank you for choosing Meco Art Limited. We look forward to working with you to equip your kitchen for success."

                        Note : above sample is a fictional one, please make sure to use your own information and details.
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
                                        To help people envision their business in the food industry and other industries, be part of the growth by building innovative commercial kitchen solutions and offering our clients the best service.
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
                                        To be a globally recognised brand that builds the best commercial kitchens and offers the most innovative solution
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
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->

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