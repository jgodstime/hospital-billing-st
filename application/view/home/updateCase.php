<?php
 $msg = new \Mini\Libs\FlashMessages();
 use Mini\Model\Register;
 if(!isset($_GET['caseId'])){
    ?>
        <div class="container">
            <div class="row">
                <?php
                   (new Register())->caseReportUpdate() 
                ?>
            </div>
        </div>
<?php
 }else{
    
    $case = (new Register())->getCaseInfo($_GET['caseId']);

  

?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="background-color:white; margin-top:10px; padding-top:20px;">
            <?php $msg->display();?>
            <h3> Update Case</h3>
            <hr>
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" class="" role="form" enctype="multipart/form-data">
                   
                  
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="" for="">Date Registered </label>
                            <input type="text" class="form-control"  name="date" value="<?php echo $case->date_registered?>">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="" for="">Case ID </label>
                            <input type="text" class="form-control" disabled value="<?php echo $case->case_id?>" >
                            <input type="hidden" class="form-control"  value="<?php echo $case->case_id?>" name="caseId">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="" for="">Name of lawyer</label>
                            <input type="text" name="nameOfLawyer" value="<?php echo $case->name_of_lawyer?>" class="form-control">
                        </div>
                    </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Name of judge</label>
                        <input type="text" class="form-control"  value="<?php echo $case->name_of_judge?>" name="nameOfJudge">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="" for="">Case Brief</label>
                        <input type="text" class="form-control"  value="<?php echo $case->case_brief?>" name="caseBrief">
                    </div>
                </div>
                <div class="col-md-12">
                    <h3>Plaintiff Details</h3>
                </div>
                

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Surname of plaintiff</label>
                        <input type="text" class="form-control" name="surnameOfPlaintiff"  value="<?php echo $case->surname_of_plaintiff?>">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Other names of plaintiff</label>
                        <input type="text" class="form-control" name="othernameOfPlaintiff"  value="<?php echo $case->other_name_of_plaintiff?>">
                    </div>
                </div>
               


                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Gender of plaintiff</label>
                        <select name="genderOfPlaintiff" id="inputgender" class="form-control" required="required">
                            <option  value="<?php echo $case->gender_of_plaintiff?>"><?php echo $case->gender_of_plaintiff?></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Phone number of plaintiff</label>
                        <input type="text" class="form-control" name="phoneNumberOfPlaintiff" value="<?php echo $case->phone_of_plaintiff?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Address of plaintiff</label>
                        <input type="text" class="form-control" name="addressOfPlaintiff"value="<?php echo $case->address_of_plaintiff?>" >
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Marital Status of plaintiff</label>
                        <select name="maritalStatusOfPlaintiff" id="inputgender" class="form-control" required="required">
                        <option  value="<?php echo $case->marital_status_of_plaintiff?>"><?php echo $case->marital_status_of_plaintiff?></option>                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                        </select>
                    </div>
                </div>
               



                <div class="col-md-12">
                    <h3>Defendant Details</h3>
                </div>
                

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Surname of defendant</label>
                        <input type="text" class="form-control" name="surnameOfDefendant" value="<?php echo $case->surname_of_defendant?>">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Other names of defendant</label>
                        <input type="text" class="form-control" name="othernameOfDefendant" value="<?php echo $case->other_name_of_defendant?>">
                    </div>
                </div>
               


                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Gender of defendant</label>
                        <select name="genderOfDefendant" id="inputgender" class="form-control" required="required">
                        <option  value="<?php echo $case->gender_of_defendant?>"><?php echo $case->gender_of_defendant?></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Phone number of defendant</label>
                        <input type="text" class="form-control" name="phoneNumberOfDefendant" value="<?php echo $case->phone_of_defendant?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Address of defendant</label>
                        <input type="text" class="form-control" name="addressOfDefendant" value="<?php echo $case->address_of_defendant?>">
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Marital Status of defendant</label>
                        <select name="maritalStatusOfDefendant" id="inputgender" class="form-control" required="required">
                        <option  value="<?php echo $case->marital_status_of_defendant?>"><?php echo $case->marital_status_of_defendant?></option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                        </select>
                    </div>
                </div>
               

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Verdict of judge</label>
                        <input type="text" name="verdictOfJudge" class="form-control" value="<?php echo $case->verdict_of_judge?>">
                    </div>
                </div>

                
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Case Status</label>
                        <select name="caseStatus" id="inputgender" class="form-control" required="required">
                        <option  value="<?php echo $case->case_status?>"><?php echo $case->case_status?></option>
                            <option value="Pending">Pending</option>
                            <option value="In Progress">In Progress</option>
                            <option value="Closed">Closed</option>
                        </select>
                    </div>
                </div>


                <div class="form-group">
                    <button type="submit" name="updateBtn" class="btn btn-primary btn-block">Update</button>
                </div>

            </form>

        </div>

    </div>

</div>

<?php
 }
 ?>