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
        $Asset_Class = $_REQUEST['Asset_Class'];
        $Asset = $_REQUEST['Asset'];
        $Ticker = $_REQUEST['Ticker'];
        $Trading_Pair = $_REQUEST['Trading_Pair'];


        $sql = "UPDATE `asset_list` SET `Asset_Class`='$Asset_Class',`Asset`='$Asset',`Trading_Pair`='$Trading_Pair' WHERE Ticker = '$Ticker'";
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