<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/all.css">
    <link rel="stylesheet" href="CSS/filinfoPage.css">
    <title>Document</title>
</head>
<body>

    <!-- CONNEXION BDD + MENU -->

    <?php
    $pdo = new PDO('mysql:host=localhost;dbname=varap', 'root', ''); 
    require("menu.html");
    $req = $pdo->prepare("SELECT * FROM filinfo");
    $req->execute();
    $result = $req->fetchAll();

    $req1 = $pdo->prepare("SELECT * FROM filinfo where escalade = 1");
    $req1->execute();
    $result1 = $req1->fetchAll();

    $req2 = $pdo->prepare("SELECT * FROM filinfo WHERE pratique = 1");
    $req2->execute();
    $result2 = $req2->fetchAll();

    $req3 = $pdo->prepare("SELECT * FROM filinfo where varap = 1");
    $req3->execute();
    $result3 = $req3->fetchAll();
    ?>

    <div class="backTop"></div>

    <h3>Varap'Eure - <strong>Le fil-info</strong></h3>

    <h1>LES ACTUALITE ESCALADE <span style="color: rgb(190, 190, 190); font-weight : 400">2022 2023</span></h1>

    <nav class="navInfo">
        
        <h4 class="redirectionInfo"><span>TOUT</span></h4>
        <h4 class="redirectionInfo">ESCALADE</h4>
        <h4 class="redirectionInfo">PRATIQUE DE L'ESCALADE</h4>
        <h4 class="redirectionInfo">LE CLUB VARAP'EURE</h4>
       
    </nav>

    <div class="containerGridsInfo">
        
        <div class="gridInfo">
        <div class="grid">
        <?php
            foreach($result as $filinfo){
                if($filinfo["varap"] == 1){
                    $color = "#f1a242";
                }else{
                    $color = "#b3b3b3";
                }
                                    
                echo "<a class='redirection' href=''>
                    <div class='containerInfo'>
                        <div class='imgInfo' style='background-image: url(image/".$filinfo['image'].")'></div>
                        <div class='txtInfo'>
                            <div class='titleInfo'>".$filinfo['titre']."</div>
                            <div class='dateInfo'>".$filinfo['date']."</div>
                            <div class='descriInfo' style='color:".$color."'>".$filinfo['descri']."</div>
                        </div>
                    </div></a>";
                }
        ?></div>
        <div class="imgFinPdp" style="margin-left : -10vw"></div>
        </div>

        <div class="gridInfo">
        <div class="grid">
        <?php
            foreach($result1 as $filinfo){
                if($filinfo["varap"] == 1){
                    $color = "#f1a242";
                }else{
                    $color = "#b3b3b3";
                }
                                    
                echo "<a class='redirection' href=''>
                    <div class='containerInfo'>
                        <div class='imgInfo' style='background-image: url(image/".$filinfo['image'].")'></div>
                        <div class='txtInfo'>
                            <div class='titleInfo'>".$filinfo['titre']."</div>
                            <div class='dateInfo'>".$filinfo['date']."</div>
                            <div class='descriInfo' style='color:".$color."'>".$filinfo['descri']."</div>
                        </div>
                    </div></a>";
                }
        ?>
        </div>
        <div class="imgFinPdp" style="margin-left : -10vw"></div>
        </div>

        <div class="gridInfo" >
        <div class="grid">
        <?php
            foreach($result2 as $filinfo){
                if($filinfo["varap"] == 1){
                    $color = "#f1a242";
                }else{
                    $color = "#b3b3b3";
                }
                                    
                echo "<a class='redirection' href=''>
                    <div class='containerInfo'>
                        <div class='imgInfo' style='background-image: url(image/".$filinfo['image'].")'></div>
                        <div class='txtInfo'>
                            <div class='titleInfo'>".$filinfo['titre']."</div>
                            <div class='dateInfo'>".$filinfo['date']."</div>
                            <div class='descriInfo' style='color:".$color."'>".$filinfo['descri']."</div>
                        </div>
                    </div></a>";
                }
        ?></div>
        <div class="imgFinPdp" style="margin-left : -10vw"></div>
        </div>

        <div class="gridInfo" >
        <div class="grid">
        <?php
            foreach($result3 as $filinfo){
                if($filinfo["varap"] == 1){
                    $color = "#f1a242";
                }else{
                    $color = "#b3b3b3";
                }
                                    
                echo "<a class='redirection' href=''>
                    <div class='containerInfo'>
                        <div class='imgInfo' style='background-image: url(image/".$filinfo['image'].")'></div>
                        <div class='txtInfo'>
                            <div class='titleInfo'>".$filinfo['titre']."</div>
                            <div class='dateInfo'>".$filinfo['date']."</div>
                            <div class='descriInfo' style='color:".$color."'>".$filinfo['descri']."</div>
                        </div>
                    </div></a>";
                }
        ?></div>
        <div class="imgFinPdp" style="margin-left : -10vw"></div>
        </div>
    </div>

    



    <script src="JS/filinfoPage.js"></script>
</body>
</html>