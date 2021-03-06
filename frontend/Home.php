<!DOCTYPE html>


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>QR Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/colorprofile.css" rel="stylesheet">
    <?php
    require_once './dbconnect.php';
    ?>
</head>

<body id="page-top">
    <?php
    $conn = new dbconnect();
    $getUser = $conn->get_User();
    $get =  $_SESSION['data_user'];
    // echo $get['name'];
    // $data = $getUser;
    // echo $data[0]['adminuser'];
    $conn->getEvent_Show();
    $product = $_SESSION['showevent'];
    // $user = $_SESSION['Login_User_ID'];
    $conn->getProvince();
    $Province = $_SESSION['Province'];

    $conn->getP_Event();
    $PEvent = $_SESSION['P_Event'];
    ?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="Home.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">QR Scane </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="Home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>????????????????????????</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>?????????????????????</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">???????????????????????????????????????</h6>
                        <a class="collapse-item" href="Activity_All2.php">??????????????????????????????????????????</a>
                        <a class="collapse-item" href="Activity_My.php">???????????????????????????????????????</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>?????????????????????????????????</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">?????????????????? ????????????????????????????????? ??????????????????</h6>
                        <a class="collapse-item" href="QR_Code_All2.php">????????????????????????????????? ??????????????????????????????????????????</a>
                        <a class="collapse-item" href="QR_Code_Join.php">??????????????????????????????????????????????????????</a>
                        <a class="collapse-item" href="QR_Code_Not_Join.php">???????????????????????????????????????????????????????????????????????? </a>

                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Report.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>??????????????????</span></a>
            </li>

            <!-- Divider -->
            <?php if ($get['adminuser'] == 0) { ?>
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Admin
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>???????????????????????????????????????</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">???????????????????????????????????????</h6>
                            <a class="collapse-item" href="Activity_End_Admin.php">???????????????????????????????????????????????????</a>
                            <a class="collapse-item" href="Activity_Admin.php">?????????????????????????????????????????????????????????</a>

                        </div>
                    </div>
                </li>



                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagess" aria-expanded="true" aria-controls="collapsePagess">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>????????????????????????????????????</span>
                    </a>
                    <div id="collapsePagess" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">????????????????????????????????????</h6>
                            <a class="collapse-item" href="User.php">???????????????????????????</a>
                            <a class="collapse-item" href="Admin2.php">?????????????????????????????????</a>

                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Report_Admin.php">
                        <i class="fas fa-fw fa-table"></i>
                        <span>??????????????????</span></a>
                </li>
            <?php } ?>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- <div class="topbar-divider d-none d-sm-block"></div> -->

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $get['name']; ?></span>
                                <img class="img-profile rounded-circle" src="<?php echo $get['imguser']; ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="Profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">????????????????????????</h1>
                        <a href="#" data-toggle="modal" data-target="#Add_Activity" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> ????????????????????????????????????</a>
                    </div>

                </div>
                <div class="modal fade" id="Add_Activity" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style=" left: 180px;">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="text-center" id="exampleModalLabel">????????????????????????????????????</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">??</span>
                                </button>
                            </div>

                            <form action="insertevent.php?Status=InsertEvent" method="POST" style="padding-top: 0px;" enctype="multipart/form-data">

                                <div class="col-md-12 ">
                                    <div class="row">

                                        <div class="col-md-6 " style="border-right: 0.1px solid #e0e0e0;">
                                            <div class="text-details-event"></i>
                                                <h10>??????????????????????????????????????????????????????????????????????????????????????????</h10>
                                            </div>
                                            <div class="col-md-12" style="padding-bottom: 40px;padding-top: 20px;padding-left: 39px;">
                                                <div class="row mt-2">
                                                    <div class="col-md-8"><label style="margin-bottom: -2px;">?????????????????????</label><input type="text" class="form-control" placeholder="?????????????????????????????????" name="Event_Name" value="" required></div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>???????????????????????????????????????????????????</label>
                                                            <textarea class="form-control" rows="3" laceholder="-" name="Event_Particulars" value="" required></textarea>
                                                            <div class="gender"> <br>
                                                                <label class="gender" for="">???????????????????????? </label><br>
                                                                <div class="row" style="padding-left: 11px;">
                                                                    <select class="form-control" name="PEvent">

                                                                        <!-- <option selected>???????????????</option> -->
                                                                        <?php $i = 0; ?>
                                                                        <option selected>...??????????????????????????????...</option>
                                                                        <?php while ($i < count($PEvent)) : ?>
                                                                            <option value="<?php echo $PEvent[$i]['pre_ID']; ?>"><?php echo $PEvent[$i]['typename'];  ?></option>
                                                                            <?php $i++; ?>
                                                                        <?php endwhile ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label>???????????????????????????????????????????????????/Address</label>
                                                        <textarea class="form-control" rows="2" laceholder="Address" name="Location" value="Address" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <div class="col-md-6"><label style="margin-bottom: -2px; width: 100px;padding-top: 15px;">?????????????????????</label>
                                                        <select class="form-control" name="provind">

                                                            <!-- <option selected>???????????????</option> -->
                                                            <?php $i = 0; ?>
                                                            <option selected>...??????????????????????????????...</option>
                                                            <?php while ($i < count($Province)) : ?>
                                                                <option value="<?php echo $Province[$i]['province_ID']; ?>"><?php echo $Province[$i]['provincename']; ?></option>
                                                                <?php $i++; ?>
                                                            <?php endwhile ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-4" style="padding-left: 21px;">
                                                        <label style="margin-bottom: -2px; width: 100px;padding-top: 15px;">????????????????????????????????????????????????</label>
                                                        <input type="number" min="0" class="form-control" placeholder="-" name="People" value="submid" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6" style="padding-left: 60px;">
                                            <div class="col-md-8">
                                                <br><br>
                                                <label>??????????????????-???????????? / ????????????????????????????????????</label>
                                                <input type="date" class="form-control" name="date"> <br>
                                                <input type="time" class="form-control" name="time"><br>
                                                <label>??????????????????-???????????? / ???????????????????????????</label>
                                                <input type="date" class="form-control" name="dateend"><br>
                                                <input type="time" class="form-control" name="timeend"><br><br>

                                            </div>
                                            <div class="col-10" style="outline: #bababa 0.1rem dashed;">
                                                <label style="margin-top: 7.5; text-align: right; display: block; ">???????????????????????????????????????????????????????????????</label>
                                                <div class="row"><br>
                                                    <img src="" width="200px" height="200px" id="frame">
                                                </div><br><br>
                                                <input type="file" class="btn btn-outline-success" style="width:200px;  background: #ffffff;margin-left: 10px;" name="imageevent" onchange="preview()">
                                            </div><br><br>
                                            <!-- <button name="submit" type="submit" value="submit">??????????????????</button> -->

                                        </div>
                                        <!-- <img style="border-radius: 10%; margin-right: -50px;margin-left: 35px;" src="https://i.imgur.com/0eg0aG0.jpg" width="150" onchange="preview()"><br><br> -->
                                        <!-- <input type="file" name="photo" onchange="preview()">
                                            <input type="file" class="btn btn-outline-success" style="width:200px;  background: #ffffff;margin-left: 10px;" name="upload" value="Upload photo"  /><br><br> -->

                                    </div>
                                </div>

                                <div class="col" align="center"><br>
                                    <button class="btn btn-outline-danger" type="button" data-dismiss="modal">??????????????????</button> &nbsp;&nbsp;&nbsp;
                                    <input class="btn btn-outline-success" type="submit" value="??????????????????"></input><br><br>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

                <div class="container-fluid">
                    <div class="row">
                        <?php
                        $i = 0;
                        while ($i < count($product)) : ?>
                            <?php if ($product[$i]['eventdelet'] == 1 && $product[$i]['eventstatus'] == 1) { ?>

                                <div class="col-xl-4 col-lg-5">
                                    <div class="card shadow mb-4">
                                        <!-- <img src="Image\IMG_0884.png" alt="Avatar"  >   -->
                                        <div class="card shadow mb-4">
                                            <img src="<?php echo $product[$i]['eventimage']; ?>" style=" width: auto; height:  300px; display: block; top: 2px;left: 2px;" alt="Avatar">
                                        </div>

                                        <div class="card-body">
                                            <h3 class="card-title"><?php echo $product[$i]['eventname']; ?></h3>
                                            <h6 class="card-title"><?php echo "??????????????? " . $product[$i]['eventpeople'] . " ??????"; ?></h5>
                                                <p class="card-text">
                                                    <?php echo $product[$i]['eventparticulars']; ?>
                                                </p>
                                                <form action="ChackData.php?Status=chackuser&eventid=<?php echo $product[$i]['event_id']; ?>" method="POST" style="padding-top: 0px;" enctype="multipart/form-data">
                                                    <div align="right">
                                                        <!-- <s class="btn btn-outline-primary" href="#">?????????????????????????????????????????????????????????</s> -->
                                                        <input class="btn btn-outline-success" type="submit" value="?????????????????????????????????????????????????????????"></input>
                                                    </div>
                                                </form>
                                        </div>
                                    </div>
                                </div>

                            <?php }  ?>
                            <?php $i++ ?>
                        <?php endwhile ?>
                    </div>
                </div>
                <!-- End of Main Content -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">??</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="Login.php">Logout</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="js/newLogin.js"></script>
        <script type="text/javascript">
            function preview() {
                frame.src = URL.createObjectURL(event.target.files[0]);
            }
        </script>

</body>

</html>