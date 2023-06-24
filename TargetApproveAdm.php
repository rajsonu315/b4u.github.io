<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
    <title>Retailers</title>


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
                                    <h2 class="head-h2"> Retailers</h2>
                                </div>
                            </div>
                            <div class="myorderpage">

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