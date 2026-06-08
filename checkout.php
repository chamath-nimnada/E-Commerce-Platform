<?php include 'header.php'; ?>

<main class="container my-5">
    <nav aria-label="breadcrumb" class="mb-5">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="account.php" class="text-muted text-decoration-none hover-primary">Account</a></li>
            <li class="breadcrumb-item"><a href="cart.php" class="text-muted text-decoration-none hover-primary">My Cart</a></li>
            <li class="breadcrumb-item active text-dark" aria-current="page">Checkout</li>
        </ol>
    </nav>

    <h2 class="fw-bold mb-4">Billing Details</h2>

    <form class="row g-5">
        <div class="col-lg-6">
            <div class="d-flex flex-column gap-3">
                <div>
                    <label class="form-label text-muted small">First Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control bg-light border-0 py-2" required>
                </div>
                <div>
                    <label class="form-label text-muted small">Company Name</label>
                    <input type="text" class="form-control bg-light border-0 py-2">
                </div>
                <div>
                    <label class="form-label text-muted small">Street Address<span class="text-danger">*</span></label>
                    <input type="text" class="form-control bg-light border-0 py-2" required>
                </div>
                <div>
                    <label class="form-label text-muted small">Apartment, floor, etc. (optional)</label>
                    <input type="text" class="form-control bg-light border-0 py-2">
                </div>
                <div>
                    <label class="form-label text-muted small">Town/City<span class="text-danger">*</span></label>
                    <input type="text" class="form-control bg-light border-0 py-2" required>
                </div>
                <div>
                    <label class="form-label text-muted small">Phone Number<span class="text-danger">*</span></label>
                    <input type="tel" class="form-control bg-light border-0 py-2" required>
                </div>
                <div>
                    <label class="form-label text-muted small">Email Address<span class="text-danger">*</span></label>
                    <input type="email" class="form-control bg-light border-0 py-2" required>
                </div>
                <div class="form-check mt-3">
                    <input class="form-check-input bg-danger border-danger shadow-none" type="checkbox" id="saveInfo" checked>
                    <label class="form-check-label small" for="saveInfo">
                        Save this information for faster check-out next time
                    </label>
                </div>
            </div>
        </div>

        <div class="col-lg-5 offset-lg-1 mt-5 mt-lg-0 pt-lg-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="d-flex align-items-center gap-3">
                    <img src="https://placehold.co/50x50" alt="LCD Monitor" class="img-fluid">
                    <span>LCD Monitor</span>
                </div>
                <span class="fw-medium">$650</span>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="d-flex align-items-center gap-3">
                    <img src="https://placehold.co/50x50" alt="Gamepad" class="img-fluid">
                    <span>H1 Gamepad</span>
                </div>
                <span class="fw-medium">$1100</span>
            </div>

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

            <div class="d-flex flex-column gap-3 mb-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="form-check">
                        <input class="form-check-input text-dark border-dark shadow-none" type="radio" name="payment" id="bank" checked>
                        <label class="form-check-label" for="bank">Bank</label>
                    </div>
                    <div class="d-flex gap-2">
                        <img src="https://placehold.co/40x25" alt="Visa">
                        <img src="https://placehold.co/40x25" alt="Mastercard">
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input text-dark border-dark shadow-none" type="radio" name="payment" id="cod">
                    <label class="form-check-label" for="cod">Cash on delivery</label>
                </div>
            </div>

            <div class="d-flex gap-3 align-items-start mb-4">
                <input type="text" class="form-control py-3 border-dark" placeholder="Coupon Code">
                <button type="button" class="btn btn-primary px-4 py-3 fw-medium text-nowrap">Apply Coupon</button>
            </div>

            <button type="submit" class="btn btn-primary px-5 py-3 fw-medium">Place Order</button>
        </div>
    </form>
</main>

<?php include 'footer.php'; ?>