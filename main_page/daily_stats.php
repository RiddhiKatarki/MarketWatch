<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
<style>
#assets {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#assets td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#assets tr:nth-child(even){background-color: #f2f2f2;}

#assets tr:hover {background-color: #ddd;}

#assets th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
    <?php
    include 'db_connect.php';
    $conn = OpenCon();

    $sql = "SELECT a.Asset_Class , a.Ticker , a.Asset , o.Price , o.D_Change , p.volatility   
    FROM asset_list a , overview o , performance p
    WHERE a.Ticker = o.Ticker AND o.Ticker = p.Ticker AND p.Ticker
    IN (SELECT p1.Ticker FROM performance p1 WHERE p1.Volatility > 1);";
    /*"SELECT a.Asset , a.Ticker , o.Price , o.D_Change , p.volatility 
    FROM asset_list a ,overview o , performance p 
    WHERE a.Ticker = o.Ticker AND a.Ticker = p.Ticker ORDER BY a.Asset;";*/
    
    $result = $conn->query($sql);
?>
<p align = 'left'><a href = 'http://localhost/user/user.html'>Return</a></p>
<center><h1> Daily Statistics</h1></center>

<table id="assets">
  <tr>
    <th>Asset</th>
    <th>Ticker</th>
    <th>Price($)</th>
    <th>Daily Change(%)</th>
    <th>Volatility (%)</th>
  </tr>
  <?php while ($r = $result -> fetch_assoc()): ?>
                <tr>
                    <td><?php echo $r['Asset'] ?></td>
                    <td><?php echo $r['Ticker'] ?></td>
                    <td><?php echo $r['Price'] ?></td>
                    <td><?php echo $r['D_Change'] ?></td>
                    <td><?php echo $r['volatility'] ?></td>
                    
                </tr>
            <?php endwhile; ?>

</table>

</body>
</html>


