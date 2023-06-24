<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
    <title>Select Program</title>

    <style>
        .panel img{
           
            width: 100px !important;
            object-fit: contain;
            background-size: contain;
        }
        .panel {
            background-color: #fff;
            border: none !important;
            border-radius: 3px;
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .list-group-item {
            color: white !important;
            background: dimgrey !important;
            border-color: pink;
        }

        .list-group-horizontal {
            display: table;
            width: 100%;
            table-layout: fixed;
            border-collapse: separate;
        }

        .list-group-horizontal>.list-group-item {
            border: 1px solid grey;
            display: table-cell;
            float: none;
            text-align: center;
            width: 1%;
            border-radius: 0;
        }

        .list-group-horizontal>.list-group-item:first-child {
            border-bottom-left-radius: 3px;
        }

        .list-group-horizontal>.list-group-item:last-child {
            border-bottom-right-radius: 3px;
        }
    </style>

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




                        <div class="container">
                            <div class="homedivMid">

                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <div class="profileQuery text-center">
                                            <h4 class="mb-2"><a href="#"> Meeting Passcode</a></h4><br />
                                            <div class="row">
                                                <div class="col-md-8 ">
                                                    <div class="form-group"><input type="text" name="ENTER_PassCode" id="ENTER_PassCode" maxlength="8" class="form-control number-only" placeholder="Enter Passcode" /></div>
                                                </div>
                                                <div class="col-md-4 "><a href="#" class="btn btn-default btn-block">Join</a></div>
                                            </div>
                                        </div>
                                        <br />
                                        <br />
                                        <div class="profilebox" style="display:none;">
                                        </div>
                                        <div class="profileQuery text-center">
                                            <h4><a href="/ContactUsList"> <img src="Content/Images/POST.png" width="20" /> QUERIES</a></h4>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12 ">
                                                    <div class="panel panel-default ">
                                                        <div class="panel-body text-center">
                                                            <h4>Vikas</h4>
                                                        </div>
                                                        <div class="list-group-horizontal">
                                                            <a href="#" class="list-group-item">
                                                                Open

                                                            </a>
                                                            <a href="#" class="list-group-item">
                                                                1

                                                            </a>

                                                        </div>


                                                        <div class="list-group-horizontal">
                                                            <a href="#" class="list-group-item">
                                                                Pending

                                                            </a>
                                                            <a href="#" class="list-group-item">
                                                                2

                                                            </a>
                                                        </div>
                                                        <div class="list-group-horizontal">
                                                            <a href="#" class="list-group-item">
                                                                Closed

                                                            </a>
                                                            <a href="#" class="list-group-item">
                                                                3

                                                            </a>
                                                        </div>
                                                        <!--  -->
                                                        <div class="panel-body text-center">
                                                            <h4> Pragati</h4>
                                                        </div>
                                                        <div class="list-group-horizontal">
                                                            <a href="#" class="list-group-item">
                                                                Open

                                                            </a>
                                                            <a href="#" class="list-group-item">
                                                                1

                                                            </a>

                                                        </div>


                                                        <div class="list-group-horizontal">
                                                            <a href="#" class="list-group-item">
                                                                Pending

                                                            </a>
                                                            <a href="#" class="list-group-item">
                                                                2

                                                            </a>
                                                        </div>
                                                        <div class="list-group-horizontal">
                                                            <a href="#" class="list-group-item">
                                                                Closed

                                                            </a>
                                                            <a href="#" class="list-group-item">
                                                                3

                                                            </a>
                                                        </div>
                                                        <!--  -->



                                                    </div>


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="redbtbg">
                                            <div class="profileQuery text-center">

                                                <div class="row">
                                                    <div class="col-md-12 ">
                                                        <div class="panel panel-default ">

                                                            <!--  -->
                                                            <div class="panel-body text-center">
                                                                <h4>Ace Club</h4>
                                                            </div>
                                                            <div class="list-group-horizontal">
                                                                <a href="#" class="list-group-item">
                                                                    Open

                                                                </a>
                                                                <a href="#" class="list-group-item">
                                                                    1

                                                                </a>

                                                            </div>


                                                            <div class="list-group-horizontal">
                                                                <a href="#" class="list-group-item">
                                                                    Pending

                                                                </a>
                                                                <a href="#" class="list-group-item">
                                                                    2

                                                                </a>
                                                            </div>
                                                            <div class="list-group-horizontal">
                                                                <a href="#" class="list-group-item">
                                                                    Closed

                                                                </a>
                                                                <a href="#" class="list-group-item">
                                                                    3

                                                                </a>
                                                            </div>
                                                            <!--  -->
                                                            <div class="panel-body text-center">
                                                                <h4>Lakshya</h4>
                                                            </div>
                                                            <div class="list-group-horizontal">
                                                                <a href="#" class="list-group-item">
                                                                    Open

                                                                </a>
                                                                <a href="#" class="list-group-item">
                                                                    1

                                                                </a>

                                                            </div>


                                                            <div class="list-group-horizontal">
                                                                <a href="#" class="list-group-item">
                                                                    Pending

                                                                </a>
                                                                <a href="#" class="list-group-item">
                                                                    2

                                                                </a>
                                                            </div>
                                                            <div class="list-group-horizontal">
                                                                <a href="#" class="list-group-item">
                                                                    Closed

                                                                </a>
                                                                <a href="#" class="list-group-item">
                                                                    3

                                                                </a>
                                                            </div>

                                                            <!--  -->
                                                            <div class="panel-body text-center">
                                                                <h4>Rpd Shakti</h4>
                                                            </div>
                                                            <div class="list-group-horizontal">
                                                                <a href="#" class="list-group-item">
                                                                    Open

                                                                </a>
                                                                <a href="#" class="list-group-item">
                                                                    1

                                                                </a>

                                                            </div>


                                                            <div class="list-group-horizontal">
                                                                <a href="#" class="list-group-item">
                                                                    Pending

                                                                </a>
                                                                <a href="#" class="list-group-item">
                                                                    2

                                                                </a>
                                                            </div>
                                                            <div class="list-group-horizontal">
                                                                <a href="#" class="list-group-item">
                                                                    Closed

                                                                </a>
                                                                <a href="#" class="list-group-item">
                                                                    3

                                                                </a>
                                                            </div>
                                                            <!--  -->

                                                        </div>


                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="redbtbg">
                                            <div class="profileQuery text-center">

                                                <div class="row">
                                                    <div class="col-md-12 ">
                                                        <div class="panel panel-default ">


                                                            <!--  -->
                                                            <div class="panel-body text-center">
                                                                <h4>Club Royal</h4>
                                                            </div>
                                                            <div class="list-group-horizontal">
                                                                <a href="#" class="list-group-item">
                                                                    Open

                                                                </a>
                                                                <a href="#" class="list-group-item">
                                                                    1

                                                                </a>

                                                            </div>


                                                            <div class="list-group-horizontal">
                                                                <a href="#" class="list-group-item">
                                                                    Pending

                                                                </a>
                                                                <a href="#" class="list-group-item">
                                                                    2

                                                                </a>
                                                            </div>
                                                            <div class="list-group-horizontal">
                                                                <a href="#" class="list-group-item">
                                                                    Closed

                                                                </a>
                                                                <a href="#" class="list-group-item">
                                                                    3

                                                                </a>
                                                            </div>

                                                            <!--  -->
                                                            <div class="panel-body text-center">
                                                                <h4>Rtm</h4>
                                                            </div>
                                                            <div class="list-group-horizontal">
                                                                <a href="#" class="list-group-item">
                                                                    Open

                                                                </a>
                                                                <a href="#" class="list-group-item">
                                                                    1

                                                                </a>

                                                            </div>


                                                            <div class="list-group-horizontal">
                                                                <a href="#" class="list-group-item">
                                                                    Pending

                                                                </a>
                                                                <a href="#" class="list-group-item">
                                                                    2

                                                                </a>
                                                            </div>
                                                            <div class="list-group-horizontal">
                                                                <a href="#" class="list-group-item">
                                                                    Closed

                                                                </a>
                                                                <a href="#" class="list-group-item">
                                                                    3

                                                                </a>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-3 ">
                                        <div class="row">
                                            <div class="col-md-12  ">
                                                <div class="row">
                                                    <!-- <div class="col-md-3">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body" style="background: black;">
                                                                <a href="/AOP"><img src='https://www.britannia4u.com/assets/images/Metting-img.png' class="img-responsive" /></a>
                                                            </div>
                                                        </div>
                                                    </div> --> <br><br>

                                                    <div class="col-md-4">
                                                        <div class="panel ">
                                                            <div class="">
                                                                <a href="CreateMeeting.php"><img src='https://www.britannia4u.com/assets/images/Metting-img.png' class="img-responsive" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="panel ">
                                                            <div class="">
                                                                <a href="https://britannia-admin-portal.prod.actyv.com"><img src='https://www.britannia4u.com/assets/images/ActvyLogo.png' class="img-responsive" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="panel ">
                                                            <div class="">
                                                                <a href="ZoomMeetingMaster.php"><img src='https://www.britannia4u.com/assets/images/Conclaue.png' class="img-responsive" /></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- <div class="row" style="display:none;">
                                                        <div class="col-md-12">
                                                            <div class="col-md-3">
                                                                <div class="panel ">
                                                                    <div class="">
                                                                        <a href="Contest.php">
                                                                            <img src="https://www.britannia4u.com/assets/images/Conclaue.png" class="img-responsive" />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <div class="mobbr"></div>
                                                    <div class="col-md-12">
                                                        <h5 class="headernm"> Trade Facing</h5>
                                                    </div>
                                                    <div class="mobbr"></div>
                                                    <div class="col-md-4">
                                                        <div class="panel ">
                                                            <div class="">
                                                                <a href="index.php" onclick="return SelectProgram(1);"><img src='https://www.britannia4u.com/Content/Images/ProgramLogo/Ace.png' class="img-responsive" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="panel ">
                                                            <div class="">
                                                                <a href="index.php" onclick="return SelectProgram(2);"><img src='https://www.britannia4u.com/Content/Images/ProgramLogo/Lakshya.png' class="img-responsive" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="panel ">
                                                            <div class="">
                                                                <a href="index.php" onclick="return SelectProgram(9);"><img src='https://www.britannia4u.com/Content/Images/ProgramLogo/ClubRoyal.png' class="img-responsive" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <h5 class="headernm"> Extended Sales Team</h5>
                                                    </div>
                                                    <div class="mobbr"></div>
                                                    <div class="col-md-6">
                                                        <div class="panel ">
                                                            <div class="">
                                                                <a href="index.php" onclick="return SelectProgram(5);"><img src='https://www.britannia4u.com/Content/Images/ProgramLogo/Pragati.png' class="img-responsive" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="panel ">
                                                            <div class="">
                                                                <a href="index.php" onclick="return SelectProgram(10);"><img src='https://www.britannia4u.com/Content/Images/ProgramLogo/RTM.png' class="img-responsive" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="homedivbt2">
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>







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




</body>

</html>