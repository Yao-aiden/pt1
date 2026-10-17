<?php
ob_start();
?>

<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Staffs</h2>
        <p class="text-muted mb-0">Manage and track all your staff members</p>
    </div>
</div>

<div class="card shadow-sm mb-4">
    <div class="card-body">

        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-pencil-square text-primary me-2"></i>
                    Staff Form
                </h5>
                <small class="text-muted">Fill in the details of a staff member </small>
            </div>
            <div class="col-auto">
                <span class="badge bg-primary">* Required fields</span>
            </div>
        </div>

        <hr>

        <form action="" method="post" class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="staff_num" class="form-label">Staff ID <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="staff_num" id="staff_num" type="text" class="form-control" placeholder="Enter Staff ID" value="" required>
                </div>
                <div class="col-md-3">
                    <label for="staff_name" class="form-label">Name <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="staff_name" id="staff_name" type="text" class="form-control" placeholder="Enter Staff Name" value="" required>
                </div>

                <div class="col-md-3">
                    <label for="staff_phone" class="form-label">Phone Number <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="staff_phone" id="staff_phone" type="text" class="form-control" placeholder="Enter Phone Number" value="" required>
                </div>

                <div class="col-md-3">
                    <label for="staff_email" class="form-label">Email Address <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="staff_email" id="staff_email" type="email" class="form-control" placeholder="Enter Email Address" value="" required>
                </div>

            </div>

            <hr class="mt-4 mb-3">

            <div>
                <button type="submit" name="create" class="btn btn-primary">
                    <i class="bi bi-save me-1"></i>Create
                </button>
                <button type="reset" class="btn btn-secondary">
                    <i class="bi bi-arrow-counterclockwise me-1"></i>Clear
                </button>
            </div>
        </form>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-body">

        <div class="row align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-table text-primary me-2"></i>
                    Staff List
                </h5>
                <small class="text-muted">View and manage all staff members</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-success">Total: 1 item</span>
            </div>
        </div>

        <hr>

        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Staff ID</th>
                        <th>Name</th>

                        <th>Phone</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>S001</td>
                        <td>Jane Smith</td>
                        <td>019-8765432</td>
                        <td>janesmith@example.com</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-info text-white">
                                <i class="bi bi-image"></i>
                            </button>
                            <a href="#" class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require __DIR__ . '/layout.php';
?>
