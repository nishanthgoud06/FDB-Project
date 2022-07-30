<?php
class PatronModel extends CI_Model {

    public function Login($patronUserId,$patronPassword){
        $query = $this->db->query("SELECT * FROM Patron where patronUserId = '$patronUserId' AND patronPassword = '$patronPassword' ");
        return $query->row();
    }

    public function getMallsList(){
        $query = $this->db->query("SELECT * from shoppingmalldetails");
        return $query->result();
    }

    public function signUp($patronFirstName,$patronUserId,$patronPassword,$patronContact,$patronLastName){
        $this->db->query("INSERT INTO patron (patronFirstName,patronUserId,patronPassword,patronContact,patronLastName) VALUES ('$patronFirstName','$patronUserId','$patronPassword','$patronContact','$patronLastName')");
    }

    public function getEventsList($mallId){
        $query = $this->db->query("SELECT * FROM mallevent me LEFT JOIN shoppingmalldetails smd on smd.shoppingMallId = me.mallIds WHERE me.mallIds=$mallId");
        return $query->result();
    }

    public function getOutletList($mallId){
        $query = $this->db->query("SELECT * FROM outletdetails where mallId = $mallId ");
        return $query->result();
    }

    public function buy(){
    }

}

