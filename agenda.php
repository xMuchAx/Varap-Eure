<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/all.css">
    <link rel="stylesheet" href="CSS/agenda.css">

</head>
<?php
    
    $pdo = new PDO('mysql:host=localhost;dbname=varap', 'root', '');
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
<body>
<?php
    require("menu.html");
?>
    <img class="imgP" src="image/top2.png" alt="" srcset="">

    <h3>Varap'Eure - <strong>Votre agenda</strong></h3>

    <h1>VOTRE AGENDA<span style="color: rgb(190, 190, 190); font-weight : 400"> ET VOS PROCHAIN RENDEZ VOUS</span></h1>

    <div class="containerAgenda">
        <div class="containerRDV">
            <?php
            foreach($result as $rdv){
                echo "
                <div class='content1rdv'>
                    <img class='imgRDV' src='./image/".$rdv['image']."' alt='' srcset=''>
                    <div class.contentText>
                        <div class='dateRdv'>>".$rdv['date']."</div>
                        <div class='descriRdv'>".$rdv['descri']."</div>
                        <div class='contactRdv'>".$rdv['contact']."</div>
                    </div>
                </div>";
            }
        ?>        
        </div>
    </div>
    <img class="pdp"  src="image/finpdp.png" alt="" srcset="">


</body>
</html>