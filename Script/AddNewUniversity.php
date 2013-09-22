<?php
session_start();
require_once("../class/University.php");
if(isset($_REQUEST['uid'])){
    $university=new University();
    $university->U_id=$_REQUEST['uid'];
    $university->U_Name=$_REQUEST['uname'];
    $university->Address=$_REQUEST['uaddress'];
    $university->Contact_id=$_REQUEST['utel'];
    $university->saveUniversity();
    header("location:../Confirmation/AddNewUniversity.php");

}
?>
