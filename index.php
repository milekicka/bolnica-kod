<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Bolnica</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h1>Evidencija Pacijenata</h1>
<p class="subtitle">Unesite pacijenta i razlog posete.</p>
<form action="save.php" method="post" onsubmit="return validateForm();">
<label for="name">Pacijent</label>
<input type="text" id="name" name="name" placeholder="Ime pacijenta">
<label for="note">Razlog i broj poseta</label>
<input type="text" id="note" name="note" placeholder="Razlog dolaska">
<button type="submit">Sacuvaj</button>
</form>
<h2>Zabelezeni Dolasci</h2>
<div class="list-box">
<?php
$f="data.json";
if(file_exists($f)){
$d=json_decode(file_get_contents($f),true);
if(!empty($d)){
echo "<ul>";
foreach($d as $i){
$n=htmlspecialchars($i["name"]);
$o=htmlspecialchars($i["note"]);
echo "<li><strong>$n</strong>: $o</li>";
}
echo "</ul>";
}else{echo "<p>Nema dolazaka.</p>";}
}else{echo "<p>Nema dolazaka.</p>";}
?>
</div>
</div>
<script src="script.js"></script>
</body>
</html>
