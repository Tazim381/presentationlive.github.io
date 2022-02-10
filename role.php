<html>

<?php
include ("config.php");
?>

<head> 
    <title>User  ragistration form</title>
    <link rel="stylesheet" type ="text/css" href="role.css">
</head>


<body>
    <div>
    <form action="role.php" method="POST">
            <h1>Role Table Form</h1>
            <div class="formcontainer">
            <hr/>
            <div class="container">
                       <label for="mid"><b>Movie Id</b></label><br>
                        <input class="form-control" type="text" name = "mid" required><br>

                        <label for="pid"><b>Person Id</b></label><br>
                        <input class="form-control" type="text" name = "pid" required><br>

                        <label for="part"><b>Part</b></label><br>
                        <input class="form-control" type="text" name = "part" required><br>
            </div>
            <input class="btn btn-primary" type="submit" name = "create" value ="Submit"> 
        </form>
    </div>


<?php
  if(isset($_POST['create']))
  {
    $mid = $_POST['mid'];
    $pid = $_POST['pid'];
    $part= $_POST['part'];

   $query = "INSERT INTO role(mid,pid,part) VALUES('$mid','$pid','$part')";
    $res = mysqli_query($conn,$query);
    if($res) { echo "<h2> Data inserted </h2>";}
    

    echo $mid." ".$pid ." ".$part;
}



if(isset($_POST['create']))
  {
?>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@8"></script>
   <script type="text/javascript">


       $(function()
       {
        Swal.fire({
         'title': 'congratulations',
         'text':'Your information enter tazims database',
         'type':'success'
        })
       }      
       );
<?php
    }
?>
</script>

    <br>
    <button style="background-color:green;" onclick="window.location.href='index.php';">
     <h3> Goto Homepage </h3>
    </button>

</body>
</html>


