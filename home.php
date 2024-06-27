<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/all.css">
    <link rel="stylesheet" href="CSS/creneaux.css">
    <link rel="stylesheet" href="CSS/filinfo.css">
    <link rel="stylesheet" href="CSS/pdp.css">
    <link rel="stylesheet" href="CSS/rdv.css">
    <link rel="stylesheet" href="CSS/reseaux.css">

    <title>VARAP'EURE</title>
</head>
<body>

    <!-- CONNEXION BDD -->

    <?php
    $pdo = new PDO('mysql:host=localhost;dbname=varap', 'root', ''); 
    ?>




    <!-- MENU -->

    <?php
        require("menu.html");
    ?>




    <!-- CRENEAUX -->

    <?php 
    $req = $pdo->prepare("SELECT * FROM flashinfo WHERE id = 1");
    $req->execute();
    $result = $req->fetch();

    $req1 = $pdo->prepare("SELECT * FROM creneaux WHERE site = 'Gisors'");
    $req1->execute();
    $result1 = $req1->fetchAll();

    $req2 = $pdo->prepare("SELECT * FROM creneaux WHERE site = 'Sérifontaine'");
    $req2->execute();
    $result2 = $req2->fetchAll();

    ?>

    <img class="imgP" src="image/img_principale.png" alt="" srcset="">

    <div class="containerWarning">
        <div class="warning"><span class="flash">FLASH : </span><?php echo $result["descri"] ?> </div><div class="warning"><span class="flash">FLASH : </span><?php echo $result["descri"] ?> </div><div class="warning"><span class="flash">FLASH : </span><?php echo $result["descri"] ?> </div><div class="warning"><span class="flash">FLASH : </span><?php echo $result["descri"] ?> </div>
    </div>

    <h1 class="titleCreneauxAcces" id="sites"> <p class="titleCreneaux">NOS PROCHAIN CRENEAUX</p> <p class="titleAcces">ET ACCES</p> </h1>

    <div class="containerCreneauxAcces">

        <div class="containerCreneauxAccesLeft">
            <div class="containerCreneauxGisors">

                <h2 class="txtClub">CLUB DE GISORS</h2>
                <div class="containerCreneauxG">
                <?php
                    foreach($result1 as $creneaux){
                        
                        echo "<div class='creneaux'><p class='jourCreneaux'>".$creneaux['jour']." - </p><p class='horraireCreneaux'>". $creneaux['horraire']."<p class='descriCreneaux'>- ".$creneaux['descri']."</p></p></div>";

                    }
                ?>
                </div>

            </div>
            <div class="containerCreneauxSerif">

                <h2 class="txtClub">CLUB DE SERIFONTAINE</h2>
                <div class="containerCreneauxS">
                <?php
                    foreach($result2 as $creneaux){
                        
                        echo "<div class='creneaux'><p class='jourCreneaux'>".$creneaux['jour']." - </p><p class='horraireCreneaux'>". $creneaux['horraire']."<p class='descriCreneaux'>- ".$creneaux['descri']."</p></p></div>";

                    }
                ?>
                </div>

            </div>
        </div>

        <div class="containerCreneauxAccesRight">

            <div class="containerCreneauxAccesRightTop">

                <div class="containerAccesIMG imgG"></div>

                <div class="containerAccesADD">
                    <p class="titleAdd">Club d'escalade Varap'eure Gisors</p>
                    <p class="address">Lycée Louise Michel, Avenue De Verdun, 27140 GISORS</p>
                    <a class="lienAdd" href="https://www.google.com/maps/place/Les+Restaurants+du+Coeur+de+Gisors/@49.2836497,1.7779634,17z/data=!4m5!3m4!1s0x47e6e0b1e691dccb:0x2091f736a1b4ad3d!8m2!3d49.2836496!4d1.7791388">> plan d'accès</a>
                </div>
               
            </div>

            <div class="containerCreneauxAccesRightBottom">
               <div class="containerAccesIMG imgS"></div>

                <div class="containerAccesADD">
                    <p class="titleAdd">Club d'escalade Varap'eure Sérifontaine</p>
                    <p class="address">Gymnase Bernard Leduc, 60590 Sérifontaine</p>
                    <a class="lienAdd" href="https://www.google.com/maps/place/Gymnase+Bernard+Leduc/@49.3604581,1.7622824,17z/data=!3m1!4b1!4m5!3m4!1s0x47e72004e3ef9cbb:0x1dbe681a4e3d62ff!8m2!3d49.3604628!4d1.7644714">> plan d'accès</a>
                </div>
            </div>

        </div>

    </div>





    <!-- FILINFO -->

    <?php 
    $req = $pdo->prepare("SELECT * FROM filinfo");
    $req->execute();
    $result = $req->fetchAll();
    ?>

    <div class="backgroundFilInfo">

        <div class="containerFilInfo">

            <div class="containerTitleFilInfo">
            <h1 class="titleFilInfo"> <p>LE FIL-INFO</p> <p class="titleEscalade">ESCALADE</p>     <a href="filinfoPage.php" class="redirectionAllInfo">VOIR TOUTES LES ACTUALITES</a> </h1> </div>

            <div class="btnLeft" id="btnLeft"></div>
            <div class="btnRight" id="btnRight"></div>

            <div class="containerCarousel">
                <div class="carousel" id="carousel">
                    <?php 
                        for ($i = 1; $i <= 3; $i++){

                            foreach($result as $filinfo){
                            
                                echo "<a class='redirection' href='".$filinfo['redirection']."'>
                                <div class='containerInfo'>
                                <div class='imgInfo' style='background-image: url(image/".$filinfo['image'].");'></div>
                                    <div class='txtInfo'>
                                        <div class='titleInfo'>".$filinfo['titre']."</div>
                                        <div class='dateInfo'>".$filinfo['date']."</div>
                                        <div class='descriInfo'>".$filinfo['descri']."</div>
                                    </div>
                                </div></a>";
        
                            }
                        }
                    ?>
                </div>
            </div>
            
        </div>

    </div>





    <!-- RDV -->

    <?php
    
    $req = $pdo->prepare("SELECT * FROM rdv");
    $req->execute();
    $result = $req->fetchAll();
    $nbImg = 0;

    do {
        $req1 = $pdo->prepare("SELECT image FROM rdv WHERE id = (SELECT MAX(id) - $nbImg FROM rdv)");
        $req1->execute();
        $img = $req1->fetchColumn();
        $nbImg++;
    } while ($img == '');
    
   
    ?>

    <div class="containerRdv">
        <div class="containerRdvLeft">
            <div class="ContainerTitleProchainsRdv"> <p class="titleProchains">PROCHAINS</p> <p class="titleRdv"> RENDEZ-VOUS</p> </div>
            <div class="listeRdv">
                <div class="rdv">
                <?php
                    foreach($result as $rdv){
                        echo "
                        <div class='content1rdv'>
                            <div class='dateRdv'>>".$rdv['date']."</div>
                            <div class='descriRdv'>".$rdv['descri']."</div>
                            <div class='contactRdv'>".$rdv['contact']."</div>
                        </div>
                        ";
                    }
                ?>
                </div>
            </div>
        </div>
        <div class="containerRdvRight">
            
        </div>
    </div>

    <style>
        .containerRdvRight{
        width: 30%;
        height: 90% ;
        margin-top: 5vh;
        background-image: url("image/<?php echo $img; ?>");
        
        background-position-x: right;
        background-position-y: center ;   
        background-repeat: no-repeat;
        background-size: contain;
        }
    </style>





    <!-- RESEAUX -->

    <?php
        ?>

    <img class="reseaux" src="image/reseaux.png">





    <!-- PIED DE PAGE -->

    <div class="containerPdp">

    <div class="card card1">
        <a href="">
        <div class="cardTop cardTop1"></div>
        <div class="cardBottom">
            <h2 class="txtPdp">L'EQUIPE VARAP'EURE</h2>
        </div>
        </a>
    </div>

    <div class="card">
        <a href="">
        <div class="cardTop cardTop2"></div>
        <div class="cardBottom ">
        <h2 class="txtPdp">BOUTIQUE VARAP'EURE</h2>
        </div>
        </a>
    </div>

    <div class="card">
        <a href="">
        <div class="cardTop cardTop3"></div>
        <div class="cardBottom">
        <h2 class="txtPdp">DOSSIER D'INSCRIPTION</h2>
        </div>
        </a>
    </div>
    
    </div>

    <div class="imgFinPdp"></div>
    



    <!-- JAVASCRIPT -->

    <script src="JS/filinfo.js"></script>

</body>
</html>