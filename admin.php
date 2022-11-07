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
    <link rel="icon" type="image/png" href="images/sushi.png" />
    <title>Document</title>
</head>
<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // $data = [
        //     'username' => $_POST['username'];
        //     'mail'
        // ];

        // require('utils/db.php');
        // $sqlQuery = 'INSERT INTO users (mail, password, role, username) VALUES (:email, :password, "admin", "admin")';
        // $registerStatement = $db->prepare($sqlQuery);
        // $registerStatement->execute([
        //     'email' => 'admin@fujian.fr',
        //     'password' => password_hash('admin', PASSWORD_BCRYPT),
        // ]);
        if($_POST['form'] == "login"){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $data = [
                'email' => $email,      
            ];

            require('utils/db.php');
            $requete = $db->prepare('SELECT * FROM users WHERE mail=:email');
            $requete->execute($data);
            $user = $requete->fetch();
            if(!empty($user)){
                if(password_verify($password, $user['password'])){
                    $_SESSION['role'] = 'admin';
                }
            }
            
        } elseif($_POST['form'] == "register"){
            $username = $_POST['register_username'];
            $email = $_POST['register_email'];
            $password = password_hash($_POST['register_password'], PASSWORD_BCRYPT);

            $data = [
                'username' => $username,
                'email' => $email,      
                'password' => $password,      
            ];
            
            require('utils/db.php');
            $requete = $db->prepare('INSERT INTO users (username, mail, password, role) VALUES (:username, :email, :password, "member")');
            $requete->execute($data);
            $_SESSION['role'] = 'member';
            
            header('admin.php');
        } elseif($_POST['form'] == "article"){
            $title = $_POST['title'];
            // $image = $_POST['image'];
            $content = $_POST['content'];
            $category = $_POST['category'];

            $data = [
                "title" => $title,
                // "image" => $image,
                "content" => $content,
                "category" => $category,
            ];
                $target_dir = "./blog/";
                $file = $_FILES['image']['name'];
                $path = pathinfo($file);
                $filename = $path['filename'];
                $ext = $path['extension'];
                $temp_name = $_FILES['image']['tmp_name'];
                $path_filename_ext = $target_dir. date("YmdHis") .$filename.".".$ext;
                if (file_exists($path_filename_ext)) {
                    echo "Sorry, file already exists.";
                } else {
                    move_uploaded_file($temp_name,$path_filename_ext);
                    echo "Congratulations! File Uploaded Successfully.";

                }
            require_once('utils/db.php');
            $requete = $db->prepare('INSERT INTO posts (title, content, date, category, image) VALUES (:title, :content, NOW(), :category, :image)');
            $requete->bindParam('category', $category);
            $requete->bindParam('title', $title);
            $requete->bindParam('content', $content);
            $requete->bindParam('image', $path_filename_ext);
            // $requete->bindParam('image', $fp, PDO::PARAM_LOB);
            $requete->execute();
        }


        
    } elseif($_SERVER['REQUEST_METHOD'] == 'GET'){
        if(isset($_SESSION['role'])){
            if($_SESSION['role'] == 'admin'){
                if(isset($_GET['action'])){
                    if($_GET['action'] == 'delete'){
                        require('utils/db.php');
                        $data = [
                            'id' => $_GET['id']
                        ];
                        $requete = $db->prepare('DELETE FROM review WHERE id = :id');
                        $requete->execute($data);
                    }
                }
                // echo 'admin';
            } else {
                // echo 'non admin';
            }
        } else {
            // echo 'non conecté';
        }
    }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src='js/tinymce/tinymce.min.js'></script>
            <script>
                tinymce.init({
                selector: '#myTextarea',
            });
            </script>
</head>
<body class="light admin">
    <img src="images/fond.png" class="fond" alt="fond">

    <img src="images/pen.svg" class="pen">
    
    <?php
        include('utils/header.php');
    ?>

    <div class="content">
        <?php
            if(isset($_SESSION['role'])){
                if($_SESSION['role'] == 'admin'){
                    require('utils/db.php');
                    $request = $db->prepare('SELECT * FROM review');
                    $request->execute();
                    $reviews = $request->fetchAll();
                    // print_r($reviews);
                ?>
                <div class="haut">
                    <section>
                        <a href="deco.php">DISCONNECT</a>
                        <!-- <a href="index.php">Go back to the Home-page</a> -->
                    </section>
                    <div class="container">
                        <?php
                        foreach($reviews as $review){?>
                            <div class="avi">
                                <p><?php echo($review['id']); ?></p>
                                <p><?php echo($review['username']); ?></p>
                                <p><?php echo($review['content']); ?></p>
                                <p><?php echo($review['rate']); ?></p>
                                <a href="admin.php?action=delete&id=<?php echo($review['id']); ?>">DELETE</a>
                            </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>

                <section class="article">
                    <form action="admin.php" method="post" enctype="multipart/form-data">
                        <div class="haut">
                            <input type="hidden" name="form" value="article">
                            <div class="case title">
                                <label for="title">TITLE</label>
                                <input type="text" name="title">
                            </div>
                            <div class="case image">
                                <label for="image">IMAGE</label>
                                <input type="file" name="image" class="image">
                                <!-- <img src="images/star_sticker.svg" alt="sticker" class="sticker"> -->
                            </div>
                            <div class="imgs">
                                <label for="image">IMAGE</label>
                                <input type="none" placeholder="Choose your picture">
                            </div>
                            <select name="category" class="category">
                                <option value="cat1">SUSHIS ASSORTIMENT</option>
                                <option value="cat2">CHICKEN ASSORTIMENT</option>
                                <option value="cat3">CHICKEN SALMON TUNA ASSORTIMENT</option>
                                <option value="cat4">CHICKEN SALMON TUNA SUSHI ASSORTIMENT</option>
                            </select>
                        </div>
                        <textarea id="myTextarea" name="content"></textarea>
                        <input type="submit" class="post" value="POST">
                    </form>
                    
                </section>
                                    
            <?php
                } else {
                    echo '<h1>Connected but not as admin</h1>';
                }
                } else {
                    echo '<h1>Disconnect</h1>';
                }
            ?>
        
    </div>
    <?php
        include('utils/footer.php');
    ?>

    <script src="js/blog.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
</body>
</html>