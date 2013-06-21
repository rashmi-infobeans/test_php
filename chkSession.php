<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
//echo "pre user name   ".$_SESSION['my_name'];
if(isset($_SESSION['my_name'])){
    echo "pre user name   ".$_SESSION['my_name'];
    $_SESSION['my_name']="Ranu";
}
else{
     echo "session can not set";
   
}
unset($_SESSION['pass']);
 //echo "pre password   ".$_SESSION['pass'];
?>
