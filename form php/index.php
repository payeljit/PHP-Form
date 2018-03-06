<?php
if($_POST["submit"]){
    $result =  "success";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>form php</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <style>
        .container{padding: 16px;}
      
        .imgcontainer{ text-align: center;margin: 24px 0 25px 0;}
        .avatar{ border-radius: 50%; width: 15%; height: 15%}
        input[type=text], input[type=password]{
            width: 100%;
            margin: 8px 0 ;
            padding: 12px 20px;
            display: inline-block;
            box-sizing: border-box;
        }
        button{
            background-color:  #4CAF50;
            color: #fff;
            margin: 8px 0;
            width: 100%;
            padding: 12px 25px;
        }
        .cancelBtn{
            background-color:  #f44336;
            color: #fff;
            width: auto;
            border: none;
        }
        .psw{ float: right}
    </style>
</head>
<body>
   <div class="container">
    <form action="" method="post">
     <!-- img avatar -->
     <div class="imgcontainer">
         <img src="img_avatar2.png" alt="avatar"  class="avatar" >
     </div><br>
     
     <?php echo $result; ?>
     
     <div class="container">
        <label>Username</label><br> 
         <input type="text" id="user" name="username" placeholder="Enter username" required> <br>
         
         
        <label>Password</label> <br>
         <input type="password" id="pass" name="password" placeholder="Enter password" required> <br>
         
        <input type="submit" name="submit" value="login" class="btn btn-success btn-lg"><br>
        <input type="checkbox" checked="checked">Remember me
          
     </div>
     
    <div class="container">
        <button type="button" class="cancelBtn">Cancel</button>
        <span class="psw">Forget <a href="#">password?</a></span>
    </div>
      
    </form>
    
</div>


<script>
$(document).ready(function(){
        

$('.cancelBtn').click(function(){
   $('#user').val('');
   $('#pass').val('');
});

})
    
    
</script>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  
</body>
</html>