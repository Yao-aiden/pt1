<?php
ob_start();
?>
<div class="flex-grow-1 d-flex flex-column align-items-center justify-content-center text-center">
    <img src="images/uiflow-logo-black.png" alt="Uiflow logo" width="140" height="140" class="mb-3">
    <h1 class="h2 mb-2">Uiflow</h1>
    <p class="small text-secondary mb-0">Welcome to the ordering system of Uiflow</p>
</div>
<?php
$content = ob_get_clean();
require __DIR__ . '/layout.php';
