<html>
<link rel = "stylesheet" type = "text/css" href = "style.css"> 
<head>
    <title>Overview Insertion</title>
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
        $Price = $_REQUEST['Price'];
        $D_Change = $_REQUEST['D_Change'];
        $Volume = $_REQUEST['Volume'];
        $Technical_Rating = $_REQUEST['Technical_Rating'];



        $sql = "INSERT INTO overview VALUES ('$Ticker', '$Price', '$D_Change', '$Volume', '$Technical_Rating')";
        
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