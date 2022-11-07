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
    <link href="https://fonts.googleapis.com/css2?family=Average&family=Genos:wght@500&family=Grape+Nuts&family=Kings&family=Londrina+Outline&family=Montserrat:wght@300&family=Open+Sans:wght@300;400;500;700&family=Oswald&family=Playfair+Display:ital,wght@0,400;0,500;1,400;1,600&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <title>SUBSCRIPTION</title>
    <link rel="icon" type="image/png" href="images/sushi.png" />
</head>
<body class="light">

    <?php
        include('utils/header.php');

        if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form'] == 'review') {
            $data = [
                'username' => $_POST['username'],
                'content' => $_POST['content'],
                'rate' => $_POST['rate'],
            ];

            include('utils/db.php');
            $requete = $db->prepare('INSERT INTO review (username, content, rate) VALUES (:username, :content, :rate)');
            $requete->execute($data);
        }
    ?>

    <div class="subscription">
        <h2>CHOOSE <span>Yours</span> INGREDIENTS</h2>
        <div class="container">
            <div class="imgs">
                <div class="contenant">
                    <img src="images/roll_06.jpg" class="img_1">
                    <div class="circle"></div>
                        <div class="content">
                            <div class="case">
                                <input type="checkbox">
                                <label>CHICKEN SUSHI ASSORTIMENT <span>5</span>€</label>
                            </div>
                            <div class="case">
                                <input type="checkbox">
                                <label> SALMON SUSHI ASSORTIMENT <span>7.5</span>€</label>
                            </div>
                            <div class="case">
                                <input type="checkbox">
                                <label>TUNA SUSHI ASSORTIMENT <span>10.5</span>€</label>
                            </div>
                        </div>
                    </div>
                <div class="contenant">
                    <img src="images/roll_28.jpg" class="img">
                    <div class="content ">
                        <div class="case">
                            <input type="checkbox">
                            <label>AVOCADO SASHIMI ASSORTIMENT <span>5</span>€</label>
                        </div>
                        <div class="case">
                            <input type="checkbox">
                            <label>SHRIMP SUSHI ASSORTIMENT <span>7.5</span>€</label>
                        </div>
                        <div class="case">
                            <input type="checkbox">
                            <label>SQUID SUSHI ASSORTIMENT <span>10.5</span>€</label>
                        </div>
                    </div>
                </div>
                <div class="contenant">
                    <img src="images/roll_15.jpg" class="img_3">
                    <div class="content ">
                        <div class="case">
                            <input type="checkbox">
                            <label>CHICKEN SASHIMI ASSORTIMENT <span>5</span>€</label>
                        </div>
                        <div class="case">
                            <input type="checkbox">
                            <label>SALMON SASHIMI ASSORTIMENT <span>7.5</span>€</label>
                        </div>
                        <div class="case">
                            <input type="checkbox">
                            <label>TUNA SASHIMI ASSORTIMENT <span>10.5</span>€</label>
                        </div>
                        <div class="cercle"></div>
                    </div>
                </div>
            </div>
            <div class="prix">
                <h2>TOTAL PRICE :</h2>
                <p>0</p>
                <div class="barre"></div>
            </div>
        </div>
    </div>

    <div class="center">
        <div class="left">
            <h1>OUR <img src="images/star_ai.svg" alt="star"><br><span>HOMEMADE FOOD</span>. </h1>
            <p>Our service specializes in Asian cuisine and offers seasonal, biodegradable and ecological products.
            Offers a wide range of choices, with several composable menus.
            Prices vary according to menus and products used.
            Payment by card or cash if they eat in or order take-out, and payment by card if they place an order online. Subtle and rich cuisine, it is widely acclaimed by the French who seem to love it.</p>

            <div class="circle"></div>
        </div>
        <div class="right">
            <img src="images/roll_17.jpg" alt="img">
        </div>
    </div>
    
    <div class="dessous">
        <div class="gauche">
            <img src="images/roll_27.jpg" alt="img">
            <div class="rectangle"></div>
        </div>
        <div class="droite">
            <div class="titre">
                <h2>RATE</h2>
                <h3>Us</h3>
            </div>
            <p>Please rate your experience and consider leaving a review. It helps us improve.</p>
            <div class="circle"></div>
            <div class="star">
            <div class="container">
                <div class="post">
                    <div class="text">Thanks for rating us!</div>
                    <div class="edit">EDIT</div>
                </div>
                <div class="star-widget">
                    
                    <input type="radio" name="rate" id="rate-5">
                    <label for="rate-5" class="fas fa-star"><ion-icon name="star"></ion-icon></label>
                    <input type="radio" name="rate" id="rate-4">
                    <label for="rate-4" class="fas fa-star"><ion-icon name="star"></ion-icon></label>
                    <input type="radio" name="rate" id="rate-3">
                    <label for="rate-3" class="fas fa-star"><ion-icon name="star"></ion-icon></label>
                    <input type="radio" name="rate" id="rate-2">
                    <label for="rate-2" class="fas fa-star"><ion-icon name="star"></ion-icon></label>
                    <input type="radio" name="rate" id="rate-1">
                    <label for="rate-1" class="fas fa-star"><ion-icon name="star"></ion-icon></label>

                    <form action="subscription.php" method="post">
                        <input type="hidden" name="form" value="review">
                        <input type="hidden" value="1" id="rate" name="rate">
                        <header></header>
                        <div class="username">
                            <label for="username">Username</label>
                            <input id="username" type="text" name="username">
                        </div>
                        <div class="textarea">
                            <textarea cols="30" placeholder="Describe your experience.."  name="content"></textarea>
                        </div>
                        <div class="btn">
                            <button type="submit">POST</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        </div>
    </div>

    
    <?php
        include('utils/footer.php');
    ?>

    <script src="js/subscription.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>