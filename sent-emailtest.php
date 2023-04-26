
<!DOCTYPE html5>
<html>
<head>
<?php include "header.php";?>
<title>Email Sent</title>
</head>
<body>
<?php  include "nav.php" ?>
<main>
    <div class="city">
    <div class="log">
        <h1 class="under h1res">Thank you</h1>
        <span><a href="logout.php" class="bluebtntext" title="logout">logout</a> </span>
    </div>
    <h3> 

 
    <?php
  
  if (isset($_POST['form_type']) && $_POST['form_type'] == 'NA') {
    
    echo 'A new account has been created'; // Code here for form #1
    
  } else if (isset($_POST['form_type']) && $_POST['form_type'] == 'PW') {
    
     echo 'A new password will be sent soon. Please check your email.'; // Code here for form #2
    
  }?></h3>
  <p>Have a good day!</p>
  
</main>
<?php include "footer.php";?>
</body>
</html>
