<?php 
    //set default value of variables for initial page load
    if (!isset($description)) { $description = ''; }
    if (!isset($price)) { $price = ''; }
    if (!isset($quantity)) { $quantity = ''; } 
?> 
<!DOCTYPE html>
<html>
<head>
    <title>Cashier</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
    <h1>Cashier</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
    <?php } ?>
    <form action="checkout.php" method="post">

        <div id="data">
            <label>Description:</label>
            <input type="text" name="description"
                   value="<?php echo htmlspecialchars($description); ?>">
            <br>

            <label>Unit Price:</label>
            <input type="text" name="price"
                   value="<?php echo htmlspecialchars($price); ?>">
            <br>

            <label>Quantity:</label>
            <input type="text" name="quantity"
                   value="<?php echo htmlspecialchars($quantity); ?>">
            <br>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Checkout Now"><br>
        </div>

    </form>
    </main>
</body>
</html>