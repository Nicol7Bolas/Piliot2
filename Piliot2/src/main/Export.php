<?php
require_once('Class/Results.php');

function ExportCSV ($sensors) {
    $path = 'Controller/Temp/temp.csv';
    $separation = ',';
    $link1 = $_SERVER['PHP_SELF'];
    $file = fopen($path, 'w+');
    fprintf($file, chr(0xEF).chr(0xBB).chr(0xBF));
    foreach($sensors as $element) {
        $link2 = 'ressource/capteur/'.$element->model.'.pdf';
        $link = $link1.$link2;
        $temp = array($element->model,$element->percentage,$element->error,$element->recommendation,$element->communication,$link);
        fputcsv($file, $temp, $separation);
    }
    fclose($file);
    header('Location: http://www.votresite.com/pageprotegee.php');
    exit();
}
?>