<?php
ob_start();
?>
<div class="card shadow-sm border-0">
    <div class="card-body p-4 p-md-5">
        <h1 class="display-5 fw-bold">Welcome to Uiflow</h1>
        <p class="lead text-muted">Your workspace for products, customers, staff and orders.</p>
        <hr class="my-4">
        <h2 class="h5 mb-3">Choose a page to get started</h2>
        <div class="d-flex flex-wrap gap-2">
            <a href="products.php" class="btn btn-primary">Products</a>
            <a href="customers.php" class="btn btn-outline-primary">Customers</a>
            <a href="staff.php" class="btn btn-outline-primary">Staff</a>
            <a href="orders.php" class="btn btn-outline-primary">Orders</a>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require __DIR__ . '/layout.php';
