<?php
include("lib/db.php");
include("lib/admin_class.php");

if(isset($_GET['token'])){//token is sent...
  $token = $_GET['token'];
  if($token == ""){//legal token...
    
  }else{//ilegall token...
    
  }

}else{
  //I can ot found your token!
}

?>
