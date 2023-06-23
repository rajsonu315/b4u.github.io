<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
    <title>ContactUs Query</title>
    <link rel="shortcut icon" type="image/x-icon" href="Content/Images/favicon.ico" />
    <link href="Content/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="Content/css/font-awesome.css" rel="stylesheet">
    <link href="Content/css/carousel.css" rel="stylesheet" type="text/css" />
    <link href="Content/Site.css" rel="stylesheet" type="text/css" />
    <link href="Content/css/index.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="Content/themes/blitzer/jquery-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="Content/themes/blitzer/jquery-ui.theme.min.css" />
    <link rel="stylesheet" type="text/css" href="Content/themes/blitzer/jquery-ui.structure.min.css" />


    <script language="javascript" type="text/javascript">
        var BaseURL = '/';
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
        function LoadUserDetailsData() {
            $.ajax({
                url: '/Home/GetUserData',
                data: { USR_ID: $("#hdnLoginId").val() },
                async: true, type: 'POST',
                success: function (data) {
                    if (data.USR_IMAGE != "" && data.USR_IMAGE != null) {
                        var imurl = '/Content/ProductExcel/';
                        $("#userimage").attr("src", imurl + data.USR_IMAGE);
                        $("#userimage1").attr("src", imurl + data.USR_IMAGE);
                    }
                    else {
                        var imurl = '/Content/images/';
                        $("#userimage").attr("src", imurl + "no-image.png");
                        $("#userimage1").attr("src", imurl + "no-image.png");
                    }
                    $("#displayname").text(data.USR_FIRSTNAME);
                    $(".pro_name").text(data.USR_FIRSTNAME + " " + data.USR_LASTNAME);
                    $(".loc").text(data.USR_LOCATION);
                }
            });
        }
    </script>
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



                        <script type="text/javascript">
                            var lastSel;

                            jQuery(document).ready(function () {
                                jQuery("#list").jqGrid({
                                    datatype: 'json',
                                    altRows: true,
                                    rowNum: 20,
                                    loadtext: "Please wait...",
                                    viewrecords: true,
                                    mtype: 'POST',
                                    pager: jQuery('#pager'),
                                    rowNum: 20,
                                    rowList: [5, 10, 20, 50],
                                    viewrecords: true,
                                    recordtext: "Viewing {0} - {1} of {2}",
                                    imgpath: '/Scripts/css/blitzer/images',
                                    caption: "",
                                    url: '/ContactUsList/IndexJson' + "?fromDate=" + $("#FromDate").val() + "&toDate=" + $("#ToDate").val(),
                                    editurl: '/ContactUsList/Save',
                                    colNames: ['Id', 'User Name', 'Entity Name', 'Role', 'Region', 'Mobile', 'Reason', 'Status', 'Date', 'Pending With', 'Updated Date', 'Program', 'Ticket No'],
                                    colModel: [
                                        { name: 'cnt_id', key: true, width: 50, index: 'cnt_id', align: 'left', hidden: false, editable: false, searchoptions: { sopt: ['eq', 'ne'] } },
                                        { name: 'USERMASTER.USR_USERNAME', width: 100, index: 'USERMASTER.USR_USERNAME', align: 'left', editable: true, searchoptions: { sopt: ['cn', 'eq', 'ne'] } },
                                        { name: 'USERMASTER.usr_distributer', width: 150, index: 'USERMASTER.usr_distributer', align: 'left', editable: true, searchoptions: { sopt: ['cn', 'eq', 'ne'] } },

                                        { name: 'USERMASTER.ROLES.ROL_NAME', width: 80, index: 'USERMASTER.ROLES.ROL_NAME', align: 'left', editable: true, searchoptions: { sopt: ['cn', 'eq', 'ne'] } },
                                        { name: 's.USERMASTER.BRANCH.BRA_NAME', width: 70, index: 's.USERMASTER.BRANCH.BRA_NAME', align: 'left', editable: true, searchoptions: { sopt: ['cn', 'eq', 'ne'] } },
                                        { name: 'USERMASTER.USR_MOBILE', width: 90, index: 'USERMASTER.USR_MOBILE', align: 'left', editable: true, searchoptions: { sopt: ['cn', 'eq', 'ne'] } },
                                        { name: 'cnt_reason', width: 100, index: 'cnt_reason', align: 'left', editable: true, searchoptions: { sopt: ['cn', 'eq', 'ne'] } },
                                        { name: 'cnt_status', width: 80, index: 'cnt_status', align: 'left', editable: true, stype: "select", searchoptions: { value: ":All;1:Open;6:Pending;2:Closed", sopt: ['eq', 'ne'] } },
                                        { name: 'cnt_date', width: 120, index: 'cnt_date', align: 'left', editable: true, searchoptions: { sopt: ['cn', 'eq', 'ne'] } },

                                        { name: 'pendingwithUserName', width: 120, index: 'pendingwithUserName', align: 'left', editable: true, stype: "select", searchoptions: { value: ":All;1:Pending with ASE;2:Pending with ASM;3:Pending with SOM;4:Pending with UDM;5:Pending with Admin", sopt: ['eq', 'ne'] } },
                                        { name: 'cnt_updateddate', width: 150, index: 'cnt_updateddate', align: 'left', editable: true, searchoptions: { sopt: ['cn', 'eq', 'ne'] } },
                                        { name: 'USERMASTER.BritanniaPrograme.bpn_name', width: 100, index: 'USERMASTER.BritanniaPrograme.bpn_name', align: 'left', editable: true, searchoptions: { sopt: ['cn', 'eq', 'ne'] } },
                                        { name: 'cnt_id', width: 80, index: 'cnt_id', align: 'left', editable: true, searchoptions: { sopt: ['cn', 'eq', 'ne'] } },
                                    ],
                                    sortname: 'cnt_date',
                                    sortorder: "desc",
                                    gridComplete: function () {
                                        var top_rowid = jQuery('#list tbody:first-child tr').eq(1).attr('BRA_ID'); //jQuery('#list tbody:first-child tr:first').attr('amx_id');
                                        jQuery("#list").jqGrid('setSelection', top_rowid, false);
                                    },
                                    loadError: function (jqXHR, textStatus, errorThrown) {
                                        $('#notification').delay(0).fadeIn('fast');
                                        $('#notification').html('<div class="ui-widget"><div class="ui-state-error ui-corner-all" style="padding: 0 .7em;"><p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span><strong>Alert: </strong>' +
                                            decodeErrorMessage(jqXHR, textStatus, errorThrown) + '</p></div></div>');
                                        $('#notification').delay(5000).fadeOut('slow');
                                    },
                                    loadComplete: function () {
                                        $('#notification').html('');
                                    }
                                });
                                jQuery("#list").navGrid("#pager", { edit: false, add: false, del: false, deltext: '', refresh: true, refreshtext: '', search: true, searchtext: '' }, {}, {}, {}, { multipleSearch: true });
                                jQuery("#list").jqGrid('filterToolbar', { stringResult: true, searchOnEnter: false, defaultSearch: 'cn' });
                                jQuery("#list").inlineNav("#pager", {
                                    add: false, addtext: '', edit: false, edittext: '', editicon: "ui-icon-pencil",
                                    editParams: {
                                        keys: true,
                                        aftersavefunc: function (rowid, response) { $('#list').trigger("reloadGrid"); },
                                        restoreAfterError: false,
                                        errorfunc: AfterErrorFunc
                                    }
                                });
                                jQuery("#list").navGrid("#pager").navButtonAdd('#pager', {
                                    caption: "Filter", title: "Toggle Searching Toolbar",
                                    buttonicon: 'ui-icon-pin-s',
                                    onClickButton: function () { jQuery("#list")[0].toggleToolbar(); }
                                });
                                jQuery("#list").navGrid("#pager").navButtonAdd('#pager', {
                                    caption: "Export", title: "Export",
                                    buttonicon: 'ui-icon-pin-s',
                                    onClickButton: function () {
                                        $("#txtFromDate1").val($("#txtFromDate").val());
                                        $("#txtToDate1").val($("#txtToDate").val());
                                        $('#myID').submit();
                                    }
                                });
                                jQuery("#list").navGrid("#pager").navButtonAdd('#pager', {
                                    caption: "View Detail", title: "View Detail",
                                    buttonicon: 'ui-icon-pin-s',
                                    onClickButton: function () {
                                        var myGrid = $('#list');
                                        var rowKey = myGrid.getGridParam('selrow');
                                        if (rowKey == undefined) {
                                            alert("Please select a row.");
                                        }
                                        else {
                                            var title = "";
                                            var w = 1200;
                                            var h = 700;
                                            var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
                                            var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;

                                            width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
                                            height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

                                            var left = ((width / 2) - (w / 2)) + dualScreenLeft;
                                            var top = ((height / 2) - (h / 2)) + dualScreenTop;
                                            var newWindow = window.open('/ContactUsList/Detail' + '?cnt_id=' + rowKey, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
                                            // Puts focus on the newWindow
                                            if (window.focus) {
                                                newWindow.focus();
                                            }
                                        }
                                    }
                                });
                                jQuery("#list")[0].toggleToolbar();
                                resize_grid();
                                $(window).resize(resize_grid);

                            });
                            $(function () {
                                $(".datepicker").datepicker({ dateFormat: "dd/M/yy" });
                            });
                            function resize_grid() {
                                $("#list").fluidGrid({ base: '#grid_wrapper', offset: -5 });
                            }
                            function ExportData() {
                                $('#myID1').submit();
                            }
                            function gridSearch() {
                                $("#list").setGridParam(
                                    { url: '/ContactUsList/IndexJson' + "?txtFromDate=" + $("#txtFromDate").val() + "&txtToDate=" + $("#txtToDate").val(), page: 1 }).trigger("reloadGrid");
                                return false
                            }
                        </script>

                        <div class="Main_page">
                            <h2 class="head-h2">
                                Contact Us Query
                            </h2>
                            <div class="myorderpage">
                                <form action="/ContactUsList/ExportAll" area="" id="myID1" method="post">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>From Date:</label>
                                                <input class="form-control datepicker" type="text" name="txtFromDate"
                                                    id="txtFromDate" title="Enter Email" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>To Date:</label>
                                                <input class="form-control datepicker" type="text" name="txtToDate"
                                                    id="txtToDate" title="Enter Email" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>&nbsp;<br /></label><br />
                                                <input name="Search" type="button" class="btn btn-success adn-btn "
                                                    id="Search" value="Search"
                                                    onclick="gridSearch();" />&nbsp;&nbsp;&nbsp;
                                                <input name="Export" type="button" class="btn btn-success adn-btn "
                                                    id="Export" value="Export" onclick="ExportData();" />
                                            </div>
                                        </div>
                                    </div>
                                </form> <br />
                                <div class="row">
                                    <div class="col-lg-12 pre-scrollable">
                                        <div class=" scrollx">
                                            <div id="grid_wrapper" class="ui-corner-all floatLeft">
                                                <table id="list"></table>
                                                <div id="pager">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form action="/ContactUsList/ExportGrid" area="" id="myID" method="post"> <input
                                        type="hidden" name="txtFromDate1" id="txtFromDate1" value="" />
                                    <input type="hidden" name="txtToDate1" id="txtToDate1" value="" />
                                </form>
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