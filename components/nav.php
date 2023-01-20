<!-- Topbar Start -->
<div class="container-fluid bg-dark px-0">
    <div class="row g-0 d-none d-lg-flex">
        <div class="col-lg-6 ps-5 text-start">
            <div class="h-100 d-inline-flex align-items-center text-white">
                <span>Follow Us:</span>
                <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-6 text-end">
            <div class="h-100 topbar-right d-inline-flex align-items-center text-white py-2 px-5">
                <span class="fs-5 fw-bold me-2"><i class="fa fa-phone-alt me-2"></i>Call Us:</span>
                <span class="fs-5 fw-bold">+254 704 123 574</span>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
    <a href="index.php" class="navbar-brand ps-5 me-0">
        <h1 class="text-white m-0">Meco Art</h1>
    </a>
    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div id="menu" class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.php" class=" <?php echo $currentPage === 'index' ? 'active' : ''; ?> nav-item nav-link">Home</a>
            <a href="about.php" class=" <?php echo $currentPage === 'about' ? 'active' : ''; ?> nav-item nav-link">About</a>
            <a href="gallery.php" class="<?php echo $currentPage === 'gallery' ? 'active' : ''; ?> menu-item nav-item nav-link">Gallery</a>
            <a href="contact.php" class="<?php echo $currentPage === 'contact' ? 'active' : ''; ?> menu-item nav-item nav-link">Contact</a>
        </div>
        <a href="" class="btn btn-primary px-3 d-none d-lg-block">Get A Quote</a>
    </div>
</nav>
<!-- Navbar End -->