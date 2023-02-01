<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<p align = 'left'><a href = 'http://localhost/admin/admin.html#'>Return</a></p>
    <div id="Historical_Price">
        <h3 class="text-center text-white pt-5">Historical Price form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="asset_list-column" class="col-md-6">
                    <div id="asset-box" class="col-md-12">
                        <form id="historical_price_form" class="form" action="historical_price_insert.php" method="post">
                            <div class="eight">
                                <center><h1>MarketWatch</h1></center></div>
                              </div>
                              
                            <h3 class="text-center text-info">Historical Price Insertion</h3>
                        <center>    <div class="form-group">
                                <label for="ticker" class = "text-info">Ticker:</label><br>
                                <input type="text" name="Ticker" id="Ticker" required>
                            </div>
                            <div class="form-group">
                                <label for="ATH" class="text-info">All time high: (in $)</label><br>
                                <input type="number" step = 0.01 name="ATH" id="ATH" required>
                            </div>
                            <div class="form-group">
                                <label for="ATL" class="text-info">All time low: (in $)</label><br>
                                <input type="number"  step = 0.01 name="ATL" id="ATL" required>
                            </div>
                            <div class="form-group">
                                <label for="Y_High" class="text-info">1-Year High: (in $)</label><br>
                                <input type="number" step = 0.01 name="Y_High" id="Y_High" required>
                            </div>
                            <div class="form-group">
                                <label for="Y_Low" class="text-info">1-Year Low: (in $)</label><br>
                                <input type="number" step = 0.01 name="Y_Low" id="Y_Low" required>
                            </div>


                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Insert">
                            </div></center>
                        </form>
                        <form id="historical_price_form" class="form" action="historical_price_update.php" method="post">
                        <h3 class="text-center text-info">Historical Price Updation</h3>
                        <center>    <div class="form-group">
                                <label for="ticker" class = "text-info">Ticker:</label><br>
                                <input type="text" name="Ticker" id="Ticker" required>
                            </div>
                            <div class="form-group">
                                <label for="ATH" class="text-info">All time high: (in $)</label><br>
                                <input type="number" step = 0.01 name="ATH" id="ATH" required>
                            </div>
                            <div class="form-group">
                                <label for="ATL" class="text-info">All time low: (in $)</label><br>
                                <input type="number" step = 0.01 name="ATL" id="ATL" required>
                            </div>
                            <div class="form-group">
                                <label for="Y_High" class="text-info">1-Year High: (in $)</label><br>
                                <input type="number" step = 0.01 name="Y_High" id="Y_High" required>
                            </div>
                            <div class="form-group">
                                <label for="Y_Low" class="text-info">1-Year Low: (in $)</label><br>
                                <input type="number" step = 0.01 name="Y_Low" id="Y_Low" required>
                            </div>


                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Update">
                            </div></center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>