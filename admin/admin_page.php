<!DOCTYPE html>
<html lang="en">
<link rel = "stylesheet" type = "text/css" href = "style.css"> 
   <head>
      <title>Admin Page</title>
   </head>
   <body>
      <center>
         <h1> Asset List</h1>
         <form action="admin.php" method="post">
            <p>
               <label for="Asset Class">Asset Class:</label>
               <input type="text" name="Asset_Class" id="Asset_Class">
            </p>
            <p>
               <label for="Asset">Asset:</label>
               <input type="text" name="Asset" id="Asset">
            </p>
            <p>
               <label for="Ticker">Ticker:</label>
               <input type="text" name="Ticker" id="Ticker">
            </p>
            <p>
               <label for="Trading Pair">Trading Pair:</label>
               <input type="text" name="Trading_Pair" id="Trading_Pair">
            </p>
            <input type="submit" id = "btn" value="Insert" align = "left">
         </form>
      </center>
   </body>
</html>