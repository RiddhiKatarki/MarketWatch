<html>
<link rel = "stylesheet" type = "text/css" href = "style.css"> 
<head>
    <title>Performance Insertion</title>
</head>

<body>
    <center>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "price_tracker");

        if($conn === false)
        {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        $Ticker = $_REQUEST['Ticker'];
        $Yoy_Change = $_REQUEST['Yoy_Change'];
        $Volatility = $_REQUEST['Volatility'];
        $M3_change = $_REQUEST['M3_change'];
        $M6_change = $_REQUEST['M6_change'];



        $sql = "INSERT INTO performance VALUES ('$Ticker', '$Yoy_Change', '$Volatility', '$M6_change', '$M3_change')";
        
        if(mysqli_query($conn, $sql))
        {
            echo "<h3>Successfully Inserted</h3>";
            echo "<h3><a href = 'http://localhost/admin/admin.html#'> Return to admin page</a></h3>";
            //header("Location: ");
        } 
        
        else
        {
            echo "ERROR:$sql. "
                . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>