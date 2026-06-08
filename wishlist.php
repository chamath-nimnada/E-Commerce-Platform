<?php include 'header.php'; ?>

<main class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h5 class="fw-medium mb-0">Wishlist (4)</h5>
        <button class="btn btn-outline-dark px-4 py-2 fw-medium">Move All To Bag</button>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 mb-5 pb-5">
        <div class="col">
            <div class="card product-card h-100">
                <span class="product-badge">-35%</span>
                <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center p-4 position-relative overflow-hidden" style="height: 250px;">
                    <img src="https://placehold.co/150x150" alt="Product" class="img-fluid mix-blend-multiply mb-4">
                    <button class="btn btn-light bg-white rounded-circle shadow-sm p-2 lh-1 position-absolute top-0 end-0 m-2 hover-primary"><i class="bi bi-trash"></i></button>
                    <button class="btn btn-dark w-100 position-absolute bottom-0 start-0 rounded-0 d-flex align-items-center justify-content-center gap-2"><i class="bi bi-cart2"></i> Add To Cart</button>
                </div>
                <div class="card-body px-0 pb-0">
                    <h6 class="card-title fw-bold text-truncate mb-2">Gucci duffle bag</h6>
                    <div class="d-flex gap-2 align-items-center mb-1">
                        <span class="text-primary fw-bold">$960</span>
                        <span class="text-muted text-decoration-line-through small">$1160</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-4 mt-5">
        <div class="d-flex align-items-center gap-3">
            <div class="bg-primary rounded" style="width: 20px; height: 40px;"></div>
            <h5 class="fw-medium mb-0">Just For You</h5>
        </div>
        <button class="btn btn-outline-dark px-4 py-2 fw-medium">See All</button>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        <div class="col">
            <div class="card product-card h-100">
                <span class="product-badge">-35%</span>
                <div class="bg-light rounded d-flex align-items-center justify-content-center p-4 position-relative overflow-hidden" style="height: 250px;">
                    <img src="https://placehold.co/150x150" alt="Product" class="img-fluid mix-blend-multiply">
                    <div class="position-absolute top-0 end-0 m-2 d-flex flex-column gap-2">
                        <button class="btn btn-light bg-white rounded-circle shadow-sm p-2 lh-1 hover-primary"><i class="bi bi-eye"></i></button>
                    </div>
                    <button class="btn btn-dark w-100 position-absolute bottom-0 start-0 rounded-0 add-to-cart d-flex align-items-center justify-content-center gap-2 opacity-0"><i class="bi bi-cart2"></i> Add To Cart</button>
                </div>
                <div class="card-body px-0 pb-0">
                    <h6 class="card-title fw-bold text-truncate mb-2">ASUS FHD Gaming Laptop</h6>
                    <div class="d-flex gap-2 align-items-center mb-1">
                        <span class="text-primary fw-bold">$960</span>
                        <span class="text-muted text-decoration-line-through small">$1160</span>
                    </div>
                    <div class="text-warning small">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        <span class="text-muted ms-1">(65)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>