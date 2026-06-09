<?php include 'header.php'; ?>

<main class="container my-5 py-5">
    <div class="row align-items-center g-5">

        <!-- Lottie Animation -->
        <div class="col-lg-6 d-none d-lg-flex justify-content-center">
            <div id="signupLottie"
                data-loop="true"
                style="width:100%; max-width:700px; height:500px;">
            </div>
        </div>

        <!-- Signup Form -->
        <div class="col-lg-5 offset-lg-1">
            <h1 class="fw-bold mb-3">Create an account</h1>
            <p class="mb-4">Enter your details below</p>

            <form>
                <div class="mb-4">
                    <input type="text"
                        class="form-control border-0 border-bottom rounded-0 px-0 shadow-none"
                        placeholder="Name"
                        required>
                </div>

                <div class="mb-4">
                    <input type="email"
                        class="form-control border-0 border-bottom rounded-0 px-0 shadow-none"
                        placeholder="Email or Phone Number"
                        required>
                </div>

                <div class="mb-5">
                    <input type="password"
                        class="form-control border-0 border-bottom rounded-0 px-0 shadow-none"
                        placeholder="Password"
                        required>
                </div>

                <button type="submit"
                    class="btn btn-primary w-100 py-3 mb-3 fw-medium">
                    Create Account
                </button>

                <button type="button"
                    class="btn btn-outline-dark w-100 py-3 mb-4 fw-medium">
                    <i class="bi bi-google me-2"></i>
                    Sign up with Google
                </button>

                <p class="text-center text-muted">
                    Already have account?
                    <a href="login.php"
                        class="text-dark text-decoration-underline fw-medium ms-2">
                        Log in
                    </a>
                </p>
            </form>
        </div>

    </div>
</main>

<!-- Lottie Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.8.1/lottie.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const container = document.getElementById('signupLottie');

        if (container) {

            const animation = lottie.loadAnimation({
                container: container,
                renderer: 'svg',
                loop: true,
                autoplay: false,
                path: 'assets/animi/signup.json'
            });

            animation.addEventListener('DOMLoaded', function() {
                animation.goToAndPlay(0, true);
            });
        }

    });
</script>

<?php include 'footer.php'; ?>