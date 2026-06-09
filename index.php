<?php include 'header.php'; ?>

<main class="container">
    <section class="row mt-4 mb-5 hero-sec">
        <div class="category-sec col-lg-3 d-none d-lg-block border-end pe-4 pt-3">
            <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                <li><a href="#" class="text-dark text-decoration-none d-flex justify-content-between align-items-center hover-primary">Computers & PCs <i class="bi bi-chevron-right small"></i></a></li>
                <li><a href="#" class="text-dark text-decoration-none d-flex justify-content-between align-items-center hover-primary">Laptops <i class="bi bi-chevron-right small"></i></a></li>
                <li><a href="#" class="text-dark text-decoration-none hover-primary">Components</a></li>
                <li><a href="#" class="text-dark text-decoration-none hover-primary">Monitors</a></li>
                <li><a href="#" class="text-dark text-decoration-none hover-primary">Gaming</a></li>
                <li><a href="#" class="text-dark text-decoration-none hover-primary">Storage Devices</a></li>
                <li><a href="#" class="text-dark text-decoration-none hover-primary">Networking</a></li>
                <li><a href="#" class="text-dark text-decoration-none hover-primary">Printers & Scanners</a></li>
                <li><a href="#" class="text-dark text-decoration-none hover-primary">Accessories</a></li>
            </ul>
        </div>

        <div class="col-lg-9 ps-lg-4 pt-3">
            <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner rounded">
                    <div class="carousel-item active">
                        <img src="assets/images/banners/1.jpg" class="d-block w-100 object-fit-cover" style="height: 350px;" alt="Banner 1" onerror="this.src='https://placehold.co/800x350/000/FFF?text=Tech+Series+-+Up+to+10%25+Off'">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/banners/2.jpg" class="d-block w-100 object-fit-cover" style="height: 350px;" alt="Banner 2" onerror="this.src='https://placehold.co/800x350/000/FFF?text=Gaming+Accessories'">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section class="mb-5">
        <div class="d-flex align-items-center gap-3 mb-3">
            <div class="bg-primary rounded" style="width: 20px; height: 40px;"></div>
            <h6 class="text-primary fw-bold mb-0">Today's</h6>
        </div>

        <div class="d-flex flex-wrap align-items-end justify-content-between mb-4 gap-3">
            <h2 class="fw-bold mb-0 me-md-5">Flash Sales</h2>
            <div class="d-flex gap-3 me-auto fs-3 fw-bold align-items-end">
                <div class="d-flex flex-column align-items-center lh-1"><span class="small fs-6 fw-medium text-muted">Days</span><span>03</span></div>
                <span class="text-danger fs-4 mb-1">:</span>
                <div class="d-flex flex-column align-items-center lh-1"><span class="small fs-6 fw-medium text-muted">Hours</span><span>23</span></div>
                <span class="text-danger fs-4 mb-1">:</span>
                <div class="d-flex flex-column align-items-center lh-1"><span class="small fs-6 fw-medium text-muted">Minutes</span><span>19</span></div>
                <span class="text-danger fs-4 mb-1">:</span>
                <div class="d-flex flex-column align-items-center lh-1"><span class="small fs-6 fw-medium text-muted">Seconds</span><span>56</span></div>
            </div>
            <div class="d-flex gap-2">
                <button class="btn btn-light rounded-circle shadow-sm"><i class="bi bi-arrow-left"></i></button>
                <button class="btn btn-light rounded-circle shadow-sm"><i class="bi bi-arrow-right"></i></button>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            <div class="col">
                <div class="card product-card h-100">
                    <span class="product-badge">-40%</span>
                    <div class="bg-light rounded d-flex align-items-center justify-content-center p-4 position-relative overflow-hidden" style="height: 250px;">
                        <img src="https://placehold.co/150x150" alt="Product" class="img-fluid mix-blend-multiply">
                        <div class="position-absolute top-0 end-0 m-2 d-flex flex-column gap-2">
                            <button class="btn btn-light bg-white rounded-circle shadow-sm p-2 lh-1 hover-primary"><i class="bi bi-heart"></i></button>
                            <button class="btn btn-light bg-white rounded-circle shadow-sm p-2 lh-1 hover-primary"><i class="bi bi-eye"></i></button>
                        </div>
                        <button class="btn btn-dark w-100 position-absolute bottom-0 start-0 rounded-0 add-to-cart opacity-0">Add To Cart</button>
                    </div>
                    <div class="card-body px-0 pb-0">
                        <h6 class="card-title fw-bold text-truncate mb-2">HAVIT HV-G92 Gamepad</h6>
                        <div class="d-flex gap-2 align-items-center mb-1">
                            <span class="text-primary fw-bold">$120</span>
                            <span class="text-muted text-decoration-line-through small">$160</span>
                        </div>
                        <div class="text-warning small">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill text-muted"></i>
                            <span class="text-muted ms-1">(88)</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card product-card h-100">
                    <span class="product-badge">-35%</span>
                    <div class="bg-light rounded d-flex align-items-center justify-content-center p-4 position-relative overflow-hidden" style="height: 250px;">
                        <img src="https://placehold.co/150x150" alt="Product" class="img-fluid mix-blend-multiply">
                        <div class="position-absolute top-0 end-0 m-2 d-flex flex-column gap-2">
                            <button class="btn btn-light bg-white rounded-circle shadow-sm p-2 lh-1 hover-primary"><i class="bi bi-heart"></i></button>
                            <button class="btn btn-light bg-white rounded-circle shadow-sm p-2 lh-1 hover-primary"><i class="bi bi-eye"></i></button>
                        </div>
                        <button class="btn btn-dark w-100 position-absolute bottom-0 start-0 rounded-0 add-to-cart opacity-0">Add To Cart</button>
                    </div>
                    <div class="card-body px-0 pb-0">
                        <h6 class="card-title fw-bold text-truncate mb-2">AK-900 Wired Keyboard</h6>
                        <div class="d-flex gap-2 align-items-center mb-1">
                            <span class="text-primary fw-bold">$96</span>
                            <span class="text-muted text-decoration-line-through small">$116</span>
                        </div>
                        <div class="text-warning small">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                            <span class="text-muted ms-1">(75)</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card product-card h-100">
                    <span class="product-badge">-30%</span>
                    <div class="bg-light rounded d-flex align-items-center justify-content-center p-4 position-relative overflow-hidden" style="height: 250px;">
                        <img src="https://placehold.co/150x150" alt="Product" class="img-fluid mix-blend-multiply">
                        <div class="position-absolute top-0 end-0 m-2 d-flex flex-column gap-2">
                            <button class="btn btn-light bg-white rounded-circle shadow-sm p-2 lh-1 hover-primary"><i class="bi bi-heart"></i></button>
                            <button class="btn btn-light bg-white rounded-circle shadow-sm p-2 lh-1 hover-primary"><i class="bi bi-eye"></i></button>
                        </div>
                        <button class="btn btn-dark w-100 position-absolute bottom-0 start-0 rounded-0 add-to-cart opacity-0">Add To Cart</button>
                    </div>
                    <div class="card-body px-0 pb-0">
                        <h6 class="card-title fw-bold text-truncate mb-2">IPS LCD Gaming Monitor</h6>
                        <div class="d-flex gap-2 align-items-center mb-1">
                            <span class="text-primary fw-bold">$370</span>
                            <span class="text-muted text-decoration-line-through small">$400</span>
                        </div>
                        <div class="text-warning small">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            <span class="text-muted ms-1">(99)</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card product-card h-100">
                    <div class="bg-light rounded d-flex align-items-center justify-content-center p-4 position-relative overflow-hidden" style="height: 250px;">
                        <img src="https://placehold.co/150x150" alt="Product" class="img-fluid mix-blend-multiply">
                        <div class="position-absolute top-0 end-0 m-2 d-flex flex-column gap-2">
                            <button class="btn btn-light bg-white rounded-circle shadow-sm p-2 lh-1 hover-primary"><i class="bi bi-heart"></i></button>
                            <button class="btn btn-light bg-white rounded-circle shadow-sm p-2 lh-1 hover-primary"><i class="bi bi-eye"></i></button>
                        </div>
                        <button class="btn btn-dark w-100 position-absolute bottom-0 start-0 rounded-0 add-to-cart opacity-0">Add To Cart</button>
                    </div>
                    <div class="card-body px-0 pb-0">
                        <h6 class="card-title fw-bold text-truncate mb-2">S-Series Comfort Chair</h6>
                        <div class="d-flex gap-2 align-items-center mb-1">
                            <span class="text-primary fw-bold">$375</span>
                        </div>
                        <div class="text-warning small">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                            <span class="text-muted ms-1">(99)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <button class="btn btn-primary px-5 py-3 rounded-1 fw-medium">View All Products</button>
        </div>
        <hr class="mt-5 text-muted border-secondary opacity-25">
    </section>
</main>


<?php include 'footer.php'; ?>