<?php

class VoguePay extends ApiClass {

    public function __construct($host, $user, $pass, $db) {
        parent::__construct($host, $user, $pass, $db);
    }

    public function install() {
        $dbQuery = "CREATE DATABASE voguepay;
        USE voguepay;
        CREATE TABLE IF NOT EXISTS vogue_pay(id INT(9)AUTO_INCREMENT NOT NULL, v_merchant_id VARCHAR(255), merchant_ref VARCHAR(255), total INT(9), others TEXT, PRIMARY KEY (id));";
        $this->dbprocess($dbQuery); //install the database file
    }

    public function pay() {
        $allPostedData = array(); //empty array created
        //listen for the payment request using the merchant id as the reference point
        if (isset($_POST['v_merchant_id'])) {
            $allPostedData = $_POST;
            $v_merchant_id = $allPostedData['v_merchant_id'];
            unset($allPostedData['v_merchant_id']);
            $merchant_ref = $allPostedData['merchant_ref'];
            unset($allPostedData['merchant_ref']);
            $total = $allPostedData['total'];
            unset($allPostedData['total']);
            $keysVal = $this->jsonReply($allPostedData);
            $insertQuery = "INSERT INTO vogue_pay(v_merchant_id, merchant_ref, total, others) VALUES('$v_merchant_id','$merchant_ref','$total','$keysVal')";
            echo '<br/>this is the query <br/>'.$keysVal;
            $this->dbprocess($insertQuery);
            $this->jsonReply($_POST);
        }
    }

    public function confirmPayment() {
        if (isset($_POST['trans_id'])) {
            $id = $this->db->escapeString($trans_id);
            //get all the list of order being made on this site
            $orderQuery = "SELECT * FROM `voguepay` WHERE transaction_id ='$id' LIMIT 1";
            $orderResult = $this->db->fetchValues($orderQuery);
            //$result = $this->getOrderDetail($id);
            $arrResult = array();
            foreach ($orderResult as $row) {
                $arrResult["total"] = $row["price"];
                $arrResult["email"] = $row["email"];
                $arrResult["transaction_id"] = $row["transaction_id"];
            }
            $jsonResult = $this->jsonReply($arrResult);
            return $jsonResult;
        }
    }

}
