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
            <h1>Affiliate Program</h1>
            <p>Invite your friends and get 10% each time they upgrade Fast24. </p>
            <div class="text-center" style="margin-bottom: 10px">
                    <a class="btn btn-default" href="https://t.me/Doge_MineBot?start=45j" target="_blank"><i class="fa fa-telegram"></i> Telegram</a>
            </div>
        </div>
    </div>
</div>

<div class="wrapper white-box">
    <div class="container">
        <div class="faq-box">
            <div class="faq-item">
                <h2>Upgrade to Premium</h2>
                <p>
                    You can also <a href="dashboard.php#plans">Upgrade Mining</a> to increase affiliate rate 10%.
                </p>
                <p>
                    Fast24 is an industry leading Dogecoin mining pool. All of the mining power is backed up by physical miners. Mining with the latest algorithms allows to make as much Dogecoin as possible. We aim to provide you with the easiest possible way to make money without having to do any of the hard stuff.
                </p>
                <p>
                    With data centers around the globe, we aim to keep bills down and mining power high, meaning you can make more in a shorter amount of time than what it would take to mine from your home for instance. Our data centers are located in Europe, USA and China with dedicated Up-Links and 99% uptime!
                </p>
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