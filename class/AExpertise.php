<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AExpertise
 *
 * @author kanishka
 */
require_once("Connection.php");
class AExpertise {
    public $AE_id;
    public $Value;
    public $Desc;
    public $Status;

    public $Nid;
    /*+--------+--------------+------+-----+---------+-------+
| Field  | Type         | Null | Key | Default | Extra |
+--------+--------------+------+-----+---------+-------+
| AE_id  | varchar(10)  | NO   | PRI | NULL    |       |
| Value  | varchar(40)  | NO   |     | NULL    |       |
| Desc   | varchar(300) | NO   |     | NULL    |       |
| Status | varchar(2)   | NO   |     | NULL    |       |
+--------+--------------+------+-----+---------+-------+
mysql> desc Mem_AE;
+-------+-------------+------+-----+---------+-------+
| Field | Type        | Null | Key | Default | Extra |
+-------+-------------+------+-----+---------+-------+
| NID   | varchar(10) | NO   |     | NULL    |       |
| AE_id | varchar(10) | NO   |     | NULL    |       |
+-------+-------------+------+-----+---------+-------+

     */
    public function getAllExpertise(){
        $query="select * from AreaOfExpertise where Status='1'";
        $result=Connection::connect($query);
        $Objs=$this->fillData($result);
        return $Objs;
    }
public function getAllUnconfirmedExperties(){
    $query="select * from AreaOfExpertise where Status='0'";
    $result=Connection::connect($query);
    $sub=$this->fillData($result);
    return $sub;

}
public function confirmAE(){
    $query="update AreaOfExpertise set Status='1' where AE_id='$this->AE_id'";
    $result=Connection::connect($query);

}
public function deleteAE (){
     $query="delete from AreaOfExpertise where AE_id='$this->AE_id'";
     Connection::connect($query);
}

    public function fillData($result){
        $obs;
        while($row=mysql_fetch_array($result)){
            $AI=new AExpertise();
            $ano=$row['AE_id'];
            $AI->AE_id=$row['AE_id'];
            $AI->Value=$row['Value'];
            $AI->Desc=$row['Desc'];
            $AI->Status=$row['Status'];
            $obs[$ano]=$AI;
        }
        if(is_array($obs)){
            return $obs;
        }else{
            return false;
        }
    }
    public function recordAE(){
        $query="insert into Mem_AE(NID,AE_id) values('$this->Nid','$this->AE_id')";
        Connection::connect($query);
    }
    public function AreaOEExist(){
        $query="select * from AreaOfExpertise where AE_id='$this->AE_id'";
        $result= Connection::connect($query) ;
        $nos=$this->fillData($result);
        if(count($nos)!=0){
            return $nos;
        }else{
            return false;
        }}
    public function addNewAreaOfExpertise(){
        if(!($this->AreaOEExist())){
            $query="insert into  AreaOfExpertise  values('$this->AE_id','$this->Value','$this->Desc','0')";
            // echo $query;
            Connection::connect($query) ;
        }else{
            $this->Error="duplication in AE_id";
            return false;
        }


    }


}
?>
