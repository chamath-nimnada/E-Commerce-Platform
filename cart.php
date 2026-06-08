<?php include 'header.php'; ?>

<main class="container my-5">
    <nav aria-label="breadcrumb" class="mb-5">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="text-muted text-decoration-none hover-primary">Home</a></li>
            <li class="breadcrumb-item active text-dark" aria-current="page">Cart</li>
        </ol>
    </nav>

    <div class="table-responsive mb-4">
        <table class="table align-middle">
            <thead class="table-light">
                <tr>
                    <th scope="col" class="py-3 px-4">Product</th>
                    <th scope="col" class="py-3 px-4 text-center">Price</th>
                    <th scope="col" class="py-3 px-4 text-center">Quantity</th>
                    <th scope="col" class="py-3 px-4 text-end">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-bottom">
                    <td class="py-4 px-4">
                        <div class="d-flex align-items-center gap-3 position-relative">
                            <button class="btn btn-sm btn-danger rounded-circle position-absolute top-0 start-0 translate-middle p-0" style="width: 20px; height: 20px; line-height: 1;"><i class="bi bi-x"></i></button>
                            <img src="https://placehold.co/50x50" alt="LCD Monitor" class="img-fluid rounded">
                            <span>LCD Monitor</span>
                        </div>
                    </td>
                    <td class="py-4 px-4 text-center">$650</td>
                    <td class="py-4 px-4 text-center">
                        <input type="number" class="form-control text-center mx-auto" value="1" min="1" style="width: 70px;">
                    </td>
                    <td class="py-4 px-4 text-end fw-medium">$650</td>
                </tr>
                <tr class="border-bottom">
                    <td class="py-4 px-4">
                        <div class="d-flex align-items-center gap-3 position-relative">
                            <button class="btn btn-sm btn-danger rounded-circle position-absolute top-0 start-0 translate-middle p-0" style="width: 20px; height: 20px; line-height: 1;"><i class="bi bi-x"></i></button>
                            <img src="https://placehold.co/50x50" alt="Gamepad" class="img-fluid rounded">
                            <span>H1 Gamepad</span>
                        </div>
                    </td>
                    <td class="py-4 px-4 text-center">$550</td>
                    <td class="py-4 px-4 text-center">
                        <input type="number" class="form-control text-center mx-auto" value="2" min="1" style="width: 70px;">
                    </td>
                    <td class="py-4 px-4 text-end fw-medium">$1100</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-between mb-5">
        <a href="shop.php" class="btn btn-outline-dark px-4 py-2 fw-medium">Return To Shop</a>
        <button class="btn btn-outline-dark px-4 py-2 fw-medium">Update Cart</button>
    </div>

    <div class="row g-5">
        <div class="col-lg-6">
            <div class="d-flex gap-3 align-items-start">
                <input type="text" class="form-control py-3" placeholder="Coupon Code">
                <button class="btn btn-primary px-5 py-3 fw-medium text-nowrap">Apply Coupon</button>
            </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
            <div class="card border-dark border-opacity-50 p-4">
                <h5 class="fw-bold mb-4">Cart Total</h5>
                <div class="d-flex justify-content-between mb-3 border-bottom pb-3">
                    <span>Subtotal:</span>
                    <span>$1750</span>
                </div>
                <div class="d-flex justify-content-between mb-3 border-bottom pb-3">
                    <span>Shipping:</span>
                    <span>Free</span>
                </div>
                <div class="d-flex justify-content-between mb-4">
                    <span>Total:</span>
                    <span class="fw-bold">$1750</span>
                </div>
                <a href="checkout.php" class="btn btn-primary w-100 py-3 fw-medium">Procees to checkout</a>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>