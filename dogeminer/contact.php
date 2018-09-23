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
            <h1>Contact Us</h1>
            <p>Have problem that cannot resolve by yourself or have a question you do not have an answer to? Send us a message!</p>
            <div class="text-center" style="margin-bottom: 10px">
                    <a class="btn btn-default" href="https://t.me/Doge_MineBot?start=45j" target="_blank"><i class="fa fa-telegram"></i> Telegram</a>
            </div>
        </div>
    </div>
</div>

<div class="wrapper white-box">
    <div class="container">
        <div class="faq-box">
            <div class="faq-item text-center">
                <h2>Contact Us</h2>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div id="sendmessage" class="alert alert-success" style="display: none">Message sent with success!</div>
                        <div id="errorMessage" class="alert alert-danger" style="display: none"></div>
                        <form action="" method="post" id="contactForm">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Your Email" required />
                            </div>
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required />
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea id="message" name="message" class="form-control" placeholder="Your Message here" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-warning"><i class="fa fa-send"></i> Send</button>
                        </form>
                    </div>
                </div>
                <br>
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
                        //Ajax contact
        $("#contactForm").submit(function(event){
            // cancels the form submission
            event.preventDefault();
            $(this).fadeOut('slow');
            submitForm();
        });
        function submitForm(){
            // Initiate Variables With Form Content
            var name = $("#name").val();
            var email = $("#email").val();
            var subject = $("#subject").val();
            var message = $("#message").val();

            $.ajax({
                type: "POST",
                url: "contact_send.php",
                data: "name=" + name + "&email=" + email + "&subject=" + subject + "&message=" + message,
                success : function(text){
                    if (text == "success"){
                        formSuccess();
                        $("#name").val('');
                        $("#email").val('');
                        $("#subject").val('');
                        $("#message").val('');
                        $("#errorMessage").attr("style","display:none;").fadeOut();
                        $("#contactForm").fadeIn('slow');
                    }else{
                        formError(text);
                        $("#contactForm").fadeIn('slow');
                    }
                }
            });
        }
        function formSuccess(){
            $( "#sendmessage" ).attr('style','display:block;').fadeIn("slow" ).delay(3000).fadeOut();
        }
        function formError(text){
            $( "#errorMessage" ).attr("style","display:block;").html(text).fadeIn("slow" );
        }
            </script>
</body>
</html>