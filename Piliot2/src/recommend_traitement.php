<!DOCTYPE php>
<html>
<body>
<?php
require_once ('main/DAO/DAO_recommendation.php');
require_once ('main/Main.php');
$class = $_POST['class'];
$sensor = $_POST['sensor'];
$recommendation = $POST['recommendation'];
try { $bdd = new PDO('mysql:host=localhost;dbname=id7501730_piliot2;, charset=utf8', 'root', ''); }
catch(Exception $e) { die ('Erreur :' .$e->getMessage()); }
$request = f_checking_sensor($class,$sensor);
if ($request > 0){
	$query = f_creation_recommendation($email,$sensor);
	$query2 = f_editing_recommendation($email,$sensor,$recommendation);
	if($recommendation === "yes"){
		$request = "UPDATE ".$class." SET recommendation += 1'/' WHERE `model` = ".$sensor;
	}
	else{
		$request = "UPDATE ".$class." SET recommendation -= 1'/' WHERE `model` = ".$sensor;
	}

}
else {
	header("Location : recommendation?error=true");
}
/*$recommendations = "";
$query = f_getting_recommendation($email);
$response = $bdd->query($query);
$data = $reponse[0]['c'];
if ($data > 0) {
	$recommendations = f_getting_recommendation($email);
}
else{
	header("Location : recommend_identification?error=true");
}*/
?>
	<form method="post">
		Your recommendation has been taken in account ! Thank you for your support <input type="text" name="result" value=""/>
	</form>
</body>
</html>