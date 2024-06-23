<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="CSS/rdv.css">
    <link rel="stylesheet" href="CSS/all.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>

