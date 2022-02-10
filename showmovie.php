
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="btnStyle.css">
    <link rel="stylesheet" href="movie2.css">
</head>

<body>
<center>
<?php

    $conn = mysqli_connect("localhost", "root", "", "cinema");
    if ($conn) {
        $query = "SELECT * FROM movie";
        $res = mysqli_query($conn, $query);
      ?>
           
          <table  border="3" style="width: 80%;">
                <tr>
                   
                    <th style="width: 20%;"><?php echo "Movie Id" ?></th>
                    <th style="width: 20%;"><?php echo "Movie Year"?></th>
                    <th style="width: 20%;"><?php echo "Release Year"?></th>
                    <th style="width: 20%;" colspan="2">Action</th>
                </tr>
            </table>
      <?php        $i = 1;
        while ($row = mysqli_fetch_assoc($res)){
            ?> 
            
            <table  border="3" style="width: 80%;">
                <tr>
                    
                    <th style="width: 20%;"><?php echo $row['mid'] ?></th>
                    <th style="width: 20%;"> <?php echo $row['mtitle'] ?> </th>
                    <th style="width: 20%;" > <?php echo $row['myear'] ?></th>
                    <th style="width: 10%;">
                    <a href="deletemovie.php?delete=<?php echo $row['mid']; ?>" class="delete">Delete</a>
                    </th>
                    <th style="width: 10%;">
                    <a href="updatemovie.php?update=<?php echo $row['mid']; ?>" id="edit">Edit</a>

                    </th>
                </tr>
            </table>
            
            
            <?php
        }
    }

?>
<body>
    <br>
    <br>
    <button style="background-color:green;" onclick="window.location.href='index.php';">
     <h3> Goto Homepage </h3>
    </button>


</center>
</body>