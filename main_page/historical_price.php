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
    $sql = "CALL `GetHistory()`";
    $result = $conn->query($sql);
?>
<p align = 'left'><a href = 'http://localhost/user/user.html'>Return</a></p>
<center><h1> Historical Price </h1></center>

<table id="assets">
  <tr>
    <th>Ticker</th>
    <th>All time High ($)</th>
    <th>All time Low ($)</th>
    <th>Yearly High ($)</th>
    <th>Yearly Low ($)</th>
  </tr>
  <?php while ($r = $result -> fetch_assoc()): ?>
                <tr>
                    <td><?php echo $r['Ticker'] ?></td>
                    <td><?php echo $r['ATH'] ?></td>
                    <td><?php echo $r['ATL'] ?></td>
                    <td><?php echo $r['Y_High'] ?></td>
                    <td><?php echo $r['Y_Low'] ?></td>


                    
                </tr>
            <?php endwhile; ?>

</table>

</body>
</html>

