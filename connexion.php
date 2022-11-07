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
    <title>FUJIAN</title>
    <link rel="icon" type="image/png" href="images/sushi.png" />
</head>

<body class="light">
    <?php
        include('utils/header.php');
    ?>

    <div class="reviews" style="margin-top: 10vh;">
    <?php
        include('utils/db.php');
        $requete = $db->prepare('SELECT * FROM review ORDER BY id DESC LIMIT 3');
        $requete->execute();
        $reviews = $requete->fetchAll();
        // print_r($reviews);
        foreach($reviews as $review){
            ?>
            <!-- <div style="display: flex; justify-content: space-around; align-items: center; padding-right: 50%;">
                <p><?php echo $review['username']; ?></p>
                <p><?php echo $review['content']; ?></p>
                <p><?php echo $review['rate']; ?></p>
            </div> -->
            <?php
        }
    ?>
    </div>

    <main class="connexion">
        <img src="images/pen.svg" class="fond">
        <div class="left">
            <img src="images/roll_34.jpg" alt="">
        </div>
            <div class="circle"></div>
        <section>
            <h1> <strong> Sign in/up</strong></h1>
            <h1> Hey, enter your <span>details</span>  to get <span>sign in/up</span>  to your account</h1>
            <div class="forms">
                <form action="admin.php" method="post">
                    <h2>Register</h2>
                    <input type="hidden" name="form" value="register">

                    <label for="register_username">Email</label>
                    <input type="text" name="register_username" id="register_username">

                    <label for="register_email">Email Confirmation</label>
                    <input type="email" name="register_email" id="register_email">

                    <label for="register_password">Password</label>
                    <input type="password" name="register_password" id="register_password">

                    <input class="connect" type="submit" value="Sign up">
                </form>

                <form action="admin.php" method="post" class="login">
                    <h2>Login</h2>
                    <input type="hidden" name="form" value="login">
                    
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">

                    <input class="connect" type="submit" value="Sign in">
                </form>
            </div>

            <div class="logos">
                <p><ion-icon name="logo-apple"></ion-icon><span>Sign in with</span> Apple</p>
                <p><ion-icon name="logo-google"></ion-icon><span>Sign in with</span> Google</p>
                <p><ion-icon name="logo-facebook"></ion-icon><span>Sign in with</span> Facebook</p>
            </div>
        </section>
    </main>

    <?php
        include('utils/footer.php');
    ?>

    <script src="js/blog.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>