<?php

//$conn =new mysqli('localhost','root','','nproject');
// if(!$conn)
// {
//     die('connection Failed :' .$conn->connection_error);
// }

$conn = mysqli_connect('localhost', 'root');

mysqli_select_db($conn,'nproject');

if($conn){
    echo "";
}
else{
    echo "not connected";
}


?>