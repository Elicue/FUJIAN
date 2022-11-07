<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Genos:wght@500&family=Grape+Nuts&family=Kings&family=Montserrat:wght@300&family=Open+Sans:wght@300;400;500;700&family=Oswald&family=Playfair+Display:ital,wght@0,400;0,500;1,400;1,600&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <title>HISTORY</title>
    <link rel="icon" type="image/png" href="images/sushi.png" />
</head>

<body class="light">

    <?php
    include('utils/header.php');
    ?>
    
    
    <div class=" history container">
        <div class="content">
            <div class="left">
                <div class="text">
                    <p> <span class="color">What reasoning did we follow to create our brand, from the first idea to the final result.</span> </p>
                    <h1>HOW WE <span>  Came up </span>WITH OUR IDEA.</h1>
                    <p>The desire to embark on a new adventure takes us and we decide to create a restaurant chain dedicated to chicken. In order to stand out from the others, as both fans of Asian food, we then decided to include chicken.</p>
                </div>
                <div class="bouttons">
                    <a href="subscription.php"><button>Get started</button></a>                    
                    <img src="images/caret-forward-outline.svg" alt="arrow">
                </div>
            </div>
            <div class="right">
                <div class="circle"></div>
                <img src="images/roll_05.jpg" class="bol">
                <img src="images/pen.svg" class="pen">
            </div>
        </div>
        <div class="bandeau">
            <div class="case">
                <p>5+</p>
                <p>Starters </p>
            </div>
            <div class="barre"></div>
            <div class="case">
                <p>10+</p>
                <p>Main courses</p>
            </div>
            <div class="barre"></div>
            <div class="case">
                <p>7+</p>
                <p>Desserts</p>
            </div>
            <div class="barre"></div>
            <div class="case">
                <p>12+</p>
                <p>Drinks</p>
            </div>
        </div>
    </div>
    
    <div class="slides">
        <img src="images/pen_white.svg" alt="img" class="pen">
        <div class="slider">
            <img class="img__slider active" src="images/roll_07.jpg" alt="img">
            <img class="img__slider" src="images/roll_35.jpg" alt="img">
            <img class="img__slider" src="images/rolle_04.jpg" alt="img">
            <div class="suivant">
                <ion-icon color="white" name="chevron-forward-circle-outline"></ion-icon>
            </div>
            <div class="precedent">
                <ion-icon color="white" name="chevron-back-circle-outline"></ion-icon>
            </div>
        </div>
        <div class="circle"></div>
        <div class="right">
            <h1>HOW <span> Our project</span> <br> HAS  <strong>EVOLVED</strong> OVER TIME</h1>
            <p>We then look for information on the sector, future urbanization projects, trends, target customers, competition. <strong>We then decided to develop notie Idée and our brand concept Having already a vague idea, we finally decided to develop an astatic food brand defined by its many chicken recipes.</strong>We design our logo, decide on the decisive name, graphic charter, our advertisements and everything related to the graphic approach. <br>We are now choosing our premises and settling in the se arrondissement to share our equipment and staff.</p>
            <h2>And finally Fujian was born, and we are proud of this project.</h2>
        </div>
    </div>

    <div class="centre">
        <div class="contenu">
            <div class="left">
                <div class="text">
                    <p>#Asianfood.</p>
                    <h1>Homemade with fresh products and love.</h1>
                    <p>The restaurant is popular for its calm and relaxing atmosphere allowing guests to unwind while eating. Mainly composed of cold colors, the atmosphere is no less warm. </p>
                </div>
            </div>
            <div class="center">
                <div class="colonne">
                    <img class="roll" src="images/roll_14.jpg" alt="roll">
                    <p class="size">#Healthy</p>
                    <p>A concept that takes up the codes of Asian catering by adding their touch, revisiting traditional recipes.</p>
                </div>
                <div class="colonne">
                    <img src="images/arrow.png" alt="fleche" id="fleche">
                    <img class="roll" src="images/roll_22.jpg" alt="roll">
                    <p class="size">#Restauration</p>
                    <p>Combining cooking techniques to obtain new and surprising flavors.</p>
                </div>
                <div class="colonne">
                    <img class="roll" src="images/roll_27.jpg" alt="roll">
                    <p class="size">#Chickensushi</p>
                    <p>Eat well with a simple menu that offers multiple specialties, using fresh, homemade products.</p>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('utils/footer.php');
    ?>

    <script src="js/history.js"></script>
    <!-- <script src="js/dark_mode.js"></script> -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>