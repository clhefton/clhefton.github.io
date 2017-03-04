<html>
<head>
</head>
<body>
<p> Echo email here to check if session worked: <span> <?php echo $SOME_VARIABLE; ?> </span></p>
<a href="index.php">Go back to home page</a>

<p> If you want to dynamically render an entire table: </p>

<?php
    echo "<table><thead>Header-col1 </thead><tbody>";

    for ($x=0; $x<=5; $x++;){
        echo "<tr><td>".$SOME_VARIABLE."</td></tr>";
    }
    echo "</tbody></table>";
?>

</body>
</html>
