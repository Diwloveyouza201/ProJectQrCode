<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
    <style>
        

    </style>
   <head>
      <meta charset="utf-8">
      <title>Responsive Contact us Form | CodingNepal</title>
      <link rel="stylesheet" href="css/singin.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body class="sh">
      <div class="container">
      <div class="text">
         Singin Form
      </div>
      <form action="ChackData.php?Status=InserUser" method="POST" style="padding-top: 0px;">
        <div class="form-row">
            <div class="input-data ">
                <input type="text" name="Username" required>
               <div class="underline"></div>
               <label for="">Username</label>     
            </div>
        </div>

         <div class="form-row"> 
            <div class="input-data">
               <input type="text" name="Password" required>
               <div class="underline"></div>
               <label for="">Password</label>
            </div>
            <div class="input-data">
               <input type="text" required>
               <div class="underline"></div>
               <label for="">Conferm password</label>
            </div>
         </div>

         <div class="form-row">
            <div class="input-data ">
                <input type="text"  name="Email" required>
               <div class="underline"></div>
               <label for="">Email Address</label>     
            </div>
        </div>

         <div class="form-row">
            <div class="input-data">
               <input type="text" name="Name" required>
               <div class="underline"></div>
               <label for="">Name</label>
            </div>
            <div class="input-data">
               <input type="text" name="NickName" required>
               <div class="underline"></div>
               <label for="">Nick Name</label>
            </div>
         </div>
         
         <div class="form-row">
            <div class="input-data">
               <input type="text" name="Phone" required>
               <div class="underline"></div>
               <label for="">Phone</label>
            </div>
            
            
         </div>

         <div class="form-row">
            <div class="input-data">
               <input type="text" name="Age" required>
               <div class="underline"></div>
               <label for="">Age</label>
            </div>
            <div class="input-data">
               <input type="text" name="Line_ID" required>
               <div class="underline"></div>
               <label for="">Line ID</label>
            </div>
         </div>
         <div class="form-row">
             
            <!-- <input type="text" required> -->
            <!-- <div class="underline"></div> -->
               <div class="gender" >         
                 <label class="gender" for="" >Gender : </label>
                 <input type="radio" id="html" name="Gender" value="G01">
                 <label class="gender" for="html" >Male</label>
                 <input type="radio" id="html" name="Gender" value="G02">
                 <label for="html">woman</label>
               </div> 
            </div>
            <div class="form-row submit-btn tButton">
               <div class="input-data">
                  <div class="inner"></div>
                  <input type="submit" value="submit">
               </div>
            </div>
      </form>
      </div>
   </body>