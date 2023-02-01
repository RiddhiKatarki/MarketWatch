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
    $sql = "CALL `GetOverview()`";
    $result = $conn->query($sql);
?>
<p align = 'left'><a href = 'http://localhost/user/user.html'>Return</a></p>
<center><h1> Overview </h1></center>

<table id="assets">
  <tr>
    <th>Ticker</th>
    <th>Price ($)</th>
    <th>Daily Change(%)</th>
    <th>Volume(billions in $)</th>
    <th>Technical Rating</th>
  </tr>
  <?php while ($r = $result -> fetch_assoc()): ?>
                <tr>
                    <td><?php echo $r['Ticker'] ?></td>
                    <td><?php echo $r['Price'] ?></td>
                    <td><?php echo $r['D_Change'] ?></td>
                    <td><?php echo $r['Volume'] ?></td>
                    <td><?php echo $r['Technical_Rating'] ?></td>


                    
                </tr>
            <?php endwhile; ?>

</table>

</body>
</html>

