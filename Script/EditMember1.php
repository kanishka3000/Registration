<?php
session_start();
require_once("../class/Member.php");
require_once("../class/AExpertise.php");
require_once("../class/AInterest.php");
if(isset($_REQUEST['nid'])){
    $nid=$_REQUEST['nid'];
    //echo $nid;
    $me=new Member();
    $men=$me->memberExist($nid);

    //print_r($men);
    $member;
    if($men){
        $member=$men[$nid];
        $member->complteMember();
        
    }else{
       $member=false;
    }
    $_SESSION['member']=serialize($member);
    //print_r($member);
   header("location:../EditMember2.php");



}
?>
