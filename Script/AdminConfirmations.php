<?php
session_start();
require_once("../class/University.php");
require_once("../class/AExpertise.php");
require_once("../class/AInterest.php");
if(isset($_REQUEST['type'])){
$type=$_REQUEST['type'];
$task=$_REQUEST['task'];
$id=$_REQUEST['val'];
//echo $id;
if($type=="uni"){
    $unis=unserialize($_SESSION['unis']);
    $uni=$unis[$id];
    if($task=="confirm"){
        $uni->confirmUniversity();
    }elseif($task=="remove"){
        $uni->deleteUniversity();
    }
}elseif($type=="aoi"){
    $areaofinte=unserialize($_SESSION['aois']);
    $aointe=$areaofinte[$id];
     if($task=="confirm"){
      $aointe->confirmAI();
    }elseif($task=="remove"){
      $aointe->deleteAI();
    }
}elseif($type=="aoe"){
    $areaofexpertise=unserialize($_SESSION['aoes']);
    //print_r($areaofexpertise);
    $aoies=$areaofexpertise[$id];
    //print_r($aoies);
     if($task=="confirm"){
       $aoies->confirmAE();
    }elseif($task=="remove"){
       
        $aoies->deleteAE();
    }
}

}
header("location:../AdminConfirmations.php");
?>
