<html>
<link rel = "stylesheet" type = "text/css" href = "style.css"> 
<head>
    <title>Performance Updation</title>
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
        $Q_change = $_REQUEST['Q_change'];
        $H_change = $_REQUEST['H_change'];



        $sql = "UPDATE `performance` SET `Yoy_Change`='$Yoy_Change',`Volatility`='$Volatility',`Q_change`='$Q_change',`H_change`='$H_change' WHERE Ticker = '$Ticker'";
        
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