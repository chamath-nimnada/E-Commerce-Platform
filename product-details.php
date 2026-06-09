<?php include 'header.php'; ?>

<main class="container my-5">
    <nav aria-label="breadcrumb" class="mb-5">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="account.php" class="text-muted text-decoration-none hover-primary">Account</a></li>
            <li class="breadcrumb-item"><a href="#" class="text-muted text-decoration-none hover-primary">Gaming</a></li>
            <li class="breadcrumb-item active text-dark" aria-current="page">Havic HV G-92 Gamepad</li>
        </ol>
    </nav>

    <div class="row g-5 mb-5 pb-5">
        <!-- Product Images -->
        <div class="col-lg-7">
            <div class="row g-3">
                <div class="col-3 d-flex flex-column gap-3">
                    <img src="https://placehold.co/150x150" alt="Thumb 1" class="img-fluid bg-light rounded cursor-pointer border border-dark product-thumb">
                    <img src="https://placehold.co/150x150" alt="Thumb 2" class="img-fluid bg-light rounded cursor-pointer product-thumb">
                    <img src="https://placehold.co/150x150" alt="Thumb 3" class="img-fluid bg-light rounded cursor-pointer product-thumb">
                    <img src="https://placehold.co/150x150" alt="Thumb 4" class="img-fluid bg-light rounded cursor-pointer product-thumb">
                </div>
                <div class="col-9">
                    <div class="bg-light rounded d-flex align-items-center justify-content-center h-100 p-4 w-100" style="min-height: 500px;">
                        <img src="https://placehold.co/500x500" alt="Main Product" id="mainProductImage" class="img-fluid mix-blend-multiply">
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Information -->
        <div class="col-lg-5">
            <h3 class="fw-bold mb-2">Havic HV G-92 Gamepad</h3>
            <div class="d-flex align-items-center gap-2 mb-3">
                <div class="text-warning small">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                </div>
                <span class="text-muted small">(150 Reviews)</span>
                <span class="text-muted small px-2">|</span>
                <span class="text-success small fw-medium">In Stock</span>
            </div>

            <h4 class="fw-bold mb-3">$192.00</h4>
            <p class="text-muted small mb-4">PlayStation 5 Controller Skin High quality vinyl with air channel adhesive for easy bubble free install & mess free removal Pressure sensitive.</p>

            <hr class="border-secondary opacity-25 mb-4">

            <!-- Colors -->
            <div class="d-flex align-items-center gap-3 mb-4">
                <span class="fw-medium">Colours:</span>
                <div class="d-flex gap-2">
                    <div class="rounded-circle bg-dark border border-2 border-dark" style="width: 20px; height: 20px; cursor: pointer;"></div>
                    <div class="rounded-circle bg-danger border border-2 border-white shadow-sm" style="width: 20px; height: 20px; cursor: pointer;"></div>
                </div>
            </div>

            <!-- Size -->
            <div class="d-flex align-items-center gap-3 mb-4">
                <span class="fw-medium">Size:</span>
                <div class="d-flex gap-2">
                    <button class="btn btn-outline-dark btn-sm rounded px-3">XS</button>
                    <button class="btn btn-outline-dark btn-sm rounded px-3">S</button>
                    <button class="btn btn-danger btn-sm rounded px-3 text-white border-0">M</button>
                    <button class="btn btn-outline-dark btn-sm rounded px-3">L</button>
                    <button class="btn btn-outline-dark btn-sm rounded px-3">XL</button>
                </div>
            </div>

            <!-- Quantity & Actions -->
            <div class="d-flex align-items-center gap-3 mb-5">
                <div class="input-group" style="width: 130px;">
                    <button class="btn btn-outline-dark px-3 qty-btn" data-action="minus" type="button"><i class="bi bi-dash"></i></button>
                    <input type="text" class="form-control text-center border-dark border-start-0 border-end-0 fw-medium qty-input" value="2" readonly>
                    <button class="btn btn-danger px-3 text-white qty-btn" data-action="plus" type="button"><i class="bi bi-plus"></i></button>
                </div>
                <button class="btn btn-primary px-5 py-2 fw-medium">Buy Now</button>
                <button class="btn btn-outline-dark px-3 py-2 rounded"><i class="bi bi-heart fs-5"></i></button>
            </div>

            <!-- Delivery Info -->
            <div class="card border-dark border-opacity-25 rounded-1">
                <div class="card-body p-3 d-flex gap-3 align-items-center border-bottom border-dark border-opacity-25">
                    <i class="bi bi-truck fs-3"></i>
                    <div>
                        <h6 class="fw-medium mb-1">Free Delivery</h6>
                        <a href="#" class="text-dark small text-decoration-underline">Enter your postal code for Delivery Availability</a>
                    </div>
                </div>
                <div class="card-body p-3 d-flex gap-3 align-items-center">
                    <i class="bi bi-arrow-repeat fs-3"></i>
                    <div>
                        <h6 class="fw-medium mb-1">Return Delivery</h6>
                        <span class="text-muted small">Free 30 Days Delivery Returns. <a href="#" class="text-dark text-decoration-underline">Details</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Items -->
    <div class="mb-5 mt-5 pt-5">
        <div class="d-flex align-items-center gap-3 mb-4">
            <div class="bg-primary rounded" style="width: 20px; height: 40px;"></div>
            <h6 class="text-primary fw-bold mb-0">Related Item</h6>
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
                        <h6 class="card-title fw-bold text-truncate mb-2">RGB liquid CPU Cooler</h6>
                        <div class="d-flex gap-2 align-items-center mb-1">
                            <span class="text-primary fw-bold">$160</span>
                            <span class="text-muted text-decoration-line-through small">$170</span>
                        </div>
                        <div class="text-warning small">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                            <span class="text-muted ms-1">(65)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    /* Add to style.css */
    .cursor-pointer {
        cursor: pointer;
    }

    .product-thumb {
        transition: border 0.3s ease;
    }

    .product-thumb:hover {
        border: 1px solid #000 !important;
    }
</style>

<?php include 'footer.php'; ?>