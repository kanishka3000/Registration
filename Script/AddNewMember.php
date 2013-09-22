<?php
session_start();
require_once("../class/Member.php");
require_once("../class/AExpertise.php");
require_once("../class/AInterest.php");
if(isset($_REQUEST['submitted'])){
$aoi=$_REQUEST['aoi'];
$aoe=$_REQUEST['aoe'];
$Aois=unserialize($_SESSION['AI']);
$Aoes=unserialize($_SESSION['AE']);




$member=new Member();
$member->Nid=$_REQUEST['nid'];
$member->FName=$_REQUEST['fname'];
$member->LName=$_REQUEST['lname'];
$member->Title=$_REQUEST['title'];
$member->HQualification=$_REQUEST['hqual'];
$member->Address=$_REQUEST['address'];
$member->City=$_REQUEST['city'];
$member->PostCode=$_REQUEST['pcode'];
$member->WAddress=$_REQUEST['oaddress'];
$member->WCity=$_REQUEST['ocity'];
$member->Telephone=$_REQUEST['telephone'];
$member->Email=$_REQUEST['email'];
$member->University=$_REQUEST['university'];
if(is_array($aoi)){
$aoi2;
foreach($aoi as $oi){
    $aoi2[$oi]=$Aois[$oi];
}
$member->AreasOfInterest=$aoi2;
}else{
    $member->AreasOfInterest=false;
}

if(is_array($aoe)){
$aoi3;
foreach($aoe as $oi3){
    $aoi3[$oi3]=$Aoes[$oi3];
}
$member->AreaOfExpertise=$aoi3;
}else{
    $member->AreaOfExpertise=false;
}
$member->saveMember();
header("location:../Confirmation/AddNewMember.php");










}else{
    header("location:../index.php");
}
?>
