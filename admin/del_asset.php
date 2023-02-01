<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<p align = 'left'><a href = 'http://localhost/admin/admin.html#'>Return</a></p>
    <div id="Asset_List">
        <h3 class="text-center text-white pt-5">Asset List form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="asset_list-column" class="col-md-6">
                    <div id="asset-box" class="col-md-12">
                    <center>
                    <form id="asset_list_form" class="form" action="delete_asset.php" method="post">
                              
                            <h3 class="text-center text-info">Asset Deletion</h3>
                            
                            <div class="form-group">
                                <label for="tick" class="text-info">Ticker:</label><br>
                                <input type="text" name="Ticker" id="Ticker" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Delete">
                            </div>
                        </form></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>