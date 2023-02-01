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
    
/*
CREATE VIEW risk_reward AS
SELECT a.Asset, o.Price, h.ATH  
FROM asset_list a, overview o , historical_price h
WHERE a.Ticker = o.Ticker AND a.Ticker = h.Ticker
ORDER BY (h.ATH - o.Price)/(o.Price) DESC; */
    include 'db_connect.php';
    $conn = OpenCon();
    $sql = "SELECT  * FROM risk_reward;";
    $result = $conn->query($sql);
?>
<p align = 'left'><a href = 'http://localhost/user/user.html'>Return</a></p>
<center><h1> Risk Reward</h1></center>

<table id="assets">
  <tr>
    <th>Asset</th>
    <th>Price($)</th>
    <th>All Time High ($)</th>
  </tr>
  <?php while ($r = $result -> fetch_assoc()): ?>
                <tr>
                    <td><?php echo $r['Asset'] ?></td>
                    <td><?php echo $r['Price'] ?></td>
                    <td><?php echo $r['ATH']?></td>
                </tr>
            <?php endwhile; ?>

</table>

</body>
</html>





