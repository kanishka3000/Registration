<?php
session_start();
require_once("../class/Qualification.php");
if(isset($_REQUEST['qid'])){
    $ques=new Qualification();
    $ques->Q_id=$_REQUEST['qid'];
    $ques->Q_value=$_REQUEST['qname'];
    $ques->Description=trim($_REQUEST['qdesc']);
    $ques->addNewQualification();
    header("location:../Confirmation/AdminAddQualification.php");

}



?>
