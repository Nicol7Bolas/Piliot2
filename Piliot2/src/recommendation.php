<!DOCTYPE php>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Recommendation</title>
		<link rel="stylesheet" type="text/css" href="format/style_recommendation.css" media="all"/>
	</head>
<body>
	<header>
    	<br><br><img src="format/images/hear&know_logo.png" style='position: relative;'/>
    </header><br><br>
<?php
	require_once ('main/DAO/DAO_recommendation.php');
	require_once ('main/Main.php');
	$email = $_POST['email'];
	echo '<div class="wrap_perso"><div class="introduction">You are connected with the email : '.$email.'<br></div></div>';
	try { $bdd = new PDO('mysql:host=localhost;dbname=id7501730_piliot2;, charset=utf8', 'id7501730_root', 'piliot2*esilv'); }
	catch(Exception $e) { die ('Erreur :' .$e->getMessage()); }
	$recommendations = "";
	$data = false;
	$query = 'SELECT id FROM request_history WHERE email = "'.$email.'"';
	$response = $bdd->query($query);
    if ($data = $response->fetch()) {
        $data = true;
    }
    if ($data == true) { DisplayForm($email); }
    else { DisplayError($email); }
    function DisplayForm ($email) {
    	echo '<div class="wrap_form">
		<form method="post" action="recommend_traitement.php">
			Type the name on the sensor you want to rate : <input type="text" name="sensor"/><br><br>
			Do you recommend it ?
					<select name="recommendation" class="styled">
						<option value="yes">I recommend</option>
						<option value="no">I dont recommend</option>
					</select><br><br>
			<input type="text" value="<?php $email ?>" style="display:none"/>
			<button class="button_perso" type="submit">Share my opinion</button>
		</form></div>';
	}
	function DisplayError($email) {
		echo 'You cant rate a sensor because no research have been done with the email '.$email;
	}
	?>
</body>
</html>


