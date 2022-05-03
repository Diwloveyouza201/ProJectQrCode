<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once './dbconnect.php';
error_reporting (E_ALL ^ E_NOTICE);
// $Status = "InserUser";
// $a = "InsertEvent";


$Status = $_REQUEST["Status"];
// $User_ID = $_REQUEST["User_ID"];
$data =  $_SESSION['data_user'];


// $GetQr = $_SESSION['showUser'];
// echo $data['name']; 
// $conn->getEvent_Show();
// $product = $_SESSION['showevent'];
//$Status = "EditUser";
// $Status = $a;
if($Status=="InserUser"){
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Email  = $_POST['Email'];
    $Name   = $_POST['Name'];
    $NickName = $_POST['NickName'];
    $Gender = $_POST['Gender'];
    $Age = $_POST['Age'];
    $Phone = $_POST['Phone'];
    $Line_ID = $_POST['Line_ID'];
    $Image_Profile = null;
    $Admin_user = true;
    $con = new dbconnect();
    $con->connect();
    $sql = "SELECT `Username` FROM user where Username = '".$Username."'";
    $result = mysqli_query($con->connect(),$sql);
    if( $result->num_rows == 0 ){
    $con->InsertUser($Username,$Password,$Email,$Name,$NickName,$Gender,$Age,$Phone,$Line_ID,$Image_Profile,$Admin_user);
    }
    else{
        header("Location:SingUp.php");
    }
}

else if($Status=="LoginUser"){
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    
    $con = new dbconnect();
    $con->LoginUser($Username,$Password);
}
     
// else if($Status=="LoginUser"){
//     $Username = $_POST['Username'];
//     $Password = $_POST['Password'];
// "userid" => 
// ['user_ID' => 1
// ],
// "provinceModel" =>
//    ['province_ID' => 1
// ],
// 'pEventModel' => [
//   'pre_ID' => 1
// ],
//     $con = new dbconnect();
//     $con->LoginUser($Username,$Password);
// }
     
else if($Status=="InsertEvent"){
    // echo 'zxx';
    $User = $_SESSION['data_user']['user_ID'];
    $province_ID = "1";
    $pre_ID  = "1";
    $Event_Name = "asdasd";
    $Event_People = "10";
    $eventparticulars ="asdas";
    $Event_Province = "P01\r\n";
    $Event_Location = "คณะ IT MSU";
    $Event_Date = "24/10/2564";
    $Event_Date_End = "24/10/2564";
    $Event_Time = "10.00";
    $Event_TimeEnd = "11.00";
    $Event_Image = "null";
    $Event_Type = "1";
    $Event_Status = "0";
    $Event_Delet = "1";
    // $data = $User_ID."";
    // $suppersum = json_decode($data,true);
    // $User_ID =  $User['username'];
    // $pre_ID = '1';
    // $Event_Name = 'dfs';
    // $Event_Particulars = 'asdasd';
    // $Event_People  = '11';
    // $Event_Province   = 'asdf';
    // $Event_Location = 'asd';
    // $Event_Date = 'asd';
    // $Event_Date_End = 'asd';
    // $Event_Time = 'asd';
    // $Event_TimeEnd = 'asd';
    // $Event_Image = null;
    // $Event_Type = 'asd';
    // $Event_Status = true;
    // $Event_Delet = true;
    $con = new dbconnect();
    $con->InsertEvent($User,$province_ID,$pre_ID,$Event_Name,$Event_People,$eventparticulars,$Event_Province,$Event_Location,$Event_Date,$Event_Date_End,$Event_Time,$Event_TimeEnd,$Event_Image,$Event_Type,$Event_Status,$Event_Delet);
    // $con->InsertEvent($User_ID,$province_ID,$pre_ID,$Event_Name,$Event_Particulars,$Event_People,$Event_Province,$Event_Location,$Event_Date,$Event_Date_End,$Event_Time,$Event_TimeEnd,$Event_Image,$Event_Type,$Event_Status,$Event_Delet);
}
// else if($Status=="InsertEvent"){
//     $User_ID = $_SESSION['Login_User_ID'];
//     $Event_Name = $_POST['Event_Name'];
//     $Event_Particulars = $_POST['Event_Particulars'];
//     $Event_People  = (int)$_POST['Event_People'];
//     $Event_Province   = $_POST['Event_Province'];
//     $Event_Location = $_POST['Event_Location'];
//     $Event_Date = $_POST['Event_Date'];
//     $Event_DateEnd = $_POST['Event_DateEnd'];
//     $Event_Time = $_POST['Event_Time'];
//     $Event_TimeEnd = $_POST['Event_TimeEnd'];
//     $Event_Image = $_POST['Uplode_Image'];
//     $Event_Type = $_POST['Event_Type'];
//     $Event_Status = true;
//     $Event_Delet = true;
//     $con = new dbconnect();
//     $con->InsertEvent($User_ID,$Event_Name,$Event_Particulars,$Event_People,$Event_Province,$Event_Location,$Event_Date,$Event_DateEnd,$Event_Time,$Event_TimeEnd,$Event_Image,$Event_Type,$Event_Status,$Event_Delet);

