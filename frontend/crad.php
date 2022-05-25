
<?php
require_once './dbconnect.php';
?>
<?php
$conn = new dbconnect();
$getUser = $conn->get_User();
$get =  $_SESSION['data_user'];
// echo $get['image'];
$conn->getEvent_Show();
$product = $_SESSION['showevent'];
// $data = $conn->showimage();
$datenow = date('Y-m-d');

?>
<?php
require_once './dbconnect.php';
?>
</head>

<body id="data_Activity2">
    <?php
    $conn = new dbconnect();
    $dataevent = $_SESSION['showevent'];
    $userlogin = $_SESSION['data_user'];
    $indexEvent = $_REQUEST['event'];
    $curentEvent = $dataevent[$indexEvent];
    $conn->getComment();
    $product = $_SESSION['showcomment'];
    ?>

    <link rel="stylesheet" href="css/card.css">
    <div id="card">
        <h1><?php echo $get['name']; ?></h1>
        <div class="image-crop">
            <img id="avatar" src="<?php echo $get['imguser']; ?>"></img>
        </div>
        <div id="bio">
            <p>ชื่อกิจกรรม <?php echo $curentEvent['eventname'] ?></p>
        </div>
        <div id="stats">
            <div class="col">
                <p class="label">วันที่จัดกิจกรรม</p>
                <p class="stat"><?php echo $curentEvent['eventdate'] ?></p>
            </div>
            <div class="col">
                <p class="label">เวลา</p>
                <p class="stat"><?php echo $curentEvent['eventtime'] ?></p>

            </div><br><br><br><br><br><br><br>
        </div>
    </div>

    <!-- <div id="buttons">
        <button>เข้าร่วมกิจกรรม</button>
    </div> -->