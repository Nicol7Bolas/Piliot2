<?php
require_once('Tools.php');
class ElementSimilar
{
    public $percentage;
    public $data = array();

    public function __construct($data, $percentage)
        $this->percentage = $percentage;
        $this->data = $data;
    }
}
function f_find_similar($email,$name,$phone,$organism,$project_title){
    $saved = array();
    $query1 = 'SELECT * FROM request_history WHERE `email` != "'.$email.'" AND `name` != "'.$name.'" AND `phone` != "'.$phone.'" AND `organism` != "'.$organism.'" AND `project_title` != "'.$project_title.'"';
    $query2 = 'SELECT * FROM request_history WHERE `email` = "'.$email.'" AND `name` = "'.$name.'" AND `phone` = "'.$phone.'" AND `organism` = "'.$organism.'" AND `project_title` = "'.$project_title.'"';
    $project;
    $response = $GLOBALS['bdd']->query($query2);
    if(!$response) { return null; }
    else {
        if ($data = $response->fetch()) {
            $project = $data;
        }
    }
    $response = $GLOBALS['bdd']->query($query1);
    if(!$response) { return null; }
    else {
        while ($data = $response->fetch()) {
            $good = 0; $total = 0;
            for($i = 0 ; $i < count($data) ; i++) {
                if(strpos( $project[$i], "/" ) !== false){
                    $temp = decode_string_to_list($project[$i]);
                    foreach($temp as $value) {
                        if ($value != "idk") {
                            $total = $total + 1;
                            if(strpos( $data[$i], $value) !== false){
                                $good = $good + 1;
                            }
                        }
                    }
                }
                else {
                    if($project[$i] != "idk") {
                        $total = $total + 1;
                        if(strpos( $project[$i], $data[$i]) !== false){
                            $good = $good + 1;
                        }
                    }
                }
            }
            $saved[] = ElementSimilar($data,$good/$total);
        }
    }
    if (count($out) == 0) { $out[0] = new Results("",0,array(),"",""); }
    return $out;
}

function f_similar($email,$name,$phone,$organism,$project_title){ }

?>
