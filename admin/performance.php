<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<p align = 'left'><a href = 'http://localhost/admin/admin.html#'>Return</a></p>
    <div id="Performance">
        <h3 class="text-center text-white pt-5">Peformance form</h3>
        <div class="container">
            <div id="performance-row" class="row justify-content-center align-items-center">
                <div id="asset_list-column" class="col-md-6">
                    <div id="asset-box" class="col-md-12">
                        <form id="asset_list_form" class="form" action="performance_insert.php" method="post">
                            <div class="eight">
                                <center><h1>MarketWatch</h1></center></div>
                              </div>
                            <center> 
                            <h3 class="text-center text-info">Performance Insertion</h3>
                            <div class="form-group">
                                <label for="tick" class="text-info">Ticker:</label><br>
                                <input type="text" name="Ticker" id="Ticker" required>
                            </div>
                            <div class="form-group">
                                <label for="Yoy_Change" class = "text-info">Yoy_Change: (%)</label><br>
                                <input type="number" step = 0.01 name="Yoy_Change" id="Yoy_Change" required>
                            </div>
                            <div class="form-group">
                                <label for="Volatility" class="text-info">Volatility: (%)</label><br>
                                <input type="number" step = 0.01 name="Volatility" id="Volatility" required>
                            </div>
                            <div class="form-group">
                                <label for="M3_change" class="text-info">3M Change: (%)</label><br>
                                <input type="number" step = 0.01 name="Q_change" id="Q_change" required>
                            </div>
                            <div class="form-group">
                                <label for="M6_change" class="text-info">6M Change: (%)</label><br>
                                <input type="number" step = 0.01 name="H_change" id="H_change" required>
                            </div>

                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Insert">
                            </div></center>
                        </form>

                        <form id="asset_list_form" class="form" action="performance_update.php" method="post">
                            <center> 
                            <h3 class="text-center text-info">Performance Updation</h3>
                            <div class="form-group">
                                <label for="tick" class="text-info">Ticker:</label><br>
                                <input type="text" name="Ticker" id="Ticker" required>
                            </div>
                            <div class="form-group">
                                <label for="Yoy_Change" class = "text-info">Yoy_Change: (%)</label><br>
                                <input type="number" step = 0.01 name="Yoy_Change" id="Yoy_Change" required>
                            </div>
                            <div class="form-group">
                                <label for="Volatility" class="text-info">Volatility: (%)</label><br>
                                <input type="number" step = 0.01 name="Volatility" id="Volatility" required>
                            </div>
                            <div class="form-group">
                                <label for="M3_change" class="text-info">3M Change: (%)</label><br>
                                <input type="number" step = 0.01 name="Q_change" id="Q_change" required>
                            </div>
                            <div class="form-group">
                                <label for="M6_change" class="text-info">6M Change: (%)</label><br>
                                <input type="number" step = 0.01 name="H_change" id="H_change" required>
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