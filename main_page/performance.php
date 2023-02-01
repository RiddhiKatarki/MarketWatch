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
    $sql = "CALL `GetPerformance()`";
    $result = $conn->query($sql);
?>
<p align = 'left'><a href = 'http://localhost/user/user.html'>Return</a></p>
<center><h1> Performance </h1></center>

<table id="assets">
  <tr>
    <th>Ticker</th>
    <th>YoY Change($)</th>
    <th>Volatility</th>
    <th>3-Month Change (%)</th>
    <th>6-Month Change(%)</th>
  </tr>
  <?php while ($r = $result -> fetch_assoc()): ?>
                <tr>
                    <td><?php echo $r['Ticker'] ?></td>
                    <td><?php echo $r['Yoy_Change'] ?></td>
                    <td><?php echo $r['Volatility'] ?></td>
                    <td><?php echo $r['Q_Change'] ?></td>
                    <td><?php echo $r['H_Change'] ?></td>  
                </tr>
            <?php endwhile; ?>

</table>

</body>
</html>

