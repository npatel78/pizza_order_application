<?php require "inc/functions.inc.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Order Pizza Now</title>
</head>
<?php require "inc/process.inc.php" ?>

<body>
    <?php require "inc/navbar.inc.php" ?>
    <div class="container my-5">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <h1 class="fw-bold">Welcome to Kiara's Pizza!</h1>
                <h2 class="my-3">Place your order below</h2>
                <?php
                if (count($error_bucket) > 0) {
                    display_error_bucket($error_bucket);
                }
                ?>

                <?php require "inc/form.inc.php"; ?>

                <?php
                if (count($error_bucket) > 0) {
                    display_error_bucket($error_bucket);
                }
                ?>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>