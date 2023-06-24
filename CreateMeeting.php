<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
    <title>Create Meeting</title>


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
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="head-h2">Meeting List</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 scrollx">
                                    <div id="grid_wrapper" class="ui-corner-all floatLeft">
                                        <table id="list"></table>
                                        <div id="pager">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="dvDetails" style="display:none;">
                                <div class="col-lg-12">

                                    <form action="/CreateMeeting/Save" id="MyForm" method="post"> <input type="hidden" id="usrtype" name="usrtype" value="48" />
                                        <input type="hidden" id="mt_id" name="mt_id" />
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Meeting Date*</label>
                                                    <input type="text" name="mt_date" id="mt_date" class="datepicker form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>SS Code*</label>
                                                    <input type="hidden" name="mt_ssid" id="mt_ssid" />
                                                    <input type="text" name="txtSSName" id="txtSSName" class="form-control" placeholder="Enter SS Code" />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>SDA/PSM/RSA Name/ID</label>
                                                    <input type="hidden" name="mt_psdid" id="mt_psdid" />
                                                    <input type="text" name="txtPSDName" id="txtPSDName" class="form-control" placeholder="Enter PSD Name/ID" />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Status*</label>
                                                    <select id="mt_status" name="mt_status" class="form-control">
                                                        <option value="0">Select Status</option>
                                                        <option value="1">Scheduled</option>
                                                        <option value="5">Cancelled</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <div class="form-group">
                                                    <input id="submit1" class="btn btn-danger" name="submit1" value="Submit" type="button" onclick="return SaveData();" />&nbsp;&nbsp;&nbsp;
                                                    <input id="btnCancel" class="btn btn-danger" name="Cancel" value="Cancel" type="button" onclick="return CancelData();" />
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row" id="dvUpload" style="display:none;">
                                <div class="col-lg-12">
                                    <form action="/CreateMeeting/SaveImage" enctype="multipart/form-data" id="MyFormPhoto" method="post"> <input type="hidden" id="id" name="id" value="" />
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Meeting Photo*</label>
                                                            <input type="file" name="mt_photo" id="mt_photo" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Invoice/Bill*</label>
                                                            <input type="file" name="mt_billphoto" id="mt_billphoto" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>File 1</label>
                                                            <input type="file" name="mt_photo1" id="mt_photo1" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>File 2</label>
                                                            <input type="file" name="mt_photo2" id="mt_photo2" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Additional Participant(s)</label>
                                                            <input type="text" name="ZMP_ZOMTID" id="ZMP_ZOMTID" style="width:100%" class="form-control" /><span id="errmsg" style="color:Red"></span>
                                                            <div id="divEmailNames">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Remark*</label>
                                                            <textarea name="mt_remark" id="mt_remark" class="form-control" placeholder="Enter Remark"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <div class="form-group">
                                                    <input id="submit1" class="btn btn-danger" name="submit1" value="Submit" type="button" onclick="return SaveDataRemark();" />
                                                    <input id="btnCancel" class="btn btn-danger" name="Cancel" value="Cancel" type="button" onclick="return CancelDataRemark();" />
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row" id="dvApprove" style="display:none;">
                                <div class="col-lg-12">
                                    <form action="/CreateMeeting/SaveApprove" enctype="multipart/form-data" id="MyFormApprove" method="post"> <input type="hidden" id="_id" name="_id" value="" />
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Remarks*</label>
                                                    <textarea name="mt_approvalremark" id="mt_approvalremark" class="form-control" placeholder="Enter Remark"></textarea>

                                                </div>
                                            </div>
                                            <div class="col-md-6 text-left">
                                                <div class="form-group">
                                                    <label>&nbsp;<br /></label><br />
                                                    <input id="submit1" class="btn btn-danger" name="submit1" value="Submit" type="button" onclick="return SaveDataApprove();" /> &nbsp;&nbsp;&nbsp;
                                                    <input id="btnCancel" class="btn btn-danger" name="Cancel" value="Cancel" type="button" onclick="return CancelDataApprove();" />
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <script type="text/javascript" src="Scripts/jquery.tokeninput.js"></script>
                        <link href="Content/token-input-facebook.css" rel="stylesheet" type="text/css" />
                        <script src="Scripts/jquery.datetimepicker.js" type="text/javascript"></script>
                        <link href="Content/jquery.datetimepicker.css" rel="stylesheet" type="text/css" />
                        <script src="Scripts/jquery.form.js"></script>
                        <script type="text/javascript">
                            var lastSel;
                            jQuery(document).ready(function() {
                                $("#ZMP_ZOMTID").tokenInput('/ZoomMeetingMaster/GetParticipantList', {
                                    preventDuplicates: true,
                                    theme: "facebook",
                                    hintText: "Type email or mobile..."
                                });
                                $('#MyFormPhoto').ajaxForm({
                                    beforeSubmit: function(formData, form, options) {
                                        return true;
                                    },
                                    beforeSerialize: function(formData, options) {},
                                    complete: function(response) {
                                        var obj = JSON.parse(response.responseText);
                                        alert(obj.message);
                                        if (obj.error == false) {
                                            $("#grid_wrapper").slideDown();
                                            $("#dvData").slideUp();
                                            $("#dvUpload").slideUp();
                                            $("#dvApprove").slideUp();
                                            $("#dvDetails").slideUp();
                                            $('#list').trigger('reloadGrid');
                                        }
                                    }
                                });

                                $('#txtSSName').autocomplete({
                                    source: '/Common/GetSSUserList',
                                    minLength: 3,
                                    select: function(event, ui) {
                                        $('#mt_ssid').val(ui.item.id);
                                        $('#txtSSName').val(ui.item.label);
                                    }
                                });

                                $('#txtPSDName').autocomplete({
                                    source: '/Common/GetPSDUserList',
                                    minLength: 3,
                                    select: function(event, ui) {
                                        $('#mt_psdid').val(ui.item.id);
                                        $('#txtPSDName').val(ui.item.label);
                                    }
                                });


                                jQuery("#list").jqGrid({
                                    datatype: 'json',
                                    altRows: true,
                                    rowNum: 20,
                                    //loadtext: "<img src='../..Content/images/ajax-loader.gif' />",
                                    loadtext: "Please wait...",
                                    viewrecords: true,
                                    mtype: 'POST',
                                    pager: jQuery('#pager'),
                                    rowList: [5, 10, 20, 50],
                                    viewrecords: true,
                                    recordtext: "Viewing {0} - {1} of {2}",
                                    imgpath: 'Scripts/css/cupertino/images',
                                    url: '/CreateMeeting/IndexJson',
                                    editurl: '/CreateMeeting/Save',
                                    colNames: ['Id', 'Meeting Date', 'SS Name', 'SDA/PSM/RSA Name', 'ASE', 'Status'],
                                    colModel: [{
                                            name: 'mt_id',
                                            key: true,
                                            hidden: true,
                                            index: 'mt_id',
                                            width: 50,
                                            align: 'left',
                                            editable: false,
                                            searchoptions: {
                                                sopt: ['eq', 'ne']
                                            }
                                        },
                                        {
                                            name: 'mt_date',
                                            index: 'mt_date',
                                            width: 250,
                                            align: 'center',
                                            editable: true,
                                            searchoptions: {
                                                sopt: ['cn', 'eq', 'ne']
                                            }
                                        },
                                        {
                                            name: 'USERMASTER.USR_USERNAME',
                                            index: 'USERMASTER.USR_USERNAME',
                                            width: 150,
                                            align: 'left',
                                            editable: true,
                                            searchoptions: {
                                                sopt: ['eq', 'ne']
                                            }
                                        },
                                        {
                                            name: 'USERMASTER1.USR_USERNAME',
                                            index: 'USERMASTER1.USR_USERNAME',
                                            width: 150,
                                            align: 'left',
                                            editable: true,
                                            searchoptions: {
                                                sopt: ['eq', 'ne']
                                            }
                                        },
                                        {
                                            name: 'USERMASTER2.USR_USERNAME',
                                            index: 'USERMASTER2.USR_USERNAME',
                                            width: 150,
                                            align: 'left',
                                            editable: true,
                                            searchoptions: {
                                                sopt: ['eq', 'ne']
                                            }
                                        },
                                        {
                                            name: 'mt_status',
                                            index: 'mt_status',
                                            width: 150,
                                            align: 'left',
                                            editable: true,
                                            searchoptions: {
                                                sopt: ['eq', 'ne']
                                            }
                                        }
                                    ],
                                    sortname: 'mt_id',
                                    sortorder: "desc",
                                    onSelectRow: OSR,
                                    gridComplete: GC,
                                    loadError: LE,
                                    loadComplete: LC
                                });
                                CustomOnLoad(true, true, false);

                                if ($("#usrtype").val() == "33" || $("#usrtype").val() == "20" || $("#usrtype").val() == "22") {
                                    jQuery("#list").navGrid("#pager").navButtonAdd('#pager', {
                                        caption: "Add",
                                        title: "Add",
                                        buttonicon: 'ui-icon-pin-s',
                                        onClickButton: function() {
                                            $("#grid_wrapper").slideUp();
                                            $("#dvData").slideUp();
                                            $("#dvUpload").slideUp();
                                            $("#dvApprove").slideUp();
                                            $("#dvDetails").slideDown();
                                            $('#mt_id').val('');
                                            $("#MyForm").find('input[type="text"]').each(function() {
                                                $(this).val('');
                                            });
                                        }
                                    });

                                    jQuery("#list").navGrid("#pager").navButtonAdd('#pager', {
                                        caption: "Edit",
                                        title: "Edit",
                                        buttonicon: 'ui-icon-pin-s',
                                        onClickButton: function() {
                                            var myGrid = $('#list');
                                            var rowKey = myGrid.getGridParam('selrow');
                                            if (rowKey == undefined) {
                                                alert("Please select a row.");
                                            } else {
                                                $("#grid_wrapper").slideUp();
                                                $("#dvData").slideUp();
                                                $("#dvUpload").slideUp();
                                                $("#dvApprove").slideUp();
                                                $("#dvDetails").slideDown();

                                                $.ajax({
                                                    url: '/CreateMeeting/GetMeetingData',
                                                    data: {
                                                        mt_id: rowKey
                                                    },
                                                    async: true,
                                                    type: 'POST',
                                                    success: function(data) {
                                                        $.each(data, function(Name, Value) {
                                                            if (Value != null) {
                                                                $('#' + Name).val(Value);
                                                            } else {
                                                                $('#' + Name).val('');
                                                            }
                                                        });
                                                    }
                                                });

                                            }
                                        }
                                    });

                                    jQuery("#list").navGrid("#pager").navButtonAdd('#pager', {
                                        caption: "Add Photo",
                                        title: "Add Photo",
                                        buttonicon: 'ui-icon-pin-s',
                                        onClickButton: function() {
                                            var myGrid = $('#list');
                                            var rowKey = myGrid.getGridParam('selrow');
                                            if (rowKey == undefined) {
                                                alert("Please select a row.");
                                            } else {
                                                $("#grid_wrapper").slideUp();
                                                $("#dvData").slideUp();
                                                $("#dvUpload").slideDown();
                                                $("#dvApprove").slideUp();
                                                $("#dvDetails").slideUp();
                                                $('#id').val(rowKey);
                                                $('#mt_photo').val('');
                                                $('#mt_billphoto').val('');
                                                $('#mt_remark').val('');
                                                $('#mt_photo1').val('');
                                                $('#mt_photo2').val('');
                                                $('#ZMP_ZOMTID').tokenInput("clear");
                                                $("#MyFormPhoto").find('input[type="text"]').each(function() {
                                                    $(this).val('');
                                                });
                                            }
                                        }
                                    });
                                }
                                if ($("#usrtype").val() == "20") {
                                    jQuery("#list").navGrid("#pager").navButtonAdd('#pager', {
                                        caption: "Approve",
                                        title: "Approve",
                                        buttonicon: 'ui-icon-pin-s',
                                        onClickButton: function() {
                                            var myGrid = $('#list');
                                            var rowKey = myGrid.getGridParam('selrow');
                                            if (rowKey == undefined) {
                                                alert("Please select a row.");
                                            } else {
                                                $("#grid_wrapper").slideUp();
                                                $("#dvData").slideUp();
                                                $("#dvUpload").slideUp();
                                                $("#dvDetails").slideUp();
                                                $("#dvApprove").slideDown();
                                                $('#_id').val(rowKey);
                                                $("#MyFormApprove").find('input[type="text"]').each(function() {
                                                    $(this).val('');
                                                });
                                            }
                                        }
                                    });
                                }

                                jQuery("#list").navGrid("#pager").navButtonAdd('#pager', {
                                    caption: "Details",
                                    title: "Details",
                                    buttonicon: 'ui-icon-pin-s',
                                    onClickButton: function() {
                                        var myGrid = $('#list');
                                        var rowKey = myGrid.getGridParam('selrow');
                                        if (rowKey == undefined) {
                                            alert("Please select a row.");
                                        } else {
                                            window.open('/MeetingDetail' + '?id=' + rowKey, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=50,left=50,width=1000,height=1000");
                                        }
                                    }
                                });


                                jQuery("#list").navGrid("#pager").navButtonAdd('#pager', {
                                    caption: "Export All",
                                    title: "Export All",
                                    buttonicon: 'ui-icon ui-icon-plus',
                                    onClickButton: function() {
                                        jQuery("#MyForm2").submit();
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





                                $.fn.serializeObject = function() {
                                    var obj = {};
                                    $.each(this.serializeArray(), function(i, o) {
                                        var n = o.name,
                                            v = o.value;
                                        obj[n] = obj[n] === undefined ? v : $.isArray(obj[n]) ? obj[n].concat(v) : [obj[n], v];
                                    });
                                    return obj;
                                };
                                $(function() {
                                    $(".datepicker").datetimepicker({
                                        step: 10,
                                        format: "d-M-Y H:i"
                                    });
                                });
                            });

                            function SaveData() {
                                if (validate()) {
                                    $.ajax({
                                        url: '/CreateMeeting/Save',
                                        data: $('#MyForm').serializeObject(),
                                        async: true,
                                        type: 'POST',
                                        success: function(data) {
                                            alert(data.message);
                                            if (String(data.message).indexOf("successfully") > 0) {
                                                $("#MyForm").find('input[type="text"]').each(function() {
                                                    $(this).val('');
                                                });
                                                $("#grid_wrapper").slideDown();
                                                $("#dvData").slideUp();
                                                $("#dvUpload").slideUp();
                                                $("#dvApprove").slideUp();
                                                $("#dvDetails").slideUp();
                                                $('#mt_id').val('');

                                                $('#list').trigger("reloadGrid");
                                            }
                                        }
                                    });
                                    return false;
                                }
                            }

                            function SaveDataRemark() {
                                if ($("#mt_photo").val() == "") {
                                    alert("select meeting photo file.");
                                    return false;
                                }
                                if ($("#mt_billphoto").val() == "") {
                                    alert("Select bill file.");
                                    return false;
                                }
                                if ($("#mt_remark").val() == "") {
                                    alert("Enter remarks.");
                                    return false;
                                }
                                $('#MyFormPhoto').submit();
                            }

                            function CancelDataRemark() {
                                $("#MyFormPhoto").find('input[type="text"]').each(function() {
                                    $(this).val('');
                                });
                                $("#grid_wrapper").slideDown();
                                $("#dvData").slideUp();
                                $("#dvUpload").slideUp();
                                $("#dvApprove").slideUp();
                                $("#dvDetails").slideUp();
                                $('#id').val('');
                            }

                            function SaveDataApprove() {
                                $.ajax({
                                    url: '/CreateMeeting/SaveApprove',
                                    data: $('#MyFormApprove').serializeObject(),
                                    async: true,
                                    type: 'POST',
                                    success: function(data) {
                                        alert(data.message);
                                        if (String(data.message).indexOf("successfully") > 0) {
                                            $("#MyForm").find('input[type="text"]').each(function() {
                                                $(this).val('');
                                            });
                                            $("#grid_wrapper").slideDown();
                                            $("#dvData").slideUp();
                                            $("#dvUpload").slideUp();
                                            $("#dvApprove").slideUp();
                                            $("#dvDetails").slideUp();
                                            $('#mt_id').val('');
                                            $('#list').trigger("reloadGrid");
                                        }
                                    }
                                });
                            }

                            function CancelDataApprove() {
                                $("#MyFormPhoto").find('input[type="text"]').each(function() {
                                    $(this).val('');
                                });
                                $("#grid_wrapper").slideDown();
                                $("#dvData").slideUp();
                                $("#dvUpload").slideUp();
                                $("#dvApprove").slideUp();
                                $("#dvDetails").slideUp();
                                $('#id').val('');
                            }

                            function CancelData() {
                                $("#MyForm").find('input[type="text"]').each(function() {
                                    $(this).val('');
                                });
                                $("#grid_wrapper").slideDown();
                                $("#dvData").slideUp();
                                $("#dvUpload").slideUp();
                                $("#dvApprove").slideUp();
                                $("#dvDetails").slideUp();
                                $('#mt_id').val('');
                            }

                            function validate() {
                                var ret = true;
                                var message = "";
                                if ($('#mt_date').val() == '') {
                                    ret = false;
                                    message = "meeting date could not be blank";
                                }
                                if ($('#mt_ssid').val() == '') {
                                    ret = false;
                                    message = "please select SS Name";
                                }
                                //if ($('#mt_psdid').val() == '') {
                                //    ret = false;
                                //    message = "please select PSD Name";
                                //}

                                if (message != '')
                                    alert(message);
                                return ret;
                            }
                        </script>



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