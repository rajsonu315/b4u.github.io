<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
    <title>Britannia Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="Content/Images/favicon.ico" />
    <link href="Content/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="Content/css/font-awesome.css" rel="stylesheet">
    <link href="Content/css/carousel.css" rel="stylesheet" type="text/css" />
    <link href="Content/Site.css" rel="stylesheet" type="text/css" />
    <link href="Content/css/index.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="Content/themes/blitzer/jquery-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="Content/themes/blitzer/jquery-ui.theme.min.css" />
    <link rel="stylesheet" type="text/css" href="Content/themes/blitzer/jquery-ui.structure.min.css" />



    <style>
        .ui-dialog .ui-dialog-content {
            height: auto !important;
        }
    </style>

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
            margin-top: 300px;
        }
    </style>

</head>

<body>


    <?php

    include('header.php');
    ?>





    <div class="MainDivContent">
        <div class="container-fluid container_bg">

            <div class="row">
                <div class="col-md-12">
                    <div class="row">



                        <style>
                            .carousel-inner>.item>a>img,
                            .carousel-inner>.item>img {
                                min-height: 328px;
                            }

                            .homedivMid {
                                margin-top: 0%;
                            }

                            .slider {
                                width: 90% !important;
                                margin: 0px auto 0px auto !important;
                            }
                        </style>
                        <div class="container">
                            <div class="homedivMid">
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <div class="profilebox">
                                            <div class="profilePhoto">
                                                <img src="https://www.britannia4u.com/Content/Images/no-image.png" />
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="profileboxText ">
                                                        <div class="row">
                                                            <a href="RetailerPayout">
                                                                <div class="payouttext text-center">
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PAYOUT</div>
                                                                <div class=" text-center" id="dvPayData">
                                                                </div>
                                                            </a>
                                                            <div class="row">
                                                                <div class="col-md-12 col-xs-12 text-center" style="margin-top:10px; font-weight:bold;">
                                                                    <div class="text-center">
                                                                        <a href="RetailerPayout" style="cursor:pointer; background-color:#87d156;" class="btn btn-default">View Payout</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row profileboximg">
                                                        <div class="col-md-12 col-xs-12 text-center">
                                                            <img src="https://www.britannia4u.com/Content/Images/payOut.png" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profileQuery text-center">
                                            <h4 class="mb-2"> Meeting Passcode</h4><br />
                                            <div class="row">
                                                <div class="col-md-8 ">
                                                    <div class="form-group"><input type="text" name="ENTER_PassCode" id="ENTER_PassCode" maxlength="8" class="form-control number-only" placeholder="Enter Passcode" /></div>
                                                </div>
                                                <div class="col-md-4 "><a href="#" onclick="return JoinMeetingWithPass();" class="btn btn-default btn-block">Join</a></div>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="profileQuery text-center">
                                            <h4><a href="ContactUsList"> <img src="Content/Images/POST.png" width="20" /> QUERIES</a></h4>
                                            <div class="row">
                                                <div class="col-md-6 text-success2 text-left">Open</div>
                                                <div id="openCount" class="col-md-6 text-success2"></div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 text-success2 text-left">Closed</div>
                                                <div id="closedCount" class="col-md-6 text-success2"></div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 text-success2 text-left">Total</div>
                                                <div id="totalCount" class="col-md-6 text-success2"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12 mob-d">
                                                        <div class="row">
                                                            <div class="col-md-12 col-xs-12">


                                                            
                                                                
                                                                <div class="row trackBg" style="">
                                                                    <a href="UserDetail.php" class="trackBox-1">OUTLET
                                                                        LEVEL
                                                                        TRACKER</a>
                                                                </div>
                                                                <div class="row trackBg trackBg2" style="">
                                                                    <a href="RetailerPayout.php" class="trackBox-1">OUTLET
                                                                        PAYOUTS</a>
                                                                </div>
                                                                <div class="row trackBg" style="">
                                                                    <a href="ViewTargetData.php" class="trackBox-2">TARGET
                                                                        vs ACHIEVEMENT</a>
                                                                </div>
                                                                <div class="row trackBg" style="">
                                                                    <a href="TargetApproveAdm.php" class="trackBox-3">TARGET
                                                                        REVISION</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="homedivbt2">
                                        </div>
                                    </div>

                                    <div class="col-md-3 pt-50">
                                        <div class="redbtbg">
                                            <div class="panel panel-default" style="margin-bottom: 20px;">
                                                <div class="panel-heading">
                                                    <div class="panel-title-box">
                                                        <h3>
                                                            Payout Pending
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <br /> <br />
                                                    <div class="row">
                                                        <div class="col-md-6 handPoint" onclick="return RedirectToQuery('RetailerPayout');">
                                                            Total Amount
                                                        </div>
                                                        <div class="col-md-6 text-right">
                                                            <div class="form-group">


                                                                1398333.53
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 handPoint">
                                                            Unique outlets
                                                        </div>
                                                        <div class="col-md-6 text-right">
                                                            <div class="form-group">
                                                                2452
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 text-danger handPoint" id="approvalpending">
                                                            <div id="approvalpendingdata"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="panel panel-default" style="margin-bottom: 20px;">
                                                <div class="panel-heading">
                                                    <div class="panel-title-box">
                                                        <h3>
                                                            Login Details(MTD)
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <br /> <br />
                                                    <div class="row">
                                                        <div class="col-md-6 handPoint">
                                                            Total Logins
                                                        </div>
                                                        <div class="col-md-6 text-right">
                                                            <div class="form-group" id="totalLogins">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 handPoint">
                                                            Unique Logins
                                                        </div>
                                                        <div class="col-md-6 text-right">
                                                            <div class="form-group" id="uniqueLogins">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 text-danger handPoint" id="approvalpending">
                                                            <div id="approvalpendingdata"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default" id="dvNotifications" style="display:none; margin-bottom: 20px;">
                                                <div class="panel-heading">
                                                    <div class="panel-title-box">
                                                        <h3>
                                                            <img src="Content/Images/Notifi.png" />
                                                            &nbsp;&nbsp;&nbsp;Notifications
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <br /><br /><br />
                                                    <div class="row">
                                                        <div class="col-md-6 handPoint" id="casepending" onclick="return RedirectToQuery('ContactUsList');">
                                                            Query pending
                                                        </div>
                                                        <div class="col-md-6 text-right">
                                                            <div class="form-group">
                                                                <span id="querypending" class="badge badge-danger handPoint"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 text-danger handPoint" id="approvalpending">
                                                            <div id="approvalpendingdata"></div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <br />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                



                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-->
    <div class="clearfix"></div>
    

    <?php

    include('footer.php');

    ?>




    <script src="Scripts/jquery-3.5.1.min.js" type="text/javascript"></script>
    <script src="Scripts/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="Scripts/js/index.js" type="text/javascript"></script>
    <script src="Scripts/js/jquery.film_roll.js" type="text/javascript"></script>
    <script src="Scripts/jquery-ui.min.js" type="text/javascript"></script>
    <script src="Scripts/jqGridHelper.js" type="text/javascript"></script>
    <script src="Scripts/Custom/ValidationCheck.js"></script>
    <link rel="stylesheet" href="Scripts/slick/slick.css">
    <link rel="stylesheet" href="Scripts/slick/slick-theme.css">
    <script src="Scripts/slick/slick.js" type="text/javascript"></script>


    <script>
        $(document).ready(function() {
            $('.dropdown-toggle').dropdown()
            $('.img-zoom').hover(function() {
                $(this).addClass('transition');

            }, function() {
                $(this).removeClass('transition');
            });

            $(".vertical-center-4").slick({
                dots: false,
                vertical: false,
                centerMode: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000
            });
        });
    </script>



    <script>

    </script>
</body>

</html>