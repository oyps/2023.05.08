<?php
require('./config.php');
$page_name = 'service';
require('./header.php');
?>
<div class="py-4 bg-light">
    <div class="container">
        <div class="h3 mb-0">Service</div>
    </div>
</div>
<div class="container py-4">
    <?php require('./service_row.php') ?>
</div>
<?php
require('./footer.php');
