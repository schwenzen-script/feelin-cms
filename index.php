<?php
// Page variables
$title = "Login";

require_once "./app.php";
require_once "./modules/views/header.php";
?>

<div class="container">
    <section class="login-page">
        <div class="row">
            <div class="col-12 col-md-8">
                <dig class="login-page__form">
                    <div class="w-100 d-flex justify-content-center">
                        <img src="./assets/logo.png" alt="feelin-logo">
                    </div>
                    <?php require_once "./modules/views/login.php" ?>
                </dig>
            </div>
        </div>
    </section>
</div>

<?php
require_once "./modules/views/footer.php";
?>