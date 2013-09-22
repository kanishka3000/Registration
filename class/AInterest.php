<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AInterest
 *
 * @author kanishka
 */
require_once("Connection.php");
class AInterest {
 public $A_id;
 public $Value;
 public $Desc;
 public $Status;
 
 public $Error;
/*
 mysql> desc Mem_AI;
+-------+-------------+------+-----+---------+-------+
| Field | Type        | Null | Key | Default | Extra |
+-------+-------------+------+-----+---------+-------+
| NID   | varchar(10) | NO   |     | NULL    |       |
| A_id  | varchar(10) | NO   |     | NULL    |       |
+-------+-------------+------+-----+---------+-------+
mysql> desc AreaofInterest;
+--------+--------------+------+-----+---------+-------+
| Field  | Type         | Null | Key | Default | Extra |
+--------+--------------+------+-----+---------+-------+
| A_id   | varchar(11)  | NO   | PRI | NULL    |       |
| Value  | varchar(40)  | NO   |     | NULL    |       |
| Desc   | varchar(300) | NO   |     | NULL    |       |
| Status | varchar(2)   | NO   |     | NULL    |       |
+--------+--------------+------+-----+---------+-------+

 */


 public $Nid;
  public function getAllAInterest(){
     $query="select * from AreaofInterest where status='1'";
     $result=Connection::connect($query);
     $Obj=$this->fillData($result);
     return $Obj;
 }
 public function getAllUnconfirmedInterest(){
    $query="select * from AreaofInterest where Status='0'";
    $result=Connection::connect($query);
    $sub=$this->fillData($result);
    return $sub;

}
public function confirmAI(){
    $query="update AreaofInterest set Status='1' where A_id='$this->A_id'";
    $result=Connection::connect($query);

}
public function deleteAI (){
     $query="delete from AreaofInterest where A_id='$this->A_id'";
     Connection::connect($query);
}
 public function fillData($result){
      $obs;
      while($row=mysql_fetch_array($result)){
          $AI=new AInterest();
          $ano=$row['A_id'];
          $AI->A_id=$row['A_id'];
          $AI->Value=$row['Value'];
          $AI->Desc=$row['Desc'];
          $AI->Status=$row['Status'];
          $obs[$ano]=$AI;
      }
      return $obs;
  }

public function recordAI(){
    $query="insert into Mem_AI(NID,A_id) values('$this->Nid','$this->A_id')";
    Connection::connect($query);

}
public function addNewAreaOfInterest(){
    if(!($this->AreaOIExist())){
    $query="insert into AreaofInterest values('$this->A_id','$this->Value','$this->Desc','0')";
   // echo $query;
    Connection::connect($query) ;
    }else{
         $this->Error="duplication in A_id";
            return false;
    }
    
}
public function AreaOIExist(){
    $query="select * from AreaofInterest where A_id='$this->A_id'";
    $result= Connection::connect($query) ;
    $nos=$this->fillData($result);
    if(count($nos)!=0){
        return $nos;
    }else{
        return false;
    }
    
   
}

    


}
?>
