<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Britannia Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="Content/Images/favicon.ico" />
    <!-- Bootstrap core CSS -->
    <link href="Content/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="Content/css/carousel.css" rel="stylesheet" type="text/css" />
    <link href="Content/Site.css" rel="stylesheet" type="text/css" />

    <script src="Scripts/jquery-3.5.1.min.js"></script>
    <script src="Scripts/js/ie10-viewport-bug-workaround.js" type="text/javascript"></script>
    <link href="Content/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" id="theme" href="Content/theme-default-login.css" />

    <script src="Scripts/Custom/jquery-ui.js"></script>

    <script src="Scripts/Custom/ValidationCheck.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="Content/themes/blitzer/jquery-ui.min.css" />
</head>

<body class="loginPg">

    <header>
        <div class="container-fluid" style="padding-right: 0px; padding-left:0px; padding-top:18px; margin-top: 0px;">
            <div class="navbar-wrapper">
                <nav class="navbar navbar-inverse">
                    <div class="heading header_menu">
                        <div class="wrapper_head">
                            <div class="left-spacer-logo"></div>
                            <div class="header-logo-block">

                                <a class="header-logo" href="index.html">
                                    <img src="Content/Images/logo-login.png" class="class=" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>


                </nav>
            </div>

        </div>

    </header>

    <div class="container-scroller ">
        <div class="container-fluid full-page-wrapper">
            <div class="content-wrapper auth p-0 theme-two">
                <div class="row d-flex align-items-stretch">
                    <div class="col-md-7">
                    </div>
                    <div class="col-md-4">
                        <div class="auto-form-wrapper ">
                            <form action="index.php" class="form-horizontal"  method="post">
                                <div class="login-title">SIGN IN</div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <input class="form-control" id="username" maxlength="100" name="username" placeholder="User Name" tabindex="1" type="text" value="" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group mb-3">
                                            <input class="number-only form-control Validate" id="mobilenumber" maxlength="10" name="mobilenumber" placeholder="Mobile Number" tabindex="2" type="text" value="" required />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input name="btnSendOTP" id="btnSendOTP" type="button" class="btn btn-primary btn-block submit-btn" value="Send Code" tabindex="3" style="padding: 8px 4px;" />
                                        </div>
                                    </div>
                                    <div class="col-md-12"  id="liEnterCode">
                                        <div class="label_gmessage" style="color: #04ab04; font-size: 10px;"></div>
                                    </div>
                                </div>
                                <div class="row"  id="liEnterCode1">
                                    <div class="col-md-12">
                                        <div class="form-group" style="margin-bottom: 5px!important;">
                                            <div class="input-group">
                                                <input autocomplete="off" class="form-control" id="userotp" maxlength="6" name="userotp" placeholder="Enter OTP" tabindex="4" type="text" value="" />
                                                <input type="hidden" id="hdnlogin" name="hdnlogin" value="1" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group"  id="liEnterCode2">
                                    <div class="row">
                                        <div class="col-md-6 text-left" style="color:#000; font-size:13px;">
                                            <input type="checkbox" id="chksignin" name="chksignin" checked="checked" onclick="CheckData();" tabindex="5" /> Keep me signed in
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <input name="btnLogin" id="btnLogin" type="submit" class="btn btn-primary submit-btn" tabindex="7" value="Login" style="padding: 8px 33px;" />
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-md-12" style="color:#eb1c23;">
                                            Please complete your KYC to login with you registered mobile number
                                        </div>
                                        <div class="col-md-12">
                                            <br />
                                            <button style='height: 50px;' tabindex="8">
                                                Onboard Distributors
                                            </button>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12" style="font-weight:bold; color:red;">

                                        </div>
                                    </div>
                                </div>
                            </form>



                        </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <footer>



        <div class="footer">
            <div class="container">

                <div class="row " style="font-size: 13px;">
                    <div class="col-md-4 text-left">
                        Call us on: 1800-2088-8888
                    </div>
                    <div class="col-md-4 text-center">
                        Email us at: <a href="mailto:britannia4u@britindia.com"> britannia4u@britindia.com</a>
                    </div>
                    <div class="col-md-4 text-right">
                        Visit us at: <a href="index.html" target="_blank">www.britannia4u.com</a>
                    </div>

                </div>
                <br />
                <div class="row ">
                    <div class="col-6 col-md-6 text-left">
                        <p class="footer-text">© POWERED BY QWIKCILVER SOLUTIONS & SALUTO WELLNESS</p>
                    </div>
                    <div class="col-6 col-md-6 text-right">
                        <a href="#">FAQ</a>&nbsp;&nbsp;&nbsp;
                        <a href="#">TERMS OF USE</a>&nbsp;&nbsp;&nbsp;
                        <a href="Login.html">CONTACT US</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="login-container" style="display:none">
    </div>

    <div id="divAddComment">
        <div class="text-center" style="font-size:15px;" id="dvMessage">
        </div>
        <br />
        <div class="badge-box">
            <div class="say-btn text-center">
                <input type="button" class="btn-size btn btn-info bag-btn" value="Close" id="btnCancel" name="btnCancel" />
            </div>
        </div>
    </div>
    <style>
        .progress {
            position: relative;
            width: 400px;
            border: 1px solid #ccc;
            padding: 1px;
            border-radius: 3px;
            font-size: 14px;
        }

        .bar {
            background-color: #bcc4ca;
            width: 0%;
            height: 20px;
            border-radius: 3px;
        }

        .percent {
            position: absolute;
            display: inline-block;
            top: -5px;
            left: 48%;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).ajaxStart(function() {
                $('.progress-indicator').css('display', 'block');
            });
            $(document).ajaxStop(function() {
                $('.progress-indicator').css('display', 'none');
            });

        });
    </script>
    <style>
        .progress-indicator {
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            position: fixed;
            text-align: center;
            /* IE filter */
            filter: progid:DXImageTransform.Microsoft.Alpha(opacity=50);
            -moz-opacity: 0.5;
            /* Mozilla extension */
            -khtml-opacity: 0.5;
            /* Safari/Conqueror extension */
            opacity: 0.5;
            /* CSS3 */
            z-index: 1000;
            background-color: White;
            display: none;
        }

        .progress-indicator img {
            margin-top: 350px;
        }

        #overlay {
            position: fixed;
            height: 100%;
            width: 100%;
            z-index: 1000000;
            background: url('Content/images/al.html');
            background-color: Black;
            opacity: 0.6;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
    <script type="text/javascript">
        function Showpop() {
            $("#divAddComment").dialog("option", "title", "Enrol for SALUTO Privilege!!");
            $("#divAddComment").dialog("option", "position", {
                my: "center",
                at: "center",
                of: window
            });
            $("#divAddComment").dialog("open");
            return false;
        }
        jQuery(document).ready(function() {
            $("#divAddComment").dialog({
                autoOpen: false,
                height: 150,
                width: 400,
                modal: true,
                close: function() {}
            });
            // $("#liEnterCode1").hide();
            // $("#liEnterCode2").hide();


        


            var input = document.getElementById("mobilenumber");
            input.addEventListener("keypress", function(event) {
                if (event.key === "Enter") {
                    event.preventDefault();
                    document.getElementById("btnSendOTP").click();
                }
            });
            var input = document.getElementById("userotp");
            input.addEventListener("keypress", function(event) {
                if (event.key === "Enter") {
                    event.preventDefault();
                    document.getElementById("btnLogin").click();
                }
            });
            $("#btnCancel").click(function() {
                $("#divAddComment").dialog("close");
            });
        
        });

        function CheckData() {
            if ($("#chksignin").prop('checked')) {
                $("#hdnlogin").val(1);
            } else {
                $("#hdnlogin").val(0);
            }
        }
    </script>
</body>



</html>