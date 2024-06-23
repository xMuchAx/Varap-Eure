<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/all.css">
    <link rel="stylesheet" href="CSS/equipe.css">
    <title>Document</title>
</head>
<body>

    <!-- CONNEXION BDD + MENU -->

    <?php
    $pdo = new PDO('mysql:host=localhost;dbname=varap', 'root', ''); 
    require("menu.html");
    $req = $pdo->prepare("SELECT * FROM bureau");
    $req->execute();
    $result = $req->fetchAll();

    $req1 = $pdo->prepare("SELECT * FROM encadrant");
    $req1->execute();
    $result1 = $req1->fetchAll();
    ?>


    

    <div class="backTop"></div>

    <h3>Varap'Eure - L'équipe - <strong>Le bureau</strong></h3>

    <h1 id="bureau">LE BUREAU</h1>

    <div class="containerMembre">
        <?php
            foreach($result as $bureau){
                echo"
                <div class='membre'>
                <div class='imgMembre' style='background-image: url(image/".$bureau['photo'].")'></div>

                <div class='infoMembre'>
                    <div class='prenomMembre'>".$bureau['prenom']."</div>
                    <div class='roleMembre'>".$bureau['role']."</div>
                </div>

                </div>";    

            }
        ?>
    </div>

    <h1 id="encadrant">LES ENCADRANT ET CO-ENCADRANT</h1>

    <div class="containerMembre">
        <?php
            foreach($result1 as $encadrant){
                
                echo"
                <div class='membre'>
                <div class='imgMembre imgEncadrant' style='background-image: url(image/".$encadrant['photo'].")'></div>

                <div class='infoMembre'>
                    <div class='prenomMembre'>".$encadrant['prenom']."</div>
                    <div class='roleMembre'>".$encadrant['role']."</div>
                </div>

                </div>";    

            }
        ?>
    </div>

    <h1 id="prestataire">LES AUTRES PRESTATAIRES CLUB</h1>

    <div class="containerMembre">
        <?php
            foreach($result as $bureau){
                echo"
                <div class='membre'>
                <div class='imgMembre' style='background-image: url(image/".$bureau['photo'].")'></div>

                <div class='infoMembre'>
                    <div class='prenomMembre'>".$bureau['prenom']."</div>
                    <div class='roleMembre'>".$bureau['role']."</div>
                </div>

                </div>";    

            }
        ?>
    </div>

    <div class="imgFinPdp"></div>


    

    
</body>
</html>