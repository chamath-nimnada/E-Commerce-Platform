<?php
// TODO: Fetch flash sale products from the database
$flash_sale_products = [];

if (!empty($flash_sale_products)):
?>
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
            <?php foreach ($flash_sale_products as $product): ?>
                <div class="col">
                    <?php
                    $img = $product['img'] ?? null;
                    $title = $product['title'] ?? null;
                    $price = $product['price'] ?? null;
                    $old_price = $product['old_price'] ?? null;
                    $rating = $product['rating'] ?? null;
                    $reviews = $product['reviews'] ?? null;
                    $badge = $product['badge'] ?? null;
                    include 'components/product_card.php';
                    ?>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-5">
            <button class="btn btn-primary px-5 py-3 rounded-1 fw-medium">View All Products</button>
        </div>

        <hr class="mt-5 text-muted border-secondary opacity-25">
    </section>
<?php endif; ?>