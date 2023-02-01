<html>
<link rel = "stylesheet" type = "text/css" href = "style.css"> 
<head>
    <title>Historical Price Insertion</title>
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


        $sql = "INSERT INTO historical_price VALUES ('$Ticker', '$ATH', '$ATL', '$Y_High', '$Y_Low')";
        
        if(mysqli_query($conn, $sql))
        {
            echo "<h3>Successfully Inserted</h3>";
            echo "<h3><a href = 'http://localhost/admin/admin.html#'> Return to admin page</a></h3>";
            //header("Location: ");
        }  
        else
        {
            //echo "<h3>Asset does not exist </h3>";
            header("Location : error.html");
            /*echo "ERROR:$sql. "
                . mysqli_error($conn);*/
            
        }
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>