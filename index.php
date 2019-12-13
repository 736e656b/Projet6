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

<div class="header">
    <h1>Nom restaurant</h1>
</div>
<form action="traitement.php" method="get">
    <div class="bloc-table">
        <div class="bloc1">
            <div class="table">
                <a href="traitement.php?plat=test1&prix=1.1">
                    <img class="entrée" src="resources/images/test.png">
                </a>
            </div>
        </div>
        <div class="bloc2">
            <div class="table">
                <a href="traitement.php?plat=test2&prix=1.1">
                    <img class="plat" src="resources/images/test.png">
                </a>
            </div>
        </div>
        <div class="bloc3">
            <div class="table">
                <a href="traitement.php?plat=test3&prix=1.1">
                    <img class="desert" src="resources/images/test.png">
                </a>
            </div>
        </div>
    </div>
</form>
<i class="far fa-grin-tongue-squint"></i>
<a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i> </a>
<div class="footer">
    <a>Crée par</a>
</div>
</body>
</html>