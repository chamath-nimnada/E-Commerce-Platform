<?php include 'header.php'; ?>

<main class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.php" class="text-muted text-decoration-none hover-primary">Home</a></li>
                <li class="breadcrumb-item active text-dark" aria-current="page">My Account</li>
            </ol>
        </nav>
        <p class="mb-0">Welcome! <span class="text-primary fw-medium">Md Rimel</span></p>
    </div>

    <div class="row g-5">
        <div class="col-lg-3">
            <div class="mb-4">
                <h6 class="fw-bold mb-3">Manage My Account</h6>
                <ul class="list-unstyled d-flex flex-column gap-2 ms-3">
                    <li><a href="#" class="text-primary text-decoration-none fw-medium">My Profile</a></li>
                    <li><a href="#" class="text-muted text-decoration-none hover-primary">Address Book</a></li>
                    <li><a href="#" class="text-muted text-decoration-none hover-primary">My Payment Options</a></li>
                </ul>
            </div>
            <div class="mb-4">
                <h6 class="fw-bold mb-3">My Orders</h6>
                <ul class="list-unstyled d-flex flex-column gap-2 ms-3">
                    <li><a href="#" class="text-muted text-decoration-none hover-primary">My Returns</a></li>
                    <li><a href="#" class="text-muted text-decoration-none hover-primary">My Cancellations</a></li>
                </ul>
            </div>
            <div>
                <h6 class="fw-bold mb-3"><a href="wishlist.php" class="text-dark text-decoration-none hover-primary">My WishList</a></h6>
            </div>
        </div>

        <div class="col-lg-9">
            <div class="card border-0 shadow-sm p-5">
                <h4 class="text-primary fw-medium mb-4">Edit Your Profile</h4>

                <form>
                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control bg-light border-0 py-2" value="Md">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control bg-light border-0 py-2" value="Rimel">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control bg-light border-0 py-2" value="rimel1111@gmail.com">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control bg-light border-0 py-2" value="Kingston, 5236, United State">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Password Changes</label>
                        <div class="d-flex flex-column gap-3">
                            <input type="password" class="form-control bg-light border-0 py-2" placeholder="Current Password">
                            <input type="password" class="form-control bg-light border-0 py-2" placeholder="New Password">
                            <input type="password" class="form-control bg-light border-0 py-2" placeholder="Confirm New Password">
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-3 mt-4">
                        <button type="button" class="btn btn-light bg-transparent px-4 py-2">Cancel</button>
                        <button type="submit" class="btn btn-primary px-5 py-2">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>