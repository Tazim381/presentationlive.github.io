<?php

include ('config.php');

if (isset ($_GET['delete'])){
    $mid = $_GET['delete'];
    
    $query = "DELETE FROM movie WHERE mid ='$mid'";
    $res = mysqli_query($conn, $query);

    if ($res) {
        header('location:showmovie.php');
    } 
    
}

?>