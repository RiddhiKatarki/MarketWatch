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
    $sql = "CALL `GetPA()`";
    $result = $conn->query($sql);
?>
<p align = 'left'><a href = 'http://localhost/user/user.html'>Return</a></p>
<center><h1> Price Action </h1></center>

<table id="assets">
  <tr>
    <th>Ticker</th>
    <th>RSI</th>
    <th>Stochastic RSI</th>
    <th>MACD</th>
    <th>Rating</th>
  </tr>
  <?php while ($r = $result -> fetch_assoc()): ?>
                <tr>
                    <td><?php echo $r['Ticker'] ?></td>
                    <td><?php echo $r['RSI'] ?></td>
                    <td><?php echo $r['Stoch_RSI'] ?></td>
                    <td><?php echo $r['MACD'] ?></td>
                    <td><?php echo $r['Rating'] ?></td>


                    
                </tr>
            <?php endwhile; ?>

</table>

</body>
</html>

