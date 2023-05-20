<?php
require_once "../controllers/accounts.controller.php";
require_once "../models/accounts.model.php";
class verifyPassword{
    public $accID;
    public $accPassword;

    public function ajaxVerfiyPassword(){
      $accID = $this->accID;
      $accPassword = $this->accPassword;
      $answer = (new ControllerAccounts)->ctrVerifyPassword($accID, $accPassword);
      echo json_encode($answer);
    }
}
 

$verifyPassword = new verifyPassword();
$verifyPassword -> accID = $_POST["accID"];
$verifyPassword -> accPassword = $_POST["password"];


$verifyPassword -> ajaxVerfiyPassword();


?>