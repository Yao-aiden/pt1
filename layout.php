<?php require __DIR__ . '/header.php'; ?>
<?php require __DIR__ . '/sidebar.php'; ?>

       <div class="col bg-light d-flex flex-column">
        <!-- Mobile Header with Burger -->
        <div id="myBurger" class="p-3 d-lg-none text-white bg-dark">
          <div class="row">
            <a href="#" class="text-white text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#mySidebar">
              <i class="bi bi-list"></i><h5 class="ms-3 d-inline">Uiflow</h5>
            </a>
          </div>
        </div>
         
        <div class="p-4 flex-grow-1 d-flex flex-column">
         <?= $content ?? '' ?>
        </div>
      </div>
 
<?php require __DIR__ . '/footer.php'; ?>
