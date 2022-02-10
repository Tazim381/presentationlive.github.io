<?php
include ('config.php');

$first = '';
$last = '';

if (isset ($_GET['update'])){
    $mid = $_GET['update'];
    if($mid)
    {
        $query = "SELECT * FROM movie WHERE mid = '$mid'";
        $res = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($res);
        $first = $row['mtitle'];
        $last = $row['myear'];

    }

    if (isset ($_POST['update'])){
        $first = $_POST['mtitle'];
        $last = $_POST['myear'];
        $query = "UPDATE movie SET mtitle = '$first', myear = '$last' WHERE mid = '$mid' ";
        $res = mysqli_query($conn, $query);
        if ($res){
            header("location:Showmovie.php");
            die();
        } else {
            echo "something wrong";
        }
    }
    
}

?>
<head> 
    <title>User  ragistration form</title>
    <link rel="stylesheet" type ="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type ="text/css" href="style.css">
</head>
<body>
    <div>
        <form action="" method="post">
            <div class ="container">
                <div class="row justify-content-center"> 
                    <div calss ="col-sm-3"> 
                        <h1>Update Form</h1>
                        <p><b>Fill up the form with correct values</b></p>
                        <br>
                        <label for="Movie Title"><b>Movie Title</b></label>
                        <input class="form-control" type="text" name = "mtitle" value =<?php echo $first ?> required>

                        <label for="Movie Year"><b>Movie Year</b></label>
                        <input class="form-control" type="text" name = "myear" value =<?php echo $last ?> required>

                        <br>
                        <input class="btn btn-primary" type="submit" name = "update" value ="UPDATE">
                        
                        <br>
                        <br>
                       
                    </div>

                </div>

            </div>
        </form>
    </div>
</body>