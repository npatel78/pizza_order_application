<?php

if (basename($_SERVER["PHP_SELF"]) == 'order-pizza.php') {
    $button_label = "Place Pizza Order";
} elseif (basename($_SERVER["PHP_SELF"]) == 'update_order.php') {
    $button_label = "Save Updated Order";
}
?>
<form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
    <div class="mb-3">
        <label for="pizza_type" class="form-label">Which type of pizza would you like to order</label>
        <select name="pizza_type" id="pizza_type" class="form-select">
            <option value="cheese" <?= ($pizza_type == 'cheese') ? 'selected' : null ?>>Cheese</option>
            <option value="pepperoni" <?= ($pizza_type == 'pepperoni') ? 'selected' : null ?>>Pepperoni</option>
            <option value="hawaiian" <?= ($pizza_type == 'hawaiian') ? 'selected' : null ?>>Hawaiian</option>
            <option value="meatball" <?= ($pizza_type == 'meatball') ? 'selected' : null ?>>Meatball</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="qty" class="form-label">No. of Pizzas</label>
        <select name="qty" id="qty" class="form-select">
            <option value="1" <?= ($qty == '1') ? 'selected' : null ?>>1</option>
            <option value="2" <?= ($qty == '2') ? 'selected' : null ?>>2</option>
            <option value="3" <?= ($qty == '3') ? 'selected' : null ?>>3</option>
            <option value="4" <?= ($qty == '4') ? 'selected' : null ?>>4</option>
            <option value="5" <?= ($qty == '5') ? 'selected' : null ?>>5</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="customer_name" class="form-label">Your name</label>
        <input type="text" name="customer_name" id="customer_name" class="form-control" value="<?= $customer_name ?>" size="40">
    </div>
    <div class="mb-3">
        <label for="street" class="form-label">Street</label>
        <input type="text" name="street" id="street" class="form-control" value="<?= $street ?>">
    </div>
    <div class="mb-3">
        <label for="city" class="form-label">City</label>
        <input type="text" name="city" id="city" class="form-control" value="<?= $city ?>">
    </div>
    <div class="mb-3">
        <label for="state" class="form-label">State</label>
        <select name="state" id="state" class="form-select">
            <option value="WA" <?= ($state == 'WA') ? 'selected' : null ?>>Washington</option>
            <option value="OR" <?= ($state == 'OR') ? 'selected' : null ?>>Oregon</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="zip" class="form-label">Zip</label>

        <input type="text" name="zip" id="zip" size="11" class="form-control" value="<?= $zip ?>">
    </div>
    <div class="mb-3">
        <label for="payment_method" class="form-label">Payment Method</label>
        <select name="payment_method" id="payment_method" class="form-select">
            <option value="cash" <?= ($payment_method == 'cash') ? 'selected' : null ?>>Cash</option>
            <option value="credit" <?= ($payment_method == 'credit') ? 'selected' : null ?>>Credit Card</option>
        </select>
    </div>
    <a href="display_orders.php">Cancel</a>&nbsp;
    <button type="submit" class="btn btn-primary"><?= $button_label ?></button>
    <input type="hidden" name="id" value="<?= isset($id) ? $id : null ?>">
</form>