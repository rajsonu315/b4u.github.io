<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
    <title>Login Report</title>
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
        <div class="container container_bg">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">



                        <div class="Main_page">
                            <h2 class="head-h2">
                                Login Report
                            </h2>
                            <div class="mobile_div">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <form action="/LoginReport/Export" id="MyFormSteria1" method="post">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>From Date</label>
                                                        <input class="TextBoxDate form-control" type="text"
                                                            name="txtFromDate" id="txtFromDate" title="Enter Email" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>To Date</label>
                                                        <input class="TextBoxDate form-control" type="text"
                                                            name="txtToDate" id="txtToDate" title="Enter Email" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input class="rewardinput form-control" type="text"
                                                            name="txtUser" id="txtUser" title="Enter Email" />
                                                        <input class="rewardinput" type="hidden" name="HdntxtUser"
                                                            id="HdntxtUser" value="0" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 text-center">
                                                    <input name="Export" type="button" class="btn btn-success"
                                                        id="Export" value="Export" />&nbsp;&nbsp;&nbsp;
                                                    <input name="Search" type="button" class="btn btn-warning"
                                                        id="Search" value="Search" />
                                                </div>
                                            </div>
                                            <br />
                                        </form>
                                        <table id="tblEmp" border="0" cellpadding="0" cellspacing="0" width="100%"
                                            class="comman_table2" align="center">
                                            <tr class="tr-heading">
                                                <td>
                                                    #
                                                </td>
                                                <td>
                                                    User Name
                                                </td>
                                                <td>
                                                    First Name
                                                </td>
                                                <td>
                                                    Last Name
                                                </td>
                                                <td>
                                                    Program
                                                </td>
                                                <td>
                                                    Date
                                                </td>
                                                <td>
                                                    Action Name
                                                </td>
                                                <td>
                                                    Mobile
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
             



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