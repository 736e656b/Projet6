<HTML>
<HEAD>
	<TITLE>McDonald's France, restauration rapide</TITLE>
	<link rel="shortcut icon" href="Images/icon.png">
	<link rel="stylesheet" type="text/css" href="style.css">
</HEAD>
<BODY>

<center>
<?php 
		// Si l'étiquette 'plat' n'existe pas encore dans le tableau associatif $_GET (premier appel au fichier)
		if (!isset($_GET['plat'])) {
			$_GET["plat"]="";
			$_GET["prix"]=0;
		}
?>

<img src="Images/shadow.png">


<TABLE class="tab">
<td>
	<h2>Sandwichs</h2>
		<a href="ExempleDebutRestau.php?plat=BigMac&prix=5.50"><img class="plat"  title="Big Mac - 5,50 €" SRC="Images/menu/big_mac.png"></img></a>
		<a href="ExempleDebutRestau.php?plat=McFarmer&prix=7"><img class="plat"  title="Mc Farmer - 7,00 €" SRC="Images/menu/mcfarmer.png"   ></img></a>
</td>
<td>
	<h2>Frites + Salades</h2>
		<a href="ExempleDebutRestau.php?plat=Frites&prix=1.50"><img class="plat"  title="Frites - 1,50 €" SRC="Images/menu/frites.png"   ></img></a>
		</td>
<tr>
<td>
	<h2>Boissons</h2>
		<a href="ExempleDebutRestau.php?plat=Coca-Cola&prix=1.10"><img class="plat"  title="Coca-Cola - 1,10 €" SRC="Images/menu/logo_cr.png"   ></img></a>
		<a href="ExempleDebutRestau.php?plat=Coca-ColaZero&prix=1.20"><img class="plat"  title="Coca-Cola Zero - 1,20 €" SRC="Images/menu/logo_cz.png"   ></img></a>
		</td>
<tr>
<td>
	<h2>Desserts</h2>
		<a href="ExempleDebutRestau.php?plat=Sundae Caramel&prix=1.90"><img class="plat"  title="Sundae Caramel - 1,90 €" SRC="Images/menu/sundae_caramel.png"   ></img></a>
		</td>
</TABLE>

<?php 
		if ($_GET['plat']!="") {
			echo "Commande : ". $_GET['plat'];
		}
		else{
			echo('Choisissez votre commande');
		}
?>

<div class="bas" >
Réalisé par <br/> F. Bravais &nbsp;&nbsp;
</div>




		
	
</center>
</BODY>
</HTML>
