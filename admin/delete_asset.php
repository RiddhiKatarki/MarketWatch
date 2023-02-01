<html>
<link rel = "stylesheet" type = "text/css" href = "style.css"> 
<head>
    <title>Delete Asset</title>
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


        $sql = "DELETE FROM asset_list WHERE Ticker = '$Ticker'";
        
        if(mysqli_query($conn, $sql))
        {
            echo "<h3>Successfully Deleted</h3>";
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