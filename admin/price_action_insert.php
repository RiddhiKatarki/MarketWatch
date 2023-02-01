<html>
<link rel = "stylesheet" type = "text/css" href = "style.css"> 
<head>
    <title>Price Tracker Register</title>
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
        $RSI = $_REQUEST['RSI'];
        $Stoch_RSI = $_REQUEST['Stoch_RSI'];
        $MACD = $_REQUEST['MACD'];
        $Rating = $_REQUEST['Rating'];


        $sql = "INSERT INTO price_action VALUES ('$Ticker', '$RSI', '$Stoch_RSI', '$MACD', '$Rating')";
        
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