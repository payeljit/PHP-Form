<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>form php</title>
</head>
<body>
 <?php
$emailTo = "";
$subject = "I think you are working";
$body = " I think you are great";
$headers = "Form: payelbaner9@yahoo.com"  ;
    
if(mail($emailTo, $subject, $body, $headers)){
    echo "mail has sent";
}else{
    echo "mail not  sent";
}
    
?> 
      
</body>
</html>