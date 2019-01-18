<?php
require_once ('main/DAO/DAO_recommendation.php');
require_once ('main/Main.php');
$email = $_POST['email'];
try { $bdd = new PDO('mysql:host=localhost;dbname=id7501730_piliot2;, charset=utf8', 'id7501730_root', 'piliot2*esilv'); }
catch(Exception $e) { die ('Erreur :' .$e->getMessage()); }
$recommendations = "";
$query = f_getting_recommendation($email);
$response = $bdd->query($query);
$data = $reponse[0]['c'];
if ($data > 0) {
	$recommendations = f_getting_recommendation($email);
}
else{
	header("Location : recommend_identification?error=true");
}
?>
<html>
<body>
	<form method="post" action="recommend_traitement.php">
		Type the name on the sensor you want to recommend or not <input type="text" name="sensor" value=""/>
		I recommend <input type="checkbox" value="yes"/>
		I dont recommend <input type="checkbox" value="no"/>
		<input type="text" value="<?php $email ?>" style="display:none"/>
	</form>
</body>
</html>


