<?php
include ('config.php');

$first = '';
$last = '';

if (isset ($_GET['update'])){
    $mid = $_GET['update'];
    if($mid)
    {
        $query = "SELECT * FROM role WHERE mid = '$mid'";
        $res = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($res);
        $first = $row['pid'];
        $last = $row['part'];

    }

    if (isset ($_POST['update'])){
        $first = $_POST['pid'];
        $last = $_POST['part'];
        $query = "UPDATE role SET pid = '$first', part = '$last' WHERE mid = '$mid' ";
        $res = mysqli_query($conn, $query);
        if ($res){
            header("location:Showrole.php");
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
                        <label for="Person Id"><b>Person Id</b></label>
                        <input class="form-control" type="text" name = "pid" value =<?php echo $first ?> required>

                        <label for="Part"><b>Part</b></label>
                        <input class="form-control" type="text" name = "part" value =<?php echo $last ?> required>

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