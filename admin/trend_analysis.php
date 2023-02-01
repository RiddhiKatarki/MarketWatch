<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<p align = 'left'><a href = 'http://localhost/admin/admin.html#'>Return</a></p>
    <div id="Trend Analysis">
        <h3 class="text-center text-white pt-5">Price Action form</h3>
        <div class="container">
            <div id="trend_analysis-row" class="row justify-content-center align-items-center">
                <div id="trend_analysis-column" class="col-md-6">
                    <div id="asset-box" class="col-md-12">
                        <form id="trend_analysis_form" class="form" action="trend_analysis_insert.php" method="post">
                            <div class="eight">
                                <center><h1>MarketWatch</h1></center></div>
                              </div>

                            <center> 
                            <h3 class="text-center text-info">Trend Analysis Insertion</h3>
                            <div class="form-group">
                                <label for="tick" class="text-info">Ticker:</label><br>
                                <input type="text" name="Ticker" id="Ticker" required>
                            </div>
                            <div class="form-group">
                                <label for="MA_Rating" class = "text-info">MA Rating:</label><br>
                                <input type="text" name="MA_Rating" id="MA_Rating" required>
                            </div>
                            <div class="form-group">
                                <label for="SMA_20" class="text-info">SMA 20: (in $)</label><br>
                                <input type="number" step = 0.01 name="SMA_20" id="SMA_20" required required>
                            </div>
                            <div class="form-group">
                                <label for="SMA_50" class="text-info">SMA_50: (in $)</label><br>
                                <input type="number" step = 0.01 name="SMA_50" id="SMA_50" required>
                            </div>
                            <div class="form-group">
                                <label for="SMA_200" class="text-info">SMA_200: (in $)</label><br>
                                <input type="number" step = 0.01 name="SMA_200" id="SMA_200" required>
                            </div>

                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Insert">
                            </div>
                        </form> </center>

                        <form id="trend_analysis_form" class="form" action="trend_analysis_update.php" method="post">
                            

                            <center> 
                            <h3 class="text-center text-info">Trend Analysis Updation</h3>
                            <div class="form-group">
                                <label for="tick" class="text-info">Ticker:</label><br>
                                <input type="text" name="Ticker" id="Ticker" required>
                            </div>
                            <div class="form-group">
                                <label for="MA_Rating" class = "text-info">MA Rating:</label><br>
                                <input type="text" name="MA_Rating" id="MA_Rating" required>
                            </div>
                            <div class="form-group">
                                <label for="SMA_20" class="text-info">SMA 20: (in $)</label><br>
                                <input type="number" step = 0.01 name="SMA_20" id="SMA_20" required>
                            </div>
                            <div class="form-group">
                                <label for="SMA_50" class="text-info">SMA_50: (in $)</label><br>
                                <input type="number" step = 0.01 name="SMA_50" id="SMA_50" required>
                            </div>
                            <div class="form-group">
                                <label for="SMA_200" class="text-info">SMA_200: (in $)</label><br>
                                <input type="number" step = 0.01 name="SMA_200" id="SMA_200" required>
                            </div>

                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Update">
                            </div>
                        </form> </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>