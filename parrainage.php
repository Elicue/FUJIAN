<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Genos:wght@500&family=Grape+Nuts&family=Kings&family=Montserrat:wght@300&family=Open+Sans:wght@300;400;500;700&family=Oswald&family=Playfair+Display:ital,wght@0,400;0,500;1,400;1,600&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="icon" type="image/png" href="images/logo.svg" />
</head>
<body class="light">
    
    <?php
        include('utils/header.php');
    ?>

    <div class="code_parrain">
        <h1>HERE IS YOUR REFERRAL CODE</h1>
        <div class="code">
            <?php

                $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
                $code = "";
                for ($i = 1; $i <= 8; $i++) {
                    $code =$code . str_split($chars, 1)[rand(0, 35)];
                }
            ?>

            <p><?php echo $_POST['mail']; ?></p>
            <p><?php echo $code; ?></p>
                
            <?php
                $data =[
                    'mail' => $_POST['mail'],
                    'code' => $code,
                ];

                include('utils/db.php');
                $reqete = $db->prepare("INSERT INTO parrainage (mail, code) VALUES (:mail, :code)");
                $reqete->execute($data);
            ?>
        </div>

        <div class="rectangle"></div>

        <h2>Thanks For Subscribing !</h2>
    </div>

    <?php
    include('utils/footer.php');
    ?>

    <script src="js/parrainage.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
