<!-- <script  >
    var indexValue = 0;
function slideShow(){
  setTimeout(slideShow, 3000);
  var x;
  const img = document.querySelectorAll("img");
  for(x = 0; x < img.length; x++){
    img[x].style.display = "none";
  }
  indexValue++;
  if(indexValue > img.length){indexValue = 1}
  img[indexValue -1].style.display = "block";
}
slideShow();
</script> -->
<!DOCTYPE html>
<!--   -->
<html>
<head>
    <title>Login Form Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/sty.css">
    <link rel="stylesheet" href="css/singin.css">
    <link rel="stylesheet" href="css/img.css">
</head>
<body> 
<?php
    session_start();
    if(!isset($_SESSION['Login_User_Username'])){
        $_SESSION['Login_User_ID'] = null;
    }
   
    ?>
    <!-- <from action="#" th:action="@{/login}" th:object="${user}" method="post"></from> -->
    <div class="container">
        <div class="myCard">
            <div class="row">
                <div class="col-md-6">
                    <div class="myLeftCtn"> 
                        <div class="text">
                            Login Form 
                         </div>
                         <form action="ChackData.php?Status=LoginUser" method="POST">
                            <div class="data">
                               <label >Username</label>
                               <input type="username" name="Username" required>
                            </div>
                            <div class="data">
                               <label>Password</label>
                               <input type="password" name="Password" required>
                            </div>
                            <div class="btnn">
                               <div class="inner"></div>
                               <button type="submit" name="login_user">login</button>
                            </div><br><br>
                            <div class="signup-link">
                               Not a member? <a href="SingUp.php">Signup now</a>
                            </div>
                         </form>
                       
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="myRightCtn">
                        <body>
     <div class="content">
      <div class="images">
        <img src="Image\IMG_0551.jpg">
        <img src="Image\IMG_0884.png">
        <img src="Image\IMG_0890.png">
      </div>
</div>


  </body>
                            
                            
                           
                            
                            </div>
                            
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<script src="js/Login.js" ></script>

</body>
</html>


<!-- header ('location :asdsf.php ');  -->