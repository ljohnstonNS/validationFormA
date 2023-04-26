<?php session_start(); ?>
<?php
$userName = $email = $password = '';

$error = array('userName'=>'', 'email'=>'');
  if(isset($_POST['submit'])){

    //userName
    if(empty($_POST['userName'])){
        $error['userName'] = 'An user name is required';}
        else{
         $userName = $_POST['userName'];  
         if(!preg_match("/^([A-Za-z0-9])*[^\s]\1*$/", $userName)){  
            $error['userName'] = 'Username must only be letters and/or numbers';  
           
            }}
            
       //email
       if(empty($_POST['email'])){
        $error['email'] =  'An email is required';}
        else{
         $email = $_POST['email'];  
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){  
                $error['email'] ='Email must be a valid email address';  

            }}
         
            
    
            if(array_filter($error))  {
              }
            
              else
            {
                include('sent-emailtest.php');
                exit();
              

            }
    }
     
?>
<!DOCTYPE html5>
<html>
<head>
<?php include "header.php";?>
<title>New Account</title>
</head>
<body>

<main>
    <div class="city">
    <div class="log">
        <h1 class="under h1res">Password Recovery</h1>
        <span><a href="logout.php" class="bluebtntext" title="logout">logout</a> </span>
    </div>
    <p>For a new account, please submit the form below with the necessary information.</p>
    <form class="formLog" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post";>

   <label for="userName">User name</label>
    <input type="text" name="userName" id="userName" value="<?php echo htmlspecialchars($userName) ?>">
    <div class="errorT"><?php echo $error['userName']; ?></div>
   
    <label for="email">Email address associated with the password</label>
    <input type="email" name="email" emailType="newAccount" id="email" value="<?php echo htmlspecialchars($email) ?>">
    <div class="errorT"><?php echo $error['email']; ?></div>

    <input type="hidden" name="form_type" value="NA">
    
    <div class=center><input type="submit" name="submit" value="submit"></div>

   </form>
    </div>
</main>
<?php include "footer.php";?>
</body>
</html>
