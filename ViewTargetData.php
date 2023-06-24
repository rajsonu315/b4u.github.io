<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
    <title>Target Vs Achievement</title>


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





                        <div class="Main_page Ntable">
                            <h2 class="head-h2">
                                Target Vs Achievement
                            </h2>
                            <div class="myorderpage">
                                <form action="" id="MyForm" method="post">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Year</label>
                                                <select id="ddlYear" name="ddlYear" class="form-control">
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <input type="hidden" id="hdnMonth" value="6" />
                                                <input type="hidden" id="hdnYear" value="2023" />
                                                <label>Month</label>
                                                <select id="ddlMonth" name="ddlMonth" class="form-control">
                                                    <option value="">All</option>
                                                    <option value="1">January</option>
                                                    <option value="2">February</option>
                                                    <option value="3">March</option>
                                                    <option value="4">April</option>
                                                    <option value="5">May</option>
                                                    <option value="6">June</option>
                                                    <option value="7">July</option>
                                                    <option value="8">August</option>
                                                    <option value="9">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>&nbsp;</label><br />
                                                <input id="submit1" class="btn btn-danger" name="submit1" value="Search" type="button" onclick="return showdata();" />
                                                <a id="downloadLink"  class="btn btn-danger">Export to excel</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div id="errmsg" style="display:none"></div>

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