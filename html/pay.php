<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay</title>
    <link rel="stylesheet" href="../css/pay.css">
</head>
<body>
    

<?php

include('nav.php');

?>



<div class="container">
    <h2>Payment method</h2>

    <div class="card-icons">
        <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png" alt="Visa">
        <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Mastercard-logo.png" alt="Mastercard">
    </div>

    <label for="cardType">Use saved card:</label>
    <select id="cardType">
        <option>Mastercard</option>
        <option>Visa</option>
    </select>

    <label for="name">Name on card:</label>
    <input type="text" id="name" placeholder="Esther Howard">

    <label for="number">Card number:</label>
    <input type="text" id="number" placeholder="123-456-789-">

    <div class="row">
        <div>
            <label for="expiry">Expiry date:</label>
            <input type="text" id="expiry" placeholder="MM / YY">
        </div>
        <div>
            <label for="ccv">CCV:</label>
            <input type="password" id="ccv" placeholder="•••">
        </div>
    </div>


</div>









<?php

include('footer.html');
?>



</body>
</html>