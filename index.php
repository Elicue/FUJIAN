<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Genos:wght@500&family=Grape+Nuts&family=Kings&family=Montserrat:wght@300&family=Open+Sans:wght@300;400;500;700&family=Oswald&family=Playfair+Display:ital,wght@0,400;0,500;1,400;1,600&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <title>HOME</title>
  <link rel="icon" type="image/png" href="images/sushi.png" />
</head>

<body class="light">

  <?php
  include('utils/header.php');
  ?>

  <main>
      <img src="images/fond.png" class="fond" alt="fond">
      <section>
          <div class="haut">
              <div class="gauche">
                  <div class="carte premier">
                      <div class="lien">
                          <h2>DISCOVER <span>more</span> </h2>
                          <img src="images/arrow.png" alt="fleche">
                      </div>
                      <img src="images/roll_03.jpg" class="gauche food" alt="image">
                  </div>
                  <div class="carte">
                      <img class="food" src="images/roll_24.jpg" alt="image">
                      <div class="lien">
                          <h2>DISCOVER <span>more</span> </h2>
                          <img src="images/arrow.png" class="fleche" alt="fleche">
                      </div>
                  </div>
              </div>
              <div class="droite">
                  <div class="titre">
                      <div class="circle"></div>
                      <h2>ASIAN</h2>
                      <h3>food</h3>
                  </div>
                  <p>Fujian is an Asian food chain specializing in chicken and its variations. The restaurant is an Asian restaurant offering mainly Japanese formulas but also Korean and Vietnamese dishes.</p>
              </div>
          </div>
          <div class="bas">
              <div class="gauche">
                  <h1>ABOUT<br><span>The Beta</span></h1>
                  <p>The setting up of a culinary event in order to attract an audience to take an interest in the animal cause, to discover healthy dishes based on fresh and organic chicken, to introduce the brand. Chickens suffer from their rearing conditions, causing stress and disease. In addition to this, rearing conditions are not the only causes of mistreatment of chickens. All these factors make it difficult or even difficult to eat a quality chicken. not possible today.That's why we offer healthy dishes, in which we add healthy organic chicken that is good for humans. An important source of protein and vitamins, chicken is as good for the heart and lower in calories than other meats such as pork and beef.</p>
                  <h4 id="togg1">LEARN MORE</h4>
                  <div class="circle"></div>
              </div>
          
              <div class="droite">
                  <div class="carte">
                      <img src="images/bouffe_01.jpeg" alt="image">
                      <div class="description">
                          <b>1</b>
                          <p>Fresh and local fish and free-range chicken.</p>
                      </div>
                  </div>
                  <div class="carte">
                      <img src="images/bouffe_03.jpeg" alt="image">
                      <div class="description">
                          <b>2</b>
                          <p> Fruits and vegetables are also local and seasonal.</p>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </main>
<!-- 
  <div class="bg_modal">
      <div class="formulaire">
          <div id="d1">
              <div class="container">
                  <div class="close"><ion-icon name="close-outline"></ion-icon></div>
                      <div class="form">
                          <h2>Login Form</h2>
                          <form action="parrainage.php" method="post">
                              <div class="inputBox cadre">
                                  <input type="text" placeholder="Name">
                              </div>
                              <div class="inputBox cadre">
                                  <input type="text" placeholder="First name">
                              </div>
                              <div class="inputBox cadre">
                                  <input type="email" placeholder="mail" name="mail">
                              </div>
                              <div class="inputBox cadre">
                                  <input type="text"  placeholder="Password" id="password" >
                                  <img src="images/copy-outline.svg" class="copy" alt="copier_mdp"
                                      onclick="copyPassword();">
                              </div>
                              <div id="btn" onclick="getPassword();">Generate Password</div>
                              <div class="alertBox"></div>
                              <div class="inputBox">
                                  <input type="submit" value="Submit">
                              </div>
                          </form>

                      </div>
                  </div>
          </div>
      </div>
  </div>

  <div class="bottom">
      <div class="content">
          <div class="titre">
              <h1>Gallery</h1>
              <div class="circle"></div>
          </div>
          <p>All our fish are of excellent quality and served fresh. Our rice is homemade, as well as our sauces and accompaniments. Fruits and vegetables are local and seasonal. All drinks and desserts are also cooked by us. None of our packaging is plastic, we use biodegradable cardboard and bamboo leaves in our take-out orders. All cans and plastic bottles have been replaced by glass or terracotta containers. All our dishes are made in a few moments and you will be served in less than 30min. All takeout orders are ready in less than 20min and will be delivered to you within the hour. All our dishes are pleasantly presented, while keeping quantities reasonable. We take care to highlight each product, in order to satisfy the desires of customers.</p>
          <div class="gallery">
              <img src="images/plate_01.jpg" alt="image">
              <img src="images/plate_02.jpg" alt="image">
              <img src="images/plate_03.jpg" alt="image">
          </div>
          <p class="bas">The product is made with a simple packaging, with only three colors white, beige and green so as not to lose the public. The goal is to present the product in an explicit, simple and easy to assimilate way for all audiences. The packaging is ecological and biodegradable. Packaging is the ideal way to ensure clear and precise communication to consumers, which is why packaging is simple and goes to the essentials.</p>
      </div>
      <div class="fond"></div>
  </div>

  <div class="comms">
      <h1>Reviews </h1>    
      <div class="reviews">
          <?php
              include('utils/db.php');
              $requete = $db->prepare('SELECT * FROM review ORDER BY id DESC LIMIT 3');
              $requete->execute();
              $reviews = $requete->fetchAll();
              // print_r($reviews);
              foreach($reviews as $review){
                  ?>
                  <div class="contenu">
                      <p><?php echo $review['username']; ?></p>
                      <div class="content">
                          <div class="star">
                              <?php
                                  for ($i = 1; $i <= $review['rate']; $i++) {
                                      echo '<ion-icon name="star"></ion-icon>';
                                  }
                              ?>
                          </div>
                          <!-- <p><?php echo $review['rate']; ?></p> -->
                          <p><?php echo $review['content']; ?></p>
                      </div>
                  </div>
                  <?php
              }
          ?>
      </div>
  </div> -->

  
  <?php
  include('utils/footer.php');
  ?>

  <script src="js/script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>