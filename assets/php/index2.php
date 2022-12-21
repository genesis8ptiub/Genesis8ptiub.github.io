<?php 
session_start();
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- Favicons -->
        <link href="./images/LOGO_GENESIS_8.0-removebg-preview.png" rel="icon">

        <!-- CSS Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="./assets/styles.css" />

        <!-- Title -->
        <title>Genesis 8.0</title>
    </head>

    <body>

        <h1>HI, <?php echo $_SESSION['nama_maba']; ?></h1>
        <a href="logout.php">LOGOUT</a>

        <!-- Script JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="./assets/script.js"></script>

    </body>

    </html>