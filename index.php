<?php
require('./config.php');
$page_name = 'home';
require('./header.php');
?>

<div class="bg-light">
    <div class="container">
        <div class="display-4 text-center py-4">
            Welcome To <span class="fw-bold border-bottom border-5 d-inline-block"><?php Config::load(Config::$site_name) ?></span>
        </div>
    </div>
</div>
<div class="container py-5">
    <div class="text-center pb-5">
        <img src="./img/logo.jpg" alt="Logo" style="width: 200px;">
    </div>
    <div class="text-center">
        <a class="btn-lg btn btn-outline-primary" href="./service.php">Find Out More</a>
    </div>
</div>
<?php
require('./footer.php');