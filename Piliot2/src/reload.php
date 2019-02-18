<!DOCTYPE php>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Reload</title>
        <link rel="stylesheet" type="text/css" href="format/main_reload.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="format/main_result.css" media="all"/>
    </head>
<body>
    <header>
            <br><br><img src="format/images/hear&know_logo.png" style='position: relative;'/>
    </header><br><br>

    <?php

    try { $bdd = new PDO('mysql:host=localhost;dbname=id7501730_piliot2;, charset=utf8', 'id7501730_root', 'piliot2*esilv'); }
    catch(Exception $e) { die ('Erreur :' .$e->getMessage()); }

    $email = $_POST['email'];
    $tabName = array();
    $tabData = array();
    $tabTitle = array();
    $tabN = array();
    $tabO = array();
    $tabD = array();

    $query = "SELECT `title`, `name`, `organism`, `date` FROM request_history WHERE `email` = '".$email."'";
    $response = $bdd->query($query);
    if(!$response) { return null; }
    else {
        while ($data = $response->fetch()) {
            $tabTitle[] = $data['title'];
            $tabN[] = $data['name'];
            $tabO[] = $data['organism'];
            $tabD[] = $data['date'];
        }
    }
    echo '<div class="wrap_perso"><div class="introduction">You are connected with the email : '.$email.'<br></div>';
    if (count($tabTitle)  > 0) {
        echo '<div class="introduction2">Select below the project you want to load</div></div>';
        echo '
        <div class="limiter">
            <div class="wrap-table100">
                <div class="table100 ver1 m-b-110">
                    <div class="table100-head">
                        <table>
                            <thead>
                                <tr class="row100 head">
                                    <th class="cell100 column5">Title</th>
                                    <th class="cell100 column5">Creator</th>
                                    <th class="cell100 column5">Organism</th>
                                    <th class="cell100 column5">Date of creation</th>
                                    <th class="cell100 column5">Goto</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="table100-body js-pscroll">
                        <table>
                            <tbody>';
                                for($i = 0 ; $i < count($tabTitle); $i++) {
                                    echo '<tr class="row100 body">';
                                    echo '<td class="cell100 column5">'.$tabTitle[$i].'</td>';
                                    echo '<td class="cell100 column5">'.$tabN[$i].'</td>';
                                    echo '<td class="cell100 column5">'.$tabO[$i].'</td>';
                                    echo '<td class="cell100 column5">'.$tabD[$i].'</td>';
                                    $query1 = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = N'request_history'";
                                    $query2 = "SELECT * FROM request_history WHERE `email` = '".$email."' AND `title` = '".$tabTitle[$i]."'";
                                    $response = $GLOBALS['bdd']->query($query1);
                                    if(!$response) { return null; }
                                    else {
                                        while ($data = $response->fetch()) {
                                            $tabName[] = $data['COLUMN_NAME'];
                                        }
                                    }
                                    $response = $GLOBALS['bdd']->query($query2);
                                    if(!$response) { return null; }
                                    else {
                                        while ($data = $response->fetch()) {
                                            for($i = 0; $i < count($tabName); $i++) {
                                                $tabData[] = $data[$i];
                                            }
                                        }
                                    }
                                    if (count($tabData) > 0) {
                                        echo '<td class="cell100 column5">';
                                        echo '<form method="post" action = "traitement.php">';
                                        for($i = 1; $i < count($tabData) ; $i++){
                                            echo '<input type="hidden" name="'.$tabName[$i].'" value="'.$tabData[$i].'"/>';
                                        }
                                        echo '<input type="hidden" name="requestType" value ="existing"/>';
                                        echo '<button class="button_perso" type="submit">Load project</button></form>';
                                        echo '</td>';
                                    }
                                    echo '</tr>';
                                }
                                echo '
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>';
    }
    else { 
        echo '<div class="introduction2">You didnt saved any project with the email</div></div><br><div class="button2"><a class="link" href="../">Click here to start a new project</a></div>';
    }
    ?>
</body>
</html>