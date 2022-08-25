<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Kiara's Pizza - Display Orders</title>
</head>

<body>
    <?php require "inc/db_connect.inc.php" ?>
    <?php require "inc/navbar.inc.php" ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <?php
                if (isset(($_GET["message"]))) {
                    echo '<div class="alert alert-success mt-3">';
                    echo $_GET["message"];
                    echo "</div>";
                }
                ?>
                <h1>Kiara's Pizza - Open Orders</h1>
                <table class="table table-striped table-hover mt-3">
                    <tr>
                        <th>Actions</th>
                        <th>ID</td>
                        <th>Customer Name</th>
                        <th>Pizza Type</th>
                        <th>Qty</th>
                        <th>Street</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Zip</th>
                        <th>Payment Method</th>

                    </tr>
                    <?php
                    echo "<tr>";
                    $sql = "SELECT * FROM customer_order";
                    $stmt = $db->prepare($sql);
                    $stmt->execute();
                    $orders = $stmt->fetchAll();
                    //var_dump($orders);
                    foreach ($orders as $order) {
                        echo "<tr>";
                        echo "<td><a href=\"update_order.php?id=$order->id\" title=\"Update\">Update</a>&nbsp;&nbsp;&nbsp;<a href=\"delete_record.php?id=$order->id\" title=\"Delete\">Delete</a></td>";
                        echo "<td>$order->id</td>";
                        echo "<td>$order->customer_name</td>";
                        echo "<td>$order->pizza_type</td>";
                        echo "<td>$order->qty</td>";
                        echo "<td>$order->street</td>";
                        echo "<td>$order->city</td>";
                        echo "<td>$order->state</td>";
                        echo "<td>$order->zip</td>";
                        echo "<td>$order->payment_method</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>


            </div>


        </div>


    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>d