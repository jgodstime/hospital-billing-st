<?php
 $msg = new \Mini\Libs\FlashMessages();
 use Mini\Model\Register;
 

?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="background-color:white; margin-top:10px; padding-top:20px;">
            <?php $msg->display();?>
            <h3> Patient Billing</h3>
            <hr>
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" class="" role="form" enctype="multipart/form-data">
                   
                  
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="" for="">Select Patient</label>
                        <select name="idNumber" id="inputgender" class="form-control" required="required">
                            <option value=""></option>
                            <?php  (new Register())->selectPatient();?>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <h4>Patient Bill Services</h4>
                </div>
                   
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="" for=""> Bed Space Fee</label>
                            <input type="number" class="form-control" value="0" required="required" name="bedSpaceFee">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="" for=""> Blood Transfusion </label>
                            <input type="number" class="form-control" value="0" required="required" name="bloodTransfusion">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="" for=""> Lab Test Fee </label>
                            <input type="number" class="form-control" value="0" required="required" name="labTestFee">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="" for=""> Sugery Fee </label>
                            <input type="number" class="form-control" value="0" required="required" name="sugeryFee">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="" for=""> Drugs Fee </label>
                            <input type="number" class="form-control" value="0" required="required" name="drugFee">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="" for=""> X-Ray Fee </label>
                            <input type="number" class="form-control" value="0" required="required" name="xRayFee">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="" for=""> Medical Supplies Fee </label>
                            <input type="number" class="form-control" value="0" required="required" name="medicalSuppliesFee">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="" for=""> Rehabilitation Fee </label>
                            <input type="number" class="form-control" value="0" required="required" name="rehabilitationFee">
                        </div>
                    </div>


                  


                <div class="form-group">
                    <button type="submit" name="billingBtn" class="btn btn-primary btn-block">Submit</button>
                </div>

            </form>

        </div>

    </div>

</div>
