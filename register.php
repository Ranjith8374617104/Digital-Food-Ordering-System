<?php
include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (name, email, password)
        VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo '
    <!DOCTYPE html>
    <html>
    <head>
        <title>Success</title>
        <meta http-equiv="refresh" content="3;url=index.html">
        <style>
            body {
                margin: 0;
                font-family: Arial, sans-serif;
                background: linear-gradient(135deg, #00b09b, #96c93d);
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                color: white;
            }

            .box {
                background: rgba(255,255,255,0.2);
                padding: 40px;
                border-radius: 15px;
                text-align: center;
                backdrop-filter: blur(10px);
            }

            h2 {
                margin-bottom: 10px;
            }

            p {
                font-size: 14px;
            }
        </style>
    </head>

    <body>

    <div class="box">
        <h2>✅ Registered Successfully!</h2>
        <p>Redirecting to Home Page...</p>
    </div>

    </body>
    </html>
    ';
} else {
    echo "Error: " . $conn->error;
}
?>
