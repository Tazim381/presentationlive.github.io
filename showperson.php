
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="btnStyle.css">
    <link rel="stylesheet" href="showperson.css">
</head>


<body>
<center>
<?php

    $conn = mysqli_connect("localhost", "root", "", "cinema");
    if ($conn) {
        $query = "SELECT * FROM person";
        $res = mysqli_query($conn, $query);
      ?>
           
          <table  border="3" style="width: 80%;">
                <tr>
                   
                    <th style="width: 20%;"><?php echo "Person Id" ?></th>
                    <th style="width: 20%;"><?php echo "Person Name"?></th>
                    <th style="width: 20%;"><?php echo "Peron Sex"?></th>
                    <th style="width: 20%;"><?php echo "Person Date Of Birth"?></th>


                    <th style="width: 20%;" colspan="2">Action</th>
                </tr>
            </table>
      <?php        $i = 1;
        while ($row = mysqli_fetch_assoc($res)){
            ?> 
            
            <table  border="3" style="width: 80%;">
                <tr>
                    
                    <th style="width: 20%;"><?php echo $row['pid'] ?></th>
                    <th style="width: 20%;"> <?php echo $row['pname'] ?> </th>
                    <th style="width: 20%;" > <?php echo $row['psex'] ?></th>
                    <th style="width: 20%;" > <?php echo $row['pdob'] ?></th>
                    <th style="width: 10%;">
                    <a href="deleteperson.php?delete=<?php echo $row['pid']; ?>" class="delete">Delete</a>
                    </th>
                    <th style="width: 10%;">
                    <a href="updateperson.php?update=<?php echo $row['pid']; ?>" id="edit">Edit</a>

                    </th>
                </tr>
            </table>
            
            
            <?php
        }
    }

?>

<br>
    <br>
    <button style="background-color:green;" onclick="window.location.href='index.php';">
     <h3> Goto Homepage </h3>
    </button>
</center>
</body>


