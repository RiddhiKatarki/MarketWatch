<html>
<link rel = "stylesheet" type = "text/css" href = "style.css"> 
<head>
    <title>Trend Analysis Insertion</title>
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
        $MA_Rating = $_REQUEST['MA_Rating'];
        $SMA_20 = $_REQUEST['SMA_20'];
        $SMA_50 = $_REQUEST['SMA_50'];
        $SMA_200 = $_REQUEST['SMA_200'];


        $sql = "INSERT INTO trend_analysis VALUES ('$Ticker', '$MA_Rating', '$SMA_20', '$SMA_50', '$SMA_200')";
        
        if(mysqli_query($conn, $sql))
        {
            echo "<h3>Successfully Inserted </h3>";
            echo "<h3><a href = 'http://localhost/admin/admin.html#'> Return to admin page</a></h3>";
           // header("Location: http://localhost/admin/admin.html#");
            //die;
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