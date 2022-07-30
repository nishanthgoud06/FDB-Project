<?php
class ManagerModel extends CI_Model {
    public function Login($managerId,$managerPassword)
    {
        $query = $this->db->query("SELECT * FROM managerdetails WHERE  managerId = '$managerId' AND managerPassword='$managerPassword' ");
        return $query->row();
    }

    public function addEvent($mallEventName,$mallEventDate,$Location){
        $this->db->query("INSERT INTO mallevent (mallEventId,mallEventName,mallEventDate,mallIds) VALUES (0,'$mallEventName','$mallEventDate','$Location')");
    }

    public function getMallsList(){
        $query = $this->db->query("SELECT * from shoppingmalldetails");
        return $query->result();
    }

    public function getAllEvents(){
        $query = $this->db->query("SELECT * FROM mallevent me INNER JOIN shoppingmalldetails sd on sd.shoppingMallId = me.mallIds ");
        return $query->result();
    }

    public function addFoodCourt($foodCourtName,$foodCourtContact,$foodCourtMall)
    {
        $query = $this->db->query("INSERT INTO foodcourt (foodCourtId,foodCourtName,foodCourtContact) VALUES (0,'$foodCourtName','$foodCourtContact')");
        $id = $this->db->insert_id();
        $this->db->query("INSERT INTO mallfoodcourt (mallFoodCourtId,mallId,foodCourtId) VALUES (0,$foodCourtMall,$id)	");
    }

    public function getFoodCourtsByMall($mallId){
        $query = $this->db->query("SELECT * FROM mallfoodcourt mf LEFT JOIN foodcourt fc on fc.foodCourtId = mf.foodCourtId INNER JOIN shoppingmalldetails smd on smd.shoppingMallId = mf.mallId");
        return $query->result();
    }

    public function getManagerMall($managerId){
        $query = $this->db->query("SELECT * FROM mallmanager WHERE mallManager = '$managerId'");
        return $query->row();
    }

    public function getOutletList($mallId){
        $query = $this->db->query("SELECT * FROM outletdetails where mallId = $mallId ");
        return $query->result();
    }

    public function addOutlet($outletName,$mallId){
        $this->db->query("INSERT INTO outletdetails (outletName,mallId) VALUES ('$outletName','$mallId')");
    }

    public function getProducts($outletId){
        $query = $this->db->query("SELECT * FROM outletproducts WHERE outletId = '$outletId'");
        return $query->result();
    }

    public function addProductToOutlet($productName,$productCost,$productQuantity,$outletId,$outletProductDetails){
        $this->db->query("INSERT INTO outletproducts (outletProductId,productName,productCost,productQuantity,outletId,outletProductDetails) VALUES (0,'$productName',$productCost,$productQuantity,$outletId,'$outletProductDetails')");
    }

}

?>


	