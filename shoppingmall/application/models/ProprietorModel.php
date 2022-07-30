<?php
class ProprietorModel extends CI_Model {

    public function Login($proprietor_id,$proprietor_pin)
    {
        $query = $this->db->query("SELECT * FROM proprietor where proprietorId = '$proprietor_id' AND proprietorPin = '$proprietor_pin' ");
        return $query->row();
    }

    public function getMallDetails(){
        $query = $this->db->query("SELECT * FROM shoppingmalldetails smd LEFT JOIN mallmanager m on m.mallId = smd.shoppingMallId ");
        return $query->result();
    }

    public function getManagerDetails(){
        $query = $this->db->query("SELECT * FROM managerdetails LEFT JOIN mallmanager mm  on mm.mallManager = managerdetails.managerId ");
        return $query->result();
    }

    public function addShoppingMall($shoppingMallName,$shoppingMallAddress,$shoppingMallMobile){
        $query = $this->db->query("INSERT INTO shoppingmalldetails ( shoppingMallId, shoppingMallName, shoppingMallAddress, shoppingMallMobile) VALUES (0,'$shoppingMallName','$shoppingMallAddress','$shoppingMallMobile') ");
    }

    public function addManager($managerId,$managerName,$managerMobile,$managerPassword,$managerSalary){
        $query = $this->db->query("INSERT INTO managerdetails (managerId, managerName, managerMobile, managerPassword, managerSalary ) VALUES ('$managerId','$managerName','$managerMobile','$managerPassword',$managerSalary) ");
    }
       

}


