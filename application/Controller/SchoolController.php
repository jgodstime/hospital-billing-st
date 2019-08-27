<?php
namespace Mini\Controller;

use Mini\Core\View;
use Mini\Model\School;


class SchoolController
{
    var $View;
    public $msg;
   
    function __construct() {
        $this->View = new View();
        $this->msg = new \Mini\Libs\FlashMessages();
    }


    public function index()
    {
        if(isset($_POST['regBtn'])){

           
            $fileName = $_FILES['file']['name'];
            $temporaryFile = $_FILES['file']['tmp_name'];

            $allowed =  array('png','jpeg','jpg','gif');
            $ext = pathinfo($fileName, PATHINFO_EXTENSION);


            $surName = $_POST['surName'];
            $otherName = $_POST['otherName'];

            $regNumber = $_POST['regNumber'];
            $gender = $_POST['gender'];
            $dept = $_POST['dept'];
            $programme = $_POST['programme'];
            $session = $_POST['session'];
            $nationality = $_POST['nationality'];
            $state = $_POST['state'];
            $lga = $_POST['lga'];
            $phoneNumber = $_POST['phoneNumber'];
            $yearGraduated = $_POST['yearGraduated'];
            $resultObtained = $_POST['resultObtained'];
           
            if(empty($fileName)){
                $this->msg->error('Passport is required.');
            }if(!in_array($ext,$allowed)){
                $this->msg->error('The file must be an image.');	
            }if(empty($surName)){
                $this->msg->error('Surname is required.');
            }if(empty($otherName)){
                $this->msg->error('Other names is required.');
            }if(empty($regNumber)){
                $this->msg->error('Registration Number is required.');
            }if(empty($gender)){
                $this->msg->error('Gender is required.');
            }if(empty($dept)){
                $this->msg->error('Department is required.');
            }if(empty($programme)){
                $this->msg->error('Programme is required.');
            }if(empty($session)){
                $this->msg->error('Session is required.');
            }if(empty($nationality)){
                $this->msg->error('Nationality is required.');
            }if(empty($state)){
                $this->msg->error('State is required.');
            }if(empty($lga)){
                $this->msg->error('Local Government is required.');
            }if(empty($phoneNumber)){
                $this->msg->error('Phone Number is required.');
            }if(empty($yearGraduated)){
                $this->msg->error('Year Graduated is required.');
            }if(empty($resultObtained)){
                $this->msg->error('Result Obtained is required.');
            }

            if ($this->msg->hasErrors()){
                header('location:' . $_SERVER['HTTP_REFERER']);
                die();
            }else{
                (new \Mini\Model\School)->register($surName,$otherName,$regNumber,$gender,$dept,$programme,$session,$nationality,$state,$lga,$phoneNumber,$yearGraduated,$resultObtained,$fileName,$temporaryFile);       
            }
        
        
        
            }
        
        
            // html data
            $data["title"] = "Registration Form "; /* for <title></title> inside header.php in this case */
            // load views
            $this->View->render('home/register', $data);
    }

   



   
    

    public function report()
    {

        if(isset($_POST['updateBtn'])){

        //    die(3);
            // $fileName = $_FILES['file']['name'];
            // $temporaryFile = $_FILES['file']['tmp_name'];

            // $allowed =  array('png','jpeg','jpg','gif');
            // $ext = pathinfo($fileName, PATHINFO_EXTENSION);


            $id = $_GET['updateId'];
            $surName = $_POST['surName'];
            $otherName = $_POST['otherName'];

            $regNumber = $_POST['regNumber'];
            $gender = $_POST['gender'];
            $dept = $_POST['dept'];
            $programme = $_POST['programme'];
            $session = $_POST['session'];
            $nationality = $_POST['nationality'];
            $state = $_POST['state'];
            $lga = $_POST['lga'];
            $phoneNumber = $_POST['phoneNumber'];
            $yearGraduated = $_POST['yearGraduated'];
            $resultObtained = $_POST['resultObtained'];
           
            // if(empty($fileName)){
            //     $this->msg->error('Passport is required.');
            // }
            
            // if(!in_array($ext,$allowed)){
            //     $this->msg->error('The file must be an image.');	
            // }
            
            if(empty($surName)){
                $this->msg->error('Surname is required.');
            }if(empty($otherName)){
                $this->msg->error('Other names is required.');
            }if(empty($regNumber)){
                $this->msg->error('Registration Number is required.');
            }if(empty($gender)){
                $this->msg->error('Gender is required.');
            }if(empty($dept)){
                $this->msg->error('Department is required.');
            }if(empty($programme)){
                $this->msg->error('Programme is required.');
            }if(empty($session)){
                $this->msg->error('Session is required.');
            }if(empty($nationality)){
                $this->msg->error('Nationality is required.');
            }if(empty($state)){
                $this->msg->error('State is required.');
            }if(empty($lga)){
                $this->msg->error('Local Government is required.');
            }if(empty($phoneNumber)){
                $this->msg->error('Phone Number is required.');
            }if(empty($yearGraduated)){
                $this->msg->error('Year Graduated is required.');
            }if(empty($resultObtained)){
                $this->msg->error('Result Obtained is required.');
            }

            if ($this->msg->hasErrors()){
                header('location:' . $_SERVER['HTTP_REFERER']);
                die();
            }else{
                (new \Mini\Model\School)->update($surName,$otherName,$regNumber,$gender,$dept,$programme,$session,$nationality,$state,$lga,$phoneNumber,$yearGraduated,$resultObtained,$id);       
            }
        
        
        
            }

       // html data
       $data["title"] = "Record";  /* for <title></title> inside header.php in this case */
       // load views
       $this->View->render('home/record', $data);
    }

    public function ajaxDisplayRecord()
    {
        if(isset($_POST['searchData'])){
             $searchData = trim($_POST['searchData']);
            
            if(empty($searchData)){
                (new School)->registrationRecord();

            }else{

                (new School)->registrationRecordBySearch($searchData);
                
            }
        }
       
    }
   

   
   
}
