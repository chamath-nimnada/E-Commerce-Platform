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

    <?php include 'components/flash_sale.php'; ?>

    <section class="mb-5">
        <div class="d-flex align-items-center gap-3 mb-3">
            <div class="bg-primary rounded" style="width: 20px; height: 40px;"></div>
            <h6 class="text-primary fw-bold mb-0">Our Products</h6>
        </div>

        <div class="d-flex flex-wrap align-items-end justify-content-between mb-4 gap-3">
            <h3 class="fw-bold mb-0 me-md-5">Most Sold Products</h3>
        </div>

        <div class="bg-light p-3 rounded mb-4 d-flex flex-wrap align-items-center justify-content-between gap-3">
            <div class="d-flex flex-wrap gap-3 align-items-center">
                <span class="fw-bold text-dark"><i class="bi bi-funnel"></i> Filter:</span>
                <select class="form-select form-select-sm w-auto cursor-pointer shadow-none" id="filter-category">
                    <option value="all">All Categories</option>
                    <option value="Laptops">Laptops</option>
                    <option value="Monitors">Monitors</option>
                    <option value="Accessories">Accessories</option>
                </select>
                <select class="form-select form-select-sm w-auto cursor-pointer shadow-none" id="filter-price">
                    <option value="all">All Prices</option>
                    <option value="under100">Under $100</option>
                    <option value="over100">$100 & Above</option>
                </select>
            </div>
            <div class="d-flex align-items-center gap-2 mt-2 mt-md-0">
                <span class="fw-bold text-dark">Sort:</span>
                <select class="form-select form-select-sm w-auto cursor-pointer shadow-none" id="sort-items">
                    <option value="default">Default</option>
                    <option value="low-high">Price: Low to High</option>
                    <option value="high-low">Price: High to Low</option>
                </select>
            </div>
        </div>

        <?php
        $categories = ['Laptops', 'Monitors', 'Accessories'];
        $all_products = [];
        for ($i = 1; $i <= 20; $i++) {
            $all_products[] = [
                'title' => 'Product Item ' . $i,
                'price' => rand(50, 300),
                'rating' => rand(3, 5),
                'reviews' => rand(10, 150),
                'category' => $categories[array_rand($categories)]
            ];
        }

        if (empty($all_products)): ?>
            <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center p-5 text-center" style="min-height: 250px;">
                <i class="bi bi-box-seam fs-1 text-secondary mb-3"></i>
                <h5 class="fw-bold text-dark">Products Updating</h5>
                <p class="text-muted mb-0">Our team is actively curating the best items. Check back shortly!</p>
            </div>
        <?php else: ?>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4" id="main-product-grid">
                <?php foreach ($all_products as $index => $product):
                    $hiddenClass = $index >= 12 ? 'd-none default-hidden' : '';
                ?>
                    <div class="col product-item <?= $hiddenClass ?>"
                        data-category="<?= $product['category'] ?>"
                        data-price="<?= $product['price'] ?>">
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

            <?php if (count($all_products) > 12): ?>
                <div class="text-center mt-5" id="load-more-wrapper">
                    <button id="load-more-btn" class="btn btn-primary px-5 py-3 rounded-1 fw-medium">See More</button>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const grid = document.getElementById('main-product-grid');
        if (!grid) return;

        const items = Array.from(grid.querySelectorAll('.product-item'));
        const loadMoreBtn = document.getElementById('load-more-btn');
        const loadMoreWrapper = document.getElementById('load-more-wrapper');

        const catFilter = document.getElementById('filter-category');
        const priceFilter = document.getElementById('filter-price');
        const sortFilter = document.getElementById('sort-items');

        function applyFiltersAndSort() {
            const cat = catFilter.value;
            const price = priceFilter.value;
            const sort = sortFilter.value;

            // 1. Sort the array
            items.sort((a, b) => {
                const pA = parseFloat(a.dataset.price);
                const pB = parseFloat(b.dataset.price);
                if (sort === 'low-high') return pA - pB;
                if (sort === 'high-low') return pB - pA;
                return 0;
            });

            // 2. Re-append to DOM in sorted order
            items.forEach(item => grid.appendChild(item));

            // 3. Filter visibility
            let matchCount = 0;
            items.forEach((item) => {
                const itemCat = item.dataset.category;
                const itemPrice = parseFloat(item.dataset.price);

                const matchCat = (cat === 'all' || itemCat === cat);
                const matchPrice = (price === 'all') ||
                    (price === 'under100' && itemPrice < 100) ||
                    (price === 'over100' && itemPrice >= 100);

                if (matchCat && matchPrice) {
                    item.classList.remove('d-none');
                    item.classList.remove('default-hidden');
                    matchCount++;
                } else {
                    item.classList.add('d-none');
                }
            });

            // 4. Hide "See More" if filters are active to avoid pagination conflicts
            if (loadMoreWrapper) {
                if (cat !== 'all' || price !== 'all' || sort !== 'default') {
                    loadMoreWrapper.style.display = 'none';
                } else {
                    // Reset default view (hide items beyond 12)
                    loadMoreWrapper.style.display = 'block';
                    items.forEach((item, index) => {
                        if (index >= 12) {
                            item.classList.add('d-none', 'default-hidden');
                        }
                    });
                    if (loadMoreBtn) loadMoreBtn.style.display = 'inline-block';
                }
            }
        }

        if (catFilter) catFilter.addEventListener('change', applyFiltersAndSort);
        if (priceFilter) priceFilter.addEventListener('change', applyFiltersAndSort);
        if (sortFilter) sortFilter.addEventListener('change', applyFiltersAndSort);

        if (loadMoreBtn) {
            loadMoreBtn.addEventListener('click', function() {
                const hiddenItems = document.querySelectorAll('.product-item.default-hidden');
                for (let i = 0; i < 4 && i < hiddenItems.length; i++) {
                    hiddenItems[i].classList.remove('d-none', 'default-hidden');
                }
                if (document.querySelectorAll('.product-item.default-hidden').length === 0) {
                    loadMoreBtn.style.display = 'none';
                }
            });
        }
    });
</script>

<?php include 'footer.php'; ?>