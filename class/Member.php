<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Member
 *
 * @author kanishka
 */
require_once("AExpertise.php");
require_once("AInterest.php");
class Member {
    public $FName;
    public $LName;
    public $Nid;
    public $Address;
    public $City;
    public $PostCode;
    public $Title;
    public $University;
    public $HQualification;
    public $WAddress;
    public $WCity;
    public $Telephone;
    public $Email;
    public $AreasOfInterest;
    public $AreaOfExpertise;
   // public $HighestQualification;
    //public $Sign;
/*
 mysql> desc Member;
+----------------+--------------+------+-----+---------+-------+
| Field          | Type         | Null | Key | Default | Extra |
+----------------+--------------+------+-----+---------+-------+
| NID            | varchar(10)  | NO   | PRI | NULL    |       |
| Fname          | varchar(70)  | NO   |     | NULL    |       |
| Lname          | varchar(50)  | NO   |     | NULL    |       |
| Title          | varchar(10)  | NO   |     | NULL    |       |
| Email          | varchar(100) | NO   |     | NULL    |       |
| Address        | varchar(200) | NO   |     | NULL    |       |
| City           | varchar(50)  | NO   |     | NULL    |       |
| WAddress       | varchar(200) | NO   |     | NULL    |       |
| WCity          | varchar(30)  | NO   |     | NULL    |       |
| HQualification | varchar(50)  | NO   |     | NULL    |       |
| Post_Code      | varchar(10)  | NO   |     | NULL    |       |
| Telephone      | int(10)      | NO   |     | NULL    |       |Member
| University     | varchar(30)  | NO   |     | NULL    |       |
+----------------+--------------+------+-----+---------+-------+


 *mysql> desc Mem_AE;
+-------+-------------+------+-----+---------+-------+
| Field | Type        | Null | Key | Default | Extra |
+-------+-------------+------+-----+---------+-------+
| NID   | varchar(10) | NO   |     | NULL    |       |
| AE_id | varchar(10) | NO   |     | NULL    |       |
+-------+-------------+------+-----+---------+-------+
mysql> desc Mem_AI;
+-------+-------------+------+-----+---------+-------+
| Field | Type        | Null | Key | Default | Extra |
+-------+-------------+------+-----+---------+-------+
| NID   | varchar(10) | NO   |     | NULL    |       |
| A_id  | varchar(10) | NO   |     | NULL    |       |
+-------+-------------+------+-----+---------+-------+

 *
 *
 *
 *
 */

