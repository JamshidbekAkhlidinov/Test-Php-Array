<?php

include_once "data.php";

if(isset($_POST['answer'])){
    $count = 0;
    foreach($_POST['answer'] as $key=>$answer){
        // print_r($data[$key]['answers'][$answer]);
        if($data[$key] && $data[$key]['answers'][$answer]['status']===true){
            $count++;
        }
    }
    
    print_r($count." ta to'g'ri");
}


?>