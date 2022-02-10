<html>

<?php
include ("config.php");
?>

<head> 
     <style>
        h1{text-align: center;}

    </style>
    <title>Movie Table Form</title>
    <link rel="stylesheet" type ="text/css" href="movie3.css">
</head>


</div>


<body>
    <div>
    <form action="movie.php" method="POST">
            <h1>Movie Table Form</h1>
            <div class="formcontainer">
            <hr/>
            <div class="container">
            <label for="mid"><b>Movie Id</b></label>
                <input class="form-control" type="text" name = "mid" required>
                <label for="mtitle"><b>Movie Title</b></label>
                <input class="form-control" type="text" name = "mtitle" required>
                <label for="myear"><b>Movie Year</b></label>
                <input class="form-control" type="text" name = "myear" requred>
            </div>
            <input class="btn btn-primary" type="submit" name = "create" value ="Submit"> 
        </form>
    </div>


<?php
  if(isset($_POST['create']))
  {
    $mid = $_POST['mid'];
    $mtitle= $_POST['mtitle'];
    $myear = $_POST['myear'];


    $query = "INSERT INTO movie(mid,mtitle,myear) VALUES('$mid','$mtitle','$myear')";
    $res = mysqli_query($conn,$query);
    if($res) { echo "<h2> Data inserted </h2>";}

    echo $mid ." ".$mtitle." ".$myear;
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

