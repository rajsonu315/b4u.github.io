<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
    <title>ContactUs Query</title>





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
                                Contact Us Query
                            </h2>
                            <div class="myorderpage">
                                <form action="/ContactUsList/ExportAll" area="" id="myID1" method="post">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>From Date:</label>
                                                <input class="form-control datepicker" type="text" name="txtFromDate" id="txtFromDate" title="Enter Email" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>To Date:</label>
                                                <input class="form-control datepicker" type="text" name="txtToDate" id="txtToDate" title="Enter Email" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>&nbsp;<br /></label><br />
                                                <input name="Search" type="button" class="btn btn-success adn-btn " id="Search" value="Search" onclick="gridSearch();" />&nbsp;&nbsp;&nbsp;
                                                <input name="Export" type="button" class="btn btn-success adn-btn " id="Export" value="Export" onclick="ExportData();" />
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
                                <form action="/ContactUsList/ExportGrid" area="" id="myID" method="post"> <input type="hidden" name="txtFromDate1" id="txtFromDate1" value="" />
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



</body>

</html>