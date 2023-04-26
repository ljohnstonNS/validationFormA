
<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
        header("location:login.php");
        exit;
}
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
echo '<pre>';
var_dump($_POST);
echo '</pre>';
?>
<!DOCTYPE html5>
<html>
<head>
<?php include "header.php";?>
<title>Home</title>
</head>
<body>
<?php  include "nav.php" ?>
<main>
  <div class="city">
    <div class="log">
      <h1 >Welcome</h1>
      <span><a href="logout.php" class="bluebtntext" title="logout">logout</a> </span> </div>
    <p>Please fill out the form.</p>
    <form  method="post" action="role.php" class="formInline">
      <label for="fName">First name</label>
      <input type="text" name="fName"  placeholder="First Name" value="<?php if(isset($_SESSION['fName'])) echo $_SESSION['fName'];?>"  >
      <label for="lName">Last name </label>
      <input type="text" name="lName" placeholder="Last Name" value="<?php if(isset($_SESSION['lName'])) echo $_SESSION['lName'];?>"  >
      <label for="roles">Current role</label>
      <select class="selected" name="roles" id="roles"  value="<?php if(isset($_SESSION['roles'])) echo $_SESSION['roles'];?>" >
        <option name="ad" value="ad">Admin</option>
        <option name="ma" value="ma">Manager</option>
        <option name="ce" value="ce">CEO</option>
      </select>
      <button type="submit" name="save" VALUE="save" class="subBtn">Submit</button>
    </form>
  </div>
</main>
<?php include "footer.php";?>
</body>
</html>
