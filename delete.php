<?php

include ('config.php');

if (isset ($_GET['delete'])){
    $id = $_GET['delete'];
    
    $query = "DELETE FROM forminformation WHERE Id ='$id'";
    $res = mysqli_query($conn, $query);

    if ($res) {
        header('location:Showdata.php');
    } 
    
}

?>