<?php
 $msg = new \Mini\Libs\FlashMessages();
 use Mini\Model\School;
 $School = (new School);

?>

<div class="container">


    <?php
    if(!isset($_GET['updateId'])){
        ?>
    <div class="col-md-6 col-md-offset-3" style="margin-bottom:25px;">
        <div class="input-group">
            <input type="text" class="form-control" id="productSearch" placeholder="Search By Year Graduated or Registration Number">
            <span class="input-group-btn">
                <button type="button" class="btn btn-default">Go!</button>
            </span>
        </div>
    </div>
    <?php
    }
?>


  <?php
  
    if(!isset($_GET['updateId'])){
        ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div id="productsDisplay"></div>
                </div>
            </div>
        </div>
    </div>

      <?php
    }else {
        $id = $_GET['updateId']
        
        ?>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel">
                    <div class="panel-heading">
                    <?php $msg->display(); ?>
                    <h3>Update Information </h3>
            <hr>
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" class="" role="form" enctype="multipart/form-data">
                <div class="col-md-12">
                   
                    <div class="col-md-6">
                            <div class="form-group">
                                <img class="img-thumbnail" style="width:160px; height:140px;" src="<?php echo URL.PASSPORT_IMAGE.$School-> getStdInfo($id)->passport;?>" />

                                <!-- <input type="file" name="file" class="form-controlg" onchange="previewimage(event)"> -->
                            </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="" for="">Surname </label>
                            <input type="text" class="form-control" placeholder="Enter Surname" name="surName" value="<?php echo $School-> getStdInfo($id)->surname;?>">
                        </div>
                        <div class="form-group">
                            <label class="" for="">Other Name </label>
                            <input type="text" class="form-control" placeholder="Enter Other Names" name="otherName" value="<?php echo $School-> getStdInfo($id)->othername;?>">
                        </div>
                    </div>

                
                </div>
               


              
               

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Registration Number</label>
                        <input type="text" class="form-control" name="regNumber" value="<?php echo $School-> getStdInfo($id)->regnumber;?>">
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Gender  </label>

                        <select name="gender" id="inputgender" class="form-control" required="required">
                            <option value="<?php echo $School-> getStdInfo($id)->gender;?>"><?php echo $School-> getStdInfo($id)->gender;?></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Department</label>

                        <select name="dept" id="inputgender" class="form-control" required="required">
                            <option value="<?php echo $School-> getStdInfo($id)->dept;?>"><?php echo $School-> getStdInfo($id)->dept;?></option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Statistics">Statistics</option>
                            <option value="Science Technology">Science Technology</option>
                            <option value="Accountancy">Accountancy</option>
                            <option value="Business Administration">CBusiness Administrationomputer</option>
                            <option value="Office Technology & Management">Office Technology & Management</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Banking and Finance">Banking and Finance</option>
                            <option value="Public Administration">Public Administration</option>
                            <option value="Mass Communication">Mass Communication</option>
                            <option value="Civil Engineering">Civil Engineering</option>
                            <option value="Electrical/ Electronic Engineering">Electrical/ Electronic Engineering</option>
                            <option value="Mechanical Engineering">Mechanical Engineering</option>
                            <option value="Architecture">Architecture</option>
                            <option value="building Technology">building Technology</option>
                            <option value="Estate Managements">Estate Managements</option>
                            <option value="Surveying and Geo-Informatics">Surveying and Geo-Informatics</option>
                            <option value="Quantity Surveying">Quantity Surveying</option>
                            <option value="urban and regional planning">urban and regional planning</option>
                        </select>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Programme </label>

                        <select name="programme" id="inputgender" class="form-control" required="required">
                            <option value="<?php echo $School-> getStdInfo($id)->programme;?>"><?php echo $School-> getStdInfo($id)->programme;?></option>
                            <option value="ND">ND</option>
                            <option value="HND">HND</option>
                        </select>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Session</label>
                        <input type="text" class="form-control" name="session" value="<?php echo $School-> getStdInfo($id)->session;?>">
                    </div>
                </div>

                <div class="col-md-6">

                    <div class="form-group">
                        <label class="" for="">Nationality</label>
                        <input type="text" class="form-control" name="nationality" value="<?php echo $School-> getStdInfo($id)->nationality;?>">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">State</label>
                        <input type="text" name="state" class="form-control" value="<?php echo $School-> getStdInfo($id)->state;?>">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Local Government Area</label>
                        <input type="text" name="lga" class="form-control" value="<?php echo $School-> getStdInfo($id)->lga;?>">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Phone Number</label>
                        <input type="text" name="phoneNumber" class="form-control" value="<?php echo $School-> getStdInfo($id)->phonenumber;?>">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Year of Graduation</label>
                        <input type="text" name="yearGraduated" class="form-control" value="<?php echo $School-> getStdInfo($id)->yeargraduated;?>">
                    </div>
                </div>




                <div class="col-md-6 ">
                    <div class="form-group">
                        <label class="" for="">Result Obtained </label>

                        <select name="resultObtained" id="inputgender" class="form-control" required="required">
                            <option value="<?php echo $School-> getStdInfo($id)->resultobtained;?>"><?php echo $School-> getStdInfo($id)->resultobtained;?></option>
                            <option value="Pass">Pass</option>
                            <option value="Lower Credit">Lower Credit</option>
                            <option value="Upper Credit">Upper Credit</option>
                            <option value="Distinction">Distinction</option>
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
        </div>
    
          <?php  
    }
?>



</div>

<script type='text/javascript' src='<?php echo URL; ?>js/search.js'></script>