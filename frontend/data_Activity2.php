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
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
            // echo "--- eventname =  ";
                    //  echo $dataevent[0]['eventname'];
            // echo $dataevent['event_id'];
            $userlogin = $_SESSION['data_user'];
            //    echo "---nameuser =  ";
            // echo $userlogin['name'];
         
            $indexEvent = $_REQUEST['event'];
            // echo $indexEvent;
            $curentEvent = $dataevent[$indexEvent];
            // echo "---event_id =  ";
            // echo $curentEvent['event_id'];
            // $_SESSION['Event_ID'] = $Event_ID;
            // $conn = new dbconnect();
            // $getUser = $conn->get_User();
            // $Data = $getUser->fetch_assoc();

            // $Event = $conn->getEvent_Show($Event_ID);
            // $Event_Data = $Event->fetch_assoc();

            // $Province = $conn->getProvince();
            // $Product_P_Event = $conn->getP_Event();
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
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>กิจกรรม</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">รายการกิจกรรม</h6>
                <a class="collapse-item" href="Activity_All2.php">กิจกรรมทั้งหมด</a>
                <a class="collapse-item" href="Activity_My.php">กิจกรรมของฉัน</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>คิวอาร์โค้ด</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">รายการ คิวอาร์โค้ด ของฉัน</h6>
                <a class="collapse-item" href="QR_Code_All2.php">คิวอาร์โค้ด กิจกรรมทั้งหมด</a>
                <a class="collapse-item" href="QR_Code_Join.php">กิจกรรมที่เข้าร่วม</a>
                <a class="collapse-item" href="QR_Code_Not_Join.php">กิจกรรมที่ยังไม่เข้าร่วม </a>
                
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="Report.php">
            <i class="fas fa-fw fa-table"></i>
        <span>รายงาน</span></a>
    </li>
    
    <!-- Divider -->
    <?php if( $userlogin['adminuser'] == false ){ ?>
    <hr class="sidebar-divider">
        
    <!-- Heading -->
    <div class="sidebar-heading">
        Admin
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>ข้อมูลกิจกรรม</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">รายการกิจกรรม</h6>
                <a class="collapse-item" href="Activity_End_Admin.php">กิจกรรมที่จัดแล้ว</a>
                <a class="collapse-item" href="Activity_Admin.php">กิจกรรมที่ยังไม่จัด</a>
                
            </div>
        </div>
    </li>

    

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagess"
            aria-expanded="true" aria-controls="collapsePagess">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>จักการข้อมูล</span>
        </a>
        <div id="collapsePagess" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">รายการข้อมูล</h6>
                <a class="collapse-item" href="User.php">ผู้ใช้งาน</a>
                <a class="collapse-item" href="Admin2.php">ผู้ดูแลระบบ</a>
                
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="Report_Admin.php">
            <i class="fas fa-fw fa-table"></i>
        <span>รายงาน</span></a>
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
            <form
                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2">
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
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                        aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Search for..." aria-label="Search"
                                    aria-describedby="basic-addon2">
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
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo  $userlogin['name'];?></span>
                        <img class="img-profile rounded-circle"
                            src="img/undraw_profile.svg">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
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
                    <h1 class="h3 mb-0 text-gray-800">รายละเอียดกิจกรรม</h1>
                </div>
                <div class="col-4 " align="right">

                    <?php if($userlogin['user_ID'] == $curentEvent['userid']['user_ID']){?>
                    <a href="#" data-toggle="modal" data-target="#Add_Edit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-sm text-white-50"></i>แก้ไขข้อมูล</a>  
                    <a href="#" data-toggle="modal" data-target="#Add_Delete" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-sm text-white-50"></i>ลบกิจกรรม</a>
                    <?php }else{?> 
                    <a href="#" data-toggle="modal" data-target="#Add_Register" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-sm text-white-50"></i>ลงทะเบียนเข้าร่วม</a>   
                    <?php }?> 
                </div>
                
               
                    
            </div>
            <div class="modal fade" id="Add_Register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"    aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel">เข้าร่วมกิจกรรม</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">คุณต้องการลงทะเบียนเข้าร่วมกิจกรรมนี้หรือไม่?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal" aria-label="Close">ยกเลิก</button>
                    <div>
                        <!-- <form action="ChackData.php?Status=LoginUser" method="POST"> -->
                            <!-- <input type="hidden" id="custId" name="custId" value="3487"> -->
                            <!-- <a   onclick="myFunction()" id="codeData" name="codeData" size="100" placeholder="Enter a url or text" style="margin-top:20px"> -->
                            <!-- <a class="btn btn-primary" onclick="myFunction()" href="Data_QR.php" >ยืนยัน</a> -->
                            <a class="btn btn-primary" href="ChackData.php?Status=QR_Code">ยืนยัน</a>
                            <!-- <button class="btn btn-secondary" type="button" data-dismiss="modal" aria-label="Close">ยืนยัน</button> -->
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
           <!-- Divใหญ่หน้าโชว์กิจกรรม -->
            <div> 
                <div class="text-center ">  <!-- ชื่อกิจกรรม -->
                        

                        <H1><?php 
                        // echo $Event_Data['Event_Name'];
                        echo $curentEvent['eventname'];
                        
                        ?></H1> 
      
                </div>
                        
                <div class = "card-body"> <!-- card -->
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4" style="max-width: 50% position: relative;">
                            <img src="Image\IMG_0884.png" class="img-fluid rounded-start" >
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col"> 
                                        <h7>วันที่ : <?php echo $curentEvent['eventdate'];?> ถึง <?php echo $curentEvent['eventdateend'];?></h7>
                                    </div>
                                    <div class="col">
                                        <h7>เวลา : <?php echo $curentEvent['eventtime'];?> ถึง <?php echo $curentEvent['eventtimeend'];?> </h7>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col"> 
                                        <h7>จำนวนคนรับสมัคร <?php echo $curentEvent['eventpeople'];?> คน</h7>
                                    </div>
                                    <div class="col">
                                        <h7>ประเภทกิจกรรม : <?php echo $curentEvent['pEventModel']['typename'];?></h7>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col"> 
                                        <h7>สถานที่ : <?php echo $curentEvent['eventlocation'];?></h7>
                                    </div>
                                    <div class="col">
                                        <h7>จังหวัด : <?php echo $curentEvent['provinceModel']['provincename'];?></h7>
                                    </div>
                                </div>
                               
                                <?php echo"รายละเอียด : ".$curentEvent['eventname'];?><br>

                            </div>
                            </div>
                        </div>
                    </div>
                </div>                      

                <div> <!-- โชว์รายละเอียด -->

                </div>
                    <!-- ความคิดเห็นทั้งหมด -->
                                    
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <div class="card bg-light mb-3">
                                <div class="card-header text-center">ความคิดเห็นทั้งหมด 4 </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="col">
                                            <p style="color:gray;font-size:9px;">10:30น. 12ก.ย2564</p>
                                            <div class="row">
                                                <!-- <img class="circle-img rounded-circle" src="Image\IMG_0884.png" >&nbsp;&nbsp;&nbsp;&nbsp; -->
                                                <p class="card-text">ดิวดิว คนน่าหมี</p> 
                                            </div>
                                            <br>
                                            <div class="row">
                                                <p>hihihihihihihihihihihihihihihihihihi</p> 
                                            </div>
                                        </div>
                                    </li>
                                    <br>
                                    <li class="list-group-item">
                                        <div class="col">
                                                <p style="color:gray;font-size:9px;">10:30น. 12ก.ย2564</p>
                                                <div class="row">
                                                    <!-- <img class="circle-img rounded-circle" src="Image\IMG_0884.png" >&nbsp;&nbsp;&nbsp;&nbsp; -->
                                                    <p class="card-text">มะนาว เปรี้ยวจี๊ด</p> 
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <p>สวัสดีชาวโลก.......สวัสดีชาวโลก.......สวัสดีชาวโลก.......สวัสดีชาวโลก.......สวัสดีชาวโลก.......สวัสดีชาวโลก.......สวัสดีชาวโลก.......สวัสดีชาวโลก.......สวัสดีชาวโลก.......สวัสดีชาวโลก.......สวัสดีชาวโลก.......สวัสดีชาวโลก.......สวัสดีชาวโลก.......สวัสดีชาวโลก.......สวัสดีชาวโลก.......สวัสดีชาวโลก.......สวัสดีชาวโลก.......สวัสดีชาวโลก.......</p> 
                                                </div>
                                            </div>
                                    </li>
                                    <br>
                                    <li class="list-group-item">
                                        <div class="col">
                                                <p style="color:gray;font-size:9px;">10:30น. 12ก.ย2564</p>
                                                <div class="row">
                                                    <!-- <img class="circle-img rounded-circle" src="Image\IMG_0884.png" >&nbsp;&nbsp;&nbsp;&nbsp; -->
                                                    <p >ฉันทนา มาแล้ว</p> 
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <p>55555555555555555555555555</p> 
                                                </div>
                                            </div>
                                    </li>
                                </ul>    
                                </div>
                            </div>
                        </div>
                            
                    </div>
                
                    <div class ="row justify-content-center" >
                            <div class="col-10 text-center">
                                <div class="form-group">
                                    <!-- <label for="exampleFormControlInput1">Email address</label> -->
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="แสดงความคิดเห็น"><br>
                                    <button type="button" class="btn btn-primary btn-block">Sent</button>
                                </div>
                            </div>
                    </div>
        
 
                    
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
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document"> 
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
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
   

</body>

</html>