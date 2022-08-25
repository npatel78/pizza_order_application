<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Record</title>
</head>

<body>
    <?php
    if (isset($_GET["id"])) {
        require "inc/db_connect.inc.php";
        $sql = "DELETE FROM customer_order WHERE id=:id LIMIT 1";
        $stmt = $db->prepare($sql);
        $stmt->execute(["id" => $_GET["id"]]);
        if ($stmt->rowCount() == 1) {
            header("Location: display_orders.php?message=Order%20Deleted!");
        }
    }
    ?>
</body>

</html>