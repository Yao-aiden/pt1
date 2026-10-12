<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My App</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body>
  <div class="container-fluid p-0 min-vh-100">
    <div class="row g-0 min-vh-100">
 
      <div class="col-auto">
      Put sidebar here.
      <div id="mySidebar" class="col-auto bg-dark text-white offcanvas-lg offcanvas-start">
        <div class="p-4">
          <a href="#" class="navbar-brand">
            <div class="row">
              <h5 class="">My Company</h5>
            </div>
          </a>
          <hr>                  
          <ul class="mynav nav nav-pills flex-column">
            <li class="nav-item mb-3 mt-2">
              <a href="" class="text-decoration-none text-white">
                <i class="bi bi-house-fill me-2"></i>
                Home
              </a>
            </li>
            <li class="nav-item mb-3">
              <a href="" class="text-decoration-none text-white">
                <i class="bi bi-bar-chart-line-fill me-2"></i>
                Dashboard
              </a>
            </li>
            <!-- Add more menus -->
          </ul>
          <hr>                  
          <div class="dropdown">
            <a href="#" class="text-decoration-none text-white dropdown-toggle d-inline-block align-middle" data-bs-toggle="dropdown">                       
 
              <div class="rounded-circle bg-secondary text-center d-inline-block align-middle" style="width: 50px; height: 50px; line-height: 50px;">
                <i class="bi bi-person-fill text-white fs-4"></i>
              </div>
                           
              <div class="d-inline-block align-middle ms-2 text-start">
                <h6 class="mb-0 text-nowrap">User</h6>
                <small class="text-white-50 text-nowrap d-block">user@email.com</small>
              </div>
                         
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="">Logout</a></li>
            </ul>
          </div>
 
        </div>
      </div>
 
      </div>
 
      <div class="col">Put content here.</div>
 
    </div>
  </div>
</body>
</html>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

