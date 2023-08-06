<html>
    <head>
        <title> editable</title>
</head>
<body>
    <?php

    $con =mysqli_connect('127.0.0.1','root','');
    mysqli_select_db($con,'cod');
    $sql="SELECT * FROM cod";
    $records=mysqli_query($con,$sql);
    ?>
    <p>Gender</p>
    <?php
    while($row=mysqli_fetch_array($records)){
        echo"<p><form action =update.php method=post>";
        echo"<p><input type=text gender=gender value='".$row['gender']."'</p>";
    }
    ?>