    public $Error;
    public function saveMember(){
        if(!($this->memberExist($this->Nid))){
            $query="insert into Member (NID ,Fname,Lname,Title,Email,Address,City,WAddress,WCity,Post_Code,Telephone,University,HQualification) values('$this->Nid','$this->FName','$this->LName','$this->Title','$this->Email','$this->Address','$this->City','$this->WAddress','$this->WCity','$this->PostCode','$this->Telephone','$this->University','$this->HQualification')";
            Connection::connect($query);
            if(is_array($this->AreasOfInterest)){
                foreach($this->AreasOfInterest as $aoi){
                    $aoi->Nid=$this->Nid;
                    $aoi->recordAI();
                }
            }
            //
             if(is_array($this->AreaOfExpertise)){
                foreach($this->AreaOfExpertise as $aoi){
                    $aoi->Nid=$this->Nid;
                    $aoi->recordAE();
                }
            }
            return true;
        }else{
            return false;
        }

    }
    public function complteMember(){
        $query="select * from Mem_AI right join  AreaofInterest on Mem_AI.A_id=AreaofInterest.A_id where Mem_AI.NID='$this->Nid' ";
        //echo $query;
        $result=Connection::connect($query);
        $this->AreasOfInterest=$this->comFil($result,0);
        $query="select * from Mem_AE right join AreaOfExpertise on Mem_AE.AE_id=AreaOfExpertise.AE_id where NID='$this->Nid' ";
        $result=Connection::connect($query);
        $this->AreaOfExpertise=$this->comFil($result, 1);

    }
    public function comFil($result,$st){
        $mes;
        while($row=mysql_fetch_array($result)){
            $me;
            $meid=null;
           if($st==0){
              $me=new AInterest(); 
              $me->A_id=$row['A_id'];
              $me->Value=$row['Value'];
              $me->Desc=$row['Desc'];
              $meid=$row['A_id'];
              
           }else{
               $me=new AExpertise();
               $me->AE_id=$row['AE_id'];
               $me->Value=$row['Value'];
              $me->Desc=$row['Desc'];
              $meid=$row['AE_id'];
           }
           $mes[$meid]=$me;
        }
       return $mes;
        
    }
    public function memberExist($Nid){
        $query="select * from Member where NID='$Nid'";
        $result=Connection::connect($query);
        $Obj=$this->fillData($result);
        return $Obj;
    }
    public function validateMember(){





    }
    public function fillData($result){
        $obj;
        while($row=mysql_fetch_array($result)){
            $me=new Member();
            $memid=$row['NID'];
            $me->Nid=$memid;
            $me->FName=$row['Fname'];
            $me->LName=$row['Lname'];
            $me->Address=$row['Address'];
            $me->City=$row['City'];
            $me->PostCode=$row['Post_Code'];
            $me->Title=$row['Title'];
            $me->Telephone=$row['Telephone'];
            $me->WAddress=$row['WAddress'];
            $me->WCity=$row['WCity'];
            $me->HQualification=$row['HQualification'];
            $me->University=$row['University'];
            $me->Email=$row['Email'];
            $obj[$memid]=$me;
        }
        if(is_array($obj)){
            return $obj;
        }else{
            return false;
        }
    }
    public function updateMember(Member $member){
    if($this->FName !=$member->FName){
        $this->updateData("Fname",$member->FName);

    }
    if($this->LName !=$member->LName){
        $this->updateData("LName",$member->LName);

    }
    if($this->Title !=$member->Title){
        $this->updateData("Title",$member->Title);

    }
    
    if($this->HQualification !=$member->HQualification){
        $this->updateData("HQualification",$member->HQualification);

    }
    if($this->Address !=$member->Address){
        $this->updateData("Address",$member->Address);

    }
    if($this->City !=$member->City){
        $this->updateData("City",$member->City);

    }
    if($this->PostCode !=$member->PostCode){
        $this->updateData("Post_Code",$member->PostCode);

    }


    if($this->WAddress !=$member->WAddress){
        $this->updateData("WAddress",$member->WAddress);

    }
    if($this->WCity !=$member->WCity){
        $this->updateData("WCity",$member->WCity);

    }
    if($this->Telephone !=$member->Telephone){
        $this->updateData("Telephone",$member->Telephone);

    }
    if($this->Email !=$member->Email){
        $this->updateData("Email",$member->Email);

    }
     if($this->University !=$member->University){
        $this->updateData("University",$member->University);

    }
    $aoeses=$this->AreasOfInterest;
    if(is_array($member->AreasOfInterest)){
        foreach($member->AreasOfInterest as $Ao){
          if(!(isset($aoeses[$Ao->A_id]))){
            $Ao->Nid=$this->Nid;
            $Ao->recordAI();
          }
        }
    }
  $aoesesi=$this->AreaOfExpertise;
    if(is_array($member->AreaOfExpertise)){
        foreach($member->AreaOfExpertise as $Aob){
          if(!(isset($aoesesi[$Aob->AE_id]))){
            $Aob->Nid=$this->Nid;
            $Aob->recordAE();
          }
        }
    }
  
  
  
  
  }
    public function updateData($Property,$Value){
        $query="update Member set $Property='$Value' where NID='$this->Nid' ";
        Connection::connect($query);
        
    }


}
?>
