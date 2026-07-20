<?php
$total = $_POST['total'];
?>

<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Payment</title>

<style>
body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #1d4350, #a43931);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background: white;
    padding: 30px;
    border-radius: 15px;
    text-align: center;
    width: 320px;
}

img {
    width: 200px;
    margin: 20px 0;
}

a {
    display: inline-block;
    background: #27ae60;
    color: white;
    padding: 10px 20px;
    border-radius: 6px;
    text-decoration: none;
}
</style>

</head>

<body>

<div class="container">
<h2>Total Amount: ₹<?php echo $total; ?></h2>

<p>Scan & Pay: 9177440252</p>

<img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=9177440252">

<br>
<a href="order.html">Payment Done</a>
</div>

</body>
</html>
