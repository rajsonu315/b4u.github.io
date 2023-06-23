<header>
    <div class="container-fluid" style="padding-right: 0px; padding-left:0px; padding-top:18px; margin-bottom:18px;">
        <div class="navbar-wrapper">
            <nav class="navbar navbar-inverse">
                <div class="heading header_menu">
                    <div class="wrapper_head">
                        <div class="left-spacer-logo"></div>
                        <div class="header-logo-block">

                            <a class="header-logo" href="index.php">
                                <img src="Content/Images/logo-login.png" class="class="  />
                            </a>
                        </div>



                        <div class="right">
                            <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" onclick="myFunction()">
                                <span class="sr-only">Toggle navigation</span>

                                <img src="Content/Images/icon/4line.png" width="20" />
                            </button>


                            <div id="navbar" class="navbar-collapse collapse pull-left">
                                <ul class="nav navbar-nav">
                                    <li>
                                        <a href="index.php">
                                            <span class="imgspan"> <img src="https://www.britannia4u.com/content/images/icon/home-icon.svg"></span>Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="AboutProgram.php">
                                            <span class="imgspan"> <img src="https://www.britannia4u.com/Content/images/icon/about-pro-icon.svg"></span>About
                                            Program
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ContactUsList.php">
                                            <span class="imgspan"> <img src="https://www.britannia4u.com/Content/images/icon/contact-icon.svg"></span>Contact
                                            Us
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <span class="imgspan"> <img src="https://www.britannia4u.com/Content/images/icon/report-icon.svg"></span>
                                            Reports <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="LoginReport.php">Login Report</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <span class="imgspan"> <img src="https://www.britannia4u.com/Content/images/icon/master-icon.svg"></span>
                                            Masters <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="UserMaster.php">User Master</a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>


                        </div>

                        <div class="left">
                            <ul class="myprofile_ul">
                                <!-- Media Example -->
                                <!-- Tables -->
                                <!-- Thumbnails demo -->
                                <li class="deskace">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle ">

                                    </a>
                                </li>
                                <li class="dropdown proname">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle text-center" style="text-decoration:none;">
                                        <span class="user pull-left">

                                            <img src='https://www.britannia4u.com/Content/Images/ProgramLogo/Ace.png' />
                                        </span>
                                        <span class="pull-left userText">
                                            Welcome,<br />
                                            <span class="pro_name" id="displayname"></span>!
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="user_profile_box">
                                                <div class="profile_pic">
                                                    <img id="userimage1" src="Content/images/no-image.png" class="img-circle" />
                                                </div>
                                                <div class="profile_details">
                                                    <ul>
                                                        <li class="pro_name" id="displayname"></li>
                                                        <li id="desig"></li>
                                                        <li id="loc"></li>

                                                        <li><a href="selectprogram.php" class="btn btn-success btn-sm">Change Program</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="popup_menus">
                                                <ul>
                                                    <li>
                                                        <a class="logout_popup" href="./Login.php">
                                                            <img src="Content/Images/icon/logout-icon.svg" width="35" />
                                                            Logout
                                                        </a>


                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>


                        <div style="clear: both;"></div>


                    </div>
                    <div class="clearBoth"></div>


                </div>






            </nav>
        </div>

    </div>
    <div class="Sub_navbar-wrapper" style="display:none;">
        <div class="container">
            <div class="pull-right mywallet_amount">
                Points Balance: <a href="/PointHistory">0</a>
            </div>
        </div>
    </div>
</header>