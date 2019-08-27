<?php

namespace Mini\Model;

use Mini\Core\Model;
use PDO;


class Register extends Model
{

    public function getPatientInfo($idNumber){
        $query = $this->db -> prepare("SELECT * FROM patient_tbl WHERE id_number = ? LIMIT 1");
        $query -> execute(array($idNumber));
        $result = $query->fetch();
        return $result;
    }
    public function selectPatient(){
        $query = $this->db -> prepare("SELECT * FROM patient_tbl");
        $query -> execute();
        
        while($row = $query->fetch(PDO::FETCH_ASSOC)){ 
           ?>
                <option value="<?php echo $row['id_number'];?>"><?php echo $row['id_number']. " - ".  $row['surname']." ".$row['other_name'];?></option>
            <?php

        }

    }


    

    public function regBilling($idNumber,$bloodTransfusion,$labTestFee,$sugeryFee,$drugFee,$xRayFee,$medicalSuppliesFee,$rehabilitationFee,$total){
        $queryInsert = $this->db->prepare("INSERT INTO billing_tbl (id,id_number,blood_transfusion,lab_test_fee,surgery_fee,drug_fee,xray_fee,medical_supplies_fee,rehabilitation_fee,total,created_at) VALUES(?,?,?,?,?,?,?,?,?,?,now())");
        $queryInsert->execute(array('',$idNumber,$bloodTransfusion,$labTestFee,$sugeryFee,$drugFee,$xRayFee,$medicalSuppliesFee,$rehabilitationFee,$total));
           
            // print_r($this->db->errorInfo());
    
        if($queryInsert){
            $this->msg->success('Billing registration successful with total of '.$total, $_SERVER['HTTP_REFERER']);
        }else{
            $this->msg->success('Unable to register billing at this time, please try again later.', $_SERVER['HTTP_REFERER']);
        }
    
        }

    public function registerPatient($dateRegistered,$idNumber,$surname,$otherName,$gender,$bloodGroup,$genotype,$phoneNumber){
    $queryInsert = $this->db->prepare("INSERT INTO patient_tbl (id,date_registered,id_number,surname,other_name,gender,blood_group,genotype,phone_number) VALUES(?,?,?,?,?,?,?,?,?)");
    $queryInsert->execute(array('',$dateRegistered,$idNumber,$surname,$otherName,$gender,$bloodGroup,$genotype,$phoneNumber));
       
        // print_r($this->db->errorInfo());

    if($queryInsert){
        $this->msg->success('Patient registration successful with ID number of '.$idNumber, $_SERVER['HTTP_REFERER']);
    }else{
        $this->msg->success('Unable to register patient at this time, please try again later.', $_SERVER['HTTP_REFERER']);
    }

    }




    public function patientReport(){
        $query = $this->db -> prepare("SELECT * FROM  patient_tbl ORDER BY id DESC");
        $query->execute();
        if($query->rowCount()>0){
    
     
    ?>
    <h2 class=""> Patient Report</h2>
    <div class="table-responsive">
    
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Date Registered</th>
                    <th>ID Number</th>
                    <th>Surname</th>
                    <th>Other Names</th>
                    <th>Gender</th>
                    <th>Blood Group</th>
                    <th>Genotype</th>
                    <th>Phone Number</th>
                  

                </tr>
            </thead>
            <?php
            
            while($row = $query->fetch(PDO::FETCH_ASSOC)){ 

                ?>
    
            <tr>
                <td><?php echo $row['date_registered'];?></td>
                <td> <?php echo $row['id_number'];?> </td>
                <td><?php echo $row['surname'];?></td>
               
                <td><?php echo $row['other_name'] ;?> </td>
                <td><?php echo $row['gender'] ;?> </td>

                <td><?php echo $row['blood_group'] ;?> </td>
                <td><?php echo $row['genotype'] ;?> </td>
                <td><?php echo $row['phone_number'] ;?> </td>
                
            </tr>
    
            <?php
             }    
            ?>
        </table>
    </div>
    <?php
        }else{
            echo '<div>
                <a class="list-group-item">No Record Found.</a>
            </div>';	
        }			
    
    }
   

    public function billingReport(){
        $query = $this->db ->prepare("SELECT * FROM  billing_tbl ORDER BY id DESC");
        $query->execute();
        if($query->rowCount()>0){
    
     
    ?><h2>Billing Report</h2>
    <div class="table-responsive">
    
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Patientce Name</th>
                    <th>Id Number</th>
                    <th>Bed space fee</th>
                    <th>Blood transfusion</th>
                    <th>Lab test fee</th>
                    <th>Surgery fee</th>
                    <th>Drugs fee</th>
                    <th>Xray fee</th>
                    <th>Medica supplies fee</th>
                    <th>Rehabiitation fee</th>
                    <th>Total fee</th>
                
                  

                </tr>
            </thead>
            <?php
            
            while($row = $query->fetch(PDO::FETCH_ASSOC)){ 

                ?>
    
            <tr>
        
                <td><?php echo $this->getPatientInfo($row['id_number'])->surname." ".$this->getPatientInfo($row['id_number'])->other_name;?></td>
                <td> <?php echo $row['id_number'];?> </td>
                <td><?php echo $row['blood_transfusion'];?></td>
                <td><?php echo $row['lab_test_fee'];?></td>
                <td><?php echo $row['surgery_fee'];?></td>
                <td><?php echo $row['drug_fee'];?></td>
                <td><?php echo $row['xray_fee'];?> </td>
                <td><?php echo $row['medical_supplies_fee'];?> </td>
                <td><?php echo $row['rehabilitation_fee'];?> </td>
                <td><?php echo $row['total'];?> </td>
                <td><?php echo $row['created_at'];?> </td>
                
            </tr>
    
            <?php
             }    
            ?>
        </table>
    </div>
    <?php
        }else{
            echo '<div>
                <a class="list-group-item">No Record Found.</a>
            </div>';	
        }			
    
    }
   

    



}
