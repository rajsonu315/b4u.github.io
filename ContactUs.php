<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
    <title>Contact Us</title>



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
                                Contact Us
                            </h2>
                            <div class="mobile_div">
                                <div class="coments_details">
                                    <form action="/ContactUs/SendEmail" id="MyFormContactUs" method="post">
                                        <ul>
                                            <li></li>
                                            <li>
                                                <div style="font-weight: bold; color: Green;" id="divMessage">
                                                </div>
                                            </li>
                                        </ul>
                                        <table cellpadding="0" cellspacing="0" border="0" width="100%" class="comman_table" style="margin-top: 10px;">
                                            <tr>
                                                <td>Full Name</td>
                                                <td><input name="TxtName" id="TxtName" value="ANAND PRAKASH" readonly="readonly" /> </td>
                                                <td>Mobile Number</td>
                                                <td><input name="TxtMobile" id="TxtMobile" value="9958899254" /> </td>
                                            </tr>
                                            <tr>
                                                <td>E-mail ID</td>
                                                <td><input name="TxtEmail" id="TxtEmail" value="anandprakash@britindia.com" readonly="readonly" /> </td>
                                                <td>Reason</td>
                                                <td>
                                                    <select name="ddlTypes" id="ddlTypes">
                                                        <option value="">Select Reason</option>
                                                        <option value="Payout Related">Payout Related</option>
                                                        <option value="Others">Others</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Message</td>
                                                <td colspan="3"><textarea name="textareaId" id="textareaId" style="width: 96%!important;"></textarea> </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <a href="/ContactUs/History">
                                                        <input id="submit2" class="btn btn-danger" name="submit2" value="View History" type="button" style="width: 90px;float: right;" />
                                                    </a>
                                                    &nbsp; &nbsp; &nbsp;
                                                    <input id="submit1" class="btn btn-danger" name="submit1" value="Submit" type="button" style="width: 70px;float: right; margin-right: 10px;" /> &nbsp; &nbsp; &nbsp;
                                                </td>
                                            </tr>

                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            jQuery(document).ready(function() {
                                $("#submit1").click(function() {
                                    if ($("#TxtMobile").val() == "") {
                                        alert("Please enter mobile number.");
                                        return false;
                                    }
                                    if ($("#TxtMobile").val().length != 10) {
                                        alert("Please enter valid mobile number.");
                                        return false;
                                    }
                                    if ($("#ddlTypes").val() == "") {
                                        alert("Please select reason.");
                                        return false;
                                    }
                                    if ($("#textareaId").val() == "") {
                                        alert("Please enter Message.");
                                        return false;
                                    }

                                    $.ajax({
                                        url: '/ContactUs/SaveData',
                                        data: $('#MyFormContactUs').serializeObject(),
                                        async: true,
                                        type: 'POST',
                                        success: function(data) {
                                            alert(data);
                                            if (String(data).indexOf("saved successfully") > 0) {
                                                //$("#grid_wrapper").slideDown();
                                                //$("#AddUser").slideUp();
                                                //$('#list').trigger("reloadGrid");
                                                $("#MyFormContactUs").find('input[type="text"]').each(function() {
                                                    $(this).val('');
                                                });
                                                $("#ddlTypes option:eq(0)").attr('selected', 'selected');
                                                $('#textareaId').val('');
                                            }
                                        }
                                    });
                                });
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
                        </script>
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

</body>

</html>