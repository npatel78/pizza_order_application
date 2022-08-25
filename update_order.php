<?php require "inc/functions.inc.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Kiara's Pizza - Update Order</title>
</head>

<body>
    <?php
    require "inc/db_connect.inc.php";

    $pizza_type = null;
    $qty = null;
    $customer_name = null;
    $street = null;
    $city = null;
    $state = null;
    $zip = null;
    $payment_method = null;
    $id = null;

    $error_bucket = [];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $pizza_type = $_POST["pizza_type"];
        $qty = $_POST["qty"];
        $payment_method = $_POST["payment_method"];
        $state = $_POST["state"];
        if (empty($_POST["customer_name"])) {
            array_push($error_bucket, "Name is required");
            $customer_name = null;
        } else {
            $customer_name = $_POST["customer_name"];
        }
        if (empty($_POST["city"])) {
            array_push($error_bucket, "City is required");
            $city = null;
        } else {
            $city = $_POST["city"];
        }
        if (empty($_POST["street"])) {
            array_push($error_bucket, "Street is required");
            $street = null;
        } else {
            $street = $_POST["street"];
        }
        if (empty($_POST["zip"])) {
            array_push($error_bucket, "ZIP is required");
            $zip = null;
        } else {
            $zip = $_POST["zip"];
        }
    }
    if (count($error_bucket) == 0) {
        $sql = "UPDATE customer_order SET pizza_type = :pizza_type, qty = :qty, payment_method = :payment_method, state = :state, customer_name = :customer_name, city = :city, zip = :zip, street = :street WHERE id = :id";
        $stmt = $db->prepare($sql);
        $stmt->execute(["pizza_type" => $pizza_type, "qty" => $qty, "payment_method" => $payment_method, "state" => $state, "customer_name" => $customer_name, "city" => $city, "zip" => $zip, "street" => $street, "id" => $id]);

        if ($stmt->rowCount() == 1) {
            header("Location: display_orders.php?message=Order%20has%20been%20updated.");
        }
    }

    ?>

    <?php
    if (!isset($id)) {
        $id = $_GET["id"];
    }
    $sql = "SELECT * FROM customer_order WHERE id=:id";
    $stmt = $db->prepare($sql);
    $stmt->execute(["id" => $id]);
    $pizza_order = $stmt->fetch();
    //var_dump($pizza_order);

    $pizza_type = $pizza_order->pizza_type;
    $qty = $pizza_order->qty;
    $customer_name = $pizza_order->customer_name;
    $street = $pizza_order->street;
    $city = $pizza_order->city;
    $state = $pizza_order->state;
    $zip = $pizza_order->zip;
    $payment_method = $pizza_order->payment_method;
    ?>

    <?php require "inc/navbar.inc.php" ?>
    <div class="container my-5">
        <div class="row mt-5">
            <h1>Update Order</h1>
            <?php
            if (count($error_bucket) > 0) {
                display_error_bucket($error_bucket);
            }
            ?>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <?php require "inc/form.inc.php" ?>
            </div>
            <?php
            if (count($error_bucket) > 0) {
                display_error_bucket($error_bucket);
            }
            ?>
        </div>
    </div>
</body>

</html>