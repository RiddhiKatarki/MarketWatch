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
    $sql = "SELECT DISTINCT a.Asset , o.Price 
    FROM asset_list a , overview o 
    WHERE a.Ticker = o.Ticker AND a.Ticker IN 
    (SELECT t.Ticker FROM trend_analysis t, overview o 
    WHERE o.Price > t.SMA_50 AND o.Price < t.SMA_200)
    ORDER BY a.Asset";
    
    $result = $conn->query($sql);
?>
<p align = 'left'><a href = 'http://localhost/user/user.html'>Return</a></p>
<center><h1> Potentials Buys </h1></center>

<table id="assets">
  <tr>
    <th>Asset</th>
    <th>Price($)</th>
  </tr>
  <?php while ($r = $result -> fetch_assoc()): ?>
                <tr>
                    <td><?php echo $r['Asset'] ?></td>
                    <td><?php echo $r['Price'] ?></td>
                </tr>
            <?php endwhile; ?>

</table>

</body>
</html>


