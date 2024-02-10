<?php

$conn = mysqli_connect('localhost', 'root', '', 'orphange_system');

if($conn){
    echo 'sucess';
}

else{
    echo 'failed';
}

?>