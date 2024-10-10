<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="CSS/valeur.css">
    <link rel="stylesheet" href="CSS/all.css">
        <link rel="stylesheet" href="CSS/creneauxPage.css">


    <title>Document</title>
</head>
<body>

     <!-- CONNEXION BDD -->

     <?php
    $pdo = new PDO('mysql:host=localhost;dbname=varap', 'root', ''); 
    ?>

     <!-- CONNEXION BDD + MENU -->

     <?php
    require("menu.html");

    $req1 = $pdo->prepare("SELECT * FROM creneaux WHERE site = 'Gisors'");
    $req1->execute();
    $result1 = $req1->fetchAll();

    $req2 = $pdo->prepare("SELECT * FROM creneaux WHERE site = 'Sérifontaine'");
    $req2->execute();
    $result2 = $req2->fetchAll();
    ?>



    <img class="imgP" src="image/backTop3.png" alt="" srcset="">

    <h3>Varap'Eure - Le club - <strong>Nos créneaux</strong></h3>

    <div class="containerValeur">
        <div class="containerImg">
            <img class="imgLeft" src="image/imgCreneaux1.png" alt="" srcset="">
            <img class="imgLeft" src="image/imgCreneaux2.png" alt="" srcset="">
        </div>
        <div class="containerRight">

            <h1>NOS CRENEAUX</h1>
            <p>Lorem temporibus facere ex commodi et doloresllum providenident labore veritatident labore veritatident labore veritatt labore veritatis numquam error. Voluptate, numquam nisi non facere vel odit earum impedit, id laudantium provident assumenda. Culpa illo omnis cumque. In quasi blanditiis delectus odit iste?</p>
            
            <div class="containerRightBottom">

                <h2 class="h2creneaux">CLUB DE GISORS</h2>

                <?php
                    foreach($result1 as $creneaux){
                            
                        echo "<div class='creneaux'><p class='jourCreneaux'>".$creneaux['jour']." - </p><p class='horraireCreneaux'>". $creneaux['horraire']."<p class='descriCreneaux'>- ".$creneaux['descri']."</p></p></div>";

                    }
                ?>
                

                <h2 class="h2creneaux">CLUB DE GISORS</h2>

                <?php
                    foreach($result2 as $creneaux){
                            
                        echo "<div class='creneaux'><p class='jourCreneaux'>".$creneaux['jour']." - </p><p class='horraireCreneaux'>". $creneaux['horraire']."<p class='descriCreneaux'>- ".$creneaux['descri']."</p></p></div>";

                    }
                ?>
                
            </div>    

            

            <a class="btn" href="">> VOIR LES ADHESIONS ET TARIFS</a>
        </div>
    </div>


    <!-- PIED DE PAGE -->

    <?php
    require("pdp.html");
    ?>


    <img class="pdp"  src="image/finpdp.png" alt="" srcset="">
</body>
</html>