// }
else if($Status=="EditProfile"){
    $Email  = $_POST['Email'];
    $Name   = $_POST['Name'];
    $NickName = $_POST['NickName'];
    $Age = $_POST['Age'];
    $Phone = $_POST['Phone'];
    $Line_ID = $_POST['Line_ID'];
    $Gender = $_POST['Gender'];
    $Image_Profile = null;
    $con = new dbconnect();
    echo $User_ID;
    $con->connect();
    $con->EditProfile($Email,$Name,$NickName,$Age,$Phone,$Line_ID,$Gender,$Image_Profile);
}
else if($Status=="EditEvent"){
    $Event_Name  = $_POST['Event_Name'];
    $Event_People   = $_POST['Event_People'];
    $Event_Particulars = $_POST['GenEvent_Particularsder'];
    $Event_Province = $_POST['Event_Province'];
    $Event_Location = $_POST['Event_Location'];
    $Event_Date = $_POST['Event_Date'];
    $Event_DateEnd = $_POST['Event_DateEnd'];
    $Event_Time = $_POST['Event_Time'];
    $Event_TimeEnd = $_POST['Event_TimeEnd'];
    $Event_Image = $_POST['Event_Image'];
    $con = new dbconnect();
    // echo $User_ID;
    $con->connect();
    $con->EditEvent($Event_Name,$Event_People,$Event_Particulars,$Event_Province,$Event_Location,$Event_Date,$Event_DateEnd,$Event_Time,$Event_TimeEnd,$Event_Image);
}
else if($Status=="EditDelet"){
    $Event_Delet = false;
    $con = new dbconnect();
    $con->connect();
    $con->EditDelet($Event_Delet);
}
else if($Status=="EditUser"){
    echo $Status;
    
    $User_ID = $_REQUEST["User_ID"];
    $User_Status = false;
    //$User_ID = "14";
    $con = new dbconnect();
    $con->connect();
    $con->EditUser($User_Status);
}

else if($Status=="QR_Code"){
    $con = new dbconnect();

    $User_ID = $_SESSION['data_user']['user_ID'];
    $Event_ID = $_SESSION['showevent'][0]['event_id'];
    // $Qrcode_Status = "1";
    // $Qrcode_Path = "Image/qrdode.png";
    // $Qrcode_Event_Status = "1";
    // echo $User_ID,$Event_ID,$Qrcode_Status,$Qrcode_Path,$Qrcode_Event_Status;

    // $con = new dbconnect();
    // $con->INSERT_QR($User_ID,$Event_ID,$Qrcode_Status,$Qrcode_Path,$Qrcode_Event_Status);

    $qr = $con->Get_QR($User_ID,$Event_ID);
    $data = $_SESSION['showUser'];
    echo "asdasd",$data[0]['qrcode_ID'];
    // echo $_SESSION['Get_QR'];
    // $Data = $Data_qr_event->fetch_assoc();

    // echo $Data[0]['eventid']['event_id'];

    // $url = "http://chart.apis.google.com/chart?cht=qr&chl=http://localhost/Project_QR/ScanQR.php?QR_Code_ID=".$Data['Qrcode_ID']."&chs=450";
    // $url =  "C:\Bitnami\wampstack-8.0.11-0\apache2\htdocs\Project_QR\Image\IMG_0884.png";
//    $("#link").append("<a style='color:#fff;' href='http://chart.apis.google.com/chart?cht=qr&chl=" + data + "&chs=" + "450" + "'>Download QR Code</a>");
    // $img = "Image_Qr_Code/".$User_ID."_".$Event_ID.".png"; 
//   Function to write image into file
    // file_put_contents($img, file_get_contents($url));
    // echo "File downloaded!12";
    // $Qrcode_ID = $Data['Qrcode_ID'];
    // $Qrcode_Path = $img;
    // $con->UPDATE_QR($Qrcode_ID,$Qrcode_Path);
    // // http://localhost/Project_QR/ScanQR.php?QR_Code_ID=10

}

 
