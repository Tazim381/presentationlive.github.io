<?php

include ('config.php');

if (isset ($_GET['delete'])){
    $pid = $_GET['delete'];
    
    $query = "DELETE FROM person WHERE pid ='$pid'";
    $res = mysqli_query($conn, $query);

    if ($res) {
        header('location:showperson.php');
    } 
    
}

?>