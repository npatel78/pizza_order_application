<?php
$error_bucket = [];
// check for a post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // var_dump($_POST);
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

    if (count($error_bucket) == 0) {
        // send the data to the database
        require "inc/db_connect.inc.php";
        $sql = "INSERT INTO customer_order (qty,pizza_type,customer_name,street,city,zip,payment_method,state) ";
        $sql .= "VALUES(:qty,:pizza_type,:customer_name,:street,:city,:zip,:payment_method,:state)";
        $stmt = $db->prepare($sql);
        $stmt->execute(["qty" => $_POST["qty"], "pizza_type" => $_POST["pizza_type"], "customer_name" => $customer_name, "street" => $street, "city" => $city, "zip" => $zip, "payment_method" => $_POST["payment_method"], "state" => $_POST["state"]]);
        $row = $stmt->rowCount();
        if ($row == 1) {
            header('Location: success.html');
        } else {
            echo "Oh no! Something has gone terribly wrong.";
        }
    }
} else {
    $pizza_type = null;
    $qty = null;
    $customer_name = null;
    $street = null;
    $city = null;
    $state = null;
    $zip = null;
    $payment_method = null;
}
