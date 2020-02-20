<?php
//$result = file_get_contents("php://input");
//$obj = json_decode($result, true);
if(array_key_exists('login', $_POST)){
  $email=$_POST['email'];
 
    
   


$url ="https://abitcrowd.com/validation.php?email=$email";
$result = file_get_contents($url);
$obj=json_decode($result);

$report=$obj->report;
$username=$obj->username;
//$username=$obj['username'];
//$report=$obj['report'];

//echo $username;
echo $report;
}
?>

<html>
    <head>
        <title>API Login</title>
    </head>
    <body>
        <form method="POST">
            <input type="text" class="form-control" name="email" placeholder="Enter your email"> <br>
           <input type="submit" name="login" >
        </form>
    </body>
</html>
