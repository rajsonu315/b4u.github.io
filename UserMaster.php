<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
    <title>User Master</title>
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




                        <link rel="stylesheet" type="text/css" href="/Content/multiple-select.css" />
                        <script type="text/javascript" src="/Scripts/jquery.multiple.select.js"></script>
                        <script src="/Scripts/jquery.form.js" type="text/javascript"></script>
                        <link href="/Content/jquery.fileupload-ui.css" rel="stylesheet" type="text/css" />
                        <link href="/Content/themes/base/jquery.ui.autocomplete.css" rel="stylesheet" type="text/css" />
                        <script src="/Scripts/jquery.fileupload.js" type="text/javascript"></script>
                        <script src="/Scripts/js/jquery-ui-1.8.13.custom.min.js" type="text/javascript"></script>
                        <script src="/Scripts/js/ui.dropdownchecklist-1.4-min.js"></script>
                        <script>
                            function NumbersOnly(evt) {
                                var charCode = (evt.which) ? evt.which : event.keyCode
                                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                                    return false;
                                }
                                return true;
                            }
                        </script>

                        <script type="text/javascript">
                            var lastSel;
                            var RootPath = "";
                            jQuery(document).ready(function() {
                                jQuery("#list").jqGrid({
                                    datatype: 'json',
                                    altRows: true,
                                    rowNum: 20,
                                    loadtext: "Please wait...",
                                    viewrecords: true,
                                    mtype: 'POST',
                                    pager: jQuery('#pager'),
                                    rowNum: 20,
                                    rowList: [5, 10, 20, 50, 100, 200, 500, 1000],
                                    viewrecords: true,
                                    recordtext: "Viewing {0} - {1} of {2}",
                                    imgpath: '/Scripts/css/blitzer/images',
                                    caption: "",
                                    url: RootPath + '/UserMaster/IndexJson',
                                    editurl: RootPath + '/UserMaster/Save',
                                    colNames: ['Id', 'User Name', 'First Name', 'Last Name',
                                        'Entity', 'Mobile', 'RSM', 'ASM', 'ASE', 'SOM', 'UDM', 'Region', 'User Type', 'Program', 'Tier', 'Status', 'KYC'
                                    ],
                                    colModel: [{
                                            name: 'USR_ID',
                                            key: true,
                                            hidden: true,
                                            index: 'USR_ID',
                                            width: 50,
                                            align: 'left',
                                            editable: false,
                                            searchoptions: {
                                                sopt: ['eq', 'ne']
                                            }
                                        },
                                        {
                                            name: 'USR_USERNAME',
                                            index: 'USR_USERNAME',
                                            width: 60,
                                            align: 'left',
                                            editable: true,
                                            searchoptions: {
                                                sopt: ['cn', 'eq', 'ne']
                                            }
                                        },
                                        {
                                            name: 'USR_FIRSTNAME',
                                            index: 'USR_FIRSTNAME',
                                            width: 100,
                                            align: 'left',
                                            editable: true,
                                            searchoptions: {
                                                sopt: ['cn', 'eq', 'ne']
                                            }
                                        },
                                        {
                                            name: 'USR_LASTNAME',
                                            index: 'USR_LASTNAME',
                                            width: 100,
                                            align: 'left',
                                            editable: true,
                                            searchoptions: {
                                                sopt: ['cn', 'eq', 'ne']
                                            }
                                        },
                                        {
                                            name: 'usr_distributer',
                                            index: 'usr_distributer',
                                            width: 150,
                                            align: 'left',
                                            editable: true,
                                            searchoptions: {
                                                sopt: ['cn', 'eq', 'ne']
                                            }
                                        },
                                        {
                                            name: 'USR_MOBILE',
                                            index: 'USR_MOBILE',
                                            width: 80,
                                            align: 'left',
                                            editable: true,
                                            searchoptions: {
                                                sopt: ['cn', 'eq', 'ne']
                                            }
                                        },
                                        {
                                            name: 'usr_regionalmanager',
                                            index: 'usr_regionalmanager',
                                            width: 80,
                                            align: 'left',
                                            editable: true,
                                            searchoptions: {
                                                sopt: ['cn', 'eq', 'ne']
                                            }
                                        },
                                        {
                                            name: 'usr_areasalesmanager',
                                            index: 'usr_areasalesmanager',
                                            width: 80,
                                            align: 'left',
                                            editable: true,
                                            searchoptions: {
                                                sopt: ['cn', 'eq', 'ne']
                                            }
                                        },
                                        {
                                            name: 'USR_ASEUserName',
                                            index: 'USR_ASEUserName',
                                            width: 80,
                                            align: 'left',
                                            editable: true,
                                            searchoptions: {
                                                sopt: ['cn', 'eq', 'ne']
                                            }
                                        },
                                        {
                                            name: 'USR_SOMUserName',
                                            index: 'USR_SOMUserName',
                                            width: 80,
                                            align: 'left',
                                            editable: true,
                                            searchoptions: {
                                                sopt: ['cn', 'eq', 'ne']
                                            }
                                        },
                                        {
                                            name: 'USR_UDM',
                                            index: 'USR_UDM',
                                            width: 80,
                                            align: 'left',
                                            editable: true,
                                            searchoptions: {
                                                sopt: ['cn', 'eq', 'ne']
                                            }
                                        },
                                        {
                                            name: 'USR_LOCATION',
                                            index: 'USR_LOCATION',
                                            width: 80,
                                            align: 'left',
                                            editable: true,
                                            edittype: 'select',
                                            stype: 'select',
                                            searchoptions: {
                                                sopt: ['eq'],
                                                dataUrl: '/UserMaster/GetCityList',
                                                buildSelect: BS
                                            },
                                            editoptions: {
                                                dataUrl: RootPath + '/UserMaster/GetCityList',
                                                buildSelect: BS
                                            }
                                        },
                                        {
                                            name: 'USR_TYPE',
                                            index: 'USR_TYPE',
                                            width: 80,
                                            align: 'left',
                                            editable: true,
                                            edittype: 'select',
                                            stype: 'select',
                                            searchoptions: {
                                                sopt: ['eq'],
                                                dataUrl: '/UserMaster/GetProfileList',
                                                buildSelect: BS
                                            },
                                            editoptions: {
                                                dataUrl: RootPath + '/UserMaster/GetProfileList',
                                                buildSelect: BS
                                            }
                                        },
                                        {
                                            name: 'usr_bpnid',
                                            index: 'usr_bpnid',
                                            width: 60,
                                            align: 'left',
                                            editable: true,
                                            edittype: 'select',
                                            stype: 'select',
                                            searchoptions: {
                                                sopt: ['eq'],
                                                dataUrl: '/UserMaster/GetBritanniaProgrameList',
                                                buildSelect: BS
                                            },
                                            editoptions: {
                                                dataUrl: '/UserMaster/GetBritanniaProgrameList',
                                                buildSelect: BS
                                            }
                                        },
                                        {
                                            name: 'USR_BRTTIER',
                                            index: 'USR_BRTTIER',
                                            width: 60,
                                            align: 'left',
                                            editable: true,
                                            edittype: 'select',
                                            stype: 'select',
                                            searchoptions: {
                                                sopt: ['eq'],
                                                dataUrl: '/UserMaster/GetBritaniaTierListUser',
                                                buildSelect: BS
                                            },
                                            editoptions: {
                                                dataUrl: '/UserMaster/GetBritaniaTierListUser',
                                                buildSelect: BS
                                            }
                                        },
                                        {
                                            name: 'USR_STATUS',
                                            index: 'USR_STATUS',
                                            width: 60,
                                            align: 'left',
                                            editable: true,
                                            edittype: 'select',
                                            stype: 'select',
                                            searchoptions: {
                                                sopt: ['eq'],
                                                dataUrl: '/UserMaster/GetStatuslist',
                                                buildSelect: BS
                                            },
                                            editoptions: {
                                                dataUrl: '/UserMaster/GetStatuslist',
                                                buildSelect: BS
                                            }
                                        },
                                        {
                                            name: 'USR_IsKYC',
                                            index: 'USR_IsKYC',
                                            width: 60,
                                            align: 'left',
                                            editable: true,
                                            edittype: 'select',
                                            stype: 'select',
                                            searchoptions: {
                                                value: ":All;1:Yes;2:No",
                                                sopt: ['eq', 'ne']
                                            }
                                        }
                                    ],
                                    sortname: 'USR_FIRSTNAME',
                                    sortorder: "asc",
                                    gridComplete: function() {
                                        var top_rowid = jQuery('#list tbody:first-child tr').eq(1).attr('USR_ID'); //jQuery('#list tbody:first-child tr:first').attr('amx_id');
                                        jQuery("#list").jqGrid('setSelection', top_rowid, false);
                                    },
                                    loadError: function(jqXHR, textStatus, errorThrown) {
                                        $('#notification').delay(0).fadeIn('fast');
                                        $('#notification').html('<div class="ui-widget"><div class="ui-state-error ui-corner-all" style="padding: 0 .7em;"><p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span><strong>Alert: </strong>' +
                                            decodeErrorMessage(jqXHR, textStatus, errorThrown) + '</p></div></div>');
                                        $('#notification').delay(5000).fadeOut('slow');
                                    },
                                    loadComplete: function() {
                                        $('#notification').html('');
                                    }
                                });
                                jQuery("#list").navGrid("#pager", {
                                    edit: false,
                                    add: false,
                                    del: false,
                                    deltext: '',
                                    refresh: true,
                                    refreshtext: '',
                                    search: true,
                                    searchtext: ''
                                }, {}, {}, {}, {
                                    multipleSearch: true
                                });
                                jQuery("#list").jqGrid('filterToolbar', {
                                    stringResult: true,
                                    searchOnEnter: false,
                                    defaultSearch: 'cn'
                                });

                                jQuery("#list").navGrid("#pager").navButtonAdd('#pager', {
                                    caption: "Filter",
                                    title: "Toggle Searching Toolbar",
                                    buttonicon: 'ui-icon-pin-s',
                                    onClickButton: function() {
                                        jQuery("#list")[0].toggleToolbar();
                                    }
                                });

                                jQuery("#list").navGrid("#pager").navButtonAdd('#pager', {
                                    caption: "Edit User",
                                    title: "Edit User",
                                    buttonicon: 'ui-icon ui-icon-pencil',
                                    onClickButton: function() {
                                        var myGrid = $('#list');
                                        var rowKey = myGrid.getGridParam('selrow');
                                        if (rowKey == undefined) {
                                            alert("Please select a row.");
                                        } else {
                                            $("#grid_wrapper").slideUp();
                                            $("#AddUser").slideDown();
                                            $("#AddUser").css("overflow", "visible");
                                            $.ajax({
                                                url: '/UserMaster/GetUserData',
                                                data: {
                                                    USR_CNYID: rowKey
                                                },
                                                async: true,
                                                type: 'POST',
                                                success: function(data) {
                                                    $('#USR_ID').val(data.USR_ID);
                                                    $.each(data, function(Name, Value) {
                                                        if (Value != null) {
                                                            $('#' + Name).val(Value);
                                                        } else {
                                                            $('#' + Name).val('');
                                                        }
                                                    });
                                                    $('#USR_bpnid').val(data.USR_bpnid);
                                                    LoadData(data);
                                                }
                                            });
                                        }
                                    }
                                });


                                jQuery("#list").navGrid("#pager").navButtonAdd('#pager', {
                                    caption: "Add User",
                                    title: "Add User",
                                    buttonicon: 'ui-icon ui-icon-plus',
                                    onClickButton: function() {
                                        $("#grid_wrapper").slideUp();
                                        $("#AddUser").slideDown();
                                        $("#AddUser").css("overflow", "visible");
                                        $("#AddUser").find('input[type="text"]').each(function() {
                                            $(this).val('');
                                        });
                                        $("#USR_ID").val('');
                                        $("#USR_LVLID option:eq(0)").attr('selected', 'selected');
                                        $("#USR_STATUS option:eq(0)").attr('selected', 'selected');
                                        $("#USR_CNYID option:eq(0)").attr('selected', 'selected');
                                        $("#USR_CAEID option:eq(0)").attr('selected', 'selected');
                                        $("#USR_DEPT option:eq(0)").attr('selected', 'selected');
                                        $("#USR_FUNID option:eq(0)").attr('selected', 'selected');
                                        $("#USR_COSTCODE option:eq(0)").attr('selected', 'selected');
                                        $("#USR_LOCATION option:eq(0)").attr('selected', 'selected');
                                        $("#USR_FUNID option:eq(0)").attr('selected', 'selected');
                                        $("#USR_PRFID option:eq(0)").attr('selected', 'selected');
                                    }
                                });

                                jQuery("#list").navGrid("#pager").navButtonAdd('#pager', {
                                    caption: "Upload User",
                                    title: "Bulk Upload",
                                    buttonicon: 'ui-icon ui-icon-plus',
                                    onClickButton: function() {
                                        window.location = "ImportProduct";
                                    }
                                });
                                jQuery("#list").navGrid("#pager").navButtonAdd('#pager', {
                                    caption: "Export Grid",
                                    title: "Export Grid",
                                    buttonicon: 'ui-icon ui-icon-plus',
                                    onClickButton: function() {
                                        jQuery("#MyForm3").submit();
                                    }
                                });
                                jQuery("#list").navGrid("#pager").navButtonAdd('#pager', {
                                    caption: "Export All",
                                    title: "Export All",
                                    buttonicon: 'ui-icon ui-icon-plus',
                                    onClickButton: function() {
                                        jQuery("#MyForm4").submit();
                                    }
                                });

                                resize_grid();
                                $(window).resize(resize_grid);
                                jQuery("#list")[0].toggleToolbar();
                                $("#grid_wrapper").slideDown();
                                $("#AddUser").slideUp();

                                $.ajax({
                                    url: '/UserMaster/GetCityListProfile',
                                    async: true,
                                    type: 'POST',
                                    success: function(data) {
                                        PopulateSelectWithData('USR_OBHNAME', data);
                                        $("#USR_OBHNAME").multipleSelect();
                                    }
                                });

                                $.ajax({
                                    url: '/UserMaster/GetCityList',
                                    data: {
                                        USR_CNYID: $('#USR_CNYID').val()
                                    },
                                    async: true,
                                    type: 'POST',
                                    success: function(data) {
                                        PopulateSelectWithData('USR_LOCATION', data);
                                        //$('#USR_LOCATION').val(data1.USR_LOCATION);
                                    }
                                });
                                $.ajax({
                                    url: '/UserMaster/GetBritaniaTierListUser',
                                    async: true,
                                    type: 'POST',
                                    success: function(data) {
                                        PopulateSelectWithData('USR_BRTTIER', data);

                                    }
                                });


                                $.ajax({
                                    url: '/UserMaster/GetProfileList',
                                    data: {
                                        USR_CNYID: $('#USR_CNYID').val()
                                    },
                                    async: true,
                                    type: 'POST',
                                    success: function(data) {
                                        PopulateSelectWithData('USR_PRFID', data);
                                        //$('#USR_PRFID').val(data1.USR_PRFID);
                                    }
                                });

                                $.ajax({
                                    url: '/UserMaster/GetGenderlist',
                                    async: true,
                                    type: 'POST',
                                    success: function(data) {
                                        PopulateSelectWithData('USR_GENDER', data);
                                    }
                                });
                                $.ajax({
                                    url: '/UserMaster/GetStatuslist',
                                    async: true,
                                    type: 'POST',
                                    success: function(data) {
                                        PopulateSelectWithData('USR_STATUS', data);
                                    }
                                });
                                $.ajax({
                                    url: '/UserMaster/GetBritanniaProgrameList',
                                    async: true,
                                    type: 'POST',
                                    success: function(data) {
                                        PopulateSelectWithData('USR_bpnid', data);
                                    }
                                });


                                $(function() {
                                    $(".datepicker").datepicker({
                                        dateFormat: "dd-M-yy"
                                    });
                                });

                                $("#Save").click(function() {
                                    $.ajax({
                                        url: '/UserMaster/SaveData',
                                        data: $('#MyForm').serializeObject(),
                                        async: true,
                                        type: 'POST',
                                        success: function(data) {
                                            alert(data);
                                            if (String(data).indexOf("saved successfully") > 0) {
                                                $("#grid_wrapper").slideDown();
                                                $("#AddUser").slideUp();
                                                $('#list').trigger("reloadGrid");
                                            }
                                        }
                                    });
                                });

                            });

                            function LoadData(data1) {
                                $.ajax({
                                    url: '/UserMaster/GetCityList',
                                    data: {
                                        USR_CNYID: $('#USR_CNYID').val()
                                    },
                                    async: true,
                                    type: 'POST',
                                    success: function(data) {
                                        PopulateSelectWithData('USR_LOCATION', data);
                                        $('#USR_LOCATION').val(data1.USR_LOCATION);
                                    }
                                });

                                $.ajax({
                                    url: '/UserMaster/GetProfileList',
                                    data: {
                                        USR_CNYID: $('#USR_CNYID').val()
                                    },
                                    async: true,
                                    type: 'POST',
                                    success: function(data) {
                                        PopulateSelectWithData('USR_PRFID', data);
                                        $('#USR_PRFID').val(data1.USR_PRFID);
                                    }
                                });
                            }

                            function resize_grid() {
                                $("#list").fluidGrid({
                                    base: '#grid_wrapper',
                                    offset: -5
                                });
                            }

                            function Back() {
                                $("#grid_wrapper").slideDown();
                                $("#AddUser").slideUp();
                            }

                            $.fn.serializeObject = function() {
                                var obj = {};

                                $.each(this.serializeArray(), function(i, o) {
                                    var n = o.name,
                                        v = o.value;
                                    obj[n] = obj[n] === undefined ? v : $.isArray(obj[n]) ? obj[n].concat(v) : [obj[n], v];
                                });

                                return obj;
                            };
                        </script>
                        <style>
                            .ui-dropdownchecklist-selector {
                                padding: 5px;
                            }

                            .ui-dropdownchecklist-selector imput {
                                width: 20px !important;
                            }

                            .Redemption_table input[type="checkbox"] {
                                padding: 5px;
                                border: 1px solid #ccc;
                                width: 20px;
                            }


                            .ui-state-default,
                            .ui-widget-content .ui-state-default,
                            .ui-widget-header .ui-state-default {
                                font-size: 12px;
                            }

                            .ms-drop {
                                width: 351px !important;
                            }

                            .ms-choice>span {
                                width: 330px !important;
                            }
                        </style>
                        <form action="/UserMaster/ExportAll" id="MyForm4" method="post"></form>
                        <form action="/UserMaster/ExportGrid" id="MyForm3" method="post"></form>
                        <div class="Main_page">
                            <h2 class="head-h2">
                                User Master
                            </h2>
                            <div class="mobile_div">
                                <div class="row">
                                    <div class="col-lg-12 scrollx">
                                        <div id="grid_wrapper" class="ui-corner-all floatLeft">
                                            <table id="list"></table>
                                            <div id="pager">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id="AddUser" style="vertical-align: top;">
                                            <form action="/AssignCampaignRecord/CampaignData" id="MyForm" method="post">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>User Name * </label>
                                                            <input type="text" name="USR_USERNAME" id="USR_USERNAME" class="form-control" />
                                                            <input type="hidden" name="USR_CNYID" id="USR_CNYID" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label> First Name *</label>
                                                            <input type="text" name="USR_FIRSTNAME" id="USR_FIRSTNAME" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Last Name *</label>
                                                            <input type="text" name="USR_LASTNAME" id="USR_LASTNAME" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="text" name="USR_EMAIL" id="USR_EMAIL" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Personal Email</label>
                                                            <input type="text" name="USR_ALTERNATEEMAILID" id="USR_ALTERNATEEMAILID" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Mobile *</label>
                                                            <input type="text" name="USR_MOBILE" id="USR_MOBILE" class="form-control" maxlength="10" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Phone</label>
                                                            <input type="text" name="USR_PHONE" id="USR_PHONE" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Address1</label>
                                                            <input type="text" name="USR_ADDRESS1" id="USR_ADDRESS1" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Address2</label>
                                                            <input type="text" name="USR_ADDRESS2" id="USR_ADDRESS2" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>City</label>
                                                            <input type="text" name="USR_CTYID" id="USR_CTYID" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>State</label>
                                                            <input type="text" name="USR_STATE" id="USR_STATE" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>PIN</label>
                                                            <input type="text" name="USR_PIN" id="USR_PIN" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Region</label>
                                                            <select id="USR_LOCATION" name="USR_LOCATION" class="form-control">
                                                                <option value="0" selected="selected">-- Select Location
                                                                    --</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Status *</label>
                                                            <input type="hidden" name="USR_ID" id="USR_ID" />
                                                            <select id="USR_STATUS" name="USR_STATUS" class="form-control"></select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Profile *</label>
                                                            <select id="USR_PRFID" name="USR_PRFID" class="form-control">
                                                                <option value="0" selected="selected">-- Select Profile
                                                                    --</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Region Manager</label>
                                                            <input type="text" name="usr_regionalmanager" id="usr_regionalmanager" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Area Sales Manager</label>
                                                            <input type="text" name="usr_areasalesmanager" id="usr_areasalesmanager" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>SOM</label>
                                                            <input type="text" name="USR_SOMUserName" id="USR_SOMUserName" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>ASE</label>
                                                            <input type="text" name="USR_ASEUserName" id="USR_ASEUserName" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>UDM</label>
                                                            <input type="text" name="USR_UDM" id="USR_UDM" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>RDM</label>
                                                            <input type="text" name="USR_RDM" id="USR_RDM" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>NSM</label>
                                                            <input type="text" name="USR_NSM" id="USR_NSM" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>NSDM</label>
                                                            <input type="text" name="USR_NSDM" id="USR_NSDM" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>VP Sales</label>
                                                            <input type="text" name="USR_VPSales" id="USR_VPSales" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Distributor</label>
                                                            <input type="text" name="usr_distributer" id="usr_distributer" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Tier</label>
                                                            <select id="USR_BRTTIER" name="USR_BRTTIER" class="form-control"></select>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Program</label>
                                                            <select id="USR_bpnid" name="USR_bpnid" class="form-control"></select>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Sub Program</label>
                                                            <input type="text" name="USR_subprogram" id="USR_subprogram" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>BDM</label>
                                                            <input type="text" name="USR_BDM" id="USR_BDM" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 text-center">
                                                        <div class="form-group">
                                                            <input name="Save" type="button" class="btn btn-danger" id="Save" value="Save" style="cursor: pointer;">&nbsp;&nbsp;&nbsp;
                                                            <input name="Cancel" type="button" class="btn btn-danger" id="Cancel" value="Cancel" style="cursor: pointer;" onclick="Back();" />
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