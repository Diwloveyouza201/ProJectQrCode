<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require_once "vendor/autoload.php";
use GuzzleHttp\Client;



class dbconnect{
    public function connect(){
        // $servername = "localhost";
        // $username = "qrsystem";
        // $password = "G4g5v#9a";
        // $dbname = "comsci_qrsystem";

        // $servername = "localhost";
        // $username = "root";
        // $password = "090660";
        // $dbname = "project_qr";
        
        // $conn =  mysqli_connect($servername,$username,$password,$dbname);
        // if($conn->connect_error){
        //     die("error". $conn->connect_error);
        // }
        // else{
        // }
        // return $conn;
    }

    public function InsertUser($Username,$Password,$Email,$Name,$NickName,$Gender,$Age,$Phone,$Line_ID,$Image_Profile,$Admin_user){
        $sql = "INSERT INTO `user`(`Username`, `Password`, `Email`, `Name`, `NickName`,`Gender`, `Age`, `Phone`, `Line_ID`, `Image_Profile`, `Admin_user`) 
        VALUES ('".$Username."','".$Password."','".$Email."','".$Name."','".$NickName."','".$Gender."','".$Age."','".$Phone."','".$Line_ID."','".$Image_Profile."','".$Admin_user."')";
            if(mysqli_query($this->connect(), $sql)){
                Header("Location:Login.php");
            } else {
                echo 'Insert Incomplete 1111';
            }
    }
    public function LoginUser($Username,$Password){
        // echo $Username;
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:1234',
        ]);
        $response = $client->request('POST', '/Qr_project/loing', [
            'json' => [
                'username' => $Username,
                'password' => $Password
            ]
        ]);
        $body = $response->getBody();
        $sum = $body."";
        $suppersum = json_decode($sum,true);
        // echo $suppersum[0]['user_ID'];
        if($response->getStatusCode()==200){
            $body = $response->getBody();
       
                $_SESSION['data_user'] = $suppersum[0];
                
            
                Header("Location:Home.php");
        }
        else {
                Header("Location:Login.php");
            }

    }
    public function InsertEvent($User,$province_ID,$pre_ID,$Event_Name,$Event_People,$eventparticulars,$Event_Province,$Event_Location,$Event_Date,$Event_Date_End,$Event_Time,$Event_TimeEnd,$Event_Image,$Event_Type,$Event_Status,$Event_Delet){
        // echo $Username;
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:1234',
        ]);
        $response = $client->request('POST', '/Qr_project/insertevent', [
            'json' => [
                // "userid" => $User_ID
                // "provinceModel" => 
                //      ['province_ID' => $province_ID
                // ],
                // 'pEventModel' => [
                //     'pre_ID' => $pre_ID
                // ],
                // 'eventname' => $Event_Name,
                // 'eventpeople' => $Event_People,
                // 'eventparticulars' => $Event_Particulars,
                // 'eventprovince' => $Event_Province,
                // 'eventlocation'=> $Event_Location,
                // 'eventdate' => $Event_Date,
                // 'eventdateend' => $Event_Date_End,
                // 'eventtime' => $Event_Time,
                // 'eventtimeend' => $Event_TimeEnd,
                // 'eventimage' => $Event_Image,
                // 'evenrtype' => $Event_Type,
                // 'eventstatus' => $Event_Status,
                // 'eventdelet' => $Event_Delet
                'userid'=> [
                    'user_ID' => $User
                ],
                'provinceModel' => [
                    'province_ID' => $province_ID
                ],
                'pEventModel' => [
                    'pre_ID' => $pre_ID
                ],
                'eventname' => $Event_Name,
                'eventpeople' => $Event_People,
                'eventparticulars' => $eventparticulars,
                'eventprovince' => $Event_Province,
                'eventlocation' => $Event_Location,
                'eventdate' => $Event_Date,
                'eventdateend' => $Event_Date_End,
                'eventtime' => $Event_Time,
                'eventtimeend' => $Event_TimeEnd,
                'eventimage' => $Event_Image ,
                'evenrtype' => $Event_Status,
                'eventstatus' => $Event_Status,
                'eventdelet' => $Event_Delet
        
            ]
        ]);

            // echo $User,$province_ID,$pre_ID,$Event_Name,$Event_People,$Event_Province,$Event_Location,$Event_Date,$Event_Date_End,$Event_Time,$Event_TimeEnd,$Event_Image,$Event_Type,$Event_Status,$Event_Delet;
    }
    public function show_QRCode(){
        // echo $Username;
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:1234',
        ]);
        $response = $client->request('GET', '/Qr_project/showqrcode', [
        
        ]);
        $body = $response->getBody();
        $sum = $body."";
        $suppersum = json_decode($sum,true);
        if($response->getStatusCode()==200){
            $body = $response->getBody();
                $_SESSION['QR_Coce_ALL'] = $suppersum;
        }
        else {
               
            }

    }
    public function getP_Event(){
        // echo $Username;
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:1234',
        ]);
        $response = $client->request('GET', '/Qr_project/showpevent', [
        
        ]);
        $body = $response->getBody();
        $sum = $body."";
        $suppersum = json_decode($sum,true);
        if($response->getStatusCode()==200){
            $body = $response->getBody();
                $_SESSION['P_Event'] = $suppersum;
        }
        else {
               
            }

    }

    public function getProvince(){
        // echo $Username;
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:1234',
        ]);
        $response = $client->request('GET', '/Qr_project/showprovince', [
        
        ]);
        $body = $response->getBody();
        $sum = $body."";
        $suppersum = json_decode($sum,true);
        if($response->getStatusCode()==200){
            $body = $response->getBody();
                $_SESSION['Province'] = $suppersum;
        }
        else {
               
            }

    }

    // public function InsertEvent($User_IsD,$Event_Name,$Event_Particulars,$Event_People,$Event_Province,$Event_Location,$Event_Date,$Event_DateEnd,$Event_Time,$Event_TimeEnd,$Event_Image,$Event_Type,$Event_Status,$Event_Delet){
    //     $sql = "INSERT INTO `event`(`User_ID`, `Event_Name`, `Event_People`, `Event_Particulars`, `Event_Province`, `Event_Location`, `Event_Date`, `Event_DateEnd`, `Event_Time`, `Event_TimeEnd`, `Event_Image`, `Event_Type`, `Event_Status`, `Event_Delet`) 
    //     VALUES('".$User_ID."','".$Event_Name."','".$Event_People."','".$Event_Particulars."','".$Event_Province."','".$Event_Location."','".$Event_Date."','".$Event_DateEnd."','".$Event_Time."','".$Event_TimeEnd."','".$Event_Image."','".$Event_Type."','".$Event_Status."','".$Event_Delet."')";
    //        echo $sql;
    //        if(mysqli_query($this->connect(), $sql)){
    //             Header("Location:Activity_All.php");
    //             echo'Eventgood';
    //         } else {
    //             echo 'Insert NoGood';
    //         }
    // }
    public function EditProfile($Email,$Name,$NickName,$Age,$Phone,$Line_ID,$Gender,$Image_Profile){
        $sql = " UPDATE user SET Email = '".$Email."', Name = '".$Name."', NickName = '".$NickName."',Age = '".$Age."',Phone = '".$Phone."',Line_ID = '".$Line_ID."',Gender = '".$Gender."' WHERE User_ID = '".$_SESSION['Login_User_ID']."' ";
           echo $sql;
           if(mysqli_query($this->connect(), $sql)){
                Header("Location:Profile.php");
                echo'Eventgood';
            } else {
                echo 'Insert NoGood';
            }
    }
    public function EditEvent($Event_Name,$Event_People,$Event_Particulars,$Event_Province,$Event_Location,$Event_Date,$Event_DateEnd,$Event_Time,$Event_TimeEnd,$Event_Image){
        $sql = "UPDATE `event` SET `Event_Name`='".$Event_Name."',
        `Event_People`='".$Event_People."',`Event_Particulars`='".$Event_Particulars."',
        `Event_Province`='".$Event_Province."',`Event_Location`='".$Event_Location."',
        `Event_Date`='".$Event_Date."',`Event_DateEnd`='".$Event_DateEnd."',
        `Event_Time`='".$Event_Time."',`Event_TimeEnd`='".$Event_TimeEnd."',
        `Event_Image`='".$Event_Image."' WHERE Event_ID = '".$_SESSION['Event_ID']."' ";
           echo $sql;
           if(mysqli_query($this->connect(), $sql)){
               $Event_ID = $_SESSION['Event_ID'];
                Header("Location:Data_Activity.php?Event_ID=$Event_ID");
                echo'Eventgood';
            } else {
                echo 'Insert NoGood';
            }
    }
    public function EditDelet($Event_Delet){
        $sql = "UPDATE `event` SET `Event_Delet`= false WHERE Event_ID = '".$_SESSION['Event_ID']."' ";
           echo $sql;
           if(mysqli_query($this->connect(), $sql)){
               $Event_ID = $_SESSION['Event_ID'];
                Header("Location:Activity_My.php?Event_ID=$Event_ID");
                echo'Eventgood';
            } else {
                echo 'Insert NoGood';
            }
    }
    public function EditUser($User_Status){
        $sql = "UPDATE `user` SET `User_Status`= false WHERE User_ID = '".$_REQUEST["User_ID"]."'  ";
           echo $sql;
           if(mysqli_query($this->connect(), $sql)){
               $Event_ID = $_SESSION['EditUser'];
                Header("Location:User.php");
                echo'Eventgood';
            } else {
                echo 'Insert NoGood';
            }
    }
    public function getEvent_My(){
        $User_ID = $_SESSION['Login_User_ID'];
        $sql = "SELECT * FROM event WHERE `User_ID` = '".$User_ID."' and `Event_Delet`= true";
        return $this->connect()->query($sql);
    }

    public function getEvent_show_ByID($event_ID){
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:1234',
        ]);
        $response = $client->request('POST', '/Qr_project/loing', [
            'json' => [
                'username' => $Username,
                'password' => $Password
            ]
        ]);
        $body = $response->getBody();
        $sum = $body."";
        $suppersum = json_decode($sum,true);
        // echo $suppersum[0]['user_ID'];
        if($response->getStatusCode()==200){
            $body = $response->getBody();
       
                $_SESSION['data_user'] = $suppersum[0];
            
            
                Header("Location:Home.php");
        }
        else {
                Header("Location:Login.php");
            }

        // $sql = "SELECT * FROM `event` where `Event_Delet`= true"; 
        // return $this->connect()->query($sql);
    }
    public function getEvent_Show(){
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:1234',
        ]);
        $response = $client->request('GET', '/Qr_project/showevent', [
           
        ]);
        $body = $response->getBody();
        $sum = $body."";
        $suppersum = json_decode($sum,true);
        // echo $suppersum[0]['event_id'];
        if($response->getStatusCode()==200){
            $body = $response->getBody();
                $_SESSION['showevent'] = $suppersum;
    
        }
    }

    public function getUser_All(){
        $sql = " SELECT ROW_NUMBER() OVER (ORDER BY `Name`) AS number,  `Name`,`Email`, `NickName`, `Gender`, `Age`, `Phone`, `Line_ID`, `User_ID` FROM `user` where Admin_user = 1 and User_Status = 1"; 
        return $this->connect()->query($sql);
    }
    public function getUser(){
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:1234',
        ]);
        $response = $client->request('GET', '/Qr_project/showuser', [
        ]);
        $body = $response->getBody();
        $sum = $body."";
        $suppersum = json_decode($sum,true);
        // echo $suppersum[0]['user_ID'];
        if($response->getStatusCode()==200){
            $body = $response->getBody();
                $_SESSION['showUser'] = $suppersum;
        }
    }





    public function getUser_Admin(){
        $sql = " SELECT ROW_NUMBER() OVER (ORDER BY `Name`) AS number,  `Name`,`Email`, `NickName`, `Gender`, `Age`, `Phone`, `Line_ID` FROM `user` where Admin_user = 0"; 
        return $this->connect()->query($sql);
    }
    // public function getProvince(){
    //     $sql = " SELECT `Province_ID`, `Province_Code`, `Province_Name` FROM `p_province`"; 
    //     return $this->connect()->query($sql);
    // }
    // public function getP_Event(){
    //     $sql = " SELECT `Pre_ID`, `Status_Code`, `Type_Name` FROM `p_event`"; 
    //     return $this->connect()->query($sql);
    // }
    
    public function getShow_QR_Code_My(){
        $User_ID = $_SESSION['Login_User_ID'];
        $sql = "SELECT * FROM  qr_event
        LEFT JOIN event
        ON event.Event_ID = qr_event.Event_ID
        LEFT JOIN user
        ON user.User_ID  = qr_event.User_ID 
        where qr_event.User_ID = '".$User_ID."'"; 
        return $this->connect()->query($sql);
    }
    public function getShow_QR_Code_Scan($QR_Code_ID){
        $User_ID = $_SESSION['Login_User_ID'];
        $sql = "SELECT * FROM  qr_event
        LEFT JOIN event
        ON event.Event_ID = qr_event.Event_ID
        LEFT JOIN user
        ON user.User_ID  = qr_event.User_ID 
        where Qrcode_ID = '".$QR_Code_ID."'"; 
        return $this->connect()->query($sql);
    }
    public function getShow_QR_Code_True(){
        $User_ID = $_SESSION['Login_User_ID'];
        $sql = "SELECT * FROM user
        LEFT JOIN  qr_event
        ON qr_event.User_ID = user.User_ID
        LEFT JOIN event
        ON event.Event_ID = qr_event.Event_ID
        where user.User_ID = '".$User_ID."' and qr_event.Qrcode_Status = true"; 
        return $this->connect()->query($sql);
    }
    public function getShow_QR_Code_False(){
        $User_ID = $_SESSION['Login_User_ID'];
        $sql = "SELECT * FROM user
        LEFT JOIN  qr_event
        ON qr_event.User_ID = user.User_ID
        LEFT JOIN event
        ON event.Event_ID = qr_event.Event_ID
        where user.User_ID = '".$User_ID."' and qr_event.Qrcode_Status = false"; 
        return $this->connect()->query($sql);
    }
    public function get_User(){
        $suppersum['user'] = $_SESSION['Login_User_ID'];
        return $suppersum;
    }
    public function getShow_UserProfile(){
        $sql = "SELECT name,NickName,Email,Gender,Age,Phone,Line_ID,Image_Profile FROM `user`WHERE User_ID = 12"; 
        return $this->connect()->query($sql);
    }
    public function getEvent_false(){
        $sql = "SELECT * FROM `event` WHERE Event_Status = false"; 
        return $this->connect()->query($sql);
    }
    public function getEvent_true(){
        $sql = "SELECT * FROM `event` WHERE Event_Status = true"; 
        return $this->connect()->query($sql);
    }
    // public function INSERT_QR($User_ID,$Event_ID,$Qrcode_Status,$Qrcode_Path,$Qrcode_Event_Status){
    //     $sql = "INSERT INTO `qr_event`(`User_ID`, `Event_ID`, `Qrcode_Status`, `Qrcode_Path`, `Qrcode_Event_Status`) VALUES 
    //     ('".$User_ID."','".$Event_ID."','".$Qrcode_Status."','".$Qrcode_Path."','".$Qrcode_Event_Status."')"; 
    //     return $this->connect()->query($sql);
    // }
    public function INSERT_QR($User_ID,$Event_ID,$Qrcode_Status,$Qrcode_Path,$Qrcode_Event_Status){
        // echo $User_ID,$Event_ID,$Qrcode_Status,$Qrcode_Path,$Qrcode_Event_Status;

        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:1234',
        ]);
        $response = $client->request('POST', '/Qr_project/insertQRCode', [
            'json' => [
                'userid'=> [
                    'user_ID' => $User_ID
                ],
                'eventid' => [
                    'event_id' => $Event_ID
                ],
                'qrcodestatus' => $Qrcode_Status,
                'qrcodepath' => $Qrcode_Path,
                'qrcodeeventstatus' => $Qrcode_Event_Status
            ]
          
        ]);
    }

    // public function Get_QR($User_ID,$Event_ID){
    //     $sql = "SELECT * FROM `qr_event` WHERE `User_ID` = '".$User_ID."' and `Event_ID` = '".$Event_ID."'"; 
    //     return $this->connect()->query($sql);
    // }
    public function Get_QR($User_ID,$Event_ID){
        echo $User_ID,$Event_ID;
        // echo $User_ID,$Event_ID,$Qrcode_Status,$Qrcode_Path,$Qrcode_Event_Status;

        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:1234',
        ]);
        $response = $client->request('POST', '/Qr_project/showgetqr', [
            'json' => [
                'userid'=> [
                    'user_ID'=> $User_ID
            ],
                'eventid'=> [
                    'event_id'=> $Event_ID
                ]
                   
            ]
        ]);
        $body = $response->getBody();
        $sum = $body."";
        $suppersum = json_decode($sum,true);

        // echo $suppersum[0]['user_ID'];
        if($response->getStatusCode()==200){
            $body = $response->getBody();
                $_SESSION['showUser'] = $suppersum;

        }
        

        // $a = json_encode($response);
        // echo json_encode($a[0]);
    
        // echo getType($response);
        // $response = $body."";
        // $suppersum = json_decode($sum,true);
        
        // if($suppersum->getStatusCode()==200){
        //     $body = $response->getBody();
        //         $_SESSION['Get_QR'] = $suppersum;
        // }
   
    
    }

    public function UPDATE_QR($Qrcode_ID,$Qrcode_Path){
        $sql = "UPDATE `qr_event` SET `Qrcode_Path`='".$Qrcode_Path."' WHERE `Qrcode_ID` = '".$Qrcode_ID."'"; 
        //return $this->connect()->query($sql);
        if(mysqli_query($this->connect(), $sql)){
            Header("Location:Data_QR.php?Qrcode_ID=$Qrcode_ID");
        }
    }
    public function getQR_Show($Qrcode_ID){
        $sql = "SELECT * FROM  event
        LEFT JOIN  qr_event
        ON event.Event_ID = qr_event.Event_ID 
        WHERE qr_event.Qrcode_ID = '".$Qrcode_ID."'";
        return $this->connect()->query($sql);
    }
    
    
}
?>