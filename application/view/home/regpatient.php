<?php
 $msg = new \Mini\Libs\FlashMessages();
 use Mini\Model\Lend;
 

?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="background-color:white; margin-top:10px; padding-top:20px;">
            <?php $msg->display();?>
            <h3> Patient Registration</h3>
            <hr>
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" class="" role="form" enctype="multipart/form-data">
                   
                  
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="" for="">Date Registered </label>
                            <input type="text" class="form-control"  name="date" value="<?php echo date("d/m/Y")?>">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="" for=""> ID Number</label>
                            <input type="text" class="form-control" value="<?php echo rand(9873,10998)?>" name="idNumber">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="" for="">Surname</label>
                            <input type="text" name="surname" class="form-control">
                        </div>
                    </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Other Name</label>
                        <input type="text" class="form-control" name="otherName">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Gender</label>
                        <select name="gender" id="inputgender" class="form-control" required="required">
                            <option value=""></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Blood Group</label>
                        <input type="text" class="form-control" name="bloodGroup">
                    </div>
                </div>
               

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Genotype</label>
                        <input type="text" class="form-control" name="genotype">
                    </div>
                </div>

               

              

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Phone number </label>
                        <input type="text" class="form-control" name="phoneNumber">
                    </div>
                </div>
               


                <div class="form-group">
                    <button type="submit" name="regPatient" class="btn btn-primary btn-block">Submit</button>
                </div>

            </form>

        </div>

    </div>

</div>
