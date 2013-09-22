<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of University
 *
 * @author kanishka
 * mysql> desc University;
+------------+--------------+------+-----+---------+----------------+
| Field      | Type         | Null | Key | Default | Extra          |
+------------+--------------+------+-----+---------+----------------+
| U_id       | int(10)      | NO   | PRI | NULL    | auto_increment |
| U_Name     | varchar(100) | NO   |     | NULL    |                |
| Address    | varchar(100) | NO   |     | NULL    |                |
| Contact_id | varchar(15)  | NO   |     | NULL    |                |
| Status     | varchar(2)   | NO   |     | NULL    |                |
+------------+--------------+------+-----+---------+----------------+
 */
require_once("Connection.php");
class University {
    public $U_id;
    public $U_Name;
    public $Address;
    public $Contact_id;
    public $status;

    public $Error;
    public function getAllUniversities(){
        $query="select * from University where Status='1'";
        $result=Connection::connect($query);
        $subs=$this->fillData($result);
        return $subs;

    }
    public function confirmUniversity(){
        $query="update University set Status='1' where U_id='$this->U_id'";
        $result=Connection::connect($query);
        
    }
    public function deleteUniversity(){
        $query="delete from University where  U_id='$this->U_id'";
        Connection::connect($query);
        
    }
    public function getAllUnconfirmedUniversities(){
        $query="select * from University where Status='0'";
        $result=Connection::connect($query);
        $subs1=$this->fillData($result);
        return $subs1;

    }
    public function fillData($result){
        $subs;
        while($row=mysql_fetch_array($result)){
            $sub=new University();
            $UDI=$row['U_id'];
            $sub->U_id=$UDI;
            $sub->U_Name=$row['U_Name'];
            $sub->Address=$row['Address'];
            $sub->Contact_id=$row['Contact_id'];
            $sub->status=$row['Status'];
            $subs[$UDI]=$sub;
        }
        if(count($subs)!=0){
            return $subs;
        }else{
            return false;
        }
    }
    public function universityExist($U_id){
        $query="select * from University where U_id='$this->U_id'";
        $result=Connection::connect($query);
        $subi=$this->fillData($result);
        return $subi;
    }
    public function saveUniversity(){
        if(!($this->universityExist($U_id))){
            $query="insert into University(U_id,U_Name,Address,Contact_id,Status) values('$this->U_id','$this->U_Name','$this->Address','$this->Contact_id','0')";
            $result=Connection::connect($query);
            return $result;
        }else{

        }

    }
}
?>
