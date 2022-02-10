<?php
include ('config.php');

$first = '';
$last = '';

if (isset ($_GET['update'])){
    $pid = $_GET['update'];
    if($pid)
    {
        $query = "SELECT * FROM person WHERE pid = '$pid'";
        $res = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($res);
        $first = $row['pname'];
        $last = $row['psex'];

    }

    if (isset ($_POST['update'])){
        $first = $_POST['pname'];
        $last = $_POST['psex'];
        $query = "UPDATE person SET pname = '$first', psex = '$last' WHERE pid = '$pid' ";
        $res = mysqli_query($conn, $query);
        if ($res){
            header("location:Showperson.php");
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
                        <label for=" first name"><b>Person Name</b></label>
                        <input class="form-control" type="text" name = "pname" value =<?php echo $first ?> required>

                        <label for=" last name"><b>Person Sex</b></label>
                        <input class="form-control" type="text" name = "psex" value =<?php echo $last ?> required>

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