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
    <title>BLOG</title>
    <link rel="icon" type="image/png" href="images/sushi.png" />
</head>
<body class="light">

    <?php
        include('utils/header.php');
        require('utils/db.php');
        $requete = $db->prepare('SELECT * FROM posts');
        $requete->execute();
        $posts = $requete->fetchAll();
    ?>
    <img src="images/fond.png" class="fond" alt="fond">
    
    <div class="news">
        <div class="haut">
            <div class="left">
                <img src="images/roll_16.jpg" alt="image">
                <div class="bulle">
                    <ion-icon name="bag-handle-outline"></ion-icon>
                    <b>Lorem ipsum dolor sit.</b>
                    <p>Lorem</p>
                </div>
            </div>
            <div class="right">
                <!-- <div class="circle"></div> -->
                <!-- <img src="images/pen.svg" alt="img" class="pen"> -->
                <img src="images/outline.svg" alt="img" class="outline">
                <h1>How to spot<br> <ion-icon name="arrow-forward-outline"></ion-icon> <span> <strong>  an abused </strong> chicken  </span>&emsp;&emsp;&emsp;&emsp;&emsp;when buying? </h1>
                <p>Today it is difficult to eat good quality chicken. Chickens suffer from their rearing conditions, causing stress and disease. The constant search for the fastest and cheapest fattening performance improvement is a major reason for the lack of improved animal welfare conditions. The mistreatment and poor conditions in which chickens are reared have repercussions on the environment, such as soil (groundwater) and air (ammonia) pollution, but also on humans, such as the transmission of diseases by the meat eaten.</p>
                <p> <span id="app">In addition to this, the rearing conditions are not the only causes of mistreatment of the chickens, the collection is expeditious and traumatic for the animals (taking 5 animals at a time and thrown into cages), and during the slaughter, the animals are suspended conscious by one leg before being compulsorily stunned by immersion of the head in electrified water (9 animals out of 1000 would not be stunned according to the European Food Safety Authority: EFSA) .</span></p>
                <div class="bouttons">
                    <a href="subscription.php"><button>BUY NOW</button></a>                    
                    <a class="clck" href="#">CHECK OUT <img src="images/add-outline.svg" alt="add"></a>
                </div>
            </div>
        </div>

        <div class="filter_container">
            <input type="checkbox" name="" id="filters_title">
            <div class="filters_title">
                <label for="filters_title">
                    <ion-icon name="options-outline"></ion-icon>
                    <h2>News</h2>
                </label>
            </div>
            <div class="filters">   
                <div>
                <input type="checkbox" name="cat1" id="cat1" checked>
                <label for="cat1">SUSHIS ASSORTIMENT</label> 
                </div>
                <div>
                    <input type="checkbox" name="cat2" id="cat2" checked>
                <label for="cat2">CHICKEN ASSORTIMENT</label>
                </div>
                <div>
                    <input type="checkbox" name="cat3" id="cat3" checked>
                <label for="cat3">CHICKEN SALMON TUNA ASSORTIMENT</label>
                </div>
                <div>
                    <input type="checkbox" name="cat4" id="cat4" checked>
                <label for="cat4">CHICKEN SALMON TUNA SUSHI ASSORTIMENT</label>
            </div>
        </div>
    </div>
        
    <div class="cases">
        <div class="container">
            <?php
            foreach($posts as $post){ ?>
                <div class="card catall <?php echo $post['category'] ?>">
                <div class="imgBx">
                    <img src="<?php echo $post['image'] ?>" alt="plat">
                </div>
                <div class="contentBx">
                    <div class="content">
                        <h3><?php echo $post['title'] ?></h3>
                        <p><?php echo $post['content'] ?></p>
                        <div class="star">
                            <b>5.0</b> <img src="images/star.png" class="etoile" alt="star">
                        </div>
                        <a href="" class="buy"><span>14.90 €</span></a>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- <div class="card catall cat1">
                <div class="imgBx">
                    <img src="images/bouffe_12.jpeg" alt="plat">
                </div>
                <div class="contentBx">
                    <div class="content">
                        <h3>SUSHIS ASSORTIMENT </h3>
                        <p>Designed for one people: 2 nigris-sushis, 2 salmon-sushis, 2 chirashi-sushis, 2 nare-sushis, 2 tuna-sushi.</p>
                        <div class="star">
                            <b>4.0</b> <img src="images/star_line.png" class="etoile" alt="star">
                        </div>
                        <a href="" class="buy"><span>12.50 €</span></a>
                    </div>
                    
                </div>
            </div>
            <div class="card catall cat1">
                <div class="imgBx">
                    <img src="images/bouffe_13.jpeg" alt="plat">
                </div>
                <div class="contentBx">
                    <div class="content">
                        <h3>SUSHIS ASSORTIMENT </h3>
                        <p>Designed for one people: 2 nigris-sushis, 2 salmon-sushis, 2 chirashi-sushis, 2 california-roll, 2 nare-sushis, 2 tuna-sushi, 5 avocado-sashimi.</p>
                        <div class="star">
                            <b>5.0</b> <img src="images/star.png" class="etoile" alt="star">
                        </div>
                        <a href="" class="buy"><span>14.90 €</span></a>
                    </div>
                </div>
            </div>
            <div class="card catall cat1">
                <div class="imgBx">
                    <img src="images/bouffe_14.jpeg" alt="plat">
                </div>
                <div class="contentBx">
                    <div class="content">
                        <h3>SUSHIS ASSORTIMENT </h3>
                        <p>Designed for two people: 5 nigris-sushis, 5 salmon-sushis, 5 nare-sushis, 5 tuna-sushi, 5 salmon-sashimi, 5 tuna-sashimi, 5 california-roll.</p>
                        <div class="star">
                            <b>5.0</b> <img src="images/star.png" class="etoile" alt="star">
                        </div>
                        <a href="" class="buy"><span>19.90 €</span></a>
                    </div>
                    
                </div>
            </div>
            <div class="card catall cat2">
                <div class="imgBx">
                    <img src="images/bouffe_19.jpeg" alt="plat">
                </div>
                <div class="contentBx">
                    <div class="content">
                        <h3>ASSORTIMENT CHICKEN SUSHIS</h3>
                        <p>Designed for one people: 2 nigris-sushis, 2 salmon-sushis, 2 chirashi-sushis, 2 chicken sushi, 3 chicken california-roll, 2 tuna-sushi.</p>
                        <div class="star">
                            <b>5.0</b> <img src="images/star.png" class="etoile" alt="star">
                        </div>
                        <a href="" class="buy"><span>12.50 €</span></a>
                    </div>
                    
                </div>
            </div>
            <div class="card catall cat2">
                <div class="imgBx">
                    <img src="images/bouffe_20.jpeg" alt="plat">
                </div>
                <div class="contentBx">
                    <div class="content">
                        <h3>CHICKEN BENTO</h3>
                        <p>Designed for one people: sesame rice, 3 chicken tempura, 3 zucchini flower fritter, 1 chicken breast, 2 chicken-skewer, 5 cucumber-sashimi, 1 cup of mango-sauce.</p>
                        <div class="star">
                            <b>5.0</b> <img src="images/star.png" class="etoile" alt="star">
                        </div>
                        <a href="" class="buy"><span>24.90 €</span></a>
                    </div>
                    
                </div>
            </div>
            <div class="card catall cat2">
                <div class="imgBx">
                    <img src="images/bouffe_16.jpeg" alt="plat">
                </div>
                <div class="contentBx">
                    <div class="content">
                        <h3>CHICKEN SALAD</h3>
                        <p>Designed for one people: soy sprouts salad, 5 chicken tempura, 3 shrimp, black radish, cucumber, pepper, onion.</p>
                        <div class="star">
                            <b>4.0</b> <img src="images/star_line.png" class="etoile" alt="star">
                        </div>
                        <a href="" class="buy"><span>14.90 €</span></a>
                    </div>
                    
                </div>
            </div>
            <div class="card catall cat3">
                <div class="imgBx">
                    <img src="images/sushi_21.jpg" alt="plat">
                </div>
                <div class="contentBx">
                    <div class="content">
                        <h3>ASSORTIMENT CHICKEN SALMON TUNA BAWL</h3>
                        <p>Designed for one people: chicken sashimi, salmon sashimi, tuna sashimi.</p>
                        <div class="star">
                            <b>4.0</b> <img src="images/star_line.png" class="etoile" alt="star">
                        </div>
                        <a href="" class="buy"><span>12.50 €</span></a>
                    </div>
                    
                </div>
            </div>
            <div class="card catall cat3">
                <div class="imgBx">
                    <img src="images/sushi_09.jpg" alt="plat">
                </div>
                <div class="contentBx">
                    <div class="content">
                        <h3>ASSORTIMENT CHICKEN SALMON TUNA PLATE</h3>
                        <p>Designed for one people: chicken sashimi, salmon sashimi, tuna sashimi, mango puree, wasabi puree, fish egg.</p>
                        <div class="star">
                            <b>5.0</b> <img src="images/star.png" class="etoile" alt="star">
                        </div>
                        <a href="" class="buy"><span>14.50 €</span></a>
                    </div>
                    
                </div>
            </div>
            <div class="card catall cat3">
                <div class="imgBx">
                    <img src="images/sushi_04.jpg" alt="plat">
                </div>
                <div class="contentBx">
                    <div class="content">
                        <h3>ASSORTIMENT CHICKEN SALMON TUNA BAWL</h3>
                        <p>Designed for one people: chicken sashimi, salmon sashimi, tuna sashimi, mango puree, fish egg, tomatoes assortiment.</p>
                        <div class="star">
                            <b>5.0</b> <img src="images/star.png" class="etoile" alt="star">
                        </div>
                        <a href="" class="buy"><span>24.50 €</span></a>
                    </div>
                    
                </div>
            </div>
            <div class="card catall cat4">
                <div class="imgBx">
                    <img src="images/sushi_17.jpg" alt="plat">
                </div>
                <div class="contentBx">
                    <div class="content">
                        <h3>CHICKEN SALMON TUNA SUSHI ASSORTIMENT</h3>
                        <p>Designed for one people: 2 chicken sushis, 2 salmon sushis, 2 tuna sushis.</p>
                        <div class="star">
                            <b>5.0</b> <img src="images/star.png" class="etoile" alt="star">
                        </div>
                        <a href="" class="buy"><span>12.50 €</span></a>
                    </div>
                    
                </div>
            </div>
            <div class="card catall cat4">
                <div class="imgBx">
                    <img src="images/sushi_01.jpg" alt="plat">
                </div>
                <div class="contentBx">
                    <div class="content">
                        <h3>CHICKEN SALMON TUNA SUSHI ASSORTIMENT</h3>
                        <p>Designed for two people: 2 chicken sushis, 2 salmon sushis, 2 tuna sushis, 2 avocado sushis, 2 shrimp sushis, fish egg.</p>
                        <div class="star">
                            <b>4.0</b> <img src="images/star_line.png" class="etoile" alt="star">
                        </div>
                        <a href="" class="buy"><span>19.90 €</span></a>
                    </div>
                    
                </div>
            </div>
            <div class="card catall cat4">
                <div class="imgBx">
                    <img src="images/sushi_19.jpg" alt="plat">
                </div>
                <div class="contentBx">
                    <div class="content">
                        <h3>CHICKEN SALMON TUNA SUSHI ASSORTIMENT</h3>
                        <p>Designed for two people: 2 chicken sushis, 2 salmon sushis, 2 tuna sushis, 2 avocado sushis, 2 shrimp sushis, 2 squid sushis, fish egg.</p>
                        <div class="star">
                            <b>5.0</b> <img src="images/star.png" class="etoile" alt="star">
                        </div>
                        <a href="" class="buy"><span>29.90 €</span></a>
                    </div>
                    
                </div>
            </div> -->
        </div>
    </div>

        <div class="center">            
            <div class="wrapper">
                <div class="typing-demo">
                COME DISCOVER OUR FOOD.
                </div>
            </div>
        </div>
        <div class="bas">
            <div class="left">
                <h1>That's why.</h1>
                <p>All of these factors make it difficult, if not impossible, to eat quality chicken today.
                That's why we offer healthy dishes, in which we add healthy organic chicken that is good for humans. An important source of protein and vitamins, chicken is as good for the heart and lower in calories than other meats such as pork and beef.</p>
            </div>
            <div class="right">
                <img src="images/roll_10.jpg" alt="image">
                <img class="bulle" src="images/bulle.png" alt="bulle">
            </div>
        </div>
    </div>
    
    

    <?php
        include('utils/footer.php');
    ?>

    <script src="js/blog.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>