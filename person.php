<html>

<?php
include ("config.php");
?>

<head> 
<style>
        h1{text-align: center;}

    </style>
    <title>Person Table Form</title>
    <link rel="stylesheet" type ="text/css" href="person.css">
</head>


<body>
    <div>
    <form action="person.php" method="POST">
            <h1>Person Table Form</h1>
            <div class="formcontainer">
            <hr/>
            <div class="container">
            
            <label for="pid"><b>Person Id</b></label><br>
                        <input class="form-control" type="text" name = "pid" required><br>

                        <label for="pname"><b>Person Name</b></label><br>
                        <input class="form-control" type="text" name = "pname" required><br>

                        <label for="psex"><b>Person Sex</b></label><br>
                        <input class="form-control" type="text" name = "psex" required><br>

                        <label for="pdob"><b>Person Date Of Birth</b></label><br>
                        <input class="form-control" type="text" name = "pdob" requred><br>
            </div>
            <input class="btn btn-primary" type="submit" name = "create" value ="Submit"> 
        </form>
    </div>


<?php
  if(isset($_POST['create']))
  {
    $pid = $_POST['pid'];
    $pname = $_POST['pname'];
    $psex= $_POST['psex'];
    $pdob = $_POST['pdob'];
    $query = "INSERT INTO person(pid,pname,psex,pdob) VALUES('$pid','$pname','$psex','$pdob')";
    $res = mysqli_query($conn,$query);
    if($res) { echo "<h2> Data inserted </h2>";}
  

    echo $pid." ".$pname ." ".$psex." ".$pdob;
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
    <br>
    <button style="background-color:green;" onclick="window.location.href='index.php';">
     <h3> Goto Homepage </h3>
    </button>

</body>
</html>


