<?php include 'header.php'; ?>

<main class="container my-5 py-5">
    <div class="row align-items-center g-5">
        <div class="col-lg-6 d-none d-lg-block">
            <img src="https://placehold.co/800x800/e9ecef/495057?text=Shopping+Image" alt="Log In" class="img-fluid rounded">
        </div>
        <div class="col-lg-5 offset-lg-1">
            <h1 class="fw-bold mb-3">Log in to Exclusive</h1>
            <p class="mb-4">Enter your details below</p>

            <form>
                <div class="mb-4">
                    <input type="email" class="form-control border-0 border-bottom rounded-0 px-0 shadow-none" placeholder="Email or Phone Number" required>
                </div>
                <div class="mb-5">
                    <input type="password" class="form-control border-0 border-bottom rounded-0 px-0 shadow-none" placeholder="Password" required>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <button type="submit" class="btn btn-primary px-5 py-3 fw-medium">Log In</button>
                    <a href="#" class="text-primary text-decoration-none hover-primary">Forget Password?</a>
                </div>
            </form>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>