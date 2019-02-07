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
    </header>

    <?php

    function f_table_display() {

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
            for($i = 0 ; $i < tabTitle.length ; $i++) {
                echo '<tr class="row100 body">';
                echo '<td class="cell100 column1">'.$tabTitle[$i].'</td>';
                echo '<td class="cell100 column1">'.$tabN[$i].'</td>';
                echo '<td class="cell100 column1">'.$tabO[$i].'</td>';
                echo '<td class="cell100 column1">'.$tabD[$i].'</td>';
                $query1 = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = N'request_history'";
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
                    if ($data = $response->fetch()) {
                        for($i = 0; $i < count($tabName); $i++) {
                            $tabData[] = $data[$i];
                        }
                    }
                }
                if (count($tabData) > 0) {

                    echo '<form method="post" action = "traitement.php">';
                    for($i = 1; $i < count($tabData) ; $i++){
                        echo '<input type="hidden" name="'.$tabName[$i].'" value="'.$tabData[$i].'"/>';
                    }
                    echo '<input type="hidden" name="requestType" value ="existing"/>';
                    echo '<button type="submit">Click here to go to your previous request</button></form>';
                }
                echo '</tr>';
            }
        }

    ?>

    <div class="limiter">
        <div class="wrap-table100">
            <div class="table100 ver1 m-b-110">
                <div class="table100-head">
                    <table>
                        <thead>
                            <tr class="row100 head">
                                <th class="cell100 column1">Title</th>
                                <th class="cell100 column2">Creator</th>
                                <th class="cell100 column4">Organism</th>
                                <th class="cell100 column3">Date of creation</th>
                                <th class="cell100 column3">Goto</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="table100-body js-pscroll">
                    <table>
                        <tbody>';
                            f_table_display()
                        </tbody>
                    </table>
                </div>'
            </div>
        </div>
    </div>';
<?php


</body>
</html>

