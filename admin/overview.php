<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<p align = 'left'><a href = 'http://localhost/admin/admin.html#'>Return</a></p>
    <div id="overview">
        <h3 class="text-center text-white pt-5">Overview form</h3>
        <div class="container">
            <div id="overview-row" class="row justify-content-center align-items-center">
                <div id="overview-column" class="col-md-6">
                    <div id="overview-box" class="col-md-12">
                        <form id="overview_form" class="form" action="overview_insert.php" method="post">
                            <div class="eight">
                                <center><h1>MarketWatch</h1></center></div>
                              </div>
                            <center>  
                            <h3 class="text-center text-info">Overview Insertion</h3>
                            <div class="form-group">
                                <label for="Ticker" class = "text-info">Ticker:</label><br>
                                <input type="text" name="Ticker" id="Ticker" required>
                            </div>
                            <div class="form-group">
                                <label for="Price" class="text-info">Price: (in $)</label><br>
                                <input type="number" step = 0.01 name="Price" id="Price" required>
                            </div>
                            <div class="form-group">
                                <label for="D_Change" class="text-info">Daily Change: (%)</label><br>
                                <input type="number" step = 0.01 name="D_Change" id="D_Change" required>
                            </div>
                            <div class="form-group">
                                <label for="Volume" class="text-info">Volume: (billion in $)</label><br>
                                <input type="number" step = 0.001 name="Volume" id="Volume" required>
                            </div>
                            <div class="form-group">
                                <label for="Technical_Rating" class="text-info">Technical Rating:</label><br>
                                <input type="text" name="Technical_Rating" id="Technical_Rating" required>
                            </div>

                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Insert">
                            </div></center>
                        </form> 
                    
                        <form id="overview_form" class="form" action="overview_update.php" method="post">
                            <center>  
                            <h3 class="text-center text-info">Overview Updation</h3>
                            <div class="form-group">
                                <label for="Ticker" class = "text-info">Ticker:</label><br>
                                <input type="text" name="Ticker" id="Ticker" required>
                            </div>
                            <div class="form-group">
                                <label for="Price" class="text-info">Price: (in $)</label><br>
                                <input type="number" step = 0.01 name="Price" id="Price" required>
                            </div>
                            <div class="form-group">
                                <label for="D_Change" class="text-info">Daily Change: (%)</label><br>
                                <input type="number" step = 0.01 name="D_Change" id="D_Change" required>
                            </div>
                            <div class="form-group">
                                <label for="Volume" class="text-info">Volume: (billion in $)</label><br>
                                <input type="number" step = 0.001 name="Volume" id="Volume" required>
                            </div>
                            <div class="form-group">
                                <label for="Technical_Rating" class="text-info">Technical Rating:</label><br>
                                <input type="text" step = 0.01 name="Technical_Rating" id="Technical_Rating" required>
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