<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
    <title>Select Program</title>
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
    <script language="javascript" type="text/javascript">
        jQuery(document).ready(function () {
            $('input').attr('autocomplete', 'off');
            $(".trigger").ajaxStart(function () {
                overlay = $('<div></div>').prependTo('body').attr('id', 'overlay');
            });
            $(".trigger").ajaxStop(function () {
                overlay.remove();
            });
            $(document).ajaxStart(function () {
                $('.progress-indicator').css('display', 'block');
            });
            $(document).ajaxStop(function () {
                $('.progress-indicator').css('display', 'none');
            });
            LoadUserDetailsData();
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
            margin-top: 300px;
        }
    </style>
    <style type="text/css">
        #overlay {
            position: fixed;
            height: 100%;
            width: 100%;
            z-index: 1000000;
            background: url('../Content/images/al.gif');
            background-color: Black;
            opacity: 0.6;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>

<body>
<?php

include('header.php');
?>




    <div class="clearfix"></div>
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

                            .panel-default {
                                margin-bottom: 25px;
                            }

                            .pre-scrollable {
                                max-height: 520px;
                                overflow-y: scroll;
                            }

                            .panel-default a {
                                float: left;
                                color: #FF5800;
                                font-weight: bold;
                                font-size: 13px;
                                padding: 0px;
                                text-decoration: none;
                            }

                            .SelectProImg {
                                min-height: 500px;
                                height: auto;
                            }

                            .SelectProImg .headernm {
                                text-transform: uppercase;
                                font-weight: bold;
                            }
                        </style>
                        <div class="container">
                            <div class="homedivMid">

                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <div class="profileQuery text-center">
                                            <h4 class="mb-2"><a href="#"> Meeting Passcode</a></h4><br />
                                            <div class="row">
                                                <div class="col-md-8 ">
                                                    <div class="form-group"><input type="text" name="ENTER_PassCode"
                                                            id="ENTER_PassCode" maxlength="8"
                                                            class="form-control number-only"
                                                            placeholder="Enter Passcode" /></div>
                                                </div>
                                                <div class="col-md-4 "><a href="#"
                                                        onclick="return JoinMeetingWithPass();"
                                                        class="btn btn-default btn-block">Join</a></div>
                                            </div>
                                        </div>
                                        <br />
                                        <br />
                                        <div class="profilebox" style="display:none;">
                                        </div>
                                        <div class="profileQuery text-center">
                                            <h4><a href="/ContactUsList"> <img src="Content/Images/POST.png"
                                                        width="20" /> QUERIES</a></h4>
                                            <div id="dvPayData">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 ">
                                                    <div class="col-md-12 ">
                                                        List
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-6 ">
                                        <div class="row">
                                            <div class="col-md-12 SelectProImg ">
                                                <div class="row">
                                                    <div class="col-md-3" style="display:none;">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body" style="background: black;">
                                                                <a href="/AOP" target="_blank"><img
                                                                        src='https://www.britannia4u.com/assets/images/Metting-img.png'
                                                                        class="img-responsive" /></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <a href="/CreateMeeting" target="_blank"><img
                                                                        src='https://www.britannia4u.com/assets/images/Metting-img.png'
                                                                        class="img-responsive" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <a href="https://britannia-admin-portal.prod.actyv.com"
                                                                    target="_blank"><img
                                                                        src='https://www.britannia4u.com/assets/images/ActvyLogo.png'
                                                                        class="img-responsive" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <a href="/ZoomMeetingMaster"><img
                                                                        src='https://www.britannia4u.com/assets/images/Conclaue.png'
                                                                        class="img-responsive" /></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row" style="display:none;">
                                                        <div class="col-md-12">
                                                            <div class="col-md-3">
                                                                <div class="panel panel-default">
                                                                    <div class="panel-body">
                                                                        <a href="/Contest">
                                                                            <img src="https://www.britannia4u.com/assets/images/Conclaue.png"
                                                                                class="img-responsive" />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mobbr"></div>
                                                    <div class="col-md-12">
                                                        <h5 class="headernm"> Trade Facing</h5>
                                                    </div>
                                                    <div class="mobbr"></div>
                                                    <div class="col-md-3">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <a href="#" onclick="return SelectProgram(1);"><img
                                                                        src='https://www.britannia4u.com/Content/Images/ProgramLogo/Ace.png'
                                                                        class="img-responsive" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <a href="#" onclick="return SelectProgram(2);"><img
                                                                        src='https://www.britannia4u.com/Content/Images/ProgramLogo/Lakshya.png'
                                                                        class="img-responsive" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <a href="#" onclick="return SelectProgram(9);"><img
                                                                        src='https://www.britannia4u.com/Content/Images/ProgramLogo/ClubRoyal.png'
                                                                        class="img-responsive" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <h5 class="headernm"> Extended Sales Team</h5>
                                                    </div>
                                                    <div class="mobbr"></div>
                                                    <div class="col-md-3">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <a href="#" onclick="return SelectProgram(5);"><img
                                                                        src='https://www.britannia4u.com/Content/Images/ProgramLogo/Pragati.png'
                                                                        class="img-responsive" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <a href="#" onclick="return SelectProgram(10);"><img
                                                                        src='https://www.britannia4u.com/Content/Images/ProgramLogo/RTM.png'
                                                                        class="img-responsive" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="homedivbt2">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="redbtbg">

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="homedivbt">

                        </div>

                        <style>
                            .navbar-static-top {
                                z-index: 1 !important;
                            }

                            .inactivebox {
                                cursor: default !important;
                            }

                            .text-success2 {
                                cursor: pointer;
                            }
                        </style>

                        <script language="javascript">

                            function JoinMeetingWithPass() {
                                if ($("#ENTER_PassCode").val().trim() == "") {
                                    alert("Please enter meeting pass code.");
                                    return false;
                                }
                                if ($("#ENTER_PassCode").val().trim().length != 8) {
                                    alert("Please enter valid meeting pass code.");
                                    return false;
                                }

                                $.ajax({
                                    url: '/ZoomMeetingMaster/GetMeetingDetailWithPassCode',
                                    data: { PassCode: $("#ENTER_PassCode").val().trim() },
                                    async: true, type: 'POST',
                                    success: function (data) {
                                        if (data.error == false) {
                                            window.open('/ZMeetingDetail' + '?_z=' + data.message, data.message, "toolbar=yes,scrollbars=yes,resizable=yes,top=50,left=50,width=1000,height=1000");
                                        }
                                        else {
                                            alert(data.message);
                                        }
                                    }
                                });
                                return false;
                            }


                            var BaseURL = '/';
                            function RedirectToQuery(objData) {
                                $.ajax({
                                    url: '/Home/setprogram',
                                    data: { bpn_id: objData },
                                    async: true, type: 'POST',
                                    success: function (data) {
                                        window.location = BaseURL + "ContactUsList";
                                    }
                                });
                            }
                            function SelectProgram(objData) {
                                $.ajax({
                                    url: '/Home/setprogram',
                                    data: { bpn_id: objData },
                                    async: true, type: 'POST',
                                    success: function (data) {
                                        window.location = BaseURL + data;
                                    }
                                });
                            }
                            jQuery(document).ready(function ($) {
                                $('.progress-indicator').css('display', 'block');
                                $.fn.serializeObject = function () {
                                    var obj = {};
                                    $.each(this.serializeArray(), function (i, o) {
                                        var n = o.name,
                                            v = o.value;
                                        obj[n] = obj[n] === undefined ? v : $.isArray(obj[n]) ? obj[n].concat(v) : [obj[n], v];
                                    });
                                    return obj;
                                };
                                $.ajax({
                                    url: '/SelectProgram/GetQueryData',
                                    async: true,
                                    type: 'POST',
                                    success: function (data) {
                                        var strHTMLdata = "";
                                        var Flag = 0;
                                        for (i in data.qData) {
                                            strHTMLdata = strHTMLdata + '<div class="col-md-12">';
                                            strHTMLdata = strHTMLdata + '<div class="row">';
                                            strHTMLdata = strHTMLdata + '<div class="col-md-12">';
                                            strHTMLdata = strHTMLdata + '<div class="row">';
                                            strHTMLdata = strHTMLdata + '<div class="col-md-12 text-left text-success2" onclick="return RedirectToQuery(' + data.qData[i].USR_bpnid + ');"><b>' + data.qData[i].bpn_name;
                                            strHTMLdata = strHTMLdata + '</b></div>';
                                            strHTMLdata = strHTMLdata + '</div>';
                                            strHTMLdata = strHTMLdata + '<div class="row">';
                                            strHTMLdata = strHTMLdata + '<div class="col-lg-6 text-left">' + 'Open';
                                            strHTMLdata = strHTMLdata + '</div>';
                                            strHTMLdata = strHTMLdata + '<div class="col-lg-6 text-right">' + data.qData[i].OpenQueries;
                                            strHTMLdata = strHTMLdata + '</div>';
                                            strHTMLdata = strHTMLdata + '</div>';
                                            strHTMLdata = strHTMLdata + '<div class="row">';
                                            strHTMLdata = strHTMLdata + '<div class="col-lg-6 text-left">' + 'Pending';
                                            strHTMLdata = strHTMLdata + '</div>';
                                            strHTMLdata = strHTMLdata + '<div class="col-lg-6 text-right">' + data.qData[i].PendingQueries;
                                            strHTMLdata = strHTMLdata + '</div>';
                                            strHTMLdata = strHTMLdata + '</div>';
                                            strHTMLdata = strHTMLdata + '<div class="row">';
                                            strHTMLdata = strHTMLdata + '<div class="col-lg-6 text-left">' + 'Closed';
                                            strHTMLdata = strHTMLdata + '</div>';
                                            strHTMLdata = strHTMLdata + '<div class="col-lg-6 text-right">' + data.qData[i].ClosedQueries;
                                            strHTMLdata = strHTMLdata + '</div>';
                                            strHTMLdata = strHTMLdata + '</div>';
                                            strHTMLdata = strHTMLdata + '</div>';
                                            strHTMLdata = strHTMLdata + '</div>';
                                            strHTMLdata = strHTMLdata + '</div>';
                                            // strHTMLdata = strHTMLdata + '<div class="text-success">' + data.qData[i].bpn_name + '"<div class="row"><div class="col-md-12 text-center" style="padding: 5px;"> <strong>' + data.qData[i].Status + ' </strong></div></div></div>';
                                            Flag++;
                                        }
                                        $("#dvPayData").html(strHTMLdata);
                                    }
                                });
                            });

                        </script>
                        <script>
                            $(document).ready(function () {
                                $('.img-zoom').hover(function () {
                                    $(this).addClass('transition');

                                }, function () {
                                    $(this).removeClass('transition');
                                });

                                $(".vertical-center-4").slick({
                                    dots: false,
                                    vertical: true,
                                    centerMode: true,
                                    slidesToShow: 1,
                                    slidesToScroll: 1,
                                    autoplay: true,
                                    autoplaySpeed: 2000
                                });
                            });
                        </script>

                        <link rel="stylesheet" href="/Scripts/slick/slick.css">
                        <link rel="stylesheet" href="/Scripts/slick/slick-theme.css">
                        <script src="/Scripts/slick/slick.js" type="text/javascript"></script>


                    </div>
                </div>
            </div>
        </div>
    </div>
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


</body>

</html>