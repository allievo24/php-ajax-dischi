<?php   

include '../database.php';


//foreach($database as $data){
   // echo $data['title'];
//}

foreach($database as $data){
    echo $data['title']  ;
    echo '<br>';
    echo $data['author']  ;
    echo '<br>';
    echo $data['year']  ;
    echo '<br>';
    echo $data['poster']  ;
    echo '<br>';
    echo $data['genre']  ;
    echo '<br>';
    echo '<br>';

}











?>