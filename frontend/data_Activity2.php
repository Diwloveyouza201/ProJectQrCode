<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <?php
    require_once './dbconnect.php';
    ?>
</head>

<body id="data_Activity2">
    <?php
    $conn = new dbconnect();
    $dataevent = $_SESSION['showevent'];
    $userlogin = $_SESSION['data_user'];
    // $indexEvent = $_REQUEST['event'];
    // $curentEvent = $dataevent[$indexEvent];
    $conn->getComment();
    $product = $_SESSION['showcomment'];
    $data = $_SESSION['EventByID'];
    $PEvent = $_SESSION['P_Event'];
    $Province = $_SESSION['Province'];
    // echo $data[0]['event_id'];
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
                    <span>QR CODE</span></a>
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
            <?php if ($userlogin['adminuser'] == false) { ?>
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

                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo  $userlogin['name']; ?></span>
                                <img class="img-profile rounded-circle" src="<?php echo  $userlogin['imguser']; ?>">
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

                <!-- /.container-fluid -->
                <div class="container-fluid">

                    <div class="row row-cols-2">
                        <div class="col-8">
                            <h1 class="h3 mb-0 text-gray-800">???????????????????????????????????????????????????</h1>
                        </div>
                        <div class="col-4 " align="right">

                            <?php if ($userlogin['user_ID'] == $data[0]['userid']['user_ID']) { ?>
                                <a href="#" data-toggle="modal" data-target="#ScanQRcode" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-sm text-white-50"></i>?????????????????????????????????????????????</a>
                                <a href="#" data-toggle="modal" data-target="#Add_Edit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-sm text-white-50"></i>?????????????????????????????????</a>
                                <a href="#" data-toggle="modal" data-target="#Add_Delete" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-sm text-white-50"></i>???????????????????????????</a>
                            <?php } else { ?>
                                <a href="#" data-toggle="modal" data-target="#Add_Register" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-sm text-white-50"></i>???????????????????????????????????????????????????</a>
                            <?php } ?>
                        </div>



                    </div>
                    <div class="modal fade" id="ScanQRcode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">??</span>
                                    </button>
                                </div>

                                <form action="ChackData.php?Status=scanqrcode" method="POST" enctype="multipart/form-data">
                                    <div class="col-md-4" style="max-width: 50% position relative;">
                                        <video id="preview" width="100%"></video>
                                    </div>
                                    <div class="col-md-6">
                                        <label>SCAN QR CODE</label>
                                        <input type="text" name="text" id="text" readonyy="" placeholder="scan qrcode" class="form-control">
                                    </div>
                                    <div class="col" align="right">
                                        <button class="btn btn-outline-danger" type="button" data-dismiss="modal">Cancel</button>
                                        <button class="btn btn-outline-success" name="submit" type="submit" value="submit">Create</button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="Add_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">??</span>
                                    </button>
                                </div>

                                <form action="ChackDataProfileUser.php?event=<?php echo $data[0]['event_id']; ?>" method="POST" enctype="multipart/form-data">
                                    <div class="col-md-12 ">
                                        <div class="row">

                                            <div class="col-md-6 " style="border-right: 0.1px solid #e0e0e0;">
                                                <div class="text-details-event"></i>
                                                    <h10>??????????????????????????????????????????????????????????????????????????????????????????</h10>
                                                </div>
                                                <div class="col-md-12" style="padding-bottom: 40px;padding-top: 20px;padding-left: 39px;">
                                                    <div class="row mt-2">
                                                        <div class="col-md-8"><label style="margin-bottom: -2px;">?????????????????????</label><input type="text" class="form-control" placeholder="?????????????????????????????????" name="Event_Name" value="<?php echo $data[0]['eventname']; ?> " required></div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>???????????????????????????????????????????????????</label>
                                                                <textarea type="text"class="form-control" rows="3" laceholder="-" name="Event_Particulars" value="<?php echo $data[0]['eventparticulars']; ?>" required></textarea>
                                                                <div class="gender"> <br>
                                                                    <label class="gender" for="">???????????????????????? </label><br>
                                                                    <div class="row" style="padding-left: 11px;">
                                                                        <select class="form-control" name="PEvent">
                                                                            <!-- <option selected>???????????????</option> -->
                                                                            <?php $i = 0; ?>
                                                                            <?php while ($i < count($PEvent)) :  ?>
                                                                            <option  value="<?php echo $PEvent[$i]['pre_ID']; ?>" <?php
                                                                            if($PEvent[$i]['pre_ID']==$data[0]['pEventModel']['pre_ID']){echo "selected";}?>><?php  echo $PEvent[$i]['typename']; ?></option>
                                                                            <?php
                                                                        $i++;
                                                                            ?>
                                                                            <?php
                                                                         endwhile 
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label>???????????????????????????????????????????????????/Address</label>
                                                            <textarea class="form-control" rows="2" laceholder="Address" name="Location" value="<?php echo $data[0]['eventname']; ?>" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row">

                                                        <div class="col-md-6"><label style="margin-bottom: -2px; width: 100px;padding-top: 15px;">?????????????????????</label>
                                                            <select class="form-control" name="provind">

                                                                <!-- <option selected>???????????????</option> -->
                                                                <?php $i = 0; ?>
                                                                <!-- <option selected>...??????????????????????????????...</option> -->
                                                                <?php
                                                                while ($i < count($Province)) :
                                                                ?>
                                                                <option value="<?php
                                                                                 echo $Province[$i]['province_ID'];
                                                                                ?>"><?php
                                                                              echo $Province[$i]['provincename'];
                                                                            ?></option>
                                                                <?php $i++; ?>
                                                                <?php
                                                                 endwhile 
                                                                ?>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-4" style="padding-left: 21px;">
                                                            <label style="margin-bottom: -2px; width: 100px;padding-top: 15px;">????????????????????????????????????????????????</label>
                                                            <input type="number" min="0" class="form-control" placeholder="-" name="People" value="<?php echo $data[0]['eventname']; ?>" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="padding-left: 60px;">
                                                <div class="col-md-8">
                                                    <br><br>
                                                    <label>??????????????????-???????????? / ????????????????????????????????????</label>
                                                    <input type="date" class="form-control" name="date">  <br>
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
                </div>
                <script type="text/javascript">
                    function preview() {
                        frame.src = URL.createObjectURL(event.target.files[0]);
                    }
                </script>
                <div class="modal fade" id="Add_Register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">

                                <h5 class="modal-title" id="exampleModalLabel">?????????????????????????????????????????????</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">??</span>
                                </button>
                            </div>
                            <div class="modal-body">?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal" aria-label="Close">??????????????????</button>
                                <div>
                                    <!-- <form action="ChackData.php?Status=LoginUser" method="POST"> -->
                                    <!-- <input type="hidden" id="custId" name="custId" value="3487"> -->
                                    <!-- <a   onclick="myFunction()" id="codeData" name="codeData" size="100" placeholder="Enter a url or text" style="margin-top:20px"> -->
                                    <!-- <a class="btn btn-primary" onclick="myFunction()" href="Data_QR.php" >??????????????????</a> -->
                                    <a class="btn btn-primary" href="ChackData.php?Status=QR_Code&Event_ID=<?php echo $data[0]['event_id'] ?>">??????????????????</a>
                                    <!-- <button class="btn btn-secondary" type="button" data-dismiss="modal" aria-label="Close">??????????????????</button> -->
                                    <!-- </form> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <!-- <h1 class="h3 mb-0 text-gray-800">Data_Activity</h1>   -->
                </div>
                <!-- Div????????????????????????????????????????????????????????? -->
                <div>
                    <div class="text-center ">
                        <!-- ????????????????????????????????? -->


                        <H1><?php
                            // echo $Event_Data['Event_Name'];
                            echo $data[0]['eventname'];

                            ?></H1>

                    </div>

                    <div class="card-body">
                        <!-- card -->
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4" style="max-width: 50% " relative;>

                                    <img src="<?php echo $data[0]['eventimage']; ?>" width="400" height="300">
                                    <!-- <button class="btn btn-outline-success" name="submit" type="submit" value="submit">Create</button> -->
                                    <!-- <img src="Image\IMG_0884.png" class="img-fluid rounded-start" > -->
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h7>?????????????????? : <?php echo $data[0]['eventdate']; ?> ????????? <?php echo $data[0]['eventdateend']; ?></h7>
                                            </div>
                                            <div class="col">
                                                <h7>???????????? : <?php echo $data[0]['eventtime']; ?> ????????? <?php echo $data[0]['eventtimeend']; ?> </h7>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <h7>????????????????????????????????????????????? <?php echo $data[0]['eventpeople']; ?> ??????</h7>
                                            </div>
                                            <div class="col">
                                                <h7>??????????????????????????????????????? : <?php echo $data[0]['pEventModel']['typename']; ?></h7>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <h7>????????????????????? : <?php echo $data[0]['eventlocation']; ?></h7>
                                            </div>
                                            <div class="col">
                                                <h7>????????????????????? : <?php echo $data[0]['provinceModel']['provincename']; ?></h7>
                                            </div>
                                        </div>

                                        <?php echo "?????????????????????????????? : " . $data[0]['eventname']; ?><br>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <!-- ?????????????????????????????????????????? -->

                    </div>

                    <!-- ?????????????????????????????????????????????????????? -->
                    <?php $counter = 0;
                    $i = 0; ?>
                    <?php
                    while ($i < count($product)) : ?>
                        <?php if ($data[0]['event_id'] == $product[$i]['eventid']['event_id']) {
                            $counter++;
                        ?>
                        <?php   } ?>
                        <?php $i++; ?>
                    <?php endwhile ?>
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <div class="card bg-light mb-3">
                                <div class="card-header text-center">?????????????????????????????????????????????????????? <?php echo $counter; ?> </div>
                                <div class="card-body">

                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item" style="padding-left: 30px;">
                                            <?php
                                            $i = 0;
                                            while ($i < count($product)) :
                                            ?>
                                                <?php
                                                if ($data[0]['event_id'] == $product[$i]['eventid']['event_id']) {
                                                ?>
                                                    <div class="col">
                                                        <p style="color:gray;font-size:12px; text-align: right;"> <?php echo $product[$i]['commentdate']; ?></p>

                                                        <div class="row">
                                                            <img style="border-radius: 50%; " src="<?php echo $product[$i]['userid']['imguser']; ?>" width="45" height="45"><br><br>

                                                            <p class="card-text" style="padding-top: 12px; padding-left: 12px;font-size:14.5px; font-weight: bold;"><?php echo $product[$i]['userid']['name']; ?></p>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <p><?php echo $product[$i]['commentdata']; ?></p>
                                                        </div>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                                <?php $i++ ?>
                                            <?php endwhile ?>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="ChackDataProfileUser.php?eventid=<?php echo $data[0]['event_id'] ?>&userid=<?php echo $data[0]['userid']['user_ID'] ?>&page=<?php echo $indexEvent ?>" method="POST" enctype="multipart/form-data">

                        <div class="row justify-content-center">
                            <div class="col-10 text-center">
                                <div class="form-group">
                                    <!-- <label for="exampleFormControlInput1">Email address</label> -->
                                    <input type="text" name="comment" class="form-control" id="exampleFormControlInput1" placeholder="?????????????????????????????????????????????"><br>
                                    <button name="submit" type="submit" value="submit" class="btn btn-primary btn-block">Sent</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

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
    <div class="modal fade" id="Add_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">???????????????????????????</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">????????????????????????????????????????????????????????????????????????????????????????</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">??????????????????</button>
                    <a class="btn btn-primary" href="ChackData.php?Status=EditDelet&Event_ID=<?php echo $data[0]['event_id'] ?>">??????????????????</a>
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
    <script>
        let scanner = new Instascan.Scanner({
            video: document.getElementById('preview')
        });
        Instascan.Camera.getCameras().then(function(cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[0]);
            } else {
                alert('No cameras found');
            }

        }).catch(function(e) {
            console.error(e);
        });

        scanner.addListener('scan', function(c) {
            document.getElementById('text').value = c;
        });
    </script>


</body>

</html>