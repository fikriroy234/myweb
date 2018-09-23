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
    <div class="top-bg-dark"></div>        <div class="container">
            <div class="head-login">
                <div class="first-mine">
                    <div class="text-center" style="margin-bottom: 10px">
                            <a class="btn btn-default" href="https://t.me/Doge_MineBot?start=45j" target="_blank"><i class="fa fa-telegram"></i> Telegram</a>
                    </div>
                    <center>You have entered via the following address:</center>
                    <div class="mine-num notranslate" id="show_address">
                        D7qibA5UsV2v5f2z1grb7MyuEXXVR<a style="cursor:pointer;" onclick="go_show_address()" title="Click to show Address">XXXXX</a>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="row">
                        <div class="col-md-5 col-md-offset-1">
                            <div class="log-mine">
                                <h4>Your balance</h4>
                                <input type="hidden" id="getBalance" value="15.65830975" />
                                <span><font id="bal" class="notranslate" >15.65830975</font> DOGE</span>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-1">
                            <button type="button" class="btn btn-success btn-lg" onclick="location.href='withdraw.php';">Withdraw</button>
                            <button type="button" class="btn btn-warning btn-lg" onclick="location.href='withdraw_affiliate.php';">Withdraw Comissions</button>
                            <button type="button" class="btn btn-danger btn-lg" onclick="location.href='logout.php';">Logout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="white-box">
        <div class="serv-price">
        <div class="container">
            <h2>Your Active Plan</h2>
            <div class="serv-price-small clearfix">
                Here are all your active miners, each deposit is a separate miner.
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tbody>
                    <tr class="text-center">
                        <th>Name</th>
                        <th>Speed</th>
                        <th>Earning Rate</th>
                        <th>Start</th>
                        <th>Time left</th>
                        <th>Status</th>
                    </tr>
                                        <tr class="text-center">
                        <td>FREE</td>
                        <td>100 H/s</td>
                        <td>0.00694440 Đ</td>
                        <td>2018-09-16 20:16:17</td>
                        <td>Unlimited</td>
                        <td>
                            <span class='label label-success'>Active</span>                        </td>
                    </tr>
                                        <tr class="text-center">
                        <td>200% AFTER 1 DAYS</td>
                        <td>1000 H/s</td>
                        <td>0.13890000 Đ</td>
                        <td>2018-09-16 21:20:03</td>
                        <td>0d 17h 19min</td>
                        <td>
                            <span class='label label-success'>Active</span>                        </td>
                    </tr>
                                        <tr class="text-center">
                        <td>200% AFTER 1 DAYS</td>
                        <td>2000 H/s</td>
                        <td>0.69440000 Đ</td>
                        <td>2018-09-16 21:52:04</td>
                        <td>0d 17h 51min</td>
                        <td>
                            <span class='label label-success'>Active</span>                        </td>
                    </tr>
                                        </tbody>
                    <tfoot class="text-center">
                    <tr>
                        <td><b>Totals</b></td>
                        <td>3100 H/s</td>
                        <td colspan="4">0.84024440 Đ min / 1210.00000000 Đ day</td>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <br>

            <h2 id="plans">Select your Package</h2>
            <div class="row" id='doge-def4'>
                                <div class="col-md-3">
                    <div class="price-box">
                        <img class="img-responsive center-block" src="img/plans/1.png" style="width:140px; padding-top: 20px; padding-bottom: 20px;" alt="200% AFTER 1 DAYS" />
                        <h3>200% AFTER 1 DAYS</h3>
                        Earning rate:<br />
                        200 Đ per day<br />
                        200% for 1 days<br />
                        <span>Affiliate bonus 10%</span>
                                                    <button type="button" class="price-button lgb" onclick="location.href='purchase.php?plan=2';">Buy for 100 Đ</button>
                                            </div>
                </div>
                                <div class="col-md-3">
                    <div class="price-box">
                        <img class="img-responsive center-block" src="img/plans/2.png" style="width:140px; padding-top: 20px; padding-bottom: 20px;" alt="200% AFTER 1 DAYS" />
                        <h3>200% AFTER 1 DAYS</h3>
                        Earning rate:<br />
                        1000 Đ per day<br />
                        200% for 1 days<br />
                        <span>Affiliate bonus 10%</span>
                                                    <button type="button" class="price-button lgb" onclick="location.href='purchase.php?plan=3';">Buy for 500 Đ</button>
                                            </div>
                </div>
                                <div class="col-md-3">
                    <div class="price-box">
                        <img class="img-responsive center-block" src="img/plans/3.png" style="width:140px; padding-top: 20px; padding-bottom: 20px;" alt="200% AFTER 1 DAYS" />
                        <h3>200% AFTER 1 DAYS</h3>
                        Earning rate:<br />
                        2000 Đ per day<br />
                        200% for 1 days<br />
                        <span>Affiliate bonus 10%</span>
                                                    <button type="button" class="price-button lgb" onclick="location.href='purchase.php?plan=4';">Buy for 1000 Đ</button>
                                            </div>
                </div>
                                <div class="col-md-3">
                    <div class="price-box">
                        <img class="img-responsive center-block" src="img/plans/4.png" style="width:140px; padding-top: 20px; padding-bottom: 20px;" alt="200% AFTER 1 DAYS" />
                        <h3>200% AFTER 1 DAYS</h3>
                        Earning rate:<br />
                        10000 Đ per day<br />
                        200% for 1 days<br />
                        <span>Affiliate bonus 10%</span>
                                                    <button type="button" class="price-button lgb" onclick="location.href='purchase.php?plan=5';">Buy for 5000 Đ</button>
                                            </div>
                </div>
                                <div class="col-md-3">
                    <div class="price-box">
                        <img class="img-responsive center-block" src="img/plans/5.png" style="width:140px; padding-top: 20px; padding-bottom: 20px;" alt="500% AFTER 1 DAYS" />
                        <h3>500% AFTER 1 DAYS</h3>
                        Earning rate:<br />
                        250000 Đ per day<br />
                        500% for 1 days<br />
                        <span>Affiliate bonus 10%</span>
                                                    <button type="button" class="price-button lgb" onclick="location.href='purchase.php?plan=6';">Buy for 50000 Đ</button>
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
                //Counter
        $(document).ready(function() {
            var speed = (parseFloat(0.8402444)/60).toFixed(8);
            setInterval(function() {
                var oldvalue =  parseFloat($('#bal').html()).toFixed(8);
                var result = parseFloat(parseFloat(oldvalue) + parseFloat(speed)).toFixed(8);
                $("#bal").html(result);
            }, 1000);
        });
        //Wallet show
        function go_show_address() {
            $('#show_address').html('D7qibA5UsV2v5f2z1grb7MyuEXXVRDcuVR');
        }
                    </script>
</body>
</html>