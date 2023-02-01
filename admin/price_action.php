<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
<p align = 'left'><a href = 'http://localhost/admin/admin.html#'>Return</a></p>
    <div id="Price_Action">
        <h3 class="text-center text-white pt-5">Price Action form</h3>
        <div class="container">
            <div id="price_action-row" class="row justify-content-center align-items-center">
                <div id="price_action-column" class="col-md-6">
                    <div id="asset-box" class="col-md-12">
                        <form id="price_action_form" class="form" action="price_action_insert.php" method="post">
                            <div class="eight">
                                <center><h1>MarketWatch</h1></center></div>
                              </div>
                            <center>  
                            <h3 class="text-center text-info">Price Action Insertion</h3>
                            <div class="form-group">
                                <label for="tick" class="text-info">Ticker:</label><br>
                                <input type="text" name="Ticker" id="Ticker" required>
                            </div>
                            <div class="form-group">
                                <label for="RSI" class = "text-info">RSI: </label><br>
                                0<input type="range" name="RSI" id="RSI" min = "0" max = "100" onchange=""show_value(this.value);">100
                            </div>
                            <div class="form-group">
                                <label for="Stoch_RSI" class="text-info">Stochastic RSI: </label><br>
                                0<input type="range" name="Stoch_RSI" id="Stoch_RSI" min = "0" max = "100">100
                            </div>
                            <div class="form-group">
                                <label for="MACD" class="text-info">MACD:</label><br>
                                <input type="number" step = 0.001 name="MACD" id="MACD" required>
                            </div>
                            <div class="form-group">
                                <label for="Rating" class="text-info">Rating:</label><br>
                                <input type="text" name="Rating" id="Rating" required>
                            </div>

                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Insert">
                            </div> </center>
                        </form>
                        <form id="price_action_form" class="form" action="price_action_update.php" method="post">
                            <center>  
                            <h3 class="text-center text-info">Price Action Updation</h3>
                            <div class="form-group">
                                <label for="tick" class="text-info">Ticker:</label><br>
                                <input type="text" name="Ticker" id="Ticker" required>
                            </div>
                            <div class="form-group">
                                <label for="RSI" class = "text-info">RSI: </label><br>
                                0<input type="range" name="RSI" id="RSI" min = "0" max = "100">100
                            </div>
                            <div class="form-group">
                                <label for="Stoch_RSI" class="text-info">Stochastic RSI: </label><br>
                                0<input type="range" name="Stoch_RSI" id="Stoch_RSI" min = "0" max = "100">100
                            </div>
                            <div class="form-group">
                                <label for="MACD" class="text-info">MACD:</label><br>
                                <input type="number" step = 0.001 name="MACD" id="MACD" required>
                            </div>
                            <div class="form-group">
                                <label for="Rating" class="text-info">Rating:</label><br>
                                <input type="text" name="Rating" id="Rating" required>
                            </div>

                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Update">
                            </div> </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>