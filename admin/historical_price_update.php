<html>
<link rel = "stylesheet" type = "text/css" href = "style.css"> 
<head>
    <title>Asset List Updation</title>
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
        $ATH = $_REQUEST['ATH'];
        $ATL = $_REQUEST['ATL'];
        $Y_High = $_REQUEST['Y_High'];
        $Y_Low = $_REQUEST['Y_Low'];

        $sql = "UPDATE `historical_price` SET `ATH`='$ATH',`ATL`='$ATL',`Y_High`='$Y_High',`Y_Low`='$Y_Low' WHERE Ticker = '$Ticker'";
            
        if(mysqli_query($conn, $sql))
        {
            echo "<h3>Table Successfully Updated</h3>";
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