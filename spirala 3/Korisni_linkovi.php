<!DOCTYPE HTML>

<HTML>
<HEAD>
<title>Lovacko društvo</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
</HEAD>

<BODY>

<header>


<h1 id="naslov"> LD "Kaćunski zec" Kaćuni-Busovača </h1>


<div class="mojLogo1">
  <div class="L"> L </div>
  <div class="D"> D </div>
  <div class="KZ"> Kaćunski zec </div>
  
</div>
</header>

<nav class="meni">
<ul>
	<li><a href="Pocetna.php">Početna</a></li>
	<li><a href="Lov.php">Lov</a></li>
	<li><a href="O_nama.php">O nama</a></li>
	<li><a href="Korisni_linkovi.php">Korisni linkovi</a></li>
	<li><a href="Kontakt.php">Kontakt</a></li>
	<li><a href="Login.php">Login</a></li>
	<?php
	session_start();
	if(isset($_SESSION['login'])){
	print "<li><a href='UnosNovosti.php'>Dodaj novost</a></li>";
	}
	?>
	
</ul>

</nav>

<section>

<div id="linkovi">
<br>
<br>
<h4> Nekoliko korisnih linkova: </h4>
<ul>
	<li><a href="http://bih-lov.com/" target="_blank">Lovački savez BiH</a></li>
	<li><a href="http://www.ekolss.com/" target="_blank">Lovački savez Srbije</a></li>
	<li><a href="http://fmpvs.gov.ba/upload_files/1440589517-205_17_b.pdf" target="_blank">Zakon o lovstvu</a></li>
	<li><a href="http://www.browning.com/" target="_blank">Browing oružje</a></li>
	<li><a href="http://www.winchester.com/" target="_blank">Winchester oružje</a></li>

	
</ul>


</div>


</section>



</BODY>

</HTML>


