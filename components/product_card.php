<?php
$img = $img ?? 'https://placehold.co/150x150';
$title = $title ?? 'Product Title';
$price = $price ?? '0';
$old_price = $old_price ?? null;
$rating = $rating ?? 0;
$reviews = $reviews ?? 0;
$badge = $badge ?? null;
?>
<div class="card product-card h-100">
    <?php if (!empty($badge)): ?>
        <span class="product-badge"><?= htmlspecialchars($badge) ?></span>
    <?php endif; ?>

    <div class="bg-light rounded d-flex align-items-center justify-content-center p-4 position-relative overflow-hidden" style="height: 250px;">
        <img src="<?= htmlspecialchars($img) ?>" alt="<?= htmlspecialchars($title) ?>" class="img-fluid mix-blend-multiply">
        <div class="position-absolute top-0 end-0 m-2 d-flex flex-column gap-2">
            <button class="btn btn-light bg-white rounded-circle shadow-sm p-2 lh-1 hover-primary"><i class="bi bi-heart"></i></button>
            <button class="btn btn-light bg-white rounded-circle shadow-sm p-2 lh-1 hover-primary"><i class="bi bi-eye"></i></button>
        </div>
        <button class="btn btn-dark w-100 position-absolute bottom-0 start-0 rounded-0 add-to-cart opacity-0">Add To Cart</button>
    </div>

    <div class="card-body px-0 pb-0">
        <h6 class="card-title fw-bold text-truncate mb-2"><?= htmlspecialchars($title) ?></h6>
        <div class="d-flex gap-2 align-items-center mb-1">
            <span class="text-primary fw-bold">$<?= htmlspecialchars($price) ?></span>
            <?php if (!empty($old_price)): ?>
                <span class="text-muted text-decoration-line-through small">$<?= htmlspecialchars($old_price) ?></span>
            <?php endif; ?>
        </div>
        <div class="text-warning small">
            <?php for ($i = 0; $i < 5; $i++): ?>
                <i class="bi bi-star-fill <?= $i < $rating ? '' : 'text-muted opacity-25' ?>"></i>
            <?php endfor; ?>
            <span class="text-muted ms-1">(<?= htmlspecialchars($reviews) ?>)</span>
        </div>
    </div>
</div>