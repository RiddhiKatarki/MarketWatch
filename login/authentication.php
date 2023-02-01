<html>
<head>
<link rel = "stylesheet" type = "text/css" href = "style_authentication.css"> 
<body>
<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
       
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if ($username == 'admin')
        {
             //echo "<h2>Redirecting to admin page</h2>";
             header("Location: http://localhost/admin/admin.html#");
             die;
        }
        if($count == 1)
        {
            header("Location: http://localhost/user/user.html");
             die;
            //echo "<h2><center>Welcome $username</center> </h2>";  
            //echo "<center><a href = 'http://localhost/price_tracker/query.php'>Proceed to Dashboard</a></center>";
            //echo "<center><a href = 'http://localhost/price_tracker/query.php'>Proceed to Dashboard</a></center>";
            //echo "<p>Price Tracker is a tool which can be used to track statistics from all your favorite asset classes. </p>";
            //echo"<p>View charts on<a href = 'https://www.tradingview.com/'> TradingView</a></p>";
        }  
        else{  
            echo "<center><h1>Invalid username or password.<a href = 'http://localhost/login/login1.html' >Try again? </a></h1></center>";  
            echo "<center><h1>Don't have an account? Click <a href = 'http://localhost/register/index1.php'>here</a> to register </h1></center>";
        }     
?>
</body>
</html>