<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Qualification
 *
 * @author kanishka
 * mysql> desc Qualification;
+---------+--------------+------+-----+---------+-------+
| Field   | Type         | Null | Key | Default | Extra |
+---------+--------------+------+-----+---------+-------+
| Q_id    | varchar(10)  | NO   | PRI | NULL    |       |
| Q_value | varchar(50)  | NO   |     | NULL    |       |
| DESC    | varchar(200) | NO   |     | NULL    |       |
+---------+--------------+------+-----+---------+-------+

 */
require_once("Connection.php");
class Qualification {
    public $Q_id;
    public $Q_value;
    public $Description;
    public $Error;
    public function getAllQualifications(){
        $query="select * from Qualification";
        $result=Connection::connect($query);
        $subss=$this->fillData($result);
        return $subss;
    }
    public function fillData($result){
        $subs;
        while($row=mysql_fetch_array($result)){
            $que=new Qualification();
            $quno=$row['Q_id'];
            $que->Q_id=$quno;
            $que->Q_value=$row['Q_value'];
            $que->Description=$row['DESC'];
            $subs[$quno]=$que;
        }
        return $subs;
    }
    public function addNewQualification(){
        if(!($this->qualificationExist())){
        $query="insert into Qualification values('$this->Q_id','$this->Q_value','$this->Description')";
        $result=Connection::connect($query);
        }else{
            $this->Error="Id duplicate Error";
        }
    }
    public function qualificationExist(){
        $query="select * from Qualification where Q_id='$this->Q_id'";
        $result=Connection::connect($query);
        $subs=$this->fillData($result);
        if(count($subs)!=0){
            return $subs;
        }else{
            return false;
        }
    }
}
?>
