<?php
ob_start();
?>

<div class="bg-dark text-white text-center p-5 mb-4 rounded shadow">
    <i class="bi bi-fire display-3"></i>
    <h1 class="display-5 fw-bold mt-2">Welcome to EverCook Prime</h1>
    <p class="lead mb-0">Cast iron cookware built to last for generations</p>
</div>

<div id="homeCarousel" class="carousel slide shadow-sm mb-4" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner rounded">
        <div class="carousel-item active">
            <div class="bg-dark text-white d-flex flex-column justify-content-center align-items-center text-center p-5">
                <i class="bi bi-stars display-4 mb-2"></i>
                <h3>Featured Cookware</h3>
                <p class="mb-4">Skillets, Dutch ovens, grill pans and woks in sizes from 20 cm to 34 cm</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="bg-success text-white d-flex flex-column justify-content-center align-items-center text-center p-5">
                <i class="bi bi-droplet-half display-4 mb-2"></i>
                <h3>Seasoning and Care Tip</h3>
                <p class="mb-4">Wash by hand, dry right away and rub with a thin layer of oil after each use</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="bg-danger text-white d-flex flex-column justify-content-center align-items-center text-center p-5">
                <i class="bi bi-truck display-4 mb-2"></i>
                <h3>Free Shipping This Month</h3>
                <p class="mb-4">Enjoy free delivery on every order placed this month</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="card shadow-sm mb-4">
    <div class="card-body p-4">
        <div class="row align-items-center g-4">
            <div class="col-md-3 text-center">
                <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-dark text-white fs-1 p-3">
                    <i class="bi bi-shop"></i>
                </div>
            </div>
            <div class="col-md-9">
                <h4>About Us</h4>
                <p class="text-muted mb-0">We sell durable cast iron cookware for everyday cooking. Cast iron holds heat evenly, works on almost any stove or in the oven, and gets better with every use. With the right care, one pan can last a lifetime.</p>
            </div>
        </div>
    </div>
</div>

<div class="row g-4 mb-4">
    <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm h-100 text-center">
            <div class="card-body">
                <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary bg-opacity-10 text-primary fs-3 p-3 mb-3"><i class="bi bi-box-seam"></i></div>
                <h5>Products</h5>
                <p class="text-muted">Manage your cookware inventory</p>
                <a href="products.php" class="btn btn-primary btn-sm">Go to Products</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm h-100 text-center">
            <div class="card-body">
                <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-success bg-opacity-10 text-success fs-3 p-3 mb-3"><i class="bi bi-people"></i></div>
                <h5>Customers</h5>
                <p class="text-muted">Keep track of your customers</p>
                <a href="customers.php" class="btn btn-success btn-sm">Go to Customers</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm h-100 text-center">
            <div class="card-body">
                <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-warning bg-opacity-10 text-warning fs-3 p-3 mb-3"><i class="bi bi-person-badge"></i></div>
                <h5>Staffs</h5>
                <p class="text-muted">Manage your staff members</p>
                <a href="staffs.php" class="btn btn-warning btn-sm">Go to Staffs</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm h-100 text-center">
            <div class="card-body">
                <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-danger bg-opacity-10 text-danger fs-3 p-3 mb-3"><i class="bi bi-cart-check"></i></div>
                <h5>Orders</h5>
                <p class="text-muted">Create orders and view invoices</p>
                <a href="orders.php" class="btn btn-danger btn-sm">Go to Orders</a>
            </div>
        </div>
    </div>
</div>

<div class="row g-4 mb-4">
    <div class="col-md-4">
        <div class="card shadow-sm h-100 border-0 border-start border-5 border-primary">
            <div class="card-body">
                <h5><i class="bi bi-check-circle text-primary me-2"></i>Pre-seasoned</h5>
                <p class="text-muted mb-0">Ready to cook with from day one</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm h-100 border-0 border-start border-5 border-success">
            <div class="card-body">
                <h5><i class="bi bi-thermometer-high text-success me-2"></i>Oven and Induction Ready</h5>
                <p class="text-muted mb-0">Works on gas, electric, induction and in the oven</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm h-100 border-0 border-start border-5 border-warning">
            <div class="card-body">
                <h5><i class="bi bi-shield-check text-warning me-2"></i>Built to Last</h5>
                <p class="text-muted mb-0">Heavy duty iron that lasts for generations</p>
            </div>
        </div>
    </div>
</div>

<div class="row g-4 mb-4">
    <div class="col-6 col-xl-3">
        <div class="card shadow-sm text-center">
            <div class="card-body">
                <h2 class="text-primary mb-0">20</h2>
                <small class="text-muted">Products</small>
            </div>
        </div>
    </div>
    <div class="col-6 col-xl-3">
        <div class="card shadow-sm text-center">
            <div class="card-body">
                <h2 class="text-success mb-0">3</h2>
                <small class="text-muted">Customers</small>
            </div>
        </div>
    </div>
    <div class="col-6 col-xl-3">
        <div class="card shadow-sm text-center">
            <div class="card-body">
                <h2 class="text-warning mb-0">2</h2>
                <small class="text-muted">Staffs</small>
            </div>
        </div>
    </div>
    <div class="col-6 col-xl-3">
        <div class="card shadow-sm text-center">
            <div class="card-body">
                <h2 class="text-danger mb-0">1</h2>
                <small class="text-muted">Orders</small>
            </div>
        </div>
    </div>
</div>


<?php
$content = ob_get_clean();
require_once 'layout.php';
?>