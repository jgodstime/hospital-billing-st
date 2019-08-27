<?php
namespace Mini\Controller;

use Mini\Core\View;
use Mini\Model\Register;


class RegisterController
{
    var $View;
    public $msg;
   
    function __construct() {
        $this->View = new View();
        $this->msg = new \Mini\Libs\FlashMessages();
    }


    public function patient()
    {
        if(isset($_POST['regPatient'])){
            $dateRegistered = date("d/m/Y");
            $idNumber = ($_POST['idNumber']);
            $surname = ucwords($_POST['surname']);
            $otherName= ucwords($_POST['otherName']);
            $gender= ($_POST['gender']);
            $bloodGroup = $_POST['bloodGroup'];
            $genotype = ($_POST['genotype']);
            $phoneNumber = ($_POST['phoneNumber']);



            if(empty($idNumber)){
                $this->msg->error('ID number is required.');
            }if(empty($surname)){
                $this->msg->error('Surname is required.');
            }if(empty($otherName)){
                $this->msg->error('Other names is required.');
            }if(empty($gender)){
                $this->msg->error('Gender is required.');
            }if(empty($bloodGroup)){
                $this->msg->error('Blood group is required.');
            }if(empty($genotype)){
                $this->msg->error('Genotype is required.');
            }if(empty($phoneNumber)){
                $this->msg->error('Phone Number is required.');
            }
            
         
           
            if ($this->msg->hasErrors()){
                header('location:' . $_SERVER['HTTP_REFERER']);
                die();
            }else{
                
                (new Register())->registerPatient($dateRegistered,$idNumber,$surname,$otherName,$gender,$bloodGroup,$genotype,$phoneNumber);
            }

        }
            // html data
            $data["title"] = "Register Patient"; /* for <title></title> inside header.php in this case */
            // load views
            $this->View->render('home/regpatient', $data);
    }

    public function report()
    {
      
            // html data
            $data["title"] = "Report"; /* for <title></title> inside header.php in this case */
            // load views
            $this->View->render('home/allReport', $data);
    }

    public function billing()
    {

        if(isset($_POST['billingBtn'])){
            $idNumber = ($_POST['idNumber']);
            
            $bedSpaceFee = $_POST['bedSpaceFee'];
            $bloodTransfusion = ($_POST['bloodTransfusion']);
            $labTestFee = ($_POST['labTestFee']);
            $sugeryFee = ($_POST['sugeryFee']);
            $drugFee= $_POST['drugFee'];
            $xRayFee = ($_POST['xRayFee']);
            $medicalSuppliesFee = ($_POST['medicalSuppliesFee']);
            $rehabilitationFee = ($_POST['rehabilitationFee']);

            $total  = $bedSpaceFee + $bloodTransfusion + $labTestFee + $sugeryFee + $drugFee + $xRayFee +$medicalSuppliesFee + $rehabilitationFee;


/*
            if(empty($idNumber)){
                $this->msg->error('Patient Name/ID is required.');
            }if(empty($bloodTransfusion)){
                $this->msg->error('Blood tranfusion is required.');
            }if(empty($labTestFee)){
                $this->msg->error('Lab Test fee is required.');
            }if(empty($sugeryFee)){
                $this->msg->error('Sugery fee is required.');
            }if(empty($drugFee)){
                $this->msg->error('Drug fee is required.');
            }if(empty($xRayFee)){
                $this->msg->error('Xray fee is required.');
            }if(empty($medicalSuppliesFee)){
                $this->msg->error('Medical supply fee is required.');
            }if(empty($rehabilitationFee)){
                $this->msg->error('Rehabilitation fee is required.');
            }

            */
            
           
            if ($this->msg->hasErrors()){
                header('location:' . $_SERVER['HTTP_REFERER']);
                die();
            }else{
                
                (new Register())->regBilling($idNumber,$bloodTransfusion,$labTestFee,$sugeryFee,$drugFee,$xRayFee,$medicalSuppliesFee,$rehabilitationFee,$total);
            }

        }

        $data["title"] = "Billing "; /* for <title></title> inside header.php in this case */
            // load views
            $this->View->render('home/billing', $data);
    }

    public function membershipRecord()
    {
        $data["title"] = "Patient Billing"; /* for <title></title> inside header.php in this case */
            // load views
            $this->View->render('home/billing', $data);
    }
   
}
