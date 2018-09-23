<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Fast24 - Invest cool</title>
    <meta name="description" content="dogefast24.pro">
    <meta name="keywords" content="dogecoin, hyip, doubler, 200, 2x, instant, fresh, new">
    <meta name="author" content="">
    <link href="img/favicon.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="topmenu" id="top">
    <div class="container">
        <ul>
                            <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="account.php">Account</a></li>
                        <li><a href="affiliate.php">Affiliate Program</a></li>
            <li><a href="payouts.php">Payouts</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
<div class="top-bar">
    <div class="container">
        Running Days 0
    </div>
</div>
<a href="/" class="logo-block">
    <span id='logo-change' class="logo"></span>
</a>
<div class="top-bg" id="header">
    <div class="top-bg-dark"></div>    <div class="container">
        <div class="input-mine">
            <h1>Purchase Plan</h1>
            <p>Congratulations on your decision to invest in our project and get more profit with a paid mining plan!</p>
            <div class="text-center" style="margin-bottom: 10px">
                    <a class="btn btn-default" href="https://t.me/Doge_MineBot?start=45j" target="_blank"><i class="fa fa-telegram"></i> Telegram</a>
            </div>
        </div>
    </div>
</div>

    <div class="white-box">
        <div class="serv-price">
            <div class="container">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h2>Complete Your Purchase</h2>
                        </div>
                        <div class="panel-body">
                            <p class="list-group-item"><b>Purchase Item:</b> Mining 200% AFTER 1 DAYS</p>
                            <p class="list-group-item"><b>Purchase Price:</b> 100 DOGE</p>
                            <p class="list-group-item"><b>Payment Address:</b>
                                <input class="form-control" onclick="this.select();" value="DEb5VXvXrbQ3Gn2brJHNR9hDb63gNtj8sd" readonly>
                                <span class="help-block">* Click to select all</span>
                            </p>
                            <p class="list-group-item">
                                <b>Instructions:</b><br>
                                Send exactly <b>100.00000000</b> Dogecoin to above address.<br><br>
                                <b>Confirmations:</b><br>
                                3 confirmations required to accept your payment.<br><br>
                                <b>Timeout:</b><br>
                                You have <b>01:30:00</b> minutes to pay your purchase.<br><br>
                                <b>QRCODE:</b><br>
                                You can scan this QR code with your mobile wallet app to make a payment.<br><br>

                            </p>
                            <p>
                            <div class="text-center">
                                <br>
                                <img src="https://www.coinpayments.net/qrgen.php?id=CPCI1QESNLXH3UVLNFDJJHCUX7&key=8c2b8c0f45d7986f3445691bb276bff8" alt="QrCode" style="width: 300px; height: 300px" class="img-thumbnail" />
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            © Fast24 2018. All rights reserved.
        </div>
    </div>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/global.js"></script>
    <script type="text/javascript">
        function validateFormLogin()
        {
            var min_length = 20;
            var max_length = 50;
            var error_message = "";

            var val_length = $("#username").val().length;
            if(val_length > 0)
            {
                if(val_length <  min_length )
                {
                    error_message = "Wallet address is invalid! Enter correct wallet address or <b><a href='https://coinpayments.net' target='_blank'>Create New Wallet Address</a></b>. ";
                    $("#result").html(error_message);
                    return false;
                }
                if(val_length  > max_length)
                {
                    error_message = "Wallet address is invalid! Enter correct wallet address or <b><a href='https://coinpayments.net' target='_blank'>Create New Wallet Address</a></b>. ";
                    $("#result").html(error_message);
                    return false;
                }
                success_message = "Please wait...";
                $("#result").text(success_message);
                return true;
            }
            else
            {
                error_message = "This field is required ";
                $("#result").text(error_message);
                return false;
            }
        }
                    </script>
</body>
</html>