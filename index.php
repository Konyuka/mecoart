<!DOCTYPE html>
<!-- <html lang="en" > -->

<?php include
    './components/header.html';
$currentPage = 'index';
?>

<!-- add -->


<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <?php include './components/nav.php'; ?>


    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/4.png" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">Meco Art Limited</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Culinary
                                        innovation <br> meets classic flavor</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInRight">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/3.png" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">Meco Art
                                        Limited</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Experience the art of
                                        cooking at its finest</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInRight">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-1">
                    <!-- <div class="row gx-3 h-100">
                        <div class="col-12 align-self-start wow fadeInUp" data-wow-delay="0.1s">
                            <img class="img-fluid" src="img/ck4.jpg">
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-10 wow fadeIn" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Leaders in commercial kitchen equipment</p>
                    <h1 class="display-5 mb-4">Choosing The Right Kitchen Equipment</h1>
                    <p class="mb-4">
                        Starting a commercial kitchen involves several steps, including obtaining necessary permits and
                        licenses, finding a suitable location, purchasing equipment, and developing a menu and business
                        plan. Some of the factors to consider while selecting the right equipment for your restaurant or institution include:
                    </p>
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0 bg-primary p-4">
                            <h1 class="display-2">6</h1>
                            <h5 class="text-white">Years of</h5>
                            <h5 class="text-white">Experience</h5>
                        </div>
                        <div class="ms-4">
                            <p><i class="fa fa-check text-primary me-2"></i>Volume of food to be preparing</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Physical space of your kitchen</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Easy service for the equipment</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Budget & quality of equipment</p>
                            <p class="mb-0"><i class="fa fa-check text-primary me-2"></i>Running cost of the equipment</p>
                        </div>
                    </div>
                    <p class="mb-4">
                        We build trust with potential clients by being readily available for feedback on queries.
                        We normally reply immediately. Feel free to reach to us through phone or email as desired
                    </p>
                    <div class="row pt-2">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-envelope-open text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-2">Email us</p>
                                    <h5 class="mb-0">sales@mecoartltd.co.ke</h5>
                                    <h5 class="mb-0">info@mecoartltd.co.ke</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-2">Call us</p>
                                    <h5 class="mb-0">+254 748 508 142</h5>
                                    <h5 class="mb-0">+254 704 123 574</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid facts my-5 p-5">
        <div class="row g-5">
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="text-center border p-5">
                    <i class="fa fa-certificate fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">6</h1>
                    <span class="fs-5 fw-semi-bold text-white">Years Experience</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="text-center border p-5">
                    <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">35</h1>
                    <span class="fs-5 fw-semi-bold text-white">Team Members</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="text-center border p-5">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">957</h1>
                    <span class="fs-5 fw-semi-bold text-white">Happy Clients</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="text-center border p-5">
                    <i class="fa fa-check-double fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">1039</h1>
                    <span class="fs-5 fw-semi-bold text-white">Projects Done</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100" src="img/falling3.png" alt="">
                        <span class="position-absolute top-50 start-100 translate-middle bg-white rounded-circle d-none d-lg-block" style="width: 120px; height: 120px;"></span>
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="#" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Why Choose Us?</p>
                    <h1 class="display-5 mb-4">A Few Reasons Why..</h1>

                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Quality</h4>
                                    <span>
                                        We have high quality and durable equipment as we use the commercial grade materials during our build phase
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Experience</h4>
                                    <span>
                                        We have a 6 year expert experience in the field and can prove by awards and testimonals from our clients
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Wide range of products</h4>
                                    <span>
                                        We showcase a wide range of products and equipment to meet the needs of different types of commercial kitchens
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Customization</h4>
                                    <span>
                                        We always cusomize our equipment to the client's specifications and requirements
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Service and Support</h4>
                                    <span>
                                        We offer commited and excellent customer service for technical, maintenance & repair services
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Competitive pricing</h4>
                                    <span>
                                        We offer the best market prices and financial options to any estemeed client
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Satisfaction Guaranteed</h4>
                                    <span>
                                        Our clients are always guaranteed quality products and would never have to go through return policy for a fact.
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


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Meco Art</p>
                <h1 class="display-5 mb-4">Our Services</h1>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">

                        <img class="img-fluid" src="img/orange.png" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="img/star.jpg" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Commercial kitchen Design</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="d-lg-none smallFont text-white mb-0">
                                    Out team of professionals put into consideration key elements such as workflow, storage,
                                    safety, lighting & ventilation and durability just to summarize; to come up with commercial kitchen
                                    designs that improve the efficiency and productivity while also maintaining an attractive setup for both
                                    the customers and employees
                                    <br> <br>
                                    Let us create a floor plan and design that will fit right into your ideal kitchen.
                                    Our designs ensure right utilisation of space, budget, setting and orientation.
                                </p>
                                <p class="d-none d-sm-block text-white mb-0">
                                    Out team of professionals put into consideration key elements such as workflow, storage,
                                    safety, lighting & ventilation and durability just to summarize; to come up with commercial kitchen
                                    designs that improve the efficiency and productivity while also maintaining an attractive setup for both
                                    the customers and employees
                                    <br> <br>
                                    Let us create a floor plan and design that will fit right into your ideal kitchen.
                                    Our designs ensure right utilisation of space, budget, setting and orientation.
                                </p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="">Enquire</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/orange.png" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="img/star.jpg" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Supply & Installation</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="d-lg-none smallFont text-white mb-0">
                                    Some of our fabricated solutions include cooking ranges, deep fat fryers, gas
                                    grills, heavy duty wash up sinks, drainage racks, storage shelves, worktop tables,
                                    storage cabinets, service trolleys, electric bain marries, kitchen hood/extraction
                                    system, wall mounted shelves.
                                    <br><br>
                                    Supplying and installing commercial kitchen equipment is a crucial step in setting
                                    up a successful food service business. The equipment chosen must not only meet the
                                    specific needs of the business, but also comply with local health and safety codes.
                                    <br><br>
                                    Once the equipment has been selected, the next step is installation. A professional
                                    installation team will ensure that the equipment is installed correctly and safely,
                                    and that it meets local codes and regulations. They will also provide training for
                                    staff on how to operate and maintain the equipment.
                                    <br><br>
                                </p>
                                <p class="d-none d-sm-block text-white mb-0">
                                    Some of our fabricated solutions include cooking ranges, deep fat fryers, gas
                                    grills, heavy duty wash up sinks, drainage racks, storage shelves, worktop tables,
                                    storage cabinets, service trolleys, electric bain marries, kitchen hood/extraction
                                    system, wall mounted shelves.
                                    <br><br>
                                    Supplying and installing commercial kitchen equipment is a crucial step in setting
                                    up a successful food service business. The equipment chosen must not only meet the
                                    specific needs of the business, but also comply with local health and safety codes.
                                    <br><br>
                                    Once the equipment has been selected, the next step is installation. A professional
                                    installation team will ensure that the equipment is installed correctly and safely,
                                    and that it meets local codes and regulations. They will also provide training for
                                    staff on how to operate and maintain the equipment.
                                    <br><br>
                                </p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="">Enquire</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/orange.png" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="img/star.jpg" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Fabricating Kitchen Solutions</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="d-lg-none smallFont text-white mb-0">
                                    Fabricating commercial kitchen solutions is the process of creating custom-made
                                    equipment and fixtures for a commercial kitchen.
                                    <br><br>
                                    This can include things like
                                    cooking ranges, deep fat fryers, gas grills, heavy duty wash up sinks, drainage
                                    racks, storage shelves, worktop tables, storage cabinets, service trolleys, electric
                                    bain marries, kitchen hood/extraction system, wall mounted shelves and even entire
                                    kitchen islands
                                    <br><br>
                                    Fabricating commercial kitchen solutions can be a great way to create a functional
                                    and efficient kitchen that is tailored to the specific needs of the business. It can
                                    also be a cost-effective and visually appealing solution to improve the overall look
                                    and feel of the kitchen
                                </p>
                                <p class="d-none d-sm-block text-white mb-0">
                                    Fabricating commercial kitchen solutions is the process of creating custom-made
                                    equipment and fixtures for a commercial kitchen.
                                    <br><br>
                                    This can include things like
                                    cooking ranges, deep fat fryers, gas grills, heavy duty wash up sinks, drainage
                                    racks, storage shelves, worktop tables, storage cabinets, service trolleys, electric
                                    bain marries, kitchen hood/extraction system, wall mounted shelves and even entire
                                    kitchen islands
                                    <br><br>
                                    Fabricating commercial kitchen solutions can be a great way to create a functional
                                    and efficient kitchen that is tailored to the specific needs of the business. It can
                                    also be a cost-effective and visually appealing solution to improve the overall look
                                    and feel of the kitchen
                                </p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="">Enquire</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/orange.png" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="img/star.jpg" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Repair & Maintenance</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="d-lg-none smallFont text-white mb-0">
                                    Running a commercial kitchen is no laughing matter, but keeping the equipment in tip-top
                                    shape? That's another story! From deep fryers to ovens, and everything in between,
                                    commercial kitchen equipment takes a beating every day. But just like your favorite
                                    comedian, a little maintenance and TLC can go a long way in keeping things running
                                    smoothly.
                                    <br><br>
                                    Don't be afraid to call in the professionals. We also do repairs on equipment we never installed.
                                    You will always stay on top of schedule maintenance
                                </p>
                                <p class="d-none d-sm-block text-white mb-0">
                                    Running a commercial kitchen is no laughing matter, but keeping the equipment in tip-top
                                    shape? That's another story! From deep fryers to ovens, and everything in between,
                                    commercial kitchen equipment takes a beating every day. But just like your favorite
                                    comedian, a little maintenance and TLC can go a long way in keeping things running
                                    smoothly.
                                    <br><br>
                                    Don't be afraid to call in the professionals. We also do repairs on equipment we never installed.
                                    You will always stay on top of schedule maintenance
                                </p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="">Enquire</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Team Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Our Team</p>
                <h1 class="display-5 mb-5">Dedicated Team Members</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <img class="img-fluid" src="img/user.jpg" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4" style="height: 90px;">
                                <h5>Sam Ceo</h5>
                                <span class="text-primary">CEO & Founder</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <img class="img-fluid" src="img/user.jpg" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4" style="height: 90px;">
                                <h5>Rob Otis</h5>
                                <span class="text-primary">Project Manager</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <img class="img-fluid" src="img/user.jpg" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4" style="height: 90px;">
                                <h5>Peter Odhis</h5>
                                <span class="text-primary">Engineer</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Testimonial</p>
                <h1 class="display-5 mb-5">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <i class="fas fa-user"></i>
                        <!-- <img class="img-fluid rounded-circle mx-auto mb-5" src="img/testimonial-1.jpg"> -->
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>
                            We recently upgraded to a new commercial kitchen and it has made all the difference in our
                            restaurant's operation. The new equipment is top-of-the-line and has increased our
                            efficiency and productivity. The ovens heat up quickly and cook food evenly, the grills are
                            large enough to handle a high volume of orders, and the dishwashing station has cut down on
                            our cleaning time. We are extremely happy with our purchase and highly recommend
                            Meco Art Limited to other restaurants looking to upgrade their kitchen
                        </p>
                        <h5 class="mb-1">Jane Rotich</h5>
                        <span class="fst-italic">Operations Manager, Talk Duka</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <i class="fas fa-user"></i>
                        <!-- <img class="img-fluid rounded-circle mx-auto mb-5" src="img/testimonial-1.jpg"> -->
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>
                            Our commercial kitchen was in dire need of an upgrade, and we are so grateful we chose
                            Meco Art Limited to help us with the renovation. They were professional, knowledgeable and
                            efficient throughout the entire process. The new equipment is top-of-the-line and has made a
                            huge difference in the efficiency and quality of our food. We highly recommend their
                            services to anyone in the food industry looking for a kitchen upgrade
                        </p>
                        <h5 class="mb-1">Isaiah Mbugua</h5>
                        <span class="fst-italic">CEO, Imaginative Brands</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <i class="fas fa-user"></i>
                        <!-- <img class="img-fluid rounded-circle mx-auto mb-5" src="img/testimonial-1.jpg"> -->
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>
                            We were looking for a reliable and experienced company to help us design and install our new
                            commercial kitchen, and we found that in Meco Art Limited. They listened to our needs and
                            provided us with a great layout and equipment that has exceeded our expectations. The
                            kitchen is now a joy to work in and has significantly increased our production and quality.
                            We highly recommend them
                        </p>
                        <h5 class="mb-1">Mark Siele</h5>
                        <span class="fst-italic">Manager, Elkana Resorts</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

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