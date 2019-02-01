<html>
<body>
<?php 
	$email = $_POST['email'];
	$title = $_POST['title'];
	$tabName = array();
	$tabData = array();
	try { $bdd = new PDO('mysql:host=localhost;dbname=id7501730_piliot2;, charset=utf8', 'id7501730_root', 'piliot2*esilv'); }  
	catch(Exception $e) { die ('Erreur :' .$e->getMessage()); }
	$query1 = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = N'request_history'"
	$query2 = "SELECT * FROM request_history WHERE `email` = '".$email."' AND `title` = '".$title."'";	
	$response = $bdd->query($query1);
	if(!$response) { return null; }
    else {
        while ($data = $response->fetch()) {
            $tabName[] = $data['COLUMN_NAME'];
        }
    }
    $response = $bdd->query($query2);
	if(!$response) { return null; }
    else {
        while ($data = $response->fetch()) {
        	for($i = 1; $i < count($data); $i++) {
        		$tabData[] = $data[$i];
        	}
        }
    }
    if (count($tabData)) > 0) {
		echo 'Request found';

		echo '<form method="post" action = "traitement.php">'
		for($i = 1; $i < count($tabData) ; $i++){
			echo '<input type="hidden" name="'.$tabName[$i].'" value="tabData[$i]"/>'
		}
		echo '<input type="hidden" name="requestType" value ="existing"/>'
		echo '<button type="submit">Click here to go to your previous request</button></form>'
	}
?>
</body>
</html>

