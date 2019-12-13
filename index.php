<!DOCTYPE html>
<html lang="fr">
<head>
    <link href="https://fonts.googleapis.com/css?family=Turret+Road&display=swap" rel="stylesheet">
    <link href="resources/css/style.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/8fb1e1fba5.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>Nom restaurant</title>
</head>
<body>

<?php
// Si l'étiquette 'plat' n'existe pas encore dans le tableau associatif $_GET (premier appel au fichier)
if (!isset($_REQUEST['plat'])) {
    $_REQUEST["plat"]="";
    $_REQUEST["prix"]=0;
    $total=0;
}
?>

<div class="header">
    <h1>Nom restaurant</h1>
</div>
<form action="index.php" method="post">
    <div class="bloc-table">
        <div class="bloc1">
            <div class="table">
                <a href="index.php?plat=test1&prix=1.1">
                    <img class="plat" src="resources/images/test.png">
                </a>
            </div>
        </div>
        <div class="bloc2">
            <div class="table">
                <a href="index.php?plat=test2&prix=1.1">
                    <img class="plat" src="resources/images/test.png">
                </a>
            </div>
        </div>
        <div class="bloc3">
            <div class="table">
                <a href="index.php?plat=test3&prix=1.1">
                    <img class="plat" src="resources/images/test.png">
                </a>
            </div>
        </div>
        <div class="bloc4">
            <div class="table">
                <a href="index.php?plat=test4&prix=1.1">
                    <img class="plat" src="resources/images/test.png">
                </a>
            </div>
        </div>
        <div class="bloc5">
            <div class="table">
                <a href="index.php?plat=test5&prix=1.1">
                    <img class="plat" src="resources/images/test.png">
                </a>
            </div>
        </div>
    </div>
</form>

<div class="bloc-table2">
    <div class="bloc11">
        <div class="table">
            <h1>Liste commande</h1>
            <?php
            $commande="";
            $prix="";

            $commande = $_REQUEST['plat'];
            $prix = $_REQUEST['prix'];
            $liste_commande_prix= array($commande => $prix );
            $liste_commande = array_push($liste_commande_prix,$commande,$prix);

            if ($commande != "")
            {

                //echo "-" . $commande . "    " . $prix;
                foreach ($test as $commande => $prix)
                {
                    echo "l'article " . $commande . " vaut " . $prix . "\n";
                    echo "<br>";
                }
            }
            else
            {
                echo "";
            }
            ?>
        </div>
    </div>
    <div class="bloc12">
        <div class="table">
            <h2>Total:</h2>
            <?php

            //$total=$total+$prix;
            echo $total;
            ?>
        </div>
    </div>
</div>


<i class="far fa-grin-tongue-squint"></i>
<div class="footer">
    <a>Crée par</a>
</div>
</body>
</html>