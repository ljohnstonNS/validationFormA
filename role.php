<?php session_start(); ?>

<?php
//echo '<pre>';
//var_dump($_SESSION);
//echo '</pre>';
//echo '<pre>';
///var_dump($_POST);
//echo '</pre>';
// First we bring them in from the from and set them as vars

$titleFromForm = $_POST[ 'title' ];
$fNameFromForm = $_POST[ 'fName' ];
$fNameFromForm = $_POST[ 'lName' ];
$rolesFromForm = $_POST[ 'roles' ];


$_SESSION[ 'title' ] = $_POST[ 'title' ];
echo "Title from Form as session var " . $_SESSION[ 'title' ] . "<br>";
$_SESSION[ 'fName' ] = $_POST[ 'fName' ];
echo "fName from Form as session var " . $_SESSION[ 'fName' ] . "<br>";
$_SESSION[ 'lName' ] = $_POST[ 'lName' ];
echo "lName from Form as session var " . $_SESSION[ 'lName' ] . "<br>";
$_SESSION[ 'roles' ] = $_POST[ 'roles' ];
echo "roles from Form as session var " . $_SESSION[ 'roles' ] . "<br>";

if ( $rolesFromForm == 'ad' ) {
  header( "Location: admin.php" );
  exit();
}

if ( $rolesFromForm == 'ma' ) {
  header( "Location: manager.php" );
  exit();
}

if ( $rolesFromForm == 'ce' ) {
  header( "Location: ceo.php" );
  exit();
}


//            if ($_SESSION['role'] =="admin") {echo "<h2><a href='new-account.php'>New account</a><br><a href='isnt-working.php'>isnt-working</a>  </h2> ";
 //               }
 //       
  //              if ($_SESSION['role'] =="manager") {echo "<a href='lost-password.php'>Lost password</a><br><a href='isnt-working.php'>isnt-working</a>   ";
  //              }
        
    //            if ($_SESSION['role'] =="ceo") {echo "<a href='need-help.php'>Need Help</a><br><a href='isnt-working.php'>isnt-working</a>  ";
    //            }
                ?>