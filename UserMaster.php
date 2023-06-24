<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
    <title>User Master</title>



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

                        <div class="Main_page">
                            <h2 class="head-h2">
                                User Master
                            </h2>
                            <div class="mobile_div">

                                <div class="container">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="filter-wrapper">
                                                    <!-- <input type="checkbox" class="filter-checkbox" value="Software Engineer" /> Software Engineer
                                                    <input type="checkbox" class="filter-checkbox" value="Accountant" /> Accountant
                                                    <input type="checkbox" class="filter-checkbox" value="Sales Assistant" /> Sales Assistant
                                                    <input type="checkbox" class="filter-checkbox" value="Developer" /> Developer -->
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- <div class="btn-group submitter-group pull-right">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">Status</div>
                                                    </div>
                                                    <select class="form-control status-dropdown">
                                                        <option value="">All</option>
                                                        <option value="DRF">Draft</option>
                                                        <option value="PCH">Pending Review</option>
                                                        <option value="PAU">Pending Authorisation</option>
                                                        <option value="Received">Received</option>
                                                        <option value="Processing">Processing</option>
                                                        <option value="Query">Query</option>
                                                        <option value="Approved">Approved</option>
                                                        <option value="Rejected">Rejected</option>
                                                        <option value="Amended">Amended</option>
                                                        <option value="Cancelled">Cancelled</option>
                                                    </select>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <table id="example" class="table">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                                <th>Salary</th>

                                                <th>Status</th>
                                                <th>Hidden</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                                <td>$86,000</td>
                                                <td>
                                                    <div class="badge status-badge badge-info">
                                                        Pending Review
                                                    </div>
                                                </td>
                                                <td>PCH</td>
                                            </tr>






                                            <tr>
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>
                                                <td>New York</td>
                                                <td>59</td>
                                                <td>2009/04/10</td>
                                                <td>$237,500</td>
                                                <td>$86,000</td>
                                                <td>
                                                    <div class="badge status-badge badge-info">
                                                        Draft
                                                    </div>
                                                </td>
                                                <td>DRF</td>
                                            </tr>

                                        </tbody>

                                    </table>
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






    <script>
        $(document).ready(function() {
            dataTable = $("#example").DataTable({
                "columnDefs": [{
                    "targets": [8],
                    "visible": false
                }]

            });
        });
    </script>


</body>

</html>