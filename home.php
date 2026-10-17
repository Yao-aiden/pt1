<?php
ob_start();
?>
<style>
.home-welcome {
    min-height: calc(100vh - 3rem);
}
@media (max-width: 991.98px) {
    .home-welcome {
        min-height: calc(100vh - 7rem);
    }
}
</style>
<div class="home-welcome d-flex flex-column align-items-center justify-content-center text-center">
    <img src="images/uiflow-logo-black.png" alt="Uiflow logo" width="140" height="140" class="mb-3">
    <h1 class="h2 mb-2">Uiflow</h1>
    <p class="small text-secondary mb-0">Welcome to the ordering system of Uiflow</p>
</div>
<?php
$content = ob_get_clean();
require __DIR__ . '/layout.php';
