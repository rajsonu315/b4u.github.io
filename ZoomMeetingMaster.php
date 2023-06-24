<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
    <title>Online Meeting Master</title>


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




                        <link href="/Content/themes/blitzer/jquery-ui-1.8.18.custom.css" rel="stylesheet" type="text/css" />

                        <link href="/Content/themes/base/jquery.ui.autocomplete.css" rel="stylesheet" type="text/css" />
                        <script src="/Scripts/js/jquery-ui-1.8.13.custom.min.js" type="text/javascript"></script>

                        <script src="/Scripts/Custom/ValidationCheck.js"></script>

                        <style>
                            body {
                                -webkit-box-sizing: border-box;
                                -moz-box-sizing: border-box;
                                box-sizing: border-box;
                            }

                            .comman_table td input {
                                height: auto;
                            }

                    

                            .statusbx .btn-danger {
                                color: #fff;
                                background-color: #eb1c23;
                                border-color: #eb1c23;
                            }

                            .statusbx .btn-info {
                                color: #fff;
                                background-color: #5db400;
                                border-color: #5db400;
                            }

                            .form-group label {
                                font-weight: bold;
                            }

                            #ui-dialog-title-contentdialog2 {
                                font-size: 1.3em;
                            }

                            /*.ui-dialog {
        z-index: 1120;
    }*/
                            .ui-widget-overlay {
                                z-index: 1000 !important;
                            }

                            #dvMessage {
                                font-size: 14px;
                            }

                            #contentdialog2 .btn {
                                font-size: 1.3em;
                            }
                        </style>
                        <div class="Main_page">
                            <h2 class="head-h2">
                                Online Meeting Master
                            </h2>
                            <div class="mobile_div">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="admin-div">
                                            <div class="admin-bg">
                                                <div class="row">
                                                    <div class="col-lg-12 scrollx" id="divGridData">
                                                        <div id="grid_wrapper" class="ui-corner-all floatLeft">
                                                            <table id="list"></table>
                                                            <div id="pager">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12" style="margin-top:10px;">
                                                            <input type="hidden" name="usrtype" id="usrtype" value="48" />
                                                            <a href="javascript:void(0)" id="btnAdd" name="btnAdd" onclick="AddMeeting();" class="btn btn-danger"><i class="fa fa-users"></i> New Meeting</a>&nbsp;&nbsp;&nbsp;
                                                            <a href="javascript:void(0)" id="btnJoin" name="btnJoin" onclick="JoinMeeting();" class="btn btn-danger"><i class="fa fa-users"></i> Join Meeting</a>&nbsp;&nbsp;&nbsp;
                                                            <a href="" id="btnDashboard" name="btnDashboard" class="btn btn-danger"><i class="fa fa-dashboard"></i> Meeting Dashboard</a>&nbsp;&nbsp;&nbsp;
                                                            <a href="javascript:void(0)" id="btnMView" name="btnMView" onclick="ViewScheduleAll();" class="btn btn-danger"><i class="fa fa-eye"></i> View Calendar</a>&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;
                                                            <a href="javascript:void(0)" type="button" id="btnZoomGroup" name="btnZoomGroup" onclick="btnZoomAddGroup();" class="btn btn-danger"><i class="fa fa-file-text-o"></i> Groups</a>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="AddZoomMeetingMaster" style="display:none; vertical-align: top; overflow: visible !important;">
                                                    <form action="" id="MyForm" method="post">
                                                        <div class="row" id="tblEmpBudgetView">

                                                            <div class="col-lg-12" >
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label>Meeting Title*</label>
                                                                            <input type="hidden" name="ZOMT_ID_ZOMU" id="ZOMT_ID_ZOMU" value="" />
                                                                            <input type="hidden" name="ZMP_ID" id="ZMP_ID" value="" />
                                                                            <input type="hidden" name="ZMG_ID" id="ZMG_ID" value="" />
                                                                            <input type="hidden" name="ZOMT_STATUS" id="ZOMT_STATUS" value="1" />
                                                                            <input type="hidden" name="ZOMT_TYPE" id="ZOMT_TYPE" value="2" />
                                                                            <input type="hidden" name="ZOMT_ID" id="ZOMT_ID" /><span id="errmsg" style="color:Red"></span>
                                                                            <input type="text" name="ZOMT_TITLE" id="ZOMT_TITLE" class="form-control" /><span id="errmsg" style="color:Red"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <div class="form-group">
                                                                            <label>Meeting Type*</label>
                                                                            <select id="ZOMT_MEETTYPE" name="ZOMT_MEETTYPE" style="width:100%" class="form-control"></select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <div class="form-group">
                                                                            <label>Open/Closed Meeting</label><br />
                                                                            <select id="ZOMT_OPENCLOSED" name="ZOMT_OPENCLOSED" style="width:100%" class="form-control"></select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>Meeting Description*</label>
                                                                            <textarea class="form-control" cols="20" id="ZOMT_DESCRIPTION" name="ZOMT_DESCRIPTION" rows="2" style="width:100%"></textarea><span id="errmsgs" style="color:Red"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-3">
                                                                        <div class="form-group">
                                                                            <label>Meeting From Date*</label>
                                                                            <input type="text" name="ZOMT_FROMTIME" id="ZOMT_FROMTIME" class="form-control datepicker" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <div class="form-group">
                                                                            <label>Meeting To Date*</label>
                                                                            <input type="text" name="ZOMT_TOTIME" id="ZOMT_TOTIME" class="form-control datepicker" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <div class="form-group">
                                                                            <label>Meeting Room*</label>
                                                                            <select id="ZOMT_ZOMUID" name="ZOMT_ZOMUID" class="form-control" onchange="return CheckRoomAvailability();">
                                                                                <option value="0" selected="selected">-- Select Room --</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 statusbx">
                                                                        <div class="form-group">
                                                                            <label>Room Status</label>
                                                                            <div class="row">
                                                                                <div class="col-lg-6">
                                                                                    <a class="btn btn-block " id="dvAvailable"></a>
                                                                                </div>
                                                                                <div class="col-lg-6">
                                                                                    <a href="#" class="btn btn-warning text-info" onclick="ViewSchedule();">View Calendar</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="row">

                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label>Participant(s)**</label>
                                                                            <input type="text" name="ZMP_ZOMTID" id="ZMP_ZOMTID" style="width:100%" class="form-control" /><span id="errmsg" style="color:Red"></span>
                                                                            <div id="divEmailNames">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label>Group(s)**</label>
                                                                            <input type="text" name="ZMG_ZOMTID" id="ZMG_ZOMTID" style="width:100%" class="form-control" /><span id="errmsg" style="color:Red"></span>
                                                                            <div id="divGroupNames">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="form-group text-center">
                                                                            <input name="Save" type="button" class="btn btn-danger" id="Save" value="Save" style="cursor: pointer; width:80px;" />
                                                                            &nbsp; &nbsp; &nbsp;
                                                                            <input name="Cancel" type="button" class="btn btn-danger" id="Cancel" value="Cancel" style="cursor: pointer; width:80px;" onclick="Back();" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="contentdialog1" style="display: none; overflow: hidden;">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label><strong>Remark*</strong></label>
                                        <input type="hidden" id="hdnRefId" value="" />
                                        <input type="hidden" id="hdnsbr_status" value="" />
                                        <textarea id="txtRemark" name="txtRemark" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <div class="form-group">
                                        <input type="button" id="btnSubmitData" value="Update" class="btn btn-danger" onclick="ApproveReferral();" />
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="contentdialog2" style="display: none; overflow: hidden;">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div id="dvMessage"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <div class="form-group">
                                        <input type="button" id="btnSubmitData1" value="Close" class="btn btn-danger" onclick="ClosePopUp();" />
                                    </div>
                                </div>
                            </div>
                        </div>


                        
               
                        <script type="text/javascript" src="/Scripts/jquery.tokeninput.js"></script>
                        <link href="/Content/token-input-facebook.css" rel="stylesheet" type="text/css" />
                        <script src="/Scripts/jquery.datetimepicker.js" type="text/javascript"></script>
                        <link href="/Content/jquery.datetimepicker.css" rel="stylesheet" type="text/css" />

                 


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