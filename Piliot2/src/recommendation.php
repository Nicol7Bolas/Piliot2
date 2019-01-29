<?php
require_once ('main/DAO/DAO_recommendation.php');
require_once ('main/Main.php');
$email = $_POST['email'];
try { $bdd = new PDO('mysql:host=localhost;dbname=id7501730_piliot2;, charset=utf8', 'id7501730_root', 'piliot2*esilv'); }
catch(Exception $e) { /*die ('Erreur :' .$e->getMessage());*/ }
$recommendations = "";
$query = f_checking_recommendation($email);
if ($query > 0) {
	header("Location : recommend_identification?error=true");
}
else{
$recommendations = f_getting_recommendation($email);
/*$response = $bdd->query($query);
$data = $reponse[0]['c'];*/

}
?>
<html>
<body>
	<form method="post" action="recommend_traitement.php">
		Choose the class of the sensor you recommend or not<br><br>
				<select name="class" class="styled">
					<option value="1">Temperature sensor</option>
					<option value="2">Humidity sensor</option>
					<option value="3">Pressure sensor</option>
					<option value="4">Shiel sensor</option>
					<option value="5">Movement sensor</option>
				</select><br><br>
		Type the name on the sensor you want to recommend or not <br><br><input type="text" name="sensor" value=""/><br><br>
		Do you recommend it ?<br><br>
				<select name="recommendation" class="styled">
					<option value="yes">I recommend</option>
					<option value="no">I don't recommend</option>
				</select><br><br>
		<input type="text" value="<?php $email ?>" style="display:none"/>
		<button type="submit"/>
	</form>
</body>
</html>


