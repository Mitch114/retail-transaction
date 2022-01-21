<?php
    // get the data from the form
    $description = filter_input(INPUT_POST, 'description');
    $price = filter_input(INPUT_POST, 'price',
        FILTER_VALIDATE_FLOAT);
    $quantity = filter_input(INPUT_POST, 'quantity',
        FILTER_VALIDATE_INT);
    
    // validate interest rate
    if ( $price === FALSE )  {
        $error_message = 'Price must be a valid number.'; 
    // validate quantity
    } else if ( $quantity === FALSE ) {
        $error_message = 'Quantity must be a valid number.';
    // set error message to empty string if no invalid entries
    } else {
        $error_message = ''; 
    }

    // if an error message exists, go to the index page
    if ($error_message != '') {
        include('index.php');
        exit(); 
    }

    // calculate subtotal
    $subtotal = $price * $quantity;
    // calculate tax
    $sales_tax = $subtotal * .07;
    // calculate total
    $total = $sales_tax + $subtotal;



    // apply currency formatting
    $subtotal_f = '$'.number_format($subtotal, 2);
    $sales_tax_f = '$'.number_format($sales_tax, 2);
    $total_f = '$'.number_format($total, 2);

    $date = date('m/d/Y')

?>
<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Checkout  <?=$date?></h1>

        <label>Description:</label>
        <span><?php echo $description; ?></span><br>

        <label>Unit Price:</label>
        <span><?php echo $price; ?></span><br>

        <label>Quantity:</label>
        <span><?php echo $quantity; ?></span><br>

        <label>Sub Total:</label>
        <span><?php echo $subtotal_f; ?></span><br>

        <label>Sales Tax:</label>
        <span><?php echo $sales_tax_f; ?></span><br>

        <label>Total:</label>
        <span><?php echo $total_f; ?></span><br>
    </main>
</body>
</html>
