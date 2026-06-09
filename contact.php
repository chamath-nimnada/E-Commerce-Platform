<?php include 'header.php'; ?>

<main class="container my-5">
    <nav aria-label="breadcrumb" class="mb-5">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="text-muted text-decoration-none hover-primary">Home</a></li>
            <li class="breadcrumb-item active text-dark" aria-current="page">Contact</li>
        </ol>
    </nav>

    <div class="row g-4">
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm h-100 p-4">
                <div class="d-flex align-items-center gap-3 mb-4">
                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                        <i class="bi bi-telephone"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Call To Us</h5>
                </div>
                <p class="mb-2 small">We are available 24/7, 7 days a week.</p>
                <p class="mb-4 small fw-medium">Phone: +8801611112222</p>

                <hr class="my-4 border-secondary opacity-25">

                <div class="d-flex align-items-center gap-3 mb-4">
                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Write To US</h5>
                </div>
                <p class="mb-2 small">Fill out our form and we will contact you within 24 hours.</p>
                <p class="mb-2 small fw-medium">Emails: customer@exclusive.com</p>
                <p class="mb-0 small fw-medium">Emails: support@exclusive.com</p>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card border-0 shadow-sm h-100 p-4">
                <form>
                    <div class="row g-3 mb-3">
                        <div class="col-md-4">
                            <input type="text" class="form-control bg-light border-0 py-3" placeholder="Your Name *" required>
                        </div>
                        <div class="col-md-4">
                            <input type="email" class="form-control bg-light border-0 py-3" placeholder="Your Email *" required>
                        </div>
                        <div class="col-md-4">
                            <input type="tel" class="form-control bg-light border-0 py-3" placeholder="Your Phone *" required>
                        </div>
                    </div>
                    <div class="mb-4">
                        <textarea class="form-control bg-light border-0 py-3" rows="8" placeholder="Your Message" required></textarea>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary px-5 py-3 fw-medium">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>